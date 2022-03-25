<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose | Sign-Up Step 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prose Care">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="../assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/swal.css"      rel="stylesheet" type="text/css" media="all" /> 
    <!--  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- Nice Select CSS -->
    <link id="theme-style" rel="stylesheet" href="../home/assets/css/bootstrap-datepicker.min.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <link rel="preload"    as="font" href="../assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"    as="font" href="../assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/img/logo.png">  
    <script src="../assets/js/swal.js"></script>
    <style>
      body{
          font-family: Lato;
      }
      .begin_text{
        font-family: Lato;
        font-style: normal;
        font-weight: 800;
        font-size: 36px;
        line-height: 43px;
        text-align: center;
        letter-spacing: 1px;
        color: #8D2D92;
      }
      .text-start{
        font-family: Lato;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        text-align: center;
        letter-spacing: 0.75px;
        color: #4E4B66;
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
      .input_text_label{
        font-family: Lato;
        font-style: normal;
        font-weight: bold;
        font-size: 16px;
        line-height: 28px;
        /* identical to box height, or 175% */
        display: flex;
        align-items: center;
        letter-spacing: 0.75px;
        /* Grayscale / Label */
        color: #6E7191;
        /* Inside auto layout */
        flex: none;
        order: 1;
        flex-grow: 0;
        margin: 0px 0px;
      }
      form#msform input::placeholder{
        font-family: Lato;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 28px; 
        display: flex;
        align-items: center;
        letter-spacing: 0.75px; 
        color: #A0A3BD; 
        /* Inside auto layout */ 
        flex: none;
        order: 1;
        flex-grow: 0;
        margin: 0px 0px;
      }  
       select::-ms-expand { display: none; }
        select{ 
          width:100%;
          padding: 5px;
          font-size: 16px;
          line-height: 1;
          border: 0;
          border-radius: 5px;
          height: 34px;
          background: url('../assets/img/Forward.png') no-repeat right #ddd;
          -webkit-appearance: none;
          background-position-x: 95%;
        }
    </style>
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <section class="row no-gutters min-vh-100 p-0">
      <div class="col-lg-4 bg-primary-3 d-flex justify-content-end">
        <img src="../assets/img/prose_bg.svg" alt="Image" class="bg-image">
        <div class="divider divider-vertical d-none d-lg-block">
          <img src="../assets/img/dividers/divider-vertical-1.svg" alt="graphical divider" data-inject-svg />
        </div>
      </div>
      <div class="col px-5 position-relative d-flex align-items-center">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <img src="../assets/img/logo.svg" height ="" width ="100%" alt="prose" style="transform: scale(0.7);"/> 
              <h1 class="mb-1 begin_text">Continue Your <br/> Account Setup</h1>
              <p class="text-start">let's get you all set up</p>
            </div>  
            <!-- Start Multiform HTML --> 
            <form id="msform" method="post" action="./continue-2.php">  
                <!-- progressbar -->
                <div id="progressbar" class="d-flex justify-content-between my-3">
                    <a class="firstForm active">1</a>   
                    <a class="secondForm isDisabled">2</a>   
                    <a class="thirdForm  isDisabled">3</a>   
                </div>
                <!-- fieldsets -->
                <fieldset>
                    <div class="form-group">
                        <small class="input_text_label">First Name</small>
                        <input type="text" name="firstName" placeholder="eg John" class="form-control form-control-lg firstName" />
                    </div>    

                    <div class="form-group">
                        <small class="input_text_label">Last Name</small>
                        <input type="text" name="lastName" placeholder="eg John" class="form-control form-control-lg lastName" />
                    </div>    
    
                    <div class="form-group">
                        <small class="input_text_label">Date of Birth</small>
                        <input type="text" name="dob" placeholder="Date of Birth" class="form-control form-control-lg dob" />
                    </div>    

                    <div class="form-group">
                        <small class="input_text_label">Age</small>
                        <input type="text" name="age" placeholder="eg 39" class="form-control form-control-lg age"  readonly/>
                    </div>   
    
                    <div class="form-group mb-3">
                        <small class="input_text_label">Gender</small>
                        <select name="gender" class="form-control form-control-lg gender">
                            <option disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value ="female">Female</option>
                        </select>
                    </div>    

                    <div class="form-group mb-3">
                        <small class="input_text_label">Level of Education</small>
                        <select name="education_level" class="form-control form-control-lg education_level">
                            <option disabled selected>eg. Tertiary</option>
                            <option value="uneducated">Uneducated</option>
                            <option value="primary">Primary</option>
                            <option value ="secondary">Secondary</option>
                            <option value ="tertiary">Tertiary</option>
                            <option value ="OND|HND">OND/HND</option>
                            <option value ="others">Others</option>
                        </select>
                    </div>   
                    <div class="form-group others_section" style="display:none;">
                        <small class="input_text_label">Enter the other type here</small>
                        <input type="text" name="others" placeholder="Enter the type of Education here" class="form-control form-control-lg others"/>
                    </div>
                    <div class="form-group">
                        <small class="input_text_label">PIN (Personal Identifier Number)</small>
                        <input type="text" name="pin_no" placeholder="eg ONC2939" class="form-control form-control-lg pin_no" required/>
                    </div>   
                  
                    <div class="___result py-2 my-1"> </div>

                    <div class="form-group">
                        <button class="btn-block btn btn-primary btn-lg continue_1" type="submit">Continue</button>
                    </div>   

                   
                </fieldset>

                </form>   
            <!-- END Multiform HTML --> 

          </div>
        </div>
      </div>
    </section>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <!-- <script src="../assets/js/script.js"></script> -->
    <script src="../home/assets/js/bootstrap-datepicker.min.js"></script> 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>

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

        
        $(document).on("change",".education_level",function(){ 
          if($(this).val()=='others'){
            $(".others_section").show(100);  
          }else{
            $(".others_section").hide(100);  
          }
        });
     
       $(document).on('submit','#msform', function(evt){
          evt.preventDefault();
          let result          = $('.___result'); 
          // ===========================================================//
          let firstName       = $('.firstName').val();
          let lastName        = $(".lastName").val();
          let dob             = $(".dob").val(); 
          let education_level = ($(".education_level").val()=='others') ? $(".others").val() : $(".education_level").val();
          let pin_no          = $(".pin_no").val();
          let age             = $(".age").val();
          let gender          = $(".gender").val();
          // =======================================================//
          let userEmail       = sessionStorage.getItem("userEmail"); 
          //============================================================//
          let data  = { 
                        email: userEmail,
                        firstName: firstName,
                        lastName: lastName,
                        education_level: education_level,
                        dob: dob,
                        age: age, 
                        gender: gender,
                        pin_no:pin_no,
                      };
          console.log(data);
          result.html('Please wait...');

        fetch('../../api/patients/auth/continue-1.php', {
            method: "POST",
            body: JSON.stringify(data),
            headers: {"Content-type": "application/json; charset=UTF-8"}
        })
        .then(response => response.json()) 
        .then((json)=>{
          console.log(json);
          
          if(json.msg=='success'){
            result.html('<span class="alert alert-success" style="color:green;">Successful!</span>'); 
            Toast.fire({ icon: 'success',title: 'Successful!'});
            setTimeout(()=>{  window.location.href = './continue-2.php';  }, 3000);
          }else{
            result.html('<span class="alert alert-success" style="color:red;">'+json.msg+'</span>');
          }
        })
        .catch(err => console.log(err));

        });




        });
    </script>

  </body>

</html>
