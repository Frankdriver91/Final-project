<?php 
get_header();

$ourservice_title=get_field('ourservice_title');
$args1=array(
  "post_type"=>"our-service",
  "posts_per_page"=>-1
);
$services=get_posts($args1);
?>

<main>
<section class="our-service">
  <h1><?php echo $ourservice_title ?></h1>

  <div class="services">
  <?php foreach ($services as $service): ?>
    <div class="services-text">
        <a href=""><img src="<?php echo get_the_post_thumbnail_url($service->ID) ?>"  alt=""></a>
        <h2><?php echo $service->post_title ?></h2>
        <p> <?php echo $service->post_excerpt ?></p>     
    </div>
    <?php endforeach; ?>
  </div>

<?php  
$service_background=get_field('service_background');
$service_subtitle=get_field('service_h2');
$service_description=get_field('service_p');
$args2=array(
    "post_type"=>"service-card",
    "posts_per_page"=>-1
  );
   $service_cards=get_posts($args2);
?>

<div class="service-cards">
    <img src="<?php echo $service_background ?>" alt="">
    <div class="service-cards-text">
      <h2><?php echo $service_subtitle ?></h2>
      <p><?php echo $service_description ?></p>
    </div>
<div class="cards-container">
  <?php foreach ($service_cards as $service_card): ?>
    <div class="cards">
          <img src="<?php echo get_the_post_thumbnail_url($service_card->ID) ?>"  alt="">
          <h2><?php echo $service_card->post_title ?></h2>
          <p> <?php echo $service_card->post_excerpt ?></p>     
    </div>
    <?php endforeach; ?>
</div>
</div>
</section>

<?php 
$destinations_title=get_field('destinations_h1');
$destinations_image=get_field('destinations_img');
$arrow=get_field('arrow');
$args3=array(
  "post_type"=>"destinations-card",
  "posts_per_page"=>-1
);
 $destination_cards=get_posts($args3);
?>

<section class="destinations">
<h1><?php echo $destinations_title ?></h1>
<img class="destinations-img" src="<?php echo $destinations_image ?>" alt="">
<div class="ellipse-box">
  <div class="ellipse-first">
    <a href=""><img class="ellipse1" src="<?php echo get_template_directory_uri() . '/assets/images/Ellipse19.png' ?>"  alt=""></a>
    <a href="<?php echo get_permalink($booking_step) ?>"><img class="ellipse2" src="<?php echo get_template_directory_uri() . '/assets/images/Ellipse13.jpg' ?>"  alt=""></a>
  </div>
  <div class="ellipse-second">
    <a href=""><img class="ellipse1" src="<?php echo get_template_directory_uri() . '/assets/images/Ellipse19.png' ?>"  alt=""></a>
    <a href="<?php echo get_permalink($booking_step) ?>"><img class="ellipse2" src="<?php echo get_template_directory_uri() . '/assets/images/Ellipse13.jpg' ?>"  alt=""></a>
  </div>
  <div class="ellipse-third">
    <a href=""><img class="ellipse1" src="<?php echo get_template_directory_uri() . '/assets/images/Ellipse19.png' ?>"  alt=""></a>
    <a href="<?php echo get_permalink($booking_step) ?>"><img class="ellipse2" src="<?php echo get_template_directory_uri() . '/assets/images/Ellipse13.jpg' ?>"  alt=""></a>
  </div>
</div>
<div class="destinations-cards-container">
<?php foreach ($destination_cards as $destination_card): ?>
    <div class="destinations-cards">
      <a href=""><img class="country-img" src="<?php echo get_the_post_thumbnail_url($destination_card->ID) ?>" alt=""></a>
      <h2><?php echo $destination_card->post_title ?></h2>
      <p> <?php echo $destination_card->post_excerpt ?></p>
      <a href=""><img class="arrow" src="<?php echo $arrow ?>" alt=""></a>
    </div>
<?php endforeach; ?>
  </div>
</section>

<?php 
$packages_title=get_field('packages_h1');
$args4=array(
  "post_type"=>"packages-card",
  "posts_per_page"=>-1
);
 $packages_cards=get_posts($args4);
?>

<section class="packages">
<h1><?php echo $packages_title ?></h1>
<div id="button-group">
      <button><a href="<?php echo get_permalink($packages_h1) ?>">Hot Deals</a></button>
      <button><a href="<?php echo get_permalink($packages_h1) ?>">Backpack</a></button>
      <button><a href="<?php echo get_permalink($packages_h1) ?>">South Asia</a></button>
      <button><a href="<?php echo get_permalink($packages_h1) ?>">Honeymoon</a></button>
      <button><a href="<?php echo get_permalink($packages_h1) ?>">Europe</a></button>
      <button><a href="<?php echo get_permalink($packages_h1) ?>">More</a></button>
    </div>        

    <div class="packages-cards-container">
      <?php foreach ($packages_cards as $packages_card): ?>
      <div class="packages-cards">
          <img src="<?php echo get_the_post_thumbnail_url($packages_card->ID) ?>" alt="">
          <div class="packages-cards-text">
            <div class="prices">
              <p>3 Days, 2 Nights</p>
              <p>$500 / Person</p>
            </div>
            <p class="description"><?php echo $packages_card->post_excerpt ?></p>
            <div class="title">
              <div class="location">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/ep_location.png' ?>" alt="">
                <h2><?php echo $packages_card->post_title ?></h2>
              </div>
              <a href=""><p>Know More</p></a>
            </div>
          </div>
      </div>
      <?php endforeach; ?>
    </div>
   <button class="packages-cards-button">Discover More</button>
</section>

<?php  
$booking_title=get_field('booking_h1');
$booking_description=get_field('booking_p');
$args5=array(
  "post_type"=>"booking",
  "posts_per_page"=>-1
);
$booking_steps=get_posts($args5);
$booking_image=get_field('booking_img');
?>

<section class="booking">
  <div class="booking-title">
    <h1><?php echo $booking_title ?></h1>
    <p><?php echo $booking_description ?></p>
    </div>
    <div class="booking-steps-container">
<?php foreach ($booking_steps as $booking_step): ?>
  <div class="booking-steps">
           <a href=""><img src="<?php echo get_the_post_thumbnail_url($booking_step->ID) ?>" alt=""></a>                 
           <div class="step-title">
              <h2><?php echo $booking_step->post_title ?></h2>
              <p> <?php echo $booking_step->post_excerpt ?></p> 
           </div>                                 
      </div>
  <?php endforeach; ?>      
</div>
<img class="booking-img" src="<?php echo $booking_image ?>" alt=""> 
</section>

<?php 
$about_title=get_field('about_h1'); 
$about_image=get_field('about_img'); 
$about_testimonial=get_field('about_testimonial'); 
$testimonial_img=$about_testimonial['testimonial_img'];
$testimonial_text=$about_testimonial['testimonial_text'];
$testimonial_name=$about_testimonial['testimonial_name'];
?>

<section class="about-us">
<h1><?php echo $about_title ?></h1>
<div class="testimonial-container">
  <img class="about-us-img" src="<?php echo $about_image ?> "alt="">
  <div class="testimonial">
  <img src="<?php echo $testimonial_img ?>"  alt="">
  <p><?php echo $testimonial_text ?></p>
  <h2><?php echo $testimonial_name ?></h2>
  </div>
</div>
</section>

<section class="subscribe">
<div class="subscribe-form">
<img src="<?php echo get_template_directory_uri() . '/assets/images/Group77.png' ?>" alt="">
<h2>Subscribe to get information, latest news and other interesting offers about Cobham</h2>
<?php echo do_shortcode('[contact-form-7 id="574d0f9" title="Subscribe form"]') ?>
</div>
</section>

</main>

<?php 
get_footer();
?>