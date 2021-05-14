<?php get_header(); 

while(have_posts()) { 
                the_post(); 
                ?>
      <section class="blogTitle">
        <div class="blogTitle__container container">
          <div class="blogTitle__text">
            <h3 class="blogTitle__text--breadcrumb">
              <a href="<?php echo esc_url(site_url('/blog'))?>">Blog</a> > <?php echo get_the_category_list(', '); echo ' > '; the_title(); ?>
            </h3>
            <h1><?php the_title(); ?></h1>
            <p>
                <?php 
                    if (has_excerpt()) {
                        echo get_the_excerpt();
                    } else {
                        echo '';
                    }
                ?>
            </p>
          </div>
          <div class="blogTitle__text--meta flex flex-aic">
            <div>
              <img src="<?php echo get_theme_file_uri('/images/portrait.jpg'); ?>" alt="" />
            </div>
            <div>
              <p><?php the_author_posts_link() ?></p>
              <p>Content specialist</p>
              <p>Updated on <?php the_time('F jS, Y') ?></p>
            </div>
          </div>
          <div class="blogTitle__img">
            <?php if(has_post_thumbnail()) { ?>
              <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" />
            <?php }?>
          </div>
        </div>
      </section>
    </header>
    <main>
      <section class="blogPost">
        <div class="blogPost__container container">
        <?php the_content(); ?>

          
        </div>
      </section>
    </main>
    <?php } get_footer(); ?>