<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose | Intro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A corporate Bootstrap theme by Medium Rare">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="patients/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="patients/assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" /> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="patients/assets/img/logo.png">  
   <style>
     body{
            font-family: Inter !important;
            font-style: normal !important;
     }

     .custom-control label{
        font-family: Inter !important;
        font-style: normal !important;
        font-size: 14px !important;
     }
      .sub_text{
            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 22px;
            text-align: center;
            letter-spacing: 0.75px; 
            color: #4E4B66;
      }
      .begin_text{
        font-family: Inter;
        font-style: normal;
        font-weight: 800;
        font-size: 36px;
        line-height: 66px; 
        text-align: center;
        letter-spacing: 1px; 
        color: #8D2D92;
      }
      .text_heading{
        font-family: Inter;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 34px;  
        text-align: center;
        letter-spacing: 0.75px; 
        color: #4E4B66;
      }

      .custom-checkbox .custom-control-label::before {
        border-radius: 999px; 
        height: 28px;   
        width: 28px;
      }


      .round {
      position: relative;
      /* left:-70px; */
      }

      .round label {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 50%;
      cursor: pointer;
      height: 28px;
      left: 0;
      position: absolute;
      top: 0;
      width: 28px;
      }

      .round label:after {
      border: 2px solid #fff;
      border-top: none;
      border-right: none;
      content: "";
      height: 6px;
      left: 7px;
      opacity: 0;
      position: absolute;
      top: 8px;
      transform: rotate(-45deg);
      width: 12px;
      }

      .round input[type="checkbox"] {
      visibility: hidden;
      }

      .round input[type="checkbox"]:checked + label{
      background-color: #8D2D91 !important;
      border-color:#8D2D91 !important;
      }

      .round input[type="checkbox"]:checked + label:after {
      opacity: 1;
      }
   </style>
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <section class="row no-gutters min-vh-100 p-0">
      <div class="col-lg-4 bg-primary-3 d-flex justify-content-end">
        <img src="patients/assets/img/prose_bg.svg" alt="Image" class="bg-image">
        <div class="divider divider-vertical d-none d-lg-block">
          <img src="patients/assets/img/dividers/divider-vertical-1.svg" alt="graphical divider" data-inject-svg />
        </div>
      </div>
      <div class="col px-5 position-relative d-flex align-items-center">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <img src="patients/assets/img/logo.svg" height ="" width ="100%" alt="prose" style="transform: scale(0.7);"/> 
              <h1 class="mb-1 begin_text">Sign Up</h1>
              <p class="sub_text">Welcome to PROSE Care, <br/> To get started, Sign-up here</p>

              <p class="text_heading">Select your profile.</p>

              <div class="custom-control custom-checkbox d-flex justify-content-start">
                <div class="round mx-4">
                  <input type="checkbox" class="custom-control-input form-control-lg consent__patient give_consent" name ="user_type[]" value="patient" id="checkbox_1" /> 
                  <label for="checkbox_1"></label>
                </div>
                <label class="" style=""> I am receiving treatment </label>
              </div> 

              <div class="custom-control custom-checkbox d-flex justify-content-start">
                <div class="round mx-4">
                  <input type="checkbox" class="custom-control-input consent__care_giver give_consent" name ="user_type[]" value="care_giver" id="checkbox_2" />  
                  <label for="checkbox_2"></label>
                </div>
                <label class="" style=""> I am caring for someone with cancer </label>
              </div> 

              <div class="custom-control custom-checkbox d-flex justify-content-start">
                <div class="round mx-4">
                  <input type="checkbox" class="custom-control-input consent__care_giver give_consent" name ="user_type[]" value="hcp" id="checkbox_3" />    
                  <label for="checkbox_3"></label>
                </div>
                <label class="" style=""> I am a Health Care Professional</label>
              </div>  
              
              <div class="form-group mt-2">
                <a href="#" class="btn-block btn btn-primary btn-lg start_button isDisabled" disabled>Continue</a>
              </div>

            </div> 

          </div>
        </div>
      </div>
    </section>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="patients/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="patients/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="patients/assets/js/bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){ 
          
          $('.consent__patient, .consent__care_giver, .consent__hcp').change(function(){
            if($(".consent__patient").is(":checked") || $(".consent__care_giver").is(":checked") || $(".consent__hcp").is(":checked")){
                console.log($(this).val());
                $(".start_button").removeClass("isDisabled");
                let userType     = $(this).val(); 
                let searchParams = new URLSearchParams(location.search);
                let actionType   = (searchParams.get('onco_type')!==null) ? searchParams.get('onco_type') :'signIn';

                $(document).on('click','.start_button', function(evt){
                    evt.preventDefault();
                    switch(userType){
                        case 'hcp':  
                              switch(actionType){
                                  case 'signUp': location.href = "./hcp/signUp/"; break;
                                  case 'signIn': location.href ="./hcp/signIn/";   break;
                              }
                        break;
                        case 'care_giver': 
                             switch(actionType){
                                  case 'signUp': location.href = "./cgv/signUp/";  break;
                                  case 'signIn': location.href ="./cgv/signIn/";    break;
                              }  
                        break;

                        case 'patient': 
                             switch(actionType){
                                  case 'signUp': location.href = "./patients/signUp/";  break;
                                  case 'signIn': location.href ="./patients/signIn/";    break;
                              }
                        break;
                    }
                });

              }else{
               $(".start_button").addClass("isDisabled");
              }
        });

      });
    </script>

  </body>

</html>
