<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | HCP ~ Patients</title>
    
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
		.app{ 
			background: #f5d5f848 !important;
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
                /* Grey/9 */
                color: #7A667B;
                /* Inside auto layout */
                flex: none;
                order: 1;
                flex-grow: 0;
                margin: 4px 0px;
                text-align:left !important;
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

            input::placeholder{
                font-family: Inter;
                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 24px;
                /* identical to box height, or 150% */
                /* White */ 
                color: #FFFFFF;
                /* Inside auto layout */
                flex: none;
                order: 0;
                flex-grow: 0;
                margin: 0px 305px;
            }  
            
                .chat_input_container{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: row;
                    width: 100%;
                    height: 75px;
                    background: #fff;  
                    position: fixed;
                    bottom: 0;
                    left: 0;  
                    padding: 20px;
                    background: #400E55;
                }
                .chat_input_container input{
                    width: 95%;
                    height: 75px;
                    border: 0;
                    padding: 20px;
                    font-size: 16px; 
                    color: #fff;
                    background: transparent;
                    outline: none;
                    background: #400E55;
                    text-indent:250px;
                }

                .senderMsg{ 
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: flex-start;
                    padding: 36px; 
                    width: 500px;
                    height: 176px;
                    left: 0px;
                    top: 0px; 
                    background: #FFFFFF; 
                    flex: none;
                    order: 0;
                    flex-grow: 0;
                    margin: 10px 0px;
                    border-radius:15px;
                }
                .receiverMsg{ 
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: flex-start;
                    padding: 36px; 
                    width: 500px;
                    height: 256px;
                    right: 0px;
                    bottom: 0px; 
                    background: #FFFFFF; 
                    flex: none;
                    order: 0;
                    flex-grow: 0;
                    margin: 10px 0px;
                    border-radius:15px;
                    margin-left:50%;

                }

                .h5{
                    font-family: Inter;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 20px;
                    line-height: 28px; 
                    display: flex;
                    align-items: center;
                    text-align: center; 
                    color: #57166A; 
                    flex: none;
                    order: 0;
                    flex-grow: 0;
                    margin: 4px 0px;
                }
                p.time span{  margin-left:90%;}

                .h1 span{
                    font-family: Inter;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 18px;
                    line-height: 54px;
                    /* identical to box height, or 300% */ 
                    color: #928E92;
                }
                input.searchInput{
                    background: #FFFFFF !important; 
                    border: 1px solid #D1D5DB;
                    box-sizing: border-box;
                    border-radius: 46px !important;
                    text-indent:30px;
                    color:#000 !important;
                }
                table th, table td {
                    border: 0 !important; 
                    padding: 10px !important;
                    text-align: left;
                    vertical-align:middle;
                }

                table thead tr th{
                    font-family: Inter;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 14px; 
                    /* identical to box height */ 
                    font-feature-settings: 'ss01' on; 
                    color: #8D2D91;
                    text-align: left;
                    vertical-align: middle;
                }

                .bottom_page_hints{   
                    height: 46px;  
                    background: #F3F4F6;
                    border-radius: 0px 0px 2px 2px;
                    margin-bottom:20px;
                    padding:10px !important; 
                }
                .green_label{
                    height:10px;
                    width:10px;
                    background: green;
                    border-radius: 50%;
                }
                .btn-prima{
                    background: rgba(141, 45, 145, 0.05);
                    color: #1E3A8A;
                }
                .text_patient{
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 24px; 
                    color: #8A92A6; 
                    flex: none;
                    order: 1;
                    flex-grow: 0;
                    margin: 0px 12px;
                }

                .text_desc{
                    font-family: 'Inter';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 16px;
                    line-height: 24px; 
                    text-align: center; 
                    color: #7A667B;
                }

                .view__more{
                    font-family: 'Lato', sans-serif;
                    font-style: normal;
                    font-weight: 800;
                    font-size: 30.22px;
                    line-height: 36px;
                    text-align: center;
                    letter-spacing: 1.11719px;
                    /* Primary / Default */
                    color: #8D2D92 !important;
                }
                .patient__card:hover{
                        cursor:pointer;
                }

                .patient_card_bg{
                    background: #8D2D92 !important;
                    color:#fff !important;
                }

                /*******************************
            * MODAL AS LEFT/RIGHT SIDEBAR */ 
            .modal.right .modal-dialog {
                position: fixed;
                margin: auto;
                width: 25%;
                height: 100%;
                z-index: 49999;
                -webkit-transform: translate3d(0%, 0, 0);
                    -ms-transform: translate3d(0%, 0, 0);
                    -o-transform: translate3d(0%, 0, 0);
                        transform: translate3d(0%, 0, 0);
            }

            .modal.left .modal-content, .modal.right .modal-content {
                height: 100%;
                overflow-y: auto;
            }
            
            .modal.left .modal-body, .modal.right .modal-body {
                padding: 15px 15px 80px;
            }
        
            /*Right*/
            .modal.right.fade .modal-dialog {
                right: -25%;
                -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
                -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
                    -o-transition: opacity 0.3s linear, right 0.3s ease-out;
                        transition: opacity 0.3s linear, right 0.3s ease-out;
            }
            
            .modal.right.fade.in .modal-dialog {
                right: 0;
            }

        /* ----- MODAL STYLE ----- */
            .modal-content {
                border-radius: 0;
                border: none;
            }

            .modal-header {
                border-bottom-color: #EEEEEE;
                background-color: #FAFAFA;
            }

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
							<img src="assets/images/user.png" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="account.php">Profile</a></li>
								<li><a class="dropdown-item" href="settings.php">Settings</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="../signIn/">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
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
			    <div class="row g-4 mb-4"> 
					    <div class="app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
                            <div class="topHeader d-flex justify-content-between align-items-center">
                                <h1 class="h1 mx-2">&nbsp;Patients <span><i class="fa fa-users"></i> 32</span></h1>  
                                <div class="d-flex align-items-center">
                                    <span style="position:relative;left:30px;"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control searchInput" placeholder="Search table" value="search table"/> 
                                    <button class="btn btn-sm btn-icon btn-prima" type="button">
                                        <i class="fa fa-filter"></i>
                                    </button> 
                                </div>
                            </div> 
						</div><!--//app-card--> 
			    </div><!--//row--> 



                <div class="app-card app-card-basic mx-4">
                     <div class="table-responsive">
                     <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="w-10">SN</th>
                                        <th scope="col" class="w-30">Name</th> 
                                        <th scope="col" class="w-10">Age</th>
                                        <th scope="col" class="w-10">Gender</th> 
                                        <th scope="col" class="w-20">Cancer type</th> 
                                        <th scope="col" class="w-15">Last logged symptom</th> 
                                        <th scope="col" class="w-5"></th>
                                    </tr>
                                </thead>
                                <tbody id="patientsTableBody">  <tr><td colSpan="6"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></td></tr></tbody>
                            </table>
                     </div>
                </div>

                <div class="bottom_page_hints app-card app-card-basic mx-4 my-4 d-flex justify-content-between align-items-center">
            
                       <div> <label class="green_label"></label> <span>Last updated 3:05pm</span> <a href="#">Refresh</a> </div>

                       <div class="d-flex align-items-center"> 
                            <span class="mx-1">  <a href="#" class="previousPage"> <i class="fa fa-chevron-left"></i></a>  </span>
                            <span class="mx-1">1 of 32 </span>
                            <span class="mx-1"> <a href="#" class="nextPage"> <i class="fa fa-chevron-right"></i></a> </span>
                       </div>
                       
                       <div class="d-flex align-items-center"> 
                            <span class="mx-1"> Rows per page</span>  
                            <select class="mx-1 rowsPerPage" style="border:0; background: #F3F4F6;"> 
                                <option>6</option>
                                <option>12</option>
                                <option>18</option>
                                <option>24</option>
                                <option>30</option>
                            </select>
                       </div>
                       
                       
                </div>

                
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    
    </div><!--//app-wrapper-->   
    <div class="modal fade" id="patientModal" tabindex="-1" aria-labelledby="patientModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header border-0"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
                <div class="modal-body">                   
                    <div class="container mx-2">
                        <h5 class="card-title text-secondary text-bold text-center view__more">View More</h5>
                        <p class="text-center text_desc">Select what you info you want to view for <span class="patientsNameHolder"><b>Robert Fox</b></span></p>
                        <div class="row mx-2 mb-4">
                            <div class="col-sm-4">
                                <div class="card border-0 patient__card" id="side_effects">
                                <div class="card-body border-0 d-flex justify-content-around align-items-center">
                                    <img class="logo-icon" src="../assets/img/side-effects.svg" alt="logo"  style="width: 100%; height: 100%;"/>
                                    <span class="card-title text_patient">Side Effects</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-0 patient__card" id="profile">
                                <div class="card-body border-0 d-flex justify-content-around align-items-center">
                                    <img class="logo-icon" src="../assets/img/profile.svg" alt="profile"  style="width: 100%; height: 100%;"/>
                                    <span class="card-title text_patient">Profile</span> 
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card border-0 patient__card" id="treatment">
                                <div class="card-body border-0 d-flex justify-content-around align-items-center">
                                    <img class="logo-icon" src="../assets/img/treatment.svg" alt="logo"  style="width: 100%; height: 100%;"/>
                                    <span class="card-title text_patient">Treatments</span> 
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>


                 </div> 
            </div>
        </div>
    </div>		
    
    



    <!-- Modal -->
	<div class="modal right fade" id="rghtSwingModal" tabindex="-1" aria-labelledby="rghtSwingModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"> 
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="rghtSwingModal">Right Sidebar</h4>
				</div>

				<div class="modal-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</p>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	

 
    <!-- Javascript -->          
 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 
    <script>
        $(document).ready(function(){
            var settings = {
                    "url": "../../api/admin/patients.php",
                    "method": "GET",
                    "timeout": 0,
                    "headers": { "Content-Type": "application/json" },
                };  
                
                $.ajax(settings).done(function (response) {
                     console.log(response);  
                     let json = JSON.parse(response);                   
                     console.log(json.data);  

                     let Patients = json.data.filter((item)=>item.user_type=='patient'); 
                     let patatientString ="";                   
                      Patients.map((item,i)=>(
                          patatientString+=`<tr> <th scope="row">${++i}</th>
                                                 <td>${item.lname + ' '+item.fname }</td>
                                                 <td>${item.age}</td>
                                                 <td>${item.gender}</td>
                                                 <td>${item.cancer_type}</td> 
                                                 <td>Today</td> 
                                                <td> <a href="#" class ="patientClass" id='patient__${item.userId}'>View More</a> </td>
                                            </tr>`
                      )); 
                       $("#patientsTableBody").html(patatientString);                 
                }); 

                // When view more button is clicked
                let pat_id;
                $(document).on("click",".patientClass",function(evt){
                    evt.preventDefault();
                    pat_id = $(this).attr("id");
                    $('#patientModal').modal('show');
                });

                //handle when view more options is selected 
               $(document).on("click",".patient__card",function(){
                   let id_section = $(this).attr("id"), stringPath ="";  // side_effects profile treatment
                    // $('#patientModal').modal('hide'); // $('#rghtSwingModal').modal('show');
                    let url ;
                    if(id_section==='profile'){
                        stringPath ="Profile";
                        url="./patient_details.php?path="+stringPath+"&&uid="+pat_id;
                    }else if(id_section==='side_effects'){
                        stringPath ="Side Effects";
                        url="./patient_side_effects.php?path="+stringPath+"&&uid="+pat_id;
                    }else{
                        stringPath ="Treatment";
                        url="./patient_treatment.php?path="+stringPath+"&&uid="+pat_id;
                    }

                    location.href = url;

               });
                
        });
    </script>
</body>
</html> 

