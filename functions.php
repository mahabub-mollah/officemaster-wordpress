<?php
function officemaster_theme_support(){
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
 add_image_size('slide-img',1500,500,true);
  add_image_size('small-slide-img',265,192,true);
 add_image_size('team member',100,80,true);
 add_image_size('post_thumb',500,300,true);


 
 register_nav_menus(array(

 	'secondary_menu'=>'secondary menu'



 	));
}
add_action('after_setup_theme','officemaster_theme_support');


function officemaster_css_js(){

	wp_enqueue_style('google-font-1','//fonts.googleapis.com/css?family=Open+Sans:400,300',null,'v1.0','all');
	wp_enqueue_style('google-font-2','//fonts.googleapis.com/css?family=PT+Sans',null,'v1.0','all');
	wp_enqueue_style('google-font-3','//fonts.googleapis.com/css?family=Raleway',null,'v1.0','all');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css',null,'v1.0','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',null,'v1.0','all');
	wp_enqueue_style('theme-style',get_template_directory_uri().'/assets/css/style.css',null,'v1.0','all');
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css',null,'v1.0','all');
	wp_enqueue_style('main-style',get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js','jquery',null,true);
	wp_enqueue_script('wow-js',get_template_directory_uri().'/js/wow.min.js','jquery',null,true);
	
	wp_enqueue_script('mixit-up',get_template_directory_uri().'/js/jquery.mixitup.js','jquery',null,true);
	wp_enqueue_script('initial-script',get_template_directory_uri().'/js/init.js','jquery',null,true);
	
	
	

}
add_action('wp_enqueue_scripts','officemaster_css_js');
function footer_extra_script(){
	?>
   <script>
      new WOW().init();
    </script>


	<?php

}
add_action('wp_footer','footer_extra_script',30);

function office_master_fallback_menu(){

	?>
	<ul class="nav navbar-nav pull-right">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Team</a>
                    </li>
                    <li>
                        <a href="#"><span>Contact</span></a>
                    </li>
                </ul>

	<?php

}
function office_master_custompost(){

	register_post_type('slider',array(

		'labels'=>array(
			'name'=>'Main Slider',
			'menu_name'=>'Slide1 Menu',
			'all_items'=>'All Slider',
			'add_new'=>'Add New Slide',
			'add_new_item'=>'Add New Slide item'


			),
		'public'=>true,
		'supports'=>array(
			'title','thumbnail','revisions','custom-fields','page-attributes'
			)




		));
	register_post_type('mainslider',array(

		'labels'=>array(
			'name'=>'Main Slider',
			'menu_name'=>'Main Slide Menu',
			'all_items'=>'All Slider',
			'add_new'=>'Add New Slide',
			'add_new_item'=>'Add New Slide item'


			),
		'public'=>true,
		'supports'=>array(
			'title','thumbnail','revisions','custom-fields','page-attributes'
			)




		));
	register_post_type('services',array(

		'labels'=>array(
			'name'=>'Service',
			'menu_name'=>'Service Menu',
			'all_items'=>'All Service',
			'add_new'=>'Add New Service',
			'add_new_item'=>'Add New Service item'


			),
		'public'=>true,
		'supports'=>array(
			'title','revisions','custom-fields','page-attributes'
			)




		));
	register_post_type('team',array(

		'labels'=>array(
			'name'=>'Team',
			'menu_name'=>'Team Menu',
			'all_items'=>'All Team',
			'add_new'=>'Add New Team',
			'add_new_item'=>'Add New Team item'


			),
		'public'=>true,
		'supports'=>array(
			'title','revisions','page-attributes','thumbnail'
			)


        

		));

register_taxonomy(
	                 'team_category',
                     'team',
                     array(
                     	'labels'=>array(
                     		'name'=>'Team Category',
                     		'add_new_item'=>'Add new category'


                     		),
                     	'hierarchical'=>true,
                     	'show_admin_column'=>true

                     	)
);
register_taxonomy(
	                 'team_tag',
                     'team',
                     array(
                     	'labels'=>array(
                     		'name'=>'Team tags',
                     		'add_new_item'=>'Add new tag'


                     		),
                     
                     	'show_admin_column'=>true

                     	)
);
register_post_type('filtering',array(

		'labels'=>array(
			'name'=>'filtering',
			'menu_name'=>'filtering Menu',
			'all_items'=>'All filtering',
			'add_new'=>'Add New filtering',
			'add_new_item'=>'Add New filtering item'


			),
		'public'=>true,
		'supports'=>array(
			'title','revisions','page-attributes','thumbnail'
			)


        

		));

register_taxonomy(
	                 'filtering_category',
                     'filtering',
                     array(
                     	'labels'=>array(
                     		'name'=>'filtering Category',
                     		'add_new_item'=>'Add new category'


                     		),
                     	'hierarchical'=>true,
                     	'show_admin_column'=>true

                     	)
);
}
add_action('init','office_master_custompost');




/*            Short Code*/





 function myslider($para,$content){

$test=shortcode_atts(array(



	'name'=>'Your name',
	'color'=>'red'

          ),$para); ob_start();?>


<h4 style="color:<?php echo $test['color'];?>;"><?php echo $content;?></h4>

<?php return ob_get_clean(); }
 add_shortcode('my_slider','myslider');



/*            Short Code for custom post */

 function ebitslider($para,$content){

$test=shortcode_atts(array(



	'id'=>0,
	

          ),$para); ob_start();?>


            <div id="carousel-example-generic<?php echo $para['id'];?>" class="carousel slide" data-ride="carousel">
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                        <?php

                      $ebit_post = null;
                      $ebit_post = new WP_Query(array(

                        'post_type'=>'slider',
                        'posts_per_page'=>-1


                        ));
                      if ($ebit_post->have_posts()) {
                        $x=0;
                        while ($ebit_post->have_posts() ) {
                            $x++;
                            $ebit_post->the_post();
                            $slider_caption =get_post_meta( get_the_ID(),'_office-master_slider_caption',true);
                            ?>

                            <!-- Begin Slide 1 -->
                        <div class="item <?php if ($x==1) {echo'active';
                            
                        }?>">
                            <?php
                            the_post_thumbnail('slide-img');
                            ?>
                            
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


                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <?php

                    for ($i=0; $i <$x ; $i++) { ?>
                        <li data-target="#carousel-example-generic<?php echo $para['id'];?>" data-slide-to="<?php echo $i;?>" class="<?php if ($i==0) {
                            echo"active";}?>"></li>
                        
                   <?php }



                    ?>
                        
                            
                            
                        </ol>



                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic<?php echo $para['id'];?>" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic<?php echo $para['id'];?>" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                        
    </div>
  

         
<?php return ob_get_clean(); }
 add_shortcode('ebit_slider','ebitslider');



 /*         short code list by using button*/

 // Hooks your functions into the correct filters
function my_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'office_master_tinymce_plugin' );
		add_filter( 'mce_buttons', 'office_master_register_mce_button' );
	}
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function office_master_tinymce_plugin( $plugin_array ) {
	$plugin_array['my_mce_button'] = get_template_directory_uri() .'/js/mce-button.js';
	$plugin_array['my_mce_button1'] = get_template_directory_uri() .'/js/mce-button.js';

	return $plugin_array;
}

// Register new button in the editor
function office_master_register_mce_button( $buttons ) {
	array_push( $buttons, 'my_mce_button' );
	array_push( $buttons, 'my_mce_button1' );
	return $buttons;
}


function cExcerpt($number=50, $readmore ='Read More'){
    
    $newnumber = $number+1;


	$var = explode(' ',strip_tags(get_the_content()), $newnumber);
  if (count($var) >= $newnumber ) {


  	array_pop($var);
  	
  }
	
	array_push($var, '<a href="'.get_the_permalink().'">'.$readmore.'</a>');
	$var = implode(' ',$var );

	return $var;
}




include_once('inc/cmb2_custom-field.php');
require_once('inc/redux-framework-master/redux-framework.php');
require_once('inc/officemaster-theme-options.php');
include_once('inc/office-master-plugin-activation.php');
include_once('inc/officemaster_widget.php');
include_once('inc/custom_user_register.php');
