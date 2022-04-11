<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose | upload-consent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A corporate Bootstrap theme by Medium Rare">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link href="../assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
    <link rel="icon shortcut" href="../assets/img/logo.png">
    <style>
      .consent_label{
        border-radius: 10px !important;
        font-family: Lato !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 16px; !important
        line-height: 28px !important;
        /* or 175% */ 
        letter-spacing: 0.95px !important;
        /* Grayscale / Body */
        color: #4E4B66 !important;
      }
     .drag_drop_area_form{
         cursor: pointer;
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
          <!-- <img src="assets/img/dividers/divider-vertical-1.svg" alt="graphical divider" data-inject-svg /> -->
        </div>
      </div>
      <div class="col px-5 position-relative d-flex align-items-center">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <img src="../assets/img/logo.svg" height ="" width ="100%" alt="prose" style="transform: scale(0.5);"/> 
              <h4 class="mb-1 begin_text" style="font-size: 36px !important;">Email Verification </h4> 
               <div class="alert alert-primary">
                   Congratulations your email is sucessfully verified.
               </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){ 
            setTimeout(() => { location.href ="./continue-1.php?token=36gga67ayhu8djjknnkjkjhkhh8787dsh89876gghhgsghs879hgsdssdds90ds89s8d90s8d90s8d0s8d09sdsdhshdsjdsdsd6s";  }, 2000);
         });
    </script>


  </body>

</html>
