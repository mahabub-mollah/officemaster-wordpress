<?php get_header();?>

<section class="page_area">
   <div class="container">
      <div class="row">
        <div class="col-md-12">



            <?php
         if (have_posts()) {
           the_post();?>

          <div class="page_content">
                <h2><?php the_title();?></h2>
  	             <?php the_content();?>
         </div>
         <?php }
          ?>
  	
           </div>
  	
      </div>
	
</div>
	
</section>

<?php get_footer();?>