<?php
/**
 * $Id$
 *
 * Iceget library.
 *
 * Get data from icecast server.
 *
 * @author     Radu Maier <rudisoft@rudisoft.net>
 * @copyright  Copyright (c) 2008 - 2010, RudiSoft.Net
 * @license    http://www.opensource.org/licenses/bsd-license.php
 * @package    RadioApp
 * @subpackage Icecast
 * @version    $Revision$
 * @since      Version 5
 * @access     public
 * @filesource
 */

/**
 * Security check.
 */
if ( !defined( '_RUDWEB' ) )
{
    /**
     * Stop script execution.
     */
    exit;
}

class Iceget
{
    private $_mUrl = NULL;

    private $_mStats = NULL;

    /**
     * Get statistics.
     *
     * @param string $station
     *
     * @return array
     */
    public function GetStats( $station )
    {
        if ( !$this->_mStats )
        {
            $this->_FetchStats();
        }
        if ( !array_key_exists( $station, $this->_mStats ) )
        {
            return array( 'onair' => 'off', 'title' => 'n/a' );
        }
        return $this->_mStats[$station];
    }

    /**
     * Set server URL.
     *
     * @param stringe $url
     *
     * @return bool
     */
    public function SetUrl( $url )
    {
        $this->_mUrl = $url;

        return TRUE;
    }

    /**
     * Fetch statistics from server.
     *
     * @return bool
     */
    private function _FetchStats()
    {
        $handle = $this->_Wget( $this->_mUrl );
        $string =  stream_get_contents( $handle );

        $object = simplexml_load_string( $string );
        $data = $this->_ParseConfigObject( $object );

        $stats = array();

        if ( array_key_exists( 'station', $data ) )
        {
            if ( array_key_exists( 0, $data['station'] ) )
            {
                foreach ( $data['station'] as $id => $station )
                {
                    $stats[$station['mount']] = $station;
                }
            }
            else
            {
                $stats[$data['station']['mount']] = $data['station'];
            }
        }

        $this->_mStats = $stats;

        return TRUE;
    }

    /**
     * Open URL handle.
     *
     * @param string $url url
     * @param array $p post data
     */
    private function _Wget($url, $p=array())
    {
        /**
         * Initialize headers.
         */
        $h = array();
        /**
         * Set user agent header.
         */
        $h['User-Agent'] = 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 GTB6 (.NET CLR 3.5.30729)';
        /**
         * Set referer header.
         */
        $h['Referer'] = 'http://www.google.com';
        /**
         * Set accept encoding header.
         */
        $h['Accept-Encoding'] = 'x-compress; x-zip';
        /**
         * Parse url.
         */
        preg_match("~([a-z]*://)?([^:^/]*)(:([0-9]{1,5}))?(/.*)?~i", $url, $matches);
        /**
         * Get protocol.
         */
        $protocol = $matches[1];
        /**
         * Get server.
         */
        $server = $matches[2];
        /**
         * Get port.
         */
        $port = ($matches[4] != '') ? $matches[4] : '80';
        /**
         * Get path.
         */
        $path = ($matches[5] != '') ? $matches[5] : '/';
        /**
         * Initialize socket.
         */
        $socket = false;
        /**
         * Open socket.
         */
        $socket = fsockopen($server, $port);
        /**
         * Check if socket was opened successfully.
         */
        if (!$socket)
        {
            /**
             * Return result.
             */
            return FALSE;
        }
        /**
         * Set host header.
         */
        $h['Host'] = $server;
        /**
         * Set request.
         */
        $request = (count($p) > 0) ? "POST $path HTTP/1.0\r\n" : "GET $path HTTP/1.0\r\n";
        /**
         * Send request.
         */
        fwrite($socket, $request);
        /**
         * Check if we have post data.
         */
        if (count($p) > 0)
        {
            /**
             * Init post string data.
             */
            $ps = array();
            /**
             * Parse post array.
             */
            foreach ($p as $key => $value)
            {
                /**
                 * Set post string data.
                 */
                $ps[] = "$key=$value";
            }
            /**
             * Set post request string.
             */
            $post = implode('&', $ps);
            /**
             * Set content type header.
             */
            $h['Content-Type'] = 'application/x-www-form-urlencoded';
            /**
             * Set content length header.
             */
            $h['Content-Length'] = strlen($post);
        }
        /**
         * Parse header data.
         */
        foreach ($h as $key => $value)
        {
            /**
             * Send headers.
             */
            fwrite($socket, "$key: $value\r\n");
        }
        /**
         * Send newline.
         */
        fwrite($socket, "\r\n");
        /**
         * Check if he have post data.
         */
        if (count($p) > 0)
        {
            /**
             * Send post request string.
             */
            fwrite($socket, $post."\r\n");
        }
        /**
         * Get response.
         */
        $line = fgets($socket, 1000);
        /**
         * Get status.
         */
        $status = substr($line,9,3);
        /**
         * ???
         */
        while (trim($line = fgets($socket, 1000)) != ""){
            /**
             * ???
             */
            if ($status=="401" && strpos($line,"WWW-Authenticate: Basic realm=\"")===0) {
                /**
                 * Close socket
                 */
                fclose($socket);
                /**
                 * Return result.
                 */
                return FALSE;
            }
        }
        /**
         * Return result.
         */
        return $socket;
    }

    /**
     * Parse configuration object.
     *
     * Borrowed from RudWEb V5
     *
     * @param mixed $cfgData configuration data
     */
    private function _ParseConfigObject( $cfgData )
    {
        /**
         * Check if input is an object.
         */
        if ( is_object( $cfgData ) )
        {
            /**
             * Remove comments.
             */
            unset( $cfgData->comment );

            /**
             * Transform object into an array.
             *
             * @var array
             */
            $cfgData = get_object_vars( $cfgData );
        }

        /**
         * Check is input is an array.
         */
        if ( is_array( $cfgData ) )
        {
            /**
             * Iterate through it as it may contain further objects.
             */
            return array_map( array( $this, __FUNCTION__ ), $cfgData );
        }

        /**
         * Trim values in the configuration array.
         *
         * @var array
         */
        $cfgData = $this->_TrimConfigData( $cfgData );

        /**
         * Return parsed object.
         */
        return $cfgData;
    }

    /**
     * Trim values in the configuration array.
     *
     * Borrowed from RudWEb V5
     *
     * @param mixed $cfgData configuration data
     */
    private function _TrimConfigData( $cfgData )
    {
        /**
         * If data is not an array, trim it.
         * Otherwise call teh method recursively.
         */
        return ( is_array( $cfgData ) ) ? array_map( array( $this, __FUNCTION__ ), $cfgData ) : trim( $cfgData );
    }
}
?>