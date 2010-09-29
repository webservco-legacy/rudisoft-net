{* usr_lang, app_skin_url *}
{if $smarty.const._APP_CFG_SESSIONS}
{assign var="app_pre" value=$smarty.const._APP_PRE}
{assign var="usr_lang_suf" value="_usr_lang"}
{assign var="app_lang" value=$app_pre$usr_lang_suf}
{assign var="usr_lang" value=$smarty.session.$app_lang}
{assign var="app_skin_suf" value="_skin_url"}
{assign var="app_skin_ses" value=$app_pre$app_skin_suf}
{assign var="app_skin_url" value=$smarty.session.$app_skin_ses}
{else}
{assign var="app_skin_url" value=$smarty.const._APP_SKIN_URL}
{assign var="usr_lang" value=$smarty.const._APP_LANG}
{/if}
{if $dir != ''}
{assign var="dirsep" value="/"}
{assign var="app_skin_url" value=$app_skin_url$dir$dirsep}
{/if}
      <div id="header">
        <div id="logo1">
        <a href="{$smarty.const._APP_WWW}" title="{$smarty.const._APP_NAME}"><img src="{$app_skin_url}graphics/logo1.jpg" alt="{$smarty.const._APP_NAME} Logo" longdesc="{$smarty.const._APP_NAME} Logo" /></a>
        </div>
        <div id="logo2">
        <a href="{$smarty.const._APP_WWW}" title="{$smarty.const._APP_NAME}"><img src="{$app_skin_url}graphics/logo2.jpg" alt="{$smarty.const._APP_NAME} Logo" longdesc="{$smarty.const._APP_NAME} Logo" /></a>
        </div>
      </div>
      <div id="menu1">
        <div id="mnu1"><div id="mnu_1"><a href="{$smarty.const._APP_WWW}" title="Home"><img src="{$app_skin_url}graphics/mnu1.jpg" width="103" height="70" alt="Home" longdesc="Home" /></a></div></div>
        <div id="mnu2"><div id="mnu_2"><a href="{$smarty.const._APP_URL}page/servicii.html" title="Servicii"><img src="{$app_skin_url}graphics/mnu2.jpg" width="103" height="70" alt="Servicii" longdesc="Servicii" /></a></div></div>
        <div id="mnu3"><div id="mnu_3"><a href="{$smarty.const._APP_URL}page/contact.html" title="Contact"><img src="{$app_skin_url}graphics/mnu3.jpg" width="103" height="70" alt="Contact" longdesc="Contact" /></a></div></div>
      </div>