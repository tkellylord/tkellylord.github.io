<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
        
        <div class="crsearch">
            
                <?php echo do_shortcode('[searchandfilter id="13"]');?>    

            </div>
        
		<main id="main" class="site-main" role="main">
poo
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
        <div class="crcontact">
        
        <p class="crcontactinner">Not found what your looking for?</p><br>
        <button class="crcontactinner">Tell us what we're missing</button> <a href="/submission-form/"><button class="crcontactinner">Add a website that accepts cryptocurrencies</button></a>
        </div>
	</section><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
