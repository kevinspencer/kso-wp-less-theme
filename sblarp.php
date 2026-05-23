<?php /* Template Name: sblarp */ ?>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<title><?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link type="text/plain" rel="author" href="https://kevinspencer.org/humans.txt" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<span style="font-size: 20px; font-color: #fff;"><a href="https://kevinspencer.org/daily">daily</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://kevinspencer.org/stream">stream</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://kevinspencer.org/links">links</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://kevinspencer.org/photography">photography</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://kevinspencer.org/about">about</a></span>
	</div><!-- .site-info -->
	<div class="follow">
		<span style="font-size: 20px; font-color: #fff;">
			<a href="https://twitter.com/kevin_spencer" id="follow-twitter" title="twitter"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
			<a href="https://flickr.com/photos/vek" id="follow-flickr" title="flickr"><i class="fa fa-flickr"></i></a>&nbsp;&nbsp;
			<a href="https://www.last.fm/user/kevinspencer" id="follow-lastfm" title="last.fm"><i class="fa fa-lastfm-square"></i></a>&nbsp;&nbsp;
			<a href="https://github.com/kevinspencer" id="follow-lastfm" title="github"><i class="fa fa-github"></i></a>&nbsp;&nbsp;
			<a href="https://kevinspencer.org/daily/feed" id="follow-feed" title="feed"><i class="fa fa-rss"></i></a>
		</span>
	</div>
</footer><!-- #colophon .site-footer -->

<!--<div class="container">-->

<?php if( is_page( 'photography' )) : ?>
	<div class="container-big">
<?php else : ?>
	<div class="container">
<?php endif; ?>

	<div id="primary">
		<div id="content" role="main">


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_home() || is_archive() ) {
	
?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
						<div class="post-meta">
								<span class="comments-link">
									by <a href="https://kevinspencer.org">kevin</a>  
		<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> <?php if (comments_open()) : ?>with <a href="<?php the_permalink() ?>"><?php comments_number('no comments', '1 comment', '% comments'); ?></a><?php else :?><?php if (get_comments_number() > 0) : ?>with <a href="<?php the_permalink() ?>"><?php comments_number('no comments', '1 comment', '% comments'); ?></a><?php endif; ?><?php endif; ?>
								</span>
						
						</div><!--/post-meta -->
						
						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						<div class="tag-meta">
                                                   <i class="fa fa-tags" aria-hidden="true"></i>&nbsp;<?php the_tags('tagged: ', ', ', ''); ?>
                                                </div>
						<!--
						<div class="meta clearfix">
							<div class="category"><?php echo get_the_category_list(); ?></div> 
							<div class="tags"><?php echo get_the_tag_list( '[', '&nbsp;' ); ?></div>
						</div>
						-->
					</article>

				<?php endwhile; ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>
					<div class="next-page"><?php next_posts_link( ' &larr; Older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

		
	<?php } //end is_home(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_single() ) {
?>


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						<div class="post-meta">
					
								<span class="comments-link">
									by <a href="https://kevinspencer.org">kevin</a>  
		<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> <?php if ( comments_open() ) : ?>with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php endif; ?>
								
					
						
						</div><!--/post-meta -->
						
						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
		                                <div class="post-meta">
                                                   <i class="fa fa-tags" aria-hidden="true"></i>&nbsp;<?php the_tags('tagged: ', ', ', ''); ?>
                                                </div> 
				
						
					</article>

				<?php endwhile; ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_single(); ?>
	
<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<page class="post">
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</page>

				<?php endwhile; ?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>

<div class="tagcloud">
	<div class="site-info container">
<?php wp_tag_cloud('smallest=8&largest=22&'); ?>
	</div><!-- .site-info -->
</div><!-- #colophon .site-footer -->

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<span style="font-size: 18px;">you look nice today &hearts;</span>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
