<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
  <div>
    <label for="s" class="screen-reader-text">Search for:</label>
    <input type="text" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
    <button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
  </div>
</form>