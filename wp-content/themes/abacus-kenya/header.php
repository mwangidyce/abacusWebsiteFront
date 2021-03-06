<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right'); bloginfo('title'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="modal"></div>
    <header class="main__header">
      <div class="main__header--nav">
        <div class="nav container">
          <div class="brand flex flex-jcb flex-aic">
            <a class="site__brand logo" href="<?php echo esc_url(site_url('/')); ?>">Abacus Kenya</a>
            <div class="nav__toggle">
              <span>
                <svg
                  width="39"
                  height="30"
                  viewBox="0 0 39 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.2857 0C18.7174 0 18.1723 0.225765 17.7705 0.627629C17.3686 1.02949 17.1429 1.57454 17.1429 2.14286C17.1429 2.71118 17.3686 3.25622 17.7705 3.65809C18.1723 4.05995 18.7174 4.28571 19.2857 4.28571H36.4286C36.9969 4.28571 37.5419 4.05995 37.9438 3.65809C38.3457 3.25622 38.5714 2.71118 38.5714 2.14286C38.5714 1.57454 38.3457 1.02949 37.9438 0.627629C37.5419 0.225765 36.9969 0 36.4286 0H19.2857Z"
                    fill="white"
                  />
                  <path
                    d="M8.57143 15C8.57143 14.4317 8.7972 13.8867 9.19906 13.4848C9.60093 13.0829 10.146 12.8572 10.7143 12.8572H27.8571C28.4255 12.8572 28.9705 13.0829 29.3724 13.4848C29.7742 13.8867 30 14.4317 30 15C30 15.5684 29.7742 16.1134 29.3724 16.5153C28.9705 16.9171 28.4255 17.1429 27.8571 17.1429H10.7143C10.146 17.1429 9.60093 16.9171 9.19906 16.5153C8.7972 16.1134 8.57143 15.5684 8.57143 15Z"
                    fill="white"
                  />
                  <path
                    d="M0 27.8572C0 27.2889 0.225765 26.7438 0.627628 26.342C1.02949 25.9401 1.57454 25.7144 2.14286 25.7144H19.2857C19.854 25.7144 20.3991 25.9401 20.8009 26.342C21.2028 26.7438 21.4286 27.2889 21.4286 27.8572C21.4286 28.4255 21.2028 28.9706 20.8009 29.3724C20.3991 29.7743 19.854 30.0001 19.2857 30.0001H2.14286C1.57454 30.0001 1.02949 29.7743 0.627628 29.3724C0.225765 28.9706 0 28.4255 0 27.8572Z"
                    fill="white"
                  />
                </svg>
              </span>
            </div>
          </div>
          <div class="nav__items flex flex-c">
            <a class="nav__item <?php if (is_front_page()) echo 'active'; ?>" href="<?php echo esc_url(site_url('/')); ?>">Home</a>
            <a class="nav__item <?php if (is_page('about')) echo 'active'; ?>" href="<?php echo esc_url(site_url('/about/')); ?>">About us</a>
            <a class="nav__item <?php if (is_page('pricing')) echo 'active'; ?>" href="<?php echo esc_url(site_url('/pricing/')); ?>">Pricing</a>
            <a class="nav__item <?php if (get_post_type() == "post") echo 'active'; ?>" href="<?php echo esc_url(site_url('/blog/')); ?>">Blog</a>
            <a class="nav__item <?php if (is_page('contact')) echo 'active'; ?>" href="<?php echo esc_url(site_url('/contact/')); ?>">Contact us</a>
          </div>
        </div>
      </div>