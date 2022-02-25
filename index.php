<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose</title>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Lato&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->

    <link href="./patients/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./patients/assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
    <link href="./patients/assets/css/swal.css"      rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="preload" as="font" href="./patients/assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="./patients/assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="shortcut icon" href="./patients/assets/img/logo.png">  
    <script src="./patients/assets/js/swal.js"></script>
    <style>
      body{
        font-family: Inter !important;
        font-style: normal;
        font-weight: normal;
      }
      .intro_text{
        font-family: Inter;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 26px;
        /* or 160% */ 
        color: #2E0746;
        /* Inside auto layout */
        flex: none;
        order: 1;
        flex-grow: 0;
        margin: 8px 0px
      }
      .__header{
          margin:20px 85px 0px 85px;
      }

      .__margin{
        margin-right:75px!important;
        margin-left:75px!important;
      }
      .heading{
        font-family: Inter;
        font-style: normal;
        font-weight: 800;
        font-size: 60px;
        line-height: 80px;
        /* identical to box height, or 133% */ 
        letter-spacing: -0.04em; 
        color: #2E0746; 
        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 20px 0px;
      }
    .btn-outline-primary{
      background-color: #fff !important;
      border: 1px solid #6E7191 !important;
      color: rgba(141, 45, 145, 0.8) !important;
    }
    .btn-outline-primary:hover{
      background-color: rgba(141, 45, 145, 0.8) !important; /*background: linear-gradient(180deg, #8D2D91 0%, rgba(141, 45, 145, 0.8) 100%); */ 
      color: #fff !important;
    }
    .btn-primary{
      background: linear-gradient(180deg, #8D2D91 0%, rgba(141, 45, 145, 0.8) 100%) !important;
      color: #fff !important; 
    }
    .inner__container{ 
      width: 471.99px;
      height: 471.99px;
      background: #F3EAFF;
      border-radius: 50%;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
    .inner__inner__container{ 
      width: 75%;
      height: 75%; 
      background: #FFE7F4;  
      border-radius: 50%;
    }
    .__first_lady{
      position:relative;
      top: 25%;
      left: -100px;
    }
    .__top_guy{
      position:relative;
      top: -400px;
      left: 130px;
    }
    .__bottom_guy{
      position:relative;
      top: -380px;
      left: 50px;
      z-index: 2999;
    }
    .__center__lady{
      position: relative;
      top: -30%;
      left: -;
      z-index: 2000;
    }

/*  MEDIA QUERIES */
@media only screen and (max-width : 320px) {
  .__header{
    margin:5px 25px 0px 25px;
  }
  .__margin{
    margin-right:25px!important;
    margin-left:25px!important;
  }
  .heading{ 
    font-weight: 400;
    font-size: 30px;
    line-height: 20px; 
    margin: 5px 0px;
  }
  .intro_text{ 
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 13px; 
  }
}
  
/* Extra Small Devices, Phones */ 
@media only screen and (min-width : 320px) {

   
}

/* Small Devices, Tablets */
@media only screen and (min-width : 768px) {

}


    </style>
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <div class="d-flex justify-content-between align-items-center __header">
            <div class="logo__holder">
                <a href="/"><img src="./patients/assets/img/logo.svg" alt="prose Logo" /> </a>
            </div>
            <div class="btn-group" role="group" aria-label="Oncopadi"> 
                <a href ="./intro.php?onco_type=signUp" class="btn btn-primary mx-2 rounded">SignUp</a>
                <a href ="./signIn/" class="btn btn-outline-primary rounded">SignIn</a>
            </div>
    </div>

    <section class="row __margin">
             <div class="col-md-6"> 
                    <p class="heading">Help us <label style="color:rgb(141, 45, 145);">help you</label>.</p>
                    <p class="intro_text">
                         <strong style="font-weight:900; color:black;">About 60% of people</strong> diagnosed with cancer require radiotherapy at some point in their care.
                    </p> 

                    <p class="intro_text">
                        Radiotherapy is an essential treatment option in cancer care that uses powerful light (ionizing radiation) to kill cancer cells and shrink tumours. However, radiotherapy not only kills or slows down the growth of cancer cells, it can also cause damage to healthy cells, and result inside effects. 
                    </p> 
                    <p class="my-4"><a href ="./patients/signUp/intro.php" class="btn btn-primary px-4 py-2 rounded">Learn More <img src="./patients/assets/img/arrow_down.svg" alt="prose arrow" /></a></p>
             </div>

             <div class="col-md-6">
                 <div class="inner__container justify-content-center align-items-center">
                         <div class="inner__inner__container">
                           <div class="__first_lady"><img src="./patients/assets/img/landing/first_lady.svg" alt="prose" /></div>
                              <div class="__center__lady"><img src="./patients/assets/img/landing/center_lady.svg" alt="prose" /></div>
                                 <div class="__top_guy"><img src="./patients/assets/img/landing/top_guy.svg" alt="prose" /></div>
                                   <div class="__bottom_guy"><img src="./patients/assets/img/landing/bottom_guy.svg" alt="prose" /></div>
                        </div>
                 </div>
             </div>
    </section>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="./patients/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="./patients/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="./patients/assets/js/bootstrap.js"></script>

  </body>

</html>
