
<?php
  // pode-se colocar 'v2' dentro da função e o wp irá procurar por 
  // header-v2.php
  get_header(); 
?>

<!-- Content
    ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
        <div>
          <div class="container clearfix">
            <span class="badge badge-danger bnews-title">Breaking News:</span>

            <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
              data-pagi="false">
              <div class="flexslider">
                <div class="slider-wrap">
                  <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      </strong></a></div>
                  <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      </strong></a></div>
                  <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      </strong></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container clearfix">

        <!-- Post Content
        ============================================= -->
        <div class="postcontent nobottommargin clearfix">

          <!-- Posts
          ============================================= -->
          <div id="posts">

          <?php 
            if ( have_posts() ) { // verify if there are posts
              while ( have_posts() ) { // loop throuth the posts
                the_post(); // gets the current post. If not called, run infinitely

                // looks for content-excerpt.php
                get_template_part( 'partials/post/content-excerpt' );

                // looks for content-excerpt.php
                // if not found looks for content.php
                //get_template_part( 'partials/post/content', 'excerpt' );
              }
            } 
          ?>




          </div><!-- #posts end -->

          <!-- Pagination
          ============================================= -->
          <div class="row mb-3">
            <div class="col-12">
              
              <?php
              
              previous_posts_link( '&larr; Older' );
              
              next_posts_link( 'Newer &rarr;' );

              ?>
            
            <!--
              <a href="#" class="btn btn-outline-secondary float-left">
                
              </a>
              <a href="#" class="btn btn-outline-dark float-right">
                
              </a>

          -->

            </div>
          </div>
          <!-- .pager end -->

        </div><!-- .postcontent end -->

        <?php get_sidebar() ?>

      </div>

    </div>

  </section><!-- #content end -->

<?php 
  // pode-se colocar 'v2' dentro da função e o wp irá procurar por 
  // footer-v2.php
  get_footer(); 
?>
