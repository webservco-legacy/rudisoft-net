<?php
require_once 'cfg.php';

if ( isset( $_POST['request'] ) )
{
	switch( $_POST['request'] )
	{
		case 'page' :
		default:
			
			if ( isset( $_POST['page'] ) && ( in_array( $_POST['page'], $pages ) ) )
			{
				require $cfg['site_path'] . 'tpl/' . $_POST['page'] . '.tpl.php';
				exit();
			}
			break;
	}
}

echo 0;
?>