<?php
    require 'templates/header.php';
?>

<link rel="stylesheet" href="../css/home.css">

<div class="bg">
</div>

<div class="backdrop"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div style="height: 70px;"></div>
            <div class="box-home padding-medium">
                <div class="margin-top-medium flex center-horizontal text-size-medium"><strong>Who Am I ?</strong></div>
                <div class="margin-top-small flex center-horizontal">
                    <img src="../upload/profile.png" class="profile-img"/>
                </div>
                <div class="margin-top-small flex center-horizontal text-size-small" style="text-align: center">
                    <i>Ahmad Faiz Sahupala, Teknik Informatika 2016 <br/> Institut Teknologi Bandung</i>
                </div>
                <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                    <div class="margin-large">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                </div>
                <form class="flex center-horizontal margin-bot-medium" action="identity.php">
                    <input type="submit" value="Bersedia" class="btn btn-outline-dark quarter">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require 'templates/footer.php';
?>