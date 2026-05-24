<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
$has_widgety_sidebar = is_active_sidebar('widgety_sidebar');
if ($has_widgety_sidebar) {
    ?>
    <div class="widgety-sidebar">
    <?php dynamic_sidebar('widgety_sidebar'); ?>
    </div>
<?php
} 
