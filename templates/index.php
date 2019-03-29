<?php
script('maps', 'photosController');
script('maps', 'favoritesController');
script('maps', 'script');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('navigation/index')); ?>
		<?php print_unescaped($this->inc('settings/index')); ?>
	</div>

	<div id="app-content">
			<?php print_unescaped($this->inc('content/index')); ?>
	</div>
</div>
