<?php get_header(); ?>
      <section class="home-hero swiper-container">
        <div class="swiper-wrapper">
          <div class="home-hero__wrapper swiper-slide">
            <img src="<?php echo get_theme_file_uri('/images/girl-painting-paper.jpg'); ?>" alt="hero img" />
            <div class="home-hero__content">
              <div class="home-hero__content--text">
                <h1>Welcome to Abacus Kenya</h1>
                <p>Quality learning for every child</p>
                <a class="btn btn--green" href="<?php echo esc_url(site_url('/pricing/')); ?>"
                  >Start learning abacus</a
                >
              </div>
            </div>
          </div>
          <div class="home-hero__wrapper swiper-slide">
            <img src="<?php echo get_theme_file_uri('/images/girl-painting-paper.jpg'); ?>" alt="hero img" />
            <div class="home-hero__content">
              <div class="home-hero__content--text">
                <h1>Welcome to Abacus Kenya</h1>
                <p>Quality learning for every child</p>
                <a class="btn btn--green" href="<?php echo esc_url(site_url('/pricing/')); ?>"
                  >Start learning abacus</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </section>
    </header>
    <main>
      <section class="benefits">
        <div class="container">
          <div class="benefits__wrapper">
            <div class="benefits__img">
              <img
                src="<?php echo get_theme_file_uri('/images/child-with-abacus.png'); ?>"
                alt="child with abacus"
              />
            </div>
            <div class="benefits__content">
              <p class="benefits__cta">Learn at your schedule</p>
              <h2>Benefits of Learning With Abacus Kenya</h2>
              <div class="benefits__items">
                <div class="benefits__item flex">
                  <div class="benefits__item--icon">
                    <svg
                      width="45"
                      height="36"
                      viewBox="0 0 45 36"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M22.5 18L5.715 11.295L6.75 36H2.25L3.33 10.3275L0 9L22.5 0L45 9L22.5 18ZM22.5 6.75C21.2625 6.75 20.25 7.245 20.25 7.875C20.25 8.505 21.2625 9 22.5 9C23.7375 9 24.75 8.505 24.75 7.875C24.75 7.245 23.7375 6.75 22.5 6.75ZM22.5 20.25L35.0325 15.2325C36.63 17.3475 37.7325 19.89 38.0925 22.6575C37.4175 22.5675 36.72 22.5 36 22.5C30.2625 22.5 25.245 25.5825 22.5 30.1725C21.1067 27.8342 19.13 25.8978 16.7636 24.5528C14.3971 23.2079 11.7219 22.5005 9 22.5C8.28 22.5 7.5825 22.5675 6.9075 22.6575C7.2675 19.89 8.37 17.3475 9.9675 15.2325L22.5 20.25Z"
                        fill="#5CB270"
                      />
                    </svg>
                  </div>
                  <div class="benefits__item--content">
                    <h3>Online Courses</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Laborum expedita sint labore debitis esse magnam aliquid
                      totam hic, unde minima!
                    </p>
                  </div>
                </div>
                <div class="benefits__item flex">
                  <div class="benefits__item--icon">
                    <svg
                      width="45"
                      height="45"
                      viewBox="0 0 45 45"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M28.5 43.5H27C27 43.7786 27.0776 44.0516 27.224 44.2886C27.3705 44.5256 27.58 44.7171 27.8292 44.8416C28.0783 44.9662 28.3573 45.019 28.6347 44.9939C28.9122 44.9689 29.1772 44.8671 29.4 44.7L28.5 43.5ZM34.5 39L35.4 37.8C35.1404 37.6053 34.8246 37.5 34.5 37.5C34.1754 37.5 33.8596 37.6053 33.6 37.8L34.5 39ZM40.5 43.5L39.6 44.7C39.8229 44.8671 40.0879 44.9689 40.3653 44.9939C40.6427 45.019 40.9217 44.9662 41.1708 44.8416C41.42 44.7171 41.6295 44.5256 41.776 44.2886C41.9224 44.0516 42 43.7786 42 43.5H40.5ZM34.5 33C32.5109 33 30.6032 32.2098 29.1967 30.8033C27.7902 29.3968 27 27.4891 27 25.5H24C24 28.2848 25.1063 30.9555 27.0754 32.9246C29.0445 34.8937 31.7152 36 34.5 36V33ZM42 25.5C42 27.4891 41.2098 29.3968 39.8033 30.8033C38.3968 32.2098 36.4891 33 34.5 33V36C37.2848 36 39.9555 34.8937 41.9246 32.9246C43.8938 30.9555 45 28.2848 45 25.5H42ZM34.5 18C36.4891 18 38.3968 18.7902 39.8033 20.1967C41.2098 21.6032 42 23.5109 42 25.5H45C45 22.7152 43.8938 20.0445 41.9246 18.0754C39.9555 16.1062 37.2848 15 34.5 15V18ZM34.5 15C31.7152 15 29.0445 16.1062 27.0754 18.0754C25.1063 20.0445 24 22.7152 24 25.5H27C27 23.5109 27.7902 21.6032 29.1967 20.1967C30.6032 18.7902 32.5109 18 34.5 18V15ZM27 31.5V43.5H30V31.5H27ZM29.4 44.7L35.4 40.2L33.6 37.8L27.6 42.3L29.4 44.7ZM33.6 40.2L39.6 44.7L41.4 42.3L35.4 37.8L33.6 40.2ZM42 43.5V31.5H39V43.5H42ZM45 15V4.5H42V15H45ZM40.5 0H4.5V3H40.5V0ZM0 4.5V40.5H3V4.5H0ZM4.5 45H24V42H4.5V45ZM0 40.5C0 41.6935 0.474106 42.8381 1.31802 43.682C2.16193 44.5259 3.30653 45 4.5 45V42C4.10218 42 3.72064 41.842 3.43934 41.5607C3.15804 41.2794 3 40.8978 3 40.5H0ZM4.5 0C3.30653 0 2.16193 0.474106 1.31802 1.31802C0.474106 2.16193 0 3.30653 0 4.5H3C3 4.10217 3.15804 3.72064 3.43934 3.43934C3.72064 3.15804 4.10218 3 4.5 3V0ZM45 4.5C45 3.30653 44.5259 2.16193 43.682 1.31802C42.8381 0.474106 41.6935 0 40.5 0V3C40.8978 3 41.2794 3.15804 41.5607 3.43934C41.842 3.72064 42 4.10217 42 4.5H45ZM9 15H24V12H9V15ZM9 24H18V21H9V24Z"
                        fill="#5CB270"
                      />
                    </svg>
                  </div>
                  <div class="benefits__item--content">
                    <h3>Earn a Certificate</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Laborum expedita sint labore debitis esse magnam aliquid
                      totam hic, unde minima!
                    </p>
                  </div>
                </div>
                <div class="benefits__item flex">
                  <div class="benefits__item--icon">
                    <svg
                      width="49"
                      height="49"
                      viewBox="0 0 49 49"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M24.5 38.4582L33.0705 44.9545L47 26.5455M16.3182 22.4545C19.0306 22.4545 21.632 21.377 23.55 19.459C25.4679 17.5411 26.5455 14.9397 26.5455 12.2273C26.5455 9.51483 25.4679 6.91348 23.55 4.9955C21.632 3.07751 19.0306 2 16.3182 2C13.6057 2 11.0044 3.07751 9.08641 4.9955C7.16842 6.91348 6.09091 9.51483 6.09091 12.2273C6.09091 14.9397 7.16842 17.5411 9.08641 19.459C11.0044 21.377 13.6057 22.4545 16.3182 22.4545V22.4545ZM29.9061 32.06C29.2449 30.0032 28.1099 28.1304 26.5925 26.5925C24.0336 24.0091 20.4357 22.4545 16.3182 22.4545C8.13636 22.4545 2 28.5909 2 36.7727V47H22.4545L29.9061 32.06Z"
                        stroke="#5CB270"
                        stroke-width="4"
                      />
                    </svg>
                  </div>
                  <div class="benefits__item--content">
                    <h3>Learn With Experts</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Laborum expedita sint labore debitis esse magnam aliquid
                      totam hic, unde minima!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contacts">
        <div class="contacts__wrapper">
          <div class="contacts__content">
            <div class="contacts__text flex">
              <div class="container">
                <div class="contacts__text--wrapper flex flex-aic">
                  <div class="contacts__text--icon">
                    <svg
                      width="50"
                      height="41"
                      viewBox="0 0 50 41"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M45 0.0366211H5C2.2425 0.0366211 0 2.27912 0 5.03662V35.0366C0 37.7941 2.2425 40.0366 5 40.0366H45C47.7575 40.0366 50 37.7941 50 35.0366V5.03662C50 2.27912 47.7575 0.0366211 45 0.0366211ZM45 5.03662V6.31412L25 21.8716L5 6.31662V5.03662H45ZM5 35.0366V12.6466L23.465 27.0091C23.9028 27.353 24.4433 27.5399 25 27.5399C25.5567 27.5399 26.0972 27.353 26.535 27.0091L45 12.6466L45.005 35.0366H5Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                  <div class="contacts__text--inner">
                    <h3>Email</h3>
                    <p>info@abacus.co.ke</p>
                  </div>
                </div>
                <div class="contacts__text--wrapper flex flex-aic">
                  <div class="contacts__text--icon">
                    <svg
                      width="50"
                      height="51"
                      viewBox="0 0 50 51"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M24.975 0.0366211C11.175 0.0366211 0 11.2366 0 25.0366C0 38.8366 11.175 50.0366 24.975 50.0366C38.8 50.0366 50 38.8366 50 25.0366C50 11.2366 38.8 0.0366211 24.975 0.0366211ZM25 45.0366C13.95 45.0366 5 36.0866 5 25.0366C5 13.9866 13.95 5.03662 25 5.03662C36.05 5.03662 45 13.9866 45 25.0366C45 36.0866 36.05 45.0366 25 45.0366ZM26.25 12.5366H22.5V27.5366L35.625 35.4116L37.5 32.3366L26.25 25.6616V12.5366Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                  <div class="contacts__text--inner">
                    <h3>Working Hours</h3>
                    <p>Mon - Fri. 9AM - 4PM</p>
                  </div>
                </div>
                <div class="contacts__text--wrapper flex flex-aic">
                  <div class="contacts__text--icon">
                    <svg
                      width="50"
                      height="51"
                      viewBox="0 0 50 51"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M44.2328 50.0182H43.906C6.13144 47.8459 0.768034 15.9731 0.0183102 6.24587C-0.0420997 5.48957 0.0473162 4.72879 0.281434 4.0071C0.515552 3.28542 0.889771 2.61702 1.38265 2.04021C1.87553 1.4634 2.47738 0.989516 3.15371 0.645703C3.83005 0.301891 4.56758 0.0949108 5.32405 0.0366229H15.9163C16.6863 0.0358775 17.4388 0.266365 18.0763 0.698229C18.7139 1.13009 19.207 1.74344 19.4919 2.45881L22.4139 9.64847C22.6952 10.3473 22.7651 11.1135 22.6147 11.8517C22.4643 12.5899 22.1004 13.2677 21.5681 13.8008L17.4734 17.9339C18.113 21.5686 19.8537 24.9191 22.4598 27.5322C25.066 30.1452 28.412 31.8947 32.045 32.5439L36.2165 28.4108C36.7577 27.8844 37.4418 27.5289 38.1836 27.3887C38.9255 27.2486 39.6922 27.3299 40.3881 27.6226L47.6354 30.5254C48.34 30.8193 48.9411 31.3163 49.3622 31.9531C49.7833 32.5899 50.0053 33.3376 49.9999 34.101V44.2511C49.9999 45.7806 49.3923 47.2475 48.3108 48.3291C47.2292 49.4106 45.7623 50.0182 44.2328 50.0182ZM5.78542 3.88136C5.27557 3.88136 4.78661 4.0839 4.4261 4.44441C4.06558 4.80492 3.86305 5.29389 3.86305 5.80373V5.95752C4.74734 17.3379 10.4183 44.2511 44.1175 46.1735C44.37 46.1891 44.6232 46.1547 44.8624 46.0722C45.1016 45.9898 45.3222 45.8609 45.5115 45.6931C45.7008 45.5252 45.8551 45.3216 45.9656 45.0939C46.076 44.8663 46.1405 44.6191 46.1552 44.3664V34.101L38.9078 31.1982L33.3906 36.677L32.4679 36.5616C15.7433 34.4663 13.4749 17.7416 13.4749 17.5686L13.3596 16.6459L18.8191 11.1287L15.9355 3.88136H5.78542Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                  <div class="contacts__text--inner">
                    <h3>Telephone</h3>
                    <p>+254 700 123 123</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="contacts__map">
              <div class="contacts__map--content">
                <!-- https://maps.app.goo.gl/v684gYAtmqsmMLKi6 -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="blogs">
        <div class="container flex flex-aic">
          <div class="blogs__title">
            <h2>News & Events</h2>
          </div>
          <div class="blogs__items">
          <?php 
            $homepagePosts = new WP_Query(array(
                'posts_per_page' => 3
            ));
            while($homepagePosts->have_posts()) {
                $homepagePosts->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blogs__item">
              <div class="blogs__item--img">
              <?php if(has_post_thumbnail()) { ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
              <?php }?>
              </div>
              <div class="blogs__item--content">
                <h3><?php the_title(); ?></h3>
                <p>
                <?php 
                      if (has_excerpt()) {
                        echo get_the_excerpt();
                      } else {
                        echo wp_trim_words(get_the_content(), 18);
                      }
                    ?>
                </p>
              </div>
            </a>
            <?php
            } wp_reset_postdata();
          ?>
          </div>
          <a class="btn btn--green blogs__btn" href="<?php echo esc_url(site_url('/blog/')); ?>"
            >View All Posts</a
          >
        </div>
      </section>
    </main>
    
<?php get_footer(); ?>