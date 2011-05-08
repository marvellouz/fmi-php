<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="bg" lang="bg">
  <head>
    <title>{$title}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    {foreach from=$js item=j}
      <link rel="stylesheet" href="{$jsFolder}/{$j}" type="text/css" media="screen" />
    {/foreach} 
    {foreach from=$css item=c}
      <script src="{$cssFolder}/{$c}" type="text/javascript" language="javascript" charset="utf-8"></script>
    {/foreach} 
  </head>
  <body>
    Hello!
  </body>
</html>
