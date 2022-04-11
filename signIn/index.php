<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose | Sign-in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PROESE CARE SignIn">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="../patients/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../patients/assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
    <link href="../patients/assets/css/swal.css"      rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="preload" as="font" href="../patients/assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="../patients/assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="shortcut icon" href="../patients/assets/img/logo.png">  
    <script src="../patients/assets/js/swal.js"></script>
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
          padding: 5px;
          font-size: 16px;
          line-height: 1;
          border: 0;
          border-radius: 5px;
          height: 34px;
          background: url('../patients/assets/img/Forward.png') no-repeat right #ddd;
          -webkit-appearance: none;
          background-position-x: 333px;
        }
</style>
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <section class="row no-gutters min-vh-100 p-0">
      <div class="col-lg-4 bg-primary-3 d-flex justify-content-end">
        <img src="../patients/assets/img/prose_bg.svg" alt="Image" class="bg-image">
        <div class="divider divider-vertical d-none d-lg-block">
          <!-- <img src="../assets/img/dividers/divider-vertical-1.svg" alt="graphical divider" data-inject-svg /> -->
        </div>
      </div>
      <div class="col px-5 position-relative d-flex align-items-center">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <img src="../patients/assets/img/logo.svg" height ="" width ="100%" alt="prose" style="transform: scale(0.7);"/> 
              <h1 class="mb-1 begin_text">Sign In</h1>
              <p class="text-start">Welcome to PROSE Care, To get <br/> started, Sign-in here</p>
            </div>  
            <form class ="signInForm"  method="post">
                <div class="form-group">
                    <small class="input_text_label">Email</small>
                    <input type="email" name="email" placeholder="eg omalicha@gmail.com" class="form-control form-control-lg email">
                </div>
             <div class="form-group">
                   <small class="input_text_label">Password</small>
                    <div class="input-group">
                        <input type="password" class="form-control form-control-lg pwd py-3" name ="pwd"  Placeholder="Enter your password here" required />
                        <div class="input-group-append">
                             <span class="input-group-text"><i class="fa fa-eye-slash togleView"></i></span>
                       </div>
                  </div>
                    <span class="float-right  text-small input_text_label">Forgot Password? &nbsp; <a href="../recover/"> Click here <img src="../patients/assets/img/Forward Arrow.png" /></a></span> 
              </div> 

                <div class="___result"> </div>
                  <div class="form-group mt-4">
                      <button class="btn-block btn btn-primary btn-lg signIn" type="submit">Sign in</button>
                  </div>  
                  <div class="text-center text-small input_text_label my-4">
                    <span>Don't have account? <a href="../intro.php?onco_type=signUp"> SignUp here <img src="../patients/assets/img/Forward Arrow.png" /></a>
                    </span>
                  </div>
             </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="../patients/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../patients/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../patients/assets/js/bootstrap.js"></script>

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



      $(document).on('submit','.signInForm', function(evt){
          evt.preventDefault();
          let result      = $('.___result'); 
          // ===========================================================//
          let email       = $('.email').val();
          let pwd         = $(".pwd").val(); 
          // ===========================================================//
          let data  = { email: email,pwd: pwd };                    
         
         // console.log(data);
          result.html('Please wait...');

        fetch('../api/patients/auth/login.php', {
            method: "POST",
            body: JSON.stringify(data),
            headers: {"Content-type": "application/json; charset=UTF-8"}
        })
        .then(response => response.json()) 
        .then((json)=>{
          console.log(json);
          
          if(json.msg.success == 'success'){
            result.html('<div class="alert alert-success" style="color:green;">Successful!</div>'); 
            Toast.fire({ icon: 'success',title: 'Successful!'});
            let userType = json.msg.user_type;
            switch(userType){
              case 'patient':
                window.location.href = "../patients/home/";
                break;
              case 'care_giver':
                window.location.href = "../patients/home/";
                break;
              case 'professional':
                window.location.href = "../hcp/home/";
                break;
              case 'admin':
                window.location.href = "../admin/home/";
                break;
              default:
                window.location.href = "../patients/home/";
                break;
            }
            // setTimeout(()=>{  window.location.href = './continue-2.php';  }, 3000);
          }else{
            result.html('<div class="alert alert-danger" style="color:red;">'+json.msg+'</div>');
          }
        })
        .catch(err => console.log(err.toString()));

        });



 
          
        });
    </script>

  </body>

</html>
