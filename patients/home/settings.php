<?php require_once("../../top.php");?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Patient - Treatment</title>
    
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
	  pre{
		font-family: Inter !important;
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
		.danger_message, .reminder_danger_message,.edit_danger_message,.delete_danger_message{
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
		 
		.success_message, .reminder_success_message, .edit_success_message,.delete_success_message{
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
			color:#2A2F9E;
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

		/* .togleView{
			cursor: pointer;
			z-index:4999;
		} */
	</style>
	

</head> 

<body class="app"> 
	<div class="success_message m_alert" style="display:none;">
		<img src="../assets/img/success_message.svg" alt="info"/>
		<div class="msg mx-1">
			<h6>Success!</h6>
			<p>Your Password was successfully changed.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  

	<div class="danger_message m_alert" style="display:none;">
		<img src="../assets/img/error_message.svg" alt="info"/>
		<div class="errmsg mx-1">
			<h6>Something went wrong</h6>
			<p>Your Password was not successfully changed. Please try again.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  

    <!-- Alerts for time Reminder setters -->
	<div class="reminder_success_message m_alert" style="display:none;">
		<img src="../assets/img/success_message.svg" alt="info"/>
		<div class="msg mx-1">
			<h6>Success!</h6>
			<p class="reminder_succ_msg">
				You have set a daily reminder to log symptoms at <span class="reminderTime"></span>
			</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  

	<div class="reminder_danger_message m_alert" style="display:none;">
		<img src="../assets/img/error_message.svg" alt="info"/>
		<div class="errmsg mx-1">
			<h6>Something went wrong</h6>
			<p>Reminder was not set.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div> 

    <!-- Alerts for time Reminder Edit  -->  
	<div class="edit_success_message m_alert" style="display:none;">
		<img src="../assets/img/success_message.svg" alt="info"/>
		<div class="msg mx-1">
			<h6>Success!</h6>
			<p class="reminder_succ_msg">Your changes has been saved! </p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  

	<div class="edit_danger_message m_alert" style="display:none;">
		<img src="../assets/img/error_message.svg" alt="info"/>
		<div class="errmsg mx-1">
			<h6>Something went wrong</h6>
			<p>Reminder was not set.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  
	
	
    <!-- Alerts for time Reminder Delete  -->
	<div class="delete_success_message m_alert" style="display:none;">
		<img src="../assets/img/success_message.svg" alt="info"/>
		<div class="msg mx-1">
			<h6>Success!</h6>
			<p class="reminder_succ_msg">Reminder Successfully Deleted.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  

	<div class="delete_danger_message m_alert" style="display:none;">
		<img src="../assets/img/error_message.svg" alt="info"/>
		<div class="errmsg mx-1">
			<h6>Something went wrong</h6>
			<p>Log Medication Reminder was not deleted.</p>
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
		            <div class="app-utilities col-auto d-flex justify-content-center align-items-center">  
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
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem" id="security" style="border-radius:8px !important;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/security_lock.svg" class="" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9"> Security </div>
                                        </div><!--//app-card-->
                                    </div><!--//col-->
                                    
                                    <div class="col-6 box" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem" id="reminder" style="border-radius:8px !important;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/reminder_calendar.svg" class="" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9">Reminder</div>
                                        </div><!--//app-card-->
                                    </div><!--//col--> 
                                </div> <!-- //row-->  
                                <!--  Over lapping cards row-->
                                <div class="row links">
                                    <div class="col-12 box"> 
										<h6 class="link"><a href="mailto:info@prosecare.com" class="link">Contact Us</a></h6>
										<h6 class="link"><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal" data-bs-whatever="@mdo" class="link">Privacy Policy</a></h6>
										<h6 class="link"><a href="#" data-bs-toggle="modal" data-bs-target="#TCModal" data-bs-whatever="@mdo"class="link">Terms & Conditions</a></h6> 
                                    </div><!--//col--> 
                                </div> <!-- //row-->  

																		  
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
	<div class="modal-content">
	 <div class="modal-header">
	<h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>
	<div class="modal-body">
<pre>
<h2>PROSEcare PRIVACY POLICY </h2>
<h5>INTRODUCTION</h5>
This Privacy Policy is intended to describe to visitors and users (hereinafter referred to as “users”, “you”) 
of our websites, web applications, and other online services to which this Privacy Policy is posted 
(collectively, our "Services" or “Services Platforms”) how personal data is collected, used, stored, 
and disclosed by PROSECare, (hereinafter referred to as "PROSECare" "we," "us," and "our"); how such 
data may be used and with whom it may be shared and the choices relating to such uses and disclosure. 
We respect your privacy, and we want you to understand how we may collect personal data about you 
through our Services platforms and how that information may be used, maintained, and in some cases shared. 
This Privacy Policy lays out the privacy practices and policies governing the use of our Services. 
By using our Services, you are accepting the practices and policies described in this Privacy Policy 
and you consent to the collection, use, transfer, and disclosure of the data following this Privacy 
Policy and applicable laws. 
All data collected through the use of our Services shall be employed solely for purposes of providing 
the best services to the users. This Privacy Policy is part of our Terms of Use. 
By using our Services, you agree to all the terms stated in this Privacy Policy; if you do not agree 
with any of these terms, do not access or otherwise use our Services or any information contained therein. 


<h5>APPLICATION OF THIS PRIVACY POLICY</h5>
This Privacy Policy applies to your use of our Services. You may access or use our Services through a desktop, 
laptop, mobile phone, tablet, or other electronic devices. 


<h5>INFORMATION WE COLLECT</h5>
<strong>a. Information You Provide Us</strong>
Generally, you can visit our Services Platform without any requirement of your information, 
however, to access the varieties of Services provided, you are required to register for a PROSEcare account. 
When you register for a PROSEcare account or submit an inquiry via our Services Platforms, we may collect
personal data from you. The personal data collected includes; full name, email address, phone number, 
date of birth, gender, profile picture, cancer type, professional license numbers, medical records, and 
other information that identify you (collectively referred to as "Personal Information" of “Personal Data”). 
You are also required to create a login profile for your PROSEcare account with a username and password, as 
generated by you. By providing your Personal Information to us, you expressly agree to our collection, use,
storage, and disclosure of such information as described in this Privacy Policy and under the extant Data 
Protection Laws of the Federal Republic of Nigeria. 

<strong>b. Information Automatically Collected </strong>
We (or our service providers acting on our behalf) may collect information about your use of our Services. 
This information may include Personal Information as well as statistical information and Analytics. 
Some Analytics may be correlated with Personal Information. When Analytics are, directly or indirectly, 
associated or combined with Personal Information, such Analytics will be considered Personal Information 
for purposes of this Privacy Policy. Information that we automatically collect in connection with your 
access or use of our Services may include: Device Information: We may collect Device-specific information 
(such as hardware model, operating system version, unique device identifiers, and mobile network information, 
including your mobile phone number). We may associate your Device identifiers or mobile phone number 
with your PROSEcare account. 
Log Information: We may record or log information from your devices, software, and your activity in 
accessing or using our Services. This information may include: The Device's Internet Protocol ("IP") address,
identification numbers associated with your Devices, device event information, such as crashes, system activity,
and hardware settings, location preferences, date and time stamps of transactions, System configuration information, 
and other interactions with our Services. 

<strong>c. Information Collected Through Cookies and Similar Technologies </strong>
We use cookies to personalize our Services for you and to collect aggregate information about the usage of our Services. 
Cookies are a text file or other local storage identifier provided by your browser or associated applications. 
We use cookies for record-keeping purposes and to enhance the quality of your use of our Services. 
The cookies assign random, unique numbers to your Devices to enable our systems to recognize your 
Devices and to allow us to see how you use our Services. The cookies we use in connection with our 
Services include: Session cookies: Session cookies are temporary cookies that expire and are 
automatically erased whenever you close your browser window. We use session cookies to grant users 
access to content and to enable actions they must be logged into their PROSEcare account to perform. 
Persistent cookies: Persistent cookies usually have an expiration date in the distant future and remain 
in your browser until they expire or you manually delete them. We use persistent cookies to better 
understand usage patterns so we can improve our Services. For example, we may use a persistent cookie 
to associate you with your PROSEcare account or to remember your choices for our Services. Third-party 
cookies: We permit certain third parties to place cookies through our Services to provide us with better 
insights into the use of our Services and user demographics and to advertise our Services to you. 
These third parties may collect information about your online activities over time and across different 
websites when you access or use our Services. For example, we utilize Google Analytics to analyze usage 
patterns for our Services. Google Analytics generates a cookie to capture information about your use of 
our Services, which Google uses to compile reports on website activity for us and to provide other related 
services. Google may use a portion of your IP address to identify its cookie, but this will not be associated
with any other data held by Google. By accessing or using our Services, you consent to the placement of cookies 
on your Devices as described in this Privacy Policy. If you prefer not to receive cookies through our Services, 
you may control how your browser responds to cookies by changing the privacy and security settings of your web 
browser. Unless you set your browser settings to refuse all cookies, our system may issue cookies when you access
or use our Services. If you set your browser settings to refuse all cookies, the performance of certain features 
of our Services may be limited or may not work at all. 

<h5>USE OF INFORMATION</h5>
The following describes how we use the information we collect from you: 
1. We may use Analytics from the Personal Information provided by you for research and commercial
   purposes, such as to improve our Services.

2. We may use your email address to respond to your inquiries and to provide you with information 
   about our Services. You may elect not to receive promotional emails from us either by 
   "unsubscribing" to an email you receive from us or by contacting us as indicated below. 
   If you unsubscribe from receiving emails from us, we may still send you non-promotional emails, 
   such as emails about your PROSEcare account or our ongoing business relations, unless you 
   withdraw your consent to receive electronic communications as provided in our Terms of Use. 


<h5>REGISTRATION</h5>	
	Users are required to register for our Services using correct and accurate personal data. 
	During the registration process, your current mobile phone number will be requested, and 
	once you input your phone number, you agree to receive text messages 
	and phone calls (from us or our third-party providers). 
	We may request that you grant us access to your phone address book to allow access 
	to certain services. Your acceptance of this request will grant us access to your 
	phone address book. 


<h5>GENERAL PROVISIONS REGARDING AGE REQUIREMENTS</h5>
	You must be at least 18 years old to use our Services. By using our services, you represent, 
	acknowledge, and agree that you are at least 18 years of age. 


<h5>HOW WE SHARE INFORMATION</h5>
	Generally, we do not share your Personal Information with (1) other health institutions, 
	Research institutions, for joint marketing purposes; (2) affiliated companies for their 
	everyday business purposes; or (3) any third parties so they can market to you. 
	We may share your Personal Information with unaffiliated third parties: 
	(1) If you request or authorize it; 
	(2) If the information is provided to help complete a transaction for you; 
	(3) If the information is provided to: (a) comply with applicable laws, rules, regulations, 
	    -governmental requests, court orders, or subpoenas; (b) enforce our Terms of Use or other 
		 agreements; or (c) protect our rights, property, or safety or the rights, property, or 
		 safety of our users or others; 
	(4) If the disclosure is done as part of a purchase, transfer, or sale of services or assets 
	    (e.g., if substantially all of our assets are acquired by another party, your Personal 
		Information may be one of the transferred assets); 
	(5) If the information is provided to our third-party service providers to perform functions on our behalf; 
	(6) As permitted by applicable law or otherwise described in this Privacy Policy. 


<h5>DEVICES AND SOFTWARE</h5>	
	You must provide certain devices, software, and data connections to use our Services, 
	which we otherwise do not supply. For as long as you use our Services, you consent to 
	downloading and installing updates to our Services as requested on our Services Platforms. 
	FEES AND TAXES
	You are responsible for all carrier data plans and other fees and taxes associated with 
	your use of our Services. All procedures of payment for any services where applicable 
	must be followed including applicable taxes. 


<h5>OPT-OUT RIGHTS</h5>
	If you do not wish to receive offers or other notices from us in the future, you can "opt-out" 
	by contacting us as indicated at the end of this Privacy Policy or by following the "unsubscribe" 
	instructions in any communication you receive from us. Please be aware that you are not able to 
	opt out of receiving communications about your PROSEcare account or related transactions with us. 


<h5>ACCESSING YOUR INFORMATION</h5>
	You must notify us of any change in your Personal Information by updating your PROSEcare 
	account profile through our Services. Any changes will affect only future uses of your 
	Personal Information. Subject to applicable law, which might, from time to time, oblige 
	us to store your Personal Information for a certain period, we will respect your wishes 
	to correct inaccurate information. Otherwise, we will hold your Personal Information for 
	as long as we believe it will help us achieve our objectives as detailed in this Privacy 
	Policy. You may request that a copy of the personal information collected by us be sent 
	to you. Before sending you any Personal Information, we will ask you to provide proof of 
	your identity. If you are not able to provide proof of your identity, we reserve the right
	to refuse to send you any Personal Information. 


<h5>INFORMATION YOU SHARE SOCIALLY OR VIA OUR SERVICES CHAT PLATFORMS</h5>
	Our Services may allow you to connect and share your actions, comments, content, 
	and information publicly or with friends. We are not responsible for maintaining 
	the confidentiality of any information you share publicly or with friends. 
	Our Services may also allow you to connect with us on, share on, and use 
	third-party websites, applications, and services. Please be mindful of your 
	personal privacy needs and the privacy needs of others, as you choose whom to 
	connect with and what to share and make public. We cannot control the privacy 
	or security of information you choose to make public or share with others. 
	We also do not control the privacy practices of third parties. 
	Please contact those sites and services directly if you want to learn 
	about their privacy practices. 


<h5>SECURITY</h5>
	PROSEcare is committed to securing the data of its users and keeping same confidential. 
	Our services are protected by Secure Sockets Layer (SSL) and the database on the website 
	is not publicly accessible. In addition, we take steps to protect all user data we collect 
	against any unauthorized access. However, we cannot guarantee the absolute protection of 
	the personal data of users. You also play a role in protecting your Personal Information 
	and must put reasonable effort into protecting same. You are required to safeguard your 
	username and password for your PROSEcare account. Under no condition should you share your 
	password with others. PROSECare shall not be responsible for any fraud or losses that may 
	be occasioned as a result of any attempt at sharing passwords. Any instruction received by 
	us through your PROSECare account login information will be considered as an authorized 
	instruction from you. You agree to notify us immediately of any unauthorized use of your 
	PROSEcare account or any other breach of security. We reserve the right, in our sole 
	discretion, to refuse to provide our Services, terminate PROSECare accounts, and remove 
	or edit content. 


<h5>LINKS TO THIRD-PARTY WEBSITES</h5>
This Privacy Policy only applies to our Services. 


<h5>CHANGES TO OUR PRIVACY POLICY</h5>
	Subject to applicable law, we may revise this Privacy Policy at any time and 
	our sole discretion. When we revise this Privacy Policy, we will post the revised 
	version via our Services and will update the date at the top of this Privacy Policy. 
	The revised Privacy Policy will be effective upon posting via our Services, unless 
	otherwise set forth therein or as otherwise required by applicable law. 
	You are free to decide whether or not to accept a revised version of this Privacy 
	Policy, but accepting this Privacy Policy, as revised, is required for your continued 
	access or use of our Services.If you do not agree to the terms of this Privacy Policy 
	or any revised version of this Privacy Policy, your sole recourse is to terminate your 
	access and use of our Services. Except as otherwise expressly stated by us, your access 
	and use of our Services are subject to the version of this Privacy Policy in effect at 
	the time of access or use. 


<h5>GOVERNING LAW AND DISPUTE RESOLUTION</h5>
	By choosing to make use of our services, you agree that any dispute over privacy 
	or the terms contained in this Privacy Policy will be governed by Nigerian law. 
	PROSEcare shall apply its best endeavors to amicably settle any dispute or 
	difference of opinion that may arise from or in connection with this Privacy 
	Policy through mutual discussion. In the unlikely event, it is unable to 
	resolve the dispute through mutual discussion, the dispute or difference 
	of opinion shall be referred to as Arbitration. The parties shall write 
	to any internationally recognized body seeking the appointment of an 
	independent Arbitrator. Such independent Arbitrator shall be charged 
	with the responsibility of resolving the said dispute and the Arbitrator’s 
	fees shall be borne equally by both parties. 


<h5>How can I contact PROSEcare?</h5>
	If you have any questions, comments, or concerns regarding these Terms 
	or the Services, please contact us at info@prosecare.com, +234 8147700146

</pre> 
											
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>
<!--  End of the Privacy Policy -->




<div class="modal fade" id="TCModal" tabindex="-1" aria-labelledby="TCModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
	<div class="modal-content">
	 <div class="modal-header">
	<h5 class="modal-title" id="TCModalLabel">Terms and Conditions</h5>
	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>
	<div class="modal-body">
<pre>
<h4>PROSEcare TERMS AND CONDITIONS</h4> 

<h5>INTRODUCTION</h5>
These terms and conditions (hereinafter referred to as “Terms” or “Agreement”) govern the use of the 
“Services” or “Service Platforms” provided by PROSEcare (hereinafter referred to as “PROSEcare”, “we” or “us”). 
The Services are provided through PROSEcare web-app and related websites (including the mobile-optimized versions 
of such website, the “Site”). As used in these Terms, ‘you’ or ‘users’ refers to individuals using the Services. 
The Terms explain how you are permitted to use the Services provided by PROSEcare. By using the Services and/or 
by clicking the “I Agree” button, you unconditionally agree to follow and be bound by these Terms and our Privacy Policy. 
If you do not agree to be bound by and comply with all of the terms of this Agreement, you may not use our Service. 

<h5>MODIFICATIONS</h5>
We reserve the right to update or modify this Agreement at any time. 
By continuing to use the Services after any such changes, you agree to follow 
and be bound by this Agreement as changed. We also reserve the right to discontinue 
the use of our Services at any time without notice. We will not be liable to you or 
any third party should we exercise our right to modify or discontinue the Services. 
In addition, certain features of the Services may be subject to additional terms of use. 
By using such features, or any part thereof, you agree to be bound by the additional terms 
of use applicable to such features. If any of the additional terms of use governing such 
area conflict with these Terms, the additional terms will govern. 

<h5>GENERAL PROVISIONS REGARDING USE AND AGE REQUIREMENT</h5>
The Services provided by PROSEcare are available only to users who are at least 18 years old. 
By accessing and using the Services, you shall ensure that:
All registration information you submit is truthful and accurate; 
You will maintain the accuracy of such information;
Your use of the Services will comply with and does not violate any applicable law, 
regulation, order, or guideline;

<h5>VISITORS AND REGISTERED USERS</h5>
You need not register with PROSEcare to simply visit and view the Service platforms, 
to browse and see the partial, publicly accessible information on the Site. 
However, to access the Services offered on and through the Service platforms, 
you must register and create an account with PROSEcare. 

<h5>PASSWORD RESTRICTED AREAS OF THIS SITE</h5>
Once you have created your account, you are responsible for maintaining the confidentiality 
of your account password, and you are responsible for all activities that occur using your Password. 
You agree not to share your Password, let others access or use your Password or do anything else that 
might jeopardize the security of your Password. You agree to notify PROSEcare if your account Password 
on the PROSEcare Service platform is lost, stolen, if you are aware of any unauthorized use of your 
Password on this Site or if you know of any other breach of security to this Site. You are solely 
responsible for any use of your account and all activities that occur under or in connection with it. 
All the information that you provide when registering for an account and otherwise through the Site 
must be accurate, complete, and up to date. You agree not to register for an account on behalf of 
an individual other than yourself, or register for an account on behalf of any group or entity 
unless you are authorized to bind such person, group, or entity to these Terms. By registering 
another person, group or entity you hereby represent that you are authorized to do so. Individuals 
and/or entities whose access to the use of the Services have previously been terminated by PROSEcare 
may not register for a new account, nor may designate other individuals to use an account on its or your behalf. 

<h5>THIRD-PARTY SITES</h5>
The Service platforms will not be linked to other websites that are not PROSEcare sites (collectively, “Third-Party Sites”). 

<h5>PRIVACY</h5>
In the course of accessing and/or using our Services, we may obtain information about you, or you may be required to provide 
certain information to us. All uses of your information will be treated following our Privacy Policy, which forms an integral 
part of these Terms. If you use the Services, and/or if you register for an account, you are accepting our Privacy Policy, as 
may be amended from time to time. If you do not agree to have your information used in any of the ways described in the Privacy 
Policy, you must discontinue the use of the Services. 

<h5>NOTICE OF COPYRIGHT INFRINGEMENT</h5>
If you believe that there is any form of Copyright infringement by PROSEcare, 
please reach out to our management. Where PROSEcare receives notice of any form of infringement, 
PROSEcare shall investigate such alleged Copyright Infringement. PROSEcare is a responsible 
Company and shall not be involved in any Copyright Infringement. If there is any Copyright 
Infringement, PROSEcare shall investigate the alleged Copyright Infringement and shall ensure 
that the alleged offender is duly sanctioned. 

<h5>USERS RESPONSIBILITY</h5>
If you submit any information to us through our service platforms, you shall ensure that such information is 
not confidential and that you have all necessary permission to submit or otherwise make available such information. 
You further agree that: 
You will not reproduce, duplicate, copy, sell, resell, or exploit the Services, its Content, its software, or 
any portion of any of the foregoing; 
You will not use the Services for any purpose in violation of local, state, national or international laws; 
You will not solicit another person’s password or personal information under pretenses; 
You will not impersonate another person or entity or otherwise misrepresent your affiliation with a person or entity, 
and/or use or access another user’s account or password without permission; 
You will not violate the legal rights of others, including defaming, abuse, stalking, or threatening users; 
You will not infringe the intellectual property rights, privacy rights, or moral rights of any third party; 
You will not post or transmit any Content that is (or you reasonably believe or should reasonably believe to be) illegal, 
fraudulent, or unauthorized, or furthers such activity, or that involves (or you reasonably believe or should reasonably 
believe to involve) any stolen, illegal, counterfeit, fraudulent, pirated, or unauthorized material; 
You will not publish falsehoods or misrepresentations, including for any medical or health information; and 
You will not post or transmit any Content that is (or reasonably should be understood to be) libelous, defamatory, 
obscene, offensive (including material promoting or glorifying hate, violence, bigotry, or otherwise inappropriate 
to the community ethos of the Service). 
You agree not to interfere or attempt to interfere with the proper working of the Service or to disrupt the operations 
or violate the security of the Service. Violations of system or network operation or security may result in civil or 
criminal liability. ou agree not to discuss or incite illegal activity.
This list of prohibitions is not exhaustive as PROSEcare reserves the right to 
(a) terminate access to your account, your ability to post to this Service platform, and 
(b) refuse, delete or remove any Submissions; with or without cause and with or without 
notice, for any reason or no reason, or for any action that PROSEcare determines is 
inappropriate or disruptive to the services or any other user of this Services. 
PROSEcare may report to law enforcement authorities any actions that may be illegal, 
and any reports it receives of such conduct. 

<h5>TECHNOLOGY & SUPPORT</h5>
We do not warrant or guarantee that the Service platforms will function with your mobile or computing device or be 
compatible with the hardware or software on any particular device. Information will be transmitted over a medium 
that will be beyond our control and location; multiple factors, including network availability, may affect alert 
or notification delivery or otherwise interfere with the operation of the Services. Without limiting the foregoing, 
we, and our licensors make no representations or warranties about the availability, accuracy, reliability, 
completeness, quality, performance, suitability, or timeliness of the Services, Content, including software, 
text, graphics, links, or communications provided on or through the use of the Service platforms. 
Although we take reasonable measures to keep the Service platforms free of viruses, worms, Trojan horses, or other 
code that contain destructive properties, we do not warrant or guarantee that files available for downloading through 
the Service will be free of such contaminations. 

<h5>TERMINATION</h5>
This Agreement is effective until terminated by either you or us. You may terminate this Agreement at any time, 
provided you discontinue any further use of our Services. We may, in our sole discretion, terminate this Agreement 
and your access to any or all of the Services, at any time and for any reason where we discover or reasonably 
believe that you are in breach of the Terms stated herein. 

<h5>DISCLAIMER AND WARRANTIES</h5>
PROSEcare, for itself and its licensors, makes no express, implied, or statutory representations, warranties, 
or guarantees in connection with the Services, or any materials relating to the quality, suitability, truth, 
accuracy, or completeness of any information or material contained or presented on the service platforms, 
including without limitation the materials. unless otherwise explicitly stated, to the maximum extent permitted 
by applicable law, the service platforms, materials, and any information or material contained or presented on 
this service platform is provided to you on an “as is,” “as available” and “where-is” basis with no warranty of 
implied warranty of merchantability, fitness for a particular purpose, or non-infringement of third-party rights. 
PROSEcare does not provide any warranties against viruses, spyware, or malware that may be installed on your computer. 
PROSEcare engages the services of Consultants and as such, the Consultants engaged by PROSEcare are responsible for 
the quality of care the users receives. You agree and acknowledge that PROSEcare does not provide medical services or 
function as a Hospital, Clinic, or dispensary and that all consultations are provided by independent third (3rd) 
party Professionals. 

<h5>LIMITATION OF LIABILITY</h5>
	You agree to comply with all user responsibilities and obligations as stated in these Terms. 
	Non-enforcement or our failure to act concerning a breach of these Terms by you does not constitute consent or waiver, 
	and we reserve the right to enforce such term at our sole discretion. No waiver of any breach or default hereunder 
	shall be deemed to be a waiver of any preceding or subsequent breach or default. Nothing contained in this Agreement 
	shall be construed to limit the actions or remedies available to us concerning any prohibited activity or conduct. 
	We will upon the investigation of suspected violations of these Terms or illegal and inappropriate behavior through 
	the Service platforms notify and fully cooperate with any law enforcement investigation or court order directing us 
	to disclose the identity, behavior, or activities of any user believed to have violated this Agreement or to have 
	engaged in illegal behavior. 

<h5>GOVERNING LAW AND JURISDICTION</h5>
These Terms will be subject to and construed under the laws of the Federal Republic of Nigeria. 

<h5>ARBITRATION</h5>
	PROSEcare shall apply their best endeavors to settle any dispute or difference of opinion between them, 
	arising from or in connection with these terms amicably through mutual discussion. In the unlikely event that 
	parties are unable to resolve the dispute through mutual discussion, the dispute or difference of opinion shall 
	be referred to as Mediation. Both parties shall write to any internationally recognized body seeking the 
	appointment of an independent Mediator. Such independent Mediator shall be charged with the responsibility 
	of resolving the said dispute and the Mediator’s fees shall be borne equally by both parties. 

<h5>FORCE MAJEURE</h5>
	Notwithstanding anything herein to the contrary, PROSEcare shall not be liable for any losses arising out 
	of the delay or interruption of its performance of any obligations due to any act of God, governmental 
	authority, war, or any other cause beyond reasonable control. 
	THESE TERMS SHALL COMMENCE UPON THE DATE YOU FIRST ACCESS THE SERVICE PLATFORM. 

                                         
</pre> 
											
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>

<!--  End of Terms and condition -->


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
												<div class="input-group mb-3 pass_container">
												    <div class="input-group-prepend">
													    <span class="input-group-text border-right-0"><i class="fa fa-lock"></i></span>
												    </div> 
													<input type="password" class="form-control form-control-lg pwd currentPwd" name ="currentPwd"  Placeholder="Current Password" required />
													<div class="input-group-append togglerView">
													  <span class="input-group-text"><i class="fa fa-eye togleView"></i></span>
												    </div>
											  </div>
										</div>
										<div class="form-group">
											<small class="input_text_label">New Password</small>
												<div class="input-group mb-3 pass_container">
												    <div class="input-group-prepend">
													    <span class="input-group-text border-right-0"><i class="fa fa-lock"></i></span>
												    </div>
													<input type="password" class="form-control form-control-lg pwd newPwd" name ="newPwd"  Placeholder="Choose New Password" required />
													<div class="input-group-append togglerView">
													   <span class="input-group-text"><i class="fa fa-eye togleView"></i></span>
												    </div>
											</div>
										</div> 
										<div class="form-group">
											<small class="input_text_label">Confirm Password</small>
												<div class="input-group mb-3 pass_container">
												    <div class="input-group-prepend">
													    <span class="input-group-text border-right-0"><i class="fa fa-lock"></i></span>
												    </div>
													<input type="password" class="form-control form-control-lg pwd confirmPassword" name ="confirmPassword"  Placeholder="Confirm New Password" required />
													<div class="input-group-append togglerView">
													  <span class="input-group-text"><i class="fa fa-eye togleView"></i></span>
												   </div> 
											</div>
										</div> 

									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-block text-center changePasswordBtn" disabled>
											    <span>Change Password</span> <img src="../assets/img/arrow_.svg" class="mx-2"/> 
										</button>
									</div>
								</form><!--//auth-form-->   
   
							</div><!--//auth-main-col-->

							<div class="col-12 col-md-5 col-lg-8 setReminder_Container" style="display:none;margin-bottom:100px;">
							    <form class="py-4 my-4 addReminderForm">   
									<h5 class="text-center mb-4 reminder_heading">Set Reminder to Log Side Effects</h5> 
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
											    <span>Set Reminder</span>  <img src="../assets/img/arrow_.svg" class="mx-2"/> 
										</button>
									</div>
								</form><!--//auth-form-->    
   
							</div><!--//auth-main-col-->

							<!--  EDIT REMINDER SECTION -->
							<div class="col-12 col-md-5 col-lg-8 editReminder_Container" style="display:none;margin-bottom:100px;">
							    <form class="py-4 my-4 editReminderForm">   
									<h5 class="text-center mb-4 reminder_heading">Edit Reminder</h5> 
                                      <div class="form-group form_drug_input mb-1">
										<label class="text_input_label" for="edit_time">Time</label>  
												<select name="edit_time" class="form-control form-control-lg edit_time" id="edit_time">
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
											    <span> Save </span>  <img src="../assets/img/arrow_.svg" class="mx-2"/> 
										</button>
									</div>
								</form><!--//auth-form-->    
   
							</div><!--//auth-main-col-->

							<div class="col-12 col-md-5 col-lg-8 reminder_Container" style="display:none;margin-bottom:100px;">
								<div class="py-4 my-4 reminderList">   
									<h5 class="text-center mb-4 reminder_heading">Your Reminder(s)</h5> 
									<div class="reminderListContainer">

									</div>
								</div><!--//auth-form-->   
   
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
	<!-- <script src="assets/js/app.js"></script>  -->
	<!-- Dealing with the Password -->
	<script type="text/javascript">
        $(document).ready(function(){  

            let togleView  = document.querySelectorAll(".togglerView"); 
            togleView.forEach((el)=>{
              el.addEventListener("click",function(e){ 
                    $(this).find('span>i.togleView').toggleClass("fa-eye fa-eye-slash");
                    let atr = $(this).closest('div.input-group').find('input');
                    (atr.attr('type')==='text') ? atr.attr('type','password') : atr.attr('type','text');
                },false);
            }); 

            $(document).on("keyup",".confirmPassword, .newPwd", function(){
                let cp = $(".currentPwd").val();
                let p1 = $(".newPwd").val();
                let p2 = $(".confirmPassword").val(); 
                if((p1!==p2)){
                    $(".confirmPassword, .newPwd").css("border","1px solid red");
                    $(".changePasswordBtn").attr("disabled","disabled");
                }else{
                    $(".newPwd, .confirmPassword").css("border","1px solid green");
                    $(".changePasswordBtn").removeAttr("disabled");
                    
                }
            });


			$(document).on('keyup','.currentPwd', function(evt){
				evt.preventDefault(); 
				// ===========================================================// 
				let pwd  = $(".pwd").val(); 
				// ===========================================================//
				let data  = {pwd: pwd };     
				fetch('../../api/patients/verify_currentPassword.php', {
					method: "POST",
					body: JSON.stringify(data),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json); 
					if(json.msg == 'success'){
						$(".confirmPassword, .currentPwd").css("border","1px solid green");					
					}else{
						$(".confirmPassword, .currentPwd").css("border","1px solid red");
					}
				})
				.catch(err => console.log(err));

			});

			// Update Password
			$(document).on('submit','.changePasswordForm', function(evt){
				evt.preventDefault(); 
				$(this).find('button.changePasswordBtn').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
				// ===========================================================// 
				let cp = $(".currentPwd").val();
                let p1 = $(".newPwd").val();
                let p2 = $(".confirmPassword").val(); 
				// ===========================================================//
				let data  = {cp: cp,p1:p1,p2:p2 };     
				fetch('../../api/patients/updatePassword.php', {
					method: "POST",
					body: JSON.stringify(data),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json); 
					if(json.msg == 'success'){
						$(".success_message").show(2000);	
						$(this).trigger('reset');
						$(this).find('button.changePasswordBtn').html('<span>Change Password</span> <img src="../assets/img/arrow_.svg" class="mx-2"/>');				
					}else{
						$(".danger_message").show(2000);
						$(this).find('button.changePasswordBtn').html('<span>Change Password</span> <img src="../assets/img/arrow_.svg" class="mx-2"/>');
						console.log(json.msg);
					}
				})
				.catch(err => console.log(err));

			});

			// addReminderForm Add Reminder
			$(document).on('submit','.addReminderForm', function(evt){
				evt.preventDefault(); 
				$(this).find('button.setReminderBtn').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
				// ===========================================================// 
				let time = $(".time option:selected").text();  
				// ===========================================================//
				let data  = {__time:time};     
				fetch('../../api/patients/reminders/addReminders.php', {
					method: "POST",
					body: JSON.stringify(data),
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json); 
					if(json.msg == 'success'){  
						 $(".reminderTime").html(time);
						$(".reminder_success_message").show(2000);	
						$(this).find('button.setReminderBtn').html('<span>Set Reminder</span>  <img src="../assets/img/arrow_.svg" class="mx-2"/> ');				
					}else{
						$(".reminder_danger_message").show(2000);
						$(this).find('button.setReminderBtn').html('<span>Set Reminder</span>  <img src="../assets/img/arrow_.svg" class="mx-2"/> ');
						console.log(json.msg);
					}
				})
				.catch(err => console.log(err));

			});
			

			// When the ALERT close button is clickwd
			$(document).on("click",".close_btn",function(){
				$(this).closest("div.m_alert").slideUp(1000).hide(200);
			}); 

        });
    </script> 
	<script>
        $(document).ready(function(){ 

			// load reminders
			function checkReminders(){
				fetch('../../api/patients/reminders/getReminders.php', {
					method: "GET", 
					headers: {"Content-type": "application/json; charset=UTF-8"}
				})
				.then(response => response.json()) 
				.then((json)=>{
				    console.log(json);  
					if(json.msg.success == 'success' && json.msg.data.length>0){
						console.log(json.msg.data);
						let reminderData ='';
						json.msg.data.map((data)=>{
							reminderData += `<div class="app-card app-card-basic mb-1 d-flex align-items-center justify-content-between shadow-sm row " style="border-radius:8px !important;">
												<div class="py-1 col-md-3"> <img src="../../patients/assets/img/reminder_calendar.svg" id="missed_radiotherapy_record" class="__MissedRadioRecord" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
													<div class="log_type col-md-9">Logged Reminder</div> 
														<div class="log_type col-md-12 row">
																<label class="text-center col-md-12">${data.looged_time}</label>
																<div class="text-right col-md-12">
																	<button class="btn text-success editReminder" id="${data.id}" data-userId="${data.userId}">Edit</button>
																	<button class="btn text-danger deleteReminder" id="${data.id}" data-userId="${data.userId}">Delete</button>
																</div>
														</div>
											</div>`; 
						}); 
						reminderData+=`<button type="button" class="btnNewReminder text-center setNewReminderBtn"> <span>Set New Reminder</span> </button>`;
						$(".reminderListContainer").html(reminderData);	  
						$(".setReminder_Container").hide(10);				
					}else{ 
						$(".reminder_Container").html(`<div class="text-center my-4">
									    <h5 class="text-center mb-4 reminder_heading">You currently have no reminders</h5> 
										<button type="button" class="btnNewReminder text-center setNewReminderBtn">
											    <span>Set New Reminder</span>  
										</button>
									</div>`); 
						console.log(json.msg);
					}
				})
				.catch(err => console.log(err));
			}

			// SET NEW REMINDER
			$(document).on("click",".setNewReminderBtn",function(evt){
				evt.preventDefault();
				$(".reminder_Container").hide(10);
				$(".setReminder_Container").show(10);

			});


			// EDIT REMINDER editReminder
			$(document).on("click",".editReminder",function(evt){
				evt.preventDefault();
				 let id     = $(this).attr('id');
				 let userId = $(this).attr('data-userId');
				 console.log(id,userId);
				    $(".reminder_Container").hide(10);
					$(".setReminder_Container").hide(10);
					$(".editReminder_Container").show(10);
				   $('.editReminderForm').submit((evt)=>{ 				
						evt.preventDefault(); 
						$(this).find('button.setReminderBtn').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
						// ===========================================================// 
						let time = $(".edit_time option:selected").text();  
						// ===========================================================//
						let data  = {_time:time,id :id, userId :userId};   
						fetch('../../api/patients/reminders/editReminder.php', {
							method: "POST",
							body: JSON.stringify(data),
							headers: {"Content-type": "application/json; charset=UTF-8"}
						})
						.then(response => response.json()) 
						.then((json)=>{
							console.log(json); 
							if(json.msg == 'success'){
								$(".edit_success_message").show(2000);	
								$(".reminder_Container").show(10);
								$(".setReminder_Container").hide(10);
								$(".editReminder_Container").hide(10);
								$("#reminder").click(); // this will reload the reminders container 
								// checkReminders();
									$('.editReminderForm').find('button.setReminderBtn').html('<span> Save </span>  <img src="../assets/img/arrow_.svg" class="mx-2"/> ');
							}else{
								$(".edit_danger_message").show(2000);
								$('.editReminderForm').find('button.setReminderBtn').html('<span> Save </span>  <img src="../assets/img/arrow_.svg" class="mx-2"/> ');				
								console.log(json.msg);
							}
						})
						.catch(err => console.log(err));
					});
					 			
			});


			// DELETE REMINDER
			$(document).on("click",".deleteReminder",function(evt){
				evt.preventDefault(); 
				let id     = $(this).attr('id');
				let userId = $(this).attr('data-userId');
				console.log(id,userId);
				let data  = {_time:time,id :id, userId :userId};   
						fetch('../../api/patients/reminders/deleteReminder.php', {
							method: "POST",
							body: JSON.stringify(data),
							headers: {"Content-type": "application/json; charset=UTF-8"}
						})
						.then(response => response.json()) 
						.then((json)=>{
							console.log(json); 
							if(json.msg == 'success'){
								$(".delete_success_message").show(1000);
								$("#reminder").click(); // this will reload the reminders container 
							}else{
								$(".delete_danger_message").show(1000); 
								console.log(json.msg);
							}
						})
						.catch(err => console.log(err));
			});


            let tabsBox = document.querySelectorAll(".addItem");
                tabsBox.forEach((el)=>{
                    el.addEventListener("click",(e)=>{ 
                        $(".app-card").removeClass("activeTab");                 // remove highlighted mark on every other container
						$(e.target).closest(".app-card").addClass("activeTab"); // add highlight to current container
                        // e.path[2].classList.add("activeTab");	           // highlight this one that is clicked
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
								 checkReminders();					
						}
						
                    },false);
                });

				// add new drug

          $(document).on("click",".addNewDrug",function(e){
             $(this).closest("form").find(".form-group:last").
                append(`<div class="form-group form_drug_input mb-1">
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

