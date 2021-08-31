<?
/*
 * @FilePath: /STY-Lite/footer.php
 * @author: Wibus
 * @Date: 2021-04-17 16:06:35
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-31 16:44:15
 * Coding With IU
 */
if (defined('FOOTER')){ $footer = FOOTER; };
$this->need($footer);
?>
<link
href="https://cdn.bootcss.com/font-awesome/5.13.0/css/all.css"
rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/wee-design/Wee.js/src/wee.min.js"></script>
<script async="async" src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">

<?php if (!empty($this->options->Show) && in_array('Pjax', $this->options->Show)): ?>
<script>
document.addEventListener('pjax:send', function () {
    document.body.classList.add("loading")
    NProgress.start()
})
document.addEventListener('pjax:complete', function () {
    document.body.classList.remove("loading")
    NProgress.done()
    ks.image("img")
})
</script>
<?php endif; ?>

<!-- User Like -->
<? $GLOBALS['options']->footer() ?>
<script>
    <? $GLOBALS['options']->js() ?>
</script>
<style>
    <? $GLOBALS['options']->css() ?>
</style>



</body>

</html>