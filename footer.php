
<?php global $office_master;?>




<!-- Footer -->

    <footer style="background:<?php echo $office_master['footer_background'];?>"> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa <?php echo  $office_master['col_1_icon'];?>"></i><?php echo  $office_master['col_1_title'];?></h3>
                    <p class="footer-contact">
                        <?php echo $office_master['col_1_text'];?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa <?php echo  $office_master['col_2_icon'];?>"></i><?php echo  $office_master['col_2_title'];?></h3>


                    <?php 

                    if (is_array($office_master['col_2_links'])) {
                        foreach($office_master['col_2_links'] as $single_value){


                         echo '<p><a href="'.$single_value['url'].'">'.$single_value['title'].'</a></p>';

                   }
                        
                    }

                ?>
                    
                    
                </div>
              <div class="col-md-4">
                <h3><i class="fa <?php echo  $office_master['col_3_icon'];?>"></i> <?php echo  $office_master['col_3_title'];?></h3>
                <div id="social-icons">

          <?php 

                    if (is_array($office_master['col_3_links'])) {
                        foreach($office_master['col_3_links'] as $single_value){?>

                        <a href="<?php echo $single_value['url'] ;?>" class="btn-group google-plus">
                        <i class="fa <?php echo $single_value['title']; ?>"></i>
                    </a>


                         

              <?php     }
                        
                    }

                ?>



                    
                     
              </div>
              </div>    
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <?php  echo $office_master['copyright_text'] ;?>
    </div>

    
   
    
    
    
    <?php wp_footer();?>
  </body>
</html>