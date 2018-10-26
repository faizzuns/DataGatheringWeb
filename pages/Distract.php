<?php
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
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


                    <form class="flex center-horizontal margin-bot-medium margin-top-large" action="#">
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
