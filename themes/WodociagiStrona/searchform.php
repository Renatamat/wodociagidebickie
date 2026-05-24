<!-- search -->

<form id="search" class="search" method="get" action="<?php echo home_url(); ?>">
    <label class="hidden-label" for="search">Wyszukiwana fraza</label>
    <input class="search-input" id="search" type="search" name="s" placeholder="<?php _e('szukaj', 'WodociagiStrona'); ?>">
       <input type="hidden" name="search" value="default_search">
       <button class="search-submit" type="submit" name="szukaj" aria-labelledby="foo"><i class="icon-magnifier icons"></i><span id="foo" class="visuallyhidden">Szukaj</span></button>

</form> 

<!-- /search -->

