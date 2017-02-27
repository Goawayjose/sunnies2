<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head();?>
	<script type="text/javascript">
	    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
</head>
<body>
	<nav>

		<div class="logo nav-down">
			<div class="container">
				<a href="	<?php echo home_url(); ?>">SUNNIES</a>
				<a href="<?php bloginfo('url');?>/cart">
						<div class="btn-Cart">
						</div>
				</a>
			</div>
		</div>
		<div class="mainNav">
			<div class="container">

				<a href="<?php bloginfo('url');?>/classic">
					<div class="productSvg" id="classic">
						<div class="gradientSvg hide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.07 54.57" class="category_img daGradient" >
								<defs>
										<linearGradient id="logo-gradient" x1="50%" y1="0%" x2="50%" y2="100%" >

												<stop offset="0%" stop-color="#DA5D71">
																</stop>

												<stop offset="100%" stop-color="#FFAE5F">
																</stop>

										</linearGradient>

									</defs>
							<title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path stroke="url('#logo-gradient')" d="M23.73,2s-15,2-20,12-1,18,6,27,10,11,17,12,25-15,28-25S57.73-2,23.73,2Z"/><path stroke="url('#logo-gradient')" d="M102.33,2s15,2,20,12,1,18-6,27-10,11-17,12-25-15-28-25S68.33-2,102.33,2Z"/><line stroke="url('#logo-gradient')" x1="25.23" y1="1.52" x2="98.23" y2="1.52"/></g></g></svg>

						</div>
						<div class="MainSvg show">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.07 54.57" class="category_img" ><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path  d="M23.73,2s-15,2-20,12-1,18,6,27,10,11,17,12,25-15,28-25S57.73-2,23.73,2Z"/><path  d="M102.33,2s15,2,20,12,1,18-6,27-10,11-17,12-25-15-28-25S68.33-2,102.33,2Z"/><line  x1="25.23" y1="1.52" x2="98.23" y2="1.52"/></g></g></svg>

						</div>

					</div>
				</a>
				<a href="<?php bloginfo('url');?>/Browline">
					<div class="productSvg" id="browline">
						<div class="gradientSvg hide">
							<svg xmlns="http://www.w3.org/2000/svg" class="category_img daGradient" viewBox="0 0 147 44.55" style="margin-top:3px;">
								<defs>
									<linearGradient id="logo-gradient" x1="50%" y1="0%" x2="50%" y2="100%" >

											<stop offset="0%" stop-color="#DA5D71">
															</stop>

											<stop offset="100%" stop-color="#FFAE5F">
															</stop>

									</linearGradient>
								<style>.cls-1{fill:#fff;}.cls-1,.cls-2{stroke:#fff;stroke-miterlimit:10;}.cls-2{fill:none;}</style></defs>
							<title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g stroke="url('#logo-gradient')" id="Layer_1-2" data-name="Layer 1"><path  d="M10.5,18.3h-4s-2-8-4-8H.5v-8h7s30-5,47,2,41,0,41,0,23-7,44-2h7v8s-4-2-6,8h-4s0-14-8-14-39-3-43,13h-4s-8-5-16,0h-4s-2-18-43-13C18.5,4.3,12.5,5.3,10.5,18.3Z"/><path  d="M9,27.8c.26,3.15,10,16,15,16s24,1,27-1,13-11,13-13,2-17-3-20-11-7-27-7-23,3-24,10S8,15.8,9,27.8Z"/><path  d="M138.69,27.8c-.26,3.15-10,16-15,16s-24,1-27-1-13-11-13-13-2-17,3-20,11-7,27-7,23,3,24,10S139.69,15.8,138.69,27.8Z"/></g></g></svg>

						</div>
						<div class="MainSvg show">
							<svg xmlns="http://www.w3.org/2000/svg" class="category_img" viewBox="0 0 147 44.55" style="margin-top:3px;"><defs><style>.cls-1{fill:#fff;}.cls-1,.cls-2{stroke:#fff;stroke-miterlimit:10;}.cls-2{fill:none;}</style></defs><title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path  d="M10.5,18.3h-4s-2-8-4-8H.5v-8h7s30-5,47,2,41,0,41,0,23-7,44-2h7v8s-4-2-6,8h-4s0-14-8-14-39-3-43,13h-4s-8-5-16,0h-4s-2-18-43-13C18.5,4.3,12.5,5.3,10.5,18.3Z"/><path  d="M9,27.8c.26,3.15,10,16,15,16s24,1,27-1,13-11,13-13,2-17-3-20-11-7-27-7-23,3-24,10S8,15.8,9,27.8Z"/><path  d="M138.69,27.8c-.26,3.15-10,16-15,16s-24,1-27-1-13-11-13-13-2-17,3-20,11-7,27-7,23,3,24,10S139.69,15.8,138.69,27.8Z"/></g></g></svg>

						</div>

					</div>
				</a>
				<a href="<?php bloginfo('url');?>/oversized">
					<div class="productSvg" id="oversized">
						<div class="gradientSvg hide">
							<svg xmlns="http://www.w3.org/2000/svg" class="category_img daGradient" viewBox="0 0 127.68 54.28"class="category_img" >
								<defs>
										<linearGradient id="logo-gradient" x1="50%" y1="0%" x2="50%" y2="100%" >

												<stop offset="0%" stop-color="#DA5D71">
																</stop>

												<stop offset="100%" stop-color="#FFAE5F">
																</stop>

										</linearGradient>

									</defs>
								<title>Asset 7</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path stroke="url('#logo-gradient')" d="M55.5,16.5s-6-13-28-13-26,11-26,18,1,28,23,31,31-19,31-20S59.5,25.5,55.5,16.5Z"/><path  stroke="url('#logo-gradient')" d="M72.37,14.5s6-13,27.9-13,25.91,11,25.91,18-1,28-22.92,31-30.89-19-30.89-20S68.39,23.5,72.37,14.5Z"/><line  x1="56" y1="18" x2="71" y2="18"/></g></g></svg>

						</div>
						<div class="MainSvg show">
							<svg xmlns="http://www.w3.org/2000/svg" class="category_img" viewBox="0 0 127.68 54.28"class="category_img" ><title>Asset 7</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path  d="M55.5,16.5s-6-13-28-13-26,11-26,18,1,28,23,31,31-19,31-20S59.5,25.5,55.5,16.5Z"/><path  d="M72.37,14.5s6-13,27.9-13,25.91,11,25.91,18-1,28-22.92,31-30.89-19-30.89-20S68.39,23.5,72.37,14.5Z"/><line  x1="56" y1="18" x2="71" y2="18"/></g></g></svg>

						</div>
					</div>
				</a>
				<a href="<?php bloginfo('url');?>/rectangular">
					<div class="productSvg" id="rectangular">
						<div class="gradientSvg hide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 141.6 37.74" class="category_img daGradient" >
								<defs>
										<linearGradient id="logo-gradient" x1="50%" y1="0%" x2="50%" y2="100%" >

												<stop offset="0%" stop-color="#DA5D71">
																</stop>

												<stop offset="100%" stop-color="#FFAE5F">
																</stop>

										</linearGradient>

									</defs>
							<title>Asset 8</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path stroke="url('#logo-gradient')" d="M149.06,39.08"/><path stroke="url('#logo-gradient')" d="M140.06,34.08v-28s1-4-7-4h-52s-4-1-4,4v26s-1,4,5,4h54S140.06,37.08,140.06,34.08Z"/><path stroke="url('#logo-gradient')" d="M64.56,33.58v-28s1-4-7-4h-52s-4-1-4,4v26s-1,4,5,4h54S64.56,36.58,64.56,33.58Z"/><line  x1="77" y1="9.25" x2="64.56" y2="9.25"/></g></g></svg>
						</div>
						<div class="MainSvg show">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 141.6 37.74" class="category_img" ><title>Asset 8</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path  d="M149.06,39.08"/><path  d="M140.06,34.08v-28s1-4-7-4h-52s-4-1-4,4v26s-1,4,5,4h54S140.06,37.08,140.06,34.08Z"/><path  d="M64.56,33.58v-28s1-4-7-4h-52s-4-1-4,4v26s-1,4,5,4h54S64.56,36.58,64.56,33.58Z"/><line  x1="77" y1="9.25" x2="64.56" y2="9.25"/></g></g></svg>
						</div>
					</div>
				</a>
				<a href="<?php bloginfo('url');?>/round">
					<div class="productSvg" id="round">
						<div class="gradientSvg hide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.5 42.5" class="category_img daGradient" style="margin-top:2px;">
								<defs>
										<linearGradient id="logo-gradient" x1="50%" y1="0%" x2="50%" y2="100%" >

												<stop offset="0%" stop-color="#DA5D71">
																</stop>

												<stop offset="100%" stop-color="#FFAE5F">
																</stop>

										</linearGradient>

									</defs>
							<title>Asset 9</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2"  data-name="Layer 1"><ellipse stroke="url('#logo-gradient')" cx="29.75" cy="20.75" rx="28.25" ry="19.25"/> <ellipse stroke="url('#logo-gradient')" cx="101.75" cy="21.75" rx="28.25" ry="19.25"/> <line stroke="url('#logo-gradient')" x1="57.5" y1="17.5" x2="74.5" y2="17.5"/></g></g></svg>
						</div>
						<div class="MainSvg show">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.5 42.5" class="category_img" style="margin-top:2px;"><title>Asset 9</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><ellipse  cx="29.75" cy="20.75" rx="28.25" ry="19.25"/><ellipse cx="101.75" cy="21.75" rx="28.25" ry="19.25"/><line  x1="57.5" y1="17.5" x2="74.5" y2="17.5"/></g></g></svg>
						</div>
					</div>
				</a>
				<a href="<?php bloginfo('url');?>/aviator">
					<div class="productSvg" id="aviator">
						<div class="gradientSvg hide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.07 54.57" class="category_img daGradient" >
								<defs>
										<linearGradient id="logo-gradient" x1="50%" y1="0%" x2="50%" y2="100%" >

												<stop offset="0%" stop-color="#DA5D71">
																</stop>

												<stop offset="100%" stop-color="#FFAE5F">
																</stop>

										</linearGradient>

									</defs>
							<title>Asset 3</title><g  id="Layer_2" data-name="Layer 2"><g  id="Layer_1-2" data-name="Layer 1"><path stroke="url('#logo-gradient')" d="M23.73,2s-15,2-20,12-1,18,6,27,10,11,17,12,25-15,28-25S57.73-2,23.73,2Z"/><path  stroke="url('#logo-gradient')" d="M102.33,2s15,2,20,12,1,18-6,27-10,11-17,12-25-15-28-25S68.33-2,102.33,2Z"/><line stroke="#DA5D71" x1="25.23" y1="1.52" x2="98.23" y2="1.52"/></g></g></svg>
						</div>
						<div class="MainSvg show">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.07 54.57" class="category_img" ><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M23.73,2s-15,2-20,12-1,18,6,27,10,11,17,12,25-15,28-25S57.73-2,23.73,2Z"/><path  d="M102.33,2s15,2,20,12,1,18-6,27-10,11-17,12-25-15-28-25S68.33-2,102.33,2Z"/><line  x1="25.23" y1="1.52" x2="98.23" y2="1.52"/></g></g></svg>
						</div>
					</div>
				</a>
			</div>
		</div>
	</nav>


  <div class="main container">
