<?php
    if (!isset($_POST['status'])) {
        header("Location: home.php");
        die();
    }
    if ($_POST['status'] == 1) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $profession = $_POST['profession'];
        $education = $_POST['education'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        require '../php/regis_user.php';
    } else {
        $option1 = $_POST['op1'];
        $option2 = $_POST['op2'];
        $option3 = $_POST['op3'];
        $option4 = $_POST['op4'];
        $option5 = $_POST['op5'];
        $option6 = $_POST['op6'];
        $option7 = $_POST['op7'];
        require '../php/fill_question2.php';
    }
    require 'templates/header.php';
?>

    <link rel="stylesheet" href="../css/tendency.css">

    <div class="bg">
    </div>

    <div class="backdrop"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div style="height: 70px;"></div>
                <div class="box-home padding-medium">
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-large">
                            Anda diminta untuk menentukan posisi Anda apakah mendukung Jokowi atau mendukung Prabwo dari rentang skala 0-10 dibawah ini. Tunjukkan posisi Anda dengan cara menggeser lingkaran hitam dibawah ini sesuai dengan derajat yang telah ditentukan!
                        </div>
                    </div>
                    <form method="post" class="margin-bot-medium" action=<?php if ($_POST['status'] == 1) echo "'news.php'"; else echo "'thank-you.php'"; ?>>
                        <div class="margin-left-very-large margin-right-very-large margin-bot-medium">
                            <div class="flex center-horizontal">
                                <input name="tendency" type="range" class="custom-range" min="0" max="10" id="customRange3" oninput="changeDetail(customRange3.value)">
                            </div>
                            <div class="center-horizontal flex">
                                <div class="flex space-beetween full-width margin-top-small">
                                    <div class="flex" style="width: 5%">0</div>
                                    <div class="flex center-horizontal" style="width: 5%">5</div>
                                    <div class="flex align-right" style="width: 5%">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-beetween margin-top-small">
                            <div>
                                <div class="flex center-horizontal">
                                    <img src="../upload/prabowo.jpg" class="candidate-img"/>
                                </div>
                                <div class="margin-top-small text-size-very-small flex center-horizontal"><strong>Prabowo</strong></div>
                            </div>
                            <div class="flex center-vertical">
                                <div>
                                    <div class="flex center-horizontal" style="font-size: 50px;" id="value">5</div>
                                    <div class="flex center-horizontal" id="name">Netral</div>
                                </div>
                            </div>
                            <div>
                                <div class="flex center-horizontal">
                                    <img src="../upload/jokowi.jpg" class="candidate-img"/>
                                </div>
                                <div class="margin-top-small text-size-very-small flex center-horizontal"><strong>Jokowi</strong></div>
                            </div>
                        </div>
                        <div class="flex center-horizontal margin-top-medium">
                            <input type="submit" value="Next" class="btn btn-outline-dark quarter margin-top-medium">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    function changeDetail(val) {
        let number = document.getElementById('value');
        let name = document.getElementById('name');
        let comment = 'Netral';
        let x = 5;
        if (val < 5) {
            comment = 'Prabowo';
            x = val;
        } else if (val > 5) {
            comment = 'Jokowi';
            x = 5 - (val - 5);
        }

        name.innerHTML = comment;
        number.innerHTML = x;

    }
</script>

<?php
require 'templates/footer.php';
?>