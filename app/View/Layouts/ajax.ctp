<?php echo $this->Html->docType('html5');?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 
		echo $this->Html->css('1152_16_1_1.css');
	?>
</head>
<body>	
<?php						
	echo $this->Session->flash();
	echo $this->Session->flash('auth');	
	echo $this->fetch('content'); 
?>
</body>
</html>
