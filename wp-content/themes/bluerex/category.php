<?get_header()?>
<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <? if (have_posts()) : ?>
                <? while (have_posts()) : the_post(); ?>
                        <article class="article-preview">
                            <h2><a href="<?the_permalink() ?>"><?the_title()?></a></h2>
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
                                <p><a href="<?the_permalink() ?>" class="more"><?_e('Read more', 'bluerex')?></a></p>
                            </div>
                        </article>
                        <!-- /.article-preview -->
                <? endwhile; ?>
                <?the_posts_pagination(array(
                        'end_size'     => 1,
                        'mid_size'     => 1,
                        'type'         => 'list',
                    ))?>
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
