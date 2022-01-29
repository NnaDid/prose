<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Patient Dashboard</title>
    
    <!-- Meta mc-calendar.min.js-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="PROSE">
    <meta name="author" content="Prose Care">    
	<link rel="shortcut icon" href="../../patients/assets/img/logo.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
	<!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css"> 
    <link id="theme-style" rel="stylesheet" href="../assets/css/custom.css">

	<link href="../assets/css/theme-software-library.min.css"    rel="stylesheet" type="text/css" media="all" />
	<!-- <link href="../assets/css/dncalendar-skin.css"    rel="stylesheet" type="text/css" media="all" /> -->
	
	<!-- Page Specific JS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- <script src="../assets/js/dncalendar.min.js"></script>  -->
	<style>
	.active, .today{
			background: #8D2D91 !important;
			color:#fff !important;
			font-weight: 600 !important;
		}
	.app{
			background: #eacfed83 !important;
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

      form input::placeholder{
		font-family: Inter;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 24px;
		display: flex;
		align-items: center;
		color: #948495;
		flex: none;
		order: 0;
		flex-grow: 0;
		margin: 0px 17px;
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
		  width:100%;
          padding: 5px;
          font-size: 16px;
          line-height: 1;
          border: 0;
          border-radius: 5px;
          height: 34px;
          background: url('../assets/img/Forward.png') no-repeat right #ddd;
          -webkit-appearance: none;
          background-position-x: 95%;
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
		.h1{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 40px;
			line-height: 54px; 
			display: flex;
			align-items: center; 
			color: #4A3A4B;
		}
		.left_heading-text{
			font-family: Inter;
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 24px; 
			display: flex;
			align-items: center; 
			color: #7A667B;
		}
		.text_input_label{
			font-family: Inter;
			font-style: normal;
			font-weight: normal;
			font-size: 14px;
			line-height: 24px; 
			display: flex;
			align-items: center; 
			color: #948495;  
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 0px 10px;
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
							<!-- <img src="../../assets/img/logo.png" width ="100%" alt="prose" style="transform: scale(0.7);"/>  -->
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col--> 
 
					<!--//app-search-box-->
		            <div class="app-utilities col-auto"> 
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
							<img src="assets/images/user.png" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="account.html">Profile</a></li>
								<li><a class="dropdown-item" href="settings.html">Settings</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="login.html">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
						<!--//app-utility-item-->
			            <div class="app-utility-item mr-4">
				            <a href="settings.html" title="Settings">Logout </a>
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
					        <a class="nav-link d-flex justify-content-start align-items-center" href="index.php">
						        <span class="">
								   <img class="logo-icon" src="../assets/img/home.svg" alt="logo"  style="width: 100%; height: 100%;"/> 
								</span>
		                         <span class="nav-link-text w-60 mx-2">Home</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active d-flex justify-content-start align-items-center"href="side-effect.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/side-effects.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Side Effects</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center" href="treatment.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/treatment.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Treatment</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					   
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center"href="resources.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/resources.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Resources</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center"href="profile.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/profile.svg" alt="profile"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Profile</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->	
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link d-flex justify-content-start align-items-center"href="settings.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/settings.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Settings</span>
					        </a><!--//nav-link-->
						</li><!--//nav-item-->	 

				    </ul><!--//app-menu-->
			    </nav><!--//app-nav--> 
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-1 p-md-1 p-lg-2">
		    <div class="container-xl"> 
  				<!--  Over lapping cards row-->
			    <div class="row g-4 mb-4">
				    <div class="col-12 col-lg-6" style="height:100vh;">
					    <div class="app-card app-card-basic mx-4 my-4"  style="background: #e5d2e80c !important;">
							<h1 class="h1">Side Effects</h1>
							<p class="left_heading-text">Report your side effects here. Click on a day to begin</p>
						    <div class="app-card-body">  
							    <div id="dncalendar-container" class=" app-card app-card-basic shadow-sm px-4 py-4" style="width:60% !important"></div>
						    </div><!--//app-card-body--> 
						</div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-6">
					    <div class="app-card app-card-basic d-flex justify-content-center flex-column align-items-center shadow-sm" style="min-height:70vh; overflow-y: scroll;">
						    <div class="app-card-body px-4 py-2 log_begin_cotainer"> 
							    <div class="intro mb-4 text-center"> 
									<div class="app-icon-holder my-2 mx-2">
										<img src="../assets/img/begin.svg" alt="info"/>
									</div><!--//icon-holder-->
									<br/>
									<a href="#start">Click on a day to begin</a>
								</div>
						    </div><!--//app-card-body--> 

							<div class="col-12 col-md-6 col-lg-8 log_symptom_container" style="display:none;margin-bottom:100px;">
								<form class="py-4 my-4">   
									<h5 class="auth-heading text-center mb-4 left_heading-text">Log Symptom</h5>					
									<label style="font-size:20px;">No symptoms have been logged today. Log them below</label>      
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Feeling Week or Tired</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (normal activity with effort)">Mild (normal activity with effort)</option>
											<option value="Moderate (in bed less than half of the day)">Moderate (in bed less than half of the day)</option>
											<option value="Severe (in bed more than half of the day) ">Severe (in bed more than half of the day) </option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Skin Irritation  (in areas where radiation therapy is given)</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (faint redness/darkening and scaling)">Mild (faint redness/darkening and scaling)</option>
											<option value="Moderate (redness/darkening or moist peeling especially at skin folds)">Moderate (redness/darkening or moist peeling especially at skin folds) </option>
											<option value="Severe (swelling and moist peeling in large area or ulcer in skin)">Severe (swelling and moist peeling in large area or ulcer in skin) </option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Itching or rash</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (rash, no fever)">Mild (rash, no fever)</option>
											<option value="Moderate (rash, fever &lt; 38 Celsius)">Moderate (rash, fever &lt;38 Celsius)</option>
											<option value="Severe (rash, fever &lt; 38 Celsius)">Severe (rash, fever >38 Celsius)</option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Fever/Chills</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="None (≤37 Celsius)">None (≤37 Celsius)</option>
											<option value="Mild (>37 – 38 Celsius)">Mild (>37 – 38 Celsius)</option>
											<option value="Moderate (>38 – 40 Celsius) ">Moderate (>38 – 40 Celsius) </option>
											<option value="Severe (> 40 Celsius)">Severe (> 40 Celsius) </option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Nausea</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lgtired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (can eat)">Mild (can eat)</option>
											<option value="Moderate (eating/drinking less than normal)">Moderate (eating/drinking less than normal)</option>
											<option value="Severe (cannot eat or drink)">Severe (cannot eat or drink)</option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Vomiting</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (vomited once during the day)">Mild (vomited once during the day)</option>
											<option value="Moderate (vomited 2-5 times during the day)">Moderate (vomited 2-5 times during the day)</option>
											<option value="Severe (vomited more than 5 times during the day)">Severe (vomited more than 5 times during the day)</option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Mouth sores</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (soreness, with no ulcer)">Mild (soreness, with no ulcer)</option>
											<option value="Moderate (soreness or painful ulcer, able to eat) ">Moderate (soreness or painful ulcer, able to eat) </option>
											<option value="Severe (painful ulcer and cannot eat or toothache) ">Severe (painful ulcer and cannot eat or toothache) </option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Dry mouth</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="Decreased saliva">Decreased saliva</option>
											<option value="Thick saliva">Thick saliva</option>
											<option value="No saliva">No saliva</option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Loss of appetite</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (slightly decreased appetite)">Mild (slightly decreased appetite)</option>
											<option value="Moderate (usually not hungry)">Moderate (usually not hungry)</option>
											<option value="Severe (unable to eat)">Severe (unable to eat)</option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Diarrhea </label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (loose stools)">Mild (loose stools)</option>
											<option value="Moderate (watery stools)">Moderate (watery stools)</option>
											<option value="Severe (constant or bloody stools causing dizziness)">Severe (constant or bloody stools causing dizziness)</option>
										</select>
									</div>    												
									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Constipation</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild  (no bowel movement for 2 days)">Mild  (no bowel movement for 2 days)</option>
											<option value="Moderate (no bowel movement for 3-4 days)">Moderate (no bowel movement for 3-4 days)</option>
											<option value="Severe  (no bowel movement for more than 4 days or swollen abdomen)">Severe  (no bowel movement for more than 4 days or swollen abdomen)</option>
										</select>
									</div> 

									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Pain on Swallowing</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild (pain but can eat)">Mild (pain but can eat)</option>
											<option value="Moderate (pain requiring soft or liquid diet)">Moderate (pain requiring soft or liquid diet)</option>
											<option value="Severe (unable to eat at all)">Severe (unable to eat at all)</option>
										</select>
									</div>    

									<div class="form-group mb-3">
										<label class="text_input_label" for="tired">Change in taste</label>
										<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
											<option value="none">None</option>
											<option value="Mild">Mild</option>
											<option value="Moderate">Moderate</option>
											<option value="Severe">Severe</option>
										</select>
									</div>    												
									<div class="text-center">
										<button type="submit" class="btn btn-primary mx-auto d-flex justify-content-between align-items-center">
											    <span>Log Symptom </span> 
											    <img src="../assets/img/arrow_.svg"/> 
										</button>
									</div>
								</form><!--//auth-form-->   
							</div><!--//auth-main-col-->
						</div><!--//app-card-->

				    </div><!--//col--> 

			    </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.1/moment.min.js"></script> -->
	<script src="assets/js/bootstrap-datepicker.min.js"></script> 


	<script>
		$('#dncalendar-container').datepicker({
			keyboardNavigation: false,
			forceParse: false,    
		})
		.on("changeDate", function(e) {
			console.log(e.date);
			// log_begin_cotainer  log_symptom_container
			$(".log_begin_cotainer").slideUp(2000).hide();
			$(".log_symptom_container").slideUp(2000).show(2000).css("zoom",0.88);

         });
	</script>

		</script>
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

