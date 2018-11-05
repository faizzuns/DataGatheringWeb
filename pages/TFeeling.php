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

<link rel="stylesheet" href="../css/TFeeling.css">
    <div class="bg">
    </div>

    <div class="backdrop"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div style="height: 70px;"></div>
                <div class="box-home padding-medium">
                    <div class="margin-top-medium flex center-horizontal text-size-medium"><strong>Thermometer Feeling</strong></div>
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-large">
                            Berikut ini terdapat beberapa pernyataan, Anda diminta untuk menilai seberapa sesuai karakteristik tersebut dengan Jokowi menggunakan 1-6 poin skala likert.
                            <br>
                            <br>
                            1 =  Sangat tidak sesuai
                            <br>
                            2 = Tidak sesuai
                            <br>
                            3 = Agak tidak sesuai
                            <br>
                            4 = Agak sesuai
                            <br>
                            5 = Sesuai
                            <br>
                            6 = Sangat sesuai
                        </div>
                    </div>
                    <div class="ml-4">
                    <form class="center-horizontal margin-bot-medium" action="#">
                        <div class="text-size-very-small">
                            Presiden Jokowi dapat dipercaya
                        </div>
                        <table class="table-responsive">
                            <th style="text-align: center"></th>
                            <tr>
                                <td>
                                    <div class="text-center padding-right-medium colored" >
                                        <input type="radio" name="op1" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" checked>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">1</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">2</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">3</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">4</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">5</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">6</div>
                                </td>
                            </tr>
                        </table>
                        <div class="text-size-very-small padding-bot-large">
                            Presiden Jokowi menunjukkan penilaian yang baik dalam menghadapi masalah
                        </div>
                        <table class="table-responsive">
                            <th style="text-align: center"></th>
                            <tr>
                                <td>
                                    <div class="text-center padding-right-medium" >
                                        <input type="radio" name="op2" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" checked>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">1</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">2</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">3</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">4</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">5</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">6</div>
                                </td>
                            </tr>
                        </table>

                        <div class="text-size-very-small padding-bot-large">
                            Presiden Jokowi tidak jujur
                        </div>
                        <table class="table-responsive">
                            <th style="text-align: center"></th>
                            <tr>
                                <td>
                                    <div class="text-center padding-right-medium" >
                                        <input type="radio" name="op3" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" checked>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">1</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">2</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">3</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">4</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">5</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">6</div>
                                </td>
                            </tr>
                        </table>

                        <div class="text-size-very-small padding-bot-large">
                            Presiden Jokowi peduli dengan
                        </div>
                        <table class="table-responsive">
                            <th style="text-align: center"></th>
                            <tr>
                                <td>
                                    <div class="text-center padding-right-medium" >
                                        <input type="radio" name="op4" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" checked>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" checked>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">1</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">2</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">3</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">4</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">5</div>
                                </td>
                                <td>
                                    <div class="text-size-very-very-small text-center padding-right-medium">6</div>
                                </td>
                            </tr>
                        </table>
                        <div class="text-center padding-bot-large" >
                            <input type="submit" value="Lanjut" class="btn btn-outline-dark quarter ">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>

<script language="javascript">
    var mySlider = new Slider('#myslider');
    mySlider.on('slideStop', function(value) {
        document.getElementById('slider').innerHTML = value;
    });
</script>

