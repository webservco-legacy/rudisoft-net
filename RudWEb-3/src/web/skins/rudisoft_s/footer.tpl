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
      <div id="menu2">
        <div id="mnu4"><div id="mnu_4"><a href="{$smarty.const._APP_URL}page/software.html" title="Software"><img src="{$app_skin_url}graphics/mnu4.jpg" width="103" height="70" alt="Software" longdesc="Software" /></a></div></div>
        <div id="mnu5"><div id="mnu_5"><a href="{$smarty.const._APP_URL}page/hardware.html" title="Hardware"><img src="{$app_skin_url}graphics/mnu5.jpg" width="103" height="70" alt="Hardware" longdesc="Hardware" /></a></div></div>
        <div id="mnu6"><div id="mnu_6"><a href="{$smarty.const._APP_URL}page/design.html" title="Design"><img src="{$app_skin_url}graphics/mnu6.jpg" width="103" height="70" alt="Design" longdesc="Design" /></a></div></div>
      </div>
      <div id="ftr">
        <div id="ftr1">&#160;</div>
        <div id="ftr2">
          <!--
		  <a href="http://labs.rudisoft.net" title="RudiSoft Labs"><img src="{$app_skin_url}graphics/rudisoft-labs.png" width="80" height="15" border="0" title="RudiSoft Labs" alt="RudiSoft Labs" /></a>
		  -->
          <a href="http://host-tracker.com/website-uptime-stats/870203/lvuc/"><img width="80" height="15" border="0" alt="server monitor" src="http://ext.host-tracker.com/uptime-img/?s=15&amp;t=870203&amp;m=00.99&amp;p=Total&amp;src=lvuc" /></a>
          <a href="http://validator.w3.org/check?uri=referer" title="Valid XHTML 1.0 Transitional"><img src="{$app_skin_url}graphics/-xhtml1.0.png" width="80" height="15" border="0" title="Valid XHTML 1.0 Transitional" alt="Valid XHTML 1.0 Transitional" /></a>
          <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Valid CSS!"><img src="{$app_skin_url}graphics/-css2.1.png" width="80" height="15" border="0" title="Valid CSS!" alt="Valid CSS!" /></a>
        </div>
        <div id="ftr3">Copyright 2009 RudiSoft.Net</div>
      </div>