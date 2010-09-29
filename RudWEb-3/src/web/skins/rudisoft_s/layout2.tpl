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
<?xml version="1.0" encoding="utf-8" standalone="no"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$usr_lang}" lang="{$usr_lang}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="content-language" content="{$usr_lang}" />
  <link rel="icon" type="image/ico" href="{$app_skin_url}graphics/favicon.ico" />
  <link rel="shortcut icon" type="image/ico" href="{$app_skin_url}graphics/favicon.ico" />
  <title>{$title} .:. {$smarty.const._APP_NAME}</title>
  <meta name="title" content="{$title}" />
  <meta name="subject" content="{$meta.subject}" />
  <meta name="description" content="{$meta.description}" />
  <meta name="keywords" content="{$meta.keywords}" />
  <meta name="copyright" content="{$meta.copyright}" />
  <meta name="designer" content="{$meta.designer}" />
  <meta name="publisher" content="{$meta.publisher}" />
  <meta name="author" content="{$meta.author}" />
  <meta name="rating" content="General" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="Index, Follow" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <link rel="stylesheet" type="text/css" charset="utf-8" href="{$app_skin_url}styles/style.css" />
  <script type="text/javascript" src="{$app_skin_url}scripts/script.js"></script>
  {$ga}
</head>
<body>
  <div id="layout">
    <div id="left">
      {$menu}
      <div id="cnt1">
        <div id="cnt1_sp1">&#160;</div>
        <div id="cnt1_sp2">&#160;</div>
        <div id="cnt1_left">&#160;</div>
        <div id="cnt1_content">
        <h1>{$title}</h1>
        {$content}
        </div>
        <div id="cnt1_right">
        <div id="scroll_sp">&#160;</div>
        </div>
      </div>
    </div>
    <div id="right">
      <div id="cnt2">
        <div id="cnt2_sp">&#160;</div>
        <div id="cnt2_left">&#160;</div>
        <div id="cnt2_content">
        <img class="picture" src="{$app_skin_url}graphics/img2.jpg" alt="{$smarty.const._APP_NAME}" longdesc="{$smarty.const._APP_NAME}" />
        </div>
        <div id="cnt2_right">&#160;</div>
      </div>
      {$footer}
    </div>
  </div>
</body>
</html>