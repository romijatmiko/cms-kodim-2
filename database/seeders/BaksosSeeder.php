<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Baksos;

class BaksosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // Menyisipkan data langsung ke dalam tabel Baksos
    Baksos::create([
        'title' => 'Kodim 0624/ Kab.Bandung Giat Bakti Sosial Bersama PT. Vensya Utama',
        'body' => 'Pada hari Senin 20 April 2020 Pkl.10.30 Wib jajaran Kodim 0624/ Kab. Bandung Babinsa Koramil 0629 Banjaran Serma Khoerudin mendampingi kegiatan pembagian Sembako, bekerjasama dengan PT. Vensya utama,bertempat di Wilayah RW 02,Desa Jagabaya Kecamatan Cimaung Kab. Bandung. Dalam kesempatan nya Kasdim Mayor Inf Nazwir Kasdim Staf Kodim 0624/Kab. Bandung menghimbau masyarakat untuk menggunakan masker dalam situasi pandemi saat it, keluar rumah atau berpergian dan sebelum masuk ke rumah dengan sering cuci tangan dan mengurangi intensitas bepergian jika tidak ada kepentingan, untuk lebih bisa saling menjaga sehingga penyebaran Covid-19 dapat dihentikan saat itu. 
        Dalam kegiataan tersebut juga dilaksanakan sosialisasi tentang upaya yang dapat dilakukan untuk memutus rantai penyebaran Covid-19. Diantaranya anjuran untuk tetap tinggal di rumah, tidak berkerumun,pentingnya menjaga jarak dan hal lain yang agar menjaga kesehatan juga, kesehatan yang harus mengikuti arahan pemerintahan, terutama wilayah binaan masing-masing Babinsa mau Bhabinkamtibmas dan dari Pemerintahan Desa serta  Kecamatan setempat.',
        'img' => 'https://1.bp.blogspot.com/-E1e9_iKizzw/YFsJwciJsWI/AAAAAAAAAiY/Mpi6u__Jebk-pban4VA3VOxRV5C2zGKyACLcBGAsYHQ/s263/no%2Bimage.JPG',
        'label' => 'Baksos',
    ]);

    Baksos::create([
        'title' => 'Kodim 0624/Kab. Bandung Melaksanakan Touring Bakti Sosial dan Kampanye Protokol Kesehatan 5 M',
        'body' => 'Dalam rangka HUT Ke-1 Kodim 0624/ Kab Bandung melaksanakan Touring Bakti Sosial dan Kampanye Protokol Kesehatan bersama Forkopimda Kab. Bandung dan Komunitas Royal Enfield Riders (RORI) Kota Bandung, Sabtu (06/02/2021). Rute Touring Kodim 0624/ Kab Bandung ( 53,5 KM). Start Kodim 0624 melaksanakan giat Swab Antigen kepada peserta-belok kiri ke jalan Al fathu- belok kiri jalan tol Soreang pasirkoja-belok kanan ke jalan Gading-belok kiri ke jalan Banjaran berheunti pertama Alun alun Banjaran giat bagi sembako dan masker tetap di jalan Raya Banjaran – pom bensin Kulalet belok kanan- Jalan Laswi dan berhenti di alun alun Ciparay. Kegiatan Touring ini lanjutan dari kegiatan sebelumnya Dandim 0624/Kab. Bandung bersama Kepala Dinas Kesehatan, Kab Bandung melakukan Gowes bersama (Selasa, 02/02/2021) dan Giat Gowes Dandim 0624/Kab Bandung bersama Kepala Dinas Sosial Kab. Bandung pada Kamis (04/02/2021. Dalam kegiatan ini Pemda  memberikan bantuan kepada Kodim 0624/Kab. Bandung berupa masker sekitar 2.500 buah dan sanitiser sebanyak 500 botol. Selain untuk silaturahmi kegiatan tersebut sekaligus membagi-bagikan Masker kepada masyarakat dan mengkampanyekan 5 M yakni memakai masker, mencuci tangan, menjaga jarak, menjauhi kerumunan membatasi mobilitas, dimana disepanjang Route akan melaksanakan Baksos yang meliputi pembagian Masker, Sembako dan Sanitaiser kepada masyarakat. Dengan sasaran Protokol Kesehatan di Alun- alun Banjaran sebanyak 50 orang PCR antigen, Alun – alun Ciparay dengan sasaran 100 orang tes PCR antigen dan selajutnya dilaksanakan di Makoramil 2401/Rancaekek berjumlah 150 orang melaksanakan tes PCR antigen.',
        'img' => 'https://drive.google.com/uc?id=1xyD4snlTUlxNyB-E8YG9as92bIZbt7f1',
        'label' => 'Baksos',
    ]);


    Baksos::create([
        'title' => 'Kodim 0624 Kabupaten Bandung Laksanakan Karya Bakti di Kecamatan Banjaran',
        'body' => 'Kegiatan Karya Bhakti Kodim 0624 Kabupaten Bandung dilaksanakan di Alun-alun Kecamatan Banjaran, Jumat (2/9/2022). Kegiatan Karya Bhakti tersebut sebagai bagian dari Program yang dijalankan oleh Satkowil TNI AD Kodim 0624 Kabupaten Bandung untuk tahun anggaran Semester II 2022. Tema kegiatan yang dilaksanakan yaitu "Karya Bakti TNI Satkowil Sebagai Upaya TNI AD Dalam Membantu Mengatasi Kesulitan Rakyat". Acara ini diisi dengan kegiatan bersih-bersih lingkungan secara Gotong Royong di seputar Alun-alun Banjaran, Kantor Koramil Banjaran juga Jalan Kiartasan Pasar Banjaran. Dihadiri oleh Pasiter Kodim. 0624 Kab. Bandung, Kaf. Inf. Sudarwan, Ba Tuud Koramil 2409 Banjaran dan Serma Zainal Abidin, Kepala UPTD Pasar Banjaran, Bapak Holid, Jajaran SatPol PP Kecamatan Banjaran. Selain itu kegiatan dibantu oleh Pengurus Rayon 08.08 FKPPI Kec. Banjaran, hadir ketua, H. Tatang Kurnia didampingi jajaran keanggotaan, acara juga dibantu dan dihadiri jajaran perangkat Desa Banjaran Kulon.',
        'img' => 'https://drive.google.com/uc?id=1HEot7d9YZbFo-aIglT4NMw4SKh3m7AQU',
        'label' => 'Baksos',
    ]);

    Baksos::create([
        'title' => 'Kodim 0624/Kab Bandung Gelar Bakti Sosial Pemberdayaan Masyarakat TA 2022.',
        'body' => 'Bakti sosial pemberdayaan masyarakat Kodim 0624/Kab Bandung TA 2022 dilaksanakan dengan tujuan membantu pemerintah daerah dalam.meningkatkan pengetahuan dan keterampilan sehingga masyarakat menjadi lebih mandiri. Kegiatan pemberdayaan masyarakat ini di gelar di Aula M Toha Makodim 0624/Kab Bandung, Rabu (12/10). Peserta terdiri dari unsur masyarakat, mahasiswa juga pelajar yang berada di wilayah Kabupaten Bandung. Kegiatan Bakti Pemberdayaan masyarakat ini sasarannya tercapai kegiatan pendampingan serta penguatan di bidang pendidikan, wirausaha, ekonomi dan lainnya bagi masyarakat setempat demi  tercapainya keluarga yang sejahtera. Kegiatan bakti Pemberdayaan masyarakat diisi dengan beberapa materi yang diberikan oleh Dinas terkait.',
        'img' => 'https://drive.google.com/uc?id=1qSkuGvK0Rb6xyVRlrW5JHmYqYppB3E_r',
        'label' => 'Baksos',
    ]);

    Baksos::create([
        'title' => 'Kasdim 0624/Kab.Bandung Membuka Giat Karya Bakti TNI di Wilayah Koramil 2406/Pacet-Kertasari',
        'body' => 'Dandim 0624/Kab. Bandung Letkol Inf Hamzah Budi Susanto, melalui Kasdim 0624/Kab. Bandung Mayor Chb (K) Sri Nurhaeni, membuka kegiatan Karya Bhakti TNI Tahun 2023, pada Kamis, (16/11/2023). Kegiatan tersebut dihadiri oleh Kepala Dinas Pemberdayaan Masyarakat dan Desa (DPMD) Kabupaten Bandung, H. Tata Irawan Sobandi, sejumlah Kepala Dinas dan Kepala Badan dari Organisasi Perangkat Daerah (OPD) Kabupaten Bandung, Muspika Kecamatan Pacet, Pemerintahan Desa Mandalahaji, para Ketua RW, Tokoh Agama, tokoh Masyarakat serta tamu undangan lainya. Kasdim Sri menyampaikan amanat Dandim 0624, Karya Bakti TNI yang dilaksanakan di wilayah Kabupaten Bandung ini merupakan perwujudan moral antara satuan komando kewilayahan dengan pemerintah daerah serta komponen masyarakat yang diwujudkan melalui bakti TNI dengan pelaksanaannya dilakukan secara bekerjasama dan terpadu. Kerjasama ini dilakukan sebagai upaya untuk mendukung program pemerintah daerah dalam rangka turut serta mewujudkan percepatan pembangunan di wilayah Kabupaten Bandung. Selanjutnya, Kasdim Sri bersama OPD Kabupaten Bandung, Muspika Kecamatan Pacet serta pemerintahan Desa Mandalahaji, secara langsung meninjau ke lokasi pekerjaan karya bakti TNI, yaitu pembangunan jalan rabat beton Desa Mandalahaji.',
        'img' => 'https://drive.google.com/uc?id=1iMLxdEGHyrrypI__X4U6On49SnGCangV',
        'label' => 'Baksos',
    ]);

    

    // dan seterusnya untuk data yang lain
}
}
