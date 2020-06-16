<? get_header('main'); ?>
<?
$design_cat = get_category(3);

if ($design_cat):?>
    <? $posts = get_posts(array(
        'numberposts' => 3,
        'category' => $design_cat->term_id,
    ));

    ?>
    <section class="section-watch section-tabs" <? echo bluerex_get_background('section_img', $design_cat) ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <? if (get_field('section_header', $design_cat)): ?>
                        <h3><? the_field('section_header', $design_cat) ?></h3>
                    <? endif ?>
                    <? bluerex_debug($item['url']); ?>
                    <h4><?= $design_cat->description ?></h4>
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <?
                        $data = [];
                        $i = 0;
                        foreach ($posts as $post):?>
                            <? setup_postdata($post);
                            $data[$i]['post_name'] = $post->post_name;
                            $data[$i]['url'] = get_the_permalink();
                            $data[$i]['content'] = get_the_content('');
                            //bluerex_debug($posts);
                            ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  rounded-pill <? if (!$i) echo 'active' ?>"
                                   id="<? echo $post->post_name ?>-tab" data-toggle="tab"
                                   href="#<?= $post->post_name ?>" role="tab" aria-controls="webdesign"
                                   aria-selected="true"><?= the_title() ?></a>
                            </li>
                            <? $i++; ?>
                        <? endforeach; ?>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <? foreach ($data as $k => $item): ?>
                            <? //bluerex_debug($item['url']);
                            ?>
                            <div class="tab-pane fade show <? if (!$k) echo 'active' ?>" id="<?= $item['post_name'] ?>"
                                 role="tabpanel" aria-labelledby="<?= $item['post_name'] ?>-tab">
                                <p><?= $item['content'] ?></p>
                                <p><a href="<? $item['url'] ?>" class="btn btn-pink btn-shadow">Read more</a></p>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6 text-center">
                    <? if (get_field('section_add_img', $design_cat)): ?>
                        <img src="<?= get_field('section_add_img', $design_cat) ?>" alt="">
                    <? endif ?>
                    <!--                <img src="--><? //echo bloginfo(template_url);
                    ?><!--/assets/img/watch.png" alt="">-->
                </div>
                <!-- /.col-md-6 -->
            </div>
        </div>
        <? wp_reset_postdata();
        unset($data, $posts); ?>
    </section>
    <!-- /.section-watch -->
<? endif; //if $design_cat?>

<?
$progress_cat = get_category(4);
$posts = get_posts(array(
    'numberposts' => 3,
    'category' => 4,
));
if ($posts):
//    bluerex_debug($posts)
    ?>
    <section class="section-progress text-center">
        <div class="container">
            <div class="row">
                <? foreach ($posts as $post): ?>
                    <div class="col-md-4 progress-item">
                        <?= $post->post_content; ?>
                    </div>
                    <!-- /.col-md-4 progress-item -->
                <? endforeach; ?>

            </div>
        </div>
        <? unset ($posts); ?>
    </section>
    <!-- /.section-progress -->
<? endif; // progress?>

<?
$lets_cat = get_category(5);
if ($lets_cat):?>
    <section class="section-lets text-center" <? echo bluerex_get_background('section_img', $lets_cat) ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3><?= $lets_cat->name ?></h3>
                    <? if (get_field('section_header', $lets_cat)): ?>
                        <h4><?= get_field('section_header', $lets_cat) ?></h4>
                    <? endif ?>
                    <p><?= $lets_cat->description ?></p>
                    <p><a href="<?= get_category_link(5) ?>"
                          class="btn btn-pink btn-shadow"><?= __('Read more', 'bluerex') ?></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section-lets text-center -->
<? endif; //$lets_cat?>

<? $graphic_cat = get_category(6);
if ($graphic_cat):?>
    <? $posts = get_posts(array(
        'numberposts' => 2,
        'category' => $graphic_cat->term_id,
    ));
    ?>
    <section class="section-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3><?= $graphic_cat->name ?></h3>
                    <h4><?= get_field('section_header', $graphic_cat) ?></h4>
                    <p><? $graphic_cat->description ?></p>
                    <div class="row">
                        <? foreach ($posts as $post): setup_postdata($post); ?>
                            <div class="col-md-6 mb-3">
                                <span><?= the_field('icon') ?></span>
                                <h2><?= the_title() ?></h2>
                                <p><?= the_content('') ?></p>
                                <p><a href="<?= the_permalink() ?>"
                                      class="btn btn-pink btn-shadow"><?= __('Read more', 'bluerex') ?></a></p>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <? if ($video = get_field('section_video', $graphic_cat)):?>
                        <?
                        $video = str_replace('watch?v=', 'embed/', $video);
                        ?>

                        <div class="embed-responsive embed-responsive-16by9 mt-5">
                            <iframe id="videoPlayer" class="embed-responsive-item"
                                    src="<?= $video ?>?enablejsapi=1&amp;html5=1&amp;rel=0&amp;controls=0&amp;showinfo=0"
                                    frameborder="0" allowfullscreen=""></iframe>
                            <div id="videoPlayBtn"></div>
                        </div>
                    <? endif ?>
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <? wp_reset_postdata();
        unset($posts); ?>
    </section>
    <!-- /.section-design -->
<? endif;//$graphic_cat?>

<? $work_cat = get_category(7);
if ($work_cat):?>
    <? $posts = get_posts(array(
        'numberposts' => 3,
        'category' => $work_cat->term_id,
    ));
    ?>
    <section class="section-work section-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h4><?=$work_cat->name?></h4>
                    <p><?=$work_cat->description?></p>
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-12">
                    <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                        <?
                        $data = [];
                        $i = 0;
                        foreach ($posts as $post):?>
                            <? setup_postdata($post);
                            $data[$i]['post_name'] = $post->post_name;
                            $data[$i]['url'] = get_the_permalink();
                            $data[$i]['content'] = get_the_content('');
                            //bluerex_debug($posts);
                            ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link  rounded-pill <? if (!$i) echo 'active' ?>"
                                   id="<? echo $post->post_name ?>-tab" data-toggle="tab"
                                   href="#<?= $post->post_name ?>" role="tab" aria-controls="webdesign"
                                   aria-selected="true"><?= the_title() ?></a>
                            </li>
                            <? $i++; ?>
                        <? endforeach; ?>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <? foreach ($data as $k => $item): ?>
                            <? //bluerex_debug($item['url']);
                            ?>
                            <div class="tab-pane fade show <? if (!$k) echo 'active' ?>" id="<?= $item['post_name'] ?>"
                                 role="tabpanel" aria-labelledby="<?= $item['post_name'] ?>-tab">
                                <p><?= $item['content'] ?></p>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
        </div>
    </section>
    <!-- /.section-work -->
<?endif; //$work_cat?>

    <section class="section-brand">
        <div class="container">
            <div class="row text-center">
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/1.png" alt=""></div>
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/2.png" alt=""></div>
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/3.png" alt=""></div>
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/4.png" alt=""></div>
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/5.png" alt=""></div>
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/6.png" alt=""></div>
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/7.png" alt=""></div>
                <div class="col-3 col-sm-3 brand-item align-self-center"><img
                            src="<? echo bloginfo(template_url); ?>/assets/img/brands/8.png" alt=""></div>
            </div>
        </div>
    </section>
    <!-- /.section-brand -->

<?$posts = get_posts(array(
        'post_type' => 'reviews',
));
if ($posts):
?>
    <section class="section-reviews">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <?for ($i = 0; $i< count($posts); $i++):?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?=$i?>" <?if (!$i) echo 'class="active"'?>></li>
                <?endfor; ?>
            </ol>
            
            <div class="carousel-inner">
                <? $i = 0; foreach ($posts as $post):?>
                <div class="carousel-item <?if (!$i) echo 'active'?> " data-interval="5000">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="carousel-caption">
                                    <h3><?= $post->post_title?></h3>
                                    <h4><?= the_field('review_header')?></h4>
                                    <blockquote class="blockquote">
                                        <p class="mb-0"><?= $post->post_content?></p>
                                        <footer class="blockquote-footer"><?= the_field('review_author')?></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- /.col-sm-7 -->
                            <div class="col-sm-5 d-none d-sm-block">
                                <?if (has_post_thumbnail($post->ID)):?>
                                    <?= get_the_post_thumbnail($post->ID)?>
                                <?endif;?>
                            </div>
                            <!-- /.col-sm-5 -->
                        </div>
                    </div>
                </div>
                <?$i++; endforeach;?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- /.section-reviews -->
<?endif;//$reviews?>

<?$contact = get_page_by_title('Contact');
if ($contact):
//    setup_postdata($contact);
//    the_content();
//    bluerex_debug($contact)
?>
    <section class="section-form text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?echo do_shortcode($contact->post_content);?>
                </div>
                <!-- /.col-md-12 -->
            </div>
        </div>
    </section>
    <!-- /.section-form -->
<?endif;//$contact?>

    <section class="section-mess text-center">
        <div class="container">
            <div class="row offset-md-2">
                <!--<div class="col-md-2 mess-item"><a href="#">facebook</a></div>
                <div class="col-md-2 mess-item"><a href="#">twitter</a></div>
                <div class="col-md-2 mess-item"><a href="#">linkedin</a></div>
                <div class="col-md-2 mess-item"><a href="#">instagram</a></div>
                <div class="col-md-2 mess-item"><a href="#">behance</a></div>-->
                <div class="col-md-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">facebook</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">twitter</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">linkedin</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">instagram</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">behance</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section-mess -->
<? get_footer(); ?>