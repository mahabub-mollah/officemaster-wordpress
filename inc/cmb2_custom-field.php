<?php
/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}




function office_master_cmb2(){

	$pref='_office-master_';

	$service_item = new_cmb2_box( array(
		'id'            => 'service_metabox',
		'title'         => __( 'service Metabox', 'office_master' ),
		'object_types'  => array( 'services', ), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$service_item->add_field( array(
		'name'       => __( 'Service Icon', 'cmb2' ),
		'desc'       => __( 'Write here your service icon\'s font awesome name', 'office_master' ),
		'id'         =>$pref.'service_icon',
		'type'       => 'text',
		'repeatable' =>'true'
		
	) );
	$service_item->add_field( array(
		'name'       => __( 'Description', 'cmb2' ),
		'desc'       => __( 'Write here your service icon\'s font awesome name', 'office_master' ),
		'id'         =>$pref.'service_description',
		'type'       => 'textarea'
		
	) );

  $slider_item = new_cmb2_box( array(
		'id'            => 'slider_metabox',
		'title'         => __( 'slider Metabox', 'office_master' ),
		'object_types'  => array( 'slider', 'services','page'), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
   $slider_item->add_field( array(
		'name'       => __( 'Slider Caption', 'office_master' ),
		'desc'       => __( 'Write here your slider caption', 'office_master' ),
		'id'         =>$pref.'slider_caption',
		'type'       => 'text'
		
	) );
   $special_item = new_cmb2_box( array(
		'id'            => 'special_metabox',
		'title'         => __( 'special Metabox', 'office_master' ),
		'object_types'  => array( 'page'), 
		'show_on'       => array(
         'key'          =>'id',
		'value'         =>'11'
                              ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
   $special_item->add_field( array(
		'name'       => __( 'Special Caption', 'office_master' ),
		'desc'       => __( 'Write here your slider caption', 'office_master' ),
		'id'         =>$pref.'special_caption',
		'type'       => 'text'
		
	) );

   $team_member = new_cmb2_box( array(
		'id'            => 'team_metabox',
		'title'         => __( 'team Metabox', 'office_master' ),
		'object_types'  => array( 'team'), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
   $team_member->add_field( array(
		'name'       => __( 'Team Member Designation', 'office_master' ),
		'desc'       => __( 'Write here your Team Member des', 'office_master' ),
		'id'         =>$pref.'team_designation',
		'type'       => 'text'
		
	) );
   $team_member->add_field( array(
		'name'       => __( 'BlockQUote color', 'office_master' ),
		'desc'       => __( 'Write here your BlockQUote color', 'office_master' ),
		'id'         =>$pref.'block_quote',
		'type'       => 'text'
		
	) );
   $team_member->add_field( array(
		'name'       => __( 'Animation', 'office_master' ),
		'desc'       => __( 'Write here your Animation', 'office_master' ),
		'id'         =>$pref.'animation_style',
		'type'       => 'text'
		
	) );
   $post_meta = new_cmb2_box( array(
		'id'            => 'post_metabox',
		'title'         => __( 'post Metabox', 'office_master' ),
		'object_types'  => array( 'post'), 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
   $post_meta->add_field( array(
		'name'       => __( 'post_icon', 'office_master' ),
		'desc'       => __( 'Write here your post_icon', 'office_master' ),
		'id'         =>$pref.'post_icon',
		'type'       => 'text'
		
	) );


   $group_post_meta = new_cmb2_box( array(
		'id'            => 'group_post_metabox',
		'title'         => __( 'group_post Metabox', 'office_master' ),
		'object_types'  => array('page'),
		
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		'show_on'       =>array(

			'key' =>'id',
			'value'=> 43
            ) 
	) );
    $main_field_group=$group_post_meta->add_field( array(
		'name'       => __( 'group_post', 'office_master' ),
		'desc'       => __( 'Write here your group post', 'office_master' ),
		'id'         =>$pref.'group_main',
		'type'       => 'group'
		
	) );
	$group_post_meta->add_group_field($main_field_group, array(
		'name'       => __( 'heading', 'office_master' ),
		'desc'       => __( 'Write here your heading', 'office_master' ),
		'id'         =>$pref.'heading',
		'type'       => 'text'
		
	) );
	$group_post_meta->add_group_field($main_field_group, array(
		'name'       => __( 'description', 'office_master' ),
		'desc'       => __( 'Write here your description', 'office_master' ),
		'id'         =>$pref.'description',
		'type'       => 'text'
		
	) );
	$group_post_meta->add_group_field( $main_field_group, array(
		'name'       => __( 'hashancor', 'office_master' ),
		'desc'       => __( 'Write here your hash ancor', 'office_master' ),
		'id'         =>$pref.'ancor',
		'type'       => 'text',
		'repeatable'=>'true'
		
	) );
	$group_post_meta->add_group_field( $main_field_group, array(
		'name'       => __( 'hash title', 'office_master' ),
		'desc'       => __( 'Write here your hash ancor', 'office_master' ),
		'id'         =>$pref.'hash_title',
		'type'       => 'text',
		'repeatable'=>'true'
		
	) );
}
add_action('cmb2_admin_init','office_master_cmb2');