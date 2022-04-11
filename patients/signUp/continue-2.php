<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Prose | Sign-Up Step 2</title>
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
</style>
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
              <p class="text_start">let's get you all set up</p>
            </div>  
            <!-- Start Multiform HTML --> 
            <form id="msform" action="./continue-3.php" method="post">  
                <!-- progressbar -->
                <div id="progressbar" class="d-flex justify-content-between my-3">
                    <a class="firstForm isDisabled">1</a>   
                    <a class="secondForm active">2</a>   
                    <a class="thirdForm isDisabled">3</a>   
                </div>
                <!-- fieldsets -->
                <fieldset>
                  <div class="row"> 
                      <div class="col-md-12">
                          <div class="form-group">
                            <small class="input_text_label">Country Code/Phone</small>
                            <input type="tel" name="phone" id="phone" placeholder="eg 08123457890" class="form-control form-control-lg phone" />
                        </div> 
                      </div>
                  </div>

                    <div class="form-group">
                        <small class="input_text_label">Country</small>
                        <select name="country" class="form-control form-control-lg country" name ="country" id="country" required>
                          <option disabled >Country</option>
                          <option value="Nigeria" selected>Nigeria</option>
                          <!-- <option value ="Ghana">Ghana</option> -->
                      </select>
                    </div>    
    
                    <div class="form-group">
                        <small class="input_text_label">State of residence</small>
                        <select onchange="toggleLGA(this);" name="state" id="state" class="form-control form-control-lg state">
                          <option value="" selected="selected" disabled>- Select -</option>
                          <option value="Abia">Abia</option>
                          <option value="Adamawa">Adamawa</option>
                          <option value="AkwaIbom">AkwaIbom</option>
                          <option value="Anambra">Anambra</option>
                          <option value="Bauchi">Bauchi</option>
                          <option value="Bayelsa">Bayelsa</option>
                          <option value="Benue">Benue</option>
                          <option value="Borno">Borno</option>
                          <option value="Cross River">Cross River</option>
                          <option value="Delta">Delta</option>
                          <option value="Ebonyi">Ebonyi</option>
                          <option value="Edo">Edo</option>
                          <option value="Ekiti">Ekiti</option>
                          <option value="Enugu">Enugu</option>
                          <option value="FCT">FCT</option>
                          <option value="Gombe">Gombe</option>
                          <option value="Imo">Imo</option>
                          <option value="Jigawa">Jigawa</option>
                          <option value="Kaduna">Kaduna</option>
                          <option value="Kano">Kano</option>
                          <option value="Katsina">Katsina</option>
                          <option value="Kebbi">Kebbi</option>
                          <option value="Kogi">Kogi</option>
                          <option value="Kwara">Kwara</option>
                          <option value="Lagos">Lagos</option>
                          <option value="Nasarawa">Nasarawa</option>
                          <option value="Niger">Niger</option>
                          <option value="Ogun">Ogun</option>
                          <option value="Ondo">Ondo</option>
                          <option value="Osun">Osun</option>
                          <option value="Oyo">Oyo</option>
                          <option value="Plateau">Plateau</option>
                          <option value="Rivers">Rivers</option>
                          <option value="Sokoto">Sokoto</option>
                          <option value="Taraba">Taraba</option>
                          <option value="Yobe">Yobe</option>
                          <option value="Zamfara">Zamafara</option>
                        </select>
                    </div>    
    
                    <div class="form-group mb-3">
                        <small class="input_text_label">Town/City</small>
                        <select name="lga" id="lga" class="form-control  form-control-lg select-lga town" required>
                        </select>
                    </div>   
       

                    <div class="form-group mb-3">
                        <small class="input_text_label">Ethnicity</small>
                        <input type="text" name="tribe" id="tribe" placeholder="eg Yoruba" class="form-control form-control-lg tribe" />
                    </div>    
    
                    <div class="form-group">
                        <small class="input_text_label">Religion</small>
                        <select name="religion" class="form-control form-control-lg religion" id="religion">
                          <option disabled selected>Religion</option>
                          <option value="Christianity">Christianity</option>
                          <option value="Traditional Religion">Traditional Religion</option> 
                          <option value="Islam">Islam</option> 
                          <option value="Other">Other</option>
                      </select>
                    </div>    
    
                    <div class="form-group">
                        <small class="input_text_label">Income Level</small>
                        <select name="income_level" class="form-control form-control-lg income_level" id="income_level">
                          <option disabled selected>e.g 200,000 - 500,000 naira monthly</option>
                          <option value="less_than|200,000">less than 200,000 naira monthly</option>
                          <option value="200,000 - 500,000 naira monthly">200,000 - 500,000 naira monthly</option>
                          <option value="500,000 - 1,000,000 naira monthly">500,000 - 1,000,000 naira monthly</option>
                          <option value="above 1,000,000 naira monthly">above 1,000,000 naira monthly</option> 
                      </select>
                    </div>    
                   <div class="form-group ___result"> </div>
    
                    <div class="form-group">
                        <button class="btn-block btn btn-primary   form-control-lg  continue_2" type="submit">Continue</button>
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
    <script type="text/javascript" src="../assets/js/lga.js"></script>
    <!-- <script src="../assets/js/script.js"></script> -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>

    <script type="text/javascript">
        $(document).ready(function(){  
          //----------------------------------------------------------------------
            $("#phone").intlTelInput(); 
            // $("#phone").intlTelInput("setNumber", "+23408123457890"); 
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
          let phone          = $('.phone').val();
          let country        = $(".country").val();
          let state          = $(".state").val();
          let town           = $(".town").val();
          let tribe          = $(".tribe").val();
          let religion       = $(".religion").val();
          let income_level   = $(".income_level").val();
          // =======================================================//
          let userEmail       = sessionStorage.getItem("userEmail"); 
          //============================================================//
          let data  = { 
                        email: userEmail,
                        phone: phone,
                        country: country,
                        state: state,
                        town: town,
                        tribe: tribe, 
                        religion: religion,
                        income_level: income_level,
                      };
          console.log(data);
          result.html('Please wait...');

        fetch('../../api/patients/auth/continue-2.php', {
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
            setTimeout(()=>{  window.location.href = './continue-3.php';  }, 3000);
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
