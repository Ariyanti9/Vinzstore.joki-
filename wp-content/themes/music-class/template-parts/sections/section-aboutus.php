<section id="aboutus-section" class="aboutus-area home-aboutus">
    <?php
        $aboutus_image = get_theme_mod('aboutus_image'); 
    ?>
	<div class="<?php if(esc_attr(get_theme_mod('music_class_aboutus_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('music_class_aboutus_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
    	<div class="row m-0"> 
            
            <div class="peccular-star-img">
                <?php
                echo '<img alt="About star" src="'.get_template_directory_uri().'/assets/images/star.png" class="img-responsive">';
                ?>
            </div>

            <!-- <div class="col-lg-5 col-md-6 col-sm-6"> -->
            <div class="abt-dbx">
                <h2><?php echo esc_html(get_theme_mod('aboutus_heading')); ?>
                    <div class="abtsubtitl"></div>
                </h2>
                <h3><?php echo esc_html(get_theme_mod('aboutus_title')); ?></h3>
                <p><?php echo esc_html(get_theme_mod('aboutus_description')); ?></p>
                <div class="list row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><?php echo esc_html(get_theme_mod('aboutus_list1text')); ?></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><?php echo esc_html(get_theme_mod('aboutus_list2text')); ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><?php echo esc_html(get_theme_mod('aboutus_list3text')); ?></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><?php echo esc_html(get_theme_mod('aboutus_list4text')); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="abt-btn">
                    <a href="<?php echo esc_html(get_theme_mod('aboutus_readmorebtn_link')); ?>">
                        <?php esc_html_e('Read More','music-class'); ?>
                    </a>
                </div>
            </div>
            <!-- </div> -->
            <!-- <div class="col-lg-7 col-md-6 col-sm-6"> -->
            <div class="abt-image">
                <div class="abtimg">
                    <div class="abtimgrightbrdr"></div>
                    <?php 
                        if(!empty($aboutus_image)){
                            echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_image).'" class="peccular-aboutus-imgboxshape" />';
                        }else{
                            echo '<img alt="aboutus us" class="sh-oly" src="'.get_template_directory_uri().'/assets/images/about2.png" />';
                        }
                    ?>
                    <div class="box">
                        <div class="row">
                            <h4><?php echo esc_html(get_theme_mod('aboutus_imageyearnumber')); ?></h4>
                            <h5><?php echo esc_html(get_theme_mod('aboutus_imageyeartext')); ?></h5>
                        </div>
                    </div>
                </div>

                
            </div>   
            <!-- </div> -->
        </div>
    </div>
</section>
