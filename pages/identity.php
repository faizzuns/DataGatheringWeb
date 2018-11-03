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
                    </div>
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
                            <select name="profesi" class="form-control" required>
                                <option disabled value="" selected hidden>Profesi</option>
                                <option value="Pelajar">Pelajar</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="PNS">PNS</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="margin-large">
                            <select name="pendidikan" class="form-control" required>
                                <option disabled value="" selected hidden>Pendidikan Terakhir</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
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
