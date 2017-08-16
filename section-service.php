<section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Our Mission</h3>
                    <p class="services-header-body"><em> Things we provide in Office </em>  </p><hr>
                </div>
            </div>
      
            <!-- Begin Services Row  -->
            <div class="row services-row services-row-head services-row-1">




            <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'services',
                        'posts_per_page'=>-1,
                        'order'=>'ASC'


                        ));
                      if ($ebit_post->have_posts()) {
                       
                        while ($ebit_post->have_posts() ) {
                          
                            $ebit_post->the_post();
                            $service_icon=get_post_meta( get_the_ID(),'_office-master_service_icon',true);
                            $service_description=get_post_meta( get_the_ID(),'_office-master_service_description',true);
                             $service_title=get_post_meta( get_the_ID(),'service_title',true);
                              $service_url=get_post_meta( get_the_ID(),'service_url',true);
                              $animation_type=get_post_meta( get_the_ID(),'animation_type',true);




                            ?>




                            <!-- Begin Slide 1 -->
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                 <div class="services-group wow animated <?php echo $animation_type;?>" data-wow-offset="40">


                                 <?php foreach($service_icon as $single_icon){?>

                                              <p class="services-icon"><span class="fa <?php echo $single_icon;?> fa-5x"></span></p>


                                   <?php }?>
                                 
                                        <h4 class="services-title"><?php the_title();?></h4>
                                        <p class="services-body"><?php echo $service_description;?></p>
                                        <p class="services-more"><a href="<?php echo $service_url;?>"><?php echo $service_title;?></a></p>
                                   </div>
                                </div>
                        
                        <!-- End Slide 1 -->



                     <?php
                        }
                      }else{
                        echo "No post";
                      }
                      wp_reset_postdata();
                   ?>



           
        
         </div>
            <!-- End Serivces Row  -->
    
        </div>      
    </section>