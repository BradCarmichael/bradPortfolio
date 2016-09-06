
<?php get_header();  ?>

<?php $heroImage = get_field('hero_image'); ?>
<div class="hero" style="background-image:url(<?php echo $heroImage['url'] ?>)">
    <div class="layer"></div>
  <div class="header-text-wrapper">
    <div class="header-text-box">
      <h1 class="animated fadeInLeft"><?php the_field('tag_line'); ?></h1>
      <p class="tag-line-text animated fadeInRight"><?php the_field('tag_line_text'); ?></p>
    </div>
  </div>
</div>

<section class="about scroll-reveal" id="about">
    <div class="main">
        <div class="container">
            <div class="content">
                
                    <?php // Start the loop ?>
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                   
                   <h2>About Me</h2>
                    <div class="about-container">
                        <div class="about-wrap">
                              <div class="about-image-box">
                                <?php $featuredImage = hackeryou_featured_image_url($post) ?>
                                <img src="<?php echo $featuredImage ?>">
                              </div>
                              <div class="about-content-box">
                                <?php the_content(); ?>
                              </div>
                        </div>
                    </div>
                    <?php endwhile; // end the loop?> 
                </section> 
            </div>
        </div>
    </div>
</section> 

<section class="skills scroll-reveal" id="skills">
    <div class="main">
        <div class="container">
            <div class="content">
                    
                <h3>Skills</h3>

                <div class="skills-container">
                    <div class="skills-wrap">
                        <?php
                             if(have_rows('skills')) {
                               while(have_rows('skills')) {
                                 the_row();
                                 ?>
                                   <div class="icon-wrap">
                                     <div class="icon"><i class="devicons devicons-<?php the_sub_field('skill_icon'); ?>" aria-hidden="true"></i></div>
                                     <div class="icon-title-box">
                                       <h4><?php the_sub_field('tag_icon'); ?></h4>
                                     </div>
                                    </div>
                                 <?php
                               } // end while
                             }   // end if
                           ?>
                    </div>
                </div>
            </div> <!-- /,content -->
        </div> <!-- /.container -->
    </div> <!-- /.main -->
</section>    

<section class="portfolio" id="portfolio">
    <div class="main">
        <div class="content">
            <div class="container">
              
                  <!-- setting up custom query -->
                    <h2>Portfolio</h2>
                    <?php 
                    $portfolio = new WP_Query(
                    array(
                      // name of the slug in CPT UI
                      'post_type' => 'portfolio',
                      'posts_per_page' => -1,
                      'order' => 'ASC'
                     )
                    ); ?>
                     <!-- custom loop -->
                    <?php if ($portfolio->have_posts()): ?>
                      <?php while ($portfolio->have_posts()): $portfolio->the_post(); ?>
                      <div class="portfolio-wrap">
                          <!-- <div class="<?php echo $post->post_name ?>"> -->
                              <div class="portfolio-box">
                                  <div class="portfolio-content-wrap">
                                      <div class="portfolio-content-box">
                                          <h3 class="portfolio-title"><?php the_title(); ?></h3>
                                          <div class="port-para">
                                            <p class="portfolio-paragraph"><?php the_content(); ?></p>
                                          </div>
                                          <div class="port-short">
                                            <p class="portfolio-short"><?php the_field('short_desc'); ?></p>
                                          </div>
                                          <!-- adds link to website -->
                                         <div class="portfolio-link">
                                           <a target="_blank" class="portfolio-button" href="<?php the_field('portfolio_link'); ?>"> <?php the_field('portfolio_link_text'); ?></a>
                                         </div>
                                      </div> <!-- .porfolio-content-box -->
                                  </div> <!-- .portfolio-content-wrap -->
    
                                      <!-- adds repeater images -->
                                    <?php while(have_rows('images')): the_row(); ?>
                                    <?php $image = get_sub_field('image') ?>
                                  <div class="portfolio-image">
                                    <img src="<?php echo ($image['url']) ?>" />
                                  </div> 
                              </div> <!-- end.portfolio-box  -->      
                          <!-- </div>  -->  <!-- end.dyanmic-classes -->
                      </div>  <!-- end.portfolio-wrap  -->     
                    <?php endwhile ?>
                  <?php  endwhile;?>
                  <?php 
                  wp_reset_postdata(); 
                  ?>
                <?php endif ?> 
              </section>
           </div> <!-- end.container -->
        </div>  <!-- end.content-main -->
    </div> <!-- end.main -->
</section>

<section class="contact" id="contact">
    <div class="main">
        <div class="container">
            <div class="content">

                <div class="dynamic-sidebar contact"> 
                    <div class="contact-title">
                      <h2>Let's Talk </h2>
                    </div>
                    <div class="contact-form-box">
                      <ul>
                        <?php dynamic_sidebar('secondary-widget-area'); ?>
                      </ul>
                    </div>
                </div> 
         </div> <!-- /,content -->
        </div> <!-- /.container -->
    </div> <!-- /.main -->
</section>

<?php get_footer(); ?>