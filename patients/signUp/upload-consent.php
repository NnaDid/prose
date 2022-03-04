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
              <h4 class="mb-1 begin_text" style="font-size: 36px !important;">Upload Signed Consent Form</h4> 
              <p class="text-muted mb-0">
                <a href="../../PROSE informed consent.docx" style="color:red !important; font-size:13px !important;" download>
                  Click here to download and fill the consent form before uploading <i class="fa fa-arrow-down"></i>
                </a>
              </p>

                <form action ="#" enctype ="multipart/form-data" class="drag_drop_area_form text-center card my-4" style="height:200px; border:1px dotted #ccc; border-radius:4px;">
                    <input type="file" class="consent_file" name="file" hidden>
                    <div class="uploader_container d-flex flex-column align-items-center justify-content-cemter my-auto" id="drop-area">
                            <img src="../assets/img/upload.png" style="height: 60px; width: 60px;" alt="Image" class="upload-consent-image">
                            <p>Drag and drop to upload</p>        
                    </div>
                    <div class="details" style="padding:4px; margin:10px;"> 
                            <span class="name"></span> 
                            <div class="progress_report" style="height:10px; display:none; background-color:#8D2D91; border-radius:6px;"></div>
                            <span class="percent"></span> 
                    </div>
              </form>


              <div class="form-group my-2" style="margin-top:120px !important;">
                <a  href="../../intro.php" class="btn-block btn btn-primary btn-lg start_button isDisabled"> Next </a>
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
        $('.give_consent').change(function(){
           if($(this).is(":checked")){
             $(".start_button").removeClass("isDisabled");
           }else{
            $(".start_button").addClass("isDisabled");
           }
        });

        // Triger file upload when the form is clicked
        let form         = document.querySelector('form');
        let consent_file = form.querySelector('.consent_file');

        form.addEventListener('click', function(e) {
            //e.preventDefault();
            consent_file.click();
        });

        consent_file.onchange =({target})=>{
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
