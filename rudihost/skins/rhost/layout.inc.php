<?php
/*
./skins/rhost/layout.inc.php
18:54 2008-06-01
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV CLASS="layout">
  <!-- HEADER START -->
  <DIV CLASS="container">
    <DIV CLASS="hdr1-1">
      &#160;
    </DIV>
    <DIV CLASS="hdr1-2">
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/hosting1.png" WIDTH="180" HEIGHT="127" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
      &#160;&#160;&#160;&#160;
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/hosting2.png" WIDTH="180" HEIGHT="127" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
      &#160;&#160;&#160;&#160;
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/hosting3.png" WIDTH="180" HEIGHT="127" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
    </DIV>
  </DIV>
  
  <DIV CLASS="container">
    <DIV CLASS="hdr2-1">
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/logo1.png" WIDTH="262" HEIGHT="29" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
    </DIV>
    <DIV CLASS="hdr2-2">
      <?php createMenu('mm', 0, 1); ?>
    </DIV>
  </DIV>
  
  <DIV CLASS="container">
    <DIV CLASS="hdr3-1">
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/logo2.png" WIDTH="262" HEIGHT="35" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
    </DIV>
    <DIV CLASS="hdr3-2">
      <?php createMenu('oth', 0, 1); ?>
    </DIV>
  </DIV>
  <!-- HEADER END -->
  <!-- CONTENT START -->
  <DIV CLASS="container" STYLE="padding-bottom: 40px;">
    <DIV CLASS="cleft">
      left side content
      <?php adminMenu(); ?>
    </DIV>
    <DIV CLASS="cright">
      <?php showLatestNews(); ?>
    </DIV>
    <DIV CLASS="ccont">
    <?php youAreHere(); ?>
    <?php showContent($rudweb_mnu_id, $rudweb_req_page, $rudweb_cnt_type); ?>
    </DIV>
    <DIV CLASS="clear">
    </DIV>
  </DIV>
  <!-- CONTENT END -->
  <!-- FOOTER START -->
  <DIV CLASS="ftr">
    <DIV CLASS="footer">
    <?php genCopyright(); ?>
    </DIV>
  </DIV>
  <!-- FOOTER END -->
</DIV>

      
      <?php //showCso(); ?>
      
      <?php //createMenu('mm', 1, 1); ?>
      <?php //createMenu('mm', 2, 1); ?>
      <?php //createMenu('mm', 3, 1); ?>
      <?php //createMenu('mm', 4, 1); ?>

      <?php //showStats(5, "unique"); ?>
      <?php //showStats(5, "total"); ?>
      <?php //showStats(5, "online"); ?>
      <?php //showProducts(); ?>
      <?php //showCart(); ?>  
      <?php //showContentPics(); ?>
      <?php //genLangMod(); ?>
      <?php //genUserMod();?>
      
      <?php //showAllTags(); ?>
      <?php //showFeatured(); ?>
        
    <?php //genCopyright(); ?>
    <?php //pageLoadTime(); ?>    
<?php
// DEBUG
//debugOutput("SESSION");
//debugOutput("REQUEST");
//debugOutput("GET");
//debugOutput("POST");
//debugOutput("FILES");
//debugOutput("SERVER");
//debugOutput("CONSTANTS");
//debugOutput("PHPINI");
?>