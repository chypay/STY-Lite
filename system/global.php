<?php
/*
 * @Name: global.php
 * @author: Wibus
 * @Date: 2021-04-17 16:06:35
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-31 16:37:08
 * Coding With IU
 */
// error_reporting(0);
// ini_set('display_errors', 0);
$GLOBALS['options'] = Typecho_Widget::widget('Widget_Options'); //设置选项（非this）
$options = Helper::options();
// error_reporting(0);
// ini_set('display_errors', 0);
$GLOBALS['db'] = Typecho_Db::get(); //Typecho自带db函数
//    请注意：此处的$GLOBALS['RealSite']后不要再添加/，如：$GLOBALS['RealSite'].'/feed'是错的！
if ($options->rewrite == 1) {
   $GLOBALS['RealSite'] = Helper::options()->siteUrl."index.php/"; //是否开启了伪静态
}else{
   $GLOBALS['RealSite'] = Helper::options()->siteUrl;
}
//CDN 静态资源加速
// 使用方法：<?php echo $GLOBALS['assetURL']; ?\>
if (Typecho_Widget::widget('Widget_Options')->使用CDN静态资源加速 == '1') {
   $GLOBALS['assetURL'] = Typecho_Widget::widget('Widget_Options')->CDN加速链接.'/assets/';
}else{
   $GLOBALS['assetURL'] = Typecho_Widget::widget('Widget_Options')->themeUrl.'/assets/';
}
if (!defined('THEME_URL')){//主题目录的绝对地址
   define("THEME_URL", rtrim(preg_replace('/^'.preg_quote($options->siteUrl, '/').'/', $options->rootUrl.'/', $options->themeUrl, 1),'/').'/');
}
if (!defined('API_URL')) {
   define("API_URL", THEME_URL."system/Interface/api/");
}
if (@$_GET['theme']) {
   $GLOBALS['options']->部件模板设置 = @$_GET['theme'];
   if (@$_GET['theme'] == 'custom') {
       $GLOBALS['options']->headnavs = @$_GET['headnav'];
       $GLOBALS['options']->carousels = @$_GET['carousel'];
       $GLOBALS['options']->lists = @$_GET['list'];
       $GLOBALS['options']->archieves = @$_GET['archieve'];
       $GLOBALS['options']->footers = @$_GET['footer'];
       $GLOBALS['options']->comments = @$_GET['comment'];
       $GLOBALS['options']->posts = @$_GET['post'];
       $GLOBALS['options']->pages = @$_GET['page'];
       $GLOBALS['options']->csses = @$_GET['css'];
       $GLOBALS['options']->friends = @$_GET['friend'];
   }
}
// 使用GLOBALS进行超变量设置，便以维护
switch($GLOBALS['options']->部件模板设置){
   case 'weeWhite':
       $headnav = 'themes/weeWhite/weeWhite_headnav.php';
       $carousel = false;
       $list = 'themes/weeWhite/weeWhite_list.php';
       $archieve = 'themes/weeWhite/weeWhite_archieve.php';
       $footer = 'themes/weeWhite/weeWhite_footer.php';
       $comment = 'themes/weeWhite/weeWhite_comment.php';
       $post = 'themes/weeWhite/weeWhite_post.php';
       $page = 'themes/weeWhite/weeWhite_page.php';
       $css  = 'css/weeWhite.css';
       $friends = 'themes/weeWhite/weeWhite_friends.php';
       break;
}
if ($headnav) { define("HEADNAV", "$headnav"); }
if ($carousel) { define("CAROUSEL", "$carousel"); }
if ($list) { define("SLIST", "$list"); }
if ($archieve) { define("ARCHIEVE", "$archieve"); }
if ($footer) { define("FOOTER", "$footer"); }
if ($comment) { define("COMMENT", "$comment"); }
if ($post) { define("POST", "$post"); }
if ($page) { define("PAGE", "$page"); }
if ($css) { define("CSS", "$css"); }
if ($friends) { define("FRIENDS", "$friends"); }
