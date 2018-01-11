<?php
/**
 * The template for displaying Search Results pages
 *
 * @package i-excel
 * @since i-excel 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area searchcontent-area">
        <div id="content" class="site-content" role="main">
        <div class="crsearchcontainer">
        <div class="crsearch-left">
            <div class="crtable crtable-search">
                <div class="crheader">
                <h2>Discover more websites that accept cryptocurrencies</h2>
                </div>
                <div class="searchlarge">
                <div class="crsearch crsearch-search">
                  <?php echo do_shortcode('[searchandfilter id="13"]');?>    
                </div>
                </div>
                <div class="searchsmall">
                <div class="crsearch crsearch-search2">
                  <?php echo do_shortcode('[searchandfilter id="13"]');?>    
                </div>
                </div>
            </div>
            
            <div class="cradsense">
                <div class="crinnerad-large crinnerad">
                <a href="/" target="_blank"><img src="/wp-content/uploads/2018/01/localbitcoinsbanner_788x90.png" border="0" alt="Localbitcoins.com - Bringing Bitcoin Everywhere"></a>
                <p>Referral link</p>
                </div>
            </div>
            
            <div class="crsearch-results">
            <h2>Search results</h2>
            <div class="cresults-table-container">
                <table class="cresults-table">
                  <tr>
                    <th>Website</th>
                    <th>Business category</th> 
                    <th>Accepted cryptocurrencies</th>
                    <th>&nbsp;</th>
                  </tr>
                <?php $posts = query_posts( $query_string . '&orderby=title&order=asc' ); ?>
                <?php if ( $posts ) : ?>
                    <?php $cradcounter = 0; ?>
                    <?php /* The loop */ ?>
                    <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
                    <?php if ($cradcounter == 9) : ?>
                    <tr><td colspan="4" class="crtablead"><a href="https://www.binance.com/?ref=10391917" target="_blank"><b>Join Binance</b> - the fastest growing cryptocurrency exchange of all time! Fees less than 1%</a></td></tr>
                        <tr>
                        <td class="crtitle">
                            <?php //get_template_part( 'content', get_post_format() ); ?>
                            <?php 
                                $curl = get_post_meta($post->ID, 'Website', true); ?>
                                <a href="<?php echo $curl; ?>" target="_blank"><?php the_title(); ?></a>
                         </td>
                        <td class="crcat"> <?php the_category( ', ' ); ?> </td>
                        <td class="crcat"> <?php the_tags( '', ', ', '<br />' ); ?> </td>
                            <td> <a href="<?php echo $curl; ?>" target="_blank"><img src="/wp-content/uploads/2017/12/arrow.png" border="0"></a></td>
                        </tr>
                    <?php else : ?>
                        <tr>
                        <td class="crtitle">
                            <?php //get_template_part( 'content', get_post_format() ); ?>
                            <?php 
                                $curl = get_post_meta($post->ID, 'Website', true); ?>
                                <a href="<?php echo $curl; ?>" target="_blank"><?php the_title(); ?></a>
                         </td>
                        <td class="crcat"> <?php the_category( ', ' ); ?> </td>
                        <td class="crcat"> <?php the_tags( '', ', ', '<br />' ); ?> </td>
                            <td> <a href="<?php echo $curl; ?>" target="_blank"><img src="/wp-content/uploads/2017/12/arrow.png" border="0"></a></td>
                        </tr>
                    <?php endif; ?>
                    <?php $cradcounter++; ?>
                    <?php endforeach; ?>
                </table>
                    <?php //iexcel_paging_nav(); ?>
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>
            <div class="crhelp">
            <div class="helpinner helpinner-first"><p>Not found what you're looking for? Or some information not right?</p></div>
            <div class="helpinner helpinner-second"><a href="mailto:info@wheretospendcryptos.com"><button class="crmissing">Tell us what's wrong</button></a></div>
            <div class="helpinner"><a href="/submission-form/"><button class="crsubmitwebsite">Submit a website</button></a></div>
            </div>
            </div>
            
            <div class="cradsense">        
                <div class="crinnerad-small crinnerad">
                <a href="/" target="_blank"><img src="/wp-content/uploads/2018/01/trezor_336x280.png" border="0" alt="Trezor - The original sceure hardware wallet"></a>
                <p>Referral link</p>
                </div>
            </div>
            
		</div><!-- #content -->
        <div class="crsearch-right">
            <div class="cradsense">
                <div class="crinnerad">
                    <a href="/" target="_blank"><img src="/wp-content/uploads/2018/01/trezor_banner_600x160.png" border="0" alt="Trezor - The original sceure hardware wallet" class="crad"></a>
                    <?php //get_sidebar(); ?> 
                    <p>Referral link</p>
                </div>
            </div>
        </div>
        </div>
        </div>
	</div><!-- #primary -->

<?php get_footer(); ?>