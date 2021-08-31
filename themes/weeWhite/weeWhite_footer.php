<!-- 底部 -->
<footer class="footer">
    <div class="bg-white">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-9">
                    <div class="friendlink text-xs bg-light rounded p-4 mt-4">
                        <div class="text-md mb-2">
                            <i class="text-lg text-primary pr-2 iconfont icon-bookmark"></i>友情链接
                        </div>
                        <div>
                        <?php Links_Plugin::output('
                            <a class="text-muted" target="_blank" href="{url}">{name}</a>
                        ');?>    
                        </div>
                    </div>
                    <div class="text-xs text-muted border-top border-light py-4 mt-4">
                    <? $GLOBALS['options']->custom_Footer() ?>
                        © 2021 All Rights Reserved<span class="px-2">⋅</span><?php $GLOBALS['options']->author(); ?> 
                        <span class="px-2">⋅</span>
                        <a href="https://blog.iucky.cn/works/sty.html" rel="external nofollow" target="_blank">STY-Lite By Wibus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
  var pjax = new Pjax({
  selectors: [
    "title",
    "#main", // 这个位置直接舍弃掉<div id="main"></div>
  ],
  cacheBust: false //关闭cacheBust，取消后缀
    })
})
</script>