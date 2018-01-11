<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package i-excel
 * @since i-excel 1.0
 */

get_header(); ?>
  
    
	<div id="primary" class="content-area">
            <div class="crfind">
            <h1> A community-curated database of 
                    <span class='crbigger'><?php 
                    $count_posts = wp_count_posts();
                    $published_posts = $count_posts->publish; 
                    echo $published_posts;
                        ?></span> websites that accept
                    <span class='crbigger'><?php $count_tags = wp_count_terms('post_tag');
                        echo $count_tags; ?></span>
                    different cryptocurrencies as payment.
            </h1>
            </div>
        
            <div class="cradsense">
                <div class="crinnerad">
                <a href="https://www.coinbase.com/join/599083cfcdaf8e023c5ddc44" target="_blank"><img src="/wp-content/uploads/2018/01/localbitcoinsbanner_720x90.png" border="0" alt="Get Free BTC worth $10 - Find out more (referral link)"></a>
                <p>Referral link</p>
                </div>
            </div>
        
		<div id="content" class="site-content" role="main">
            <div class="crtable">
                <div class="crheader">
                <h2>Discover where you can spend cryptocurrencies</h2>
                </div>
                <div class="crsearch">
                    <?php echo do_shortcode('[searchandfilter id="14"]');?>    
                </div>
            
            </div>

		</div><!-- #content -->
        <?php get_sidebar(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>