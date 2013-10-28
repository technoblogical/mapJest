	<footer><div id='footer'>
		<p>Background image copyright Google.com</p>
		<p>(Google not affiliated with this site.)</p>
		<p>Design by Chris Walker</p>
		<p>Copyright 2013 by <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
		<p><?php bloginfo('description'); ?></p>
	</div></footer>
	<?php wp_footer(); ?>
</body>
<script type='text/javascript'>
	$('#menuButton').click(function(){
		$('#header').toggle('slide');
	})
</script>
</html>