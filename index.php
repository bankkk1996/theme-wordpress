<?php 
    get_header();
?>
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="row">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            get_template_part('template-parts/content','archive');
                        }
                    }
                ?>
            
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php wpbeginner_numeric_posts_nav(); ?>
                </div>
                
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
            <?php dynamic_sidebar('home_page_top_widget');?>
        </div>
    </div>
    
    
</section>




<?php
    get_footer();
?> 