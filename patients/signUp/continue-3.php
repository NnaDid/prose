<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose | Sign-Up Step 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A corporate Bootstrap theme by Medium Rare">
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
          <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
    <link rel="preload"    as="font" href="../assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"    as="font" href="../assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/img/logo.png">  
    <script src="../assets/js/swal.js"></script>
  </head>
<style>
  .intl-tel-input {
    width: 100% !important;
  }
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
              <h1 class="mb-1 begin_text">Continue Your Account Setup</h1>
               <p class="text-start">let's get you all set up</p>
            </div>  
            <!-- Start Multiform HTML --> 
            <form id="msform">  
                <!-- progressbar -->
                <div id="progressbar" class="d-flex justify-content-between my-3">
                    <a class="firstForm isDisabled">1</a>   
                    <a class="secondForm isDisabled">2</a>   
                    <a class="thirdForm active">3</a>   
                </div>
                <!-- fieldsets -->
                <fieldset> 

                   <div class="form-group mb-3">
                        <small class="input_text_label">Cancer Type</small>
                        <div class="cancer__type__container mb-3">
                          <select  name="cancer_type" id="cancer_type" class="form-control form-control-lg cancer_type" required>
                            <option disabled selected>Cancer Type</option>
                            <option value="Breast cancer">Breast cancer</option> 
                            <option value="Head and Neck Cancer">Head and Neck Cancer</option>  
                            <option value="Male Pelvic Cancer">Male Pelvic Cancer</option> 
                            <option value="Female Pelvic Cancer">Female Pelvic Cancer</option> 
                          </div>
                      </select> 
                    </div> 
                   <div class="form-group mb-3">
                        <small class="input_text_label">Type of device used</small>
                        <div class="cancer__type__container mb-3">
                          <select  name="device_type" id="device_type" class="form-control form-control-lg device_type" required>
                            <option disabled selected>e.g smartphone</option>
                            <option value="Laptop">Laptop</option>
                            <option value ="smartphone">smartphone</option>
                            <option value ="Tablet">Tablet</option> 
                            <option value ="others">Others</option> 
                        </div>
                      </select> 
                    </div> 
                   <div class="form-group mb-3">
                        <small class="input_text_label">Who will report your side effects?</small>
                        <div class="cancer__type__container mb-3">
                          <select  name="effect_reporter" id="effect_reporter" class="form-control form-control-lg effect_reporter"  required>
                            <option disabled selected>e.g caregiver</option>
                            <option value="caregiver">Caregiver</option>
                            <option value ="self">Self</option> 
                          </select>  
                        </div>
                    </div> 
                   <div class="form-group mb-3">
                        <small class="input_text_label">Relationship with caregiver</small>
                        <div class="cancer__type__container mb-3">
                          <select  name="caregiver_relationship" id="caregiver_relationship" class="form-control form-control-lg caregiver_relationship"  required>
                            <option disabled selected>e.g spouse</option>
                            <option value="spouse">Spouse</option>
                            <option value ="child">Child</option>
                            <option value ="sibling">Sibling</option>
                            <option value ="parents">Parents</option>
                          </select>
                        </div>
                      
                    </div> 

                    <div class="form-group mb-3">
                        <small class="input_text_label">Choose Management Team</small>
                        <div class="cancer__type__container mb-3">
                          <select  name="mgt_team" id="mgt_team" class="form-control form-control-lg mgt_team"  required>
                            <option disabled selected>e.g Team A</option>
                            <option value="Team A">Team A</option>
                            <option value ="Team B">Team B</option> 
                          </select>  
                        </div>
                    </div> 
                    
                    <div class="form-group ___result"> </div>
                    
                    <div class="form-group">
                        <button class="btn-block btn btn-primary form-control-lg  continue_2" type="submit">Continue</button>
                    </div>   
                    <!-- data-toggle="modal" data-target="#accounModal" -->
                    
                </fieldset>

                </form>   
            <!-- END Multiform HTML --> 

          </div>
        </div>
      </div>
    </section>






    <div class="modal fade" id="accounModal" tabindex="-1" role="dialog" aria-labelledby="accounModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"> 
            <div class="modal-body text-center">
                <center>
                    <form action="../home" method="post">
                        <h4 class="mb-1 begin_text my-4">Account Set Up Successfully</h4>
                        <div class="check_container" style="border:4px solid rgb(19, 114, 105); border-radius: 50%; width: 100px; height: 100px;">
                            <img src="../assets/img/check.png" alt="prose_check" style="width: 80px; height: 80px;"/> 
                        </div>   
                        <div class="form-group mt-4">
                            <button class="btn-block btn btn-primary form-control-lg  continue_2" type="submit">Continue</button>
                        </div>  
                    </form>
                </center>
            </div> 
          </div>
        </div>
      </div>


    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/lga.js"></script>
    <!-- <script src="../assets/js/script.js"></script> -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>

    <script type="text/javascript">
        $(document).ready(function(){  
          //----------------------------------------------------------------------
            $("#phone").intlTelInput(); 
            $("#phone").intlTelInput("setNumber", "+234"); 
            $("#phone").intlTelInput("setCountry", "ng");
            // --------------------------------------------------------------------
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

      $(document).on('submit','#msform', function(evt){
          evt.preventDefault();
          let result          = $('.___result');  
          // ===========================================================//
          let cancer_type        = $('.cancer_type').val();
          let device_type          = $(".device_type").val();
          let effect_reporter        = $(".effect_reporter").val();
          let caregiver_relationship   = $(".caregiver_relationship").val(); 
          let mgt_team                  = $(".mgt_team").val(); 

          // =======================================================//
          let userEmail       = sessionStorage.getItem("userEmail"); 
          //============================================================//
          let data  = { 
                        email: userEmail,
                        cancer_type: cancer_type,
                        device_type: device_type,
                        effect_reporter: effect_reporter,
                        caregiver_relationship: caregiver_relationship, 
                        mgt_team:mgt_team,
                      };
              console.log(data);
              result.html('Please wait...');

            fetch('../../api/patients/auth/continue-3.php', {
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
                setTimeout(()=>{  
                  $('#accounModal').modal('show');
                 }, 3000);
              }else{
                result.html('<span class="alert alert-danger" style="color:red;">'+json.msg+'</span>');
              }
            })
            .catch(err => console.log(err));

            });


        });
    </script>

  </body>

</html>
