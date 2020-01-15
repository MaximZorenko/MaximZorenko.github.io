<?php get_header(); ?>
<!--Мой шаблон для post_type Gallery-->
<?php  global $redux_demo; ?>
<section class="iglesiass__arciveEvent">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- <h2><?php echo $redux_demo['gallery_title_title']; ?></h2> -->
					<div class="iglesiass__arciveEvent-wrap">
						<ul>
							<?php $wcatTerms = get_terms('event-category', array('hide_empty' => 0, 'parent' =>0));
							foreach($wcatTerms as $wcatTerm) : ?>

								<li><a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy );?>" class="event_category_link"><?php echo $wcatTerm->name;?></a></li>

							<?php endforeach; ?>
						</ul><!--вывожу термы-->
							<?php
								$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
								$args = array(
									'post_type' => 'event',
									// 'posts_per_page' => 1,
									'paged' => $paged,
									); 
								$gallery_query = new WP_Query( $args ); ?>

								<?php 
								while ( $gallery_query->have_posts() ) : $gallery_query->the_post();
								?>
								<?php	
									get_template_part( 'template-parts/content', get_post_type() );
								?>


								<?php
									endwhile;
									wp_reset_postdata();
								?>
						</div>














							<?php 
								$args = array(
									'show_all'     => false, // показаны все страницы участвующие в пагинации
									'end_size'     => 1,     // количество страниц на концах
									'mid_size'     => 1,     // количество страниц вокруг текущей
									'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
									'prev_text'    => __('< '),
									'next_text'    => __(' >'),
									'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
									'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
									'screen_reader_text' => __( 'Posts navigation' ),
								);				
								the_posts_pagination($args); 
							?>
					</div>
				</div>
			</div>
		</div>
	</section>




<?php get_footer(); ?>
