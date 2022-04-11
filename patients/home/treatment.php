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
            background: #BEF00F !important;
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
    </style>
	

</head> 

<body class="app"> 

<div class="success_message m_alert" style="display:none;">
		<img src="../assets/img/success_message.svg" alt="info"/>
		<div class="msg mx-1">
			<h6>Success!</h6>
			<p>Medication was successfully logged.</p>
		</div>
		<div class="close_btn"><i class="fa fa-times"></i></div>
	</div>  

	<div class="danger_message m_alert" style="display:none;">
		<img src="../assets/img/error_message.svg" alt="info"/>
		<div class="errmsg mx-1">
			<h6>Something went wrong</h6>
			<p>Medication Logging failed. Please try again.</p>
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
				            <a class="dropdown-toggle" href="#"> <img src="assets/images/user.png" alt="user profile"></a> 
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
				    <div class="col-12 col-lg-7" style="min-height:100vh; overflow-y: hidden;">
					    <div class="app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
							<h1 class="h1">Treaments</h1>
							<p class="left_heading-text mx-1">Log your treatments here</p> 
                                <!--  Over lapping cards row-->
                                <div class="row">
                                    <div class="col-6 box " style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem"  id="log_chemo" style="border-radius:8px !important; background-color:#2EBBB2;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/add.svg" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9 text-white"> Log Chemotherapy </div>
                                        </div><!--//app-card-->
                                    </div><!--//col-->
                                    
                                    <div class="col-6 box" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem" id="log_other_medication" style="border-radius:8px !important; background-color:#FE6ABC;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/add.svg" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9 text-white">Log Other Medications</div>
                                        </div><!--//app-card-->
                                    </div><!--//col-->
                                    
                                    
                                </div> <!-- //row-->
                                <!--  Over lapping cards row-->
                                <div class="row">
                                    <div class="col-6 box" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem" id="log_radiotherapy" style="border-radius:8px !important;background-color:#A99CAA;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/add.svg" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9 text-white"> Log Radiotherapy</div>
                                        </div><!--//app-card-->
                                    </div><!--//col-->
                                    
                                    <div class="col-6 box" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem" id="log_surgical_procedure" style="border-radius:8px !important; background-color:#4A3A4B;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/add.svg" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9 text-white"> Log Surgical Procedure</div>
                                        </div><!--//app-card-->
                                    </div><!--//col-->
                                    
                                    
                                </div> <!-- //row-->
                                <!--  Over lapping cards row-->
                                <div class="row">
                                      
										  <div class="col-6 box" style=""> 
												<div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem" id="log_treatment_interruption" style="border-radius:8px !important;background-color:#F3897B;">
													<div class="py-3 col-md-3"> <a href="./log_treatment_intruption.php"> <img src="../../patients/assets/img/add.svg" style="height:100%; width:100%;" /> </a> </div><!--//icon-holder-->
													<div class="log_type py-4 col-md-9 text-white"><a href="./log_treatment_intruption.php">Log Treatment Interruptions </a></div>
											</div>  <!--//app-card-->
										</div> <!--//col-->
                                    
                                    <div class="col-6 box" style="">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-between shadow-sm row addItem" id="others"  style="border-radius:8px !important;background-color:#66BAFE;">
                                                <div class="py-3 col-md-3"> <img src="../../patients/assets/img/add.svg" style="height:100%; width:100%;" />  </div><!--//icon-holder-->
                                                <div class="log_type py-4 col-md-9 text-white"> Other(s) </div>
                                        </div><!--//app-card-->
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
									<a href="#start">Click on an option to log.</a>
								</div>
						    </div><!--//app-card-body--> 
							
							<div class="col-12 col-md-5 col-lg-8 log_OtherMedication_Container" style="display:none;margin-bottom:100px;">
                                    
								<form class="py-4 my-4 log_chemo_form">   
									<h5 class="auth-heading text-center mb-4 left_heading-text"><a href="#start">Log Other Medications</a></h5>		     
									
                                    <div class="form-group form_drug_input mb-1">
										<label class="text_input_label" for="drug">Drug</label>
										<div class="input-group">
											<input name="drug" type="text" id ="drug" class="form-control form-control-lg drug" placeholder="Drug name" required="required" />
											<div class="input-group-append">
												<span class="input-group-text"> <span class="removeDrugItem text-danger">x</span></span>
											</div>
										</div>
									</div>   									
									<div class="mb-3 align-items-right text-right">
                                        <button type="button" class="btn btn-outline-primary addNewDrug"><span>New Drug</span></button>
									</div> 
									<input type="hidden" name="action" value="log">
									<div class="result"></div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-block mx-auto d-flex justify-content-between align-items-center">
											    <span>Log Medication</span> 
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
	<script>
        $(document).ready(function(){
             // // log_begin_cotainer  log_symptom_container 
            let tabsBox = document.querySelectorAll(".addItem");
                tabsBox.forEach((el)=>{
                    el.addEventListener("click",(e)=>{ 
                        $(".app-card").removeClass("activeTab");  // remove highlighted mark on every other container
                        // e.path[2].classList.add("activeTab");	 // highlight this one that is clicked  
						$(e.target).closest(".app-card").addClass("activeTab");
                        console.log(e.path);
						console.log(el.id);
						// check if the Id is the same as the one clicked
						if(el.id == "log_other_medication"){
							     $(".log_begin_cotainer").hide();
								 $(".log_OtherMedication_Container").show().css("zoom",0.88); 
						}
                    },false);
                });

          $(document).on("click",".addNewDrug",function(e){
            $( "form.log_chemo_form div.form-group" ).last().append(`
                        <div class="form-group form_drug_input mb-1">
                           <label class="text_input_label" for="drug">Drug</label> 
                           <div class="input-group">
                                <input name="drug" type="text" id ="drug" class="form-control form-control-lg drug" placeholder="Drug name" required="required" />
                                <div class="input-group-append">
                                    <span class="input-group-text"> <span class="removeDrugItem text-danger">x</span></span>
                                </div>
                            </div>
                        </div>`
                );
          });
          //  $( " form.log_chemo_form div.form-group" ).last().css( "background-color", "red" );
          // Remove DrugItem Added
          $(document).on("click",".removeDrugItem", function(e){
              $(this).closest("div.form-group").slideUp(5000).remove();
          });

			// When the ALERT close button is clicked
			$(document).on("click",".close_btn",function(){
				$(this).closest("div.m_alert").slideUp(1000).hide(200);
			}); 


			
			let formDrugData = [];
			$(document).on("submit",".log_chemo_form", function(evt){
				evt.preventDefault(); 
				let $_this =$(this);
				$_this.find('button:submit').attr("disabled","disabled");  
				$_this.find('div.result').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');  

				$_this.find('input.drug').each(function (index, member) {
					var value = $(member).val(); 
					formDrugData.push(value);
				});
			    let data = {action:'logDrug',drugs:formDrugData}
				 console.log(data);  
				 fetch('../../api/patients/add_medication.php', {
							method: "POST",
							body: JSON.stringify(data),
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
							}
						})
						.catch(err => console.log(err));
			});
          
        });

	</script>
    
    <!-- Page Specific JS -->
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

