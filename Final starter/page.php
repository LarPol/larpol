<?php /*Template Name: Landing Page*/ get_header();?>
<div id=landing-top-menu>
	<div class=row>
		<div class='large-12 columns text-center logo'>
			<a href='/'><img src='<?php bloginfo('template_url');?>/img/logo.png' alt='Winston' /></a>
		</div>
	</div>
</div>
<div id=thankyou>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns text-center'>
				<?php
					if(have_posts()) : 
						while(have_posts()) : the_post();
							the_content();
					endwhile; endif;
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>