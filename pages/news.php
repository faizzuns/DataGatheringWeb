<?php
require '../php/redir.php';
if ($row['tendency'] == null) {
    header("Location: tendency.php");
    die();
}
require 'templates/header.php';
require '../php/connect.php';
    if ($_COOKIE['tendency'] == 10) {
        $sql = "SELECT gather.`transaction`.id_news, COUNT(*) AS total FROM gather.`transaction` INNER JOIN gather.`question` ON gather.`transaction`.id = gather.`question`.idtransaction WHERE gather.`transaction`.tendency IS NOT NULL AND gather.`transaction`.id_news IS NOT NULL AND gather.`transaction`.tendency = 10 GROUP BY gather.`transaction`.id_news";
    } else if ($_COOKIE['tendency'] < 10) {
        $sql = "SELECT gather.`transaction`.id_news, COUNT(*) AS total FROM gather.`transaction` INNER JOIN gather.`question` ON gather.`transaction`.id = gather.`question`.idtransaction WHERE gather.`transaction`.tendency IS NOT NULL AND gather.`transaction`.id_news IS NOT NULL AND gather.`transaction`.tendency < 10 GROUP BY gather.`transaction`.id_news";
    } else if ($_COOKIE['tendency'] > 10) {
        $sql = "SELECT gather.`transaction`.id_news, COUNT(*) AS total FROM gather.`transaction` INNER JOIN gather.`question` ON gather.`transaction`.id = gather.`question`.idtransaction WHERE gather.`transaction`.tendency IS NOT NULL AND gather.`transaction`.id_news IS NOT NULL AND gather.`transaction`.tendency > 10 GROUP BY gather.`transaction`.id_news";
    }

    $result = $conn->query($sql);
    $news1 = 0; //netral
    $news2 = 0; //positif
    $news3 = 0; //negatif
    while ($row = $result->fetch_assoc()) {
        if ($row['id_news'] == 1) {
            $news1 = $news1 + $row['total'];
        } else if ($row['id_news'] == 2) {
            $news2 = $news2 + $row['total'];
        } else {
            $news3 = $news3 + $row['total'];
        }
    }

    if ($news1 < $news2) {
        if ($news1 < $news3) {
            $min = 1;
        } else {
            $min = 3;
        }
    } else if ($news2 < $news3) {
        $min = 2;
    } else {
        $min = 3;
    }

    if ($min > 1) {
        $next = 'correction-news.php';
    } else {
        $next = 'Distract.php';
    }

$sql = "UPDATE gather.`transaction` SET gather.`transaction`.id_news = " . $min . " WHERE gather.`transaction`.id = " . $_COOKIE['trans'];
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}
$conn->close();


?>

    <div class="bg">
    </div>

    <div class="backdrop"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div style="height: 70px;"></div>
                <div class="box-home padding-medium">
                    <div class="margin-top-medium flex center-horizontal text-size-medium"><strong>Berita</strong></div>
                    <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                        <div class="margin-large">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                    <form method="get" class="flex center-horizontal margin-bot-medium" action=<?php echo "\"" . $next . "\""?>>
                        <input type="hidden" name="category" value=<?php echo "'" . $min . "'";?>>
                        <input type="submit" value="Lanjut" class="btn btn-outline-dark quarter">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>