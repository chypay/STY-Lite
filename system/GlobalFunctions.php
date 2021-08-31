<?
/*
 * @FilePath: /STY-Lite/system/GlobalFunctions.php
 * @author: Wibus
 * @Date: 2021-06-14 16:12:55
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-31 17:00:11
 * Coding With IU
 */

function themeInit($self)
{
    Helper::options()->commentsAntiSpam = false; //关闭反垃圾
    Helper::options()->commentsCheckReferer = false; //关闭检查评论来源URL与文章链接是否一致判断(否则会无法评论)
    Helper::options()->commentsMaxNestingLevels = '999'; //最大嵌套层数
    Helper::options()->commentsPageDisplay = 'first'; //强制评论第一页
    Helper::options()->commentsOrder = 'DESC'; //将最新的评论展示在前
    Helper::options()->commentsHTMLTagAllowed = '<a href=""> <img src=""> <img src="" class=""> <code> <del>';
    Helper::options()->commentsMarkdown = true;
}