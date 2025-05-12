<section class="content">
    <div class="breadcrumb" id="breadcrumb">
        <?php
            get_breadcrumb();
        ?>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
        <div class="content-header">
                <span class="content-header-category">
                    <?php 
						foreach((get_the_category()) as $category){
							echo $category->name."  ";
							}
					?>
                </span>
                <h1 class="content-header-title">
                    <?php the_title();?>
                </h1>
                <div class="content-header-description">
                    <span class="date">
                        on <?php the_date();?>
                    </span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="admin">
                        by <?php echo $author = get_the_author(); ?>
                    </span>
                </div>
            </div>
            <div class="content-body">
                <?php
                    the_content();
                ?>
             </div>
            <div class="content-footer">
                <div class="pag-left">
                    <?php next_post_link("<span>".get_bloginfo('language')==='en-US' ? "Latest Posts" : "โพสต์ก่อนหน้า"."</span><h3>%link</h3>","%title"); ?>
                </div>
                <div class="pag-right">
                    <?php previous_post_link("<span>".get_bloginfo('language')==='en-US' ? "Previous Posts" : "โพสต์ถัดไป"."</span><h3>%link</h3>","%title"); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
            <?php dynamic_sidebar('home_page_top_widget');?>
        </div>
    </div>
</section>