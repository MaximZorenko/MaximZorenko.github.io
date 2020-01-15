<?php get_header(); ?>
<!--Мой шаблон для post_type Gallery-->
<?php  global $redux_demo; ?>
<section class="iglesiass__arciveGallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo $redux_demo['gallery_title_title']; ?></h2>
					<div class="iglesiass__arciveGallery-wrap">
							<?php
								$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
								$args = array(
									'post_type' => 'gallery',
									// 'posts_per_page' => 1,
									'paged' => $paged,
									); 
								$gallery_query = new WP_Query( $args ); ?>

								<?php $i = 0;
								while ( $gallery_query->have_posts() ) : $gallery_query->the_post();
									if($i == 2){ ?>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('galery-rectangle');?></a>
									<?php }else if($i == 7){ ?>
										<a href="<?php the_permalink(); ?>" 	class='galery-cvadrat'><?php the_post_thumbnail('galery-cvadrat-big'); ?></a>
									<?php }else{ ?>
										<a href="<?php the_permalink(); ?>" 	class='galery-cvadrat'><?php the_post_thumbnail('galery-cvadrat'); ?></a>
									<?php }
										$i++;
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
<!-- the_post_thumbnail( 'large','style=max-width:100%;height:auto;'); -->