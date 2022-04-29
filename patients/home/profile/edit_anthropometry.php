<?php require_once("../../../top.php");?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Disease Characteristics</title>
    
    <!-- Meta mc-calendar.min.js-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="PROSE">
    <meta name="author" content="PROSEcare">    
	<link rel="shortcut icon" href="../../../patients/assets/img/logo.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css"> 
    <link id="theme-style" rel="stylesheet" href="../../assets/css/custom.css">

	<link href="../../assets/css/theme-software-library.min.css"    rel="stylesheet" type="text/css" media="all" />
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css" />

	<!-- Page Specific JS -->
	<link id="theme-style" rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
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

        .bio_form input, .bio_form select{
            border-radius:15px !important; 
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
		            <a class="app-logo py-4" href="../index.php">
						<img class="logo-icon me-2" src="../../../patients/assets/img/logo.svg" alt="logo"  style="width: 100%; height: 100%;"/></a>
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center" href="../index.php">
						        <span class="">
								   <img class="logo-icon" src="../../assets/img/home.svg" alt="logo"  style="width: 100%; height: 100%;"/> 
								</span>
		                         <span class="nav-link-text w-60 mx-2">Home</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center"href="../side-effect.php">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/side-effects.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Side Effects</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center" href="../treatment.php">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/treatment.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Treatment</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					   
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link d-flex justify-content-start align-items-center"href="../resources.php">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/resources.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Resources</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active d-flex justify-content-start align-items-center"href="../profile/">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/profile.svg" alt="profile"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text  w-60 mx-2">Profile</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->	
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link d-flex justify-content-start align-items-center"href="../settings.php">
						        <span class=""> 
									<img class="logo-icon" src="../../assets/img/settings.svg" alt="logo"  style="width: 100%; height: 100%;"/>
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
					    <div class="app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
                         <h1 class="h1 mx-2">&nbsp;Profile</h1> 
                            <div class="row">
                                <div class="col-12 col-lg-4" style="">
                                    <a href="./"><div class="col-md-12 box" >
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-start shadow-sm profileItem py-2" style="border-radius:10px !important;">
                                                <img src="../../../patients/assets/img/user.svg" id="bio" class="profileItem ml-3" style="height:60px; width:60px;" />  <!--//icon-holder-->
                                                <div class="log_type mx-2"> Bio </div>
                                        </div><!--//app-card-->
                                    </div>
                                   </a>
                                    <!--//col-->
                                    
                                    <a href="./disease_character.php">
                                        <div class="col-md-12 box">
                                            <div class="app-card app-card-basic d-flex align-items-center justify-content-start shadow-sm profileItem py-2" style="border-radius:10px !important;">
                                                    <img src="../../../patients/assets/img/user.svg" id="disease_characteristics" class="profileItem  ml-3" style="height:60px; width:60px"/> <!--//icon-holder-->
                                                    <div class="log_type mx-2">Disease Characteristics</div>
                                            </div><!--//app-card-->
                                        </div>
                                    </a>
                                    <!--//col-->
                                    
                                    <a href="./anthropometry.php">
                                       <div class="col-md-12 box">
                                        <div class="app-card app-card-basic d-flex align-items-center justify-content-start shadow-sm py-2 activeTab" style="border-radius:10px !important;">
                                                <img src="../../../patients/assets/img/user.svg" id="anthropy" class="profileItem  ml-3"  style="height:60px; width:60px" /> <!--//icon-holder-->
                                                <div class="log_type mx-2 activeTab"> Anthropometry </div>
                                            </div><!--//app-card-->
                                        </div>
                                    </a>
                                    <!--//col-->
                                    
                                 </div><!--//col-->
                                 
                                    <div class="col-12 col-lg-8">
                                        <div class="app-card app-card-basic d-flex justify-content-center align-items-center shadow-sm" style="margin-right:10px;">
                                                                        
                                        <div class="col-12 col-lg-11 col-md-11  log_OtherMedication_Container" style="">
                                                <div class="topBio d-flex justify-content-between align-items-center mt-4">
                                                   <h3 class="h3">Anthropometry</h3> 
                                                   <button type="button" class="btn btn-outline-primary editBio" style="z-index:29999;"><a href="#" class="editAnthropometry">Save</a></button>
                                                </div>

                                                <form class="bio_form col-11 col-lg-11 col-md-11 ml-4" style="zoom:0.90;margin-top:-60px;">   
                                                     <section class="personal_information"> 	
                                                         <div class="result"></div>	     
                                                         <div class="row d-flex justify-content-between align-items-center personal_information"> 
                                                                <div class="form-group mb-2 col-md-8">
                                                                    <label class="text_input_label" for="Height">Height </label>
                                                                    <input type="text" name="Height" id="Height" placeholder="Height" class="form-control form-control-lg Height" />
                                                                </div>  

                                                                <div class="form-group mb-2 col-md-8">
                                                                    <label class="text_input_label" for="Weight">Weight</label>
                                                                    <input type="text" name="Weight" id="Weight" placeholder="Weight" class="form-control form-control-lg Weight" />
                                                                </div>  

                                                                <div class="form-group mb-2 col-md-8">
                                                                    <label class="text_input_label" for="bmi">Body Mass Index (BMI)</label>
                                                                    <input type="text" name="bmi" id="bmi" placeholder="Body Mass Index (BMI)" class="form-control form-control-lg bmi" />
                                                                </div>  

                                                                <div class="form-group mb-2 col-md-8">
                                                                    <label class="text_input_label" for="Waist">Waist Circumferecne</label>
                                                                    <input type="text" name="Waist" id="Waist" placeholder="Waist Circumferecne" class="form-control form-control-lg Waist" />
                                                                </div> 

                                                                <div class="form-group mb-2 col-md-8">
                                                                    <label class="text_input_label" for="Head">Head Circumferecne</label>
                                                                    <input type="text" name="Head" id="Head" placeholder="Head Circumferecne" class="form-control form-control-lg Head" />
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
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
	<script>
        $(document).ready(function(){ 
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
                
                function getAthropomentry(){  
                        fetch('../../../api/patients/get_anthropometry.php', {
                            method: "GET", 
                                headers: {"Content-type": "application/json; charset=UTF-8"}
                            })
                        .then(response => response.json()) 
                        .then((json)=>{
                            console.log(json); 
                            //`height`, `weight`, `bmi`, `waist_circum`, `head_circum`, `createdAt`
                            if(json.ANTHRO || json.ANTHRO != null){ 
                                $(".Height").val(json.ANTHRO.height); 
                                $(".Weight").val(json.ANTHRO.weight); 
                                $(".bmi").val(json.ANTHRO.bmi); 
                                $(".Waist").val(json.ANTHRO.waist_circum); 
                                $(".Head").val(json.ANTHRO.head_circum); 
                            }  
                        })
                        .catch(err => console.log(err));
                }
                getAthropomentry(); // Spit the Data to the DOM

                // `height`, `weight`, `bmi`, `waist_circum`, `head_circum`, `createdAt`
                $(document).on('click',".editAnthropometry",function(evt){
                        evt.preventDefault();
                        $(this).html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
                        let data = {
                            height       :$("form.bio_form").find(".Height").val(),
                            weight       :$("form.bio_form").find(".Weight").val(),
                            bmi          :$("form.bio_form").find(".bmi").val(),
                            waist_circum :$("form.bio_form").find(".Waist").val(),
                            head_circum  :$("form.bio_form").find(".Head").val(),   
                        }
                        console.log(data);
                        fetch('../../../api/patients/edit_anthropometry.php', {
                                method: "POST",
                                body: JSON.stringify(data),
                                headers: {"Content-type": "application/json; charset=UTF-8"}
                            })
                            .then(response => response.json()) 
                            .then((json)=>{
                                console.log(json); 
                                console.log(json.status); 
                                if(json.msg == 'success'){ 
                                    $(this).html('Save');
                                    $(".result").html('<div class="alert alert-success"> Successful! </div>');
                                    setTimeout(()=>{location.href ="./anthropometry.php"},2000)
                                }else{
                                    $(this).html('Save');
                                    $(".result").html('<div class="alert alert-danger"> Request Failed! </div>');
                                }
                            })
                            .catch(err => console.log(err)); 
    
                    })
          
        });

	</script>
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>  
	<script src="assets/js/bootstrap-datepicker.min.js"></script> 
 
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

