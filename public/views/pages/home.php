<?php ob_start(); //tout ce qui est entre ob_start et ob_get_clean rentre dans la variable $content?>
    <h1>Bienvenue !</h1>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>