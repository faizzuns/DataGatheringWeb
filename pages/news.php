<?php
require '../php/redir.php';
if ($row['tendency'] == null) {
    header("Location: tendency.php");
}
require 'templates/header.php';
require '../php/connect.php';
    $sql = "SELECT gather.`transaction`.id_news, COUNT(*) AS total FROM gather.`transaction` WHERE gather.`transaction`.tendency IS NOT NULL AND gather.`transaction`.id_news IS NOT NULL GROUP BY gather.`transaction`.id_news";
    $result = $conn->query($sql);
    $min = 1;
    $min_value = 10000;
    while ($row = $result->fetch_assoc()) {
        if ($row['total'] < $min_value) {
            $min = $row['id_news'];
        }
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