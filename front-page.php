<?php get_header();

$sorte_options =$office_master['sort_subsection']['Active'];
if (is_array($sorte_options)) {

  foreach ($sorte_options as $key => $value) {

   switch($key){

    case 'mainslider':
         get_template_part('section-slider');
  
      break;

      case 'services':
          get_template_part('section-service');
      break;

      case 'red':
     get_template_part('section-red');

      break;

      case 'green':
     get_template_part('section-green');
      break;

      case 'blue':
   get_template_part('section-blue');
      break;





   }
  
  }




 
}





 get_footer();?>
