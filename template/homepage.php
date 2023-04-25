<?php $title = "homepage"; ?>

<?php ob_start(); ?> 

<p>
	Hello word
</p>


<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>