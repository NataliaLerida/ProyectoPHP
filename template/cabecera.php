<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo ucfirst($titulo); ?> | ESCUELA INFANTIL "MENGÍBAR"</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="./assets/css/style.css" />
    <?php if($titulo <> 'inicio'){
        echo '<link rel="stylesheet"' . 'href="' . "./assets/css/style.css" . '"/>';
    }?>
</head>
<body id="<?php echo $titulo; ?>">