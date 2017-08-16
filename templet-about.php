<?php get_header();

/*
template name: For About Us




*/


if (have_posts()) {

    the_post();

         $page_thumb=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');

         $group_metabox= get_post_meta(get_the_ID(),'_office-master_group_main', true);

           $container = get_the_content();
         ?>
        

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
            <div class="side-left col-sm-4 col-md-4">

      
     <?php

     foreach ($group_metabox as $single) {


     ?>
                <h3 class="lead"><?php echo $single['_office-master_heading'];?> </h3><hr>

                <p><?php  echo $single['_office-master_description'];?></p>

                <?php 
                if (is_array($single['_office-master_ancor'])) {
                 foreach($single['_office-master_ancor'] as $key=>$child_single){?>

                 <a href="<?php echo $child_single; ?>"> <?php echo  $single['_office-master_hash_title'][$key] ;?></a> <br>
                    
                



                 


                


 <?php     }}?>

                 <br>


                
               
                
                <?php     }?>
                
            </div>
            <div class="col-sm-8 col-md-8">
            <?php echo $container;

    ?>
          </div> 
        </div>    
    </div>  

    <!--End Main Container -->

    <!-- Footer -->
    <?php get_footer();?>
