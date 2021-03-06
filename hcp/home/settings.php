<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Patient - Settings</title>
    
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
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- <script src="../assets/js/dncalendar.min.js"></script>  -->
	<style>
        .removeDrugItem{
            cursor:pointer;
        }
        .btn-outline-primary {
            color: #8D2D91 !important;
            border-color: #8D2D91 !important;
     }

    .btn-outline-primary:hover {
        color: #fff !important;
        background-color: #8D2D91 !important;
        border-color: #8D2D91 !important;
    }
	.active, .today{
			background: #8D2D91 !important;
			color:#fff !important;
			font-weight: 600 !important;
		}  

	   .app{ background: #f5d5f848 !important; }

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
          padding: 5px;
          font-size: 16px;
          line-height: 1;
          border: 0;
          border-radius: 5px;
          height: 34px;
          background: url('../assets/img/Forward.png') no-repeat right #fff !important;
          -webkit-appearance: none;
          background-position-x: 300px;
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
			margin: 28px 0px;
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

        .log_type{
            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 24px; 
            display: flex;
            align-items: center; 
            color: #948495; 
            /* flex: none;
            order: 1;
            flex-grow: 0; */
            /* margin: 0px 16px; */
        }
        .box{
            box-sizing: border-box;
            border: 10px solid transparent;
            background-clip:padding-box; 
        }
        .activeTab{
            background: #DEF0FF !important;
        }
		.link{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 16px;
			line-height: 22px;
			/* identical to box height, or 137% */
			display: flex;
			align-items: center; 
			/* Primary/500 */ 
			color: #BC5BBA; 
			/* Inside auto layout */ 
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 9px 0px;
		}
		.links{
			margin-top:150px;
		}

		.reminder_heading{
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
			margin: 36px 0px;
		}
		/* Alert Messages */
		.danger_message{
			display: flex; 
			justify-content: space-between;
			align-items: center;
			padding: 8px 24px; 
			position: absolute;
			width: 429px;
			height: 104px;
			right: 0;
			top: 39px;
			z-index: 9999;
			/* Info/9 */  
			background: #FDDFD4;
			border-radius: 15px; 
         }

		.success_message{
			display: flex; 
			justify-content: space-between;
			align-items: center;
			padding: 8px 24px; 
			position: absolute;
			width: 429px;
			height: 104px;
			right: 0;
			top: 39px;
			z-index: 9999;
			/* Info/9 */  
			background: #C6F9E8;
			border-radius: 15px;
		}

		.msg h6{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 16px;
			line-height: 22px;  
			color: #002B44; 
			/* Inside auto layout */ 
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 4px 0px;
		}

		.errmsg h6{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 16px;
			line-height: 22px;  
			color: #67062F;
			/* Inside auto layout */ 
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 4px 0px;
		}

		.msg p, .errmsg p{
			font-size: 12px;
		}
		.close_btn{ 
			cursor: pointer;
		}

		.btnNewReminder{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 8px; 
			width: 180px;
			height: 40px;  
			background: #DDDEFF; 
			box-shadow: -6px 14px 154px 26px rgba(141, 45, 145, 0.05);
			border-radius: 20px; 
			border: 0px; 
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 20px 0px;
		}
		.log_type{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 14px;
			line-height: 24px; 
			display: flex;
			align-items: center; 
			color: #2A2F9E; flex: none;
			order: 0;
			flex-grow: 0;
			margin: 4px 0px;
		}
	</style>
	

</head> 

<body class="app"> 
	<div class="success_message m_alert" style="display:non;">
		<img src="../assets/img/success_message.svg" alt="info"/>
		<div class="msg mx-1">
			<h6>Success!</h6>
			<p>Your Password was successfully changed.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  

	<div class="danger_message m_alert" style="display:non;">
		<img src="../assets/img/error_message.svg" alt="info"/>
		<div class="errmsg mx-1">
			<h6>Something went wrong</h6>
			<p>Your Password was not successfully changed. Please try again.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  
	
	

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
				            <a class="dropdown-toggle" id="user-dropdown-toggle"><img src="assets/images/user.png" alt="user profile"></a> 
			            </div><!--//app-user-dropdown--> 
						<!--//app-utility-item-->
			            <div class="app-utility-item mr-4">
				            <a href="?u=logout" title="Logout">Logout </a>
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
							<a class="active nav-link d-flex justify-content-start align-items-center"href="settings.php">
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
				    <div class="col-12 col-lg-7" style="min-height:100vh; overflow-y: hidden;">
					    <div class="app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
							<h1 class="h1">Settings</h1>
							<!-- <p class="left_heading-text mx-1">Log your treatments here</p>  -->
                                <!--  Over lapping cards row-->
                                <div class="row">
                                    <div class="col-6 box " style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row" style="border-radius:8px !important;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/security_lock.svg" id="security" class="addItem" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9"> Security </div>
                                        </div><!--//app-card-->
                                    </div><!--//col-->
                                    
                                    <div class="col-6 box" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row" style="border-radius:8px !important;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/reminder_calendar.svg" id="reminder" class="addItem" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9">Reminder</div>
                                        </div><!--//app-card-->
                                    </div><!--//col--> 
                                </div> <!-- //row-->  
                                <!--  Over lapping cards row-->
                                <div class="row links">
                                    <div class="col-12 box"> 
										<h6 class="link"><a href="" class="link">Contact Us</a></h6>
										<h6 class="link"><a href="" class="link">Privacy Policy</a></h6>
										<h6 class="link"><a href="" class="link">Terms & Condition</a></h6> 
                                    </div><!--//col--> 
                                </div> <!-- //row-->  

                                <!--app-card--> 
						</div><!--//app-card--> 
				    </div><!--//col-->

				    <div class="col-12 col-lg-5">
					    <div class="app-card app-card-basic d-flex justify-content-center flex-column align-items-center shadow-sm" class="addItem" style="min-height:70vh; overflow-y: scroll;">
						    <div class="app-card-body px-4 py-2 log_begin_cotainer"> 
							    <div class="intro mb-4 text-center"> 
									<div class="my-2 mx-2">
										<img src="../assets/img/begin.svg" alt="info"/>
									</div><!--//icon-holder-->
									<br/>
									<a href="#start">Click on settings to begin.</a>
								</div>
						    </div><!--//app-card-body--> 
							
							<div class="col-12 col-md-5 col-lg-8 security_Container" style="display:none;margin-bottom:100px;">
                                    
								<form class="py-4 my-4 changePasswordForm">   
									<h5 class="auth-heading text-center mb-4 left_heading_text">Change Password</h5>		     
									 
									<div class="form-group">
											<small class="input_text_label">Current Password</small>
												<div class="input-group mb-3">
												    <div class="input-group-prepend">
													    <span class="input-group-text border-right-0"><i class="fa fa-lock"></i></span>
												    </div>
													<input type="password" class="form-control form-control-lg pwd currentPwd py-3 border-left-0 border-right-0" name ="currentPwd"  Placeholder="Current Password" required />
													<div class="input-group-append border-left-0">
													    <span class="input-group-text"><i class="fa fa-eye-slash togleView"></i></span>
												    </div>
											</div>
										</div>
										<div class="form-group">
											<small class="input_text_label">New Password</small>
												<div class="input-group mb-3">
												    <div class="input-group-prepend">
													    <span class="input-group-text border-right-0"><i class="fa fa-lock"></i></span>
												    </div>
													<input type="password" class="form-control form-control-lg pwd newPwd py-3 border-left-0 border-right-0" name ="newPwd"  Placeholder="Choose New Password" required />
													<div class="input-group-append border-left-0">
													   <span class="input-group-text"><i class="fa fa-eye-slash togleView"></i></span>
												    </div>
											</div>
										</div> 
										<div class="form-group">
											<small class="input_text_label">Confirm Password</small>
												<div class="input-group mb-3">
												    <div class="input-group-prepend">
													    <span class="input-group-text border-right-0"><i class="fa fa-lock"></i></span>
												    </div>
													<input type="password" class="form-control form-control-lg pwd confirmPassword py-3 border-left-0 border-right-0" name ="confirmPassword"  Placeholder="Confirm New Password" required />
													<div class="input-group-append border-left-0">
													  <span class="input-group-text"><i class="fa fa-eye-slash togleView"></i></span>
												   </div>
											</div>
										</div> 

									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-block text-center changePasswordBtn" disabled>
											    <span>Change Password</span> 
											    <img src="../assets/img/arrow_.svg" class="mx-2"/> 
										</button>
									</div>
								</form><!--//auth-form-->   
   
							</div><!--//auth-main-col-->

							<div class="col-12 col-md-5 col-lg-8 reminder_Container" style="display:none;margin-bottom:100px;">
                                    
								<form class="py-4 my-4 reminderForm">   
									<h5 class="text-center mb-4 reminder_heading">Set Reminder to Log Symptoms</h5> 
                                      <div class="form-group form_drug_input mb-1">
										<label class="text_input_label" for="time">Time</label>  
												<select name="time" class="form-control form-control-lg time" id="time">
													<option disabled selected>eg. 4:30pm</option>
													<option value="00:00">12.00 AM</option>
													<option value="00:30">12.30 AM</option>
													<option value="01:00">01.00 AM</option>
													<option value="01:30">01.30 AM</option>
													<option value="02:00">02.00 AM</option>
													<option value="02:30">02.30 AM</option>
													<option value="03:00">03.00 AM</option>
													<option value="03:30">03.30 AM</option>
													<option value="04:00">04.00 AM</option>
													<option value="04:30">04.30 AM</option>
													<option value="05:00">05.00 AM</option>
													<option value="05:30">05.30 AM</option>
													<option value="06:00">06.00 AM</option>
													<option value="06:30">06.30 AM</option>
													<option value="07:00">07.00 AM</option>
													<option value="07:30">07.30 AM</option>
													<option value="08:00">08.00 AM</option>
													<option value="08:30">08.30 AM</option>
													<option value="09:00">09.00 AM</option>
													<option value="09:30">09.30 AM</option>
													<option value="10:00">10.00 AM</option>
													<option value="10:30">10.30 AM</option>
													<option value="11:00">11.00 AM</option>
													<option value="11:30">11.30 AM</option>
													<option value="12:00">12.00 PM</option>
													<option value="12:30">12.30 PM</option>
													<option value="13:00">01.00 PM</option>
													<option value="13:30">01.30 PM</option>
													<option value="14:00">02.00 PM</option>
													<option value="14:30">02.30 PM</option>
													<option value="15:00">03.00 PM</option>
													<option value="15:30">03.30 PM</option>
													<option value="16:00">04.00 PM</option>
													<option value="16:30">04.30 PM</option>
													<option value="17:00">05.00 PM</option>
													<option value="17:30">05.30 PM</option>
													<option value="18:00">06.00 PM</option>
													<option value="18:30">06.30 PM</option>
													<option value="19:00">07.00 PM</option>
													<option value="19:30">07.30 PM</option>
													<option value="20:00">08.00 PM</option>
													<option value="20:30">08.30 PM</option>
													<option value="21:00">09.00 PM</option>
													<option value="21:30">09.30 PM</option>
													<option value="22:00">10.00 PM</option>
													<option value="22:30">10.30 PM</option>
													<option value="23:00">11.00 PM</option>
													<option value="23:30">11.30 PM</option>
												</select> 
									 </div>   
									 <div class="text-center my-4">
										<button type="submit" class="btn btn-primary btn-block text-center setReminderBtn">
											    <span>Set Reminder</span> 
											    <img src="../assets/img/arrow_.svg" class="mx-2"/> 
										</button>
									</div>
								</form><!--//auth-form-->   
   


								<form class="py-4 my-4 reminderForm">   
									<h5 class="text-center mb-4 reminder_heading">Your Reminder(s)</h5> 
									<div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row " style="border-radius:8px !important;">
                                        <div class="py-1 col-md-3"> <img src="../../patients/assets/img/reminder_calendar.svg" id="missed_radiotherapy_record" class="__MissedRadioRecord" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                            <div class="log_type col-md-9">Log Medication</div> 
												<div class="log_type col-md-12 text-right">
														<button class="btn text-success editRadiotherapyRecord">Edit</button>
														<button class="btn text-danger deleteRadioTherapyRecord">Delete</button>
												</div>
                                    </div><!--//app-card-->  
									 <div class="text-center my-4">
										<button type="submit" class="btnNewReminder text-center setNewReminderBtn">
											    <span>Set New Reminder</span>  
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
	<script>
        $(document).ready(function(){
             // // log_begin_cotainer  log_symptom_container
			// $(".log_begin_cotainer").slideUp(2000).hide();
			// $(".log_symptom_container").slideUp(2000).show(2000).css("zoom",0.88);      log_begin_cotainer
            let tabsBox = document.querySelectorAll(".addItem");
                tabsBox.forEach((el)=>{
                    el.addEventListener("click",(e)=>{ 
                        $(".app-card").removeClass("activeTab");  // remove highlighted mark on every other container
                        e.path[2].classList.add("activeTab");	 // highlight this one that is clicked
                        console.log(e.path);
						console.log(el.id);
						// check if the Id is the same as the one clicked
						if(el.id == "security"){
							     $(".reminder_Container").hide();
							     $(".log_begin_cotainer").hide();
								 $(".security_Container").show().css("zoom",0.88); 
						}
						if(el.id == "reminder"){
							     $(".security_Container").hide(); 
								 $(".log_begin_cotainer").hide();
								 $(".reminder_Container").show().css("zoom",0.88);						
						}
						
                    },false);
                });

				// add new drug

          $(document).on("click",".addNewDrug",function(e){
             $(this).closest("form").find(".form-group:last").
                append(`
                        <div class="form-group form_drug_input mb-1">
                           <label class="text_input_label" for="drug">Drug</label> 
                           <div class="input-group">
                                <input name="drug[]" type="text" id ="drug" class="form-control form-control-lg drug" placeholder="Drug name" required="required" />
                                <div class="input-group-append">
                                    <span class="input-group-text"> <span class="removeDrugItem text-danger">x</span></span>
                                </div>
                            </div>
                        </div>`
                    );
          });
          //  $( "li" ).last().css( "background-color", "red" );
          // Remove DrugItem Added
          $(document).on("click",".removeDrugItem", function(e){
              $(this).closest("div.form-group").slideUp(5000).remove();
          });
          
        });

	</script>



	<!-- Dealing with the Password -->
	<script type="text/javascript">
        $(document).ready(function(){  
            let togleView  = document.querySelectorAll(".togleView"); 

            togleView.forEach((el)=>{
              el.addEventListener("click",function(e){
                    $(this).toggleClass("fa-eye-slash fa-eye");
                    let atr = $(this).closest('div.input-group').find('input');
                    (atr.attr('type')==='text') ? atr.attr('type','password') : atr.attr('type','text');
                },false);
            }); 

            $(document).on("keyup",".confirmPassword, .newPwd", function(){
                let cp = $(".currentPwd").val();
                let p1 = $(".newPwd").val();
                let p2 = $(".confirmPassword").val();
                if((p1!==p2) && cp==''){
                    $(".confirmPassword, .newPwd").css("border","1px solid red");
                    $(".changePasswordBtn").attr("disabled","disabled");
                }else{
                    $(".newPwd, .confirmPassword").css("border","1px solid green");
                    $(".changePasswordBtn").removeAttr("disabled");
                    
                }
            });

			// When the ALERT close button is clickwd
			$(document).on("click",".close_btn",function(){
				$(this).closest("div.m_alert").slideUp(1000).hide(200);
			}); 

        });
    </script>





    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>  
	<script src="assets/js/bootstrap-datepicker.min.js"></script> 




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

