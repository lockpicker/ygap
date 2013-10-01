<?php get_header(); ?>
	
	<section class="map">
		<div class="container">
			<div class="row">
				<div class="col-md-12">Map goes here</div>
			</div>
		</div>
	</section>
	
	<section class="our-model">
		<div class="container">
			<div class="row">
				<div class="col-md-12">Our model goes here</div>
			</div>
		</div>
	</section>
	
	<section class="what-is-ygap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">What is YGAP goes here</div>
			</div>
			<div class="row">
				<div class="col-md-12"><a href="/our-mission"><button type="button" class="btn btn-default">Read more about the YGAP mission</button></a></div>
			</div>
		</div>
	</section>
	
	<section class="our-inputs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">Our inputs goes here</div>
			</div>
			<div class="row">
				<div class="col-md-4">Feast of merit</div>
				<div class="col-md-4">Kinfolk</div>
				<div class="col-md-4">YGAP events</div>
			</div>
		</div>
	</section>
	
	<section class="our-outputs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">Our outputs goes here</div>
			</div>
		</div>
	</section>
	
	<section class="participate">
		<div class="container">
			<div class="row">
				<div class="col-md-12">Participate goes here</div>
			</div>
			<div class="row">
				<div class="col-md-3">Facebook</div>
				<div class="col-md-3">Twitter</div>
				<div class="col-md-3">Instagram</div>
				<div class="col-md-3">Youtube</div>
			</div>
		</div>
	</section>
	
	<section class="keep-up-to-date">
		<div class="container">
			<div class="row">
				<div class="col-md-12">Keep up to date goes here</div>
			</div>
		</div>
	</section>
	
	<section class="latest news">
		<div class="container">
			<div class="clearfix row">
				<div id="main" class="col-sm-12 col-md-12 clearfix" role="main">
		
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>					
						<?php endwhile; ?>		
					<?php else : ?>
						<div>No posts - what do we do here?</div>
					<?php endif; ?>
					
				</div> <!-- end #main -->
			</div>
		</div>
	</section>
	
	<section class="ygap-feeds">
		<div class="container">
			<div class="row">
				<div class="col-md-12">YGAP feeds goes here</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>