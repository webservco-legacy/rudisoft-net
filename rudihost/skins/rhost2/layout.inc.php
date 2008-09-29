<?php
/*
./skins/rhost2/layout.inc.php
14:26 2008-06-08
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV CLASS="layout">
  <!-- HEADER START -->
  <DIV CLASS="container">
    <DIV CLASS="hdr1-1">
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/logo1.png" WIDTH="264" HEIGHT="127" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
    </DIV>
    <DIV CLASS="hdr1-2">
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>page/signup">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/hosting1.png" WIDTH="180" HEIGHT="127" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
      &#160;&#160;&#160;&#160;
      <A HREF="https://securesignup.net/portal/aff.php?aff=1164" TARGET="_blank">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/hosting2.png" WIDTH="180" HEIGHT="127" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
      &#160;&#160;&#160;&#160;
      <A HREF="https://securesignup.net/portal/aff.php?aff=1164" TARGET="_blank">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/hosting3.png" WIDTH="180" HEIGHT="127" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
    </DIV>
  </DIV>
  
  <DIV CLASS="container">
    <DIV CLASS="hdr2">
      <?php createMenu('mm', 0, 1); ?>
    </DIV>
    <DIV CLASS="hdr3">
      <?php //createMenu('oth', 0, 1); ?>
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/home.png" WIDTH="16" HEIGHT="11" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>content/6_frequently_asked_questions">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/faq.png" WIDTH="16" HEIGHT="11" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
      <A HREF="<?php echo _RUDWEB_SITE_URL; ?>content/3_contact">
      <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/contact.png" WIDTH="16" HEIGHT="11" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
      </A>
    </DIV>
  </DIV>
  <!-- HEADER END -->
  <!-- CONTENT START -->
  <DIV CLASS="container" STYLE="padding-bottom: 40px;">
    <DIV CLASS="cleft">
    <?php if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 3) {
      adminMenu(); 
      genAdminMod();
    } 
    else { 
    ?>
    <DIV CLASS="cntlft">
<H2>FREE HOSTING!</H2>
<BR>
Welcome to our free hosting service!<BR>
We are providing professional, fast PHP & MySQL hosting, powered by Byethost Internet's world-famous clustered hosting technology.<BR>
We invite you to sign up for a free hosting account and get your own website on the internet in seconds!<BR>
Accounts are activated instantly so you don't need to wait around for an account.
      </DIV>
    <?php } ?>
      
      <?php //genLangMod(); ?>
    </DIV>
    <DIV CLASS="cright">
      <?php showLatestNews(); ?>
      <?php showAllTags(); ?>
      <BR><BR>
<script type="text/javascript"><!--
google_ad_client = "pub-2420461838031851";
/* RudiSoft.Net Ad 2 */
google_ad_slot = "3409558688";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

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
      <?php //genUserMod();?>
      <?php //showFeatured(); ?>
        
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
<!-- Start of StatCounter Code -->
<script type="text/javascript">
sc_project=3777337; 
sc_invisible=1; 
sc_partition=40; 
sc_security="51fe7860"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a href="http://www.statcounter.com/" target="_blank"><img class="statcounter" src="http://c41.statcounter.com/3777337/0/51fe7860/1/" alt="hit counter script" ></a></div></noscript>
<!-- End of StatCounter Code -->