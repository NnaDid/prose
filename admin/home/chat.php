<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | HCP Chat</title>
    
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
            width: 50%;
            height: 75px;  
            position: fixed;
            bottom: 0;
            right: 0;  
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
            width: 400px;
            height: 176px;
            left: 0;
            position:absolute;
            background: #FFFFFF;  
            margin: 10px 0px;
            border-radius:15px;
        }
        .receiverMsg{ 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 36px; 
            width: 400px;
            height: 256px;
            position:absolute;
            right: 0px; 
            background: #FFFFFF; 
            margin: 10px 0px;
            border-radius:15px; 
            margin-top:200px;

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
      .message_section{
        position: fixed;
        padding: 36px; 
        width: 425px;
        min-height: 100vh; 
        height:100%;
        overflow-y: scroll;
      }
      .msg{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 16px;  
        width: 350px;
        height: 88px; 
        background: #FFFFFF; 
        flex: none; 
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
						<img class="logo-icon me-2" src="../../patients/assets/img/logo.svg" alt="logo"  style="width: 100%; height: 100%;"/>
                    </a>
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
					        <a class="nav-link d-flex justify-content-start align-items-center"href="patients.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/patients.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Patients</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					   
					    <li class="nav-item"> 					        
					        <a class="nav-link d-flex justify-content-start align-items-center"href="../hcp.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/patients.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Professionals</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item"> 					        
					        <a class="nav-link active d-flex justify-content-start align-items-center"href="chat.php">
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
					    <div class="col-lg-5 app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">
                            <div class="topHeader d-flex justify-content-between align-items-center">
                                <h1 class="h1 mx-2">&nbsp;Chat</h1>  
                            </div> 

                            <div class="row">
                                <div class="col-md-12 message_section">
                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                    <div class="msg d-flex justify-content-start align-items-center border-bottom"> 
                                         <img class="logo-icon me-2" src="assets/images/user.png" alt="user"  style="width: 45px; height: 45px;"/>
                                         <div class="info">
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <h6 style="margin-bottom:-5px;">Michelle Smith</h6>
                                                    <i>Yesteday</i>
                                             </div>
                                              <div class="top d-flex justify-content-between align-items-center">
                                                    <span>Lorem ipsum is just ...</span>
                                                    <span class="btn btn-success" style="background: #58DDC8 !important; border-radius:50%;">2</span>
                                             </div>
                                         </div>
                                    </div> <!-- End of msg / -->

                                </div>   
                           </div>
						</div><!--//app-card--> 

					        <div class="col-lg-7 app-card app-card-basic my-4"  style="background: #e5d2e80c !important;">  
                                <div class="chat_area mx-4">

                                        <div class="senderMsg">
                                                <h5 class="h5">Study Coordinator</h5>
                                                <span>Hi There!. What do you need help with?</span>
                                                <span class="time my-2">Now</span>
                                        </div>

                                        <div class="receiverMsg">
                                                <h5 class="h5_2">Jane Doe</h5>
                                                <span>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                                    incididunt ut labore et dolore magna aliqua. Ut enim 
                                                </span>
                                                <span class="time my-2">11:59pm Tuesday</span>
                                        </div>


                                        <!--  The Chat Input Field -->
                                        <div class="chat_input_container">
                                            <input type="text" class="chatInput" placeholder ="Send Message"/>
                                            <div class="sendIcons d-flex justify-content-between align-items-center w-20">
                                                <img src="../assets/img/attach.svg"/> 
                                                <img src="../assets/img/send.svg"/> 
                                           </div>
                                        </div>
                                    <!--  The Chat Input Field /-->

                                </div> 
			    </div><!--//row-->


			    
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

