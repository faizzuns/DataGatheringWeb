<?php
require '../php/redir.php';
if (!isset($_POST['tendency'])) {
    header("Location: tendency.php");
    die();
}
require 'templates/header.php';
require '../php/connect.php';
$sql = "UPDATE ahmadfai_gather.`transaction` SET ahmadfai_gather.`transaction`.tendency = " . $_POST['tendency'] . " WHERE ahmadfai_gather.`transaction`.id = " . $_COOKIE['trans'];
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}

$sql = 'SELECT ahmadfai_gather.`transaction`.id_news FROM ahmadfai_gather.`transaction` WHERE ahmadfai_gather.`transaction`.id = ' . $_COOKIE['trans'];
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        if ($row['id_news'] == NULL) {
            if ($_POST['tendency'] == 10) {
                $sql = "SELECT ahmadfai_gather.`transaction`.id_news, COUNT(*) AS total FROM ahmadfai_gather.`transaction` WHERE ahmadfai_gather.`transaction`.tendency IS NOT NULL AND ahmadfai_gather.`transaction`.id_news IS NOT NULL AND ahmadfai_gather.`transaction`.tendency = 10 GROUP BY ahmadfai_gather.`transaction`.id_news";
            } else if ($_POST['tendency'] < 10) {
                $sql = "SELECT ahmadfai_gather.`transaction`.id_news, COUNT(*) AS total FROM ahmadfai_gather.`transaction` WHERE ahmadfai_gather.`transaction`.tendency IS NOT NULL AND ahmadfai_gather.`transaction`.id_news IS NOT NULL AND ahmadfai_gather.`transaction`.tendency < 10 GROUP BY ahmadfai_gather.`transaction`.id_news";
            } else if ($_POST['tendency'] > 10) {
                $sql = "SELECT ahmadfai_gather.`transaction`.id_news, COUNT(*) AS total FROM ahmadfai_gather.`transaction` WHERE ahmadfai_gather.`transaction`.tendency IS NOT NULL AND ahmadfai_gather.`transaction`.id_news IS NOT NULL AND ahmadfai_gather.`transaction`.tendency > 10 GROUP BY ahmadfai_gather.`transaction`.id_news";
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
        } else {
            $min = $row['id_news'];
        }
    }

    if ($min > 1) {
        $next = 'correction-news.php';
    } else {
        $next = 'Distract.php';
    }

$sql = "UPDATE ahmadfai_gather.`transaction` SET ahmadfai_gather.`transaction`.id_news = " . $min . " WHERE ahmadfai_gather.`transaction`.id = " . $_COOKIE['trans'];
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}
$conn->close();

if ($min == 1) {
    $content = '
<p>Kebijakan Populis Jokowi Jelang 2019, Naikkan Gaji PNS hingga Gratiskan Tol Suramadu<br>
    Penulis: Ihsanuddin<br>
    Publikasi: Selasa, 30 Oktober 2018 dari kompas.com
    </p>
 <p>
 Menjelang Pemilihan Presiden 2019, Presiden Joko Widodo sebagai petahana membuat berbagai kebijakan populis. Banyak kalangan mengapresiasi berbagai kebijakan ini karena dianggap bisa membantu perekonomian rakyat. Namun, tak sedikit pula yang menilai bahwa kebijakan itu hanya pencitraan demi meraup suara maksimal pada Pilpres 2019. Meski demikian, Presiden Jokowi dan jajarannya selalu menekankan bahwa kebijakan populis ini tak ada hubungannya dengan kontestasi Pilpres 2019. Berikut sejumlah kebijakan populis Jokowi yang diambil menjelang 2019
</p>
<p>
Pertama, kenaikan gaji ASN Setelah tiga tahun tidak naik, pemerintah akhirnya mengumumkan kenaikan gaji bagi PNS, anggota TNI, Polri hingga pensiunan. Melalui kenaikan gaji pokok dan pensiun pokok, Jokowi berharap, kualitas birokrasi dalam negeri semakin meningkat. "Peningkatan kualitas dan motivasi birokrasi terus dilakukan agar aparatur negara makin profesional, bersih, dan terjaga kesejahteraannya," kata Jokowi. Kedua, kenaikan Dana Bansos Presiden Joko Widodo menginstruksikan agar dana Program Keluarga Harapan (PKH) ditingkatkan hingga dua kali lipat pada 2019. Pada 2018, dana program PKH adalah 10 persen dari pengeluaran rumah tangga masyarakat miskin. Dengan persentase itu, peserta PKH mendapatkan dana sebesar Rp 1.890.000 per tahun. Ketiga, Jokowi Batal naikkan harga Premium Menjelang 2019, Jokowi juga membatalkan kenaikan harga bahan bakar minyak jenis premium. Pembatalan dilakukan secara dramatis, hanya berselang satu jam setelah kenaikan premium diumumkan Menteri Energi dan Sumber Daya Mineral Ignasius Jonan. Keempat, Jokowi menoolak kenaikan iuran BPJS Presiden Joko Widodo menolak menaikkan iuran peserta Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan. Padahal, lembaga tersebut sudah mengalami defisit bahkan sampai tak bisa membayar tagihan dari rumah sakit.
</p>
<p>
Selain itu, pemerintah meluncurkan program baru, dana kelurahan. Pada prinsipnya, program ini sama dengan dana desa yang sudah dijalankan sejak awal. Setiap kelurahan di perkotaan akan mendapat dana segar yang bisa dimanfaatkan untuk membangun infrastruktur dan fasilitas di kelurahan. Terakhir, kebijakan populis lainnya adalah pembebasan tarif tol Suramadu, yang menghubungkan Surabaya dan Madura. Meski banyak diapresiasi, namun keputusan menggratiskan tol Suramadu ini juga kembali dituding sebagai pencitraan jelang Pilpres 2019. Apalagi, pada pilpres 2014 lalu, Jokowi kalah dari Prabowo di Madura meski ia secara keseluruhan menang di Pulau Jawa. Presiden Jokowi kembali menepis anggapan bahwa kebijakan populisnya untuk kepentingan Pilpres 2019. "Ya kalau kita mau urusan politik nanti saya gratiskan bulan Maret saja, tahun depan. Jangan apa-apa dikaitkan dengan politik, ini urusan ekonomi, investasi, kesejahteraan, keadilan," kata Jokowi.
</p>
    ';
} else if ($min == 2) {
    $content = '
 <p>
Jokowi: Pemerintah targetkan 3000 Kapal untuk Nelayan Lokal di tahun 2018<br>
Penulis: Herry Sutrisno<br>
Punlikasi: Kamis, 18 Januari 2018 dari Kompas.com    
</p>
<p>
Tahun 2018 merupakan tahun keempat dari pelaksanaan program Kabinet Kerja Presiden Jokowi. Kesuksesan Menteri Kelautan dan Perikanan Susi Pudjiastuti pada tahun 2017 menjalankan program pengembangan perikanan tangkap dengan memberikan kapal, sarana penangkapan ikan, dan klaim asuransi nelayan ternyata membuat Presiden Jokowi merasa program tersebut harus dilanjutkan, bahkan ditingkatkan. Pada tahun 2017 sebanyak 998 kapal berhasil diberikan kepada nelayan lokal secara gratis. Nelayan hanya perlu bergabung dalam sebuah kelompok yang sudah memiliki badan hukum seperti koperasi untuk mendapatkan kapal gratis.
</p>
<p>
Dalam rapat kerja presiden bersama Kementerian Kelautan dan Perikanan Perikanan (KKP), Presiden Jokowi mengatakan bahwa program KKP membagikan kapal kepada nelayan lokal harus ditingkatkan dan pembagiannya harus lebih merata di seluruh Indonesia. Selain itu, Presiden Jokowi juga mengatakan bahwa pada tahun 2018 yakin pembagian kapal bisa meningkat 3x lipat atau sebanyak 3000 kapal bisa diberikan kepada nelayan lokal. Presiden tidak akan berpikir panjang untuk menyetujui anggaran untuk program tersebut, karena ia yakin produksi perikanan melalui armada kapal baru akan menguntungkan rakyat Indonesia.
</p>
<p>
Program 3000 kapal gratis untuk nelayan lokal disambut baik oleh Ketua Kesatuan Nelayan Tradisional Indonesia (KNTI) Marthin Hadiwinata. Namun, menurut Ketua KNTI pemerintah juga perlu mempertimbangkan kemampuan nelayan lokal untuk menunjang operasi kapal baru yang bentuknya jauh berbeda dengan kapal tradisional. Hal tersebut didasari oleh laporan beberapa nelayan yang masih belum bisa beradaptasi dengan kapal barunya karena mengharuskan nelayan melakukan perawatan bulanan kapal dengan mengeluarkan biaya yang lebih besar. Oleh karena itu, saran KNTI adalah selain membagikan kapal pemerintah juga perlu meningkatkan program pelatihan untuk para nelayan.
</p>
    ';
} else {
$content = '
<p>
Infrastruktur buat siapa? Jokowi menandatangani revisi PP Dana  Desa, 25% Dana Desa Dialokasikan untuk Pembangunan Infrastruktur Nasional<br>
Penulis: Herry Sutrisno<br>
Publikasi: Senin, 27 Agustus 2018 dari Kompas.com
</p>
<p>
Pembangunan infrastruktur secara masif di Indonesia memang kerap menimbulkan pro dan kontra. Pembangunan infrastruktur menjadi salah satu program rancangan strategis era Jokowi yang bertujuan untuk meningkatkan konektivitas wilayah, daya saing ekonomi nasional, dan menekan tingkat kesenjangan antar daerah di Indonesia. Sayangnya, proyek-proyek infrastruktur pemerintahan Jokowi seringkali dianggap membebankan keuangan negara karena bernilai ribuan triliun rupiah meskipun proyeknya belum selesai dan belum memberikan dampak nyata terhadap penerimaan negara dalam jangka pendek dan menengah sampai saat ini. Hal tersebut diungkapkan oleh salah satu ekonom Institute for Development of Economics and Finance (INDEF) Enny Sri Hartati pada kesempatan Diskusi Ngopi Bareng Dari Sebrang Istana di Restoran Ajag Ijig Jalan Juanda, Jakarta, Kamis (23/08/2018).
</p>
<p>
Salah satu bukti pembangunan infrastruktur membebani keuangan negara semakin nyata, disaat Presiden Jokowi melakukan revisi Peraturan Pemerintah (PP) tentang penyaluran dana desa. Jokowi menandatangani PP baru tentang penyaluran dana desa pada 27 Agustus 2018. Salah satu poin dalam revisi PP Dana Desa tersebut adalah Presiden Jokowi menyetujui pengalokasian dana desa sebesar 25% kepada dana infrastruktur nasional. Pengalokasian dana ini dilakukan oleh pemerintah karena peruntukan infrastruktur yang dibangun oleh era Jokowi pada juga terkait dengan pembangunan desa agar tidak terjadi disparitas dengan perkotaan. Namun, banyak pihak yang menyayangkan kebijakan ini karena pembangunan infrastruktur yang sangat masif dianggap terlalu dipaksakan oleh pemerintah. Bahkan, menurut Ketua Komisi V DPR Fary Djemy Francis, pembangunan infrastruktur justru hanya menjadi ajang pencitraan bagi Presiden Joko Widodo untuk menghadapi kontestasi politik pada Pemilihan Presiden 2019.
</p>
';
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