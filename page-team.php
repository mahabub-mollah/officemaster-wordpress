
<?php get_header();


if (have_posts()) {

    the_post();

         $page_thumb=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');?>

         <div class="row container-kamn">  
        <img src="<?php echo $page_thumb[0];?>" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%"> 

    </div>

    
<?php
}
    
?>

    
    <!--End Header -->


    <!-- Main Container -->

    <div id="banners"></div>
    <div class="container">
        <div class="row">
        <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'team',
                        'posts_per_page'=>-1,
                        'order'=>'ASC',
                        'team_category'=>'designer',
                         'team_tag'=>'first+second'


                        ));
                      if ($ebit_post->have_posts()) {
                        
                        while ($ebit_post->have_posts() ) {
                        
                            $ebit_post->the_post();
                            $team_designation =get_post_meta( get_the_ID(),'_office-master_team_designation',true);
                            $block_quote =get_post_meta( get_the_ID(),'_office-master_block_quote',true);
                            $animation_style =get_post_meta( get_the_ID(),'_office-master_animation_style',true);
                            ?>

                            <!-- Begin Slide 1 -->
                             <div class="col-md-6">
                <div class="blockquote-box <?php echo $block_quote ;?> animated wow <?php echo $animation_style ;?> clearfix">
                    <div class="square pull-left">
                        <?php echo the_post_thumbnail('team member')?>
                    </div>
                    <h4>
                      <?php the_title();?>
                    </h4>
                    <p>
                        <?php echo $team_designation ;?>
                    </p>
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
    </div>
    <!--End Main Container -->


    <?php get_footer()?>
    
    

    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>
