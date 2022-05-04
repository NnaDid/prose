<?php require_once("../../top.php");?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | User Dashboard</title>
    
    <!-- Meta mc-calendar.min.js-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="PROSE">
    <meta name="author" content="PROSEcare Dashboard">    
    <link rel="shortcut icon" href="../../patients/assets/img/logo.png"> 
 
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<link href="../assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
	<style>
		.app{ 
			background: #f5d5f848 !important;
		}
		.nav-link.active,.topBase,.topBase h3{
			background: #8D2D91 !important;
			color:#fff !important;
			font-weight: 600 !important;
		}
		.topBase{
			background: #8D2D91 !important;
			height: 250px !important;
			border-radius: 12px 12px 0 0;
		}
		.overlapping_cards .app-card{
			border-radius: 12px 12px 12px 12px;
		} 
	  body{
          font-family: Inter !important;
		  zoom:0.98;
      }
      .begin_text{
        font-family: Inter;
        font-style: normal;
        font-weight: 800;
        font-size: 36px;
        line-height: 43px;
        text-align: center;
        letter-spacing: 1px;
        color: #8D2D92;
      }
      .text-start{
        font-family: Inter !important;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        text-align: center;
        letter-spacing: 0.75px;
        color: #4E4B66;
      }
      .text_desc{
		font-family: Inter;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 24px;
		/* or 150% */ 
		color: #7A667B; 
		flex: none;
		order: 1;
		flex-grow: 0;
		margin: 4px 0px;
      }
	  .nav-link-text{
		font-family: Inter;
		font-family: Inter;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		line-height: 24px; 
		/* color: #8A92A6;  */
		flex: none;
		order: 1;
		flex-grow: 0;
		margin: 0px 12px;
	  }

      form#msform input::placeholder{
        font-family: Inter;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 28px; 
        display: flex;
        align-items: center;
        letter-spacing: 0.75px; 
        color: #A0A3BD; 
        /* Inside auto layout */ 
        flex: none;
        order: 1;
        flex-grow: 0;
        margin: 0px 0px;
      }  
      #progressbar a.active{
        font-weight:800;
        color:#fff !important;
      }
      #progressbar a.isDisabled{
        font-weight:800;
        color:#fff !important;
        opacity:0.5;
      }
      select::-ms-expand { display: none; }
        select{ 
          padding: 5px;
          font-size: 16px;
          line-height: 1;
          border: 0;
          border-radius: 5px;
          height: 34px;
          background: url('../assets/img/Forward.png') no-repeat right #ddd;
          -webkit-appearance: none;
          background-position-x: 333px;
        }
		.activities{
			font-family: Inter;
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 24px; 
			text-align: center; 
			color: #7A667B; 
			flex: none;
			order: 1;
			flex-grow: 0;
			margin: 4px 0px;
		}

		h6{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 16px;
			line-height: 22px;
			/* identical to box height, or 137% */
			/* display: flex; */
			/* align-items: center; */
			/* text-align: center; */
			color: #005267;
			/* Inside auto layout */
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 4px 0px;
		}

	</style>
</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">                                         
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
			        
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
							<!-- <img src="../../patients/assets/img/logo.svg" width ="10%" alt="prose" style="transform: scale(0.9);"/>  -->
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col--> 
 
					<!--//app-search-box-->
		            <div class="app-utilities col-auto">  
						<!--//app-utility-item-->
			            <div class="app-utility-item ">
				            <a href="?u=logout" title="logout">Logout </a>
					    </div><!--//app-utility-item-->

		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->

        <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding mb-4 text-center">
		            <a class="app-logo py-4" href="index.php">
						<img class="logo-icon me-2" src="../../patients/assets/img/logo.svg" alt="logo"  style="width: 100%; height: 100%;"/></a>
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active d-flex justify-content-start align-items-center" href="index.php">
						        <span class="w-40">
								   <img class="logo-icon" src="../assets/img/home.svg" alt="logo"  style="width: 100%; height: 100%;"/> 
								</span>
		                         <span class="nav-link-text w-60 mx-3">Home</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center"href="side-effect.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/side-effects.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Side Effects</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center" href="treatment.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/treatment.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Treatment</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					   
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center"href="resources.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/resources.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Resources</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center"href="./profile/">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/profile.svg" alt="profile"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Profile</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->	
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link d-flex justify-content-start align-items-center"href="settings.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/settings.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Settings</span>
					        </a><!--//nav-link-->
						</li><!--//nav-item-->	 

				    </ul><!--//app-menu-->
			    </nav><!--//app-nav--> 
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <div class="app-card alert alert-dismissible shadow-sm mb-4 topBase" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
							<div class="d-flex justify-content-between align-items-center gx-5 gy-3">
								<div class="">
									<h3 class="mb-3">Hi, <?=$fname; ?>!</h3>
							        <div>What would you like to do today?</div>
							    </div><!--//col-->
							    <div class="">
									<div class="imagHolder d-flex justify-content-center align-items-center" style="background: #F9D7EF; width:83px; height:83px; border-radius: 50%;">
										 <img src="../assets/img/hand.png" />
									</div>
								   
							    </div><!--//col-->
						    </div><!--//row--> 
					    </div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->

  				<!--  Over lapping cards row-->
			    <div class="row g-4 mx-3 overlapping_cards" style="position: relative; top:-100px;">
				    <div class="col-12 col-lg-4">
						    <a href="./side-effect.php">
								<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
									<div class="app-card-header p-3 border-bottom-0">
										<div class="row align-items-center gx-3">
											<div class="col-auto">
												<div class="app-icon-holder" style="background:#F9D7EF">
													<img src="../assets/img/effects.png"/>
												</div><!--//icon-holder-->
												
											</div><!--//col--> 
										</div><!--//row-->
									</div><!--//app-card-header-->
								
								 <div class="app-card-body px-4 py-2">  
									<div class="intro mb-4 report_log_treatment">
										<a href="./side-effect.php"><h6 class="" style="color:#57166A !important;">Report a Side Effect</h6></a>
										<span class="text_desc">Click here to report a side effect you are experiencing.</span>									
									</div>
								</div>
							</a>
							<!--//app-card-body--> 
						</div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4">
					<a href="./treatment.php">
					    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder" style="background:#91F3DA">
										    <img src="../assets/img/report.png"/>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col--> 
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						 <a href="./treatment.php">
						    <div class="app-card-body px-4 py-2"> 
							    <div class="intro mb-4 log_treatment">
								    <a href="./treatment.php"><h6 style="color:#005267 !important;">Log your treatment </h6>
										<span class="text_desc">Click here to log your treatment record.</span>
									</a>
								</div>
						    </div>
						  </a><!--//app-card-body--> 
						</div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4">
					<a href="./profile/">
					    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder" style="background:#FEE5D9">
											<img src="../assets/img/update.png"/>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col--> 
						        </div><!--//row-->
						    </div><!--//app-card-header-->
							
								<div class="app-card-body px-4 py-2"> 
									<div class="intro mb-4 xteristics">
									  <a href="./profile/"><h6 style="color: #B62141 !important;">Update disease characteristics</h6>
											<span class="text_desc">Click here to update your disease characteristics.</span>
										</a>
									</div>
								</div>
	                       </a><!--//app-card-body--> 
						</div><!--//app-card-->
				    </div><!--//col-->

				<!--app-card-->
				<div class="app-card alert alert-dismissible shadow-md mb-4" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
							<div class="text-center gx-5 gy-3">
							    <div class="app-icon-holder" style="background:#DEF0FF;">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
									</svg>
							    </div><!--//col-->
								<div class="">
									<h6 class="mb-3" style="color:#2C70A8;">See recent activities </h6>
							        <div class="activities">When you start to use this <br/>app you will see a summary of your <br/> recent activities here. </div>
							    </div><!--//col-->
						    </div><!--//row--> 
					    </div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->
				

			    </div><!--//row-->


  				<!--  Over lapping cards row-->
			    <div class="row g-4 mb-4 mx-3 overlapping_cards" style="position: relative; top:-100px;">
				    <div class="col-12 col-lg-4">
					<a href="../../Quality of life Questionnaire.pdf" download>
							<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
								<div class="app-card-header p-3 border-bottom-0">
									<div class="row align-items-center gx-3">
										<div class="col-auto">
											<div class="app-icon-holder" style="background: #F3EAFF; color:#53258B !important; font-weight:800;">
												<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
												</svg>
											</div><!--//icon-holder-->
											
										</div><!--//col--> 
									</div><!--//row-->
								</div><!--//app-card-header-->
							<a href="#" download>
								<div class="app-card-body px-4 py-2">  
									<div class="intro mb-4">
									<a href="https://docs.google.com/forms/d/e/1FAIpQLSdmgAEmfmXwA0REaZniMwvk3my3jwRyOXvDfDQ4_bId23bsQw/viewform" target="__blank"><h6 style="color:#1C6804">Quality of Life Survey</h6>
										<span class="text_desc">Fill in your QOL at the start, midpoint and end of your treatment.</span>
										</a>
									</div>
								</div><!--//app-card-body--> 
							</a>
							</div><!--//app-card-->
					    </a>
				    </div><!--//col-->
				    <div class="col-12 col-lg-4">
					<a href="./profile/edit_bio.php">
					    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder" style="background: #EAFBCE;">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
											</svg>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col--> 
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 py-2">  
							    <div class="intro mb-4">
								<a href="./profile/edit_bio.php"><h6 style="color:#1C6804">Update Profile</h6>
										<span class="text_desc">Click here to update your profile information.</span>
									</a>
								</div>
						    </div><!--//app-card-body--> 
						</div>
						</a><!--//app-card-->

				    </div><!--//col-->
				    <div class="col-12 col-lg-4">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						  <a href="./resources.php">
								<div class="app-card-header p-3 border-bottom-0">
									<div class="row align-items-center gx-3">
										<div class="col-auto">
											<div class="app-icon-holder" style="background: #FAD39C;">
												<img src="../assets/img/covid.png" />
											</div><!--//icon-holder-->
											
										</div><!--//col--> 
									</div><!--//row-->
								</div><!--//app-card-header-->
								<div class="app-card-body px-4 py-2"> 
									<div class="intro mb-4">
									  <a href="https://covid19.ncdc.gov.ng/" target="blank" ><h6 style="color:#923106">Stay Informed About Covid</h6> 
										<span class="text_desc">Click here to get information on Covid-19</span>
										</a>
									</div>
								</div><!--//app-card-body--> 
						   </a>
						</div>
						
						<!--//app-card-->
				    </div><!--//col-->
					

			    </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/61e27af1b84f7301d32b21fb/1fpeb0g84';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

</body>
</html> 

