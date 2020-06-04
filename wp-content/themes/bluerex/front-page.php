<?get_header('main');?>
<?
$design_cat = get_category(3);

if($design_cat):?>
    <?$posts = get_posts(array(
            'numberposts' => 3,
            'category'    => $design_cat->term_id,
    ));

?>
<section class="section-watch section-tabs" <?echo bluerex_get_background('section_img',$design_cat)?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <?if(get_field('section_header',$design_cat)):?>
                    <h3><?the_field('section_header',$design_cat)?></h3>
                <?endif?>
                <?bluerex_debug($item['url']);?>
                <h4><?=$design_cat->description ?></h4>
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <?
                    $data = [];
                    $i = 0;
                    foreach( $posts as $post ):?>
                        <?setup_postdata($post);
                        $data[$i]['post_name'] = $post->post_name;
                        $data[$i]['url'] = get_the_permalink();
                        $data[$i]['content'] = get_the_content('');
                        //bluerex_debug($posts);
                        ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link  rounded-pill <?if (!$i) echo 'active'?>" id="<?echo $post->post_name?>-tab" data-toggle="tab" href="#<?=$post->post_name?>" role="tab" aria-controls="webdesign" aria-selected="true"><?=the_title()?></a>
                    </li>
                    <?$i++;?>
                    <?endforeach;?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?foreach ($data as $k => $item):?>
                        <?//bluerex_debug($item['url']);?>
                        <div class="tab-pane fade show <?if (!$k) echo 'active'?>" id="<?=$item['post_name']?>" role="tabpanel" aria-labelledby="<?=$item['post_name']?>-tab">
                            <p><?=$item['content']?></p>
                            <p><a href="<?$item['url']?>" class="btn btn-pink btn-shadow">Read more</a></p>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6 text-center">
            <?if(get_field('section_add_img',$design_cat)):?>
                <img src="<?=get_field('section_add_img',$design_cat)?>" alt="">
            <?endif?>
<!--                <img src="--><?//echo bloginfo(template_url);?><!--/assets/img/watch.png" alt="">-->
            </div>
            <!-- /.col-md-6 -->
        </div>
    </div>
    <?wp_reset_postdata();
    unset($data,$posts);?>
</section>
<!-- /.section-watch -->
<?endif;?>
<section class="section-progress text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 progress-item">
                <div><img src="<?echo bloginfo(template_url);?>/assets/img/speaker.png" alt=""></div>
                <div class="num">500+</div>
                <h4><span>Successfully</span> completed projects</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dicta eum exercitationem facere
                    illo illum magni modi necessitatibus nemo neque, porro provident quas, recusandae reiciendis
                    repudiandae sequi similique vel velit?</p>
            </div>
            <!-- /.col-md-4 progress-item -->
            <div class="col-md-4 progress-item">
                <div><img src="<?echo bloginfo(template_url);?>/assets/img/speaker.png" alt=""></div>
                <div class="num">254+</div>
                <h4><span>Highly</span> specialised employees</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dicta eum exercitationem facere
                    illo illum magni modi necessitatibus nemo neque, porro provident quas, recusandae reiciendis
                    repudiandae sequi similique vel velit?</p>
            </div>
            <!-- /.col-md-4 progress-item -->
            <div class="col-md-4 progress-item">
                <div><img src="<?echo bloginfo(template_url);?>/assets/img/speaker.png" alt=""></div>
                <div class="num">45+</div>
                <h4><span>Awards</span> around the world</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dicta eum exercitationem facere
                    illo illum magni modi necessitatibus nemo neque, porro provident quas, recusandae reiciendis
                    repudiandae sequi similique vel velit?</p>
            </div>
            <!-- /.col-md-4 progress-item -->
        </div>
    </div>
</section>
<!-- /.section-progress -->
<section class="section-lets text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Let's Grow Together</h3>
                <h4>We turn creative ideas into your business.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at, consectetur culpa delectus dolore
                    eligendi esse est eveniet labore laboriosam odit perferendis qui quia quo rem similique tempora
                    totam, voluptatibus.</p>
                <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
            </div>
        </div>
    </div>
</section>
<!-- /.section-lets text-center -->
<section class="section-design">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>We are best and creative agency copy</h3>
                <h4>We turn creative ideas into your business.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aliquam aut, blanditiis
                    commodi enim incidunt iusto perspiciatis recusandae sint soluta vel voluptatum? Architecto aut
                    blanditiis molestias, provident quia rem tempora.</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span><img src="<?echo bloginfo(template_url);?>/assets/img/graphic.png" alt=""></span>
                        <h2>Graphic Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, cumque dolores pariatur recusandae voluptates!</p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                    <!-- /.col-md-6 mb-3 -->
                    <div class="col-md-6 mb-3">
                        <span><img src="<?echo bloginfo(template_url);?>/assets/img/icon_speaker.png" alt=""></span>
                        <h2>Graphic Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam delectus ipsa libero modi nam!</p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                    <!-- /.col-md-6 mb-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9 mt-5">
                    <iframe id="videoPlayer" class="embed-responsive-item" src="https://www.youtube.com/embed/KlVvTofZn7I?enablejsapi=1&amp;html5=1&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                    <div id="videoPlayBtn"></div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>
</section>
<!-- /.section-design -->
<section class="section-work section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h4>Our Recent Work</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aliquid beatae deserunt
                    dignissimos dolores eligendi, expedita nesciunt nisi odio porro qui quos. Aut deleniti doloribus hic
                    impedit in perspiciatis quibusdam.</p>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-12">
                <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active rounded-pill" id="webdesign-tab2" data-toggle="tab" href="#webdesign2" role="tab" aria-controls="webdesign" aria-selected="true">Webdesign</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="mobileapp-tab2 rounded-pill" data-toggle="tab" href="#mobileapp2" role="tab" aria-controls="mobileapp" aria-selected="false">Mobile app</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="breading-tab2 rounded-pill" data-toggle="tab" href="#breading2" role="tab" aria-controls="breading" aria-selected="false">Breading</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="webdesign2" role="tabpanel" aria-labelledby="webdesign-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/1.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/1_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/2.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/2_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/3.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/3_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/4.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/4_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/5.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/5_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/6.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/6_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/7.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/7_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/8.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/8_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/9.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/9_s.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mobileapp2" role="tabpanel" aria-labelledby="mobileapp-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/4.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/4_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/5.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/5_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/6.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/6_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/1.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/1_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/2.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/2_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/3.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/3_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/7.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/7_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/8.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/8_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/9.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/9_s.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="breading2" role="tabpanel" aria-labelledby="breading-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/7.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/7_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/8.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/8_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/9.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/9_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/1.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/1_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/2.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/2_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/3.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/3_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/4.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/4_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/5.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/5_s.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="/img/gallery/6.png">
                                    <img src="<?echo bloginfo(template_url);?>/assets/img/gallery/6_s.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
</section>
<!-- /.section-work -->
<section class="section-brand">
    <div class="container">
        <div class="row text-center">
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/1.png" alt=""></div>
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/2.png" alt=""></div>
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/3.png" alt=""></div>
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/4.png" alt=""></div>
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/5.png" alt=""></div>
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/6.png" alt=""></div>
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/7.png" alt=""></div>
            <div class="col-3 col-sm-3 brand-item align-self-center"><img src="<?echo bloginfo(template_url);?>/assets/img/brands/8.png" alt=""></div>
        </div>
    </div>
</section>
<!-- /.section-brand -->
<section class="section-reviews">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active " data-interval="1000">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. John Doe</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- /.col-sm-7 -->
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?echo bloginfo(template_url);?>/assets/img/client.png" alt="">
                        </div>
                        <!-- /.col-sm-5 -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. David</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- /.col-sm-7 -->
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?echo bloginfo(template_url);?>/assets/img/client.png" alt="">
                        </div>
                        <!-- /.col-sm-5 -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. Jack</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- /.col-sm-7 -->
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?echo bloginfo(template_url);?>/assets/img/client.png" alt="">
                        </div>
                        <!-- /.col-sm-5 -->
                    </div>
                </div>
            </div>
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
<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Need Help?</h4>
                <h5>Don't Forget to Contact With Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, accusamus ad adipisci amet aut
                    blanditiis cumque debitis ea esse et fugiat iste omnis qui sint soluta suscipit velit voluptates.
                    Numquam.</p>
                <form class="text-left">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-5">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-violet btn-shadow">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
</section>
<!-- /.section-form -->
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
<?get_footer();?>