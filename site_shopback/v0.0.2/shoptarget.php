<?php
include(__DIR__.'/system/config.php');

$title = 'ShopTarget - '.TITLE2;
$description = '';
$class = 'page-shoptarget';
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="pt-BR" class="ie6 ie67"><![endif]-->
<!--[if IE 7]><html lang="pt-BR" class="ie7 ie67"><![endif]-->
<!--[if IE 8]><html lang="pt-BR" class="ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js <?php echo $class; ?>" lang="pt-BR">
<!--<![endif]-->
<head>
<?php include(DIRPATHP.'/app/includes/structure/head.php'); ?>
</head>

<body class="bg-header">

	<?php include(DIRPATHP.'/app/includes/structure/header.php'); ?>

	<main class="main">

		<?php include(DIRPATHP.'/app/includes/modules/produtos/target/header.php'); ?>
		<?php include(DIRPATHP.'/app/includes/modules/produtos/target/solucoes.php'); ?>
		<?php include(DIRPATHP.'/app/includes/modules/produtos/target/info.php'); ?>

		<?php include(DIRPATHP.'/app/includes/modules/plataforms.php'); ?>
		<?php include(DIRPATHP.'/app/includes/modules/conversion.php'); ?>
		<?php include(DIRPATHP.'/app/includes/modules/clientes-bar.php'); ?>
		<?php include(DIRPATHP.'/app/includes/modules/produtos.php'); ?>

	</main>

	<?php include(DIRPATHP.'/app/includes/modules/newsletter.php'); ?>

	<?php include(DIRPATHP.'/app/includes/structure/footer.php'); ?>

	<?php include(DIRPATHP.'/app/includes/structure/script.php'); ?>

</body>
</html>