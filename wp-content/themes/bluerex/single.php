<?get_header()?>
<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <? if (have_posts()) : ?>
                    <? while (have_posts()) : the_post(); ?>
                        <article class="article-preview">
                            <h2><?the_title()?></h2>
                            <p><span class="article-date"><i class="far fa-calendar-alt"></i><?the_time('d.m.Y')?></span></p>
                            <div class="article-excerpt">
                                <?if (has_post_thumbnail()): ?>
                                    <div class="bluerex-thumb">
                                        <a href="<?the_permalink() ?>">
                                            <?the_post_thumbnail('thumbnail', array('class'=>'thumb')) ?>
                                        </a>
                                    </div>
                                <?endif;?>
                                <?the_content('')?>
                            </div>
                        </article>
                        <!-- /.article-preview -->
                    <? endwhile; ?>
                <?endif;?>
            </div>
            <!-- /.col-md-8 -->
            <?get_sidebar()?>
        </div>
        <!-- /.col-md-4 -->
    </div>
    </div>
</section>
<!-- /.section-content -->
<?get_footer()?>
