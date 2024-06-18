<section id="slider-section" class="slider-area home-slider">
   <div class="slideinning"></div>
  <!-- start of hero --> 
    <section class="hero-slider hero-style">
        <div class="music_classswiper-container">
            <div class="swiper-wrapper">
              <?php for($p=1; $p<6; $p++) { ?>
              <?php if( get_theme_mod('slider'.$p,false)) { ?>
              <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
              <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
              <?php 
                if(has_post_thumbnail()){
                  $img = esc_url($image[0]);
                }
                if(empty($image)){
                  $img = get_template_directory_uri().'/assets/images/default.png';
                }

              ?>
                <div class="music_classswiper-slide">
                    <div class="music_classslide-inner slide-bg-image">
                        <div class="sl-r-img">
                            <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">   
                            <div class="slidersvg2"> </div>
                        </div>
                        <div class="slidercontent">
                            <div class="slide-title">
                                <h2><?php the_title_attribute(); ?></h2>   
                            </div>    
                            <div class="slide-text" >
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="slide-btns">
                               <a class="ReadMore" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Read More','music-class'); ?></a>
                            </div>
                        </div>    
                        
                        
                        <div class="clearfix"></div>
                        <!-- </div> -->
                    </div>
                </div>
              <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php } } ?>
                <div class="clear"></div> 

            </div>
           <!-- swipper controls -->
            <!-- <div class="music_classswiper-pagination"></div> -->
            <!-- <div class="music_classswiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="music_classswiper-button-prev"><i class="fa fa-angle-left"></i></div> -->
        </div>
    </section>
  <!-- end of hero slider -->
</section>
