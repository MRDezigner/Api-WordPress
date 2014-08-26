<!-- INSTALE O PLUGIN WP-PostViews -->

<?php if (function_exists('get_most_viewed')):?>
	<ol>
    	<?php get_most_viewed('post', 5); ?>
	</ol>
<?php endif; ?>
</div>