<?php 
/*
 * @Name: functionsConfig.php
 * @author: Wibus
 * @Date: 2021-04-17 16:06:35
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-31 16:37:37
 * Coding With IU
 */

function themeConfig($form) {

    

    $切割描述符号 = new Typecho_Widget_Helper_Form_Element_Radio('切割描述符号',array('·' => _t('<code>&nbsp;·&nbsp;</code>'),'-' => _t('<code>&nbsp;-&nbsp;</code>')),'-', _t('首页标题后缀分割线'), _t('请谨慎选择，一旦选择，<b>非特殊情况请不要修改！</b>'));
    $form->addInput($切割描述符号);  
    $标题描述 = new Typecho_Widget_Helper_Form_Element_Text('标题描述', NULL, _t('Super Typecho Theme'), _t('首页标题后缀'), _t('你的博客标题栏博客名称后面的副标题，如果为空，则不显示副标题</br></br>'));
    $form->addInput($标题描述);  
    $author = new Typecho_Widget_Helper_Form_Element_Text('author', NULL, 'Wibus', _t('博客作者'), _t('将会输出在不同地方，如：底部'));
    $authorDesc = new Typecho_Widget_Helper_Form_Element_Text('authorDesc', NULL, 'Just Uaeua', _t('作者简介'), _t('将会输出在不同地方，如：底部'));
    $authorLike = new Typecho_Widget_Helper_Form_Element_Text('authorLike', NULL, 'wibus-wee', _t('作者小名'), _t('将会输出在不同地方，如：侧边栏'));
    $authorIMG  = new Typecho_Widget_Helper_Form_Element_Text('authorIMG', NULL, NULL, _t('作者头像'), _t('将会输出在不同地方，如：侧边栏'));
    $form->addInput($author);
    $form->addInput($authorDesc);
    $form->addInput($authorLike);
    $form->addInput($authorIMG);
    $introduction = new Typecho_Widget_Helper_Form_Element_Text('introduction', NULL, 'Just Uaeua.', _t('作者自我介绍'), _t('支持HTML写法，将会输出在不同的地方中，如底部'));
    $form->addInput($introduction);
    $custom_Footer = new Typecho_Widget_Helper_Form_Element_Textarea('custom_Footer', NULL, NULL, _t('底部自定义区域'), _t('这里面填写的是 <code>html代码</code>，</br>可以填写<span style="color: red">备案号</span>等一些信息。注意：所有屏幕尺寸下都会显示该内容'));
    $form->addInput($custom_Footer);
    $部件模板设置 = new Typecho_Widget_Helper_Form_Element_Select('部件模板设置', array(
        'weeWhite' => _t('weeWhite'),
        '' => _t('更多部件请使用Pro')
        // 'custom' => _t('自定义（不懂请不要选择此项，选择了请在后面进行配置！）')
    ),
    'SBS', _t('主题的部件模板设置'), _t('主题已经提前为您选择出了最佳的搭配，选择任意一项保存后即刻生效！'));
    $form->addInput($部件模板设置);
    $rendPic_Index = new Typecho_Widget_Helper_Form_Element_Select('rendPic_Index', array(
        '0' => _t('使用外部资源(请在下面填写“缩略图外部资源链接”)'),
        '1' => _t('使用本地资源（若启动CDN则使用CDN上的资源）')),
    '0', _t('缩略图资源来源'), _t('选择从哪里接入首页/文章/页面等的头图/缩略图')
    );
    $form->addInput($rendPic_Index);
    $rendPic_Link = new Typecho_Widget_Helper_Form_Element_Text('rendPic_Link', NULL, 'https://source.unsplash.com/1600x900/?computer', _t('缩略图外部资源链接'), _t('此处只能填入URL！不建议只填写单独一个图片链接，系统将会自动在URL后面添加随机参数实现随机的效果'));
    $form->addInput($rendPic_Link);
    $imgNum = new Typecho_Widget_Helper_Form_Element_Text('imgNum', NULL, NULL, _t('随机图片数量'), _t('随机图片数量，根据图片目录中图片实际数量设置'));
    $form->addInput($imgNum);
    $sticky_cid = new Typecho_Widget_Helper_Form_Element_Text('sticky_cid', NULL, NULL, _t('置顶文章设置'), _t('此处填写文章cid，使用英文逗号分割，如：1,3'));
    $form->addInput($sticky_cid);
    $Show = new Typecho_Widget_Helper_Form_Element_Checkbox('Show', array(
        'Pjax' => 'Pjax 无刷新加载',
        'Comment' => '显示评论区',
    ), array('Pjax','Comment'),_t('全局启动功能'),_t('功能启动选项'));
    $form->addInput($Show->multiMode());
    $使用CDN静态资源加速 = new Typecho_Widget_Helper_Form_Element_Select('使用CDN静态资源加速', array(
        '0' => _t('不启动（默认选项）'),
        '1' => _t('启动（请在下面填写CDN链接！）')),
    '0', _t('是否启动CDN静态资源加速'), _t('若启动，请在下面填写CDN资源链接！')
    );
    $form->addInput($使用CDN静态资源加速); 
    $CDN加速链接 = new Typecho_Widget_Helper_Form_Element_Text('CDN加速链接', NULL, NULL, _t('CDN加速链接'), _t('请填入CDN加速链接，不懂请清空！是将assets文件夹里面！里面！的内容上传！'));
    $form->addInput($CDN加速链接);

    $css = new Typecho_Widget_Helper_Form_Element_Textarea('css', NULL, NULL, _t('自定义CSS'), _t('CSS将会输出在/body前'));
    $js = new Typecho_Widget_Helper_Form_Element_Textarea('js', NULL, NULL, _t('自定义JavaScript'), _t('JavaScript将会输出在/body前'));
    $head = new Typecho_Widget_Helper_Form_Element_Textarea('head', NULL, NULL, _t('自定义头部的HTML代码'), _t('将会输出在head里面'));
    $footer = new Typecho_Widget_Helper_Form_Element_Textarea('footer', NULL, NULL, _t('自定义底部的HTML代码'), _t('将会输出在/body前'));
    $form->addInput($css);
    $form->addInput($js);
    $form->addInput($head);
    $form->addInput($footer);
}
/*
 * 编写文章设置
 * themeFields(Typecho_Widget_Helper_Layout $layout){}控制
 */
function themeFields(Typecho_Widget_Helper_Layout $layout){
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('当前文章首页头图'), '<strong style="color:red;">该设置仅对该篇文章有效，优先级最高</strong></br>');
    $layout->addItem($thumb);
}