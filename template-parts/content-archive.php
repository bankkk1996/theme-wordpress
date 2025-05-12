<div class="col-sm-12 col-md-6 col-lg-6 ">
    <div class="arc">
		<div class="arc-img">
			<img src="<?php
				the_post_thumbnail_url();
			?>" >
		</div>
        
        <div class="arc-content">
            <div class="arc-header">
                <div class="arc-list">
                    <span class="arc-cat">
                    <?php 
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            foreach($categories as $category){
                                $category_id = get_cat_ID( $category->name);
            
                                $category_link = get_category_link( $category_id );
                                ?>
                        
                                <a href="<?php echo esc_url( $category_link );  ?>">
                                    <?php
                                        echo esc_html( $category->name ); 
                                    ?>
                                </a>
                                <?php
                            }
                        }
                    ?>
                    </span>
                </div>
                <h2 class="arc-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                </h2>
            </div>
            <div class="arc-body">
<!--                 <p><?php if(get_bloginfo('language')==='en-US'){the_excerpt(); }else{the_excerpt(12); }?></p> -->
                <div class="arc-btn">
                <a href="<?php the_permalink(); ?>" class="card-links">
                
                <?php if(get_bloginfo('language')==='en-US'){?>
                Read More 
                <?php }else{?>
                    อ่านเพิ่มเติม
                    <?php }?>
                &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>

