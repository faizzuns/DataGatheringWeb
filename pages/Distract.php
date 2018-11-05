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
                    <div class="margin-top-medium margin-bot-large flex center-horizontal text-size-medium"><strong>Permainan Sederhana</strong></div>
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-very-large">
                            Kalian diminta untuk menjawab berapakah angka yang berasal dari pola berikut!</div>
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
                        <input type="submit" value="Lanjut" class="btn btn-outline-dark quarter">
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>

<script>

    // function startGame() {
    //     myGamePiece = new component(30, 30, "red", 10, 120);
    //     myGamePiece.gravity = 0.05;
    //     myScore = new component("30px", "Consolas", "black", 280, 40, "text");
    //     myGameArea.start();
    // }
    //
    // var myGameArea = {
    //     canvas : document.createElement("canvas"),
    //     start : function() {
    //         this.canvas.width = 480;
    //         this.canvas.height = 270;
    //         this.context = this.canvas.getContext("2d");
    //         document.body.insertBefore(this.canvas, document.body.childNodes[0]);
    //         this.frameNo = 0;
    //     },
    //     clear : function() {
    //         this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    //     }
    // }

</script>
