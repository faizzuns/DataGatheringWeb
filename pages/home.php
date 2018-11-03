<?php
    require 'templates/header.php';
?>

<link rel="stylesheet" href="../css/home.css">

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
                        <p>Rekan-rekan yang saya hormati,</p>
                        <p>Perkenalkan saya Ladayna Nurul Arasy mahasiswa semester 7, Fakultas Psikologi Universitas Indonesia. Saat ini saya sedang melakukan survei dalam rangka pengambilan data untuk memenuhi Tugas Akhir Skripsi. Survei ini dilakukan untuk melihat pengaruh media terhadap dukungan politik individu. Jika rekan-rekan bersedia untuk berpartisipasi dalam survei ini, Anda akan diminta untuk melengkapi data diri, menentukan dukungan politik, membaca artikel, dan mengisi kuesioner singkat. Waktu yang dibutuhkan untuk mengisi survei ini kira-kira berkisar antara 15-20 menit. Semua informasi yang Anda berikan dalam survei ini akan disimpan secara rahasia. Hanya peneliti yang memiliki akses terhadap data yang Anda berikan dan hanya akan digunakan untuk kepentingan penelitian ini.</p>
                        <p>Partisipasi Anda sepenuhnya sukarela dan tanpa paksaan. Anda berhak untuk memperoleh informasi mengenai hasil dari penelitian yang saya lakukan. Di sisi lain, Anda juga berhak untuk berhenti sebagai partisipan dalam penelitian ini kapanpun tanpa mendapatkan konsekuensi apapun. Apabila terdapat beberapa pertanyaan terkait penelitian ini dan ingin mengetahui hasil dari penelitian ini, Anda dapat menghubungi peneliti melalui email atau nomor telepon peneliti (ladayaras@gmail.com / 082112609646).</p>
                        <p>Apabila Anda bersedia menjadi partisipan dalam penelitian ini, silahkan klik kotak yang berisikan tulisan bersedia dibawah ini.</p>
                    </div>
                </div>
                <form class="flex center-horizontal margin-bot-medium" action="identity.php">
                    <input type="submit" value="Bersedia" class="btn btn-outline-dark quarter">
                </form>
                <div class="flex text-size-very-small margin-large" style="text-align: left">
                    <p>Atas kesediaan rekan-rekan, saya ucapkan terima kasih.<br>
                        Salam Peneliti,<br>
                        Ladayna Nurul Arasy
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require 'templates/footer.php';
?>