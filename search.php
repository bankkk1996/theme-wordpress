<?php 
    get_header();
?>
<section class="content">
    <div class="breadcrumb" id="breadcrumb">
        <?php
            get_breadcrumb();
        ?>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
            <div class="header-archive">
                
                <h1>
                    You Are Looking For
                </h1>
                
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
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
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php wpbeginner_numeric_posts_nav(); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
            <?php dynamic_sidebar('home_page_top_widget');?>
        </div>
    </div>

</section>
<?php
    get_footer();
?> 