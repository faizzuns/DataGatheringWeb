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
                    <div class="margin-top-medium margin-bot-large flex center-horizontal text-size-medium"><strong>ikan hiu makan hiu, yuk main yuk</strong></div>
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-very-large">
                            Berikut merupakan sebuah soal dimana masing-masing buah memiliki nilai tertentu. Dapatkah kamu melengkapi penjumlahan buah yang belum terjawab?
                        </div>
                    </div>

                    <div style="text-align:center;">
                        <img style="width:50%; height:60%; padding-top: 2%" src="../upload/quiz1.png" >
                    </div>
                    <div class="form-group " style="font-size:18px">
                        <div class="margin-top-large" style="text-align: center">Berapakah jawabannya?</div>
                         </div>
                        <div style="text-align: center">
                            <input class="col-2"  type="text" class="form-control" id="nama" >
                        </div>


                    <form class="flex center-horizontal margin-bot-medium margin-top-large" action="TFeeling.php">
                        <input type="submit" value="Lanjut ae dah" class="btn btn-outline-dark quarter">
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>

<script>


</script>
