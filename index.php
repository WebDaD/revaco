<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php $params = JFactory::getApplication()->getTemplate(true)->params;?>
<?php $document = JFactory::getDocument();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
   
   
		
		
   		<meta charset="<?php echo $document->getCharset();?>" />
		<base href="<?php echo $document->getBase();?>" />
		
		<?php foreach ($document->_metaTags as $type => $tag):?>
			<?php foreach ($tag as $name => $content):?>
				<?php if ($type == 'http-equiv' && !($document->isHtml5() && $name == 'content-type')):?>
					<meta http-equiv="<?php echo $name; ?>" content="<?php echo htmlspecialchars($content);?>"/>
				<?php elseif ($type == 'standard' && !empty($content)):?>
					<meta name="<?php echo $name; ?>" content="<?php echo htmlspecialchars($content);?>"/>
				<?php endif;?>
			<?php endforeach;?>
		<?php endforeach;?>
   
   		
		<?php if ($document->getDescription()):?>
			<meta name="description" content="<?php echo htmlspecialchars($document->getDescription());?>" />
		<?php endif;?>

		<?php if ($document->getGenerator()):?>
			<meta name="generator" content="<?php echo htmlspecialchars($document->getGenerator());?>" />
		<?php endif;?>

		<title><?php echo htmlspecialchars($document->getTitle(), ENT_COMPAT, 'UTF-8');?></title>
   		
   		
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
   
		
		
		
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-1.11.0.min.js" type="text/javascript" ></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/effects.js"></script>
		
		<!-- Plugins -->
		<?php if($this->params->get('swipe')=="1"):?>
			<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/swipe/jquery.touchSwipe.min.js"></script>
			<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/swipe/swipe.js"></script>
		<?php endif;?>
		
		<?php if($this->params->get('lazyload')=="1"):?>
			<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/lazyload/jquery.unveil.min.js"></script>
			<script>
				var lazyload = {
						threshold:<?php echo $this->params->get('lazyload_threshold');?>
				};
			</script>
			<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/lazyload/lazy.js"></script>
		<?php endif;?>

		<?php if($this->params->get('youtube')=="1"):?>
			<script>
				var youtube = {
						width:<?php echo $this->params->get('youtube_width');?>,
						height:<?php echo $this->params->get('youtube_height');?>
				};
			</script>
			<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/youtube/youtube.js"></script>
		<?php endif;?>
		
		<?php if($this->params->get('contentrotator')=="1"):?>
			<script>
				var contentrotator = {
						transition_time:<?php echo $this->params->get('contentrotator_transition_time');?>
				};
			</script>
			<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/contentrotator/simple.js"></script>
		<?php endif;?>
		
		<?php if($this->params->get('fancybox')=="1"):?>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
			<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
			<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
			<script>
				var fancybox = {
						all_images:<?php echo $this->params->get('fancybox_all_images');?>
				};
			</script>
			<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/fancybox/fancybox.js"></script>
		<?php endif;?>
		
		<!-- Plugins End -->
		<style>
		
			/*Link Effects Part2 (with color. part1 is in css/template.css)*/
			.glow:hover img{-webkit-box-shadow: 0 0 5px 5px <?php echo $this->params->get('assisting_color');?>;box-shadow: 0 0 5px 5px <?php echo $this->params->get('assisting_color');?>;}
			.glow:hover{text-shadow: 0 0 5px <?php echo $this->params->get('assisting_color');?>;}
			/*Link Effects End*/
		
			body{background:<?php echo $this->params->get('back_color');?>;}
		
			#container{background:#FFFFFF;width:<?php echo $this->params->get('container_width');?>;}
			
			
			
			h1,h2,h3{color:<?php echo $this->params->get('main_color');?>;}
			
			.readmore a{color:<?php echo $this->params->get('main_color');?>;}
			
			#header_desktop{background:<?php echo $this->params->get('header_backcolor');?>;}:
			
			<?php if($this->params->get('header_logo_ratio')=="2"):?>
				#logo{width:228px !important;}
			<?php elseif($this->params->get('header_logo_ratio')=="3"):?>
				#logo{width:342px !important;}
			<?php elseif($this->params->get('header_logo_ratio')=="4"):?>
				#logo{width:456px !important;}
			<?php endif;?>
			
			/*Here are all Styles which use colors (Links, nav, etc)*/
			div.news{border-color:<?php echo $this->params->get('main_color');?>;}
			div.news h3{color:<?php echo $this->params->get('main_color');?>;}
			
			div.intro{border-color:<?php echo $this->params->get('main_color');?>;}

			#headline{color:<?php echo $this->params->get('main_color');?>;}
			#headline_desc{color:<?php echo $this->params->get('main_color');?>;}
			#headdesc{color:<?php echo $this->params->get('assisting_color');?>;}
			
			/*row highlighting*/
			table.rowhigh * tr.rh:hover{
  				background:<?php echo $this->params->get('assisting_color');?>;
  				cursor: default;
			}
			table.rowhigh * tr.rh:hover td{
				font-weight: bold;
			}

			ul.menu { background-color: <?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>;}
			ul.menu > li > a {color:<?php echo $this->params->get('comp_color');?>;}
			ul.menu > li > a:hover, ul.menu > li:hover > a { background: <?php echo $this->params->get('comp_color');?>; color:<?php echo $this->params->get('main_color');?>;}
			ul.menu ul > li { background-color:<?php echo $this->params->get('main_color');?>;}
			ul.menu ul > li a {color:<?php echo $this->params->get('comp_color');?>;}
			
			<?php if($this->params->get('navigation_spacer')=="1"):?>
				ul.menu > li > a:before{content: "  |  ";} 
				ul.menu > li:first-child > a:before{content: "";}
			<?php endif;?>
			
			
			
			ul.menu ul > li a:hover,ul.menu ul > li:hover a { background: <?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>; }
			ul.menu ul ul li a:hover { background: <?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>; }
			ul.menu li.parent.deeper  ul  li.parent.deeper  ul {border-color:<?php echo $this->params->get('main_color');?>;}
			ul.menu li.parent.deeper  ul  li.parent.deeper  ul li  a:hover{ background: <?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>; }
			
			ul.menu > li.active > a { background: <?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?> !important;font-weight:bold; }
			
			/*CONTENT*/
			
			<?php if($this->params->get('content_border_left')=="1"):?>
				#content{border-left-width:6px;border-left-style:solid;padding-left:2%;border-left-color:<?php echo $this->params->get('assisting_color');?>;}
			<?php endif;?>
			<?php if($this->params->get('content_border_right')=="1"):?>
				#content{border-right-width:6px;border-right-style:solid;padding-right:2%;border-right-color:<?php echo $this->params->get('assisting_color');?>;}
			<?php endif;?>
			#footer{border-top-color:<?php echo $this->params->get('main_color');?>;background: <?php echo $this->params->get('footer_color');?>;}
			a#impressum{color:<?php echo $this->params->get('main_color');?>;}
			a#impressum:hover{text-shadow: 0 0 5px <?php echo $this->params->get('assisting_color');?>;}
			
			/*MOBILE OVERWRITES*/
			@media only screen and (max-width: 800px) {
			
				#container{width:100%;}
			
				#header_mobile{background-color:<?php echo $this->params->get('main_color');?>;color: <?php echo $this->params->get('comp_color');?>;}
				#menuToggler{color:<?php echo $this->params->get('comp_color');?>;border-color:<?php echo $this->params->get('comp_color');?>;}
				#headline{color:<?php echo $this->params->get('comp_color');?>;}
				
			
				
				ul.menu li:hover a{background-color:<?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>;}
  				ul.menu li:hover ul{color:<?php echo $this->params->get('main_color');?>;background-color:<?php echo $this->params->get('comp_color');?>;}
    			ul.menu li:hover ul li:hover a{color:<?php echo $this->params->get('main_color');?>;background-color:<?php echo $this->params->get('comp_color');?>;}
    			ul.menu li:hover ul li:hover ul li:hover a{color:<?php echo $this->params->get('main_color');?>;background-color:<?php echo $this->params->get('comp_color');?>;}
				
				ul.menu li.parent.deeper ul li.parent.deeper ul li a:hover {color:<?php echo $this->params->get('comp_color');?>;}
				
				a.social{border-bottom-color:<?php echo $this->params->get('comp_color');?>;background-color:<?php echo $this->params->get('main_color');?>;}
				a.social:hover{background-color:<?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>;}
				span.social_text{color:<?php echo $this->params->get('comp_color');?>;}
				span.social_text:hover{color:<?php echo $this->params->get('main_color');?>;}
				a#impressum{background-color:<?php echo $this->params->get('main_color');?>;color:<?php echo $this->params->get('comp_color');?>;}
				a#impressum:hover{background-color:<?php echo $this->params->get('comp_color');?>;color:<?php echo $this->params->get('main_color');?>;}
				
				<?php if($this->params->get('show_sm_icons')=="0"):?>
					a.social img.social_icon{display:none;}
				<?php endif;?>
				
			}
		</style>
		<?php if($this->params->get('header_googlefont')=="1"):?>
			<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('header_googlefont_name');?>' rel='stylesheet' type='text/css' />
			<style type="text/css">
				#headline,#headline_desc{
					font-family: '<?php echo str_replace('+', ' ', $this->params->get('header_googlefont_name'));?>', sans-serif;
				}
			</style>
		<?php endif;?>
		<?php if($this->params->get('header_webdadfont')=="1"):?>
			<link href='//fonts.webdad.eu/css/<?php echo $this->params->get('header_webdadfont_name');?>/font.css' rel='stylesheet' type='text/css' />
			<style type="text/css">
				#headline,#headline_desc{
					font-family: '<?php echo str_replace('+', ' ', $this->params->get('header_webdadfont_name'));?>', sans-serif;
				}
			</style>
		<?php endif;?>
		
		<jdoc:include type="head" />
	</head>
	
	<body>
		<div id="container">
			<div id="header_mobile" class="mobile"> 
				<img id="logo_white" src="<?php echo JUri::root() . $this->params->get('logo-white');?>" class="no_fancybox"/>
				<p id="headline">
					<?php if($this->params->get('custom_mobile_title')=="1"):?>
						<?php echo $this->params->get('sitetitle');?>
					<?php else:?>
						<?php echo $this->params->get('mobile_title');?>
					<?php endif;?>
				</p>
				<a href="#" id="menuToggler"><img class="icon icon-menu no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/icon-menu.png"/></a>
			</div>
			<?php if($this->params->get('header_module')=="1"):?>
				<div id="header_desktop" class="desktop">
					<?php echo $this->params->get('header_module_html'); ?>
				</div>
			<?php else:?>
				<?php if($this->params->get('header_module')=="2"):?>
					<div id="preheader" class="desktop">
						<?php echo $this->params->get('preheader_module_html'); ?>
					</div>
				<?php endif;?>
				<div id="header_desktop" class="desktop">
					<?php if($this->params->get('header_logo_ratio')=="1"):?>
						<img id="logo" src="<?php echo JUri::root() . $this->params->get('logo-114x114');?>" title="<?php echo $this->params->get('sitetitle');?>" alt="<?php echo $this->params->get('sitetitle');?>" class="no_fancybox"/>
					<?php elseif($this->params->get('header_logo_ratio')=="2"):?>
						<img id="logo" src="<?php echo JUri::root() . $this->params->get('logo-114x228');?>" title="<?php echo $this->params->get('sitetitle');?>" alt="<?php echo $this->params->get('sitetitle');?>" class="no_fancybox"/>
					<?php elseif($this->params->get('header_logo_ratio')=="3"):?>
						<img id="logo" src="<?php echo JUri::root() . $this->params->get('logo-114x342');?>" title="<?php echo $this->params->get('sitetitle');?>" alt="<?php echo $this->params->get('sitetitle');?>" class="no_fancybox"/>
					<?php elseif($this->params->get('header_logo_ratio')=="4"):?>
						<img id="logo" src="<?php echo JUri::root() . $this->params->get('logo-114x456');?>" title="<?php echo $this->params->get('sitetitle');?>" alt="<?php echo $this->params->get('sitetitle');?>" class="no_fancybox"/>
					<?php endif;?>
					<?php if($this->params->get('header_second_image_show')=="1"):?>
						<img id="second_logo" src="<?php echo JUri::root() . $this->params->get('header_second_image');?>" title="<?php echo $this->params->get('header_second_image_alt');?>" alt="<?php echo $this->params->get('header_second_image_alt');?>" class="no_fancybox"/>
					<?php endif;?>
						<div id="translation">
								<jdoc:include type="modules" name="translation" style="none" />
						</div>
					<?php if($this->params->get('show_site_description')=="1"):?>
						<p id="headline_desc"><?php echo $this->params->get('sitetitle');?></p>
						<p id="headdesc"><?php echo $this->params->get('sitedescription');?></p>
					<?php else: ?>
						<p id="headline"><?php echo $this->params->get('sitetitle');?></p>
					<?php endif;?>
				</div>
			<?php endif;?>
			<nav id="navigation"> 
				<jdoc:include type="modules" name="navigation" style="none" />
			</nav>
			<div id="content">
				<jdoc:include type="component" />
				<div style="clear:both;"/></div>
			</div>
			<?php if($this->params->get('footer_module')=="1"):?>
				<div id="footer">
					<?php echo $this->params->get('footer_module_html'); ?>
				</div>
			<?php else:?>
				<div id="footer">
					<?php if($this->params->get('footer_module')=="2"):?>
						<div id="footer_left">
							<div style="float:left;">
								<?php echo $this->params->get('leftfooter_module_html'); ?>
							</div>
						</div>
					<?php else:?>
						<div id="footer_left">
							<?php if($this->params->get('facebook')=="1"):?>
								<a target="_blank" class="social" href="<?php echo $this->params->get('facebook_link');?>">
									<img class="social_icon no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/socialmedia/fb.png" alt="Facebook" title="<?php echo $this->params->get('facebook_link');?>"/>
									<span class="social_text">Facebook</span>
								</a>
							<?php endif;?>
							<?php if($this->params->get('googleplus')=="1"):?>
								<a target="_blank" class="social" href="<?php echo $this->params->get('googleplus_link');?>">
									<img class="social_icon no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/socialmedia/google+.png" alt="Google+" title="<?php echo $this->params->get('googleplus_link');?>"/>
									<span class="social_text">Google+</span>
								</a>
							<?php endif;?>
							<?php if($this->params->get('twitter')=="1"):?>
								<a target="_blank" class="social" href="<?php echo $this->params->get('twitter_link');?>">
									<img class="social_icon no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/socialmedia/twitter.png" alt="Twitter" title="<?php echo $this->params->get('twitter_link');?>"/>
									<span class="social_text">Twitter</span>
								</a>
							<?php endif;?>
							<?php if($this->params->get('rss')=="1"):?>
								<a target="_blank" class="social" href="<?php echo $this->params->get('rss_link');?>">
									<img class="social_icon no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/socialmedia/rss.png" alt="RSS" title="<?php echo $this->params->get('rss_link');?>"/>
									<span class="social_text">RSS</span>
								</a>
							<?php endif;?>
							<?php if($this->params->get('podcast')=="1"):?>
								<a target="_blank" class="social" href="<?php echo $this->params->get('podcast_link');?>">
									<img class="social_icon no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/socialmedia/music.png" alt="Podcast" title="<?php echo $this->params->get('podcast_link');?>"/>
									<span class="social_text">Podcast</span>
								</a>
							<?php endif;?>
							<?php if($this->params->get('youtube')=="1"):?>
								<a target="_blank" class="social" href="<?php echo $this->params->get('youtube_link');?>">
									<img class="social_icon no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/socialmedia/youtube.png" alt="YouTube" title="<?php echo $this->params->get('youtube_link');?>"/>
									<span class="social_text">YouTube</span>
								</a>
							<?php endif;?>
							<?php if($this->params->get('foursquare')=="1"):?>
								<a target="_blank" class="social" href="<?php echo $this->params->get('foursquare_link');?>">
									<img class="social_icon no_fancybox" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/socialmedia/foursquare.png" alt="FourSquare" title="<?php echo $this->params->get('foursquare_link');?>"/>
									<span class="social_text">FourSquare</span>
								</a>
							<?php endif;?>
						</div>
					<?php endif;?>
					<div id="footer_right">
						<a id="impressum" href="<?php echo $this->params->get('impressum_link');?>">Impressum</a>
					</div>
				</div>
			<?php endif;?>
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