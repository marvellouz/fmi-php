<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="bg" lang="bg">
  <head>
    <title> </title>
    <meta http-equiv="content-type" 
    content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="/xampp/fmi-php/HW4/site_media/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/xampp/fmi-php/HW4/site_media/js/external.js">  
    </script>
    <!--[if lte IE 6]>
    <p bgcolor = "#7A0900">
    <em>Сайтът изглежда по този начин, защото използвате internet explorer 6 или по-стара версия. Моля използвайте <a href = "http://www.mozilla.com/">browser</a>.
    </em></p>
    <![endif]-->

  </head>
  <body>
    <div id = "menu">
      <map id = "coffee" name="menu">
        <area alt = "контакти" shape="poly" title="контакти" href="/xampp/fmi-php/HW4/contacts/" coords="104,303,106,302,114,302,117,301,121,300,127,300,129,299,132,299,134,298,137,298,140,297,146,297,152,295,154,294,157,293,160,293,162,292,209,292,212,293,214,295,214,298,215,301,215,311,214,314,212,316,210,317,207,317,205,318,201,318,198,319,194,319,190,320,179,320,176,321,172,321,169,322,166,322,164,323,152,323,150,324,146,325,126,325,124,326,120,326,114,328,111,328,109,329,106,329,104,330,101,331,88,331,86,330,84,326,84,308,85,306,89,302,91,301,109,301,113,302" />
        <area alt = "за мен" shape="poly" title="за мен" href="/xampp/fmi-php/HW4/" coords="84,269,87,268,90,268,92,267,98,267,102,265,105,265,107,264,110,264,114,263,120,263,128,261,143,256,153,256,156,255,159,255,165,253,169,252,172,252,176,251,182,251,185,252,187,253,187,256,188,258,188,267,186,269,184,270,182,272,180,273,177,273,175,274,171,275,169,276,166,277,163,277,159,279,156,280,152,282,144,284,140,286,137,287,131,287,129,288,122,288,120,289,83,289,79,285,79,276,80,274,82,272,83,270,87,268,102,268" />
        <area alt = "начало" shape="poly" title="начало" href="/xampp/fmi-php/HW4/" coords="78,223,96,223,98,222,101,221,103,220,106,220,108,219,114,219,118,217,124,217,127,216,136,216,138,215,141,214,144,214,147,213,150,213,152,212,155,211,170,211,176,217,176,223,175,225,173,227,170,229,168,230,165,231,162,231,160,232,154,232,152,233,149,233,146,234,143,234,139,236,130,239,127,239,124,240,105,240,103,241,97,241,95,242,86,242,83,241,79,239,77,237,76,235,76,232,80,224,82,222" />
      </map>
      <img id = "menu_cup" usemap = "#menu" src="/xampp/fmi-php/HW4/site_media/images/menu.png" alt = "меню"/>
      <div id = "mouse"></div>
    </div>
    <div id = "main">
      <div id = "header">
        <ul id = "hmenu">
          <li><a href = "http://github.com/marvellouz" rel = "external">код</a></li>
          <li><a href = "http://www.flickr.com/photos/vdinkova/" rel = "external">снимки</a></li>
          <li><a href = "http://www.last.fm/user/marvellouz" rel = "external" >музика</a></li>
        </ul>
        <ul id = "hmenu2">
        </ul>
      </div>
      <div id = "content">
        {block name=content}
        <div id = "images">
          <div class = "image"><a href = "/xampp/fmi-php/HW4/" ><img src = "/xampp/fmi-php/HW4/site_media/images/wishlist/ramHT1_small.png" alt = "talants2"/></a>
            <div class = "description"><h1>ram HT1</h1><p>Description here.</p> 
            </div>
          </div>

        </div>
        {/block} 
        <div id = "footer">Валентина Динкова</div>
      </div>
    </div>
  </body>
</html>
