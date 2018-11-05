<?php
    require'../php/redir.php';
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
                    <div class="margin-top-medium flex center-horizontal text-size-medium" style="text-align: center"><strong>Kecenderungan Politik</strong></div>
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-large">
                        </div>
                    </div>
                    <form method="post" class="margin-bot-medium" action="../php/tendency-action.php">
                        <div class="margin-left-very-large margin-right-very-large margin-bot-medium">
                            <div class="flex center-horizontal">
                                <input name="tendency" type="range" class="custom-range" min="0" max="20" id="customRange3" oninput="changeDetail(customRange3.value)">
                            </div>
                            <div class="center-horizontal flex">
                                <div class="flex space-beetween full-width margin-top-small">
                                    <div class="flex" style="width: 5%">10</div>
                                    <div class="flex center-horizontal" style="width: 5%">0</div>
                                    <div class="flex align-right" style="width: 5%">10</div>
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
                                    <div class="flex center-horizontal" style="font-size: 50px;" id="value">0</div>
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
        let x = 0;
        if (val < 10) {
            comment = 'Prabowo';
            x = 10 - val;
        } else if (val > 10) {
            comment = 'Jokowi';
            x = val - 10;
        }

        name.innerHTML = comment;
        number.innerHTML = x;

    }
</script>

<?php
require 'templates/footer.php';
?>