<?php
$songs = array("lalala", "jodela", "i'm blue");
 
?>


 
 @extends('layouts.website')

 @section('section')
 <img id="soundBtn" src="{{asset('assets/images/soundicon.png')}}" width="35" height="35" style="position: fixed;  z-index: 999; top: 20px;  right: 20px; "/>

 <!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="slidecontainer">
      <div class="center">
        <p>Volume</p>
        <input type="range" min="1" max="100" value="50" class="slider"  orient="vertical"  id="volume">
        <p id="volumeT">100 %</p>
      </div>
      <div class="center">
        <p>treble</p>
        <input type="range" min="1" max="100" value="50" class="slider" id="treble">
        <p id="trebleT">100 %</p>
      </div>
      <div class="center">
        <p>mid</p>
        <input type="range" min="1" max="100" value="50" class="slider" id="mid">
        <p id="midT">100 %</p>
      </div>
      <div class="center">
      <p>bass</p>
      <input type="range" min="1" max="100" value="50" class="slider" id="bass">
      <p id="bassT">100 %</p>
      </div>
    </div>
  </div>
</div>


<script class="u-script" type="text/javascript" src="{{asset('assets/soundsettings.js')}}" ></script>
 <link rel="stylesheet" type="text/css" href="{{asset('assets/soundsettings.css') }}" />


    <!-- section 1 -->  
     <section class="u-align-center u-clearfix u-image u-section-1" id="sec-9b1f" data-image-width="1527" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1s">
        <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('assets/images/myMusic.png')}}" alt="" data-image-width="349" data-image-height="302">
        <h1 class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-default u-text-1"> Music for everyone</h1>
        <p class="u-text u-text-body-alt-color u-text-2">founders: Molenaers A. &amp; Purnal L.</p>
        <div class="u-align-center u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout">
            <a href="{{asset('http://127.0.0.1:8000')}}" class="u-active-palette-3-base u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-base u-palette-1-base u-radius-50 u-btn-1">Start Free Trial</a>
          </div>
        </div>
        <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-contain u-image-2" src="{{asset('assets/images/dssdsd-min.png')}}" data-image-width="1200" data-image-height="917">
      </div>
    </section>

     <!-- section 2 -->
     <section class="u-clearfix u-palette-1-base u-section-2" id="carousel_0536">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-3-base u-text-1">Krijg afspeelijsten aan de hand van gekozen sfeer</h3>
                  
                  <!-- liedjes overzicht -->
                  @foreach ($songs as $id)
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                          <img class="u-image u-image-circle u-image-1" src="{{asset('assets/images/f2d4860e6f52543c49d6d7404cddf014f5a237e81416813936c182c19c6b3dbb23e5f6cf53ca08b3ba15a4ccb63c33dc94e889c943d69deebaf288_1280.jpg')}}" alt="" data-image-width="1280" data-image-height="1024">
                          <h4 class="u-text u-text-default u-text-2">Artist: <br>
                          </h4>
                          <h3 class="u-text u-text-default u-text-3">Song: {{$id}} </h3>     

                        </div>
                  @endforeach
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-5">
                  <div class="u-image u-image-circle u-image-4" alt="" data-image-width="800" data-image-height="800"></div>
                  <h3 class="u-text u-text-default u-text-palette-3-base u-text-8">Choose your mood!</h3>
                  <div class="u-border-10 u-border-palette-3-base u-line u-line-horizontal u-line-1"></div>
                  <p class="u-text u-text-9">select your mood in the box</p>

                       
                  <div class="u-form u-form-1">
                    <form action="" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                      <input type="hidden" id="siteId" name="siteId" value="1016227049">
                      <input type="hidden" id="pageId" name="pageId" value="175873667">
                      <div class="u-form-group u-form-select u-form-group-1">
                        <label for="select-0070" class="u-form-control-hidden u-label u-label-1"></label>                       
                        <div class="u-form-select-wrapper">
                          <select id="select-0070" name="select" class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-input u-input-rectangle u-radius-5 u-white">
                            <option value="Happy">Happy</option>
                            <option value="Groovy">Groovy</option>
                            <option value="Energetic">Energetic</option>
                            <option value="Depression">Depression</option>
                            <option value="Calm">Calm</option>
                            <option value="Party">Party</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div>                     
                      <div class="u-align-center u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-5">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                      <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                      <input type="hidden" value="" name="recaptchaResponse">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- section 3 -->
    <section class="u-align-center u-clearfix u-image u-section-3" id="sec-45f1" data-image-width="1920" data-image-height="1080">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-27-lg u-size-27-md u-size-27-sm u-size-27-xs u-size-29-xl u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-white u-text-1">Live Music</h2>
                  <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-white u-text-2">+30 million songs</h4>
                  <p class="u-text u-text-body-alt-color u-text-3">template header
                  </p>
                  <h3 class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-4">6 mounth of premium for $15</h3>
                  <p class="u-custom-font u-font-montserrat u-text u-text-white u-text-5">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-shape-rectangle u-size-31-xl u-size-33-lg u-size-33-md u-size-33-sm u-size-33-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom u-container-layout-2">
                  <img class="u-expanded-width u-image u-image-contain u-image-1" src="{{asset('assets/images/xc-min.png')}}" data-image-width="921" data-image-height="899">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- section 4 -->
    <section class="u-align-left u-clearfix u-palette-1-base u-section-4" id="carousel_fc32">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-3-base u-text-1"> How it works</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-align-left u-icon u-icon-rounded u-palette-3-base u-radius-50 u-spacing-22 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d4a5"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-d4a5" style="enable-background:new 0 0 512 512;"><g><g><path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148    C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962    c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216    h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40    c59.551,0,108,48.448,108,108S315.551,256,256,256z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-default u-text-palette-3-base u-text-2"> Create an account</h5>
                <p class="u-text u-text-palette-1-light-2 u-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-align-left u-icon u-icon-rounded u-palette-3-base u-radius-50 u-spacing-22 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4812"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-4812" style="enable-background:new 0 0 512 512;"><g><path d="M467,181.003H285.509c18.206-30.58,18.794-58.762,9.541-79.51C283.74,76.136,257.928,60.997,226,60.997   c-8.284,0-15,6.716-15,15l0.002,2.399c0.03,32.535,0.045,48.866-56.064,80.907c-23.585,13.468-51.901,21.168-79.748,21.688H75   c-0.078,0-0.154,0.011-0.232,0.012H15c-8.284,0-15,6.716-15,15v210c0,8.284,6.716,15,15,15h57.542   c41.217,13.832,83.137,30,126.747,30H316c24.813,0,45-20.187,45-45c0-5.856-1.136-11.449-3.181-16.586   C376.916,384.212,391,366.726,391,346.003c0-5.856-1.136-11.449-3.181-16.586C406.916,324.212,421,306.726,421,286.003   c0-5.258-0.915-10.305-2.58-15H467c24.813,0,45-20.187,45-45S491.813,181.003,467,181.003z M30,211.003h30v180H30V211.003z    M467,241.003c-20.155,0-157.146,0-181,0c-8.284,0-15,6.716-15,15s6.716,15,15,15c11.219,0,80.184,0,90,0c8.271,0,15,6.729,15,15   s-6.729,15-15,15h-90c-8.284,0-15,6.716-15,15s6.716,15,15,15h60c8.271,0,15,6.729,15,15s-6.729,15-15,15h-60   c-8.284,0-15,6.716-15,15s6.716,15,15,15h30c8.271,0,15,6.729,15,15s-6.729,15-15,15H199.288   c-36.166,0-74.45-13.902-109.288-25.766V210.193c28.248-2.539,55.589-11.004,79.814-24.838   c47.378-27.055,69.415-49.872,71.019-92.652c12.631,3.116,22.086,10.4,26.818,21.01c8.13,18.231,1.096,43.063-18.802,67.291H226   c-8.284,0-15,6.716-15,15s6.716,15,15,15h241c8.271,0,15,6.729,15,15S475.271,241.003,467,241.003z"></path><circle cx="226" cy="375.997" r="15"></circle><circle cx="226" cy="315.997" r="15"></circle><circle cx="226" cy="255.997" r="15"></circle>
</g></svg></span>
                <h5 class="u-text u-text-default u-text-palette-3-base u-text-4"> Choose a plan</h5>
                <p class="u-text u-text-palette-1-light-2 u-text-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-align-left u-icon u-icon-rounded u-palette-3-base u-radius-50 u-spacing-22 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2393"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-2393"><g id="Solid"><path d="m239.029 384.97a24 24 0 0 0 33.942 0l90.509-90.509a24 24 0 0 0 0-33.941 24 24 0 0 0 -33.941 0l-49.539 49.539v-262.059a24 24 0 0 0 -48 0v262.059l-49.539-49.539a24 24 0 0 0 -33.941 0 24 24 0 0 0 0 33.941z"></path><path d="m464 232a24 24 0 0 0 -24 24v184h-368v-184a24 24 0 0 0 -48 0v192a40 40 0 0 0 40 40h384a40 40 0 0 0 40-40v-192a24 24 0 0 0 -24-24z"></path>
</g></svg></span>
                <h5 class="u-text u-text-default u-text-palette-3-base u-text-6"> Download Music</h5>
                <p class="u-text u-text-palette-1-light-2 u-text-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
              </div>
            </div>
          </div>
        </div>
        <a href="{{asset('assets/https://nicepage.com/c/text-button-html-templates')}}" class="u-active-white u-border-none u-btn u-btn-round u-button-style u-hover-white u-palette-3-base u-radius-50 u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1">read more</a>
      </div>
    </section>


     <!-- section 5 -->
    <section class="u-align-center u-clearfix u-image u-section-5" id="sec-75da" data-image-width="1920" data-image-height="1080">
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
                <img class="u-expanded-width u-image u-image-contain u-image-1" src="{{asset('assets/images/sddd-min.png')}}" data-image-width="1128" data-image-height="856">
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-white u-text-1">Kanye Rest</h2>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-white u-text-2">Random Kanye qoutes</h4>
                <p class="u-text u-text-body-alt-color u-text-3" id="kanyeQuote"></p>
                <p class="u-text u-text-body-alt-color u-text-4">~ Kanye West
                </p>
                <a href="https://kanye.rest/" class="u-active-white u-border-none u-btn u-btn-round u-button-style u-hover-white u-palette-3-base u-radius-50 u-text-active-palette-1-base u-text-hover-palette-1-base u-btn-2">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script class="u-script" type="text/javascript" src="{{asset('assets/kanyeRestApi.js')}}" ></script>

     <!-- section 6 -->
    <section class="u-clearfix u-palette-1-base u-section-6" id="carousel_070c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-22 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <h3 class="u-custom-font u-font-oswald u-text u-text-palette-3-base u-text-1"> Our Concept &amp; Artists</h3>
                  <p class="u-text u-text-body-alt-color u-text-2"> template header
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-38 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-text u-text-3"> Sit amet porttitor eget dolor morbi non arcu risus quis. Lacus sed viverra tellus in hac habitasse. Nam libero justo laoreet sit. Donec ultrices tincidunt arcu non sodales neque sodales. Felis eget nunc lobortis mattis aliquam faucibus. Sed id semper risus in hendrerit gravida rutrum quisque. Morbi tincidunt ornare massa eget.</p>
                  <a href="https://nicepage.com/k/portfolio-html-templates" class="u-active-white u-border-none u-btn u-btn-round u-button-style u-hover-white u-palette-3-base u-radius-50 u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-2">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner u-gallery-inner-1">
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide u-back-slide-1" data-image-width="626" data-image-height="342">
                <img class="u-back-image u-expanded u-back-image-1" src="{{asset('assets/images/drummer-plays-drums_169016-5585.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide u-back-slide-2" data-image-width="626" data-image-height="417">
                <img class="u-back-image u-expanded u-back-image-2" src="{{asset('assets/images/man-plays-drums-background-colored-lights_169016-3427.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item">
              <div class="u-back-slide u-back-slide-3" data-image-width="626" data-image-height="417">
                <img class="u-back-image u-expanded u-back-image-3" src="{{asset('assets/images/people-raising-hands-concert_249578-737.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
            <div class="u-effect-fade u-gallery-item u-gallery-item-4">
              <div class="u-back-slide u-back-slide-4" data-image-width="626" data-image-height="417">
                <img class="u-back-image u-expanded u-back-image-4" src="{{asset('assets/images/silhouette-young-lady-crowd-during-concert_181624-27673.jpg')}}">
              </div>
              <div class="u-over-slide u-shading u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



     <!-- section 7 -->
    <section class="u-align-center u-clearfix u-image u-section-7" id="carousel_40b3" data-image-width="1980" data-image-height="1114">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-border-1 u-border-grey-25 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-1-base u-text-1">Contact Info</h3>
            <a href="https://nicepage.com/website-design" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-1"><span class="u-icon u-text-palette-1-base"><svg class="u-svg-content" viewBox="0 0 241.73 241.73" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path style="fill:currentColor;" d="M234.771,181.213l-34.938-34.953c-4.692-4.668-10.975-7.24-17.689-7.24   c-6.987,0-13.584,2.751-18.572,7.742l-13.6,13.597c-10.568-5.874-24.614-13.953-39.197-28.536   c-14.566-14.571-22.646-28.576-28.55-39.201l13.613-13.603c10.121-10.142,10.328-26.413,0.463-36.269L61.37,7.818   c-4.679-4.692-10.962-7.276-17.693-7.276c-6.831,0-13.293,2.63-18.252,7.417c-3,2.416-18.055,15.706-23.666,43.114   c-7.856,38.363,10.194,75.274,62.302,127.403c58.209,58.191,107.902,62.714,121.746,62.714c2.882,0,4.621-0.178,5.085-0.232   c27.147-3.182,36.867-15.238,43.964-24.041C244.052,205.508,244.02,190.496,234.771,181.213z M223.178,207.502   c-6.671,8.274-12.971,16.088-34.031,18.557c-0.011,0.001-1.163,0.13-3.34,0.13c-12.386,0-57.008-4.206-111.139-58.32   C26.615,119.796,9.749,86.829,16.454,54.081c4.894-23.906,17.887-34.067,18.392-34.453l0.448-0.331l0.393-0.394   c2.169-2.167,5.006-3.361,7.989-3.361c2.716,0,5.228,1.018,7.08,2.876l34.939,34.94c4.02,4.016,3.806,10.774-0.471,15.06   L69.829,83.8l-0.253,0.265c-4.012,4.419-3.54,10.391-1.33,14.28c6.377,11.508,15.112,27.269,31.92,44.082   c16.752,16.752,32.49,25.48,43.966,31.845c1.149,0.645,3.521,1.727,6.49,1.727c3.506,0,6.725-1.484,9.108-4.189l14.448-14.444   c2.157-2.158,4.985-3.347,7.964-3.347c2.722,0,5.247,1.021,7.095,2.859l34.915,34.93   C228.587,196.259,226.756,203.064,223.178,207.502z"></path><path style="fill:currentColor;" d="M146.447,37.293c12.887,1.483,28.061,9.289,38.657,19.886c10.695,10.695,18.52,26.023,19.933,39.05   c0.417,3.843,3.667,6.691,7.447,6.691c0.27,0,0.544-0.015,0.818-0.044c4.118-0.447,7.094-4.147,6.647-8.265   c-1.787-16.467-11.075-34.874-24.238-48.038c-13.04-13.041-31.259-22.306-47.549-24.181c-4.113-0.477-7.834,2.479-8.308,6.593   C139.38,33.099,142.331,36.819,146.447,37.293z"></path><path style="fill:currentColor;" d="M139.44,68.711c6.97,0.803,16.616,5.973,22.935,12.292c6.373,6.374,11.553,16.112,12.316,23.157   c0.417,3.844,3.667,6.692,7.447,6.692c0.27,0,0.543-0.015,0.817-0.044c4.118-0.447,7.095-4.147,6.648-8.265   c-1.304-12.028-9.289-24.813-16.623-32.147c-7.268-7.269-19.928-15.216-31.825-16.587c-4.119-0.479-7.835,2.478-8.309,6.592   C132.373,64.516,135.325,68.237,139.44,68.711z"></path>
</g></svg><img></span>&nbsp;+1 (234) 567-8910
            </a>
            <a href="mailto:contact@yourmail.com" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-hover-palette-1-base u-btn-2"><span class="u-icon u-text-palette-1-base u-icon-2"><svg class="u-svg-content" viewBox="0 0 479.058 479.058" style="width: 1em; height: 1em;"><path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path></svg><img></span>&nbsp;contact@yourmail.com
            </a>
            <p class="u-text u-text-2"><span class="u-icon u-text-palette-1-base"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257    c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22    C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34    C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180    C406.1,207.121,398.689,233.688,384.866,256.818z"></path>
</g>
</g><g><g><path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z     M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2    C316.1,212.683,289.784,240.2,256,240.2z"></path>
</g>
</g></svg><img></span>&nbsp;203, Envato Labs, Behind Alis Steet, Australia
            </p>
            <div class="u-social-icons u-spacing-16 u-social-icons-1">
              <a class="u-social-url" target="_blank" title="Custom" href=""><span class="u-icon u-icon-circle u-social-custom u-social-icon u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7180"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-7180"><path d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"></path></svg></span>
              </a>
              <a class="u-social-url" target="_blank" title="Custom" href=""><span class="u-icon u-icon-circle u-social-custom u-social-icon u-text-palette-1-base u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 -45 512.00013 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5fdd"></use></svg><svg class="u-svg-content" viewBox="0 -45 512.00013 512" id="svg-5fdd"><path d="m194.816406 422.710938c-85.453125 0-152.992187-14.929688-185.304687-40.953126l-.628907-.507812-.570312-.570312c-7.675781-7.679688-10.191406-17.753907-6.894531-27.636719l.300781-.820313c4-10.003906 13.800781-16.738281 24.421875-16.800781 21.859375-.378906 40.984375-2.984375 58.339844-8.042969-27.683594-12.875-46.914063-35.167968-58.355469-67.433594-3.847656-10.0625-.527344-21.21875 8.339844-27.871093 2.1875-1.644531 4.660156-2.886719 7.277344-3.71875-15.382813-17.757813-26.746094-37.964844-33.109376-59.335938l-.199218-.664062-.136719-.679688c-2.160156-10.808593 2.671875-21.921875 11.527344-26.707031 3.714843-2.132812 7.75-3.238281 11.800781-3.332031-4.367188-9.40625-7.542969-19.0625-9.425781-28.777344-5.226563-26.921875-.914063-53.910156 12.8125-80.214844l3.175781-6.351562c2.542969-5.082031 7.402344-8.652344 13.003906-9.5625 5.601563-.90625 11.34375.945312 15.355469 4.957031l5.785156 5.792969c45.703125 47.914062 86.640625 70.648437 157.417969 86.203125 3.160156-27.167969 14.90625-52.421875 33.855469-72.296875 22.550781-23.648438 52.664062-36.917969 84.792969-37.371094h.210937c23.441406 0 52.519531 13.382813 70.105469 22.820313 15.085937-4.9375 33.261718-12.582032 52.121094-20.664063 8.824218-4.140625 19.703124-2.2460938 26.640624 4.691406 6.800782 6.800781 8.6875 16.390625 5.078126 25.710938-1.371094 3.816406-2.925782 7.5625-4.65625 11.226562 2.582031 1.183594 4.945312 2.789063 6.941406 4.785157 6.035156 6.035156 8.550781 15.480468 6.40625 24.066406l-.230469.816406c-7.226563 23.289062-21.109375 42.257812-39.46875 54.164062-3.066406 163.285157-126.027344 295.078126-276.730469 295.078126zm-156.511718-57.675782c30.449218 17.226563 88.476562 27.648438 156.511718 27.648438 65.410156 0 127.136719-28.082032 173.804688-79.074219 47.050781-51.410156 72.960937-119.679687 72.960937-192.234375v-.816406c0-6.570313 3.617188-12.566406 9.4375-15.652344 11.808594-6.253906 21.371094-16.90625 27.589844-30.527344-6.414063 1.011719-12.933594-1.5625-16.929687-6.929687-4.644532-6.238281-4.695313-14.664063-.128907-20.957031 2.464844-3.398438 4.699219-6.933594 6.691407-10.589844-16.285157 6.839844-31.75 12.972656-45.175782 17.046875-4.878906 1.476562-10.316406.898437-14.773437-1.589844-23.902344-13.316406-46.164063-21.277344-59.585938-21.316406-49.527343.757812-89.796875 43.175781-89.796875 94.605469 0 5.316406-2.359375 10.300781-6.464844 13.679687-4.109374 3.375-9.453124 4.726563-14.671874 3.695313-81.609376-16.078126-129.96875-40.1875-180.257813-90.722657-7.207031 17.269531-9.175781 34.664063-5.84375 51.839844 3.378906 17.398437 12.367187 34.832031 25.996094 50.414063 5.179687 5.914062 5.867187 14.375 1.710937 21.050781-4.140625 6.652343-12.011718 9.761719-19.578125 7.734375-5.914062-1.585938-11.351562-3.667969-16.507812-6.34375 10.503906 22.816406 28.570312 43.917968 51.28125 59.480468 6.582031 4.511719 9.332031 12.921876 6.691406 20.453126-2.644531 7.542968-10.03125 12.398437-18.015625 11.804687-8.699219-.644531-16.40625-2.296875-23.5-5.082031 12.734375 25.933594 33.082031 40.203125 64.429688 45.65625 7.464843 1.300781 13.277343 7.195312 14.464843 14.667968 1.191407 7.472657-2.507812 14.878907-9.199219 18.429688-26.71875 14.164062-55.921874 21.765625-91.140624 23.628906zm0 0"></path></svg></span>
              </a>
              <a class="u-social-url" target="_blank" title="Custom" href=""><span class="u-icon u-icon-circle u-social-custom u-social-icon u-text-palette-1-base u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.00096 512.00096" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-009b"></use></svg><svg class="u-svg-content" viewBox="0 0 512.00096 512.00096" id="svg-009b"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"></path><path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"></path><path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"></path></svg></span>
              </a>
              <a class="u-social-url" target="_blank" title="Custom" href=""><span class="u-icon u-icon-circle u-social-custom u-social-icon u-text-palette-1-base u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 -62 512.00199 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-09c1"></use></svg><svg class="u-svg-content" viewBox="0 -62 512.00199 512" id="svg-09c1"><path d="m334.808594 170.992188-113.113282-61.890626c-6.503906-3.558593-14.191406-3.425781-20.566406.351563-6.378906 3.78125-10.183594 10.460937-10.183594 17.875v122.71875c0 7.378906 3.78125 14.046875 10.117188 17.832031 3.308594 1.976563 6.976562 2.96875 10.652344 2.96875 3.367187 0 6.742187-.832031 9.847656-2.503906l113.117188-60.824219c6.714843-3.613281 10.90625-10.59375 10.9375-18.222656.027343-7.628906-4.113282-14.640625-10.808594-18.304687zm-113.859375 63.617187v-91.71875l84.539062 46.257813zm0 0"></path><path d="m508.234375 91.527344-.023437-.234375c-.433594-4.121094-4.75-40.777344-22.570313-59.421875-20.597656-21.929688-43.949219-24.59375-55.179687-25.871094-.929688-.105469-1.78125-.203125-2.542969-.304688l-.894531-.09375c-67.6875-4.921874-169.910157-5.5937495-170.933594-5.59765575l-.089844-.00390625-.089844.00390625c-1.023437.00390625-103.246094.67578175-171.542968 5.59765575l-.902344.09375c-.726563.097657-1.527344.1875-2.398438.289063-11.101562 1.28125-34.203125 3.949219-54.859375 26.671875-16.972656 18.445312-21.878906 54.316406-22.382812 58.347656l-.058594.523438c-.152344 1.714844-3.765625 42.539062-3.765625 83.523437v38.3125c0 40.984375 3.613281 81.808594 3.765625 83.527344l.027344.257813c.433593 4.054687 4.746093 40.039062 22.484375 58.691406 19.367187 21.195312 43.855468 24 57.027344 25.507812 2.082031.238282 3.875.441406 5.097656.65625l1.183594.164063c39.082031 3.71875 161.617187 5.550781 166.8125 5.625l.15625.003906.15625-.003906c1.023437-.003907 103.242187-.675781 170.929687-5.597657l.894531-.09375c.855469-.113281 1.816406-.214843 2.871094-.324218 11.039062-1.171875 34.015625-3.605469 54.386719-26.019532 16.972656-18.449218 21.882812-54.320312 22.382812-58.347656l.058594-.523437c.152344-1.71875 3.769531-42.539063 3.769531-83.523438v-38.3125c-.003906-40.984375-3.617187-81.804687-3.769531-83.523437zm-26.238281 121.835937c0 37.933594-3.3125 77-3.625 80.585938-1.273438 9.878906-6.449219 32.574219-14.71875 41.5625-12.75 14.027343-25.847656 15.417969-35.410156 16.429687-1.15625.121094-2.226563.238282-3.195313.359375-65.46875 4.734375-163.832031 5.460938-168.363281 5.488281-5.082032-.074218-125.824219-1.921874-163.714844-5.441406-1.941406-.316406-4.039062-.558594-6.25-.808594-11.214844-1.285156-26.566406-3.042968-38.371094-16.027343l-.277344-.296875c-8.125-8.464844-13.152343-29.6875-14.429687-41.148438-.238281-2.710937-3.636719-42.238281-3.636719-80.703125v-38.3125c0-37.890625 3.304688-76.914062 3.625-80.574219 1.519532-11.636718 6.792969-32.957031 14.71875-41.574218 13.140625-14.453125 26.996094-16.054688 36.160156-17.113282.875-.101562 1.691407-.195312 2.445313-.292968 66.421875-4.757813 165.492187-5.464844 169.046875-5.492188 3.554688.023438 102.589844.734375 168.421875 5.492188.808594.101562 1.691406.203125 2.640625.3125 9.425781 1.074218 23.671875 2.699218 36.746094 16.644531l.121094.128906c8.125 8.464844 13.152343 30.058594 14.429687 41.75.226563 2.558594 3.636719 42.171875 3.636719 80.71875zm0 0"></path></svg></span>
              </a>
            </div>
            <div class="u-form u-form-1">
              <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;" source="custom" name="form-2">
                <div class="u-form-group u-form-name">
                  <label for="name-da97" class="u-form-control-hidden u-label" wfd-invisible="true">Name</label>
                  <input type="text" placeholder="Enter your Name" id="name-da97" name="name" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-3-base" required="">
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email-da97" class="u-form-control-hidden u-label" wfd-invisible="true">Email</label>
                  <input type="email" placeholder="Enter a valid email address" id="email-da97" name="email" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-3-base" required="">
                </div>
                <div class="u-form-group u-form-message">
                  <label for="message-da97" class="u-form-control-hidden u-label" wfd-invisible="true">Message</label>
                  <textarea placeholder="Enter your message" rows="4" cols="50" id="message-da97" name="message" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-palette-3-base" required=""></textarea>
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <a href="#" class="u-btn u-btn-submit u-button-style u-btn-3">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                </div>
                <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
              </form>
            </div>
          </div>
        </div>
        <p class="u-text u-text-body-alt-color u-text-default u-text-3">template header
        </p>
      </div>
    </section>



@endsection

@section('script')
<!-- <script class="u-script" type="text/javascript" src="resources/js/soundsettings.js" ></script> 
 <script class="u-script" type="text/javascript" src="{{asset('assets/soundsettings.js')}}" ></script>

<script class="u-script" type="text/javascript" src="{{asset('assets/jquery.js')}}" defer=""></script>
<script class="u-script" type="text/javascript" src="{{asset('assets/nicepage.js')}}" defer=""></script>-->

<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "myMusic",
		"logo": "images/myMusicTekst5.png"
}</script>

@endsection

@stack('scripts')  
@push('scripts')


@endpush