<form role="search" class="input-group" action="<?php echo home_url('/'); ?>" method="get">
    <input type="search" class="form-control rounded" placeholder="<?php if(get_bloginfo('language')==='en-US'){?>Search...<?php }else{?>ค้นหา...<?php }?>" value="<?php echo get_search_query(); ?>" name="s" title="Search" aria-label="Search"
  aria-describedby="search-addon">
    <button type="submit" class="btn btn-outline-primary"><?php if(get_bloginfo('language')==='en-US'){?>Search<?php }else{?>ค้นหา<?php }?></button>
</form>