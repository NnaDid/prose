<?php  require_once("../../top.php"); ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Patient Dashboard</title>
    
    <!-- Meta mc-calendar.min.js-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="PROSE">
    <meta name="author" content="PROSEcare">    
	<link rel="shortcut icon" href="../../patients/assets/img/logo.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Lato&display=swap" rel="stylesheet">

    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css"> 
    <link id="theme-style" rel="stylesheet" href="../assets/css/custom.css">

	<link href="../assets/css/theme-software-library.min.css"    rel="stylesheet" type="text/css" media="all" />
	
	<!-- Page Specific JS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

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
		            <div class="app-utilities col-auto d-flex justify-content-center align-items-center"href=> 
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" href="#" role="button">
								<!-- <img src="assets/images/user.png" alt="user profile"> -->
								<i class="fa fa-user fa-2x"></i>
							</a> 
							
			            </div><!--//app-user-dropdown--> 
						<!--//app-utility-item-->
			            <div class="app-utility-item mr-4">
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
					        <a class="nav-link d-flex justify-content-start align-items-center"href="./profile">
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
									<div class="my-2 mx-2">
										<img src="../assets/img/begin.svg" alt="info"/>
									</div><!--//icon-holder-->
									<br/>              
									<a href="#start">Click on a day to begin</a>
								</div>
						    </div><!--//app-card-body--> 

							<div class="col-12 col-md-6 col-lg-8 log_symptom_container" style="display:none;margin-bottom:100px;">
								       <!-- Breast cancer -->
									   <?php if($cancer_type=='Breast cancer'){?>
										<form class="py-4 my-4 breast_cancer">   
												<h5 class="auth-heading text-center mb-4 left_heading-text">Log Side Effects</h5>					
												<label style="font-size:20px;">No side effects have been logged today. Log them below</label>      
												<div class="form-group mb-3">
													<label class="text_input_label" for="hair_loss">Hair loss in armpit</label>
													<select id="hair_loss" name="hair_loss" type="text" class="form-control form-control-lg hair_loss" required="required">
														<option value="No hair loss">No hair loss</option>
														<option value="Yes, patchy hair loss">Yes, patchy hair loss</option>
														<option value="Yes, complete hair loss">Yes, complete hair loss</option> 
													</select> 
												</div>    
														 
												
												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Arm swelling and changes</label>
													<select id="arm_swelling" name="arm_swelling" type="text" class="form-control form-control-lg arm_swelling" required="required">
														<option value="No arm swelling">No arm swelling</option>
														<option value="Mild (faint redness/darkening and scaling)">Slight swelling or a slight change in skin color of the arm</option>
														<option value="Obvious swelling or obvious change in skin color of the arm.">Obvious swelling or obvious change in skin color of the arm. </option>
														<option value="Swollen arm changes are limiting cooking, self-care, feeding, and bathing.">Swollen arm changes are limiting cooking, self-care, feeding, and bathing.</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="swallowing_difficulty">Difficulty in swallowing</label>
													<select id="swallowing_difficulty" name="swallowing_difficulty" type="text" class="form-control form-control-lg swallowing_difficulty" required="required">
														<option value="I have no difficulty in swallowing">I have no difficulty in swallowing</option>
														<option value="Difficulty eating solid or soft foods">Difficulty eating solid or soft foods</option>
														<option value="Difficulty swallowing liquid">Difficulty swallowing liquid</option>
														<option value="Unable to swallow liquid, solid and soft food">Unable to swallow liquid, solid and soft food</option>
													</select>
												</div>    
											 												
												<div class="form-group mb-3">
													<label class="text_input_label" for="chest_wall_pain">In the area where you are receiving radiotherapy, do you experience pain in the chest wall?</label>
													<select id="chest_wall_pain" name="chest_wall_pain" type="text" class="form-control form-control-lg chest_wall_pain" required="required">
														<option value="I have no pain on my chest">I have no pain on my chest</option>
														<option value="I have a little pain">I have a little pain</option>
														<option value="I have pain and it sometimes limit my daily activities"> I have pain and it sometimes limit my daily activities</option>
														<option value="The pain is severe and limits my self care">The pain is severe and limits my self care</option>
													</select>
												</div>    	
												 
												<div class="form-group mb-3">
													<label class="text_input_label" for="breats_swelling">Breast swelling (To be answered if you haven’t done a mastectomy)</label>
													<select id="breats_swelling" name="breats_swelling" type="text" class="form-control form-control-lg breats_swelling" required="required">
														<option value="No"> No</option>
														<option value="Yes">Yes</option> 
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
															<span>Log Side Effects </span> 
															<img src="../assets/img/arrow_.svg"/> 
													</button>
												</div>
											</form><!--//auth-form-->   
											<?php  }?>

											<!-- Breast cancer, Head and Neck Cancer,Male Pelvic Cancer,Female Pelvic Cancer -->										
											<!-- Head and Neck Cancer -->
											<?php if($cancer_type=='Head and Neck Cancer'){?>
											<form class="py-4 my-4 Head_and_Neck_Cancer">   
												<h5 class="auth-heading text-center mb-4 left_heading-text">Log Side Effects</h5>					
												<label style="font-size:20px;">No side effects have been logged today. Log them below</label>      
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
															<span>Log Side Effects </span> 
															<img src="../assets/img/arrow_.svg"/> 
													</button>
												</div>
											</form><!--//auth-form-->   
											<?php  }?>




							
							                 <!-- Male Pelvic Cancer -->
											 <?php if($cancer_type=='Male Pelvic Cancer'){?>
											<form class="py-4 my-4 Male_Pelvic_Cancer">   
												<h5 class="auth-heading text-center mb-4 left_heading-text">Log Side Effects</h5>					
												<label style="font-size:20px;">No side effects have been logged today. Log them below</label>      
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
															<span>Log Side Effects </span> 
															<img src="../assets/img/arrow_.svg"/> 
													</button>
												</div>
											</form><!--//auth-form-->   
											<?php  }?>


											<!-- Female Pelvic Cancer -->
											<?php if($cancer_type=='Female Pelvic Cancer'){?>
											<form class="py-4 my-4 Female_Pelvic_Cancer">   
												<h5 class="auth-heading text-center mb-4 left_heading-text">Log Side Effects</h5>					
												<label style="font-size:20px;">No side effects have been logged today. Log them below</label>      
												<div class="form-group mb-3">
													<label class="text_input_label" for="watery_stool">Loose or watery stools</label>
													<select id="watery_stool" name="watery_stool" type="text" class="form-control form-control-lg watery_stool" required="required">
														<option value="I have no episode of watery stool">I have no episode of watery stool</option>
														<option value="I have less than 4 episodes of watery stool in 24 hoursMild (normal activity with effort)">I have less than 4 episodes of watery stool in 24 hours</option>
														<option value="I have between 4-6 episodes of watery stool in 24 hours ">I have between 4-6 episodes of watery stool in 24 hours </option>
														<option value="I have greater than 6 episodes of watery stool in 24 hours">I have greater than 6 episodes of watery stool in 24 hours</option>
													</select> 
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="nausea">Nausea</label>
													<select id="nausea" name="nausea" type="text" class="form-control form-control-lg nausea"  required="required">
														<option value="NO">NO</option>   
														<option value="YES">YES</option> 
													</select>
												</div> 	
												
												<div class="form-group mb-3">
													<label class="text_input_label" for="vomiting">Vomiting</label>
													<select id="vomiting" name="vomiting" type="text" class="form-control form-control-lg vomiting" required="required">
														<option value="I have no episode of vomiting"> I have no episode of vomiting</option>
														<option value="I have 1 episode of vomiting in 24 hours"> I have 1 episode of vomiting in 24 hours</option>
														<option value="I have between 2-5 episodes of vomiting in 24 hours">I have between 2-5 episodes of vomiting in 24 hours</option>
														<option value="I have 6 or more episodes of vomiting. Could require hospitalization">I have 6 or more episodes of vomiting. Could require hospitalization</option>
													</select>
												</div> 
												

												<div class="form-group mb-3">
													<label class="text_input_label" for="skin_color">Skin colour changes</label>
													<select id="skin_color" name="skin_color" type="text" class="form-control form-control-lg skin_color"  required="required">
														<option value="No skin changes">No skin changes</option>
														<option value="I have skin colour changes or dry peeling on the skin">Mild (faint redness/darkening and scaling)</option>
														<option value="I have skin colour changes or a little area of my skin that is wet and peeling in skin folds eg armpit">Moderate (redness/darkening or moist peeling especially at skin folds) </option>
														<option value="I have a lot of skin colour changes and or peeling of my skin; bleeding from my breast or chest skin or an ulcer on my skin ">I have a lot of skin colour changes and or peeling of my skin; bleeding from my breast or chest skin or an ulcer on my skin </option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Changes in the anus</label>
													<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" required="required">
														<option value="I have no pain in my anus">I have no pain in my anus</option>
														<option value="I have pain in my anus or occasional urgency to stool but little or no stool comes out">I have pain in my anus or occasional urgency to stool but little or no stool comes out</option>
														<option value="I have persistent pain in the anus with ulceration or  persistent bleeding, tightness of the anus">I have persistent pain in the anus with ulceration or  persistent bleeding, tightness of the anus</option>
														<option value="I have uncontrollable stooling and pain; heavy bleeding, complete obstruction of the anus">I have uncontrollable stooling and pain; heavy bleeding, complete obstruction of the anus</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Blood in the urine  </label>
													<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" required="required">
														<option value=" I have no blood in my urine"> I have no blood in my urine</option>
														<option value=" I can see blood in my urine"> I can see blood in my urine</option>
														<option value="I can see blood and small clot in my urine">I can see blood and small clot in my urine </option>
														<option value="I can see blood and clots large enough to block the flow of urine and require removal">I can see blood and clots large enough to block the flow of urine and require removal </option>
													</select>
												</div>    												
    												
   												
												<div class="form-group mb-3">
													<label class="text_input_label" for="difficulty_urinating">Difficulty in urinating</label>
													<select id="difficulty_urinating" name="difficulty_urinating" type="text" class="form-control form-control-lg difficulty_urinating" required="required">
														<option value="I have no difficulty in urinating">I have no difficulty in urinating</option>
														<option value="I have occasional difficulty in urinating">I have occasional difficulty in urinating</option>
														<option value="I have intermittent difficulty in urinating">Moderate (soreness or painful ulcer, able to eat) </option>
														<option value="I have complete difficulty in urinating">I have complete difficulty in urinating</option>
													</select>
												</div>

												<div class="form-group mb-3">
													<label class="text_input_label" for="painful_urination">Painful urination</label>
													<select id="painful_urination" name="painful_urination" type="text" class="form-control form-control-lg painful_urination" required="required">
														<option value="I experience no painful urination">I experience no painful urination</option>
														<option value="I experience occasional &  minimal painful urination">I experience occasional &  minimal painful urination</option>
														<option value="I experience intermittent & tolerable  painful urination">I experience intermittent & tolerable  painful urination</option>
														<option value="I experience persistent, intense, refractory & excruciating painful urination">I experience persistent, intense, refractory & excruciating painful urination</option>
													</select>
												</div>

												<div class="form-group mb-3">
													<label class="text_input_label" for="feel_like_urinating">Feel like urinating?</label>
													<select id="feel_like_urinating" name="feel_like_urinating" type="text" class="form-control form-control-lg feel_like_urinating" required="required">
														<option value="None">None</option>
														<option value="I have occasional urge  to urinate">I have occasional urge  to urinate</option>
														<option value=" I have a persistent urge to urinate which sometimes affects daily activities"> I have a persistent urge to urinate which sometimes affects daily activities</option>
														<option value="I have an uncontrollable urge to urinate that always affect daily activities and requires urinary catheter">I have an uncontrollable urge to urinate that always affect daily activities and requires urinary catheter</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="urine_flow_control">Control of urine flow</label>
													<select id="urine_flow_control" name="urine_flow_control" type="text" class="form-control form-control-lg urine_flow_control" required="required">
														<option value="I can control the flow of urine">I can control the flow of urine</option>
														<option value="I experience uncontrollable flow of urine more than once in a week">I experience uncontrollable flow of urine more than once in a week</option>
														<option value="I  experience uncontrollable flow of urine more than once a day">I  experience uncontrollable flow of urine more than once a day</option>
														<option value="I  experience uncontrollable flow of urine more than once a day">I  experience uncontrollable flow of urine more than once a day</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="urination_rate">Rate of urination </label>
													<select id="urination_rate" name="urination_rate" type="text" class="form-control form-control-lg urination_rate" required="required">
														<option value="I urinate normally">I urinate normally</option>
														<option value="I urinate every 3 - 4 hours"> I urinate every 3 - 4 hours</option>
														<option value="I urinate every 2 - 3 hours">I urinate every 2 - 3 hours</option>
														<option value="I urinate every 1 hour or more frequently"> I urinate every 1 hour or more frequently.</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="vaginal_dryness">Vaginal dryness</label>
													<select id="vaginal_dryness" name="vaginal_dryness" type="text" class="form-control form-control-lg vaginal_dryness" required="required">
														<option value="I have no vaginal dryness">I have no vaginal dryness</option>
														<option value="I have vaginal dryness that has no interference with usual sexual, social, & functional activities">I have vaginal dryness that has no interference with usual sexual, social, & functional activities</option>
														<option value="I have vaginal dryness that has minimal interference with usual sexual, social, & functional activities">I have vaginal dryness that has minimal interference with usual sexual, social, & functional activities</option>
														<option value="I have vaginal dryness that has significant interference with usual sexual, social, & functional activities">I have vaginal dryness that has significant interference with usual sexual, social, & functional activities</option>
													</select>
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="stool_leakage">Leakage of stool</label>
													<select id="stool_leakage" name="stool_leakage" type="text" class="form-control form-control-lg stool_leakage" required="required">
														<option value="I can control when to stool">I can control when to stool</option>
														<option value="I experience occasional leakage of stool">I experience occasional leakage of stool</option>
														<option value="I experience persistent leakage of stool">I experience persistent leakage of stool</option>
														<option value="I experience complete loss of control of over leakage of stool">I experience complete loss of control of over leakage of stool</option>
													</select>
												</div>    

												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Tired/weak</label>
													<select id="tired" name="tired" type="text" class="form-control form-control-lg tired" required="required">
														<option value="none">None</option>
														<option value="Mild">Mild</option>
														<option value="Moderate">Moderate</option>
														<option value="Severe">Severe</option>
													</select>
												</div>    												
												<div class="text-center">
													<button type="submit" class="btn btn-primary btn-lg mx-auto d-flex justify-content-between align-items-center">
															<span>Log Side Effects </span> 
															<img src="../assets/img/arrow_.svg"/> 
													</button>
												</div>
											</form><!--//auth-form-->  
											<?php  }?>

							
							
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
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>  
	<script src="assets/js/bootstrap-datepicker.min.js"></script> 


	<script>
		$('#dncalendar-container').datepicker({
			keyboardNavigation: false,
			forceParse: false,    
		})
		.on("changeDate", function(e) {
			console.log(e.date);
			// log_begin_cotainer  log_symptom_container
			$(".log_begin_cotainer").hide();
			$(".log_symptom_container").show().css("zoom",0.88);

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

