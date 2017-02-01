<?php
include 'header.php';
?>
	
<section id="apresentacao">
	<div class="transparencia">
		<div class="caixaTexto">
			<h1>MEET MACAÉ</h1>
			<h3>MEET YOURSELF</h3>
		</div>
	</div>
</section>
	
<section id="chamadas">
	<div class="post">
		<?php query_posts("showposts=4&paged=$paged&category_name=Chamadas"); ?>
		<?php if(have_posts()): ?>
			<?php $i = 0;?>
			<?php while(have_posts()): ?>				
				<?php if(($i % 2) == 0): ?>
					<?php the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
					<div class="col-md-6 col-sm-6 col-xs-12"  style="float: right">
						<?php if ($image):?>
							<div class="postH" style="background-image: url(<?php echo $image[0]; ?>)"></div>
						<?php endif ?>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 postH post-text left">
					<?php if($i == 0): ?>
						<div class="greenFront">
							<h2><?php the_title();?></h2>
							<?php echo the_content()?>
						</div>
					<?php else: ?>
					<div class="blueFront">
						<h2><?php the_title();?></h2>
						<?php echo the_content()?>
					</div>
				<?php endif ?>
			</div>
					
						
		<?php else:?>
			<?php the_post(); ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<?php if ($image):?>
					<div class="postH" style="background-image: url(<?php echo $image[0]; ?>)"></div>
				<?php endif ?>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 postH post-text right">
					<?php if($i == 1): ?>
						<div class="greenBack">
							<h2><?php the_title();?></h2>
							<?php echo the_content()?>
						</div>
					<?php else: ?>
					<div class="blueBack">
						<h2><?php the_title();?></h2>
						<?php echo the_content()?>
					</div>
				<?php endif ?>
			</div>
		<?php endif ?>
		<?php $i++;?>
	<?php endwhile ?>
<?php endif ?>
</div>
</section>
<div class="linha"></div>

<?php
include 'footer.php';
?>