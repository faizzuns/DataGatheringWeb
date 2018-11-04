<?php
require 'templates/header.php';
?>

<link rel="stylesheet" href="../css/TFeeling.css">
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
                    <div class="ml-4">
                    <form class="center-horizontal margin-bot-medium" action="#">
                            <table class="table">
<!--                        <label class="radio-inline">-->
                            <div <div>1</div>
                            <input type="radio" name="op" checked>
<!--                        </label>-->
<!--                        <label class="radio-inline">-->
                            <div>2</div>
                            <input type="radio" name="op">
<!--                        </label>-->
<!--                        <label class="radio-inline">-->
                            <div>3</div>
                            <input type="radio" name="op">
<!--                        </label>-->
                            </table>
<!--                     <div class="custom-control custom-radio custom-control-inline">-->
<!--                            <input type="radio" class="custom-control-input" id="op1" name="op1">-->
<!--                            <label class="custom-control-label" for="defaultInline1">1</label>-->
<!--                        </div>-->
<!--                        <div class="custom-control custom-radio custom-control-inline">-->
<!--                            <input type="radio" class="custom-control-input" id="op2" name="op2">-->
<!--                            <label class="custom-control-label" for="op2">2</label>-->
<!--                        </div>-->
<!--                        <div class="custom-control custom-radio custom-control-inline">-->
<!--                            <input type="radio" class="custom-control-input" id="op3" name="op3">-->
<!--                            <label class="custom-control-label" for="op3">3</label>-->
<!--                        </div>-->
                        <div class="text-center" >
                            <input type="submit" value="Lanjut" class="btn btn-outline-dark quarter ">
                        </div>
                    </form>
                    </div>
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

