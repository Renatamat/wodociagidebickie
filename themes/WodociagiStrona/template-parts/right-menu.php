<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<aside class="bip-menu aside-menu menu-right">   
         <div class="h2"><span>Wybierz dział z menu</span></div>
    <?php
    wp_nav_menu( array( 
    'theme_location' => 'bip-menu', 
    'container_class' => 'custom-menu-class' ) ); 
    ?>
</aside> 