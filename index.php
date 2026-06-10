<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<script>
  (function() {
    if (localStorage.getItem('theme') !== 'light') {
      // Add the class, as before.
      document.documentElement.classList.add('dark');

      // ALSO, create and inject a style tag directly into the head.
      var style = document.createElement('style');
      style.id = 'critical-dark-style-test'; // We give it an ID to look for it later
      style.innerHTML = 'html.dark body { background-color: #1e1e1e !important; }';
      document.head.appendChild(style);
    }
  })();
</script>
	
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<title><?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link type="text/plain" rel="author" href="https://kevinspencer.org/humans.txt" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="gravatar">
			<img alt='' src='https://secure.gravatar.com/avatar/ea536388aafad2d72f3cc0deb19a1a56?s=100&#038;d=retro&#038;r=x' srcset='https://secure.gravatar.com/avatar/ea536388aafad2d72f3cc0deb19a1a56?s=200&#038;d=retro&#038;r=x 2x' class='avatar avatar-100 photo' height='100' width='100' loading='lazy'/>
		</div>
		
		<div id="brand">
			<!--<span><h1 class="site-title"><a href="https://kevinspencer.org" title="kevin spencer" rel="home">kevin spencer</a> <span> - into the cauldron, handsome! 🎧</span></h1></span>-->
			<span><h1 class="site-title"><a href="https://kevinspencer.org" title="kevin spencer" rel="home">kevin spencer</a> <span><?php require 'slug.php' ?></span></h1></span>
		</div><!-- /brand -->
	
		<nav role="navigation" class="site-navigation main-navigation">
			<div class="menu"><ul>
<li class="page_item page-item-1437"><a href="https://kevinspencer.org/posts/">posts</a></li>
<!--<li class="page_item page-item-1437"><a href="https://kevinspencer.org/stream/">stream</a></li>-->
<li class="page_item page-item-1796 current_page_item"><a href="https://kevinspencer.org/linkblog/" aria-current="page">linkblog</a></li>
<li class="page_item page-item-1437"><a href="https://kevinspencer.org/photography/">photography</a></li>
<li class="page_item page-item-1437"><a href="https://kevinspencer.org/about">about</a></li>
</ul></div>
		</nav><!-- .site-navigation .main-navigation -->
		
		<div class="clear"></div>
	</div><!--/container -->
		
</header><!-- #masthead .site-header -->

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
						
						<div class="the-content">
							
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						<div class="post-meta">
								<span class="comments-link">
									<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('g:i a') ?>, <?php the_time('j M Y') ?></a> <?php if (comments_open()) : ?>with <i class="fa-regular fa-comments"></i> <a href="<?php the_permalink() ?>"><?php comments_number('no comments', '1 comment', '% comments'); ?></a><?php else :?><?php if (get_comments_number() > 0) : ?>with <i class="fa-regular fa-comments"></i> <a href="<?php the_permalink() ?>"><?php comments_number('no comments', '1 comment', '% comments'); ?></a><?php endif; ?><?php endif; ?>
								</span>
						
						</div>
						<div class="tag-meta">
                                                   <?php the_tags('more: ', ', ', ''); ?>
                                                </div>

					</article>
                    
			        <div class="article-spacer-hr"></div>
			
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
						<!--<div class="post-meta">
					
								<span class="comments-link">
									by <a href="https://kevinspencer.org">kevin</a>  
		<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('j F Y') ?></a> <?php if ( comments_open() ) : ?>with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?> <?php endif; ?>
								
					
						
						</div>-->
						
						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
							<div class="post-meta">
								<span class="comments-link">
									<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_time('g:i a') ?>, <?php the_time('j M Y') ?></a> <?php if (comments_open()) : ?>with <i class="fa-regular fa-comments"></i> <a href="<?php the_permalink() ?>"><?php comments_number('no comments', '1 comment', '% comments'); ?></a><?php else :?><?php if (get_comments_number() > 0) : ?>with <i class="fa-regular fa-comments"></i> <a href="<?php the_permalink() ?>"><?php comments_number('no comments', '1 comment', '% comments'); ?></a><?php endif; ?><?php endif; ?>
								</span>
						
						</div>
		                                <div class="tag-meta">
                                                  <?php the_tags('more: ', ', ', ''); ?>
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

					<article class="post">
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</article>

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

<footer>
	<div class="site-info container">
		<a href="https://flickr.com/photos/vek/" title="me on flickr"><i class="fa-brands fa-flickr fa-xl"></i></a>&nbsp;&nbsp;
        <a href="https://github.com/kevinspencer" title="me on github"><i class="fa-brands fa-github fa-xl"></i></a>&nbsp;&nbsp;
<a href="https://www.last.fm/user/kevinspencer" title="me on last.fm"><i class="fa-brands fa-lastfm fa-xl"></i></a>&nbsp;&nbsp;
<a href="https://pinboard.in/u:kevinspencer" title="me on pinboard"><i class="fa fa-thumb-tack fa-xl"></i></a>&nbsp;&nbsp;
<a href="https://https://letterboxd.com/kevinspencer/" title="me on letterboxd"><i class="fa-brands fa-letterboxd"></i></a>&nbsp;&nbsp;
<a href="https://kevinspencer.org/posts/feed/" title="rss feed"><i class="fa fa-rss fa-xl"></i></a>
<br>
		made by me in sandland
	</div>
</footer>

<button id="theme-toggle" aria-label="Toggle dark mode">
  <span class="svg-container">
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 30 30" aria-hidden="true" style="display:none" class="theme-icon light-icon">
      <path d="M13.636 5.455V0h2.727v5.455ZM22.7 9.2l-1.87-1.87 3.818-3.92 1.909 1.943Zm1.841 7.159v-2.727H30v2.727ZM13.636 30v-5.455h2.727V30ZM7.3 9.136 3.414 5.352l1.943-1.909L9.2 7.3Zm17.318 17.455-3.784-3.92 1.841-1.841 3.886 3.75ZM0 16.364v-2.727h5.455v2.727Zm5.352 10.227-1.909-1.943 3.818-3.818.989.92.989.955ZM15 23.182a7.9 7.9 0 0 1-5.8-2.386 7.9 7.9 0 0 1-2.386-5.8 7.9 7.9 0 0 1 2.386-5.8A7.9 7.9 0 0 1 15 6.81a7.9 7.9 0 0 1 5.8 2.386 7.9 7.9 0 0 1 2.386 5.8 7.9 7.9 0 0 1-2.386 5.8 7.9 7.9 0 0 1-5.8 2.386m0-2.727a5.25 5.25 0 0 0 3.852-1.6 5.25 5.25 0 0 0 1.6-3.852 5.25 5.25 0 0 0-1.6-3.852A5.25 5.25 0 0 0 15 9.551a5.25 5.25 0 0 0-3.852 1.6 5.25 5.25 0 0 0-1.6 3.852 5.25 5.25 0 0 0 1.6 3.852 5.25 5.25 0 0 0 3.852 1.6M15 15"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 30 30" aria-hidden="true" style="display:block" class="theme-icon dark-icon">
      <path d="M15.15 30a14.6 14.6 0 0 1-5.906-1.2 15.4 15.4 0 0 1-4.8-3.244 15.4 15.4 0 0 1-3.244-4.8A14.6 14.6 0 0 1 0 14.85a14.63 14.63 0 0 1 3.488-9.656A14.78 14.78 0 0 1 12.375 0a15.15 15.15 0 0 0 .413 7.256 14.8 14.8 0 0 0 3.75 6.206 14.8 14.8 0 0 0 6.206 3.75 15.15 15.15 0 0 0 7.256.412 14.57 14.57 0 0 1-5.175 8.888A14.7 14.7 0 0 1 15.15 30m0-3a11.87 11.87 0 0 0 6.113-1.65 11.87 11.87 0 0 0 4.425-4.537 18.6 18.6 0 0 1-6.113-1.631 17.8 17.8 0 0 1-5.175-3.619 18.1 18.1 0 0 1-3.637-5.175A17.7 17.7 0 0 1 9.15 4.276 11.7 11.7 0 0 0 4.631 8.72 12.07 12.07 0 0 0 3 14.85a11.72 11.72 0 0 0 3.544 8.606A11.72 11.72 0 0 0 15.15 27m-.75-11.437"></path>
    </svg>
  </span>
</button>

		<?php wp_footer(); ?>
		
</body>
</html>
