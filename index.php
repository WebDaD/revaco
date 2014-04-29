<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php $params = JFactory::getApplication()->getTemplate(true)->params;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
   		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="<?php echo $this->params->get('sitetitle');?>">
		
		<?php if($this->params->get('logo-196x196')!=""){$l_196x196=JUri::root() . $this->params->get('logo-196');}else{$l_196x196="img/logo-196x196.png";}?>
		<link rel="icon" sizes="196x196" href="<?php echo $l_196x196;?>">
		
		<?php if($this->params->get('logo-152x152')!=""){$l_152x152=JUri::root() . $this->params->get('logo-152x152');}else{$l_152x152="img/logo-152x152.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $l_152x152;?>">
		
		<?php if($this->params->get('logo-144x144')!=""){$l_144x144=JUri::root() . $this->params->get('logo-144x144');}else{$l_144x144="img/logo-144x144.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $l_144x144;?>">
		
		<?php if($this->params->get('logo-120x120')!=""){$l_120x120=JUri::root() . $this->params->get('logo-120x120');}else{$l_120x120="img/logo-120x120.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $l_120x120;?>">
		
		<?php if($this->params->get('logo-114x114')!=""){$l_114x114=JUri::root() . $this->params->get('logo-114x114');}else{$l_114x114="img/logo-114x114.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $l_114x114;?>">
		
		<?php if($this->params->get('logo-76x76')!=""){$l_76x76=JUri::root() . $this->params->get('logo-76x76');}else{$l_76x76="img/logo-76x76.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo $l_76x76;?>">
		
		<?php if($this->params->get('logo-72x72')!=""){$l_72x72=JUri::root() . $this->params->get('logo-72x72');}else{$l_72x72="img/logo-72x72.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $l_72x72;?>">
		
		<?php if($this->params->get('logo-60x60')!=""){$l_60x60=JUri::root() . $this->params->get('logo-60x60');}else{$l_60x60="img/logo-60x60.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo $l_60x60;?>">
		
		<?php if($this->params->get('logo-57x57')!=""){$l_57x57=JUri::root() . $this->params->get('logo-57x57');}else{$l_57x57="img/logo-57x57.png";}?>
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $l_57x57;?>">
		
		<?php if($this->params->get('favicon')!=""){$favicon=JUri::root() . $this->params->get('favicon');}else{$favicon="img/favicon.ico";}?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon;?>" />

		<?php if($this->params->get('startup-1536x2008')!=""){$s_1536x2008=JUri::root() . $this->params->get('startup-1536x2008');}else{$s_1536x2008="img/startup-1536x2008.png";}?>
		<link rel="apple-touch-startup-image" href="<?php echo $s_1536x2008;?>" 
		media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">	
			
		<?php if($this->params->get('startup-1496x2048')!=""){$s_1496x2048=JUri::root() . $this->params->get('startup-1496x2048');}else{$s_1496x2048="img/startup-1496x2048.png";}?>
		<link rel="apple-touch-startup-image" href="<?php echo $s_1496x2048;?>" 
		media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">
			
		<?php if($this->params->get('startup-768x1004')!=""){$s_768x1004=JUri::root() . $this->params->get('startup-768x1004');}else{$s_768x1004="img/startup-768x1004.png";}?>
		<link rel="apple-touch-startup-image" href="<?php echo $s_768x1004;?>" 
		media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)">
			
		<?php if($this->params->get('startup-748x1024')!=""){$s_748x1024=JUri::root() . $this->params->get('startup-748x1024');}else{$s_748x1024="img/startup-748x1024.png";}?>
		<link rel="apple-touch-startup-image" href="<?php echo $s_748x1024;?>" 
		media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)">
		
		<?php if($this->params->get('startup-640x1096')!=""){$s_640x1096=JUri::root() . $this->params->get('startup-640x1096');}else{$s_640x1096="img/startup-640x1096.png";}?>
		<link rel="apple-touch-startup-image" href="<?php echo $s_640x1096;?>" 
		media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
		
		<?php if($this->params->get('startup-640x920')!=""){$s_640x920=JUri::root() . $this->params->get('startup-320x460');}else{$s_640x920="img/startup-640x920.png";}?>
		<link rel="apple-touch-startup-image" href="<?php echo $s_640x920;?>" 
		media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)">
		
		<?php if($this->params->get('startup-320x460')!=""){$s_320x460=JUri::root() . $this->params->get('startup-320x460');}else{$s_320x460="img/startup-320x460.png";}?>
		<link rel="apple-touch-startup-image" href="<?php echo $s_320x460;?>" 
		media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)">
		
		
		<meta name="viewport" content="width=device-width">
   
		<jdoc:include type="head" />
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		
		<script src="js/jquery-1.11.0.min.js" type="text/javascript" ></script>
		<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="js/main.js"></script>

		<style>
			body{background:<?php echo $this->params->get('back_color');?>;}
		
			h1,h2,h3{color:<?php echo $this->params->get('main_color');?>;}
			
			/*Here are all Styles which use colors (Links, nav, etc)*/
			div.news{border-color:<?php echo $this->params->get('main_color');?>;}
			div.news h3{color:<?php echo $this->params->get('main_color');?>;}

			#headline{color:<?php echo $this->params->get('main_color');?>;}
			
			ul.menu { background-color: <?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>;}
			ul.menu > li > a {color:<?php echo $this->params->get('comp_color');?>;}
			ul.menu > li > a:hover, ul.menu > li:hover > a { background: <?php echo $this->params->get('comp_color');?>; color:<?php echo $this->params->get('main_color');?>;}
			ul.menu ul > li { background-color:<?php echo $this->params->get('main_color');?>;}
			ul.menu ul > li a {color:<?php echo $this->params->get('comp_color');?>;}
			ul.menu ul > li a:hover,ul.menu ul > li:hover a { background: <?php echo $this->params->get('comp_color');?>;color:#990000; }
			ul.menu ul ul li a:hover { background: <?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>; }
			ul.menu li.parent.deeper  ul  li.parent.deeper  ul {border-color:<?php echo $this->params->get('main_color');?>;}
			ul.menu li.parent.deeper  ul  li.parent.deeper  ul li  a:hover{ background: <?php echo $this->params->get('main_color');?>;<?php echo $this->params->get('comp_color');?>; }
			ul.menu > li.parent > a { background: <?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>; }
			ul.menu > li.active { background: <?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>; }

			#content{border-left-color:<?php echo $this->params->get('assisting_color');?>;}
			
			#footer{border-top-color:<?php echo $this->params->get('main_color');?>;}
			a#impressum{color:<?php echo $this->params->get('main_color');?>;}
			a#impressum:hover{text-shadow: 0 0 5px <?php echo $this->params->get('assisting_color');?>;}
			
			/*MOBILE OVERWRITES*/
			@media only screen and (max-width: 800px) {
			
				#header_mobile{background-color:<?php echo $this->params->get('main_color');?>;color: <?php echo $this->params->get('comp_color');?>;}
				#menuToggler{color:<?php echo $this->params->get('comp_color');?>;}
				#headline{color:<?php echo $this->params->get('comp_color');?>;}
				
				ul.menu li:hover a{color:<?php echo $this->params->get('main_color');?>;background-color:<?php echo $this->params->get('comp_color');?>;}
  				ul.menu li:hover ul{background-color:<?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>;}
    			ul.menu li:hover ul li:hover a{background-color:<?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>;}
    			ul.menu li:hover ul li:hover ul li:hover a{color:<?php echo $this->params->get('main_color');?>;background-color:<?php echo $this->params->get('comp_color');?>;}
				
				a.social{border-bottom-color:<?php echo $this->params->get('comp_color');?>;background-color:<?php echo $this->params->get('main_color');?>;}
				a.social:hover{background-color:<?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>;}
				span.social_text{color:<?php echo $this->params->get('comp_color');?>;}
				span.social_text:hover{color:<?php echo $this->params->get('main_color');?>;}
				a#impressum{background-color:<?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>;}
				a#impressum:hover{background-color:<?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>;}
				
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div id="header_mobile" class="mobile">
			 <a href="#" id="menuToggler">
		        <span class="icon icon-menu">&#9776;</span>
		    </a>
				<img id="logo_white" src="<?php echo JUri::root() . $this->params->get('logo-white');?>"/>
				<p id="headline"><?php echo $this->params->get('sitetitle');?></p>
			</div>
			<div id="header_desktop" class="desktop">
				<img id="logo" src="<?php echo JUri::root() . $this->params->get('logo-114');?>" title="<?php echo $this->params->get('sitetitle');?>" alt="<?php echo $this->params->get('sitetitle');?>"/>
				<p id="headline"><?php echo $this->params->get('sitetitle');?></p>
			</div>
			<nav id="navigation"> 
				<jdoc:include type="modules" name="navigation" style="none" />
			</nav>
			<div id="content">
				<jdoc:include type="component" />
			</div>
			<div id="footer">
				<div id="footer_left">
					<?php if($this->params->get('facebook')=="1"):?><a class="social" href="<?php echo $this->params->get('facebook_link');?>"><img class="social_icon" src="img/socialmedia/fb.png" alt="Facebook" title="<?php echo $this->params->get('facebook_link');?>"/><span class="social_text">Facebook</span></a><?php endif;?>
					<?php if($this->params->get('googleplus')=="1"):?><a class="social" href="<?php echo $this->params->get('googleplus_link');?>"><img class="social_icon" src="img/socialmedia/google+.png" alt="Google+" title="<?php echo $this->params->get('googleplus_link');?>"/><span class="social_text">Google+</span></a><?php endif;?>
					<?php if($this->params->get('twitter')=="1"):?><a class="social" href="<?php echo $this->params->get('twitter_link');?>"><img class="social_icon" src="img/socialmedia/twitter.png" alt="Twitter" title="<?php echo $this->params->get('twitter_link');?>"/><span class="social_text">Twitter</span></a><?php endif;?>
					<?php if($this->params->get('rss')=="1"):?><a class="social" href="<?php echo $this->params->get('rss_link');?>"><img class="social_icon" src="img/socialmedia/rss.png" alt="RSS" title="<?php echo $this->params->get('rss_link');?>"/><span class="social_text">RSS</span></a><?php endif;?>
					<?php if($this->params->get('podcast')=="1"):?><a class="social" href="<?php echo $this->params->get('podcast_link');?>"><img class="social_icon" src="img/socialmedia/music.png" alt="Podcast" title="<?php echo $this->params->get('podcast_link');?>"/><span class="social_text">Podcast</span></a><?php endif;?>
					<?php if($this->params->get('youtube')=="1"):?><a class="social" href="<?php echo $this->params->get('youtube_link');?>"><img class="social_icon" src="img/socialmedia/youtube.png" alt="YouTube" title="<?php echo $this->params->get('youtube_link');?>"/><span class="social_text">YouTube</span></a><?php endif;?>
					<?php if($this->params->get('foursquare')=="1"):?><a class="social" href="<?php echo $this->params->get('foursquare_link');?>"><img class="social_icon" src="img/socialmedia/foursquare.png" alt="FourSquare" title="<?php echo $this->params->get('foursquare_link');?>"/><span class="social_text">FourSquare</span></a><?php endif;?>
				</div>
				<div id="footer_right">
					<a id="impressum" href="<?php echo $this->params->get('impressum_link');?>">Impressum</a>
				</div>
			</div>
		</div>
		<?php if($this->params->get('clickheat')=="1"):?>
		<script type="text/javascript" src="http://<?php echo $this->params->get('clickheat_server');?>/js/clickheat.js"></script>
		<script type="text/javascript">
			<!--
				clickHeatSite = '<?php echo $this->params->get('clickheat_site');?>';
				clickHeatGroup = '<?php echo $this->params->get('clickheat_group');?>';
				clickHeatServer = 'http://<?php echo $this->params->get('clickheat_server');?>/click.php';
				initClickHeat(); 
			//-->
		</script>
		<?php endif;?>
		<?php if($this->params->get('analytics')=="1"):?>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', '<?php echo $this->params->get('analytics_id');?>', '<?php echo $this->params->get('analytics_property');?>');
			  ga('send', 'pageview');
			</script>
		<?php endif;?>
	</body>
</html>