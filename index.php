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
      width: 471px;
      height: 471px;
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
    }
    .__top_guy{
      position:relative; 
      left:30px;
      top:60px;
    }
    .__bottom_guy{
      position:relative; 
      top:130px;
      margin-left:60px;
    }
    .__center__lady{
      position: relative; 
    }

    .__center__lady img{
        width:1000px !important;
        height:100% !important;
    }

  .headr__cancer_type{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 33px;
    line-height: 40px; 
    letter-spacing: -0.02em;
    color: #691D6D; 
  }

  .cancer__type{ 
    border-radius: 20px; 
  }

  .cancer__type ul{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 28px; 
    color: #1A4263;   
    margin: 16px 0px;
  }



  .breast{
    background: #FEE6FF;
  }

  .head_neck{
    background: #DEF0FF;
  }

  .Pelvic{
    background: #EBECFF;
  }


  .early_reporting{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 28px; 
    color: #2E0746; 
    flex: none;
    order: 0;
    flex-grow: 0;
    margin: 0px 113px;
  }

.__footer_top{
  width: 100%;
  height: 461px;
  background: #212121;
}
  .__footer{ 
    width: 100%;
    height: 66px; 
    bottom: 0; 
    background: #151515;
  }

  .footer__headers{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 24px; 
    font-feature-settings: 'salt' on, 'liga' off;
    color: #FFFFFF;
  }

  .footer_section_content{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 24px; 
    font-feature-settings: 'salt' on, 'liga' off;
    color: #FFFFFF;
  }
  .footer_section_content p>a{
    color: #FFFFFF !important;
  }

.call_to_action_section{
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  padding: 64px; 
  width: 1010px;
  height: 389px; 
  background: linear-gradient(180deg, #57166A 0%, rgba(87, 22, 106, 0.8) 100%);
  border-radius: 40px;
}

.btn-prosecare{  
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 28px; 
  color: #0F172A !important; 
  background:#ffffff;
  flex: none;
  order: 0;
  flex-grow: 0; 
  padding: 10px ;
}

.top__circle__level__solution{
  position: relative;
  width: 52px;
  height: 53px;
  top:45px;
  left:200px;
  border-radius:50%;
  background: #EBECFF;
  mix-blend-mode: normal;
  opacity: 0.9;
}

.top_circle__level{
  position: relative;
  width: 52px;
  height: 53px;
  top:25px;
  left:100px;
  border-radius:50%;
  background: #EBECFF;
  mix-blend-mode: normal;
  opacity: 0.9;
}
.diameter_circle__level{
  position: relative;
  width: 66px;
  height: 67px;
  top:200px;
  left:-50px;
  border-radius:50%; 
  background: #FEE6FF;
  mix-blend-mode: normal;
  opacity: 0.9;
}
.bottom_circle__level{
  position: relative;
  width: 95px;
  height: 96px;
  top:-100px;
  left:120px;
  border-radius:50%; 
  background: #DEF0FF;
  mix-blend-mode: normal;
  opacity: 0.9;                      
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

    <section class="row __margin d-flex justify-content-between align-items-center">
             <div class="col-md-5"> 
                    <p class="heading">Help us <label style="color:rgb(141, 45, 145);">help you</label>.</p>
                    <p class="intro_text">
                         <strong style="font-weight:900; color:black;">About 60% of people</strong> diagnosed with cancer require radiotherapy at some point in their care.
                    </p> 

                    <p class="intro_text">
                        Radiotherapy is an essential treatment option in cancer care that uses powerful light (ionizing radiation) to kill cancer cells and shrink tumours. However, radiotherapy not only kills or slows down the growth of cancer cells, it can also cause damage to healthy cells, and result inside effects. 
                    </p> 
                    <p class="my-4"><a href ="./intro.php" class="btn btn-primary px-4 py-2 rounded">Learn More <img src="./patients/assets/img/arrow_down.svg" alt="prose arrow" /></a></p>
             </div>

             <div class="col-md-5 ml-4">
                 <div class="inner__container justify-content-center align-items-center">
                         <div class="inner__inner__container">
                               <!-- <div class="__first_lady"><img src="./patients/assets/img/landing/first_lady.svg" alt="prose" /></div> -->
                               <div class="__center__lady">
                                  <img src="./patients/assets/img/artboard.png" style="width:150%;" alt="prose" />
                                </div>
                               <!-- <div class="__top_guy"><img src="./patients/assets/img/landing/top_guy.svg" alt="prose" /></div> -->
                               <!-- <div class="__bottom_guy"><img src="./patients/assets/img/landing/bottom_guy.svg" alt="prose" /></div> -->
                        </div>
                 </div>
             </div>
    </section>


    <section style="background: #FFF5FA;"> 
          <div class="header d-flex justify-content-center align-items-center"> 
            <h2 class="__treatment_side__effects">Treatment sites and possible side effects</h2>
          </div>

          <div class="row treament__info d-flex justify-content-center align-items-center">
             <div class="content col-md-6 row my-4 d-flex justify-content-center align-items-center">
                  <div class="image__holder col-md-4"> 
                      <img src="./patients/assets/img/treament_image.svg" alt="treament Image">
                  </div>
                  <div class="content col-md-8">
                      Side effects caused by radiotherapy may occur <strong>depending on the part of your body being treated</strong>. 
                      Below shows the parts of your body being treated and the side effects you may expect 
                  </div>
             </div>

          </div>


          <div class="row row-cols-1 row-cols-md-3 g-4 __margin">
            <div class="col-md-4">
              <div class="card h-100 cancer__type breast mb-4">
                <div class="card-body">
                  <img src="./patients/assets/img/breast.svg" alt="breast">
                  <h3 class="headr__cancer_type">Breast</h3>
                    <ul>
                        <li>Fatigue</li>
                        <li>Hair loss</li>
                        <li>Skin changes</li>
                        <li>Swelling (edema)</li>
                        <li>Tenderness</li>
                    </ul>           
                </div> 
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100 cancer__type head_neck mb-4">
                <div class="card-body"> 
                  <img src="./patients/assets/img/head_neck.svg" alt="head_neck">
                    <h3 class="headr__cancer_type">Head and Neck</h3>
                    <ul> 
                        <li>Fatigue</li>
                        <li>Hair loss</li>
                        <li>Mouth changes</li>
                        <li>Skin changes</li>
                        <li>Taste changes</li>
                        <li>Throat changes (such as difficulty swallowing)</li>
                    </ul>
                </div> 
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100 cancer__type Pelvic mb-4">
                <div class="card-body"> 
                  <img src="./patients/assets/img/pelvic.svg" alt="Pelvic">
                  <h3 class="headr__cancer_type">Pelvic</h3>
                    <ul>
                    <li>Diarrhea</li>
                    <li>Fatigue</li>
                    <li>Hair loss</li>
                    <li>Nausea and vomiting</li>
                    <li>Sexual problems</li>
                    <li>Fertility problems</li>
                    <li>Skin changes</li>
                    <li>Urinary bladder changes</li>
                    </ul>
                </div> 
              </div>
            </div>
          </div>

    </section>

   <!-- Problem and soulution section -->
    <section class="problem__solution __margin" style="background: #FFF;">
          <div class="problem__c">
              <div class="header d-flex justify-content-start align-items-center"> 
                    <h2 class="__treatment_side__effects">The Problem</h2>
              </div>

              <div class="problem__container d-flex justify-content-between align-items-center row mb-4">
                    <div class="problem__content col-md-5">
                        Researchers have noted that the <strong>majority of patients undergoing radiotherapy</strong> have a high incidence of side effects, <strong>do not report their symptoms regularly</strong>,
                        and experience difficulties while trying to report them. These events may cause patients to suffer unnecessarily from preventable side effects during treatment. 
                    </div>
                 <div class="problem__image col-md-4"> 
                      <div class="diameter_circle__level"></div>
                      <div class="top_circle__level"></div>
                      <img src="./patients/assets/img/problem.svg" alt="problems image" /> 
                      <div class="bottom_circle__level"></div>
                    </div>
              </div>
          </div>

          <div class="solution__c">  
            <div class="header d-flex justify-content-center align-items-center"> 
                  <h2 class="__treatment_side__effects">The Solution</h2>
            </div> 
            <div class="problem__container d-flex justify-content-between align-items-center row">
                  <div class="problem__image col-md-4">  
                      <div class="top__circle__level__solution"></div>
                      <div class="inner__img__container" style="background-image:url('./patients/assets/img/solution.png'); background-repeat:no-repeat; background-position:center;height:250px;">
                          <!-- <div class="top_circle__level"></div> -->
                          <img src="./patients/assets/img/solution_part_one.svg" style="height:120px; wieight:120px;" alt="prose" class="__top_guy"/> 
                          <img src="./patients/assets/img/solution_part_two.svg" style="height:120px; wieight:120px;" alt="prose"  class="__bottom_guy"/>
                      </div>
                  </div>
                  <div class="problem__content col-md-5">
                        We are partnering with Researchers from the College of Medicine, University of Lagos and NSIA-LUTH Cancer Centre to explore how 
                        patients can use a digital tool (the PROSEcare app), to report the side effects they experience while on radiotherapy, and 
                        receive immediate responses from their doctors and nurses.
                    </div> 
            </div>
          </div>


    </section>


    <section style="background: #FFF5FA;"> 
          <div class="header d-flex justify-content-center align-items-center"> 
            <h2 class="__treatment_side__effects text-center">We imagine a world where if you are <br/> experiencing side effects</h2>
          </div> 

          <div class="row row-cols-1 row-cols-md-3 g-4 __margin d-flex justify-content-between align-items-center">
            <div class="col-md-3">
              <div class="card h-100 cancer__type breast mb-4">
                <div class="card-body">
                  <img src="./patients/assets/img/you_can_one.png" alt="breast">
                   <p> You can report your side effects as frequently as you want on the PROSE care app </p>          
                </div> 
              </div>
            </div>
            <h3><img src="./patients/assets/img/you_can_arrow.png" alt="head_neck"></h3>
            <div class="col-md-3">
              <div class="card h-100 cancer__type head_neck mb-4">
                <div class="card-body"> 
                  <img src="./patients/assets/img/you_can_two.png" alt="head_neck">
                   <p>You can have your radiation oncology team monitor your side effects on the app and respond to you promptly</p>
                </div> 
              </div>
            </div>
            <h3><img src="./patients/assets/img/you_can_arrow.png" alt="head_neck"></h3>
            <div class="col-md-3">
              <div class="card h-100 cancer__type Pelvic mb-4">
                <div class="card-body"> 
                  <img src="./patients/assets/img/you_can_three.png" alt="Pelvic">
                   <p>You are able to review all side effects reported on the PROSE care app with your oncology team during your clinic visits.</p>
                </div> 
              </div>
            </div> 
          </div>


          <!--  Early Reporting Section -->

          <div class="d-flex justify-content-center align-items-center row __margin"> 
              <div class="col-md-8 row d-flex justify-content-center align-items-center early_reporting">
                  <div class="early__reporting col-md-8">
                  <strong>Early reporting, systematic monitoring</strong> of side effects from radiotherapy can lead to significant benefits in patient care,
                    and <strong>enhance timely interventions</strong>.
                </div>
                <div class="early__reporting__img col-md-3 ml-4"> 
                    <img src="./patients/assets/img/early_reporting.png" alt="frame">
                </div> 
              </div>
          </div>  

    </section>

    <section class="py-4 my-4 d-flex justify-content-center align-items-center">
         <div class="call_to_action_section">
            <div class="inner___cta row d-flex justify-content-center align-items-center">
                <div class="col-md-4">
                    <img src="./patients/assets/img/cta.png" style="" alt="CTA">
                </div>
                <div class="col-md-8 text-white">
                    We aim to help patients experiencing radiotherapy-induced side effects improve their 
                    treatment outcomes, decrease morbidity, prevent hospitalization, and save cost through the use of the PROSEcare app.
                   <p> <a href="./intro.php?onco_type=signUp" class="btn btn-prosecare">Sign up for PROSEcare</a> </p>
                </div>
            </div>
         </div>
    </section>

<!-- footer Section  -->
    <div class="__footer_top">
          <div class="row __margin pt-4">
                <div class="col-md-3">
                    <h4 class="footer__headers">Contact Us</h4>
                  <div class="footer_section_content">
                    <p> RBRR Digital Health hub
                          Department of Radiation Biology, Radiotherapy and Radio-diagnosis, College of Medicine, University of Lagos, Lagos Nigeria.
                          (Mon-Fri from 8am-4pm)  
                      </p>
                    <p><small>+234-818-752-7806, +234-803-553-0802</small></p>
                    <p>research@oncopadi.com</p>
                    <p class="d-flex justify-content-between align-items-center">
                      <span class="fa fa-facebook fa-2x"></span> 
                      <span class="fa fa-twitter fa-2x"></span> 
                      <span class="fa fa-instagram fa-2x"></span> 
                      <span class="fa fa-linkedin fa-2x"></span> 
                      <span class="fa fa-youtube fa-2x"></span> 
                    </p>
                  </div>
                </div>

                <div class="col-md-3">
                    <h4 class="footer__headers">Quick Links</h4>
                    <div class="footer_section_content">
                      <p> <a  href ="./intro.php?onco_type=signUp">SignUp</a></p>
                      <p> <a href="./signIn/">SignIn</a></p>
                      <p> <a href="#">About PROSEcare</a></p>
                    </div>
                </div>

                <div class="col-md-3">
                   <h4 class="footer__headers">Legal</h4>
                   <div class="footer_section_content">
                      <p> <a href="#">Privacy Policy</a></p>
                      <p> <a href="#">Terms of Service</a></p>
                   </div>
                </div>

                <div class="col-md-3">
                   <img src="./patients/assets/img/logo.svg" alt="prose Logo" />
                </div>
          </div>
    </div>

    <div class="__footer text-center d-flex justify-content-center align-items-center">
         © 2022 ONCOPADI TECHNOLOGIES LIMITED. ALL RIGHTS RESERVED
    </div>



    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="./patients/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="./patients/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="./patients/assets/js/bootstrap.js"></script>

  </body>

</html>
