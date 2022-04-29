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
	<script>
		 // This function is called on each of the select element to indicate the severity of the side effect by color CODE
		//---------------------------------------------------------------------------------------------------------------//
			function loadSelectedColor(element) { 
				let dta = $(element).val();
				let dtaColor = dta.split("|")[1];
				console.log(dtaColor)
				if (dtaColor){ 
					let targetElement = $(element).closest("div.form-group").find("label.text_input_label");
					if($(targetElement).hasClass("None")){  $(targetElement).removeClass("None"); }
					if($(targetElement).hasClass("Mild")){  $(targetElement).removeClass("Mild"); }
					if($(targetElement).hasClass("Moderate")){  $(targetElement).removeClass("Moderate"); }
					if($(targetElement).hasClass("Severe")){  $(targetElement).removeClass("Severe"); } 
					  
					targetElement.addClass(dtaColor); 
					$("option:selected").css("color",dtaColor);
				}
			} 
		//---------------------------------------------------------------------------------------------------------------//
			// $.each($("select.form-control"), function(i,val){
            //     let elem  = $(val).closest("div.form-group").find("label.text_input_label");
			// 	let col   =  $(val).val().split("|")[1];
			// 	console.log(col);
			// 	if (col){ 
			// 		// let elem = $(element).closest("div.form-group").find("label.text_input_label");
			// 		if($(elem).hasClass("None")){      $(elem).removeClass("None"); }
			// 		if($(elem).hasClass("Mild")){      $(elem).removeClass("Mild"); }
			// 		if($(elem).hasClass("Moderate")){  $(elem).removeClass("Moderate"); }
			// 		if($(elem).hasClass("Severe")){    $(elem).removeClass("Severe"); } 
					  
			// 		elem.addClass(col); 
			// 		//$(val+" option:selected").css("color",col);
			// 	}
			// });
		 
	 
		 
	</script>

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
       
		/* MAKE SELECTION ITEMS rounded */
		select, input.form-control{
			border-radius:20px !important;
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
		.left_heading_text{
			font-family: Inter;
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 24px; 
			display: flex;
			align-items: center; 
			color: #7A667B;
		}

		.left_heading-text{
			font-family: 'Inter';
			font-style: normal;
			font-weight: 700;
			font-size: 20px;
			line-height: 28px;
			/* identical to box height, or 140% */ 
			display: flex;
			align-items: center !important;
			text-align: center !important;

			/* Primary/700 */ 
			color: #71207D; 
			/* Inside auto layout */ 
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 32px 0px;
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
		.None{ color: #FF00FF !important;}
		.Mild{ color: #5bc142 !important;}
		.Moderate{ color: orange !important;}
		.Severe{color: red !important;}
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
			            <!-- <div class="app-utility-item app-user-dropdown dropdown"> -->
				            <!-- <a class="dropdown-toggle" href="#" role="button"> 
								<i class="fa fa-user fa-2x"></i>
							</a>  -->
							
			            <!-- </div> -->
						<!--//app-user-dropdown--> 
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
							<p class="left_heading_text">Report your side effects here. Click on a day to begin</p>
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
													<select id="hair_loss" name="hair_loss" onChange="loadSelectedColor(this)" class="form-control form-control-lg hair_loss" required="required">
														<option selected disabled>choose</option>
														<option value="No hair loss|None">No hair loss</option>
														<option value="Yes, patchy hair loss|Mild">Yes, patchy hair loss</option>
														<option value="Yes, complete hair loss|Severe">Yes, complete hair loss</option> 
													</select> 
												</div>    
														 
												
												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Arm swelling and changes</label>
													<select id="arm_swelling" name="arm_swelling" onChange="loadSelectedColor(this)" class="form-control form-control-lg arm_swelling" required="required">
													    <option selected disabled>choose</option>
														<option value="No arm swelling|None">No arm swelling</option>
														<option value="Mild (faint redness/darkening and scaling)|Mild">Slight swelling or a slight change in skin color of the arm</option>
														<option value="Obvious swelling or obvious change in skin color of the arm|Moderate">Obvious swelling or obvious change in skin color of the arm. </option>
														<option value="Swollen arm changes are limiting cooking, self-care, feeding, and bathing|Severe">Swollen arm changes are limiting cooking, self-care, feeding, and bathing.</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="swallowing_difficulty">Difficulty in swallowing</label>
													<select id="swallowing_difficulty" name="swallowing_difficulty" onChange="loadSelectedColor(this)" class="form-control form-control-lg swallowing_difficulty" required="required">
												        <option selected disabled>choose</option>
													    <option value="I have no difficulty in swallowing|None">I have no difficulty in swallowing</option>
														<option value="Difficulty eating solid or soft foods|Mild">Difficulty eating solid or soft foods</option>
														<option value="Difficulty swallowing liquid|Moderate">Difficulty swallowing liquid</option>
														<option value="Unable to swallow liquid, solid and soft food|Severe">Unable to swallow liquid, solid and soft food</option>
													</select>
												</div>    
											 												
												<div class="form-group mb-3">
													<label class="text_input_label" for="chest_wall_pain">In the area where you are receiving radiotherapy, do you experience pain in the chest wall?</label>
													<select id="chest_wall_pain" name="chest_wall_pain" onChange="loadSelectedColor(this)" class="form-control form-control-lg chest_wall_pain" required="required">
													    <option selected disabled>choose</option>
													    <option value="I have no pain on my chest|None">I have no pain on my chest</option>
														<option value="I have a little pain|Mild">I have a little pain</option>
														<option value="I have pain and it sometimes limit my daily activities|Moderate"> I have pain and it sometimes limit my daily activities</option>
														<option value="The pain is severe and limits my self care|Severe">The pain is severe and limits my self care</option>
													</select>
												</div>    	
												 
												<div class="form-group mb-3">
													<label class="text_input_label" for="breats_swelling">Breast swelling (To be answered if you haven’t done a mastectomy)</label>
													<select id="breats_swelling" name="breats_swelling" onChange="loadSelectedColor(this)" class="form-control form-control-lg breats_swelling" required="required">
													    <option selected disabled>choose</option>
													    <option value="No|NO"> No</option>
														<option value="Yes|YES">Yes</option> 
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="breast_pain">Breast pain (To be answered if you haven’t done a mastectomy)</label>
													<select id="breast_pain" name="breast_pain" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>choose</option>
													    <option value="I have no pain on my chest|None">I have no pain on my chest</option>
														<option value="I have a little pain|Mild">I have a little pain</option>
														<option value="I have pain and it sometimes limit my daily activities|Moderate">Moderate (vomited 2-5 times during the day)</option>
														<option value="The pain is severe and limits my self care|Severe">The pain is severe and limits my self care</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="sensation_loss">Loss of sensation and weakness of the arm</label>
													<select id="sensation_loss" name="sensation_loss" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>choose</option>
													    <option value="none|None">None</option>
														<option value="Loss of sensation of the arm|Mild">Loss of sensation of the arm</option>
														<option value="Discomfort or muscle weakness of the arm|Moderate">Discomfort or muscle weakness of the arm</option>
														<option value="Discomfort or muscle weakness of the arm limiting self-care|Severe">Discomfort or muscle weakness of the arm limiting self-care</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="skin_color">Skin colour changes</label>
													<select id="skin_color" name="skin_color" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>choose</option>
													    <option value="No skin changes|None">No skin changes</option>
														<option value="I have skin colour changes or a little area of my skin that is wet and peeling in skin folds eg armpit|Mild">I have skin colour changes or a little area of my skin that is wet and peeling in skin folds eg armpit</option> 
														<option value="I have skin colour changes or dry peeling on the skin|Moderate">I have skin colour changes or dry peeling on the skin</option>
														<option value="I have skin colour changes or dry peeling on the skin|Severe">I have a lot of skin colour changes and or peeling of my skin; bleeding from my breast or chest skin or an ulcer on my skin</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Tired/weak</label>
													<select id="tired" name="tired" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>choose</option>
													    <option value="I feel better than usual|None">I feel better than usual</option>
														<option value="I do not feel better more than usual|Mild">I do not feel better more than usual</option>
														<option value="I feel worse than usual|Moderate">I feel worse than usual</option>
														<option value="I feel much worse than usual|Severe">I feel much worse than usual</option>
													</select>
												</div>   
												<div class="form-group mb-3">
													<label class="text_input_label" for="weight_this_week">What is your weight this week?</label>
													<input id="weight_this_week" type="text" name="weight_this_week" class="form-control form-control-lg" required="required" />
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="fbc_parameters">Enter your FBC parameters..Hb,PCV,WBC,ANC,Platelet</label>
													<textarea id="fbc_parameters" type="text" name="fbc_parameters" class="form-control form-control-lg" required="required"></textarea>
												</div> 

												<div class="form-group mb-3"> 
													<label class="text_input_label" for="other_info">Is there any side effect or anything you would like to share ?</label>
													<textarea id="other_info" type="text" name="other_info" class="form-control form-control-lg" required="required"></textarea>
												</div>  

												<input type="hidden" name="date" class="selectedDate" id="selectedDate">

												<div class="result"></div>
												
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
												<label style="font-size:20px;" class="text-center detail">No side effects have been logged today. Log them below</label>      
												<div class="form-group mb-3">
													<label class="text_input_label" for="mouth_sore">Mouth sore</label>
													<select id="mouth_sore" name="mouth_sore" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
														<option value="none|None">None</option>
														<option value="Mouth feels sore or there is redness in the mouth|Mild">Mouth feels sore or there is redness in the mouth</option>
														<option value="Painful  mouth ulcers, redness in the mouth but you can swallow|Moderate">Painful  mouth ulcers, redness in the mouth but you can swallow</option>
														<option value="Painful mouth ulcers that is very painful, redness in the mouth but you cannot swallow|Severe">Painful mouth ulcers that is very painful, redness in the mouth but you cannot swallow</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="swallowing_difficulty">Difficulty in swallowing</label>
													<select id="swallowing_difficulty" name="swallowing_difficulty" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
														<option value="I swallow normally|None">I swallow normally</option>
														<option value="Difficulty eating solid or soft foods|Mild">Difficulty eating solid or soft foods</option>
														<option value="Difficulty swallowing liquid|Moderate">Difficulty swallowing liquid</option>
														<option value="Unable to swallow liquid, solid and soft foods|Severe">Unable to swallow liquid, solid and soft foods</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="loss_of_smell">Loss of smell</label>
													<select id="loss_of_smell" name="loss_of_smell" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
														<option value="I smell things normally|None">I smell things normally</option>
														<option value="I cannot smell things|null">I cannot smell things</option> 
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="taste_changes">Taste changes</label>
													<select id="taste_changes" name="taste_changes" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" required="required">
													    <option selected disabled>select option</option>
														<option value="No change in taste|None">No change in taste</option>
														<option value="Food tastes slightly different|Mild">Food tastes slightly different</option>
														<option value="Food tastes markedly  different with change in diet|Moderate">Food tastes markedly  different with change in diet</option>
														<option value="Complete loss of taste even with change  in diet|Severe">Complete loss of taste even with change  in diet</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="dry_mouth">Dry mouth</label>
													<select id="dry_mouth" name="dry_mouth" onChange="loadSelectedColor(this)" class="form-control form-control-lg tired" required="required">
													    <option selected disabled>select option</option>
														<option value="none|None">None</option>
														<option value="Occasional mouth dryness with slightly thick saliva|Mild">Occasional mouth dryness with slightly thick saliva</option>
														<option value="Persistent mouth dryness with  thick, sticky saliva|Moderate">Persistent mouth dryness with  thick, sticky saliva</option>
														<option value="Complete mouth dryness with thick, sticky saliva|Severe">Complete mouth dryness with thick, sticky saliva</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="cracking_at_mouth_corner">Cracking at the corner of the mouth</label>
													<select id="cracking_at_mouth_corner" name="cracking_at_mouth_corner" onChange="loadSelectedColor(this)"  class="form-control form-control-lg tired" required="required">
													    <option selected disabled>select option</option>
														<option value="No|None">No</option>
														<option value="YES|null">YES</option> 
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="voice_changes">Voice change</label>
													<select id="voice_changes" name="voice_changes" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
														<option value="My voice is normal|None">My voice is normal</option>
														<option value="Occasional voice changes and self-resolves|Mild">Occasional voice changes and self-resolves</option>
														<option value="Persistent voice changes and may require occasional repetition|Moderate">Persistent voice changes and may require occasional repetition</option>
														<option value="Complete voice changes, incapable of normal communication|Severe">Complete voice changes,  incapable of normal communication</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="appetite_changes">Appetite changes</label>
													<select id="appetite_changes" name="appetite_changes" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
														<option value="I eat well|None">I eat well</option>
														<option value="Occasional loss of appetite without alteration in eating habits|Mild">Occasional loss of appetite without alteration in eating habits</option>
														<option value="Loss of appetite plus reduced oral intake, no significant weight loss, occasional inclination to vomit|Moderate">Loss of appetite plus reduced oral intake, no significant weight loss,  occasional inclination to vomit</option>
														<option value="Complete loss of appetite, persistent inclination to vomit with significant weight loss|Severe">Complete loss of appetite, persistent inclination to vomit with significant weight loss
														
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="nausea">Nausea</label>
													<select id="nausea" name="nausea" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
														<option value="No|No">No</option> 
														<option value="Yes|Yes">Yes</option> 
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="vomiting">Vomiting </label>
													<select id="vomiting" name="vomiting" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
														<option value="I have no episode of vomiting|None">I have no episode of vomiting</option>
														<option value="1 episode of vomiting in 24 hours|Mild">1 episode of vomiting in 24 hours</option>
														<option value="Two - Five episodes of vomiting in 24 hours|Moderate">2 - 5 episodes of vomiting in 24 hours</option>
														<option value="6 or more episodes of vomiting. Could require hospitalization|Severe">6 or more episodes of vomiting. Could require hospitalization</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="skin_color_changes">Skin colour changes</label>
													<select id="skin_color_changes" name="skin_color_changes" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													  <option selected disabled>select option</option>
													    <option value="No skin changes|None">No skin changes</option>
														<option value="I have skin colour changes or dry peeling on the skin|Mild">Mild  (no bowel movement for 2 days)</option>
														<option value="I have skin colour changes or a little area of my skin that is wet and peeling in skin folds eg armpit|Moderate">I have skin colour changes or a little area of my skin that is wet and peeling in skin folds eg armpit</option>
														<option value="I have a lot of skin colour changes and or peeling of my skin; bleeding from my breast or chest skin or an ulcer on my skin|Severe">I have a lot of skin colour changes and or peeling of my skin; bleeding from my breast or chest skin or an ulcer on my skin</option>
													</select>
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="tired_weak">Tired/weak</label>
													<select id="tired_weak" name="tired_weak" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" placeholder="Full name" required="required">
													    <option selected disabled>select option</option>
													    <option value="I feel better than usual|None">I feel better than usual</option>
														<option value="I do not feel better more than usual|Mild">I do not feel better more than usual</option>
														<option value="I feel worse than usual|Moderate">I feel worse than usual</option>
														<option value="I feel much worse than usual|Severe">I feel much worse than usual</option>
													</select>
												</div>       
												
												<div class="form-group mb-3">
													<label class="text_input_label" for="weight_this_week">What is your weight this week?</label>
													<input id="weight_this_week" type="text" name="weight_this_week" class="form-control form-control-lg" required="required" />
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="fbc_parameters">Enter your FBC parameters..Hb,PCV,WBC,ANC,Platelet</label>
													<textarea id="fbc_parameters" type="text" name="fbc_parameters" class="form-control form-control-lg" required="required"></textarea>
												</div> 

												<div class="form-group mb-3"> 
													<label class="text_input_label" for="other_info">Is there any side effect or anything you would like to share ?</label>
													<textarea id="other_info" type="text" name="other_info" class="form-control form-control-lg" required="required"></textarea>
												</div>  
												<div class="form-group mb-3">
													<label class="text_input_label" for="on_chemotherapy">Are you on chemotherapy?</label>
													<select id="on_chemotherapy" name="on_chemotherapy" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div>
												
												<div class="form-group mb-3 how_often_section">
													<label class="text_input_label" for="how_often">How Often?</label>
													<select id="how_often" name="how_often" class="form-control form-control-lg">
													    <option value="weekly">Weekly</option>
														<option value="3 weekly">3 Weekly</option>
														<option value="Monthly">Monthly</option>
													</select>
												</div>

												<input type="hidden" name="date" class="selectedDate" id="selectedDate">

												<div class="result"></div>											
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
													<label class="text_input_label" for="blood_in_urine">Blood in the urine</label>
													<label class="text_input_label" id="blood_in_urine_two"></label>
													<select id="blood_in_urine" name="blood_in_urine" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg" required="required">
														<option value="I have no blood in my urine|None">I have no blood in my urine</option>
														<option value="I can see blood in my urine|Mild">I can see blood in my urine </option>
														<option value="I can see blood and small clot in my urine|Moderate">I can see blood and small clot in my urine</option>
														<option value="I can see blood and clots large enough to block the flow of urine and require removal|Severe">I can see blood and clots large enough to block the flow of urine and require removal</option>
													</select>
												</div>  
												 
  												
												<div class="form-group mb-3">
													<label class="text_input_label" for="difficulty_in_urinating">Difficulty in urinating</label>
													<select id="difficulty_in_urinating" name="difficulty_in_urinating" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg" required="required">
														<option value="I have no difficulty in urinating|None">I have no difficulty in urinating</option>
														<option value="Mild (faint redness/darkening and scaling)|Mild">I have occasional difficulty in urinating</option>
														<option value="I have intermittent difficulty in urinating|Moderate">I have intermittent difficulty in urinating</option>
														<option value="I have complete difficulty in urinating|Severe">I have complete difficulty in urinating</option>
													</select>
												</div>   
 												
												<div class="form-group mb-3">
													<label class="text_input_label" for="painful_urination">Painful urination</label>
													<select id="painful_urination" name="painful_urination" onChange="loadSelectedColor(this)"class="form-control form-control-lg" required="required">
														<option value="I experience no painful urination|None">I experience no painful urination</option>
														<option value="I experience occasional &  minimal painful urination|Mild">I experience occasional &  minimal painful urination</option>
														<option value="Moderate (rash, fever &lt; 38 Celsius)|Moderate">I experience intermittent & tolerable  painful urination</option>
														<option value="I experience persistent, intense, refractory & excruciating painful urination|Severe">I experience persistent, intense, refractory & excruciating painful urination</option>
													</select>
												</div>  
  												
												<div class="form-group mb-3">
													<label class="text_input_label" for="rate_of_urination">Rate of urination</label>
													<select id="rate_of_urination" name="rate_of_urination" onChange="loadSelectedColor(this)"  class="form-control form-control-lg" required="required">
														<option value="I urinate normally|None">I urinate normally</option>
														<option value="I urinate every 3 - 4 hours|Mild">I urinate every 3 - 4 hours</option>
														<option value="I urinate every 2 - 3 hours|Moderate">I urinate every 2 - 3 hours</option>
														<option value="I urinate every 1 hour or more frequently|Severe">I urinate every 1 hour or more frequently</option>
													</select>
												</div>  


												<div class="form-group mb-3">
													<label class="text_input_label" for="feel_like_urinating">Feel like urinating</label>
													<select id="feel_like_urinating" name="feel_like_urinating" onChange="loadSelectedColor(this)"  class="form-control form-control-lg" required="required">
														<option value="none|None">None</option>
														<option value="MiI have occasional urge  to urinate|Mild">I have occasional urge  to urinate</option>
														<option value="I have a persistent urge to urinate which sometimes affects daily activities|Moderate">I have a persistent urge to urinate which sometimes affects daily activities</option>
														<option value="I have an uncontrollable urge to urinate that always affect daily activities and requires urinary catheter|Severe">I have an uncontrollable urge to urinate that always affect daily activities and requires urinary catheter)</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="control_of_urine_flow">Control of urine flow</label>
													<select id="control_of_urine_flow" name="control_of_urine_flow" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
														<option value="I can control the flow of urine|None">I can control the flow of urine</option>
														<option value="I experience uncontrollable flow of urine more than once in a week|Mild">I experience uncontrollable flow of urine more than once in a week</option>
														<option value="I  experience uncontrollable flow of urine more than once a day|Moderate">I  experience uncontrollable flow of urine more than once a day</option>
														<option value="I experience uncontrollable flow of urine more than once a day and might necessitate the use of pads|Severe">I experience uncontrollable flow of urine more than once a day and might necessitate the use of pads</option>
													</select>
												</div>   

 												
												<div class="form-group mb-3">
													<label class="text_input_label" for="nausea">Nausea</label>
													<select id="nausea" name="nausea" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
														<option value="NO|None">NO</option>
														<option value="YES|YES">YES</option> 
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="vomiting">Vomiting</label>
													<select id="vomiting" name="vomiting" onChange="loadSelectedColor(this)" class="form-control form-control-lg" placeholder="Full name" required="required">
														<option value="I have no episode of vomiting|None">I have no episode of vomiting</option>
														<option value="I have 1 episode of vomiting in 24 hours|Mild">I have 1 episode of vomiting in 24 hours</option>
														<option value="Thick saliva|Moderate">I have between 2-5 episodes of vomiting in 24 hours.</option>
														<option value="I have 6 or more episodes of vomiting. Could require hospitalization|Severe">I have 6 or more episodes of vomiting. Could require hospitalization</option> 
													</select>
												</div>     
   												
												<div class="form-group mb-3">
													<label class="text_input_label" for="loose_or_watery_stools">Loose or watery stools</label>
													<select id="loose_or_watery_stools" name="loose_or_watery_stools" onChange="loadSelectedColor(this)"  class="form-control form-control-lg" required="required">
														<option value="I have no episode of watery stool|None">I have no episode of watery stool</option>
														<option value=" I have less than 4 episodes of watery stool in 24 hours|Mild"> I have less than 4 episodes of watery stool in 24 hours</option>
														<option value="I have between 4-6 episodes of watery stool in 24 hours|Moderate">I have between 4-6 episodes of watery stool in 24 hours</option>
														<option value=" I have greater than episodes of watery stool in 24 hours|Severe"> I have greater than episodes of watery stool in 24 hours</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="change_in_the_anus">Changes in the anus  </label>
													<select id="change_in_the_anus" name="change_in_the_anus" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
														<option value="I have no pain in my anus|None">I have no pain in my anus</option>
														<option value="I have pain in my anus or occasional urgency to stool but little or no stool comes out|Mild">I have pain in my anus or occasional urgency to stool but little or no stool comes out</option>
														<option value="I have persistent pain in the anus with ulceration or  persistent bleeding, tightness of the anus|Moderate">I have persistent pain in the anus with ulceration or  persistent bleeding, tightness of the anus</option>
														<option value="I have uncontrollable stooling and pain; heavy bleeding, complete obstruction of the anus|Severe">I have uncontrollable stooling and pain; heavy bleeding, complete obstruction of the anus</option>
													</select>
												</div>  
 												
												<div class="form-group mb-3">
													<label class="text_input_label" for="blood_from_the_anus">Blood from the anus</label>
													<select id="blood_from_the_anus" name="blood_from_the_anus" onChange="loadSelectedColor(this)" class="form-control form-control-lg"  required="required">
														<option value="NO|None">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="difficulty_stooling">Difficulty in stooling</label>
													<select id="difficulty_stooling" name="difficulty_stooling" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
														<option value="I stool normally|None">I stool normally</option>
														<option value="I stool between 3 - 4 times in a week|Mild">I stool between 3 - 4 times in a week</option>
														<option value="I stool  between 1 - 2 times in a week|Moderate">I stool  between 1 - 2 times in a week</option>
														<option value="I have not stooled for up to 10 days|Severe">I have not stooled for up to 10 days</option>
													</select>
												</div>   

												<div class="form-group mb-3">
													<label class="text_input_label" for="belly_full_at_night">Belly feels full and tight</label>
													<select id="belly_full_at_night" name="belly_full_at_night" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div> 
												<div class="form-group mb-3">
													<label class="text_input_label" for="leakage_stool">Leakage of stool</label>
													<select id="leakage_stool" name="leakage_stool" onChange="loadSelectedColor(this)" class="form-control form-control-lg change_in_taste" required="required">
													    <option value="I can control when to stool|None">I can control when to stool</option>
														<option value="I experience occasional leakage of stool|Mild">I experience occasional leakage of stool</option>
														<option value="I experience persistent leakage of stool|Moderate">I experience persistent leakage of stool</option>
														<option value="I experience occasional leakage of stool|Severe">I experience complete loss of control of over leakage of stool</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="achieve_and_maintain_erection">Achieve and maintain erection</label>
													<select id="achieve_and_maintain_erection" name="achieve_and_maintain_erection" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div> 
												<div class="form-group mb-3">
													<label class="text_input_label" for="sperm_release_difficulty">Difficulty in releasing sperm</label>
													<select id="sperm_release_difficulty" name="sperm_release_difficulty" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div> 
												<div class="form-group mb-3">
													<label class="text_input_label" for="decreased_sexual_desire">Decreased sexual desire</label>
													<select id="decreased_sexual_desire" name="decreased_sexual_desire" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div> 
												<div class="form-group mb-3">
													<label class="text_input_label" for="pasinful_sex">Painful sex</label>
													<select id="pasinful_sex" name="pasinful_sex" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div> 
												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Tired/weak</label>
													<select id="tired" name="tired" onChange="loadSelectedColor(this)" class="form-control form-control-lg" required="required">
													    <option value="I feel better than usual|None">I feel better than usual</option>
														<option value="I do not feel better more than usual|Mild">I do not feel better more than usual</option>
														<option value="I feel worse than usual|Moderate">I feel worse than usual</option>
														<option value="I feel much worse than usual|Severe">I feel much worse than usual</option>
													</select>
												</div> 
												<div class="form-group mb-3">
													<label class="text_input_label" for="weight_this_week">What is your weight this week?</label>
													<input id="weight_this_week" type="text" name="weight_this_week" class="form-control form-control-lg" required="required" />
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="fbc_parameters">Enter your FBC parameters..Hb,PCV,WBC,ANC,Platelet</label>
													<textarea id="fbc_parameters" type="text" name="fbc_parameters" class="form-control form-control-lg" required="required"></textarea>
												</div> 

												<div class="form-group mb-3"> 
													<label class="text_input_label" for="other_info">Is there any side effect or anything you would like to share ?</label>
													<textarea id="other_info" type="text" name="other_info" class="form-control form-control-lg" required="required"></textarea>
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="male_chemotherapy">Are you on chemotherapy?</label>
													<select id="male_chemotherapy" name="male_chemotherapy" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div>
												
												<div class="form-group mb-3 how_often_section">
													<label class="text_input_label" for="how_often">How Often?</label>
													<select id="how_often" name="how_often" class="form-control form-control-lg">
													    <option value="weekly">Weekly</option>
														<option value="3 weekly">3 Weekly</option>
														<option value="Monthly">Monthly</option>
													</select>
												</div>

												<input type="hidden" name="date" class="selectedDate" id="selectedDate">

												<div class="result"></div>
											   												
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
													<select id="watery_stool" name="watery_stool" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg watery_stool" required="required">
														<option selected disabled>select option</option>
													    <option value="I have no episode of watery stool|None">I have no episode of watery stool</option>
														<option value="I have less than 4 episodes of watery stool in 24 hoursMild (normal activity with effort)|Mild">I have less than 4 episodes of watery stool in 24 hours</option>
														<option value="I have between 4-6 episodes of watery stool in 24 hours|Moderate">I have between 4-6 episodes of watery stool in 24 hours </option>
														<option value="I have greater than 6 episodes of watery stool in 24 hours|Severe">I have greater than 6 episodes of watery stool in 24 hours</option>
													</select> 
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="nausea">Nausea</label>
													<select id="nausea" name="nausea" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg nausea"  required="required">
													   <option selected disabled>select option</option>  
														<option value="NO|NO">NO</option>   
														<option value="YES|YES">YES</option> 
													</select>
												</div> 	
												
												<div class="form-group mb-3">
													<label class="text_input_label" for="vomiting">Vomiting</label>
													<select id="vomiting" name="vomiting" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg vomiting" required="required">
													  <option selected disabled>select option</option>
													    <option value="I have no episode of vomiting|None"> I have no episode of vomiting</option>
														<option value="I have 1 episode of vomiting in 24 hours|Mild"> I have 1 episode of vomiting in 24 hours</option>
														<option value="I have between 2-5 episodes of vomiting in 24 hours|Moderate">I have between 2-5 episodes of vomiting in 24 hours</option>
														<option value="I have 6 or more episodes of vomiting. Could require hospitalization|Severe">I have 6 or more episodes of vomiting. Could require hospitalization</option>
													</select>
												</div> 
												

												<div class="form-group mb-3">
													<label class="text_input_label" for="skin_color">Skin colour changes</label>
													<select id="skin_color" name="skin_color" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg skin_color"  required="required">
                                                        <option selected disabled>select option</option>
														<option   value="No skin changes|None">No skin changes</option>
														<option   value="I have skin colour changes or dry peeling on the skin|Mild">Mild (faint redness/darkening and scaling)</option>
														<option   value="I have skin colour changes or a little area of my skin that is wet and peeling in skin folds eg armpit|Moderate">Moderate (redness/darkening or moist peeling especially at skin folds) </option>
														<option   value="I have a lot of skin colour changes and or peeling of my skin; bleeding from my breast or chest skin or an ulcer on my skin|Severe">I have a lot of skin colour changes and or peeling of my skin; bleeding from my breast or chest skin or an ulcer on my skin </option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="change_in_the_anus">Changes in the anus</label>
													<select id="change_in_the_anus" name="change_in_the_anus" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" required="required">
													    <option selected disabled>select option</option>
													    <option value="I have no pain in my anus|None">I have no pain in my anus</option>
														<option value="I have pain in my anus or occasional urgency to stool but little or no stool comes out|Mild">I have pain in my anus or occasional urgency to stool but little or no stool comes out</option>
														<option value="I have persistent pain in the anus with ulceration or  persistent bleeding, tightness of the anus|Moderate">I have persistent pain in the anus with ulceration or  persistent bleeding, tightness of the anus</option>
														<option value="I have uncontrollable stooling and pain; heavy bleeding, complete obstruction of the anus|Severe">I have uncontrollable stooling and pain; heavy bleeding, complete obstruction of the anus</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="blood_in_the_urine">Blood in the urine  </label>
													<select id="blood_in_the_urine" name="blood_in_the_urine" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" required="required">
													    <option selected disabled>select option</option>
													    <option value=" I have no blood in my urine|None"> I have no blood in my urine</option>
														<option value=" I can see blood in my urine|Mild"> I can see blood in my urine</option>
														<option value="I can see blood and small clot in my urine|Moderate">I can see blood and small clot in my urine </option>
														<option value="I can see blood and clots large enough to block the flow of urine and require removal|Severe">I can see blood and clots large enough to block the flow of urine and require removal </option>
													</select>
												</div>    												
    												
   												
												<div class="form-group mb-3">
													<label class="text_input_label" for="difficulty_urinating">Difficulty in urinating</label>
													<select id="difficulty_urinating" name="difficulty_urinating" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg difficulty_urinating" required="required">
													    <option selected disabled>select option</option>
													    <option value="I have no difficulty in urinating|None">I have no difficulty in urinating</option>
														<option value="I have occasional difficulty in urinating|Mild">I have occasional difficulty in urinating</option>
														<option value="I have intermittent difficulty in urinating|Moderate">Moderate (soreness or painful ulcer, able to eat) </option>
														<option value="I have complete difficulty in urinating|Severe">I have complete difficulty in urinating</option>
													</select>
												</div>
											
												<div class="form-group mb-3">
													<label class="text_input_label" for="painful_urination">Painful urination</label>
													<select id="painful_urination" name="painful_urination" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg painful_urination" required="required">
													    <option selected disabled>select option</option>
													    <option value="I experience no painful urination|None">I experience no painful urination</option>
														<option value="I experience occasional &  minimal painful urination|Mild">I experience occasional &  minimal painful urination</option>
														<option value="I experience intermittent & tolerable  painful urination|Moderate">I experience intermittent & tolerable  painful urination</option>
														<option value="I experience persistent, intense, refractory & excruciating painful urination|Severe">I experience persistent, intense, refractory & excruciating painful urination</option>
													</select>
												</div>

												<div class="form-group mb-3">
													<label class="text_input_label" for="feel_like_urinating">Feel like urinating?</label>
													<select id="feel_like_urinating" name="feel_like_urinating" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg feel_like_urinating" required="required">
													    <option selected disabled>select option</option>
														<option value="None|None">None</option>
														<option value="I have occasional urge  to urinate|Mild">I have occasional urge  to urinate</option>
														<option value=" I have a persistent urge to urinate which sometimes affects daily activities|Moderate"> I have a persistent urge to urinate which sometimes affects daily activities</option>
														<option value="I have an uncontrollable urge to urinate that always affect daily activities and requires urinary catheter|Severe">I have an uncontrollable urge to urinate that always affect daily activities and requires urinary catheter</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="urine_flow_control">Control of urine flow</label>
													<select id="urine_flow_control" name="urine_flow_control" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg urine_flow_control" required="required">
													    <option selected disabled>select option</option>
													    <option value="I can control the flow of urine|None">I can control the flow of urine</option>
														<option value="I experience uncontrollable flow of urine more than once in a week|Mild">I experience uncontrollable flow of urine more than once in a week</option>
														<option value="I  experience uncontrollable flow of urine more than once a day|Moderate">I  experience uncontrollable flow of urine more than once a day</option>
														<option value="I  experience uncontrollable flow of urine more than once a day|Severe">I  experience uncontrollable flow of urine more than once a day</option>
													</select>
												</div>    												
												<div class="form-group mb-3">
													<label class="text_input_label" for="urination_rate">Rate of urination </label>
													<select id="urination_rate" name="urination_rate" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg urination_rate" required="required">
													    <option selected disabled>select option</option>
													    <option value="I urinate normally|None">I urinate normally</option>
														<option value="I urinate every 3 - 4 hours|Mild"> I urinate every 3 - 4 hours</option>
														<option value="I urinate every 2 - 3 hours|Moderate">I urinate every 2 - 3 hours</option>
														<option value="I urinate every 1 hour or more frequently|Severe"> I urinate every 1 hour or more frequently.</option>
													</select>
												</div>  

												<div class="form-group mb-3">
													<label class="text_input_label" for="vaginal_dryness">Vaginal dryness</label>
													<select id="vaginal_dryness" name="vaginal_dryness" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg vaginal_dryness" required="required">
													    <option selected disabled>select option</option>
													    <option  value="I have no vaginal dryness|None">I have no vaginal dryness</option>
														<option value="I have vaginal dryness that has no interference with usual sexual, social, & functional activities|Mild">I have vaginal dryness that has no interference with usual sexual, social, & functional activities</option>
														<optio  value="I have vaginal dryness that has minimal interference with usual sexual, social, & functional activities|Moderate">I have vaginal dryness that has minimal interference with usual sexual, social, & functional activities</option>
														<option  value="I have vaginal dryness that has significant interference with usual sexual, social, & functional activities|Severe">I have vaginal dryness that has significant interference with usual sexual, social, & functional activities</option>
													</select>
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="stool_leakage">Leakage of stool</label>
													<select id="stool_leakage" name="stool_leakage" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg stool_leakage" required="required">
													    <option selected disabled>select option</option>
													    <option value="I can control when to stool|None">I can control when to stool</option>
														<option value="I experience occasional leakage of stool|Mild">I experience occasional leakage of stool</option>
														<option value="I experience persistent leakage of stool|Moderate">I experience persistent leakage of stool</option>
														<option value="I experience complete loss of control of over leakage of stool|Severe">I experience complete loss of control of over leakage of stool</option>
													</select>
												</div>    

												<div class="form-group mb-3">
													<label class="text_input_label" for="tired">Tired/weak</label>
													<select id="tired" name="tired" onChange="loadSelectedColor(this)" type="text" class="form-control form-control-lg tired" required="required">
													    <option selected disabled>select option</option>
														<option value="none|None">None</option>
														<option value="Mild|Mild">Mild</option>
														<option value="Moderate|Moderate">Moderate</option>
														<option value="Severe|Severe">Severe</option>
													</select>
												</div>  
												<div class="form-group mb-3">
													<label class="text_input_label" for="weight_this_week">What is your weight this week?</label>
													<input id="weight_this_week" type="text" name="weight_this_week" class="form-control form-control-lg" required="required" />
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="fbc_parameters">Enter your FBC parameters..Hb,PCV,WBC,ANC,Platelet</label>
													<textarea id="fbc_parameters" type="text" name="fbc_parameters" class="form-control form-control-lg" required="required"></textarea>
												</div> 

												<div class="form-group mb-3"> 
													<label class="text_input_label" for="other_info">Is there any side effect or anything you would like to share ?</label>
													<textarea id="other_info" type="text" name="other_info" class="form-control form-control-lg" required="required"></textarea>
												</div> 

												<div class="form-group mb-3">
													<label class="text_input_label" for="male_chemotherapy">Are you on chemotherapy?</label>
													<select id="on_chemotherapy" name="male_chemotherapy" class="form-control form-control-lg" required="required">
													    <option value="NO|NO">NO</option>
														<option value="YES|YES">YES</option>
													</select>
												</div>
												
												<div class="form-group mb-3 how_often_section">
													<label class="text_input_label" for="how_often">How Often?</label>
													<select id="how_often" name="how_often" class="form-control form-control-lg">
													    <option value="weekly">Weekly</option>
														<option value="3 weekly">3 Weekly</option>
														<option value="Monthly">Monthly</option>
													</select>
												</div>


												<input type="hidden" name="date" class="selectedDate" id="selectedDate">

												<div class="result"></div>   												
												<div class="text-center">
													<button type="submit" class="btn btn-primary btn-lg mx-auto d-flex justify-content-between align-items-center">
															<span>Log Side Effects </span> <img src="../assets/img/arrow_.svg"/> 
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

		  
		  //Breast cancer, Head and Neck Cancer,Male Pelvic Cancer,Female Pelvic Cancer
		
        let cancer_type = "<?php echo $cancer_type ?>";
		let tableName ="";
		switch(cancer_type){
			case 'Female Pelvic Cancer':
				tableName +='female_pelvic_effect';
				break;
			case 'Breast cancer':
				tableName +='breast_cancer';
				break;
			case 'Head and Neck Cancer':
				tableName +='head_neck_effect';
				break;
			case 'Male Pelvic Cancer':
				tableName +='male_pelvic';
				break;

		}
		
		// Get list of all loggedDates as soon as the page loads
		getAllLoggedDates();

		 function getAllLoggedDates(){
			fetch('../../api/patients/side-effects/fetchAllLoggedDates.php/', {
					method: "POST", 
					body: JSON.stringify({tableName:tableName}),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json.data);  
					//check if the request actually returned some data
					if(json.data.length>0){
						let newArray =[];
						json.data.forEach((el)=>{
							let newDate = Date.parse(el.dateLogged);
							newArray.push(newDate);
						});
						console.log(newArray); 
						newArray.forEach((el)=>{
							$.each($('tr td.day'), function(index, value) { 
								let ayDateTime = $(this).attr("data-date"); 
								if(ayDateTime == el){ $(this).addClass("active"); }
							}); 
						});
					}
				})
				.catch(err => console.log(err));
		 }

// 		 
		 $('#dncalendar-container').datepicker({
			keyboardNavigation: false,
			forceParse: false,    
		})
		.on("changeDate", function(e) {
			console.log(e.date); 
			let RealDate = format(Date.parse(e.date));
			console.log(RealDate);

			switch(cancer_type){
			case 'Female Pelvic Cancer':
				getFemaleLoogedInfoByDate(RealDate); 
				break;
			case 'Breast cancer':
				getBreastLoogedInfoByDate(RealDate); 
				break;
			case 'Head and Neck Cancer':
				getHeadNeckLoogedInfoByDate(RealDate); 
				break;
			case 'Male Pelvic Cancer':
				getMaleLoogedInfoByDate(RealDate);
				break;

		}

			// Get LoggedMaleSideffects By date
			//getMaleLoogedInfoByDate(RealDate);

			// Get LoggedFemaleSideffects By date
			// getFemaleLoogedInfoByDate(RealDate); 

			// Get list of all loggedDates when the user checks on another date
			getAllLoggedDates();

			// log_begin_cotainer  log_symptom_container
			$(".selectedDate").val(RealDate);  // set Date field in hidden mode
			$(".log_begin_cotainer").hide();
			$(".log_symptom_container").show().css("zoom",0.88);

         }); 


		 // Get Logged Info for Male Pelvic Cancer
		 function getMaleLoogedInfoByDate(date){
			fetch('../../api/patients/side-effects/getMaleInfo.php', {
					method: "POST", 
					body: JSON.stringify({date:date}),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json); 
				     
					if(json.msg==='success' && json.data!=="NO DATA FOUND"){
						// $("#blood_in_urine option[value="+d.blood_in_urine+"]").attr('selected',true);
						let d = {};
						for (const [key, value] of Object.entries(json.data)) {
							// console.log(`${key} ${decodeURI(value).split("+").join(" ")}`);
							// d[key] = decodeURI(value).split("+").join(" ");
							d[key] = decodeURIComponent(value).replaceAll('+', ' ')
						}
						console.log(d); 

						$("#blood_in_urine_two").html(d.blood_in_urine);

						$("#difficulty_in_urinating option[value='"+d.urinating_difficulty+"']").attr('selected',true);
						$("#painful_urination option[value='"+d.painful_urination+"']").attr('selected',true);
						$("#rate_of_urination option[value='"+d.urination_rate+"']").attr('selected',true);
						$("#feel_like_urinating option[value='"+d.feel_like_urinating+"']").attr('selected',true);
						$("#control_of_urine_flow option[value='"+d.urine_flow_control+"']").attr('selected',true);
						$("#nausea option[value='"+d.nauea+"']").attr('selected',true);
						$("#vomiting option[value='"+d.vomiting+"']").attr('selected',true);
						$("#loose_or_watery_stools option[value='"+d.watery_stool+"']").attr('selected',true);
						$("#change_in_the_anus option[value='"+d.changes_in_the_anus+"']").attr('selected',true);
						$("#blood_from_the_anus option[value='"+d.blood_from_anus+"']").attr('selected',true);
						$("#difficulty_stooling option[value='"+d.stooling_difficulty+"']").attr('selected',true);
						$("#leakage_stool option[value='"+d.stool_leakage+"']").attr('selected',true);
						$("#achieve_and_maintain_erection option[value='"+d.maintain_erection+"']").attr('selected',true);
						$("#sperm_release_difficulty  option[value='"+d.sperm_releasing_diff+"']").attr('selected',true);
						$("#decreased_sexual_desire  option[value='"+d.dc_sexual_desire+"']").attr('selected',true);
						$("#pasinful_sex  option[value='"+d.painful_sex+"']").attr('selected',true);
						$("#tired  option[value='"+d.tired_weak+"']").attr('selected',true);
						$("#belly_full_at_night  option[value='"+d.night_belly_full+"']").attr('selected',true);
						$("#weight_this_week").val(d.weight_this_week);
						$("#fbc_parameters").val(d.fbc_parameters);
						$("#other_info").val(d.other_side_effeccts);
						$("#male_chemotherapy option[value='"+d.on_chemotherap+"']").attr('selected',true);
						$("#how_often option[value='"+d.how_often+"']").attr('selected',true);
						let loggedD_ate = new Date(Date.parse(d.dateLogged));
						console.log(loggedD_ate);

					}else{
						$("#blood_in_urine_two").html("");
						$("#difficulty_in_urinating").val("");
						$("#painful_urination").val("");
						$("#rate_of_urination").val("");
						$("#feel_like_urinating").val("");
						$("#control_of_urine_flow").val("");
						$("#nausea").val("");
						$("#vomiting").val("");
						$("#loose_or_watery_stools").val("");
						$("#change_in_the_anus").val("");
						$("#blood_from_the_anus").val("");
						$("#difficulty_stooling").val("");
						$("#leakage_stool").val("");
						$("#achieve_and_maintain_erection").val("");
						$("#sperm_release_difficulty").val("");
						$("#decreased_sexual_desire").val("");
						$("#pasinful_").val("");
					}
				})
				.catch(err => console.log(err));
		 }
		  // Get Logged Info for FeMale Pelvic Cancer
		function getFemaleLoogedInfoByDate(date){
			fetch('../../api/patients/side-effects/getFemaleInfo.php', {
					method: "POST", 
					body: JSON.stringify({date:date}),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json); 
				     
					if(json.msg==='success' && json.data!=="NO DATA FOUND"){ 
						let d = {};
						for (const [key, value] of Object.entries(json.data)) {
							// console.log(`${key} ${decodeURI(value).split("+").join(" ")}`);
							// d[key] = decodeURI(value).split("+").join(" ");
							d[key] = decodeURIComponent(value).replaceAll('+', ' ');
						}
						console.log(d);    
						$("#watery_stool option[value='"+d.watery_stools+"']").attr('selected',true);
						$("#nausea option[value='"+d.nausea+"']").attr('selected',true);
						$("#vomiting option[value='"+d.vomiting+"']").attr('selected',true);
						$("#skin_color option[value='"+d.skin_color+"']").attr('selected',true);
						$("#change_in_the_anus option[value='"+d.anus_changes+"']").attr('selected',true);
						$("#blood_in_the_urine option[value='"+d.blood_in_urine+"']").attr('selected',true);
						//------------------------------------------------------------------------------------//
						$("#difficulty_urinating option[value='"+d.difficulty_urinating+"']").attr('selected',true);
						$("#painful_urination option[value='"+d.painful_urination+"']").attr('selected',true);
						$("#feel_like_urinating option[value='"+d.feel_like_urinating+"']").attr('selected',true);
						$("#urine_flow_control option[value='"+d.urine_flow_control+"']").attr('selected',true);
						$("#urination_rate option[value='"+d.urination_rate+"']").attr('selected',true);
						$("#vaginal_dryness option[value='"+d.vaginal_dryness+"']").attr('selected',true);
						$("#stool_leakage option[value='"+d.stool_leakage+"']").attr('selected',true);
						$("#tired option[value='"+d.tired_weak+"']").attr('selected',true); 
						//-----------------------------------------------------------------------------//
						$("#weight_this_week").val(d.weight);
						$("#fbc_parameters").val(d.fbc_parameters);
						$("#other_info").val(d.others);
						$("#on_chemotherapy option[value='"+d.on_chemotherapy+"']").attr('selected',true);
						$("#how_often option[value='"+d.how_frequent+"']").attr('selected',true);
						let loggedD_ate = new Date(Date.parse(d.dateLogged));
						console.log(loggedD_ate);

					} else{
						$("#watery_stool").val("");
						$("#nausea").val("");
						$("#vomiting").val("");  	
						
					}
				})
				.catch(err => console.log(err));
		 }


		  // Get Logged Info for Breast Cancer
		function getBreastLoogedInfoByDate(date){
			fetch('../../api/patients/side-effects/getBreastInfo.php', {
					method: "POST", 
					body: JSON.stringify({date:date}),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json); 
				     
					if(json.msg==='success' && json.data!=="NO DATA FOUND"){ 
						let d = {};
						for (const [key, value] of Object.entries(json.data)) { 
							d[key] = decodeURIComponent(value).replaceAll('+', ' ')
						}
						console.log(d);     
						//------------------------------------------------------------------------------------// 
						$("#arm_swelling option[value='"+d.arm_swelling+"']").attr('selected',true); 
						$("#breast_pain option[value='"+d.breast_pain+"']").attr('selected',true); 
						$("#breats_swelling option[value='"+d.breast_swelling+"']").attr('selected',true); 
						$("#chest_wall_pain option[value='"+d.pain_in_chest_wall+"']").attr('selected',true);  
						//-----------------------------------------------------------------------------//
						$("#hair_loss option[value='"+d.armpit_hair_loss+"']").attr('selected',true); 
						$("#sensation_loss option[value='"+d.sensation_loss+"']").attr('selected',true); 
						$("#skin_color option[value='"+d.skin_color_changes+"']").attr('selected',true); 
						$("#swallowing_difficulty option[value='"+d.swalloging_difficulty+"']").attr('selected',true); 
						$("#tired option[value='"+d.tired_weak+"']").attr('selected',true);  
						//-----------------------------------------------------------------------------//
						$("#weight_this_week").val(d.weight_this_week);
						$("#fbc_parameters").val(d.fbc_parameters);
						$("#other_info").val(d.other_info); 
						let loggedD_ate = new Date(Date.parse(d.dateLogged));
						console.log(loggedD_ate);
						// change the Submit button Text to Save Changes
						let options = {   
								day: 'numeric',
								month: 'long', 
								year: 'numeric'
							};
						$("form.Head_and_Neck_Cancer").find("button:submit").html("Save Changes");
						$("form.Head_and_Neck_Cancer").find("h5:first").html(new Date(d.dateLogged).toLocaleDateString('en-ZA', options)+" Side Effects");
						$("form.Head_and_Neck_Cancer").find("label:first").html("Below are the side effects you have logged. You can edit them below");
					} else{
						// change the Submit button Text to Save Changes
						$("form.Head_and_Neck_Cancer").find("button:submit").html('<span>Log Side Effects </span> <img src="../assets/img/arrow_.svg"/> ');
						$("form.Head_and_Neck_Cancer").find("h5:first").html("Log Side Effects");
						$("form.Head_and_Neck_Cancer").find("label:first").html("No side effects have been logged today. Log them below");
					}
				})
				.catch(err => console.log(err));
		 }

		function getHeadNeckLoogedInfoByDate(date){
			fetch('../../api/patients/side-effects/getHeadNeckInfo.php', {
					method: "POST", 
					body: JSON.stringify({date:date}),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json); 
				     
					if(json.msg==='success' && json.data!=="NO DATA FOUND"){ 
						let d = {};
						for (const [key, value] of Object.entries(json.data)) { 
							d[key] = decodeURIComponent(value).replaceAll('+', ' ') || decodeURI(value).split("+").join(" ");
						}
						console.log(d);     
						//------------------------------------------------------------------------------------//  
						//-----------------------------------------------------------------------------------//
						$("#appetite_changes option[value='"+d.appetite_change+"']").attr('selected',true); 
						$("#cracking_at_mouth_corner option[value='"+d.mouth_corner_cracking+"']").attr('selected',true); 
						$("#dry_mouth option[value='"+d.dry_mouth+"']").attr('selected',true); 
						//-----------------------------------------------------------------------------------//
						//------------------------------------------------------------------------------------//  
						$("#how_often option[value='"+d.how_frequent+"']").attr('selected',true); 
						$("#loss_of_smell option[value='"+d.smell_loss+"']").attr('selected',true); 
						$("#mouth_sore option[value='"+d.mouth_sore+"']").attr('selected',true); 
						//-----------------------------------------------------------------------------------//
						$("#nausea option[value='"+d.nausea+"']").attr('selected',true); 
						$("#on_chemotherapy option[value='"+d.on_chemotherapy+"']").attr('selected',true); 
						//--------------------------------------------------------------------------
						$("#skin_color_changes option[value='"+d.skin_color_changes+"']").attr('selected',true); 
						$("#swallowing_difficulty option[value='"+d.swallowing_difficulty+"']").attr('selected',true); 
						$("#taste_changes option[value='"+d.taste_changes+"']").attr('selected',true); 
						//------------------------------------------------------------------------------
						$("#tired_weak option[value='"+d.tired_weak+"']").attr('selected',true); 
						$("#voice_changes option[value='"+d.voice_chnage+"']").attr('selected',true); 
						$("#vomiting option[value='"+d.vomiting+"']").attr('selected',true); 
						 
						$("#weight_this_week").val(d.weight);
						$("#fbc_parameters").val(d.fbc_parameters);
						$("#other_info").val(d.others); 
						let loggedD_ate = new Date(Date.parse(d.dateLogged));
						console.log(loggedD_ate);  

						// change the Submit button Text to Save Changes
						let options = {   
								day: 'numeric',
								month: 'long', 
								year: 'numeric'
							};
						$("form.Head_and_Neck_Cancer").find("button:submit").html("Save Changes");
						$("form.Head_and_Neck_Cancer").find("h5:first").html(new Date(d.dateLogged).toLocaleDateString('en-ZA', options)+" Side Effects");
						$("form.Head_and_Neck_Cancer").find("label:first").html("Below are the side effects you have logged. You can edit them below");
					} else{ 
						// change the Submit button Text to Save Changes
						$("form.Head_and_Neck_Cancer").find("button:submit").html('<span>Log Side Effects </span> <img src="../assets/img/arrow_.svg"/> ');
						$("form.Head_and_Neck_Cancer").find("h5:first").html("Log Side Effects");
						$("form.Head_and_Neck_Cancer").find("label:first").html("No side effects have been logged today. Log them below");
					}
				})
				.catch(err => console.log(err));
		 }




		
		
		 function format(date) {
			date = new Date(date); 
			var day   = ('0' + date.getDate()).slice(-2);
			var month = ('0' + (date.getMonth() + 1)).slice(-2);
			var year  = date.getFullYear(); 
			return year + '-' + month + '-' + day;
		}
		

		 // Logging Side Effects for MALE PELVIC CANCER
		 function converToOjbect(formData){
			    let data = formData.split("&"); 
				var obj={};
				for(var key in data) { obj[data[key].split("=")[0]] = data[key].split("=")[1]; }
				return obj;
		 }
 
		   /////  This seeciton controls when ON Chenmotherapy questions evaluates to YES or NO
			 // male_chemotherapy  how_often_section
			 $(".how_often_section").hide();
			 $(document).on("change","#male_chemotherapy, #on_chemotherapy", function(){
					let male_chemotherapy = $(this).val();
					
					if(male_chemotherapy && male_chemotherapy==="YES|YES"){
						$(".how_often_section").show();
					}else{
						$(".how_often_section").hide();
					}
			 }); 

		 // Male_Pelvic_Cancer Female_Pelvic_Cancer Head_and_Neck_Cancer  breast_cancer

		 $(document).on("submit","form.Male_Pelvic_Cancer",function(evt){
			evt.preventDefault();
			let formData    = $(this).serialize();
            let dataObject  = converToOjbect(formData); 			
			console.info(dataObject); 
			let $_this =$(this);
				$_this.find('button:submit').attr("disabled","disabled");  
				$_this.find('div.result').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');  

			      fetch('../../api/patients/side-effects/male_pelvic.php', {
							method: "POST",
							body: JSON.stringify(dataObject),
							headers: {"Content-type": "application/json; charset=UTF-8"}
						})
						.then(response =>response.json()) 
						.then((json)=>{
							console.log(json); 
							if(json.msg == 'success'){
								$_this.find('button:submit').removeAttr("disabled");  
								$_this.find('div.result').html('<div class="alert alert-success">Successfully Logged </div>');  
							}else{ 
								console.log(json.msg);
								$_this.find('div.result').html('<div class="alert alert-danger">'+json.msg+'</div>');
								$_this.find('button:submit').removeAttr("disabled"); 
							}
						})
						.catch(err => console.log(err));
		 });

		 // FEMALE PELVIC CANCER Logging Side Effects
		 $(document).on("submit","form.Female_Pelvic_Cancer",function(evt){
			evt.preventDefault();
			let formData = $(this).serialize();
            let dataObject = converToOjbect(formData); 			
			console.info(dataObject);
			let $_this =$(this);
				$_this.find('button:submit').attr("disabled","disabled");  
				$_this.find('div.result').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');  

			      fetch('../../api/patients/side-effects/female_pelvic.php', {
							method: "POST",
							body: JSON.stringify(dataObject),
							headers: {"Content-type": "application/json; charset=UTF-8"}
						})
						.then(response =>response.json()) 
						.then((json)=>{
							console.log(json); 
							if(json.msg == 'success'){
								$_this.find('button:submit').removeAttr("disabled");  
								$_this.find('div.result').html('<div class="alert alert-success">Successfully Logged </div>');  
							}else{ 
								console.log(json.msg);
								$_this.find('div.result').html('<div class="alert alert-danger">'+json.msg+'</div>');
								$_this.find('button:submit').removeAttr("disabled"); 
							}
						})
						.catch(err => console.log(err));
		 });


		 $(document).on("submit","form.Head_and_Neck_Cancer",function(evt){
			evt.preventDefault();
			let formData = $(this).serialize();
            let dataObject = converToOjbect(formData); 			
			console.info(dataObject);
			let $_this =$(this);
				$_this.find('button:submit').attr("disabled","disabled");  
				$_this.find('div.result').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');  

			      fetch('../../api/patients/side-effects/head_neck.php', {
							method: "POST",
							body: JSON.stringify(dataObject),
							headers: {"Content-type": "application/json; charset=UTF-8"}
						})
						.then(response =>response.json()) 
						.then((json)=>{
							console.log(json); 
							if(json.msg == 'success'){
								$_this.find('button:submit').removeAttr("disabled");  
								$_this.find('div.result').html('<div class="alert alert-success">Successfully Logged </div>');  
							}else{ 
								console.log(json.msg);
								$_this.find('div.result').html('<div class="alert alert-danger">'+json.msg+'</div>');
								$_this.find('button:submit').removeAttr("disabled"); 
							}
						})
						.catch(err => console.log(err));
		 });


		 $(document).on("submit","form.breast_cancer",function(evt){
			evt.preventDefault();
			let formData = $(this).serialize();
            let dataObject = converToOjbect(formData); 			
			console.info(dataObject);
			let $_this =$(this);
				$_this.find('button:submit').attr("disabled","disabled");  
				$_this.find('div.result').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');  

			      fetch('../../api/patients/side-effects/breast.php', {
							method: "POST",
							body: JSON.stringify(dataObject),
							headers: {"Content-type": "application/json; charset=UTF-8"}
						})
						.then(response =>response.json()) 
						.then((json)=>{
							console.log(json); 
							if(json.msg == 'success'){
								$_this.find('button:submit').removeAttr("disabled");  
								$_this.find('div.result').html('<div class="alert alert-success">Successfully Logged </div>');  
							}else{ 
								console.log(json.msg);
								$_this.find('div.result').html('<div class="alert alert-danger">'+json.msg+'</div>');
								$_this.find('button:submit').removeAttr("disabled"); 
							}
						})
						.catch(err => console.log(err));
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

