<?php require_once("../../top.php");?>
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
	<!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> -->

    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css"> 
    <link id="theme-style" rel="stylesheet" href="../assets/css/custom.css">

	<link href="../assets/css/theme-software-library.min.css"    rel="stylesheet" type="text/css" media="all" />
	<!-- <link href="../assets/css/dncalendar-skin.css"    rel="stylesheet" type="text/css" media="all" /> -->
	
	<!-- Page Specific JS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
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
		.h5_heading_text{
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 20px;
            line-height: 28px; 
            display: flex;
            align-items: center;
            text-align: center;
            color: #7A667B; 
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
    /* .custom-checkbox .custom-control-label::before {
        border-radius: 999px; 
        height: 28px;   
        width: 28px;
      } */

      .round {
        position: relative;
      /* left:-70px; */
      }

      .round label {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 50%;
      cursor: pointer;
      height: 28px;
      left: 0;
      position: absolute;
      top: 0;
      width: 28px;
      }

      .round label:after {
        border: 2px solid #fff;
        border-top: none;
        border-right: none;
        content: "";
        height: 6px;
        left: 7px;
        opacity: 0;
        position: absolute;
        top: 8px;
        transform: rotate(-45deg);
        width: 12px;
      }

      .round input[type="checkbox"] {
         visibility: hidden;
      }

      .round input[type="checkbox"]:checked + label{
            background-color: #8D2D91 !important;
            border-color:#8D2D91 !important;
      }

      .round input[type="checkbox"]:checked + label:after {
        opacity: 1;
      }
	  .__LogMissed__holder{
		  cursor: pointer;
	  }


	  .missed_treatment_reason{
		background: #FFFFFF; 
		border: 1px solid #D7D1D7;
		box-sizing: border-box;
		border-radius: 15px; 
		flex: none;
		order: 1;
		flex-grow: 0;
		margin: 0px 0px;
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
		            <div class="app-utilities col-auto d-flex justify-content-center align-items-center">
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
					        <a class="nav-link d-flex justify-content-start align-items-center"href="side-effect.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/side-effects.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Side Effects</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active d-flex justify-content-start align-items-center" href="treatment.php">
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
				    <div class="col-12 col-lg-7" style="height:100vh;">
					    <div class="app-card app-card-basic mx-4 my-4"  style="background: #e5d2e80c !important;">
							<h1 class="h1">Log Treatment Interruptions</h1>
							<p class="left_heading-text">Log Treatment Interruptions Here</p>  
						    <div class="app-card-body mx-auto text-center ">  
							    <div id="dncalendar-container" class=" app-card app-card-basic shadow-sm px-4 py-4" style="width:45% !important"></div>
						    </div><!--//app-card-body--> 
						</div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-5">
					    <div class="app-card app-card-basic d-flex justify-content-center flex-column align-items-center shadow-sm" style="min-height:70vh; overflow-y: hidden;">
						    
                           <div class="app-card-body px-4 py-2 log_begin_cotainer"> 
							    <div class="intro mb-4 text-center"> 
									<div class="my-2 mx-2">
										<img src="../assets/img/begin.svg" alt="info"/>
									</div><!--//icon-holder-->
									<br/>
									<a href="#start">Click on a day to begin</a>
								</div>
						    </div><!--//app-card-body--> 

                             <div class="col-12 col-lg-8 log_symptom_container" style="display:none;">
                                <div class="row log_missed__home">
                                    <div class="col-12 box my-2" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row __LogMissed__holder" style="border-radius:8px !important;">
                                                <div class="py-1 col-md-3"> <img src="../../patients/assets/img/add.svg" id="log_missed_chemo" class="__LogMissed" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9"> Log Missed Chemotherapy </div>
                                        </div><!--//app-card-->
                                    </div><!--//col--> 
                                    
                                    <div class="col-12 box my-2" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row __LogMissed__holder" style="border-radius:8px !important;">
                                                <div class="py-1 col-md-3"> <img src="../../patients/assets/img/add.svg" id="log_missed_radiotherapy" class="__LogMissed" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9">Log Missed Radiotherapy</div>
                                        </div><!--//app-card-->
                                    </div><!--//col-->  


	  						<!--=================================== THE LOGGED ITEMS ===================================================== /-->

							  <!-- REMOVE DISAPLY:none to display -->
								     	<div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row " style="border-radius:8px !important;">
                                              <div class="py-1 col-md-3"> <img src="../../patients/assets/img/record.svg" id="missed_radiotherapy_record" class="__MissedRadioRecord" style="height:100%; width:100%;" />  </div>
											  <!--//icon-holder-->
                                                 <div class="log_type col-md-9">Missed Radiotherapy</div> 
                                                <div class="log_type col-md-12 mx-4 py-1"><strong>Reason:</strong> I missed the appointment</div>
                                                <div class="log_type col-md-12 text-right">
													<button class="btn text-success editRadiotherapyRecord">Edit</button>
													<button class="btn text-danger deleteRadioTherapyRecord">Delete</button>
												</div>
                                        </div>   
										<!--//app-card-->
	  									<p>&nbsp;</p>
								     	<div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row " style="border-radius:8px !important;">
                                                <div class="py-1 col-md-3"> <img src="../../patients/assets/img/record.svg" id="missed_radiotherapy_record" class="__MissedRadioRecord" style="height:100%; width:100%;" />  </div> 
												<!-- //icon-holder -->
                                                <div class="log_type col-md-9">Missed Radiotherapy</div> 
	  											  Nnamek
												  <div class="log_type col-md-12 text-right">
													<button class="btn text-success editRadiotherapyRecord">Edit</button>
													<button class="btn text-danger deleteRadioTherapyRecord">Delete</button>
												</div>
                                        </div> 
										<!--//app-card -->
							<!-- =================================== THE LOGGED ITEMS ===================================================== /- -->


                                </div> <!-- //row-->

                                <div class="row my-auto mx-auto ChemotherapySection" style="display:none;">
                                   <h5 class="h5_heading_text">Log Missed Chemotherapy</h5> 
                                   <p class="log_type"> Click on any of the options below </p>
                                    <form class="logMissedChemoForm col-12">
									       <div class="custom-control custom-checkbox d-flex justify-content-start">
                                                <div class="round mx-4">
                                                    <input type="checkbox" class="custom-control-input no_treatment give_consent" name ="no_treatment" value="no_treatment" id="checkbox_2" />  
                                                    <label for="checkbox_2"></label>
                                                </div>
                                                <label class="left_heading-text" style=""> No Treatment </label>
                                            </div> 

                                            <div class="custom-control custom-checkbox d-flex justify-content-start">
                                                <div class="round mx-4">
                                                    <input type="checkbox" class="custom-control-input missed_treament give_consent" name ="missed_treament" value="missed_treament" id="checkbox_3" />    
                                                    <label for="checkbox_3"></label>
                                                </div>
                                                <label class="left_heading-text" style="">Missed Treatment</label>
                                            </div> 
											<div class="next__Missed"></div>
                                    </form>
                                </div><!--//logMissedChemoForm Cotainer-->

								<!--//logMissedRadiotherapyForm Cotainer--> 
                                <div class="row my-auto mx-auto radiotherapySection" style="display:none;">
                                   <h5 class="h5_heading_text">Log Missed Radiotherapy</h5> 
                                   <p class="log_type"> Click on any of the options below </p>
                                    <form class="logMissedRadioTherapyForm col-12">
									       <div class="custom-control custom-checkbox d-flex justify-content-start">
                                                <div class="round mx-4">
                                                    <input type="checkbox" class="custom-control-input no_treatment give_consent radio_consent" name ="no_treatment" value="no_treatment" id="checkbox_4" />  
                                                    <label for="checkbox_4"></label>
                                                </div>
                                                <label class="left_heading-text" style=""> No Treatment </label>
                                            </div> 

                                            <div class="custom-control custom-checkbox d-flex justify-content-start">
                                                <div class="round mx-4">
                                                    <input type="checkbox" class="custom-control-input missed_treament give_consent radio_consent" name ="missed_treament" value="missed_treament" id="checkbox_5" />    
                                                    <label for="checkbox_5"></label>
                                                </div>
                                                <label class="left_heading-text" style="">Missed Treatment</label>
                                            </div> 
											<div class="next__Radio__Missed"></div>
                                    </form>
                                </div><!--//logMissedRadiotherapyForm Cotainer-->

                            </div><!--//log_symptom-->
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

         // __LogMissed__holder  log_missed_chemo  log_missed_radiotherapy  log_missed__home ChemotherapySection
         $(document).on("click", ".__LogMissed__holder",function(e){
                let id_section = $(this).find(".__LogMissed").attr("id");
                if(id_section=="log_missed_chemo"){
                    $(".log_missed__home").hide();
                    $(".ChemotherapySection").show();
                }else if(id_section=="log_missed_radiotherapy"){
                    // do sth else here
					$(".log_missed__home").hide();
					$(".radiotherapySection").show();
                }
         });


 		// Handles the selection Options for Chemodtherapy
		 $(document).on("change", ".give_consent",function(e){
			let id_section = $(this).attr("id");
			$("input [type=checkbox]").attr("checked",false);
			$(this).attr("checked",true);
			if(id_section=="checkbox_2" && $("#"+id_section).is(":checked")){
				$(".next__Missed").html(`<div class="result"></div>
										  <div class="text-center my-4">
											<button type="submit" class="btn btn-primary btn-block text-center">
													<span> Save </span> 
													<img src="../assets/img/arrow_.svg" class="mx-2"/> 
											</button>
										</div>`);
			}else if(id_section=="checkbox_3" && $("#"+id_section).is(":checked")){
				$(".next__Missed").html(`<div class="form-group mb-3 mt-4">
												<label class="text_input_label" for="tired">Reason for missed treatment</label>
												<textarea name="missed_treatment_reason" placeholder="Type your reason here:" class="form-control form-control-lg missed_treatment_reason"></textarea>
											</div> 
											<div class="result"></div>
											<div class="text-center my-4">
												<button type="submit" class="btn btn-primary btn-block text-center">
														<span> Save </span> 
														<img src="../assets/img/arrow_.svg" class="mx-2"/> 
												</button>
											</div>`);
			}else{
				$(".next__Missed").html(``);
			}
			

		 });

		 // Handles the selection Options for Radiotherapy
		 $(document).on("change", ".radio_consent",function(e){
			let id_section = $(this).attr("id");
			$("input [type=checkbox]").attr("checked",false);
			$(this).attr("checked",true);
			if(id_section=="checkbox_4" && $("#"+id_section).is(":checked")){
				$(".next__Radio__Missed").html(`<div class="result"></div>
				                                    <div class="text-center my-4"> 
													<button type="submit" class="btn btn-primary btn-block text-center">
															<span> Save </span> 
															<img src="../assets/img/arrow_.svg" class="mx-2"/> 
													</button> </div>`);
			}else if(id_section=="checkbox_5" && $("#"+id_section).is(":checked")){
				$(".next__Radio__Missed").html(`<div class="form-group mb-3 mt-4">
													<label class="text_input_label" for="tired">Reason for missed treatment</label>
													<textarea name="missed_treatment_reason" placeholder="Type your reason here" class="form-control form-control-lg missed_treatment_reason"></textarea>
												</div>  
												<div class="form-group mb-3 mt-4">
													<label class="text_input_label" for="tired">Change in Treatment Schedule</label>
													<textarea name="new_treatment_schedule" placeholder="Type here" class="form-control form-control-lg new_treatment_schedule"></textarea>
												</div> 
												<div class="result"></div>
												<div class="text-center my-4">
													<button type="submit" class="btn btn-primary btn-block text-center">
															<span> Save </span> 
															<img src="../assets/img/arrow_.svg" class="mx-2"/> 
													</button>
												</div>`);
			}else{
				$(".next__Radio__Missed").html(``);
			}
			

		 });

		 // Covert Serialzed FOrm Input to Object
		 function converToOjbect(formData){
			    let data = formData.split("&"); 
				var obj  = {};
				for(var key in data) { obj[data[key].split("=")[0]] = data[key].split("=")[1]; }
				return obj;
		 }

		 //logMissedRadiotherapyForm    logMissedChemoForm
		 $(document).on("submit",".logMissedRadiotherapyForm",function(evt){
			evt.preventDefault();
			let formData    = $(this).serialize();
            let dataObject  = converToOjbect(formData); 			
			console.info(dataObject); 
			let $_this =$(this);
				$_this.find('button:submit').attr("disabled","disabled");  
				$_this.find('div.result').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');  

			      fetch('../../api/patients/treatment_interuption/radiotherapy.php', {
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



		 $(document).on("submit","logMissedChemoForm",function(evt){
			evt.preventDefault();
			let formData    = $(this).serialize();
            let dataObject  = converToOjbect(formData); 			
			console.info(dataObject); 
			let $_this =$(this);
				$_this.find('button:submit').attr("disabled","disabled");  
				$_this.find('div.result').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');  

			      fetch('../../api/patients/treatment_interuption/chemotherapy.php', {
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
	<!--Start of CHAT APPLIACTION HERE-->


</body>
</html> 

