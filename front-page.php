<?php 
    get_header();
?>
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        the_content();
                    }
                }
            ?>
        </div>
    </div>
    
    
</section>
<?php
    get_footer();
?> 