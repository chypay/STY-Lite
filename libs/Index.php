<?php
/*
 * @FilePath: /STY-Lite/libs/Index.php
 * @author: Wibus
 * @Date: 2021-07-16 13:13:11
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-31 15:34:48
 * Coding With IU
 */
class Index{
    // 缩略图
    // $widget 传输入 $this 来处理
    public static function imgOutPut($widget,$cid="",$have=false,$no_content="",$field="") {
        $PostHave = 1;
        // 匹配规则
        $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';
        $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png|JPEG|webp|jpeg|bmp|gif))/i';
        $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png|JPEG|webp|jpeg|bmp|gif))/i';

        $siteUrl = Helper::options()->siteUrl;
        if ($GLOBALS['options']->rendPic_Index == 0) { // 如果使用外部资源
            $link = $GLOBALS['options']->rendPic_Link; // 获取设置选项
            if (!empty($cid) && $cid != "") {
                $imgurl = $link.'?'.$cid; //cid不可能重叠，因此保证进行了不同的请求（但无法确定是否502重定向后是同一张图片）
            }else {
                $imgurl = $link.'?'.rand(1,999); //加入随机参数 //速度会有一定的消耗
            }
        }else{
        if (empty($imgurl)) {
            $rand_num = $GLOBALS['options']->imgNum; //随机图片数量，根据图片目录中图片实际数量设置
                $imgurl = $GLOBALS['assetURL']."img/"
                    .rand(1, $rand_num)
                    .".jpg";
                //随机图片，须按"1.jpg","2.jpg","3.jpg"...的顺序命名，注意是绝对地址
        }
        }
        //解析附件
        if ($widget!=null){
            $attach = @$widget->attachments(1)->attachment;
            if ($attach != null && isset($attach->isImage) && $attach->isImage == 1) {
                return $attach->url;
            }
        }
        if ($widget != null){
            //解析文章内容，这个是最慢的
            $content = $widget->content; //全篇文章
        }else{
            $content = $no_content; //一样是文章内容，但是并不依赖$widget，给后面解析
        }
        if (preg_match_all($pattern, $content, $thumbUrl)) {
            $thumb = $thumbUrl[1][0];
            $url = $thumb;
        } elseif (preg_match_all($patternMD, $content, $thumbUrl)) {
            $thumb = $thumbUrl[1][0];
            $url = $thumb;
        } elseif (preg_match_all($patternMDfoot, $content, $thumbUrl)) {
            $thumb = $thumbUrl[1][0];
            $url = $thumb;
        } else {//文章中没有图片
            $thumb = $imgurl;
            $url = $thumb;
            $PostHave = 0;
        }
        if ($widget->fields->thumb) {
            $PostHave = 1;
            $url = $widget->fields->thumb; //如果字段里有值，绝对用字段值
        }
        if ($field!="") {
            $url = $field;
        }
        if ($have == true) {
            return $PostHave;
        }
        return $url;
        // 使用方法：echo Index::imgOutPut($this, $this->cid);
        // 必须要传一个$this进去
    }
}