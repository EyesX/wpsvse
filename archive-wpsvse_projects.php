<?php
/**
 * The template for displaying translation project archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Sverige
 */

get_header();
query_posts( 'post_type=wpsvse_projects&orderby=title&order=ASC' ); ?>

    <section id="page-header" class="section">
		<div class="container">
			<div class="row">
              <div class="col-md-12">
            	<h1 class="page-title">Översättningsvaliderare</h1>
              </div>
            </div>
        </div>
    </section>
    <!-- Start Page Header -->

    <!-- Start Page Content -->
	<section id="page-full" class="section">
		<div class="container">
			<div class="row">
        <div id="translation-projects" class="col-md-9">
				
				<form method="GET" id="translator-search">
					<div>
						<i class="fa fa-search"></i>
						<label for="translator_search">Hitta projekt eller validerare</label>
						<div class="input-group">
							<input class="form-control input-lg" type="text" id="translator_search" name="translator_search" placeholder="Sök efter projekt eller validerare...">
							<span class="input-group-btn">
								<input type="submit" class="btn btn-primary input-lg" value="Sök">
							</span>
						</div>
					</div>
				</form>

				<?php if ( $wp_query->have_posts() ) : ?>

					<?php
					// Find connected pages (for all posts)
					p2p_type( 'translator_to_projects' )->each_connected( $wp_query );
					?>
					
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

									<?php	get_template_part( 'content', 'projects' ); ?>

							<?php endwhile; ?>

							<?php wpsvse_content_nav( 'nav-below' ); ?>

					<?php else : ?>

							<?php get_template_part( 'no-results', 'index' ); ?>

					<?php endif; ?>

				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!-- End Page Content -->

<?php get_footer(); ?>
