<!--<div class="cta-area cta-bg cta-bg--two-sagar">-->
<!--    <div class="container">-->
<!--        <div class="row d-flex justify-content-center">-->
<!--            <div class="col-lg-7 col-md-7">-->
                <!--=======  cta content wrapper  =======-->

<!--                <div class="cta-content-wrapper">-->
<!--                    <div class="cta-content">-->
<!--                        <h3 class="title" style="font-size: 30px;">The finest luxury italian beds crafted to enhance sleep culture now in Australia.</h3>-->
<!--                        <img src="<?= base_url() ?>assets/images/play.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->

                <!--=======  End of cta content wrapper  =======-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<!--<video autoplay muted loop id="myVideo" width="100%">-->
<!--  <source src="<?= base_url() ?>/assets/video/8-06_italian-beds-personalizzazione.mov" type="video/mp4"> -->
<!--</video>-->

<!--<div class="content">-->
<!--  <h1>Heading</h1>-->
<!--  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>-->
<!--  <button id="myBtn" onclick="myFunction()">Pause</button>-->
<!--</div>-->

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
