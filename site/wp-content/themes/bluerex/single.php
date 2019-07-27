<?php get_header() ?>


<!-- Для вывода постов используем цыкл подробнее:

https://codex.wordpress.org/%D0%A6%D0%B8%D0%BA%D0%BB_WordPress -->


    <section class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article class="article-preview">
                            <h2><?php the_title() ?></h2>
                            <p><span class="article-date"><i class="far fa-calendar-alt"></i> <?php the_time('d.m.Y') ?></span></p>
                            <div class="article-excerpt">
                                <?php if(has_post_thumbnail()): ?>
                                    <div class="bluerex-thumb">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_post_thumbnail('thumbnail', array('class' => 'thumb')) ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <?php the_content('') ?>
                               
                            </div>
                        </article>
                        <!-- /.article-preview -->

                    <?php endwhile; ?>


                    <?php else: ?>
                        <!-- no posts found -->
                    <?php endif; ?>

                </div>
                <!-- /.col-md-8 -->
<!-- 
                  <div class="col-md-4">
                    <div class="sidebar-widget widget-categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul>
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 2</a></li>
                            <li><a href="#">Category 3</a></li>
                            <li><a href="#">Category 4</a></li>
                            <li><a href="#">Category 5</a></li>
                        </ul>
                    </div>
                  
                </div> -->

            <?php get_sidebar() ?>
                
            </div>
        </div> 



      </section>   


  


<?php get_footer() ?>