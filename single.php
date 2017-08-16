<?php get_header();?>




        

         <div class="row container-kamn">  
        <img src="http://placehold.it/1200*400" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%"> 

    </div>
   
    

    <!--End Header -->
    <!-- Main Container -->

    

    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            
      <div class="col-sm-12 col-md-12">
            
             <?php

                
                    if (have_posts()) {
                       
                 
                          
                            the_post();
                            $post_icon=get_post_meta( get_the_ID(),'_office-master_post_icon',true);
                            




                            ?>




                            <!-- Begin post 1 -->
                            <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa <?php echo $post_icon?>"></i>
                            <a href=""><?php the_title();?></a>
                        </h1>
                        <br>
                        <?php the_post_thumbnail('post_thumb');?>
                        <br>
                        <p>
                            <?php the_content();?>
                        </p>
                        <div>
                            <span class="badge">Posted<?php echo get_the_date('Y-m-d H:i:s');?></span>
                            <div class="pull-right">
                            <?php the_tags('<span class="label label-default">','</span><span class="label label-primary">','</span>')?>

                                
                                
                            </div>         
                        </div>
                    </div>
                    <hr>
                        <!-- End post  1 -->



                     <?php
                        }?>
          </div> 
        </div>    
    </div>  

    <!--End Main Container -->

    <!-- Footer -->
    <?php get_footer();?>
