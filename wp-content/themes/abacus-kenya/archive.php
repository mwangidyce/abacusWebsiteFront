<?php get_header(); ?>

      <section class="hero">
        <div class="hero__wrapper">
          <img src="<?php echo get_theme_file_uri('/images/girl-painting-paper.jpg'); ?>" alt="hero img" />
          <div class="hero__content">
            <div class="hero__content--text">
              <h1><?php single_cat_title($prefix  = 'Explore '); ?></h1>
              <p>Get the latest from our Experts</p>
            </div>
          </div>
        </div>
      </section>
    </header>
    <main>
      <section class="blog">
        <div class="blog__container container">
          <h2>Latest Posts</h2>

          <div class="blog__category flex flex-aic">
            <ul>
              <li class="blog__category--title">Categories:</li>
            </ul>
            <ul class="flex flex-aic">
            <?php
                wp_list_categories(array(
                    'show_option_all' => 'All',
                    'title_li' => ''
                ));
            ?>
            </ul>
          </div>

          <div class="blog__content">
            <div class="blog__content--main">

              <div class="blogs__items">
            <?php while(have_posts()) { 
                the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blogs__item">
                  <div class="blogs__item--img">
                    <?php if(has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
                    <?php }?>
                  </div>
                  <div class="blogs__item--content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </a>
              <?php } ?>
              </div>
              <?php 
              echo paginate_links(); 
              ?>


            </div>
            <div class="blog__content--aside aside">
              <div class="aside__item">
                <h3>Sidebar Content 1</h3>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim
                  totam aliquid aspernatur porro, similique sunt itaque.
                  Delectus, temporibus modi, expedita exercitationem, pariatur
                  laboriosam harum sit enim a incidunt aut dicta.
                </p>
              </div>
              <div class="aside__item">
                <h3>Sidebar Content 2</h3>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim
                  totam aliquid aspernatur porro, similique sunt itaque.
                  Delectus, temporibus modi, expedita exercitationem, pariatur
                  laboriosam harum sit enim a incidunt aut dicta.
                </p>
              </div>
              <div class="aside__item">
                <h3>Sidebar Content 3</h3>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim
                  totam aliquid aspernatur porro, similique sunt itaque.
                  Delectus, temporibus modi, expedita exercitationem, pariatur
                  laboriosam harum sit enim a incidunt aut dicta.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
<?php get_footer(); ?>