<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Patient</title>
    
    <!-- Meta mc-calendar.min.js-->
    <!-- Meta mc-calendar.min.js-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="PROSE">
    <meta name="author" content="Prose Care Dashboard">    
    <link rel="shortcut icon" href="../../patients/assets/img/logo.svg"> 
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    <!-- App CSS -->  
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<link href="../assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />    
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<style> 
        .btn-outline-primary {
            color: #8D2D91 !important;
                border-color: #8D2D91 !important;
        }

        .btn-outline-primary:hover {
            color: #fff !important;
            background-color: #8D2D91 !important;
            border-color: #8D2D91 !important;
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
          background: #CBB7CD;
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
		.h1{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 54px;
            /* identical to box height, or 135% */
            display: flex;
            align-items: center; 
            /* Grey/10 */ 
            color: #4A3A4B;
		}
		.h3{
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 28px;
            line-height: 38px;
            /* identical to box height, or 136% */
            display: flex;
            align-items: center;
            /* Grey/10 */
            color: #4A3A4B;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 0px 48px;
		}

		.left_heading-text{
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 32px;
            /* identical to box height, or 133% */
            display: flex;
            align-items: center;
            /* Grey/9 */
            color: #7A667B;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 24px 0px;
		}
		.text_input_label{
            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 24px;
            /* identical to box height, or 171% */ 
            display: flex;
            align-items: center; 
            /* Grey/8 */ 
            color: #948495; 
            /* Inside auto layout */ 
            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 0px 10px;
		} 
        .box{
            box-sizing: border-box;
            border: 2px solid transparent;
            background-clip:padding-box; 
        } 

        input,select{ font-size:16px !important;}
        .editBio a:hover{ color:#fff !important;}
        .profile{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 28px;
            line-height: 38px;
            /* identical to box height, or 136% */ 
            display: flex;
            align-items: center; 
            /* Grey/9 */ 
            color: #7A667B;
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
                                    <a href="../signIn" title="Settings">Logout </a>
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
                                    <a class="nav-link d-flex justify-content-start align-items-center" href="index.php">
                                        <span class="w-40">
                                        <img class="logo-icon" src="../assets/img/home.svg" alt="logo"  style="width: 100%; height: 100%;"/> 
                                        </span>
                                        <span class="nav-link-text w-60 mx-3">Home</span>
                                    </a><!--//nav-link-->
                                </li><!--//nav-item--> 
                            
                                <li class="nav-item"> 					        
                                    <a class="nav-link active d-flex justify-content-start align-items-center"href="patients.php">
                                        <span class=""> 
                                            <img class="logo-icon" src="../assets/img/patients.svg" alt="logo"  style="width: 100%; height: 100%;"/>
                                        </span>
                                        <span class="nav-link-text mx-3">Patients</span>
                                    </a><!--//nav-link-->
                                </li><!--//nav-item-->


                                <li class="nav-item"> 					        
                                    <a class="nav-link d-flex justify-content-start align-items-center"href="hcp.php">
                                        <span class="w-40"> 
                                            <img class="logo-icon" src="../assets/img/patients.svg" alt="logo"  style="width: 35px; height: 35px;"/>
                                        </span>
                                        <span class="nav-link-text w-60 mx-3">HC Professionals</span>
                                    </a><!--//nav-link-->
                                </li><!--//nav-item-->
                                
                                <li class="nav-item"> 					        
                                    <a class="nav-link d-flex justify-content-start align-items-center"href="chat.php">
                                        <span class=""> 
                                            <img class="logo-icon" src="../assets/img/chat.svg" alt="logo"  style="width: 100%; height: 100%;"/>
                                        </span>
                                        <span class="nav-link-text mx-3">Chat</span>
                                    </a><!--//nav-link-->
                                </li><!--//nav-item-->
                                
                                <li class="nav-item">					        
                                    <a class="nav-link d-flex justify-content-start align-items-center"href="./profile/">
                                        <span class=""> 
                                            <img class="logo-icon" src="../assets/img/profile.svg" alt="profile"  style="width: 100%; height: 100%;"/>
                                        </span>
                                        <span class="nav-link-text mx-3">Profile</span>
                                    </a><!--//nav-link-->
                                </li><!--//nav-item-->	  

                            </ul><!--//app-menu-->
                        </nav><!--//app-nav--> 
                    
                    </div><!--//sidepanel-inner-->
                </div><!--//app-sidepanel-->
            </header>
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-1 p-md-1 p-lg-2">
		    <div class="container-xl"> 
  				<!--  Over lapping cards row-->
			    <div class="row g-8 mx-4 mb-4">
				    
					    <div class="app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
                            <div class="topHeader align-items-center">
                                &nbsp; <a onclick ="window.history.go(-1);" class="previousPage"> <i class="fa fa-chevron-left"></i> Back</a> 
                                <h1 class="h1 mx-2 patient_name">Robaert Rox</h1> 
                                <h3 class="profile mx-2"><?php  if(isset($_GET['path']) && isset($_GET['uid'])){  echo trim($_GET['path']); } ?> </h3> 
                            </div>
                            <div class="row"> 
                                 
                                    <div class="col-12 col-lg-9">
                                        <div class="app-card app-card-basic d-flex justify-content-center align-items-center shadow-sm" style="margin-right:10px;">
                                                                        
                                            <div class="col-12 col-lg-11 col-md-11  log_OtherMedication_Container" style=""> 

                                                <form class="bio_form col-11 col-lg-11 col-md-11 ml-4" style="">   
                                                     <section class="personal_information">
                                                        <h3 class="auth-heading text-center my-4 left_heading-text h3">Bio</h3> 
                                                        <h4 class="auth-heading text-center mb-4 left_heading-text">Personal Information</h4>		     
                                                         <div class="row d-flex justify-content-between align-items-center personal_information">
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="fname">First Name</label>
                                                                    <p class="mx-2 log_type" for="fname">Mark</p>
                                                                   
                                                                </div>

                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="lname">Last Name</label>
                                                                    <p class="mx-2 log_type lname">John</p>
                                                                </div> 
 
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label">Other Names</label>
                                                                    <p class="mx-2 log_type otherNames">Doe</p>
                                                                </div>  
                                                        </div>

                                                        <div class="row d-flex justify-content-between align-items-center">  
                                                                <div class="form-group mb-2 col-md-6"> 
                                                                    <label class="text_input_label">Gender</label>
                                                                   <p class="mx-2 log_type gender">Male</p>
                                                                </div> 

                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label">Date of Birth</label>
                                                                    <p class="mx-2 log_type dob">12/12/2000</p>
                                                                </div>    
                                                        </div>
 
                                                        <div class="row d-flex justify-content-between align-items-center">  
                                                                <div class="form-group mb-2 col-md-6"> 
                                                                    <label class="text_input_label">Age</label>
                                                                   <p class="mx-2 log_type age">56</p>
                                                                </div> 

                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label">Level of Education</label>
                                                                    <p class="mx-2 log_type education_level">Undergraduate</p>
                                                                </div>    
                                                        </div>
 
                                                        <div class="row d-flex justify-content-between align-items-center">  
                                                                <div class="form-group mb-2 col-md-6"> 
                                                                    <label class="text_input_label">Tribe</label>
                                                                   <p class="mx-2 log_type tribe" >Male</p>
                                                                </div> 
                                                                
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label">Religion</label>
                                                                    <p class="mx-2 log_type religion">12/12/2000</p>
                                                                </div>    
                                                        </div>
 
                                                        <div class="row d-flex justify-content-between align-items-center">  
                                                                <div class="form-group mb-2 col-md-6"> 
                                                                    <label class="text_input_label">Income Level </label>
                                                                   <p class="mx-2 log_type income_level">Male</p>
                                                                </div> 

                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label">PIN</label>
                                                                    <p class="mx-2 log_type pin">12/12/2000</p>
                                                                </div>    
                                                        </div>
 

                                                            <!-- Contact -->
                                                            <h4 class="auth-heading text-center mb-4 left_heading-text">Contact</h4>		     
                                                            <div class="row d-flex justify-content-between align-items-center contact">
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label" for="email">Email</label>
                                                                        <p class="mx-2 log_type email">markjohndoe@gmail.com</p>
                                                                    </div> 
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">Phone Number</label>
                                                                        <p class="mx-2 log_type phone">+234908765423</p>
                                                                    </div>  
                                                                    <!-- ===================================  -->
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">Country</label>
                                                                        <p class="mx-2 log_type country">Nigeria</p>
                                                                    </div>  
                                                                    <!-- ===================================  -->
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">State of Residence</label>
                                                                        <p class="mx-2 log_type state_of_residence">Degree (B.Sc)</p>
                                                                    </div>  
                                                                    <!-- ===================================  -->
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label" for="address">Town/City</label>
                                                                        <p class="mx-2 log_type city_town">No 16 Nupe Road Molue</p>
                                                                    </div>  
                                                                    <!-- ===================================  -->  
                                                            </div>

                                                            <!-- Nexy of Kin -->
                                                            <h4 class="auth-heading text-center mb-4 left_heading-text">Next of Kin</h4>		     
                                                            <div class="row d-flex justify-content-between align-items-center contact">
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">Name</label>
                                                                        <p class="mx-2 log_type nk_name">***</p>
                                                                    </div> 
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">Phone Number</label>
                                                                        <p class="mx-2 log_type nk_phone">***</p>
                                                                    </div>  
                                                                    <!-- ===================================  -->
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">Address</label>
                                                                        <p class="mx-2 log_type nk_address">***</p>
                                                                    </div>  
                                                            </div>

                                                            <!-- Care Giver -->
                                                            <h4 class="auth-heading text-center mb-4 left_heading-text">Care Giver</h4>		     
                                                            <div class="row d-flex justify-content-between align-items-center contact">
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label" >Cancer Type</label>
                                                                        <p class="mx-2 log_type cancer_type">Cancer type</p>
                                                                    </div> 
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label" >Type of Device</label>
                                                                        <p class="mx-2 log_type device_type">+234918165923</p>
                                                                    </div>  
                                                                    <!-- ===================================  -->
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">Who reports your side effects?</label>
                                                                        <p class="mx-2 log_type effect_reporter">Some text</p>
                                                                    </div>  
                                                                    <div class="form-group mb-2 col-md-6">
                                                                        <label class="text_input_label">Relationship with caregiver</label>
                                                                        <p class="mx-2 log_type care_giver_relationship" >Some Text</p>
                                                                    </div>  
                                                            </div>
                                                        
                                                    </div>
                                                </section>
                                                      

                                                </form>
                                                <!--//auth-form-->   
                
                                            </div><!--//auth-main-col-->
                                        </div><!--//app-card-->

                                    </div><!--//col--> 




                                    <div class="col-12 col-lg-9">
                                        <div class="app-card app-card-basic d-flex justify-content-center align-items-center shadow-sm" style="margin-right:10px; margin-top:20px;">
                                                                        
                                        <div class="col-12 col-lg-11 col-md-11" > 
                                                <form class="bio_form col-11 col-lg-11 col-md-11 ml-4">  
                                                    <h3 class="auth-heading text-center my-4 left_heading-text h3">Disease Characteristics</h3>  
                                                     <section class="personal_information"> 		     
                                                         <div class="row d-flex justify-content-between align-items-center personal_information">
                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label">How old were you when diagnosed with cancer?</label>
                                                                    <p class="mx-2 log_type how_old">000</p> 
                                                                </div>

                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label">Type of Cancer</label>
                                                                    <p class="mx-2 log_type cancer_type">***</p>
                                                                </div> 
 
                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label">Histology Type</label>
                                                                    <p class="mx-2 log_type hist_type">***</p>
                                                                </div>  

                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label">Cancer grade</label>
                                                                    <p class="mx-2 log_type cancer_grade">***</p>
                                                                </div>  

                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label">Cancer Stage</label>
                                                                    <p class="mx-2 log_type cancer_stage">***</p>
                                                                </div>  
                                                                
                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label">Comorbidity</label>
                                                                    <p class="mx-2 log_type comorbidity">***</p>
                                                                </div>  
                                                        </div> 
                                                        
                                                    </div>
                                                </section>
                                                      

                                                </form>
                                                <!--//auth-form-->    
                
                                            </div><!--//auth-main-col-->
                                        </div><!--//app-card-->

                                    </div><!--//col--> 




                                    <div class="col-12 col-lg-9">
                                        <div class="app-card app-card-basic d-flex justify-content-center align-items-center shadow-sm" style="margin-right:10px;margin-top:20px;">
                                                                        
                                        <div class="col-12 col-lg-11 col-md-11"> 

                                                <form class="bio_form col-11 col-lg-11 col-md-11 ml-4">   
                                                     <section class="personal_information"> 
                                                     <h3 class="auth-heading text-center my-4 left_heading-text h3">Anthropometry</h3> 
                                                         <div class="result"></div>		     
                                                         <div class="row d-flex justify-content-between align-items-center personal_information">
                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label" for="height">Height</label>
                                                                    <p class="mx-2 log_type height" >No Record</p> 
                                                                </div>

                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label" for="weight">Weight</label>
                                                                    <p class="mx-2 log_type weight">No Record</p>
                                                                </div> 
                                                                
                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label" for="bmi">Body Mass Index (BMI)</label>
                                                                    <p class="mx-2 log_type bmi">Some placeholder</p>
                                                                </div>  

                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label" for="waist_circum">Waist Circumference</label>
                                                                    <p class="mx-2 log_type waist_circum" for="waist_circum">Some placeholder</p>
                                                                </div>  

                                                                <div class="form-group mb-2 col-md-12">
                                                                    <label class="text_input_label" for="head_circum">Head Circumference</label>
                                                                    <p class="mx-2 log_type head_circum" for="head_circum">Some placeholder</p>
                                                                </div>    
                                                        </div> 
                                                        
                                                    </div>
                                                </section>
                                                      

                                                </form>
                                                <!--//auth-form-->    
                
                                            </div><!--//auth-main-col-->
                                        </div><!--//app-card-->

                                    </div><!--//col--> 


                            </div> <!-- //row-->  
                                <!--app-card--> 
                            
						</div><!--//app-card-->
				 

			    </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

        <script>
            $(document).ready(function(){
                let searchParams = new URLSearchParams(location.search);
                let uuidParts;
                if(searchParams.has("uid") && searchParams.get("uid")!==null){
                    uuidParts = searchParams.get("uid").split("__")[1];
                }
                
                function getUserInformation(uuid){
                    fetch('../../api/admin/user_bio_info.php', {                                       
							method: "POST",
							body: JSON.stringify({uid:uuid}),
							headers: {"Content-type": "application/json; charset=UTF-8"}
						})
						.then(response =>response.json()) 
						.then((json)=>{
                            if(json.msg == 'success'){
                                console.log(json); 

                                // Handle Anthropometry
                                if(json.ANTHRO.length>0 || json.ANTHRO.length!==null){
                                    $(".height").html(json.ANTHRO.height);  
                                    $(".weight").html(json.ANTHRO.weight);  
                                    $(".bmi ").html(json.ANTHRO.bmi); 
                                    $(".waist_circum").html(json.ANTHRO.waist_circum);  
                                    $(".head_circum").html(json.ANTHRO.head_circum);  
                                }else{
                                    $(".height").html("No Record");  
                                    $(".weight").html("No Record");  
                                    $(".bmi ").html("No Record"); 
                                    $(".waist_circum").html("No Record");  
                                    $(".head_circum").html("No Record"); 
                                }

                                // DISEASE CHARACTERISTICS
                                if(json.DISEASE.length>0 || json.DISEASE.length!==null){
                                    $(".how_old").html(json.DISEASE.how_old);  
                                    $(".cancer_type").html(json.DISEASE.cancer_type); 
                                    $(".hist_type").html(json.DISEASE.histology);   
                                    $(".cancer_grade").html(json.DISEASE.cancer_grade);  
                                    $(".cancer_stage").html(json.DISEASE.cancer_stage); 
                                    $(".comorbidity").html(json.DISEASE.comorbidity); 
                                }else{
                                    $(".how_old").html("No Record");  
                                    $(".cancer_type").html("No Record"); 
                                    $(".hist_type").html("No Record");   
                                    $(".cancer_grade").html("No Record");  
                                    $(".cancer_stage").html("No Record"); 
                                    $(".comorbidity").html("No Record"); 
                                }  

                                //NEXT OF Kin
                                if(json.NEXT.length>0 || json.NEXT.length!==null){
                                    $(".nk_name ").html(json.NEXT.name) ;
                                    $(".nk_phone").html(json.NEXT.phone);  
                                    $(".nk_address").html(json.NEXT.address);
                                }else{
                                    $(".nk_name ").html("No Record") ;
                                    $(".nk_phone").html("No Record");  
                                    $(".nk_address").html("No Record");
                                }


                                // BIO INFO
                                if(json.BIO.length>0 || json.BIO.length!==null){
                                    // CARE-GIVER
                                    $(".cancer_type").html(json.BIO.cancer_type);  
                                    $(".device_type").html(json.BIO.device_type);  
                                    $(".effect_reporter").html(json.BIO.effect_reporter); 
                                    $(".care_giver_relationship").html(json.BIO.care_giver_relationship); 
                                    
                                    //Contact 
                                    $(".email").html(json.BIO.email); 
                                    $(".phone").html(json.BIO.phone); 
                                    $(".country").html(json.BIO.country); 
                                    $(".state_of_residence").html(json.BIO.residence_state); 
                                    $(".city_town").html(json.BIO.town);
                                    // Others
                                    let fullName = (json.BIO.otherNames!==null)?json.BIO.lname+" "+json.BIO.otherNames+" "+json.BIO.fname:json.BIO.lname+" "+json.BIO.fname;
                                    $(".patient_name").html(fullName);

                                    $(".fname").html(json.BIO.fname);    
                                    $(".lname").html(json.BIO.lname);      
                                    $(".otherNames").html(json.BIO.otherNames);    
                                    $(".gender").html(json.BIO.gender);   
                                    $(".dob").html(json.BIO.dob);   
                                    $(".age").html(json.BIO.age); 
                                    $(".education_level").html(json.BIO.education_level);   
                                    $(".tribe").html(json.BIO.tribe);   
                                    $(".religion").html(json.BIO.religion);  
                                    $(".income_level").html(json.BIO.incom_level);       
                                    $(".pin").html(json.BIO.pin_no);


                                }else{
                                    // CareGiver
                                    $(".cancer_type").html("No Record");  
                                    $(".device_type").html("No Record") ; 
                                    $(".effect_reporter").html("No Record"); 
                                    $(".care_giver_relationship").html("No Record"); 
                                    //Conatct 
                                    $(".email").html("No Record"); 
                                    $(".phone").html("No Record"); 
                                    $(".country").html("No Record"); 
                                    $(".state_of_residence city_town").html("No Record");
                                    // Others
                                    $(".fname").html("No Record");    
                                    $(".lname").html("No Record");      
                                    $(".otherNames").html("No Record");    
                                    $(".gender").html("No Record");   
                                    $(".dob").html("No Record");   
                                    $(".age").html("No Record"); 
                                    $(".education_level").html("No Record");   
                                    $(".tribe").html("No Record");   
                                    $(".religion").html("No Record");  
                                    $(".income_level").html("No Record");       
                                    $(".pin").html("No Record");


                                }

                                
							}else{ 
								console.log(json); 
							}
						})
						.catch(err => console.log(err));
                }
                getUserInformation(uuidParts);

            });
        </script>
    
    <!-- Page Specific JS -->
    <script src="./assets/js/app.js"></script> 

</body>
</html> 

