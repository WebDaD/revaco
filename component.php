<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php $params = JFactory::getApplication()->getTemplate(true)->params;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
 
		<jdoc:include type="head" />
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />


		<style>
			h1,h2,h3{color:<?php echo $this->params->get('main_color');?>;}
			
			
			#footer{border-top:1px solid <?php echo $this->params->get('main_color');?>;position:fixed;bottom:0px;width:90%;height:14px;font-size:10pt;text-align:center;}
		</style>
	</head>
	<body>
			
			<div id="content">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>
			<div id="footer">
				Copyright <?php echo date('Y');?> &copy; <?php echo $this->params->get('sitetitle');?>
			</div>
	</body>
</html>