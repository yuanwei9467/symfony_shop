<!DOCTYPE html>
<!-- saved from url=(0086)http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/dashboard.html -->
<html lang="en-us"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard</title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $view['assets']->getUrl('css/admin/bootstrap.min.css')?>">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $view['assets']->getUrl('css/admin/smartadmin-production.min.css')?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $view['assets']->getUrl('css/admin/smartadmin-skins.min.css')?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $view['assets']->getUrl('css/admin/font-awesome.min.css')?>">

		<!-- SmartAdmin RTL Support is under construction
			 This RTL CSS will be released in version 1.5
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $view['assets']->getUrl('css/admin/demo.min.css')?>">

		

		<!-- #GOOGLE FONT -->
		

		<!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		

	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

	
	<body class="desktop-detected" style="">

		<!-- #HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="<?php echo $view['assets']->getUrl('images/admin/logo.png')?>" alt="SmartAdmin"> </span>
				<!-- END LOGO PLACEHOLDER -->

				<!-- Note: The activity badge color changes when clicked and resets the number to 0
					 Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
				<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge bg-color-red bounceIn animated"> 21 </b> </span>

				<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
				<div class="ajax-dropdown">

					<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/mail.html">
							Msgs (14) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/notifications.html">
							notify (3) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/tasks.html">
							Tasks (4) </label>
					</div>

					<!-- notification content -->
					<div class="ajax-notifications custom-scroll">

						<div class="alert alert-transparent">
							<h4>Click a button to show messages here</h4>
							This blank page message helps protect your privacy, or you can show the first message here automatically.
						</div>

						<i class="fa fa-lock fa-4x fa-border"></i>

					</div>
					<!-- end notification content -->

					<!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="&lt;i class=&#39;fa fa-refresh fa-spin&#39;&gt;&lt;/i&gt; Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button> </span>
					<!-- end footer -->

				</div>
				<!-- END AJAX-DROPDOWN -->
			</div>

			<!-- #PROJECTS: projects dropdown -->
			<div class="project-context hidden-xs">

				<span class="label">Projects:</span>
				<span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

				<!-- Suggestion: populate this list with fetch and push technique -->
				<ul class="dropdown-menu">
					<li>
						<a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
					</li>
					<li>
						<a href="javascript:void(0);">Notes on pipeline upgradee</a>
					</li>
					<li>
						<a href="javascript:void(0);">Assesment Report for merchant account</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
					</li>
				</ul>
				<!-- end dropdown-menu-->

			</div>
			<!-- end projects dropdown -->
			
			<!-- #TOGGLE LAYOUT BUTTONS -->
			<!-- pulled right: nav area -->
			<div class="pull-right">
				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->
				
				<!-- #MOBILE -->
				<!-- Top menu profile link : this shows only when top menu is active -->
				<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
					<li class="">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
							<img src="./Dashboard_files/sunny.png" alt="John Doe" class="online">  
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
							</li>
						</ul>
					</li>
				</ul>

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->

				<!-- search mobile button (this is hidden till mobile view port) -->
				<div id="search-mobile" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
				</div>
				<!-- end search mobile button -->
				
				<!-- #SEARCH -->
				<!-- input: search field -->
				<form action="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/search.html" class="header-search pull-right">
					<input id="search-fld" type="text" name="param" placeholder="Find reports and more">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
				</form>
				<!-- end input: search field -->

				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->

				<!-- #Voice Command: Start Speech -->
				<div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
					<div> 
						<a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
						<div class="popover bottom"><div class="arrow"></div>
							<div class="popover-content">
								<h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
								<h4 class="vc-title-error text-center">
									<i class="fa fa-microphone-slash"></i> Voice command failed
									<br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
									<br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
								</h4>
								<a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a> 
								<a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$(&#39;#speech-btn .popover&#39;).fadeOut(50);">Close Popup</a> 
							</div>
						</div>
					</div>
				</div>
				<!-- end voice command -->

				<!-- multiple lang dropdown : find all flags in the flags page -->
				<ul class="header-dropdown-list hidden-xs">
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#" class="dropdown-toggle" data-toggle="dropdown"> <img src="./Dashboard_files/blank.gif" class="flag flag-us" alt="United States"> <span> US</span> <i class="fa fa-angle-down"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li class="active">
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-fr" alt="France"> Français</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="./Dashboard_files/blank.gif" class="flag flag-kp" alt="Korea"> 한국어</a>
							</li>						
							
						</ul>
					</li>
				</ul>
				<!-- end multiple lang -->

			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->

		<!-- #NAVIGATION -->
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="./Dashboard_files/sunny.png" alt="me" class="online"> 
						<span>
							john.doe 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul>
					<li class="active">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/dashboard.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">用户管理</span><span class="badge pull-right inbox-badge">14</span></a>
					</li>
					<li class="">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul style="display: none;">
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/flot.html">Flot Chart</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/morris.html">Morris Charts</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/inline-charts.html">Inline Charts</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/dygraphs.html">Dygraphs <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul style="display: none;">
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/table.html">Normal Tables</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight">v1.10</span></a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/jqgrid.html">Jquery Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/form-elements.html">Smart Form Elements</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/form-templates.html">Smart Form Layouts</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/validation.html">Smart Form Validation</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/bootstrap-forms.html">Bootstrap Form Elements</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/plugins.html">Form Plugins</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/wizard.html">Wizards</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/other-editors.html">Bootstrap Editors</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/dropzone.html">Dropzone</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/image-editor.html">Image Cropping <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul style="display: none;">
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/general-elements.html">General Elements</a>
							</li>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/buttons.html">Buttons</a>
							</li>
							<li class="">
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#">Icons<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
								<ul style="display: none;">
									<li class="">
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons</a>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/flags.html"><i class="fa fa-flag"></i> Flags</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/grid.html">Grid</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/treeview.html">Tree View</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/nestable-list.html">Nestable Lists</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/jqui.html">JQuery UI</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/typography.html">Typography</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#">Six Level Menu<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
								<ul>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-folder-open"></i> Item #2<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
										<ul>
											<li>
												<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-folder-open"></i> Sub #2.1 <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
												<ul>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-file-text"></i> Item #2.1.1</a>
													</li>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-plus"></i> Expand<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
														<ul>
															<li>
																<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-file-text"></i> File</a>
															</li>
															<li>
																<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-trash-o"></i> Delete</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-folder-open"></i> Item #3<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
		
										<ul>
											<li>
												<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
												<ul>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
													<li>
														<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
												</ul>
											</li>
										</ul>
		
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span class="menu-item-parent">Calendar</span></a>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
					</li>
					<li>
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-file"></i> Other Pages<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
								<ul>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/forum.html">Forum Layout</a>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/profile.html">Profile</a>
									</li>
									<li>
										<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/timeline.html">Timeline</a>
									</li>
								</ul>	
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/pricing-table.html">Pricing Tables</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/invoice.html">Invoice</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/login.html" target="_top">Login</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/register.html" target="_top">Register</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/lock.html" target="_top">Locked Screen</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/error404.html">Error 404</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/error500.html">Error 500</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/blank_.html">Blank Page</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/email-template.html">Email Template</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/search.html">Search Page</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/ckeditor.html">CK Editor</a>
							</li>
						</ul>
					</li>
					<li class="top-menu-hidden">
						<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/difver.html"><i class="fa fa-stack-overflow"></i> Different Versions</a>
							</li>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/ajax/applayout.html"><i class="fa fa-cube"></i> App Settings</a>
							</li>
							<li>
								<a href="http://192.241.236.31/smartadmin/BUGTRACK/track_/documentation/index.html" target="_blank"><i class="fa fa-book"></i> Documentation</a>
							</li>
							<li>
								<a href="http://192.241.236.31/smartadmin/BUGTRACK/track_/" target="_blank"><i class="fa fa-bug"></i> Bug Tracker</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>
		<!-- END NAVIGATION -->

		<!-- #MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			

			

			<!-- #MAIN CONTENT -->
			<div id="content" style="opacity: 1;"><div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard <span>&gt; My Dashboard</span></h1>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm"><canvas width="89" height="26" style="display: inline-block; width: 89px; height: 26px; vertical-align: top;"></canvas></div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm"><canvas width="82" height="26" style="display: inline-block; width: 82px; height: 26px; vertical-align: top;"></canvas></div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm"><canvas width="82" height="26" style="display: inline-block; width: 82px; height: 26px; vertical-align: top;"></canvas></div>
			</li>
		</ul>
	</div>
</div>
<!-- widget grid -->
<section id="widget-grid" class="">

	

	

</section>
<!-- end widget grid -->

<script type="text/javascript">
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	/*
	 * PAGE RELATED SCRIPTS
	 */

	// pagefunction
	
	var pagefunction = function() {
			
		$(".js-status-update a").click(function () {
		    var selText = $(this).text();
		    var $this = $(this);
		    $this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
		    $this.parents('.dropdown-menu').find('li').removeClass('active');
		    $this.parent().addClass('active');
		});
		
		/*
		 * TODO: add a way to add more todo's to list
		 */
		
		// initialize sortable
		
	    $("#sortable1, #sortable2").sortable({
	        handle: '.handle',
	        connectWith: ".todo",
	        update: countTasks
	    }).disableSelection();
		
		
		// check and uncheck
		$('.todo .checkbox > input[type="checkbox"]').click(function () {
		    var $this = $(this).parent().parent().parent();
		
		    if ($(this).prop('checked')) {
		        $this.addClass("complete");
		
		        // remove this if you want to undo a check list once checked
		        //$(this).attr("disabled", true);
		        $(this).parent().hide();
		
		        // once clicked - add class, copy to memory then remove and add to sortable3
		        $this.slideUp(500, function () {
		            $this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
		            $this.remove();
		            countTasks();
		        });
		    } else {
		        // insert undo code here...
		    }
		
		})
		// count tasks
		function countTasks() {
		
		    $('.todo-group-title').each(function () {
		        var $this = $(this);
		        $this.find(".num-of-tasks").text($this.next().find("li").size());
		    });
		
		}
		
		/*
		 * RUN PAGE GRAPHS
		 */
		
		// Load FLOAT dependencies (related to page)
		loadScript("js/plugin/flot/jquery.flot.cust.min.js", loadFlotResize);
		
		function loadFlotResize() {
		    loadScript("js/plugin/flot/jquery.flot.resize.min.js", loadFlotToolTip);
		}
		
		function loadFlotToolTip() {
		    loadScript("js/plugin/flot/jquery.flot.tooltip.min.js", generatePageGraphs);
		}
		
		function generatePageGraphs() {
		
		    /* TAB 1: UPDATING CHART */
		    // For the demo we use generated data, but normally it would be coming from the server
		
		    var data = [],
		        totalPoints = 200,
		        $UpdatingChartColors = $("#updating-chart").css('color');
		
		    function getRandomData() {
		        if (data.length > 0)
		            data = data.slice(1);
		
		        // do a random walk
		        while (data.length < totalPoints) {
		            var prev = data.length > 0 ? data[data.length - 1] : 50;
		            var y = prev + Math.random() * 10 - 5;
		            if (y < 0)
		                y = 0;
		            if (y > 100)
		                y = 100;
		            data.push(y);
		        }
		
		        // zip the generated y values with the x values
		        var res = [];
		        for (var i = 0; i < data.length; ++i)
		            res.push([i, data[i]])
		        return res;
		    }
		
		    // setup control widget
		    var updateInterval = 1500;
		    $("#updating-chart").val(updateInterval).change(function () {
		
		        var v = $(this).val();
		        if (v && !isNaN(+v)) {
		            updateInterval = +v;
		            $(this).val("" + updateInterval);
		        }
		
		    });
		
		    // setup plot
		    var options = {
		        yaxis: {
		            min: 0,
		            max: 100
		        },
		        xaxis: {
		            min: 0,
		            max: 100
		        },
		        colors: [$UpdatingChartColors],
		        series: {
		            lines: {
		                lineWidth: 1,
		                fill: true,
		                fillColor: {
		                    colors: [{
		                        opacity: 0.4
		                    }, {
		                        opacity: 0
		                    }]
		                },
		                steps: false
		
		            }
		        }
		    };
		
		    var plot = $.plot($("#updating-chart"), [getRandomData()], options);
		
		    /* live switch */
		    $('input[type="checkbox"]#start_interval').click(function () {
		        if ($(this).prop('checked')) {
		            $on = true;
		            updateInterval = 1500;
		            update();
		        } else {
		            clearInterval(updateInterval);
		            $on = false;
		        }
		    });
		
		    function update() {
		        if ($on == true) {
		            plot.setData([getRandomData()]);
		            plot.draw();
		            setTimeout(update, updateInterval);
		
		        } else {
		            clearInterval(updateInterval)
		        }
		
		    }
		
		    var $on = false;
		
		    /*end updating chart*/
		
		    /* TAB 2: Social Network  */
		
		    $(function () {
		        // jQuery Flot Chart
		        var twitter = [
		            [1, 27],
		            [2, 34],
		            [3, 51],
		            [4, 48],
		            [5, 55],
		            [6, 65],
		            [7, 61],
		            [8, 70],
		            [9, 65],
		            [10, 75],
		            [11, 57],
		            [12, 59],
		            [13, 62]
		        ],
		            facebook = [
		                [1, 25],
		                [2, 31],
		                [3, 45],
		                [4, 37],
		                [5, 38],
		                [6, 40],
		                [7, 47],
		                [8, 55],
		                [9, 43],
		                [10, 50],
		                [11, 47],
		                [12, 39],
		                [13, 47]
		            ],
		            data = [{
		                label: "Twitter",
		                data: twitter,
		                lines: {
		                    show: true,
		                    lineWidth: 1,
		                    fill: true,
		                    fillColor: {
		                        colors: [{
		                            opacity: 0.1
		                        }, {
		                            opacity: 0.13
		                        }]
		                    }
		                },
		                points: {
		                    show: true
		                }
		            }, {
		                label: "Facebook",
		                data: facebook,
		                lines: {
		                    show: true,
		                    lineWidth: 1,
		                    fill: true,
		                    fillColor: {
		                        colors: [{
		                            opacity: 0.1
		                        }, {
		                            opacity: 0.13
		                        }]
		                    }
		                },
		                points: {
		                    show: true
		                }
		            }];
		
		        var options = {
		            grid: {
		                hoverable: true
		            },
		            colors: ["#568A89", "#3276B1"],
		            tooltip: true,
		            tooltipOpts: {
		                //content : "Value <b>$x</b> Value <span>$y</span>",
		                defaultTheme: false
		            },
		            xaxis: {
		                ticks: [
		                    [1, "JAN"],
		                    [2, "FEB"],
		                    [3, "MAR"],
		                    [4, "APR"],
		                    [5, "MAY"],
		                    [6, "JUN"],
		                    [7, "JUL"],
		                    [8, "AUG"],
		                    [9, "SEP"],
		                    [10, "OCT"],
		                    [11, "NOV"],
		                    [12, "DEC"],
		                    [13, "JAN+1"]
		                ]
		            },
		            yaxes: {
		
		            }
		        };
		
		        var plot3 = $.plot($("#statsChart"), data, options);
		    });
		
		    // END TAB 2
		
		    // TAB THREE GRAPH //
		    /* TAB 3: Revenew  */
		
		    $(function () {
		
		        var trgt = [
		            [1354586000000, 153],
		            [1364587000000, 658],
		            [1374588000000, 198],
		            [1384589000000, 663],
		            [1394590000000, 801],
		            [1404591000000, 1080],
		            [1414592000000, 353],
		            [1424593000000, 749],
		            [1434594000000, 523],
		            [1444595000000, 258],
		            [1454596000000, 688],
		            [1464597000000, 364]
		        ],
		            prft = [
		                [1354586000000, 53],
		                [1364587000000, 65],
		                [1374588000000, 98],
		                [1384589000000, 83],
		                [1394590000000, 980],
		                [1404591000000, 808],
		                [1414592000000, 720],
		                [1424593000000, 674],
		                [1434594000000, 23],
		                [1444595000000, 79],
		                [1454596000000, 88],
		                [1464597000000, 36]
		            ],
		            sgnups = [
		                [1354586000000, 647],
		                [1364587000000, 435],
		                [1374588000000, 784],
		                [1384589000000, 346],
		                [1394590000000, 487],
		                [1404591000000, 463],
		                [1414592000000, 479],
		                [1424593000000, 236],
		                [1434594000000, 843],
		                [1444595000000, 657],
		                [1454596000000, 241],
		                [1464597000000, 341]
		            ],
		            toggles = $("#rev-toggles"),
		            target = $("#flotcontainer");
		
		        var data = [{
		            label: "Target Profit",
		            data: trgt,
		            bars: {
		                show: true,
		                align: "center",
		                barWidth: 30 * 30 * 60 * 1000 * 80
		            }
		        }, {
		            label: "Actual Profit",
		            data: prft,
		            color: '#3276B1',
		            lines: {
		                show: true,
		                lineWidth: 3
		            },
		            points: {
		                show: true
		            }
		        }, {
		            label: "Actual Signups",
		            data: sgnups,
		            color: '#71843F',
		            lines: {
		                show: true,
		                lineWidth: 1
		            },
		            points: {
		                show: true
		            }
		        }]
		
		        var options = {
		            grid: {
		                hoverable: true
		            },
		            tooltip: true,
		            tooltipOpts: {
		                //content: '%x - %y',
		                //dateFormat: '%b %y',
		                defaultTheme: false
		            },
		            xaxis: {
		                mode: "time"
		            },
		            yaxes: {
		                tickFormatter: function (val, axis) {
		                    return "$" + val;
		                },
		                max: 1200
		            }
		
		        };
		
		        plot2 = null;
		
		        function plotNow() {
		            var d = [];
		            toggles.find(':checkbox').each(function () {
		                if ($(this).is(':checked')) {
		                    d.push(data[$(this).attr("name").substr(4, 1)]);
		                }
		            });
		            if (d.length > 0) {
		                if (plot2) {
		                    plot2.setData(d);
		                    plot2.draw();
		                } else {
		                    plot2 = $.plot(target, d, options);
		                }
		            }
		
		        };
		
		        toggles.find(':checkbox').on('change', function () {
		            plotNow();
		        });
		        plotNow()
		
		    });
		
		}
		
		/*
		 * VECTOR MAP
		 */
		
		data_array = {
		    "US": 4977,
		    "AU": 4873,
		    "IN": 3671,
		    "BR": 2476,
		    "TR": 1476,
		    "CN": 146,
		    "CA": 134,
		    "BD": 100
		};
		
		// Load Map dependency 1 then call for dependency 2
		loadScript("js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js", loadMapFile);
		
		// Load Map dependency 2 then rendeder Map
		function loadMapFile() {
		    loadScript("js/plugin/vectormap/jquery-jvectormap-world-mill-en.js", renderVectorMap);
		}
		
		function renderVectorMap() {
		    $('#vector-map').vectorMap({
		        map: 'world_mill_en',
		        backgroundColor: '#fff',
		        regionStyle: {
		            initial: {
		                fill: '#c4c4c4'
		            },
		            hover: {
		                "fill-opacity": 1
		            }
		        },
		        series: {
		            regions: [{
		                values: data_array,
		                scale: ['#85a8b6', '#4d7686'],
		                normalizeFunction: 'polynomial'
		            }]
		        },
		        onRegionLabelShow: function (e, el, code) {
		            if (typeof data_array[code] == 'undefined') {
		                e.preventDefault();
		            } else {
		                var countrylbl = data_array[code];
		                el.html(el.html() + ': ' + countrylbl + ' visits');
		            }
		        }
		    });
		}
		
		/*
		 * FULL CALENDAR JS
		 */
		
		// Load Calendar dependency then setup calendar
		loadScript("js/plugin/fullcalendar/jquery.fullcalendar.min.js", setupCalendar);
		
		function setupCalendar() {
		
		    if ($("#calendar").length) {
		        var date = new Date();
		        var d = date.getDate();
		        var m = date.getMonth();
		        var y = date.getFullYear();
		
		        var calendar = $('#calendar').fullCalendar({
		
		            editable: true,
		            draggable: true,
		            selectable: false,
		            selectHelper: true,
		            unselectAuto: false,
		            disableResizing: false,
		
		            header: {
		                left: 'title', //,today
		                center: 'prev, next, today',
		                right: 'month, agendaWeek, agenDay' //month, agendaDay,
		            },
		
		            select: function (start, end, allDay) {
		                var title = prompt('Event Title:');
		                if (title) {
		                    calendar.fullCalendar('renderEvent', {
		                            title: title,
		                            start: start,
		                            end: end,
		                            allDay: allDay
		                        }, true // make the event "stick"
		                    );
		                }
		                calendar.fullCalendar('unselect');
		            },
		
		            events: [{
		                title: 'All Day Event',
		                start: new Date(y, m, 1),
		                description: 'long description',
		                className: ["event", "bg-color-greenLight"],
		                icon: 'fa-check'
		            }, {
		                title: 'Long Event',
		                start: new Date(y, m, d - 5),
		                end: new Date(y, m, d - 2),
		                className: ["event", "bg-color-red"],
		                icon: 'fa-lock'
		            }, {
		                id: 999,
		                title: 'Repeating Event',
		                start: new Date(y, m, d - 3, 16, 0),
		                allDay: false,
		                className: ["event", "bg-color-blue"],
		                icon: 'fa-clock-o'
		            }, {
		                id: 999,
		                title: 'Repeating Event',
		                start: new Date(y, m, d + 4, 16, 0),
		                allDay: false,
		                className: ["event", "bg-color-blue"],
		                icon: 'fa-clock-o'
		            }, {
		                title: 'Meeting',
		                start: new Date(y, m, d, 10, 30),
		                allDay: false,
		                className: ["event", "bg-color-darken"]
		            }, {
		                title: 'Lunch',
		                start: new Date(y, m, d, 12, 0),
		                end: new Date(y, m, d, 14, 0),
		                allDay: false,
		                className: ["event", "bg-color-darken"]
		            }, {
		                title: 'Birthday Party',
		                start: new Date(y, m, d + 1, 19, 0),
		                end: new Date(y, m, d + 1, 22, 30),
		                allDay: false,
		                className: ["event", "bg-color-darken"]
		            }, {
		                title: 'Smartadmin Open Day',
		                start: new Date(y, m, 28),
		                end: new Date(y, m, 29),
		                className: ["event", "bg-color-darken"]
		            }],
		
		            eventRender: function (event, element, icon) {
		                if (!event.description == "") {
		                    element.find('.fc-event-title').append("<br/><span class='ultra-light'>" + event.description +
		                        "</span>");
		                }
		                if (!event.icon == "") {
		                    element.find('.fc-event-title').append("<i class='air air-top-right fa " + event.icon +
		                        " '></i>");
		                }
		            }
		        });
		
		    };
		
		    /* hide default buttons */
		    $('.fc-header-right, .fc-header-center').hide();
		
		}
		
		// calendar prev
		$('#calendar-buttons #btn-prev').click(function () {
		    $('.fc-button-prev').click();
		    return false;
		});
		
		// calendar next
		$('#calendar-buttons #btn-next').click(function () {
		    $('.fc-button-next').click();
		    return false;
		});
		
		// calendar today
		$('#calendar-buttons #btn-today').click(function () {
		    $('.fc-button-today').click();
		    return false;
		});
		
		// calendar month
		$('#mt').click(function () {
		    $('#calendar').fullCalendar('changeView', 'month');
		});
		
		// calendar agenda week
		$('#ag').click(function () {
		    $('#calendar').fullCalendar('changeView', 'agendaWeek');
		});
		
		// calendar agenda day
		$('#td').click(function () {
		    $('#calendar').fullCalendar('changeView', 'agendaDay');
		});
		
		/*
		 * CHAT
		 */
		
		var filter_input = $('#filter-chat-list'),
			chat_users_container = $('#chat-container > .chat-list-body'),
			chat_users = $('#chat-users'),
			chat_list_btn = $('#chat-container > .chat-list-open-close'),
			chat_body = $('#chat-body');
		
		/*
		 * LIST FILTER (CHAT)
		 */
		
		// custom css expression for a case-insensitive contains()
		jQuery.expr[':'].Contains = function (a, i, m) {
		    return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
		};
		
		function listFilter(list) { // header is any element, list is an unordered list
		    // create and add the filter form to the header
		
		    filter_input.change(function () {
		        var filter = $(this).val();
		        if (filter) {
		            // this finds all links in a list that contain the input,
		            // and hide the ones not containing the input while showing the ones that do
		            chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
		            chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
		        } else {
		            chat_users.find("li").slideDown();
		        }
		        return false;
		    }).keyup(function () {
		        // fire the above change event after every letter
		        $(this).change();
		
		    });
		
		}
		
		// on dom ready
		listFilter(chat_users);
		
		// open chat list
		chat_list_btn.click(function () {
		    $(this).parent('#chat-container').toggleClass('open');
		})
		
		chat_body.animate({
		    scrollTop: chat_body[0].scrollHeight
		}, 500);
	
	};
	
	// end pagefunction
	
	// run pagefunction on load
	pagefunction();
	
	
</script>
</div>
			
			<!-- END #MAIN CONTENT -->

		</div>
		<!-- END #MAIN PANEL -->

		<!-- #PAGE FOOTER -->
		<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">SmartAdmin WebApp © 2013-2014</span>
				</div>

				<div class="col-xs-6 col-sm-6 text-right hidden-xs">
					<div class="txt-color-white inline-block">
						<i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
						<div class="btn-group dropup">
							<button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
								<i class="fa fa-link"></i> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right text-left">
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Download Progress</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 50%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Server Load</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 20%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<button class="btn btn-block btn-default">refresh</button>
									</div>
								</li>
							</ul>
						</div>
						<!-- end btn-group-->
					</div>
					<!-- end div-->
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- END FOOTER -->

		<!-- #SHORTCUT AREA : With large tiles (activated via clicking user name tag)
			 Note: These tiles are completely responsive, you can add as many as you like -->
		<div id="shortcut" style="display: none;">
			<ul>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="http://192.241.236.31/themes/preview/smartadmin/1.4.1/ajaxversion/#ajax/profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->


		<!-- #PLUGINS -->
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script type="text/javascript" async="" src="<?php echo $view['assets']->getUrl('js/admin/ga.js')?>"></script>
		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery.min.js')?>"></script>
		

		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery-ui.min.js')?>"></script>
		

		<!-- IMPORTANT: APP CONFIG -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/app.config.js')?>"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery.ui.touch-punch.min.js')?>"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/bootstrap.min.js')?>"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/SmartNotification.min.js')?>"></script>

		<!-- JARVIS WIDGETS -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/jarvis.widget.min.js')?>"></script>

		<!-- EASY PIE CHARTS -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery.easy-pie-chart.min.js')?>"></script>

		<!-- SPARKLINES -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery.sparkline.min.js')?>"></script>

		<!-- JQUERY VALIDATE -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery.validate.min.js')?>"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery.maskedinput.min.js')?>"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/select2.min.js')?>"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/bootstrap-slider.min.js')?>"></script>

		<!-- browser msie issue fix -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/jquery.mb.browser.min.js')?>"></script>

		<!-- FastClick: For mobile devices: you can disable this in app.js -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/fastclick.min.js')?>"></script>

		<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		<![endif]-->

		<!-- Demo purpose only -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/demo.min.js')?>"></script>

		<!-- MAIN APP JS FILE -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/app.min.js')?>"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="<?php echo $view['assets']->getUrl('js/admin/voicecommand.min.js')?>"></script><div class="modal fade" id="voiceModal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"></div></div></div>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-43548732-3']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

	

<div id="divSmallBoxes"></div><div id="divMiniIcons"></div><div id="divbigBoxes"></div>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('js/admin/jquery.flot.cust.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('js/admin/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('js/admin/jquery.fullcalendar.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('js/admin/jquery.flot.resize.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('js/admin/jquery-jvectormap-world-mill-en.js')?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('js/admin/jquery.flot.tooltip.min.js')?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('js/admin/bootstrap-progressbar.min.js')?>"></script>
<div id="flotTip" style="display: none; position: absolute;"></div><div class="jvectormap-label"></div></body></html>