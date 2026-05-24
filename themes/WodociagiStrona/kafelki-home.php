<div class="wp-block-group kafelki">
    <div class="wp-block-group__inner-container">
<?php
$i = 1;
while($i <= 6){
$kafelek_do_pobrania = get_field('kafelek_'.$i);

?>
<?php if ($kafelek_do_pobrania) : ?>
        <?php
        if (have_rows('kafelek_'.$i)):
            while (have_rows('kafelek_'.$i)) : the_row();
                $kafelek_tytul = get_sub_field('tytul');
                $kafelek_link = get_sub_field('link');
                $kafelek_ikona = get_sub_field('ikona');
                $kafelek_ikona_hover = get_sub_field('ikona_-_hover');
                $kafelek_opis = get_sub_field('opis');
  
                ?>
<div class="box_item">
     <?php
    $current_domain = $_SERVER['SERVER_NAME'];

    $is_internal = (strpos($kafelek_link, $current_domain) !== false || strpos($kafelek_link, '/') === 0);
    $target_attr = $is_internal ? '' : ' target="_blank" rel="noopener noreferrer"';
    ?>
    <a class="like_h3" href="<?= $kafelek_link ?>" <?= $target_attr ?> >
        <?php if($kafelek_tytul): echo $kafelek_tytul; endif;
        if($kafelek_ikona):?> <figure class="wp-block-image size-large"><img src="<?=$kafelek_ikona ?>" class="wp-image-115" alt="Ikona -<?= strip_tags($kafelek_tytul) ?>"></figure><?php endif;
        if($kafelek_ikona_hover):?> <figure class="wp-block-image size-large hover-img"><img src="<?=$kafelek_ikona_hover ?>" alt="Ikona w kontraście -<?= strip_tags($kafelek_tytul) ?>" class="wp-image-115"></figure></a><?php endif;
        if($kafelek_opis):?> <p><?= $kafelek_opis ?> </p><?php endif; ?>
</div>

                <?php
            endwhile;
        endif;

 endif; 
 $i++;
}
?>
        
        </div>
</div>