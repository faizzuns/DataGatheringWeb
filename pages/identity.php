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
                    <div class="margin-top-medium flex center-horizontal text-size-medium text-center"><strong>Halo diisi ya identitasnya :D</strong></div>
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify; padding-top:25px ">
                        <div class="margin-large" style="text-indent: 50px">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                    <form action="#">
                        <div class="margin-large">
                            <div class="form-group" style="font-size:18px">
                                <label for="Nama">Nama / Inisial</label>
                                <input type="text" class="form-control" id="nama"  placeholder="contoh: Yasya Rusyda atau YR">
                            </div>
                        </div>
                        <div class="margin-large">
                            <div class="form-group" style="font-size:18px">
                                <label for="usia">Usia</label>
                                <input type="text" class="form-control" id="usia"  placeholder="contoh: 20 tahun">
                            </div>
                        </div>
                        <div class="margin-large">
                            <div class="form-group" style="font-size:18px">
                                <label for="domisili">Domisili</label>
                                <input type="text" class="form-control" id="domisili"  placeholder="contoh: Bandung">
                            </div>
                        </div>
                        <div class ="text-center">
                        <input type="submit" value="Start!" class="btn btn-outline-dark quarter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>