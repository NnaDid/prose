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
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link href="../assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/custom.css"    rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/swal.css"      rel="stylesheet" type="text/css" media="all" /> 
    
    <!--  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
          <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
          <!-- Telephone Input CSS --> 
    <link rel="preload"    as="font" href="../assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"    as="font" href="../assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/img/logo.png">  
    <script src="../assets/js/swal.js"></script>
  </head>
<style>
 
      body{
          font-family: Inter;
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
        font-family: Inter;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        text-align: center;
        letter-spacing: 0.75px;
        color: #4E4B66;
      }
      .input_text_label{
        font-family: Inter;
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
        font-family: Inter;
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
            <form id="msform" enctype ="multipart/form-data">  
                <!-- progressbar -->
                <div id="progressbar" class="d-flex justify-content-between my-3">
                    <a class="firstForm isDisabled">1</a>   
                    <a class="secondForm isDisabled">2</a>   
                    <a class="thirdForm active">3</a>   
                </div>
                <!-- fieldsets -->
                <fieldset>  
                    <div class="form-group">
                        <small class="input_text_label">Hospital</small>
                        <input type="text" name="hospital" placeholder="Hospital" class="rounded form-control form-control-lg hospital" />
                    </div> 

                    <div class="form-group">
                        <small class="input_text_label">Folio Number</small>
                        <input type="text" name="folioNumber" placeholder="Folio Number" class="rounded form-control form-control-lg folioNumber" />
                    </div> 
                    
                    <div class="form-group">
                        <small class="input_text_label">Specialty</small>
                        <input type="text" name="specialty" placeholder="Specialty" class="rounded form-control form-control-lg specialty" />
                    </div> 

                    <div class="form-group">
                        <small class="input_text_label">Managing Team</small>
                        <input type="text" name="managing_team" placeholder="Team" class="rounded form-control form-control-lg managing_team" />
                    </div> 

                    <div class="form-group">
                        <small class="input_text_label">Professional Bio</small>
                        <textarea type="text" name="professiobal_bio" rows="4" placeholder="Professional Bio (Not More than 50 words)" class="rounded form-control form-control-lg professiobal_bio" ></textarea>
                    </div> 
                     
                     <small class="input_text_label">Upload Licence</small>
                      <div class="form-group drag_drop_area_form text-center card my-4" style="height:200px; border:3px dotted #ccc; border-radius:4px;margin-top:-3px !important;">
                          <input type="file" class="consent_file" name="file" hidden>
                          <div class="uploader_container d-flex flex-column align-items-center justify-content-cemter my-auto" id="drop-area">
                                  <img src="../assets/img/upload.png" style="height: 60px; width: 60px;" alt="Image" class="upload-consent-image">
                                  <p>Drag and drop to upload</p>        
                          </div>
                          <div class="details" style="padding:4px; margin:10px;"> 
                                  <p class="name_holder" style="display:none; justify-content: space-between;">
                                    <span class="name"></span> 
                                    <span class="close_file" style="cursor:pointer;">&times;</span>
                                  </p>
                                  <div class="progress_report" style="height:10px; display:none; background-color:#8D2D91; border-radius:6px;"></div>
                                  <span class="percent"></span> 
                          </div>
                    </div>  

                    <div class="form-group">
                        <button class="btn-block btn btn-primary form-control-lg continue_2 start_button isDisabled"  data-toggle="modal" data-target="#accounModal" type="button">Continue</button>
                    </div>   

                    <div class="form-group ___result"> </div>
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


            // Triger file upload when the form is clicked  drag_drop_area_form
        let form         = document.querySelector('#msform');
        let consent_file = form.querySelector('.consent_file');
        let formDragDrop = form.querySelector('.drag_drop_area_form');

        formDragDrop.addEventListener('click', function(e) {
            //e.preventDefault();
            consent_file.click();
        });

        consent_file.onchange =({target})=>{
            console.log(target);
            console.log(target.files);
            let file = target.files[0];  // get only one file
            if(file){
                let fileName = file.name;
                if(fileName.length>=12){
                    let splitName = fileName.split('.');
                    fileName      = splitName[0].substring(0,12)+'... .'+splitName[1];
                }
                console.log(fileName);
                uploadFile(fileName);
            }
        }

      function uploadFile(fileName){
          let xhr = new XMLHttpRequest();
          xhr.open('POST', '');
            xhr.upload.addEventListener("progress", function({loaded, total}) { 
                $(".uploader_container").html("");
                let percentComplete = Math.floor((loaded / total) * 100); 
                $('.progress_report').css('display', 'block');
                $('.name_holder').css('display', 'flex');
                $('.name').html(" uploading..."+fileName);
                $('.percent').html(percentComplete + '% Done');
                $('.progress_report').css('width', percentComplete+ '%');
                if(percentComplete>=100){ 
                    $(".start_button").removeClass("isDisabled");
                    $(".details").addClass("my-auto");
                    $('.name').html(fileName + " uploaded");
                } 
            }, false);

           let formData = new FormData(form);
            formData.append('file', fileName);
            xhr.send(formData);
      }

      // Close/ Remove file to upload another
      $(document).on("click",".close_file",function(evt){
        evt.preventDefault();
         $('.details').hide();

      });



        // Drag and Drop Consent File
        function createFormData(image){
            var formImage = new FormData();
            formImage.append('userImage', image[0]);
            uploadFormData(formImage);
        }

        function uploadFormData(formData){
            $.ajax({
                url: "../../api/patients/upload_consent.php",
                type: "POST",
                data: formData,
                contentType:false,
                cache: false,
                processData: false,
                success: function(data){
                    $('#drop-area').html(data);
                },
                progress: function(e) {
                if (e.lengthComputable) {
                    var pct = (e.loaded / e.total) * 100;
                    $('.progress_report').show();
                    $('.progress-bar').css({
                        "width": pct + "%"
                    });
                    $('.progress-bar span').html(pct + '% complete');
                } else {
                    console.warn('Content Length not reported!');
                }
             }
            });
        }

            $("#drop-area").on('dragenter', function (e){
                    e.preventDefault();
                    $(this).parent().css('background', '#f1f1f1'); 
            });

            $("#drop-area").on('dragleave', function (e){
                    e.preventDefault();
                    $(this).parent().css('background', '#fff');
            });

            $("#drop-area").on('dragover', function (e){
                 e.preventDefault();
            });

        $("#drop-area").on('drop', function (e){ 
                e.preventDefault();
                var image = e.originalEvent.dataTransfer.files;
                // createFormData(image); 
                uploadFile(image[0].name); 
        });

        });
    </script>

  </body>

</html>
