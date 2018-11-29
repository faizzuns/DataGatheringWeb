<?php
if (!isset($_POST['category']) || !isset($_COOKIE['fill'])) {
    header('Location: home.php');
    die();
}
if (isset($_POST['serialize'])) {
    $option1 = $_POST['op1'];
    $option2 = $_POST['op2'];
    $option3 = $_POST['op3'];
    $option4 = $_POST['op4'];
    require '../php/fill_question1.php';
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
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-very-large">
                            Kalian diminta untuk menjawab berapakah angka yang berasal dari pola berikut!</div>
                    </div>
                    <div style="text-align:center;">
                        <img style="width:50%; height:60%; padding-top: 2%" src="../upload/quiz1.png" >
                    </div>
                    <div class="form-group " style="font-size:18px">
                        <form method="POST" class="flex center-horizontal margin-bot-medium margin-top-large" id="form_answer" onsubmit="checkAnswer()" action="TFeeling2.php">
                            <input type="hidden" name="category" value=<?php echo "'" . $_POST['category'] . "'";?>>
                            <div class="margin-top-large" style="text-align: center">Berapakah jawabannya?</div>
                             </div>
                            <div style="text-align: center">
                                <input class="col-2 form-control" type="text" id="jawaban" name="jawaban" >
                            </div>
                            <div style="text-align: center" class="padding-bot-large">
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

<script>
    function checkAnswer() {
        if (document.getElementById('jawaban').value == 11) {
            document.getElementById("form_answer").action = "TFeeling2.php";
        }
        else {
            document.getElementById("form_answer").action = "TFeeling2.php";
        }
    }
</script>
