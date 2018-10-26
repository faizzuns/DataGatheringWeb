<?php
    require 'templates/header.php';
?>

<link rel="stylesheet" href="../css/home.css">

<div class="bg">
</div>

<div class="backdrop"></div>

    <div class="backdrop"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div style="height: 70px;"></div>
                <div class="box-home padding-medium">
                    <div class="margin-top-medium flex center-horizontal text-size-medium text-center"><strong>Pengisian Identitas</strong></div>
                    <div class="flex center-horizontal text-size-very-small margin-top-medium" style="text-align: justify;">
                        <div class="margin-large" style="text-indent: 50px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
                    <form method="post" action="../php/start.php" style="margin-top:-15px">
                        <div class="margin-large">
                            <div class="form-group" style="font-size:18px; padding-top: -2px;">
                                <input require="" name="name" type="text" class="form-control" id="nama" placeholder="Nama / Inisial" required></div>
                        </div>
                        <div class="margin-large">
                            <div class="form-group" style="font-size:18px">
                                <input type="number" name="age" require="" class="form-control"  placeholder="Usia" aria-describedby="usiaHelp" id="usia" required >
                                <small id="usiaHelp" class="form-text text-muted">Usia harus berupa angka</small>
                            </div>
                        </div>
                        <div class="margin-large">
                            <div class="form-group" style="font-size:18px">
                                <input require="" type="text" name="from" class="form-control" id="domisili" placeholder="Domisili" required>
                            </div>
                        </div>
                        <div class ="text-center">
                        <input type="submit" value="Lanjut" class="btn btn-outline-dark quarter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>


<!--<script>-->
<!--    // just for the demos, avoids form submit-->
<!--    jQuery.validator.setDefaults({-->
<!--        debug: true,-->
<!--        success: "valid"-->
<!--    });-->
<!--    $( "#usia" ).validate({-->
<!--        rules: {-->
<!--            field: {-->
<!--                required: true,-->
<!--                digits: true-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->
