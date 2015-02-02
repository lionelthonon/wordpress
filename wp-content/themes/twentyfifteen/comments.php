<?php if(have_comments()): ?>

	<h2>Commentaires</h2>
	
	<?php while(have_comments()):the_comment(); ?>
	
	<div>
		<?php comment_text(); ?>
	</div>
	
	<?php endwhile; ?>

<?php endif; ?>