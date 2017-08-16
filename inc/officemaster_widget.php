<?php


class EbitSlider extends wp_widget{

	public function __construct(){

		parent:: __construct(

			'ebitSlider',
			'ebit Slider',
			array(

				'description'=>'This is widget for slider'
                       )
               );
              }



              public function form($value){ ?>

              <label for="<?php echo $this->get_field_id('sliderid');?>">ID</label>
              <input type="text" name="<?php echo $this->get_field_name('slider_id');?>" id="<?php echo $this->get_field_id('sliderid');?>" value="<?php echo $value['slider_id'];?>" class="widefat">
           <?php 

            }
            public function update($new,$old){

            	$old['slider_id'] =$new['slider_id'];
            	return $old;


            }


              public function widget($args,$value){

              	echo do_shortcode('[ebit_slider id="'.$value['slider_id'].'"]');
              }



  }






class EbitPost extends wp_widget{

	public function __construct(){

		parent:: __construct(

			'EbitPost',
			'ebit Post',
			array(

				'description'=>'This is widget for Post'
                       )
               );
              }



              public function form($value){ ?>

              <label for="<?php echo $this->get_field_id('postType');?>">postType</label>
              <input type="text" name="<?php echo $this->get_field_name('post_type');?>" id="<?php echo $this->get_field_id('postType');?>" value="<?php echo $value['post_type'];?>" class="widefat">

              <label for="<?php echo $this->get_field_id('post_per_page');?>">post per page</label>
              <input type="text" name="<?php echo $this->get_field_name('post_per_page');?>" id="<?php echo $this->get_field_id('post_per_page');?>" value="<?php echo $value['post_per_page'];?>" class="widefat">
           <?php 

            }
            public function update($new,$old){

            	$old['post_per_page'] =$new['post_per_page'];
            	return $old;


            }


              public function widget($args,$value){

              	$post_query = null;

             


              			$post_query = new WP_Query(array(

                        'post_type'=>$value['post_type'],
                        'posts_per_page'=>$value['post_per_page']


                        ));


              	if ($post_query->have_posts()) {
              		echo '<ul>';
              		while ($post_query-> have_posts()) {
              			$post_query->the_post();
              			echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
              		}
              		echo '</ul>';
              	}
              	wp_reset_postdata();
              	$post_query=null;
              }



  }







function officeWidget(){

 register_sidebar(array(

 	'name'=>'Office custom sidebar',
 	'id' =>'widgetsidebar'

 	));
 register_widget('EbitSlider');
 register_widget('EbitPost');
}

add_action('widgets_init','officeWidget');