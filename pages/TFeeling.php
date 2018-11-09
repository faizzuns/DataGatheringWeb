<?php
if (isset($_POST['op1'])) {
    require '../php/connect.php';
    $sql = 'INSERT INTO gather.`question` (gather.`question`.idtransaction, gather.`question`.number, gather.`question`.value) VALUES (' . $_COOKIE["trans"] . ', 1,' . $_POST["op1"] . ')';
    $conn->query($sql);
    $sql = 'INSERT INTO gather.`question` (gather.`question`.idtransaction, gather.`question`.number, gather.`question`.value) VALUES (' . $_COOKIE["trans"] . ', 2,' . $_POST["op2"] . ')';
    $conn->query($sql);
    $sql = 'INSERT INTO gather.`question` (gather.`question`.idtransaction, gather.`question`.number, gather.`question`.value) VALUES (' . $_COOKIE["trans"] . ', 3,' . $_POST["op3"] . ')';
    $conn->query($sql);
    $sql = 'INSERT INTO gather.`question` (gather.`question`.idtransaction, gather.`question`.number, gather.`question`.value) VALUES (' . $_COOKIE["trans"] . ', 4,' . $_POST["op4"] . ')';
    $conn->query($sql);
    $conn->close();
    setcookie("trans", '', time() - 3600, '/');
    header('Location: thank-you.php');
    die();
}
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
                    <form method="post" class="center-horizontal margin-bot-medium" action="TFeeling.php">
                        <div class="text-size-very-small">
                            Presiden Jokowi dapat dipercaya
                        </div>
                        <table class="table-responsive">
                            <th style="text-align: center"></th>
                            <tr>
                                <td>
                                    <div class="text-center padding-right-medium colored" >
                                        <input type="radio" name="op1" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" value="2">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" value="3" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" value="4">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" value="5">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium colored">
                                        <input type="radio" name="op1" value="6">
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
                                        <input type="radio" name="op2" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" value="2">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" required value="3">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" value="4">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" value="5">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op2" value="6">
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
                                        <input type="radio" name="op3" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" value="2">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" required value="3">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" value="4">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" value="5">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op3" value="6">
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
                                        <input type="radio" name="op4" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" value="2">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" required value="3">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" value="4">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" value="5">
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center padding-right-medium">
                                        <input type="radio" name="op4" value="6">
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
    $(document).ready(function(){
        $("input[type='button']").click(function(){
            var rvalue = $("input[name='op1']:checked").val();
            if(rvalue){
                alert("Your are a - " + rvalue);
            }
        });

    });
</script>

