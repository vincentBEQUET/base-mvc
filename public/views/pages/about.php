<?php ob_start(); ?>
<h1>A propos de nous !</h1>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>