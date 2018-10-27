<?php
require '../php/redir.php';
if ($row['tendency'] == null) {
    header("Location: tendency.php");
    die();
}
if ($row['id_news'] == null) {
    header("Location: news.php");
    die();
}
require 'templates/header.php';
?>

    <div class="bg">
    </div>

    <div class="backdrop"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div style="height: 70px;"></div>
                <div class="box-home padding-medium">
                    <div class="margin-top-medium flex center-horizontal text-size-medium"><strong>Thermometer Feeling</strong></div>
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-large">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>



                    <form class="center-horizontal margin-bot-medium" action="#">
                        <form>
                            <div class="form-group col-11 m-4">
                                <label style="font-size:20px;" for="formControlRange">1. Seberapa geregetnya kamu?</label>
                                <input type="range" class="form-control-range customRange3" id="formControlRange">
                            </div>

<!--                            <span id="ex18-label-1" class="hidden">Example slider label</span>-->
<!--                            <input id="ex19" type="text"-->
<!--                                   data-provide="slider"-->
<!--                                   data-slider-ticks="[1, 2, 3]"-->
<!--                                   data-slider-ticks-labels='["short", "medium", "long"]'-->
<!--                                   data-slider-min="1"-->
<!--                                   data-slider-max="3"-->
<!--                                   data-slider-step="1"-->
<!--                                   data-slider-value="3"-->
<!--                                   data-slider-tooltip="hide" />-->
<!--                            -->
<!---->
<!--                            <input id="myslider"-->
<!--                                   type="text"-->
<!--                                   class="span2"-->
<!--                                   value="5,10"-->
<!--                                   data-slider-id="myslider"-->
<!--                                   data-slider-min="2"-->
<!--                                   data-slider-max="20"-->
<!--                                   data-slider-step="2"-->
<!--                                   data-slider-value="[5,10]"-->
<!--                                   data-value="5,10"-->
<!---->
<!--                            />-->
<!--                            <p id="slider"></p>-->
                        <div class="text-center" >
                            <input type="submit" value="Lanjut" class="btn btn-outline-dark quarter ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>

<script language="javascript">
    var mySlider = new Slider('#myslider');
    mySlider.on('slideStop', function(value) {
        document.getElementById('slider').innerHTML = value;
    });
</script>

