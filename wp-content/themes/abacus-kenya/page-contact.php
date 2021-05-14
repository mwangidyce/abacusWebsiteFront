<?php
 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }

  //response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";
 
//user posted variables
$user_subject = $_POST['message_subject'];
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];
 
//php mailer variables
$to = get_option('admin_email');
$subject = $user_subject . " from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

  if(!$user_subject == 0){
   
      //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
          my_contact_form_generate_response("error", $email_invalid);
        else //email is valid
        {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          //send email
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
        }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?>
<?php get_header(); ?>

      <section class="hero">
        <div class="hero__wrapper">
          <img src="<?php echo get_theme_file_uri('/images/girl-painting-paper.jpg'); ?>" alt="hero img" />
          <div class="hero__content">
            <div class="hero__content--text">
              <h1>Contact us</h1>
            </div>
          </div>
        </div>
      </section>
    </header>
    <main>
      <section class="contact">
        <div class="contact__container container">
          <h2>Contact us</h2>
          <p>We're open for any suggestion or just to have a chat</p>
          <div id="respond" class="contact__wrapper">
          <?php echo $response; ?>
            <form action="<?php the_permalink(); ?>" id="contactForm" class="contact__form" method="post">
              <input
                type="text"
                name="message_subject"
                id="message_subject"
                class="subject"
                placeholder="Subject"
                value="<?php echo esc_attr($_POST['message_subject']); ?>"
                required
              />
              <textarea
                name="message_text"
                id="message_text"
                class="message"
                cols="30"
                rows="10"
                placeholder="Enter your message here"
                value="<?php echo esc_textarea($_POST['message_text']); ?>"
                required
              ></textarea>
              <input
                type="text"
                name="message_name"
                id="message_name"
                class="name"
                placeholder="Name"
                value="<?php echo esc_attr($_POST['message_name']); ?>"
                required
              />
              <input
                type="email"
                name="message_email"
                id="message_email"
                class="email"
                placeholder="Email"
                value="<?php echo esc_attr($_POST['message_email']); ?>"
                required
              />
              <input type="hidden" name="submitted" value="1">
              <div class="submit">
                <input
                  type="submit"
                  value="Send message"
                  class="btn btn--green"
                />
              </div>
            </form>
            <div class="contact__details">
              <div class="contact__details--wrapper flex">
                <svg
                  width="40"
                  height="48"
                  viewBox="0 0 40 48"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M39.905 18.0862C39.5747 14.6485 38.3597 11.3549 36.3785 8.52614C34.3973 5.69741 31.7174 3.42992 28.5996 1.94449C25.4819 0.459051 22.0326 -0.193709 18.5876 0.0497694C15.1427 0.293248 11.8195 1.42467 8.94166 3.33385C6.46928 4.98706 4.39375 7.16733 2.86414 9.71802C1.33454 12.2687 0.38884 15.1265 0.0949825 18.0862C-0.193282 21.0264 0.176565 23.9939 1.17769 26.7735C2.17881 29.553 3.78611 32.0749 5.88297 34.156L18.353 46.6496C18.5717 46.8701 18.832 47.0452 19.1187 47.1646C19.4054 47.2841 19.7129 47.3456 20.0235 47.3456C20.3341 47.3456 20.6417 47.2841 20.9284 47.1646C21.2151 47.0452 21.4753 46.8701 21.694 46.6496L34.117 34.156C36.2139 32.0749 37.8212 29.553 38.8223 26.7735C39.8234 23.9939 40.1933 21.0264 39.905 18.0862ZM30.8231 30.8385L20 41.6616L9.17694 30.8385C7.58193 29.2434 6.36013 27.3148 5.59937 25.1912C4.83862 23.0676 4.55781 20.8018 4.77713 18.5567C4.99787 16.2771 5.72242 14.0749 6.89838 12.1096C8.07435 10.1442 9.67235 8.46471 11.5768 7.19251C14.0731 5.53431 17.0032 4.64979 20 4.64979C22.9968 4.64979 25.9269 5.53431 28.4232 7.19251C30.3219 8.45979 31.9164 10.1319 33.092 12.0886C34.2677 14.0454 34.9954 16.2382 35.2229 18.5097C35.4493 20.7623 35.1721 23.0372 34.4111 25.1695C33.6501 27.3018 32.4246 29.2382 30.8231 30.8385ZM20 9.54535C17.9059 9.54535 15.8589 10.1663 14.1177 11.3297C12.3766 12.4931 11.0195 14.1467 10.2182 16.0814C9.41681 18.016 9.20714 20.1449 9.61567 22.1987C10.0242 24.2525 11.0326 26.1391 12.5133 27.6198C13.994 29.1005 15.8806 30.1089 17.9344 30.5175C19.9883 30.926 22.1171 30.7163 24.0518 29.915C25.9864 29.1136 27.64 27.7565 28.8034 26.0154C29.9668 24.2742 30.5878 22.2272 30.5878 20.1331C30.5816 17.327 29.4641 14.6375 27.4798 12.6533C25.4956 10.6691 22.8061 9.55156 20 9.54535ZM20 26.0152C18.8366 26.0152 17.6994 25.6702 16.7321 25.0239C15.7648 24.3776 15.0109 23.4589 14.5657 22.3841C14.1204 21.3093 14.004 20.1266 14.2309 18.9856C14.4579 17.8446 15.0181 16.7965 15.8407 15.9739C16.6634 15.1512 17.7114 14.591 18.8525 14.364C19.9935 14.1371 21.1762 14.2536 22.251 14.6988C23.3258 15.144 24.2445 15.8979 24.8908 16.8652C25.5371 17.8325 25.8821 18.9698 25.8821 20.1331C25.8821 21.6932 25.2624 23.1893 24.1593 24.2924C23.0562 25.3955 21.56 26.0152 20 26.0152Z"
                    fill="#999999"
                  />
                </svg>
                <div class="contact__details--wrapper--text">
                  <h3>Address</h3>
                  <p>Bemuda Plaza</p>
                  <p>Ngong Road, Nairobi</p>
                </div>
              </div>
              <div class="contact__details--wrapper flex">
                <svg
                  width="40"
                  height="30"
                  viewBox="0 0 40 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M36.25 0H3.75C1.67891 0 0 1.67891 0 3.75V26.25C0 28.3211 1.67891 30 3.75 30H36.25C38.3211 30 40 28.3211 40 26.25V3.75C40 1.67891 38.3211 0 36.25 0ZM36.25 3.75V6.93789C34.4983 8.36437 31.7056 10.5825 25.7354 15.2574C24.4197 16.2923 21.8134 18.7787 20 18.7497C18.1869 18.779 15.5798 16.292 14.2646 15.2574C8.29531 10.5832 5.50195 8.36461 3.75 6.93789V3.75H36.25ZM3.75 26.25V11.7498C5.54016 13.1757 8.07883 15.1766 11.9483 18.2066C13.6559 19.5507 16.6462 22.518 20 22.4999C23.3373 22.518 26.2898 19.5938 28.051 18.2072C31.9204 15.1773 34.4598 13.1759 36.25 11.7499V26.25H3.75Z"
                    fill="#999999"
                  />
                </svg>
                <div class="contact__details--wrapper--text">
                  <h3>Email</h3>
                  <p>info@abacuskenya.co.ke</p>
                  <p>Send us your query anytime</p>
                </div>
              </div>
              <div class="contact__details--wrapper flex">
                <svg
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M38.8563 4.15652L38.7902 4.11523L30.4372 0L21.4214 12.021L25.5693 17.5519C25.4452 19.6378 24.5606 21.6058 23.0831 23.0833C21.6056 24.5608 19.6376 25.4453 17.5517 25.5694L12.0209 21.4215L0 30.4371L4.08099 38.7203L4.11533 38.7902L4.15671 38.8562C4.3745 39.2071 4.67847 39.4965 5.03969 39.6967C5.40091 39.8969 5.80737 40.0013 6.22036 40H8.37574C12.5287 40 16.641 39.182 20.4778 37.5927C24.3147 36.0035 27.8009 33.674 30.7375 30.7374C33.6741 27.8008 36.0035 24.3146 37.5928 20.4778C39.182 16.6409 40 12.5286 40 8.37565V6.22017C40.0013 5.80718 39.8969 5.40073 39.6967 5.03951C39.4965 4.67828 39.2072 4.37431 38.8563 4.15652ZM36.9132 8.37565C36.9132 24.1113 24.1113 36.9132 8.37574 36.9132H6.63168L3.90118 31.3701L12.0215 25.2798L16.5424 28.6704H17.0569C20.1361 28.667 23.0882 27.4422 25.2656 25.2649C27.4429 23.0876 28.6677 20.1354 28.6711 17.0562V16.5418L25.2805 12.0209L31.3701 3.90109L36.9132 6.63207V8.37565Z"
                    fill="#999999"
                  />
                </svg>
                <div class="contact__details--wrapper--text">
                  <h3>Phone</h3>
                  <p>+254 700 123 123</p>
                  <p>Mon to Fri 9am to 4pm</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="map">
        <div class="map__container container"></div>
      </section>
    </main>
    
<?php get_footer(); ?>