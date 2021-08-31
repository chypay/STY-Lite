<?
/*
 * @Name: header.php
 * @author: Wibus
 * @Date: 2021-05-10 14:17:24
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-31 16:36:21
 * Coding With IU
 */
?>
<!DOCTYPE html>
<html lang="zh-CH">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
            <?php $this->options->切割描述符号(); ?>
            <?php $this->options->标题描述(); ?></title>
        <? $this->header() ?>
        <style>
            a.nav-links {
                text-decoration: none;
            }
            li.category-tag > a {
                color: #fff;
            }
            main {
                padding: 0!important;
            }
        </style>
        <?php if (!empty($this->options->Show) && in_array('Pjax', $this->options->Show)): ?>
        <script src="https://cdn.jsdelivr.net/npm/pjax/pjax.js"></script>
        <?php endif; ?>
        <?if (defined('CSS')) {echo '<link rel="stylesheet" href="'.$GLOBALS["assetURL"].CSS.'">';}?>
        <script src="https://cdn.jsdelivr.net/gh/Dreamer-Paul/Kico-Style/kico.min.js"></script>
        <? $GLOBALS['options']->head() ?>
    </head>