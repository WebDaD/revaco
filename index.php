<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php $params = JFactory::getApplication()->getTemplate(true)->params;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
   		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<link rel="icon" sizes="196x196" href="<?php echo JUri::root() . $this->params->get('logo-196');?>">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo JUri::root() . $this->params->get('logo-57');?>" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo JUri::root() . $this->params->get('logo-72');?>" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo JUri::root() . $this->params->get('logo-114');?>" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo JUri::root() . $this->params->get('logo-144');?>" />
		
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo JUri::root() . $this->params->get('favicon');?>" />
		
		<link rel="apple-touch-startup-image" href="<?php echo JUri::root() . $this->params->get('logo-320');?>" media="screen and (max-device-width : 320px)"> <!-- iPhone 3GS, 2011 iPod Touch -->
		<link rel="apple-touch-startup-image" href="<?php echo JUri::root() . $this->params->get('logo-640');?>" media="(max-device-width : 480px) and (-webkit-min-device-pixel-ratio : 2)"><!-- iPhone 4, 4S and 2011 iPod Touch -->
		<link rel="apple-touch-startup-image" href="<?php echo JUri::root() . $this->params->get('logo-1096');?>" media="(max-device-width : 548px) and (-webkit-min-device-pixel-ratio : 2)"><!-- iPhone 5 and 2012 iPod Touch -->
		<link rel="apple-touch-startup-image" sizes="<?php echo JUri::root() . $this->params->get('logo-1024');?>" href="img/startup-1024x748.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)"><!-- iPad landscape -->
		<link rel="apple-touch-startup-image" sizes="<?php echo JUri::root() . $this->params->get('logo-768');?>" href="img/startup-768x1004.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)"><!-- iPad Portrait -->
		
		<meta name="viewport" content="width=device-width">
   
		<jdoc:include type="head" />
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/mobile.css" />
		
		<script src="js/jquery-1.11.0.min.js" type="text/javascript" ></script>
		<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="js/main.js"></script>
		<!-- TODO: insert js (for navigation:swipe-control -->
		
		<style>
			/*Here are all Styles which use colors (Links, nav, etc)*/
			
			a#impressum{color:<?php echo $this->params->get('main_color');?>;}
			a#impressum:hover{}/*TODO: Text shadow*/
			
			/*MOBILE OVERWRITES*/
			@media only screen and (max-device-width: 480px) {
			
				div#header_mobile{background-color:<?php echo $this->params->get('main_color');?>;color:white;}
			
				a.social{background-color:<?php echo $this->params->get('main_color');?>;}
				
				a#impressum{background-color:<?php echo $this->params->get('main_color');?>; border-top:1px solid #CDCDCD;color:#CDCDCD;}
				a#impressum:hover{background-color:<?php echo $this->params->get('assisting_color');?>;}
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div id="header_mobile" class="mobile"> <!-- TODO: style -->
				<img id="nav_button" src="img/nav_button.png"/>
				<img id="logo_white" src="<?php echo JUri::root() . $this->params->get('logo-white');?>"/>
				<p id="headline"><?php echo $this->params->get('sitetitle');?></p>
				
				<div id="nav_mobile"> <!-- TODO: Hidden, on click comes from left, list of buttons -->
					<jdoc:include type="modules" name="navigation" style="none" />
				</div>
			</div>
			<div id="header_desktop" class="desktop"><!-- TODO: Style -->
				<img id="logo" src="<?php echo JUri::root() . $this->params->get('logo-114');?>" title="<?php echo $this->params->get('sitetitle');?>" alt="<?php echo $this->params->get('sitetitle');?>"/>
				<p id="headline"><?php echo $this->params->get('sitetitle');?></p>
				<div id="nav_desktop"><!-- TODO: horizontal bar of level1, onHover display level2 -->
					<jdoc:include type="modules" name="navigation" style="none" />
				</div>
			</div>
			<div id="content">
				<jdoc:include type="component" />
			</div>
			<div id="footer">
				<div id="footer_left">
					<?php if($this->params->get('facebook')=="1"):?><a class="social" href="<?php echo $this->params->get('facebook_link');?>"><img class="social_icon" src="img/facebook.png" alt="Facebook" title="<?php echo $this->params->get('facebook_link');?>"/><p class="social_text">Facebook</p></a><?php endif;?>
					<?php if($this->params->get('googleplus')=="1"):?><a class="social" href="<?php echo $this->params->get('googleplus_link');?>"><img class="social_icon" src="img/googleplus.png" alt="Google+" title="<?php echo $this->params->get('googleplus_link');?>"/><p class="social_text">Google+</p></a><?php endif;?>
					<?php if($this->params->get('twitter')=="1"):?><a class="social" href="<?php echo $this->params->get('twitter_link');?>"><img class="social_icon" src="img/twitter.png" alt="Twitter" title="<?php echo $this->params->get('twitter_link');?>"/><p class="social_text">Twitter</p></a><?php endif;?>
					<?php if($this->params->get('rss')=="1"):?><a class="social" href="<?php echo $this->params->get('rss_link');?>"><img class="social_icon" src="img/rss.png" alt="RSS" title="<?php echo $this->params->get('rss_link');?>"/><p class="social_text">RSS</p></a><?php endif;?>
					<?php if($this->params->get('podcast')=="1"):?><a class="social" href="<?php echo $this->params->get('podcast_link');?>"><img class="social_icon" src="img/podcast.png" alt="Podcast" title="<?php echo $this->params->get('podcast_link');?>"/><p class="social_text">Podcast</p></a><?php endif;?>
					<?php if($this->params->get('youtube')=="1"):?><a class="social" href="<?php echo $this->params->get('youtube_link');?>"><img class="social_icon" src="img/youtube.png" alt="YouTube" title="<?php echo $this->params->get('youtube_link');?>"/><p class="social_text">YouTube</p></a><?php endif;?>
					<?php if($this->params->get('foursquare')=="1"):?><a class="social" href="<?php echo $this->params->get('foursquare_link');?>"><img class="social_icon" src="img/foursquare.png" alt="FourSquare" title="<?php echo $this->params->get('foursquare_link');?>"/><p class="social_text">FourSquare</p></a><?php endif;?>
				</div>
				<div id="footer_right">
					<a id="impressum" href="<?php echo $this->params->get('impressum_link');?>">Impressum</a>
				</div>
			</div>
		</div>
	</body>
</html>