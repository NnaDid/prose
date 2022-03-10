<?php require_once("../../top.php"); ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | Admin</title>
    
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
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<link href="../assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
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
		line-height: 22px;
		/* identical to box height, or 137% */
		display: flex;
		align-items: center;
		text-align: center;
		/* Primary/800 */
		color: #57166A;
		/* Inside auto layout */
		flex: none;
		order: 0;
		flex-grow: 0;
		margin: 34px 0px;
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
        color: #FFFFFF; 
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

       
        .h1 span{
            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 54px;
            /* identical to box height, or 300% */ 
            color: #928E92;
        }

		.h1{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 40px;
			line-height: 54px;
			/* identical to box height, or 135% */
			display: flex;
			align-items: center;
			text-align: center;
			color: #8C2E90;
			/* Inside auto layout */
			flex: none;
			order: 0;
			flex-grow: 0;
			margin: 4px 0px;
		}


        table th, table td {
            border: 0 !important; 
            padding: 10px !important;
            text-align: center;
            vertical-align:middle;
			border-radius:10px;
        }

        table thead tr th{
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 14px; 
            /* identical to box height */ 
            font-feature-settings: 'ss01' on; 
            color: #8D2D91;
            text-align: center;
            vertical-align: middle;
			border-radius:10px;
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

		.text_number{
			font-family: Inter;
			font-style: normal;
			font-weight: bold;
			font-size: 26px; 
			display: flex;
			align-items: center;
			text-align: center;
			/* Primary/800 */
			color: #57166A;  
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
				            <a href="#" role="button" aria-expanded="false"><img src="assets/images/user.png" alt="user profile"></a>
				            
			            </div><!--//app-user-dropdown--> 
						<!--//app-utility-item-->
			            <div class="app-utility-item ">
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
						<img class="logo-icon me-2" src="../../patients/assets/img/logo.svg" alt="logo"  style="width: 100%; height: 100%;"/></a>
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">					        
					        <a class="active nav-link d-flex justify-content-start align-items-center" href="index.php">
						        <span class="w-40">
								   <img class="logo-icon" src="../assets/img/home.svg" alt="logo"  style="width: 35px; height: 35px;"/> 
								</span>
		                         <span class="nav-link-text w-60 mx-3">Home</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item--> 
					   
					    <li class="nav-item"> 					        
					        <a class="nav-link d-flex justify-content-start align-items-center"href="patients.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/patients.svg" alt="logo"  style="width: 35px; height: 35px;"/>
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
									<img class="logo-icon" src="../assets/img/chat.svg" alt="logo"  style="width: 35px; height: 35px;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Chat</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item">					        
					        <a class="nav-link d-flex justify-content-start align-items-center"href="./profile/">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/profile.svg" alt="profile"  style="width: 35px; height: 35px;"/>
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
			    <div class="row mx-3 mb-4 my-4"> 
					    <div class="app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
                            <div class="topHeader d-flex justify-content-between align-items-center">
                                <h1 class="h1 mx-2">Hi <?=$fname; ?></h1>  
                                <div class="imagHolder d-flex align-items-center mx-2"> 
							     	<img src="../assets/img/wave.svg" class="mx-2" style="width: 60px; height: 60px"/>
                                </div>
                            </div> 
						</div><!--//app-card--> 
			    </div><!--//row--> 


			<!--  Over lapping cards row-->
				<div class="row g-4 mx-3 overlapping_cards">
				    <div class="col-12 col-lg-4">
					    <div class="app-card d-flex px-2 justify-content-space-between align-items-center shadow-sm">
						  <img src="../assets/img/chat.svg" style="width:60px; height: 60px; margin-left:20px;"/>
							 <div class="di mx-2 mt-2">
								    <span  style="margin-top:20px; margin-bottom:-30px;" class="text_number">20</span>
									<span class="text_desc">Patients</span>
							 </div> 
						</div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4">
					    <div class="app-card d-flex px-2 justify-content-space-between align-items-center shadow-sm"> 
						    <img src="../assets/img/patients.svg" style="width:60px; height: 60px; margin-left:20px;"/>
							 <div class="di mx-1 mt-2">
								    <span  style="margin-top:20px; margin-bottom:-30px;" class="text_number">60</span>
									<span class="text_desc">Health Care Professionals</span>
							 </div>
						</div><!--//app-card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4">
					    <div class="app-card d-flex px-2 justify-content-space-between align-items-center shadow-sm"> 
						     <img src="../assets/img/chat.svg" style="width:60px; height: 60px; margin-left:20px;"/>
								<div class="di mx-2 mt-2">
									<span style="margin-top:20px; margin-bottom:-30px;" class="text_number">20</span>
									<span class="text_desc">Unread Messages</span>
								</div>
						</div><!--//app-card-->
				    </div><!--//col-->

				<!--app-card-->
				<div class="row g-4 mx-1 overlapping_cards">
					<div class="app-card app-card-basic" style="border-radius:10px;">
						<div class="table-responsive">
								<table class="table table-bordered rounded"  style="border-radius:10px;">
									<thead>
										<tr>
										<th scope="col">SN</th>
										<th scope="col">Name</th>
										<th scope="col">Age</th>
										<th scope="col">Gender</th>
										<th scope="col">Cancer Type</th>
										<th scope="col">Last logged symptom</th>
										<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
										<th scope="row">1</th>
											<td> 
											<div class="profile_con d-flex justify-content-start align-items-center">
												<img src="assets/images/user.png" style="width: 60px; height: 60px;" alt="user profile">
												<span class="mx-1">Mark</span>
											</div> 
											</td>
											<td>56</td>
											<td>Male</td>
											<td>Cancer Type</td>
											<td>Today</td>
											<td><a href="./profile/user_details.php?userId=12&name=Mark">View More</a></td>
										</tr> 
										<tr>
										<th scope="row">2</th>
											<td>
											<div class="profile_con d-flex justify-content-start align-items-center">
												<img src="assets/images/user.png" style="width: 60px; height: 60px;" alt="user profile">
												<span class="mx-1">Mark</span>
											</div>
											</td>
											<td>76</td>
											<td>Female</td>
											<td>Cancer Type</td>
											<td>Today</td>
										<td><a href="./profile/user_details.php?userId=12&name=Mark">View More</a></td>
										</tr> 
										<tr>
										<th scope="row">3</th>
											<td>
											<div class="profile_con d-flex justify-content-start align-items-center">
												<img src="assets/images/user.png" style="width: 60px; height: 60px;" alt="user profile">
												<span class="mx-1">Melinda</span>
											</div>
											</td>
											<td>76</td>
											<td>Female</td>
											<td>Cancer Type</td>
											<td>Today</td>
											<td><a href="./profile/user_details.php?userId=13&name=Melinda">View More</a></td>
										</tr> 
										<tr>
										<th scope="row">4</th>
											<td>
											<div class="profile_con d-flex justify-content-start align-items-center">
												<img src="assets/images/user.png" style="width: 60px; height: 60px;" alt="user profile">
												<span class="mx-1">Gates</span>
											</div>
											</td>
											<td>66</td>
											<td>Female</td>
											<td>Cancer Type</td>
											<td>Today</td>
										<td><a href="./profile/user_details.php?userId=14&name=Gates">View More</a></td>
										</tr> 
									</tbody>
								</table>
						</div>
					</div>

					<div class="bottom_page_hints app-card app-card-basic my-4 d-flex justify-content-between align-items-center">
				
						<div> <label class="green_label"></label> <span>Last updated 3:05pm</span> <a href="#">Refresh</a> </div>

						<div class="d-flex align-items-center"> 
								<span class="mx-1">  <a href="#" class="previousPage"> <i class="fa fa-chevron-left"></i></a>  </span>
								<span class="mx-1">1 of 32 </span>
								<span class="mx-1"> <a href="#" class="nextPage"> <i class="fa fa-chevron-right"></i></a> </span>
						</div>
						
						<div class="d-flex align-items-center"> 
								<span class="mx-1"> Rows per page</span>  
								<select class="mx-1" style="border:0; background: #F3F4F6;"> 
									<option>6</option>
									<option>12</option>
									<option>18</option>
									<option>24</option>
									<option>30</option>
								</select>
						</div>
						
						
					</div>
			    </div>
                
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 
</body>
</html> 

