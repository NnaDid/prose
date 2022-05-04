<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PROSEcare">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
         window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/logo.png">  
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
    <style>
    .custom-checkbox .custom-control-label::before {
        border-radius: 999px; 
        height: 28px;   
        width: 28px;
      }

    .round {
      position: relative;
      left:-70px;
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

    .round input[type="checkbox"]:checked + label {
      background-color: #8D2D91;
      border-color:#8D2D91;
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
        <img src="assets/img/prose_bg.svg" alt="Image" class="bg-image">
        <div class="divider divider-vertical d-none d-lg-block">
          <!-- <img src="assets/img/dividers/divider-vertical-1.svg" alt="graphical divider" data-inject-svg /> -->
        </div>
      </div>
      <div class="col px-5 position-relative d-flex align-items-center">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <img src="./assets/img/logo.svg" height ="" width ="100%" alt="prose" style="transform: scale(0.5);"/> 
              <h1 class="mb-1 begin_text">Let's Begin</h1>
              <p class="">Your consent is required before we continue</p>
            </div>
            <p class="">
                  You are invited to participate in a research study to understand the use of a digital platform to record and 
                  report side effects that occur while on radiotherapy treatment for patients with breast, pelvic or head and neck cancers.
                  This study is designed for men and women, above 18 years old, who are scheduled for radiotherapy. Your participation in this 
                  study is completely voluntary.
            </p>
            <p>To participate in this study you must give informed consent.</p>
     
              <div class="custom-control custom-checkbox my-4 d-flex justify-content-start text-left">
                <div class="round mx-4">
                  <input type="checkbox" id="checkbox" class="give_consent"/>
                  <label for="checkbox"></label>
                </div>
                <label class="text-left" style="position:relative;left:-60px;">
                  I consent to take part in the research study
                </label>
              </div> 

              <div class="form-group mt-2">
                <a  href="#" class="btn-block btn btn-primary btn-lg start_button isDisabled"> Start </a>
              </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>


    <script type="text/javascript">
     $(document).ready(function(){ 
        $('.give_consent').change(function(){
           if($(this).is(":checked")){
             $(".start_button").removeClass("isDisabled");
           }else{
            $(".start_button").addClass("isDisabled");
           }
        });
        let searchParams = new URLSearchParams(location.search);
        $(".start_button").click(function(e){
           e.preventDefault();
           if(searchParams.has('email')){
               let emailUser    =  searchParams.get('email');
               location.href    = "./signUp/upload-consent.php?email="+emailUser;
           }else{
             history.go(-1);;
           }
        });

      });
    </script>

  </body>

</html>
