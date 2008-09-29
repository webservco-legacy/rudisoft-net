<td style="text-align: left;" colspan="21">
<font size="-1"><span style="font-family: Helvetica,Arial,sans-serif;">
<form method=post action="http://securesignup.net/register.php">
<table>
<tr><th style="text-align: left;">Username<td><input type=text name=username size=20 value="<?PHP if (isset($_GET['username'])) { echo $_GET['username']; }?>">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Password<td><input type=password name=password size=20>
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Email Address<td><input type=text name=email size=20 value="<?PHP if (isset($_GET['email'])) { echo $_GET['email']; }?>">

<br><br>
<tr><th style="text-align: left;">Site Category<td><select size="1" name="website_category">
<option>Choose from Below</option>
<option>Personal</option>
<option>Business</option>
<option>Hobby</option>
<option>Forum</option>
<option>Adult</option>
<option>Dating</option>
<option>Software / Download</option>
</select>
</td>

<tr><th style="text-align: left;"><td>
<br>
</td>


<tr><th style="text-align: left;">Site Language<td>

<select size="1" name="website_language">
<option>Choose from Below</option>
<option>English</option>
<option>Non-English</option>
</select>
</td>

<tr><th>&nbsp;<td>&nbsp;
<?PHP 
$id = md5(rand(6000,99999999999999991000));
?>
<input type=hidden name=id value="<?PHP echo $id; ?>">
<tr><th style="text-align: left;">Security Code<td><img src="http://byet.org/image.php?id=<?PHP echo $id; ?>">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Enter Security Code<td><input type=text name=number size=20>
<tr><th>&nbsp;<td>&nbsp;

<tr><th colspan=2><input type=submit value="Register" name=submit>



</table>
</form>

			
</span>

<br style="font-family: Helvetica,Arial,sans-serif;">
      </font>
      <br style="font-family: Helvetica,Arial,sans-serif;">
      </span></font><font size="-1"><span style="font-family: Helvetica,Arial,sans-serif;">By signing up for <? echo "$yourdomain" ;?> free hosting, you accept and agree to our <a href="terms.php">Terms of Service</a></span></font>
      
  

      
      </td>



