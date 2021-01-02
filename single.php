<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package San_WP_Bootstrap
 */

get_header(); 

// $adsense = "1"; // 0 - For unactivate , 1 - For activate
// $ads_client_id = " "; // Publisher ID
// $ads_slot_id   = " "; // Slot ID
// $ads_format    = "auto";// ADS format - auto (This ad unit can automatically adjust the size of space available on the page.)
// $ads_responsive="true";

?>

<div class="container">
  <div class="row justify-content-center">

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<div class="single-ads" id="singleAds">
                <div class="single-ads-title">
					advertisement
				</div>
                    <div class="single-ads-script">
						<div class="example-ads" style="height:300px;background-size: cover;background-repeat: no-repeat;background-image:url('https://sanengineer.com.com/wp-content/uploads/2020/04/ads-dummy-rectangle.jpg')"></div> <!-- delete this line after fiil adsense code -->
                    	<!-- <?php if($adsense == 1){
                    	echo "<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
                            <ins class=\"adsbygoogle\"
                            style=\"display:block\"
                            data-ad-client=\"{$ads_client_id}\"
                            data-ad-slot=\"{$ads_slot_id}\"
                            data-ad-format=\"{$ads_format}\"
                            data-full-width-responsive=\"{$ads_responsive}\"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>";
                            }
                            ?> -->
	                </div>
			</div><!-- end single ads custom -->
		
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'postnothumbnail' );

			// the_sanpost_navigation(); 
		?>

		<button class="comments-collps btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseComments" aria-expanded="false" aria-controls="collapseExample">show/ hide comments</button>				

			<div class="collapse" id="collapseComments">
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
			
		<?php 
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</section><!-- #primary -->
<?php
// get_template_part( 'template-parts/content', 'sidebarfullwidth' ); 
get_footer();
