<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php 
			$title = isset($title) ? $title : 'Panel';
			echo 'BECA18 - '.$title;
		?>
	</title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css'); ?>">
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('js/style.less'); ?>" />
</head>

<body>
	<script src="<?php echo base_url('js/less-1.6.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('js/general/jquery.validate.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

	<script src="<?php echo base_url('js/main.js'); ?>"></script>	

	<div style="display: block;" id="header">
		<a href="#" id="logo"><img alt="BECA18" src="<?php echo base_url('img/brand.png'); ?>"></a>
	</div>


<script type="text/javascript">
        <!--
            var CI = {
              'base_url': '<?php echo base_url(); ?>',
              'site_url': '<?php echo site_url(); ?>',
              'year' : <?php echo date("Y"); ?>
            };            
        -->
</script>