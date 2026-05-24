<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<aside class="bip-menu projekty-menu aside-menu menu-right">   
         <div class="h2"><span>Projekty unijne</span></div>
    <?php
    wp_nav_menu( array( 
    'theme_location' => 'projekty', 
    'container_class' => 'custom-menu-class' ) ); 
    ?>
     <?php  get_template_part( 'template-parts/right-widgety');?>
</aside> 