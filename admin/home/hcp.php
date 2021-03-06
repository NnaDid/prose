<?php require_once("../../top.php");?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Prose | HCP </title>
    
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="../assets/css/swal.css" rel="stylesheet" type="text/css" media="all" />
    <script src="../assets/js/swal.js"></script>
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
				            <a  href="?u=logout" title="logout">Logout </a>
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
					        <a class="nav-link d-flex justify-content-start align-items-center"href="patients.php">
						        <span class=""> 
									<img class="logo-icon" src="../assets/img/patients.svg" alt="logo"  style="width: 100%; height: 100%;"/>
								 </span>
		                         <span class="nav-link-text mx-3">Patients</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->

                        <li class="nav-item"> 					        
					        <a class="active nav-link d-flex justify-content-start align-items-center"href="hcp.php">
						        <span class="w-40"> 
									<img class="logo-icon" src="../assets/img/patients.svg" alt="logo"  style="width: 35px; height: 35px;"/>
								 </span>
		                         <span class="nav-link-text w-60 mx-3">HC Professionals</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
					    <li class="nav-item"> 					        
					        <a class="nav-link d-flex justify-content-start align-items-center" href="chat.php">
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
                                <h1 class="h1 mx-2">&nbsp;Health Care Professionals <span><i class="fa fa-users"></i> <label class="professionalCounter"></label></span></h1>  
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
                                    <th scope="col">SN</th>
                                    <th scope="col">Name</th> 
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Hospital</th>
                                    <th scope="col">Specialty</th> 
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="professioalTableList">
                                     
                                </tbody>
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
                            <select class="mx-1" style="border:0; background: #F3F4F6;"> 
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

 
    <!-- Javascript -->          
 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script>
        $(document).ready(function(){
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
          });

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

                     let Professional = json.data.filter((item)=>item.user_type=='professional'); 
                     let patatientString ="";  
                     $(".professionalCounter").html(Professional.length);                 
                      Professional.map((item,i)=>(
                          patatientString+=`<tr> <th scope="row">${++i}</th>
                                                 <td>${item.lname+ ' '+item.fname }</td>
                                                 <td>${item.age}</td>
                                                 <td>${item.gender}</td>
                                                 <td>${item.hospital}</td> 
                                                 <td>Today</td> 
                                                <td> 
                                                   <a href="#" class ="patientClass" id='patient__${item.userId}'>View More</a> 
                                                   <a href="#" class ="patientClassDelete mx-4" id='patient__${item.userId}'><i class="fa fa-trash text-danger"></i></a> 
                                                </td>
                                            </tr>`
                      )); 
                       $("#professioalTableList").html(patatientString);                 
                });

                $(document).on("click",".patientClassDelete",function(e){
                    e.preventDefault();
                    let id = $(this).attr("id").split("__")[1]; 
                    if(confirm("Are you sure you want to delete this user?")){
                        fetch('../../api/deleteUser.php', {                                       
                                    method: "POST",
                                    body: JSON.stringify({uid:id}),
                                    headers: {"Content-type": "application/json; charset=UTF-8"}
                                })
                                .then(response =>response.json()) 
                                .then((json)=>{
                                    if(json.status == 'success'){
                                        console.log(json);  
                                        Toast.fire({ icon: 'success',title: 'Successfully deleted' });
                                        setTimeout(() => {  location.reload();  }, 2000);
                                    }else{ 
                                        console.log(json); 
                                        Toast.fire({ icon: 'error',title: 'Error Deleting this user!'});
                                    }
                                })
                                .catch(err => console.log(err));
                        }
                });

        });
    </script>
</body>
</html> 

