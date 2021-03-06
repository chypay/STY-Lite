<div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
                <section class="post-header py-4 ">
                    <h1 class="title h3 font-weight-bold font-theme"><?php $this->title() ?></h1>
                    <div class="meta text-sm text-muted mt-4">
                        <span class="d-inline-block">
                        <?php $this->category('·'); ?>
                        </span>
                        <i class="text-primary px-2">•</i>
                        <span class="d-inline-block pr-3"><?php $this->date(); ?></span>
                    </div>
                </section>
                <section class="position-relative" style="padding: 20px;">
                    <div class="">
                        <div class="post-social d-none d-lg-block ">
                        <div class="post-holder markdown-body vue-affix affix-top">
                    <!-- <div class="toc">
                        <h3 id="toc_header">
                            目录
                            </h3>
                            <div id="outline" class="toc vditor-outline" style="display: block;"></div>
                    </div> -->
                </div>
                        </div>
                    </div>
                    <div class="post item type-post">
                        <div class="content-style content content-body">
                        <?php
                        $this->content();
                            ?>

                            <?php Links_Plugin::output('
                            <div class="weeWhite-link" style="padding-left: 5px; padding-right: 5px;">
                                <div class="link-item link-item-hover">
                                    <a
                                        href="{url}"
                                        title="{name}"
                                        target="_blank"
                                        data-pjax-state>
                                        <img src="{image}">
                                            <span class="sitename">{name}</span>
                                            <p class="linkdes">{description}</p>
                                        </a>
                                    </div>
                                </div>
                            ')?>

                            <div class="post-tags mt-4 mb-4">
                            <?php $this->tags(', ', true, ''); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 d-lg-block d-none nav-toc-list expanded">

            </div>
                </section>
            </div>
        </div>
    </div>