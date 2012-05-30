<?php

// Build PHAR for this project

$phar_name  = 'languagepack_fre-FR';
$build_in   = 'dist';

$phar = new Phar( $build_in . '/' . $phar_name . '.phar' );

$phar->buildFromDirectory( '.' );
$phar->stopBuffering();

?>
