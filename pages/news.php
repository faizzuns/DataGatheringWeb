<?php
if (!isset($_POST['tendency']) || !isset($_COOKIE['fill'])) {
    header("Location: home.php");
    die();
}
require 'templates/header.php';
require '../php/connect.php';
$sql = "UPDATE `fill` SET `fill`.tendency_1 = " . $_POST['tendency'] . " WHERE `fill`.id = " . $_COOKIE['fill'];
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}
$sql = "SELECT * FROM `fill` WHERE `fill`.id = " . $_COOKIE['fill'];
$min = -1;
$tend = $_POST['tendency'];
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) if ($row['id_news'] != NULL) $min = $row['id_news'];
$conn->close();

if ($min == -1) require '../php/update-news.php';

if ($min == 1) {
    $content = '
<p><strong>Presiden Jokowi Bahas Perkembangan Pembangunan Infrastruktur dalam Sidang Tahunan MPR Tahun 2018</strong></p>
 <p>
Saat ini pembangunan infrastruktur secara masif dilakukan di Indonesia, mulai dari 
daerah-daerah terpencil hingga kota-kota besar. Pembangunan infrastruktur memang menjadi salah satu 
program rancangan strategis di era Jokowi yang bertujuan untuk meningkatkan konektivitas wilayah, 
daya saing ekonomi nasional, dan menekan tingkat kesenjangan antar daerah di Indonesia. Sayangnya, 
kebijakan andalan Jokowi pembangunan infrastruktur di Indonesia kerap kali menimbulkan pro dan 
kontra. Oleh karena itu, dalam Sidang Tahunan MPR 2018 Jokowi menyampaikan pidato kinerja 
lembaga negara selama satu tahun terakhir termasuk didalamnya membahas perkembangan 
pembangunan infrastruktur di Indonesia.. Selain anggota MPR RI, pada sidang tahunan tersebut juga 
dihadiri oleh para menteri, dan tamu undangan. Mantan Presiden Republik Indonesia juga turut 
diundang dalam Sidang Tahunan MPR 2018, yakni BJ Habibie, Megawati Soekarnoputri, Susilo 
Bambang Yudhoyono, serta para mantan wakil presiden.</p>
<p>
Dalam pidatonya, Presiden mengungkapkan beberapa poin penting mengenai pembangunan 
infrastruktur di Indonesia selama setahun terakhir. Pertama, menurut Presiden Jokowi untuk 
membangun infrastruktur perlu kerjasama antar badan pemerintah, swasta, dan seluruh wakil rakyat 
untuk mencapai tujuan bersama. Hal tersebut dikarenakan setiap tahun anggaran infrastruktur meningkat 
signifikan, sehingga negara membutuhkan dana besar untuk melakukan pembangunan infrastruktur.</p>
<p>
Bahkan, negara sampai saat ini masih belum bisa lepas dari utang asing demi membangun infrastruktur. 
Di sisi lain, Jokowi juga menjelaskan bahwa pembangunan infrastruktur yang sudah selesai telah 
memberikan dampak signifikan bagi perekonomian rakyat khususnya kemudahan akses distribusi dari 
satu daerah ke daerah lain. Selain itu, menurut Jokowi pembangunan infrastruktur juga memberikan 
dampak positif karena meningkatkan daya saing bangsa dan produktivitas masyarakat. Hal tersebut 
membuat Indonesia bisa mengejar ketertinggalannya dari negara-negara lain. Untuk menutup pidatonya, 
Jokowi menekankan bahwa pembangunan infrastruktur yang menjadi fokus pemerintahan saat ini jangan 
hanya dipahami untuk membangun fisik sebuah negara saja tetapi membangun mental dan karakter 
sumber daya manusianya juga. Oleh karena itu, jangan takut mengeluarkan dana yang besar untuk 
membangun infrastruktur karena pada akhirnya akan membawa Indonesia menjadi negara yang maju.</p>';
} else if ($min == 2) {
    $content = '
 <p><strong>Jokowi Menaikkan Dana Desa sebesar 25% untuk Pembangunan Infrastruktur demi Terciptanya Keadilan Ekonomi</strong></p>
<p>
Saat ini pembangunan infrastruktur secara masif dilakukan di Indonesia, mulai dari 
daerah-daerah terpencil hingga kota-kota besar. Pembangunan infrastruktur memang menjadi salah satu 
program rancangan strategis di era Jokowi yang bertujuan untuk meningkatkan konektivitas wilayah, 
daya saing ekonomi nasional, dan menekan tingkat kesenjangan antar daerah di Indonesia. Salah satu 
fokus pemerintahan Jokowi adalah melakukan pembangunan infrastruktur untuk daerah tertinggal. 
Komitmen Jokowi untuk membangun infrastruktur semakin terpampang nyata dengan menaikkan 
alokasi dana desa sebesar 25% dari yang sebelumnya sebesar 76 triliun menjadi 95 triliun. Hal tersebut 
diungkapkan oleh Presiden Jokowi dalam rapat kerja bersama Menteri Desa, Pembangunan Daerah 
Tertinggal, dan Transmigrasi (Mendes PDTT) Eko Putro Sandjojo di Kantor Kementerian Desa, 
Pembangunan Daerah Tertinggal, dan Transmigrasi di Jakarta Selatan (23/08/2018).</p>
<p>
Meskipun banyak pihak yang mengkritik kebijakan Jokowi menaikkan dana desa sebesar 25 %, 
karena dianggap sebagai salah satu alat pendongkrak elektabilitas Jokowi di Pilpres 2019. Pemerintah 
mengatakan bahwa tidak akan larut dalam kritik tersebut, namun tetap fokus membangun infrastruktur 
di daerah-daerah tertinggal agar tercipta pemerataan ekonomi. Menurut Jokowi, tambahan dana desa 
yang diberikan pemerintah dapat mempercepat pembangunan sehingga mampu meningkatkan 
perekonomian daerah itu sendiri. Selain itu, menurut Mendes PDTT pemanfaatan dana desa untuk 
membangun infrastruktur dapat dilakukan dengan membangun jalan kampung, jalan desa, jalan produksi 
akses pertanian, perbaikan irigasi, dan lain-lain. Melalui kebijakan Jokowi meningkatkan dana desa 
sebesar 25%, pemerintah optimis menciptakan pemerataan ekonomi antara desa dan kota sehingga tidak 
ada lagi kesenjangan ekonomi.</p>';
} else {
$content = '
<p><strong>Infrastruktur buat siapa? Jokowi menandatangani revisi PP Dana  Desa, 25% Dana Desa Dialokasikan untuk Pembangunan Infrastruktur Nasional</strong></p>
<p>
Pembangunan infrastruktur secara masif di Indonesia memang kerap menimbulkan pro dan 
kontra. Pembangunan infrastruktur menjadi salah satu program rancangan strategis era Jokowi yang 
bertujuan untuk meningkatkan konektivitas wilayah, daya saing ekonomi nasional, dan menekan tingkat 
kesenjangan antar daerah di Indonesia. Sayangnya, proyek-proyek infrastruktur pemerintahan Jokowi 
seringkali dianggap membebankan keuangan negara karena bernilai ribuan triliun rupiah meskipun 
proyeknya belum selesai dan belum memberikan dampak nyata terhadap penerimaan negara dalam 
jangka pendek dan menengah sampai saat ini. Hal tersebut diungkapkan oleh salah satu ekonom Institute 
for Development of Economics and Finance (INDEF) Enny Sri Hartati pada kesempatan Diskusi Ngopi 
Bareng Dari Sebrang Istana di Restoran Ajag Ijig Jalan Juanda, Jakarta, Kamis (23/08/2018).</p>
<p>
Salah satu bukti pembangunan infrastruktur membebani keuangan negara semakin nyata, disaat 
Presiden Jokowi melakukan revisi Peraturan Pemerintah (PP) tentang penyaluran dana desa. Jokowi 
menandatangani PP baru tentang penyaluran dana desa pada 27 Agustus 2018. Salah satu poin dalam 
revisi PP Dana Desa tersebut adalah Presiden Jokowi menyetujui pengalokasian dana desa sebesar 25% 
kepada dana infrastruktur nasional. Pengalokasian dana ini dilakukan oleh pemerintah karena 
peruntukan infrastruktur yang dibangun oleh era Jokowi juga terkait dengan pembangunan desa agar 
tidak terjadi disparitas dengan perkotaan. Namun, banyak pihak yang menyayangkan kebijakan ini 
karena pembangunan infrastruktur yang sangat masif dianggap terlalu dipaksakan oleh pemerintah. 
Bahkan, menurut Ketua Komisi V DPR Fary Djemy Francis pembangunan infrastruktur justru hanya 
menjadi ajang pencitraan bagi Presiden Joko Widodo untuk menghadapi kontestasi politik pada 
Pemilihan Presiden 2019.</p>
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
                    <form method="post" class="flex center-horizontal margin-bot-medium" action="TFeeling.php">
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