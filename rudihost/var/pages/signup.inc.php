<?php
/*
./var/pages/signup.inc.php
10:09 2008-06-08
*/

if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

$form_username = '';
if(isset($_GET['username'])) {$form_username = rudweb_filter_input($_GET['username']);}
$form_email = '';
if(isset($_GET['email'])) {$form_email = rudweb_filter_input($_GET['email']);}
switch($_SESSION[_RUDWEB_PRE.'usr_lang_index']) {
  case 'en' : {
  $s_title    = 'Sign Up For Free Hosting';
  $s_text1    = 'Fill out the form below and your free hosting account will be created';
  $s_username = 'Username';
  $s_password = 'Password';
  $s_email    = 'Email Address';
  $s_categ    = 'Site Category';
  $s_lang     = 'Site language';
  $s_code     = 'Security Code';
  $s_code2    = 'Enter Security Code';
  $s_register = 'Register';
  $s_text2    = 'By signing up for rudisoft.net free hosting, you accept and agree to our ';
  $s_link_tt  = 'Terms Of Service';
  $s_link_url = '/content/4_terms_of_service';
  break;}
  case 'ro' : {break;}
  default : {break;}
}
?>
<H1><?php echo $s_title; ?></H1>
<BR><BR>
<?php echo $s_text1 ?>
<BR><BR>
<FORM METHOD="post" ACTION="http://securesignup.net/register.php">

<TABLE BORDER="0" CELLPADDING="5" CELLSPACING="0">
<TR>
  <TD><?php echo $s_username;?></TD>
  <TD><INPUT CLASS="forminput" TYPE="text" NAME="username" SIZE="20" MAXLENGTH="50" VALUE="<?php echo $form_username;?>"></TD>
</TR>

<TR>
  <TD><?php echo $s_password;?></TD>
  <TD><INPUT CLASS="forminput" TYPE="password" NAME="password" SIZE="20" MAXLENGTH="50" VALUE=""></TD>
</TR>

<TR>
  <TD><?php echo $s_email;?></TD>
  <TD><INPUT CLASS="forminput" TYPE="text" NAME="email" SIZE="20" MAXLENGTH="50" VALUE="<?php echo $form_email;?>"></TD>
</TR>

<TR>
  <TD><?php echo $s_categ;?></TD>
  <TD>
  <SELECT CLASS="forminput" NAME="website_category">
    <option>Choose from Below</option>
    <option>Personal</option>
    <option>Business</option>
    <option>Hobby</option>
    <option>Forum</option>
    <option>Adult</option>
    <option>Dating</option>
    <option>Software / Download</option>
  </SELECT>
  </TD>
</TR>

<TR>
  <TD><?php echo $s_lang;?></TD>
  <TD>
  <SELECT CLASS="forminput" NAME="website_language">
    <option>Choose from Below</option>
    <option>English</option>
    <option>Non-English</option>
  </SELECT>
  </TD>
</TR>

<?PHP 
$s_id = md5(rand(6000,99999999999999991000));
?>
<TR>
  <TD><?php echo $s_code;?></TD>
  <TD><img src="http://byet.org/image.php?id=<?PHP echo $s_id; ?>"></TD>
</TR>

<TR>
  <TD><?php echo $s_code2;?></TD>
  <TD><INPUT CLASS="forminput" TYPE="text" NAME="number" SIZE="20" MAXLENGTH="50" VALUE=""></TD>
</TR>

<TR>
  <TD COLSPAN="2" STYLE="text-align: center;"><INPUT CLASS="formsubmit" TYPE="submit" VALUE="<?php echo $s_register;?>" NAME="submit"></TD>
</TR>

</TABLE>

</FORM>
<BR><BR>
<?php echo $s_text2;?>
<?php restrictedLocalLink('default', $s_link_tt, $s_link_url, $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], "_self"); ?>
