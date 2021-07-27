<?php
/*
 * YARPP Template: Gallery
 * Description: Requires a theme which supports post thumbnails
 * Author: Vincy
 */
?>
<div class="container">
	<div class="row">
		<div class="related-post col-md-12 col-12">
			<div class="related-post-title">
				<h4 class="">你可能也會想看..</h4>
				<img class="related-post-title-vector" src="<?php
															$path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
															if ($_SERVER["SERVER_NAME"] == "localhost") { // Page with slug of "about".
																$path .= $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
															} else ($_SERVER["SERVER_NAME"] == "http://"){
																$path .= "34.80.64.221/"};
															echo $path;
															?>/wp-content/uploads/2021/05/title-vector.png" alt="">
			</div>

			<div class="gallery col-12">
				<div class="container">
					<div class="row gallery-photo-ctrl">
						<?php
						if (have_posts()) :
							while (have_posts()) :
								the_post();
						?>
								<div class="minientry col-md-3 col-12">
									<a href="<?php the_permalink() ?>">
										<div class="post-img">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="post-info">
											<?php the_title(); ?>
										</div>
									</a>
								</div>
							<?php
							endwhile;
							?>
						<?php else : ?>
							<p>沒有相關文章了，去其他分類看看吧</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>