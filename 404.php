<?php 
    get_header();
?>
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="error">
                <div class="error-content">
                    404
                </div>
                <p class="error-text">
                <?php if(get_bloginfo('language')==='en-US'){?>We're sorry but it looks like that page doesn't exist anymore.<?php }else{?>ขออภัย ดูเหมือนว่าหน้านี้ไม่มีอยู่อีกต่อไป<?php }?>
                </p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-homepage"><?php if(get_bloginfo('language')==='en-US'){?>Take me to the home page<?php }else{?>กลับไปหน้าแรก<?php }?></a>
                
                <div class="row justify-content-center error-form">
                    <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="section-empty">
</section>
<?php
    get_footer();
?> 
