<?php
if (!isset($_POST['tendency']) || !isset($_COOKIE['fill'])) {
    header('Location: home.php');
    die();
}

require '../php/connect.php';
$sql = "UPDATE `fill` SET `fill`.tendency_2 = " . $_POST['tendency'] . " WHERE `fill`.id = " . $_COOKIE['fill'];
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
                    <form method="post" name="last" action="../php/finish.php">
                        <div class="flex center-horizontal text-size-very-small" style="text-align: justify">
                            <div class="margin-large">
                                <div class="margin-large">
                                    <div>
                                        <p>Apakah berita yang di publikasikan oleh kompas.com oleh diralat sehari setelah dipublikasi?</p>
                                        <label><input type="radio" required value="1" name="op1">Ya</label>
                                        <label class="margin-left-medium"><input type="radio" value="0" name="op1">Tidak</label>
                                    </div>
                                    <br>
                                    <div>
                                        <p>Apakah Anda membaca ralat terhadap artikel tersebut?</p>
                                        <label><input type="radio" required value="1" name="op2">Ya</label>
                                        <label class="margin-left-medium"><input type="radio" value="0" name="op2">Tidak</label>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <p>
                                    Selamat! Anda telah menyelesaikan survei ini dan Anda berhak mengetahui gambaran penelitian ini yang sebenarnya!
                                </p>

                                <p>Peneliti melakukan manipulasi terhadap ralat misinformasi dan membentuk tiga kondisi yang membedakan setiap kelompok partisipan. Pertama, terdapat kelompok yang mendapatkan kondisi ralat misinformasi positif (Kebijakan Jokowi memberikan 3000 kapal untuk nelayan lokal). Kedua, terdapat kelompok yang mendapatkan kondisi ralat misinformasi negatif (Jokowi mengalokasikan dana desa menjadi dana pembangunan infrastruktur). Kedua artikel tersebut dirancang sendiri oleh peneliti  dan hanya digunakan untuk kepentingan penelitian ini saja. Konten berita, keterangan waktu, nama penulis, dan judul artikel tersebut direkayasa oleh peneliti. Oleh karena itu, peneliti berharap rekan-rekan tidak menyebarkan berita tersebut kepada masyarakat lain agar tidak memunculkan hoax baru. Terakhir, terdapat kelompok yang tidak mendapatkan ralat misinformasi melainkan mendapatkan berita faktual yang diambil dari kompas.com. Partisipan dirandom berdasarkan urutan kehadiran dalam mengakses website ini untuk mendapatkan satu dari ketiga kondisi tersebut.</p>
                                <p>Dengan demikian, saya memohon maaf apabila terdapat kesalahan kata-kata dan berharap kita sebagai masyarakat Indonesia lebih bijak dalam menyebarkan informasi dan menghargai pilihan politik satu sama lain.</p>
                                <p>Terima Kasih Atas Partisipasi Anda!</p>
                                <p>Salam Peneliti,<br>
                                    Ladayna Nurul Arasy
                                </p>
                                <p></p>
                                <p></p>
                                <p><i>*misinformasi: informasi yang salah, tidak akurat, dan tidak didukung oleh bukti-bukti yang valid.</i></p>
                            </div>
                        </div>
                        <div class="flex center-horizontal text-size-medium"><strong>Terima Kasih!</strong></div>
                        <div class="margin-top-medium flex center-horizontal margin-bot-medium">
                            <input type="submit" value="Selesai" class="btn btn-outline-dark quarter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>