<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Profile...</title>
    
    <!-- Meta mc-calendar.min.js-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="PROSE">
    <meta name="author" content="Prose Care">    
	<link rel="shortcut icon" href="../../assets/img/logo.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> 

    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css"> 
    <link id="theme-style" rel="stylesheet" href="../../assets/css/custom.css">

	<link href="../../assets/css/theme-software-library.min.css"    rel="stylesheet" type="text/css" media="all" />
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css" /> 
	
	<!-- Page Specific JS -->
	<link id="theme-style" rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
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
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 40px;
			line-height: 54px; 
			display: flex;
			align-items: center; 
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
            border: 2px solid transparent;
            background-clip:padding-box; 
        }
        .activeTab{
            background: #8D2D91 !important;
            color:#fff !important;
        }
        .profileItem{

        }

        .bio_form input, .bio_form select, textarea{
            border-radius:15px !important; 
        }
        input,select{ font-size:16px !important;}
        .editBio a:hover{ color:#fff !important;}
        .downloadProfile{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px; 
            width: 191px;
            height: 48px; 
            border:0;
            color: #948495;
            /* Grey/4 */ 
            background: #D7D1D7;
            border-radius: 15px;
            /* Inside auto layout */
            flex: none;
            order: 1;
            flex-grow: 0;
            margin: 0px 68px;
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
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
							<img src="../assets/images/user.png" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="account.php">Profile</a></li>
								<li><a class="dropdown-item" href="settings.php">Settings</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="../../signIn/">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
						<!--//app-utility-item-->
			            <div class="app-utility-item ">
				            <a href="../../signIn" title="Settings">Logout </a>
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
		            <a class="app-logo py-4" href="../index.php">
						<img class="logo-icon me-2" src="../../assets/img/logo.svg" alt="logo"  style="width: 100%; height: 100%;"/></a>
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">					        
					        <a class="nav-link d-flex justify-content-start align-items-center" href="../index.php">
						        <span class="w-40">
								   <img class="logo-icon" src="../../assets/img/home.svg" alt="logo"  style="width: 100%; height: 100%;"/> 
								</span>
		                         <span class="nav-link-text w-60 mx-3">Home</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item--> 
					   
					    <li class="nav-item"> 					        
					        <a class="nav-link d-flex justify-content-start align-items-center"href="../patients.php">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/patients.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Patients</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item"> 					        
					        <a class="nav-link d-flex justify-content-start align-items-center"href="../chat.php">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/chat.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Chat</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item">					        
					        <a class="nav-link active d-flex justify-content-start align-items-center"href="./">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/profile.svg" alt="profile"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Profile</span>
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
				    
					    <div class="app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
                            <div class="topHeader d-flex justify-content-between align-items-center">
                                <h1 class="h1 mx-2">&nbsp;Profile</h1> 
                                <button class="downloadProfile mx-2">Download Profile</button>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4" style="">
                                    <div class="col-md-12 box" >
                                     <a href="./index.php">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-start shadow-sm profileItem py-2 activeTab" style="border-radius:10px !important;">
                                                <img src="../../../patients/assets/img/user.svg" id="bio" class="profileItem ml-3" style="height:55px; width:55px" />  <!--//icon-holder-->
                                                <div class="log_type mx-2 activeTab"> Bio </div>
                                        </div><!--//app-card-->
                                     </a>
                                    </div><!--//col-->
                                    
                                    <div class="col-md-12 box">
                                    <a href="./certificates.php">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-start shadow-sm profileItem py-2" style="border-radius:10px !important;">
                                                 <img src="../../../patients/assets/img/user.svg" id="disease_characteristics" class="profileItem  ml-3" style="height:55px; width:55px"/> <!--//icon-holder-->
                                                <div class="log_type mx-2">Certifications</div>
                                        </div><!--//app-card-->
                                    </a>
                                    </div><!--//col--> 
                                    
                                 </div><!--//col-->
                                 
                                    <div class="col-12 col-lg-8">
                                        <div class="app-card app-card-basic d-flex justify-content-center align-items-center shadow-sm" style="margin-right:10px;">
                                                                        
                                            <div class="col-12 col-lg-11 col-md-11  log_OtherMedication_Container" style="">
                                                <div class="topBio d-flex justify-content-between align-items-center mt-4">
                                                   <h3 class="h3">Bio</h3> 
                                                   <button type="button" class="btn btn-outline-primary editBio" style="z-index:19999;"><a href="./edit_bio.php">Save</a></button>
                                                </div>

                                                <form class="bio_form col-11 col-lg-11 col-md-11 ml-4" style="zoom:0.90;margin-top:-60px;">   
                                                     <section class="personal_information">
                                                        <h4 class="auth-heading text-center mb-4 left_heading-text">Personal Information</h4>		     
                                                         <div class="row d-flex justify-content-between align-items-center personal_information">
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="title">Title</label>
                                                                    <input name="title" type="text" id="title" class="form-control form-control-lg title" placeholder="Title" required="required" />
                                                                </div> 

                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="lname">Surname</label>
                                                                    <input name="lname" type="text" id="lname" class="form-control form-control-lg lname" placeholder="Last Name" required="required" />
                                                                </div>

                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="fname">First Name</label>
                                                                    <input name="fname" type="text" id="fname" class="form-control form-control-lg fname" placeholder="First name" required="required" />
                                                                </div> 
 
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="other_name">Other Names</label>
                                                                    <input name="lname" type="text" id="other_name" class="form-control form-control-lg lname" placeholder="Last Name" required="required" />
                                                                </div>  
                                                        </div>

                                                        <div class="row d-flex justify-content-between align-items-center">  
                                                                <div class="form-group mb-2 col-md-6"> <label class="text_input_label">Gender</label>
                                                                    <select name="gender" class="form-select form-control form-control-lg gender" syle="width:100%;">
                                                                        <option disabled selected>Gender</option>
                                                                        <option value="male">Male</option>
                                                                        <option value ="female">Female</option>
                                                                    </select>
                                                                </div> 

                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label">Date of Birth</label>
                                                                    <input type="text" name="dob" placeholder="Date of Birth" class="form-control form-control-lg dob" />
                                                                
                                                                </div>    
                                                        </div>
 

                                                        <!-- Contact -->
                                                        <h4 class="auth-heading text-center mb-4 left_heading-text">Contact</h4>		     
                                                        <div class="row d-flex justify-content-between align-items-center contact">
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="email">Email</label>
                                                                    <input name="email" type="email" id="email" class="form-control form-control-lg email" placeholder="Email" required="required" />
                                                                </div> 
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="phone">Phone Number</label>
                                                                    <input type="tel" name="phone" id="phone" placeholder="eg 08123457890" class="form-control form-control-lg phone" />
                                                                </div>  
                                                                 <!-- ===================================  -->
                                                                 <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="address">Address</label>
                                                                    <textarea name="address" id="address" placeholder="Your Address" class="form-control form-control-lg address"></textarea>
                                                                </div> 
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="nationality">Nationality</label>
                                                                  <select class="form-control form-control-lg nationality" id="nationality" name="nationality">
                                                                    <option value="Afganistan">Afghanistan</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                    <option value="American Samoa">American Samoa</option>
                                                                    <option value="Andorra">Andorra</option>
                                                                    <option value="Angola">Angola</option>
                                                                    <option value="Anguilla">Anguilla</option>
                                                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                    <option value="Argentina">Argentina</option>
                                                                    <option value="Armenia">Armenia</option>
                                                                    <option value="Aruba">Aruba</option>
                                                                    <option value="Australia">Australia</option>
                                                                    <option value="Austria">Austria</option>
                                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                                    <option value="Bahamas">Bahamas</option>
                                                                    <option value="Bahrain">Bahrain</option>
                                                                    <option value="Bangladesh">Bangladesh</option>
                                                                    <option value="Barbados">Barbados</option>
                                                                    <option value="Belarus">Belarus</option>
                                                                    <option value="Belgium">Belgium</option>
                                                                    <option value="Belize">Belize</option>
                                                                    <option value="Benin">Benin</option>
                                                                    <option value="Bermuda">Bermuda</option>
                                                                    <option value="Bhutan">Bhutan</option>
                                                                    <option value="Bolivia">Bolivia</option>
                                                                    <option value="Bonaire">Bonaire</option>
                                                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                    <option value="Botswana">Botswana</option>
                                                                    <option value="Brazil">Brazil</option>
                                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                    <option value="Brunei">Brunei</option>
                                                                    <option value="Bulgaria">Bulgaria</option>
                                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                                    <option value="Burundi">Burundi</option>
                                                                    <option value="Cambodia">Cambodia</option>
                                                                    <option value="Cameroon">Cameroon</option>
                                                                    <option value="Canada">Canada</option>
                                                                    <option value="Canary Islands">Canary Islands</option>
                                                                    <option value="Cape Verde">Cape Verde</option>
                                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                                    <option value="Central African Republic">Central African Republic</option>
                                                                    <option value="Chad">Chad</option>
                                                                    <option value="Channel Islands">Channel Islands</option>
                                                                    <option value="Chile">Chile</option>
                                                                    <option value="China">China</option>
                                                                    <option value="Christmas Island">Christmas Island</option>
                                                                    <option value="Cocos Island">Cocos Island</option>
                                                                    <option value="Colombia">Colombia</option>
                                                                    <option value="Comoros">Comoros</option>
                                                                    <option value="Congo">Congo</option>
                                                                    <option value="Cook Islands">Cook Islands</option>
                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                                                    <option value="Croatia">Croatia</option>
                                                                    <option value="Cuba">Cuba</option>
                                                                    <option value="Curaco">Curacao</option>
                                                                    <option value="Cyprus">Cyprus</option>
                                                                    <option value="Czech Republic">Czech Republic</option>
                                                                    <option value="Denmark">Denmark</option>
                                                                    <option value="Djibouti">Djibouti</option>
                                                                    <option value="Dominica">Dominica</option>
                                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                                    <option value="East Timor">East Timor</option>
                                                                    <option value="Ecuador">Ecuador</option>
                                                                    <option value="Egypt">Egypt</option>
                                                                    <option value="El Salvador">El Salvador</option>
                                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                    <option value="Eritrea">Eritrea</option>
                                                                    <option value="Estonia">Estonia</option>
                                                                    <option value="Ethiopia">Ethiopia</option>
                                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                                    <option value="Fiji">Fiji</option>
                                                                    <option value="Finland">Finland</option>
                                                                    <option value="France">France</option>
                                                                    <option value="French Guiana">French Guiana</option>
                                                                    <option value="French Polynesia">French Polynesia</option>
                                                                    <option value="French Southern Ter">French Southern Ter</option>
                                                                    <option value="Gabon">Gabon</option>
                                                                    <option value="Gambia">Gambia</option>
                                                                    <option value="Georgia">Georgia</option>
                                                                    <option value="Germany">Germany</option>
                                                                    <option value="Ghana">Ghana</option>
                                                                    <option value="Gibraltar">Gibraltar</option>
                                                                    <option value="Great Britain">Great Britain</option>
                                                                    <option value="Greece">Greece</option>
                                                                    <option value="Greenland">Greenland</option>
                                                                    <option value="Grenada">Grenada</option>
                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                    <option value="Guam">Guam</option>
                                                                    <option value="Guatemala">Guatemala</option>
                                                                    <option value="Guinea">Guinea</option>
                                                                    <option value="Guyana">Guyana</option>
                                                                    <option value="Haiti">Haiti</option>
                                                                    <option value="Hawaii">Hawaii</option>
                                                                    <option value="Honduras">Honduras</option>
                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                    <option value="Hungary">Hungary</option>
                                                                    <option value="Iceland">Iceland</option>
                                                                    <option value="Indonesia">Indonesia</option>
                                                                    <option value="India">India</option>
                                                                    <option value="Iran">Iran</option>
                                                                    <option value="Iraq">Iraq</option>
                                                                    <option value="Ireland">Ireland</option>
                                                                    <option value="Isle of Man">Isle of Man</option>
                                                                    <option value="Israel">Israel</option>
                                                                    <option value="Italy">Italy</option>
                                                                    <option value="Jamaica">Jamaica</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="Jordan">Jordan</option>
                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                    <option value="Kenya">Kenya</option>
                                                                    <option value="Kiribati">Kiribati</option>
                                                                    <option value="Korea North">Korea North</option>
                                                                    <option value="Korea Sout">Korea South</option>
                                                                    <option value="Kuwait">Kuwait</option>
                                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                    <option value="Laos">Laos</option>
                                                                    <option value="Latvia">Latvia</option>
                                                                    <option value="Lebanon">Lebanon</option>
                                                                    <option value="Lesotho">Lesotho</option>
                                                                    <option value="Liberia">Liberia</option>
                                                                    <option value="Libya">Libya</option>
                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                    <option value="Lithuania">Lithuania</option>
                                                                    <option value="Luxembourg">Luxembourg</option>
                                                                    <option value="Macau">Macau</option>
                                                                    <option value="Macedonia">Macedonia</option>
                                                                    <option value="Madagascar">Madagascar</option>
                                                                    <option value="Malaysia">Malaysia</option>
                                                                    <option value="Malawi">Malawi</option>
                                                                    <option value="Maldives">Maldives</option>
                                                                    <option value="Mali">Mali</option>
                                                                    <option value="Malta">Malta</option>
                                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                                    <option value="Martinique">Martinique</option>
                                                                    <option value="Mauritania">Mauritania</option>
                                                                    <option value="Mauritius">Mauritius</option>
                                                                    <option value="Mayotte">Mayotte</option>
                                                                    <option value="Mexico">Mexico</option>
                                                                    <option value="Midway Islands">Midway Islands</option>
                                                                    <option value="Moldova">Moldova</option>
                                                                    <option value="Monaco">Monaco</option>
                                                                    <option value="Mongolia">Mongolia</option>
                                                                    <option value="Montserrat">Montserrat</option>
                                                                    <option value="Morocco">Morocco</option>
                                                                    <option value="Mozambique">Mozambique</option>
                                                                    <option value="Myanmar">Myanmar</option>
                                                                    <option value="Nambia">Nambia</option>
                                                                    <option value="Nauru">Nauru</option>
                                                                    <option value="Nepal">Nepal</option>
                                                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                    <option value="Nevis">Nevis</option>
                                                                    <option value="New Caledonia">New Caledonia</option>
                                                                    <option value="New Zealand">New Zealand</option>
                                                                    <option value="Nicaragua">Nicaragua</option>
                                                                    <option value="Niger">Niger</option>
                                                                    <option value="Nigeria">Nigeria</option>
                                                                    <option value="Niue">Niue</option>
                                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                                    <option value="Norway">Norway</option>
                                                                    <option value="Oman">Oman</option>
                                                                    <option value="Pakistan">Pakistan</option>
                                                                    <option value="Palau Island">Palau Island</option>
                                                                    <option value="Palestine">Palestine</option>
                                                                    <option value="Panama">Panama</option>
                                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                                    <option value="Paraguay">Paraguay</option>
                                                                    <option value="Peru">Peru</option>
                                                                    <option value="Phillipines">Philippines</option>
                                                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                                                    <option value="Poland">Poland</option>
                                                                    <option value="Portugal">Portugal</option>
                                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                                    <option value="Qatar">Qatar</option>
                                                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                                                    <option value="Reunion">Reunion</option>
                                                                    <option value="Romania">Romania</option>
                                                                    <option value="Russia">Russia</option>
                                                                    <option value="Rwanda">Rwanda</option>
                                                                    <option value="St Barthelemy">St Barthelemy</option>
                                                                    <option value="St Eustatius">St Eustatius</option>
                                                                    <option value="St Helena">St Helena</option>
                                                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                    <option value="St Lucia">St Lucia</option>
                                                                    <option value="St Maarten">St Maarten</option>
                                                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                    <option value="Saipan">Saipan</option>
                                                                    <option value="Samoa">Samoa</option>
                                                                    <option value="Samoa American">Samoa American</option>
                                                                    <option value="San Marino">San Marino</option>
                                                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                                    <option value="Senegal">Senegal</option>
                                                                    <option value="Seychelles">Seychelles</option>
                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                    <option value="Singapore">Singapore</option>
                                                                    <option value="Slovakia">Slovakia</option>
                                                                    <option value="Slovenia">Slovenia</option>
                                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                                    <option value="Somalia">Somalia</option>
                                                                    <option value="South Africa">South Africa</option>
                                                                    <option value="Spain">Spain</option>
                                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                                    <option value="Sudan">Sudan</option>
                                                                    <option value="Suriname">Suriname</option>
                                                                    <option value="Swaziland">Swaziland</option>
                                                                    <option value="Sweden">Sweden</option>
                                                                    <option value="Switzerland">Switzerland</option>
                                                                    <option value="Syria">Syria</option>
                                                                    <option value="Tahiti">Tahiti</option>
                                                                    <option value="Taiwan">Taiwan</option>
                                                                    <option value="Tajikistan">Tajikistan</option>
                                                                    <option value="Tanzania">Tanzania</option>
                                                                    <option value="Thailand">Thailand</option>
                                                                    <option value="Togo">Togo</option>
                                                                    <option value="Tokelau">Tokelau</option>
                                                                    <option value="Tonga">Tonga</option>
                                                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                    <option value="Tunisia">Tunisia</option>
                                                                    <option value="Turkey">Turkey</option>
                                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                    <option value="Tuvalu">Tuvalu</option>
                                                                    <option value="Uganda">Uganda</option>
                                                                    <option value="United Kingdom">United Kingdom</option>
                                                                    <option value="Ukraine">Ukraine</option>
                                                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                                                    <option value="United States of America">United States of America</option>
                                                                    <option value="Uraguay">Uruguay</option>
                                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                                    <option value="Vanuatu">Vanuatu</option>
                                                                    <option value="Vatican City State">Vatican City State</option>
                                                                    <option value="Venezuela">Venezuela</option>
                                                                    <option value="Vietnam">Vietnam</option>
                                                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                    <option value="Wake Island">Wake Island</option>
                                                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                    <option value="Yemen">Yemen</option>
                                                                    <option value="Zaire">Zaire</option>
                                                                    <option value="Zambia">Zambia</option>
                                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                                 </select>
                                                                </div> 

                                                                <!-- ===================================  -->
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="hospital">Hospital</label>
                                                                    <input type="text" name="hospital" id="hospital" placeholder="Hospital" class="form-control form-control-lg hospital" />
                                                                </div>  
                                                                 
                                                                <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="folioNumber">Folio Number</label>
                                                                    <input type="text" name="folioNumber" id="folioNumber" placeholder="eg Folio Number" class="form-control form-control-lg folioNumber" />
                                                                </div>  
                                                                 <!-- ===================================  --> 

                                                                 <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="address">Specialty</label>
                                                                    <textarea name="specialty" id="specialty" placeholder="Your Specialty" class="form-control form-control-lg specialty"></textarea>
                                                                </div> 

                                                                 <div class="form-group mb-2 col-md-6">
                                                                    <label class="text_input_label" for="name">Name</label>
                                                                    <input type="text" name="name" id="name" placeholder="eg Name" class="form-control form-control-lg name" />
                                                                </div>  
                                                                 <!-- ===================================  --> 
                                                                 <!-- ===================================  -->

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
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
	<script>
        $(document).ready(function(){
            //----------------------------------------------------------------------
            $("#phone").intlTelInput(); 
            $("#phone").intlTelInput("setNumber", "+23409011122233"); 
            $("#phone").intlTelInput("setCountry", "ng");
            //----------------------------------------------------------------------
            $("#next_kin_phone").intlTelInput(); 
            $("#next_kin_phone").intlTelInput("setNumber", "+23409011122233"); 
            $("#next_kin_phone").intlTelInput("setCountry", "ng");
            // --------------------------------------------------------------------
             // // log_begin_cotainer  log_symptom_container
			// $(".log_begin_cotainer").slideUp(2000).hide();
			// $(".log_symptom_container").slideUp(2000).show(2000).css("zoom",0.88);      log_begin_cotainer
            let tabsBox = document.querySelectorAll(".profileItem ");
                tabsBox.forEach((el)=>{
                    el.addEventListener("click",(e)=>{ 
                        $(".app-card").removeClass("activeTab");  // remove highlighted mark on every other container
                        e.path[2].classList.add("activeTab");	 // highlight this one that is clicked
                        console.log(e.path);
						console.log(el.id);
						// check if the Id is the same as the one clicked
						if(el.id == "log_other_medication"){
							     $(".log_begin_cotainer").slideUp(2000).hide(2000);
								 $(".log_OtherMedication_Container").slideUp(2000).show(2000).css("zoom",0.88); 
						}
                    },false);
                });

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
    <!-- Charts JS -->
    <script src="../assets/js/bootstrap-datepicker.min.js"></script> 
    <!-- <script src="../assets/plugins/chart.js/chart.min.js"></script> 
    <script src="../assets/js/index-charts.js"></script>  -->

        <script>
            $(document).ready(function(){
            
              function calculateAge(birthday) { // birthday is a date
                var ageDifMs = Date.now() - birthday;
                var ageDate = new Date(ageDifMs); // miliseconds from epoch
                return Math.abs(ageDate.getUTCFullYear() - 1970);
              }

                $('.dob').datepicker()
                .on('changeDate', function(e) {
                    $('.age').val(calculateAge(new Date($(".dob").val())));
                    console.log($(".dob").val());
                });

            });
        </script>
    
    <!-- Page Specific JS -->
    <script src="../assets/js/app.js"></script> 
 
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

