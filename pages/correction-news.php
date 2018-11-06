<?php
require '../php/redir.php';
if ($row['tendency'] == null) {
    header("Location: tendency.php");
    die();
}
require 'templates/header.php';

if ($_GET['category'] == '2') {
    $content = '
    <p>Dilansir dari kompas.com pada tanggal 19 Januari 2018, berita dengan judul Jokowi: Pemerintah targetkan 3000 Kapal untuk Nelayan Lokal di tahun 2018 telah ditarik. Kompas.com menyatakan bahwa ternyata berita yang dipulbikasi sehari yang lalu adalah berita yang tidak valid kebenerannya. Selain itu, kompas.com melakukan ralat terhadap informasi tersebut yakni program 3000 Kapal untuk Nelayan sebenarnya bukanlah program yang dicanangkan oleh pemerintah. Melainkan, salah satu program Corporate Social Responsibility (CSR) dari salah satu perusahaan swasta yang bergerak di bidang tambang mineral. Oleh karena itu, tim redaksi dari kompas.com melakukan permohonan maaf karena sudah menyebarkan informasi yang tidak dapat dipercaya.</p>
    ';
} else {
    $content = '<p>Dilansir dari kompas.com pada tanggal 28 Agustus 2018, berita dengan judul Infrastruktur buat siapa? Jokowi menandatangani revisi PP Dana  Desa, 25% Dana Desa Dialokasikan untuk Pembangun Infrastruktur Nasional telah tarik dari situs kompas.com. Hal tersebut dilakukan oleh pihak redaksi kompas.com karena berita tersebut memuat informasi-informasi yang tidak valid dan tidak dapat dipercaya. Kompas.com menyatakan bahwa berita yang baru dipublikasi sehari yang lalu merupakan berita yang tidak valid kebenarannya. Selain itu, kompas.com meralat bahwa Jokowi tidak menetapkan 25% dana desa tidak dialokasikan untuk infrastruktur nasional. Melainkan, 25% dana desa dimaksudkan untuk pembangunan infrastruktur desa itu sendiri agar mempermudah mobilitas kegiatan ekonomi masyarakat desa. Hal tersebut dilakukan pemerintah dalam rangka pemerataan pembangunan di desa maupun di kota. Oleh karena itu, tim redaksi dari kompas.com melakukan permohonan maaf karena sudah menyebarkan informasi yang tidak dapat dipercaya.</p>';
}

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
                        <div class="margin-large">
                            <?php echo $content;?>
                        </div>
                    </div>
                    <form class="flex center-horizontal margin-bot-medium" action="Distract.php">
                        <input type="submit" value="Lanjut" class="btn btn-outline-dark quarter">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require 'templates/footer.php';
?>