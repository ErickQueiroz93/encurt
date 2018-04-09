<!-- 
   Theme Name: Visa Copa Russia 2018
   Author: MK(rj)
    -->
<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Cadastro | Vai de Visa</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="theme-color" content="#1a1f71">
      
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="stylesheet" type="text/css" href="css/cadastro.css">
      <link href="img/favico.png" rel="Shortcut Icon">

      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
    <script src="js/script1.js"></script>

      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

              <style>

          #spinner-section {
              visibility: hidden;
          }

          #spinner-section.show-spinner-section {
              visibility: visible;
          }

          .vmeCheckoutSpinner {
              position: fixed; 
              top: 35%; 
              right: 0; 
              bottom: 0; 
              left: 0; 
              width: 200px;
              height: 250px;
              margin: auto;
              border-radius: 3px;
              background-color: #ffffff; 
          }

          .vmeCheckoutSpinner.vmeCheckoutSpinner--open { 
              z-index: 100;
              animation: MoveIn 1s, FadeIn 1s;
              animation-fill-mode: forwards;
          }

          .spinnerGhostLayer { 
              position: fixed; 
              top: 0; 
              left: 0; 
              width: 100%; 
              height: 100%;
              /*background-color: rgba(0,0,0,.9);*/
              animation: FadeInGhost 1s;
              animation-fill-mode: forwards;
              filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)"; 
          }

          .spinner-body {
              height: 130px;
          }

          .spinner-header { 
              height: 60px;
          }

          .spinner-footer { 
              height: 60px;
          }

          .close-wrap button { 
              cursor: pointer; 
          } 

          .spinner-close-button { 
              display: block;
              height: 60px;
              width: 40px;
              padding: 0px;
              border: 0;
              background-color: transparent;
              background-repeat: no-repeat;
              margin: 0 auto;
          }

          .spinner-close-button:hover, .spinner-close-button:active, .spinner-close-button:focus {
              outline: 0;
          }

          .checkout-logo { 
              display: block;
              width: 126px;
              margin: 0 auto;
              background-color: transparent;
              background-repeat: no-repeat;
          } 

          .visa-spinner-svg-yellow { 
              position: absolute; 
              top: 0; 
              right: 0; 
              bottom: 0; 
              left: 0; 
              width: 70px; 
              height: 70px; 
              margin: auto; 
              animation: RotateClockwise .6s infinite linear;
              background-color: transparent; 
              background-repeat: no-repeat;
              transform-origin: 50% 50%;
          }

          .visa-spinner-svg-blue { 
              position: absolute; 
              top: 0; 
              right: 0; 
              bottom: 0; 
              left: 0; 
              width: 70px; 
              height: 70px; 
              margin: auto; 
              animation: RotateClockwise .6s infinite linear;
              background-color: transparent; 
              background-repeat: no-repeat;
              transform-origin: 50% 50%;
          }

          .start-animation #main > section > div.viewPage-relativeWrapper {
              visibility: visible;
              animation: FadeIn;
              animation-duration: 1s;
              animation-fill-mode: forwards;
              background-color: #ffffff;
          }

          .start-animation #main > section > div.viewPage-overlay {
              visibility: visible;
          }

          .start-animation #spinner-section > div.spinnerGhostLayer {
              visibility: hidden;
          }

          .start-animation #spinner-section > div.vmeCheckoutSpinner.vmeCheckoutSpinner--open {
              z-index: 0;
              animation: SpinnerFadeOut;
              animation-duration: 1s;
              animation-fill-mode: forwards;
          }

          .start-animation #main > section.viewPage--closing > div.viewPage-relativeWrapper {
              animation: MoveOut, FadeOut;
              animation-duration: .5s;
              animation-timing-function: ease-in-out;
              animation-fill-mode: both;
         }

          @keyframes MoveIn {
              0% {
                  transform: translateY(50vh);
              }

              100% {
                  transform: translateY(0);
              }
          }

          @keyframes FadeIn {
              0% {
                  opacity: 0;
              }

              100% {
                  opacity: 1;
              }
          }

          @keyframes FadeInGhost {
              0% {
                  opacity: 0;
              }

              100% {
                  opacity: 0.9;
              }
          }

          @keyframes SpinnerFadeOut {
              0% {
                  opacity: 1;
              }

              95% {
                  opacity: 1;
              }

              100% {
                  opacity: 0;
              }
          }

          @keyframes RotateClockwise {
              0% {
                  transform: rotate(0deg);
              }

              100% {
                  transform: rotate(359deg);
              }
          }

      </style>

   </head>
   <body id="tela1">
      <header class="hidden-xs hidden-sm">
         <div id="header" class="container-fluid">
            <div class="row" id="principal">
               <div class="container">
                  <div class="row">
                     <div id="logo" class="col-sm-5 col-md-3">
                        <a href="/site/home" data-label="Logo">
                        Vai de Visa
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <meta http-equiv="refresh" content="2;url=https://www.visa.com.br/">

      <div class="container" id="call-cadastro">
         <div class="row">
            <div class="col-sm-12">
               <h2>Obrigado por se cadastrar no Visa Checkout<br>
                  <small>Agora você pode realizar suas compras em lojas online favoritas com apenas um cadastro</small>
               </h2>
            </div>
         </div>
      </div>

      <section id="spinner-section" class=" show-spinner-section show-spinner-section">
          <div class="spinnerGhostLayer"></div>
          <div class="vmeCheckoutSpinner vmeCheckoutSpinner--open vmeCheckoutSpinner--open" aria-label="Visa Checkout is currently loading" tabindex="-1">
              <header class="spinner-header">
                  <svg xmlns="http://www.w3.org/2000/svg" class="checkout-logo" width="100%" height="100%" viewBox="0 0 128 18">
                      <g fill="#003EA9"><path d="M69.308 14.29c-.62.214-1.214.378-1.786.483-.57.11-1.11.166-1.625.166-1.352 0-2.433-.36-3.24-1.08-.81-.72-1.215-1.675-1.215-2.86 0-.78.13-1.517.385-2.208.255-.692.633-1.323 1.133-1.895.588-.67 1.297-1.19 2.126-1.55.828-.362 1.722-.543 2.677-.543.523 0 1.047.06 1.572.18.525.12 1.062.302 1.604.547l-.42 2.02c-.43-.316-.863-.55-1.3-.698-.437-.148-.905-.223-1.403-.223-1.037 0-1.907.388-2.608 1.165-.7.775-1.05 1.746-1.05 2.91 0 .75.213 1.34.645 1.767.43.43 1.028.643 1.787.643.453 0 .936-.08 1.445-.238s1.082-.408 1.716-.75l-.445 2.162zM79.078 10.287l-.896 4.463H75.76l.76-3.822c.056-.248.1-.46.127-.63.03-.173.043-.31.043-.41 0-.28-.08-.495-.24-.648-.158-.152-.384-.228-.676-.228-.498 0-.926.19-1.284.566-.356.377-.605.9-.745 1.567l-.728 3.605h-2.42L72.63 4.568h2.43l-.788 3.926c.443-.422.89-.736 1.34-.943.45-.204.92-.306 1.41-.306.695 0 1.232.176 1.61.53.38.354.565.85.565 1.492 0 .14-.008.295-.03.465-.018.17-.05.356-.09.557zM87.98 11.36l-.083.372h-5.65c0 .027 0 .064-.005.115s-.008.088-.008.113c0 .477.15.83.443 1.068.294.234.735.352 1.323.352.51 0 1.045-.074 1.61-.22.562-.15 1.152-.37 1.772-.663l-.37 1.818c-.587.21-1.174.365-1.756.47-.582.1-1.173.153-1.776.153-1.175 0-2.086-.266-2.726-.793s-.96-1.273-.96-2.238c0-.557.102-1.098.307-1.625.205-.526.503-1.005.894-1.442.465-.523 1.018-.92 1.663-1.19.643-.27 1.358-.406 2.145-.406 1.02 0 1.83.264 2.43.792.602.528.9 1.24.9 2.133 0 .173-.013.357-.036.55-.026.196-.065.41-.117.64zm-2.28-1.073c.014-.057.02-.115.03-.174.005-.06.01-.116.01-.173 0-.35-.108-.626-.324-.832-.216-.204-.508-.307-.877-.307-.474 0-.873.127-1.205.377-.33.25-.58.62-.757 1.11H85.7zM96.068 7.65l-.384 1.91c-.324-.21-.642-.368-.957-.477-.315-.11-.622-.164-.924-.164-.786 0-1.43.255-1.927.768-.498.513-.75 1.17-.75 1.966 0 .512.157.906.467 1.188.31.28.747.422 1.314.422.376 0 .747-.055 1.11-.164.366-.107.71-.27 1.038-.482l-.37 1.916c-.398.135-.802.236-1.206.305-.405.065-.81.1-1.22.1-1.188 0-2.1-.257-2.742-.774-.64-.518-.96-1.252-.96-2.203 0-.596.12-1.178.355-1.74s.574-1.068 1.014-1.518c.49-.492 1.053-.86 1.688-1.1.634-.24 1.363-.36 2.188-.36.383 0 .763.035 1.14.103.378.065.753.166 1.125.302zM98.02 4.568h2.426l-1.106 5.516 3.257-2.664h2.844l-4.386 3.393 3.188 3.938h-2.76l-2.446-3.16-.63 3.16h-2.42L98.02 4.57zM109.23 7.244c1.122 0 2.007.277 2.648.83.643.556.964 1.31.964 2.265 0 .553-.102 1.092-.302 1.613-.204.52-.498.998-.884 1.428-.46.517-1 .905-1.624 1.165-.625.264-1.32.395-2.09.395-1.11 0-1.984-.277-2.626-.832-.64-.553-.96-1.307-.96-2.262 0-.55.104-1.088.31-1.613.208-.527.504-1.008.89-1.444.45-.506.986-.892 1.606-1.153.624-.262 1.315-.393 2.067-.393zm-.195 1.675c-.625 0-1.14.273-1.545.823-.402.55-.605 1.25-.605 2.102 0 .46.107.812.327 1.055.218.244.537.363.953.363.625 0 1.14-.275 1.545-.826.403-.553.605-1.256.605-2.11 0-.46-.11-.808-.327-1.048-.216-.242-.537-.36-.953-.36zM113.588 11.896l.885-4.477h2.418l-.758 3.815c-.056.248-.097.46-.124.633-.027.176-.04.314-.04.414 0 .275.08.488.236.64.158.153.382.23.675.23.497 0 .928-.188 1.287-.562.358-.375.605-.896.74-1.562l.728-3.607h2.42l-1.464 7.33h-2.432l.222-1.073c-.414.422-.846.74-1.3.947-.455.213-.932.316-1.438.316-.687 0-1.22-.176-1.597-.53-.378-.353-.566-.853-.566-1.5 0-.15.01-.31.026-.48.02-.174.047-.35.082-.534zM125.943 5.34l-.41 2.08H128l-.343 1.675h-2.47l-.617 3.102c-.02.07-.03.13-.04.178-.005.05-.01.094-.01.137 0 .2.07.344.207.432.137.088.368.13.69.13h1.247l-.344 1.677h-2.027c-.73 0-1.284-.147-1.666-.446-.383-.295-.573-.725-.573-1.28 0-.122.006-.253.02-.394.014-.14.035-.28.062-.424l1.382-6.865h2.425z"></path>
                      </g><path fill="#003EA9" d="M21.8.32l-7.52 17.41H9.377L5.68 3.832c-.225-.854-.42-1.17-1.103-1.527C3.46 1.72 1.62 1.166 0 .824L.11.32h7.893c1.005 0 1.912.65 2.142 1.774l1.95 10.074L16.926.32H21.8m19.215 11.725c.02-4.594-6.545-4.848-6.5-6.903.014-.622.626-1.286 1.97-1.456.662-.085 2.497-.15 4.575.78l.814-3.69C40.754.378 39.317 0 37.534 0c-4.59 0-7.816 2.37-7.843 5.755-.03 2.51 2.306 3.905 4.064 4.737 1.808.855 2.412 1.402 2.404 2.166-.012 1.168-1.44 1.682-2.775 1.7-2.332.038-3.687-.61-4.766-1.1l-.838 3.82c1.082.48 3.082.9 5.158.92 4.875.002 8.06-2.332 8.077-5.953m12.108 5.684h4.292L53.67.32h-3.96c-.89 0-1.64.5-1.975 1.278l-6.96 16.13h4.87l.968-2.6h5.95l.56 2.6zm-5.176-6.17l2.442-6.536 1.403 6.537h-3.846zM28.43.32L24.59 17.73H19.95L23.79.32h4.64z"></path>
                  </svg>
              </header>
              <div class="spinner-body">
                  <!--?xml version="1.0" encoding="utf-8"?-->
                  <!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                  
                  <svg version="1.1" id="Layer_1" class="visa-spinner-svg-yellow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                      <style type="text/css">
                      .st0{fill:#F7B600;}
                      </style>
                      <path class="st0" d="M45.5,89.1c-24.3,0-44-19.7-44-44s19.7-44,44-44s44,19.7,44,44c0,2.2-1.8,4-4,4s-4-1.8-4-4
                      c0-19.9-16.1-36-36-36s-36,16.1-36,36s16.1,36,36,36c5.7,0,11.2-1.3,16.3-3.9c2-1,4.4-0.2,5.4,1.7c1,2,0.2,4.4-1.7,5.4
                      C59.2,87.5,52.5,89.1,45.5,89.1z">
                      </path>
                  </svg>
                  <svg version="1.1" id="Layer_1" class="visa-spinner-svg-blue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                      <style type="text/css">
                          .st1{fill:#003EA9;}
                      </style>
                      <path class="st1" d="M34.6,87.6c-0.4,0-0.7,0-1.1-0.2c-18.9-5.3-32-22.7-32-42.4c0-24.3,19.7-44,44-44s44,19.7,44,44
                          c0,2.2-1.8,4-4,4s-4-1.8-4-4c0-19.9-16.1-36-36-36s-36,16.1-36,36c0,16.1,10.8,30.3,26.2,34.7c2.1,0.6,3.4,2.8,2.8,4.9
                          C38,86.5,36.4,87.6,34.6,87.6z">
                      </path>
                  </svg>
              </div>
          </div>
          <script>
              var spinnerCloseButton = document.getElementById('spinner-close-button'),
                  showRxoPopup = "", miniRXO = "", allowEXO = "",
                  vmeCheckoutSpinner = document.querySelector('.vmeCheckoutSpinner'),
                  spinnerSection = document.getElementById('spinner-section'),
                  spinnerGhostLayer = document.querySelector('.spinnerGhostLayer');

              if(canUseWebstorage){
                  showRxoPopup = sessionStorage.getItem('showRxoPopup');
                  miniRXO = sessionStorage.getItem('miniRXO');
                  allowEXO = sessionStorage.getItem('allowEXO');
              }

              if(showRxoPopup !== "true" && miniRXO !== "true" && allowEXO !== "true") {
                  vmeCheckoutSpinner.focus();
                  spinnerSection.className += ' show-spinner-section';
                  vmeCheckoutSpinner.className += ' vmeCheckoutSpinner--open';
              }

              spinnerCloseButton.onclick = function() {
                  window.parent.postMessage('close--' + JSON.stringify({
                      gtm: true,
                      event: 'Spinner Screen Close',
                      event_category: 'Spinner',
                      event_label: 'Spinner Screen Close',
                      event_action: 'Spinner Screen Close',
                      screen_name: 'Spinner',
                      screen_end_time: new Date().getTime()
                  }), _postMessageTarget);
              };
          </script>
      </section>
   </body>
</html>