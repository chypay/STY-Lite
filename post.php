<?php
$this->need('header.php');
if (defined('HEADNAV')){ $headnav = HEADNAV; }
if (defined('POST')){ $post = POST; }
echo '<main id="main">';
    $this->need($headnav);
    $this->need($post);
    $this->need('comments.php');
echo '</main>';
$this->need('footer.php');