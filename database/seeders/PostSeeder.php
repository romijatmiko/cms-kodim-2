<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Post::create([
        'title' => 'Babinsa Koramil 0624-13/Cilengkrang Gerakkan Masyarakat Bersihkan Pasar Cileunyi.',
        'body' => 'Pada kegiatan kerja bakti tersebut diterjunkan seluruh personel dari Koramil 0624-13/Cilengkrang dengan melibatkan berbagai unsur dan elemen masyarakat, diantaranya Ormas Pemuda Pancasila, Ormas Merah Putih Hitam (MPH), Himpunan pemuda Morefine dan Pengurus pasar. Pasar Sehat Cileunyi dijadikan lokasi kerja bakti karena terdapat tumpukan sampah yang sudah menggunung berupa sampah plastik, sayuran hingga sampah rumah tangga. Sampah tersebut berasal dari para pengunjung pasar yang pada saat akan belanja justru sambil membawa sampah dari rumah. Dandim 0624/Kab. Bandung Letkol Inf Hamzah Budi Susanto menyampaikan bahwa kerja bakti pembersihan pasar Cileunyi dilakukan untuk mencegah agar sampah tidak terseret air hujan masuk ke parit dan mengakibatkan penyumbatan sehingga terjadi banjir.(Sumber : https://siliwangi.tniad.mil.id/berita/detail/babinsa-koramil-062413cilengkrang-gerakkan-masyarakat-bersihkan-pasar-cileunyi)',
        'img' => 'https://1.bp.blogspot.com/-E1e9_iKizzw/YFsJwciJsWI/AAAAAAAAAiY/Mpi6u__Jebk-pban4VA3VOxRV5C2zGKyACLcBGAsYHQ/s263/no%2Bimage.JPG',
        'label' => 'berita',
    ]);
     Post::create([
        'title' => 'Kodim 0624/Kabupaten Bandung Jalin Kerja Sama dengan UNPAD untuk Wujudkan Ketahanan Pangan.',
        'body' => 'Universitas Padjadjaran mendukung perwujudan ketahanan pangan di Kabupaten Bandung melalui penerapan teknologi pertanian dan penguatan kapasitas SDM. Sebagai implementasinya, Unpad berkolaborasi dengan Kodim 0624/Kabupaten Bandung dan Pemkab Bandung untuk mendukung program Babinsa Berdaya Saing. Kolaborasi tersebut diwujudkan melalui penandatanganan Nota Kesepahaman antara Unpad dan Kodim 0624/Kab. Bandung yang digelar di SPLPP Fakultas Pertanian Unpad di Jelekong, Ciparay, Kabupaten Bandung, Selasa (30/1/2024). Penandatanganan tersebut dilakukan Rektor Unpad Prof. Rina Indiastuti dengan Komandam Distrik Militer 0624/Kab. Bandung Letkol Inf. Hamzah Budi Susanto dan disaksikan langsung Bupati Bandung Dadang Supriatna. Dalam sambutannya Letkol Hamzah mengatakan, rencana kerja sama Kodim 0624/Kab. Bandung dengan Unpad akan menyasar pada pembinaan babinsa sebagai salah satu kelompok yang akan menerapkan teknologi terkini dan tepat guna untuk meningkatkan produktivitas pertanian. Babinsa bersama penyuluh pertanian akan langsung melakukan sosialisasi dan praktik di lapangan kepada masyarakat/kelompok tani. Selain itu, babinsa juga akan bergerak memanfaatkan berbagai lahan non-produktif di wilayah Kabupaten Bandung untuk diolah dan dikembangkan menjadi lahan produktif. “Program ini diharapkan dapat memotivasi petani untuk melakukan transformasi teknologi pertanian sehingga dapat meningkatkan keterampilan dan kesejahteraan petani,” kata Letkol Hamzah. Rektor pun mengapresiasi bahwa Unpad didaulat menjadi kolaborator dalam program Babinsa Berdaya Saing untuk meningkatkan ketahanan pangan di Kabupaten Bandung. Unpad dirasa perlu untuk ikut berkolaborasi dan belajar dari babinsa dalam hal pendampingan kepada masyarakat.
        
        (Sumber : https://www.unpad.ac.id/2024/01/wujudkan-ketahanan-pangan-unpad-jalin-kerja-sama-dengan-kodim-0624-kabupaten-bandung/ )',
        'img' => 'https://1.bp.blogspot.com/-E1e9_iKizzw/YFsJwciJsWI/AAAAAAAAAiY/Mpi6u__Jebk-pban4VA3VOxRV5C2zGKyACLcBGAsYHQ/s263/no%2Bimage.JPG',
        'label' => 'berita',
    ]);
     Post::create([
        'title' => 'Babinsa Kodim 0624/Kab Bandung Terus Lakukan Edukasi Lingkungan.',
        'body' => 'Berbagai upaya dilakukan Babinsa Koramil Margahayu mengajak masyarakat untuk bersama sama menjaga lingkungan bersih dan sehat. Dengan banyaknya silaturahmi dengan warga binaan lanjut Babinsa Mekarrahayu, perlahan lahan pola.pikir masyarakat kita rubah, dari tidak peduli menjadi peduli lingkungan. Dandim 0624/Kab Bandung Letkol Inf Hamzah Budi Susanto melalui Danramil 2415/Margahayu Kapten Inf Suwandi mengatakan, antisipasi bencana harus melibatkan masyarakat banyak juga unsur pemerintahan. ” Babinsa harus terus menyampaikan himbauan menjaga lingkungan kepada semua warga binaan, terutama dalam penanggulangan sampah rumah tangga, jangan sampai dibuang sembarangan yang bisa mengakibatkan banjir dan penyebaran penyakit,” terang Danramil 2415/Margahayu.
(Sumber : https://www.mediapatriot.co.id/2024/01/31/sambangi-warga-binaan-babinsa-kodim-0624-kab-bandung-terus-lakukan-edukasi-lingkungan/)
',
        'img' => 'https://1.bp.blogspot.com/-E1e9_iKizzw/YFsJwciJsWI/AAAAAAAAAiY/Mpi6u__Jebk-pban4VA3VOxRV5C2zGKyACLcBGAsYHQ/s263/no%2Bimage.JPG',
        'label' => 'berita',
    ]);
     Post::create([
        'title' => 'Babinsa Kodim 0624/Kab Bandung Bersama BPBD dan Warga Gotong Royong Bersihkan Material Sisa Banjir.',
        'body' => 'Babinsa Koramil 2407/Dayeuhkolot Kodim 0624/Kab. Bandung, Sertu Widodo, bersama BPBD Kab. Bandung dan masyarakat, melaksanakan Karya Bhakti  pembersihan lumpur dan material sisa banjir di Desa Citeureup, (20/01/2024).Sertu Widodo menyampaikan, kegiatan pembersihan lumpur tersebut merupakan bhaktinya selaku Babinsa setempat pada setiap kesulitan dan permasalahan yang di alami oleh masyarakat binaannya terutama ketika terjadinya bencana alam banjir. “Sebagai Babinsa setempat, saya harus selalu hadir di tengah masyarakat membantu kesulitan, salah satunya dengan membersihkan sisa material agar masyarakat bisa secepatnya melakukan aktivitas dengan normal,” ucapnya. Walaupun banjir sudah  surut, namun selaku Babinsa Ia selalu mengingatkan kepada warga untuk tetap waspada dan selalu berhati-hati atas segala kemungkinan yang terjadi pada saat musim hujan.
        (Sumber : https://www.kontenjabar.com/2024/01/21/babinsa-kodim-0624-kab-bandung-bersama-bpbd-dan-warga-gotong-royong-bersihkan-material-sisa-banjir/)',
        'img' => 'https://1.bp.blogspot.com/-E1e9_iKizzw/YFsJwciJsWI/AAAAAAAAAiY/Mpi6u__Jebk-pban4VA3VOxRV5C2zGKyACLcBGAsYHQ/s263/no%2Bimage.JPG',
        'label' => 'berita',
    ]);
     Post::create([
        'title' => 'Babinsa Kodim 0624/Kab Bandung Ajak Warga Dan Komunitas Bersihkan Tumpukan Sampah',
        'body' => 'Tumpukan sampah yang berserakan masih menjadi permasalahan lingkungan, kesadaran masyarakat dalam menanggulangi sampah rumah tangga harus ditingkatkan. Seperti terlihat di Kampung Cigugur RW 03 Desa Margaasih Kecamatan Margaasih, Serka Toto Karta Babinsa Koramil 2415/Margahayu Kodim 0624/Kab Bandung mengajak komunitas lingkungan dan masyarakat membersihkan puluhan kubik sampah yang dibuang sembarangan. Dandim 0624/Kab Bandung Letkol Inf Hamzah Budi Susanto melalui Danramil Margahayu Kapten Inf Suwandi mengatakan, pembersihan sampah menjadi rutinitas anggotanya dalam menjaga lingkungan dari bencana dan penyebaran penyakit.
Sumber : https://www.mediapatriot.co.id/2024/02/01/serka-toto-karta-babinsa-kodim-0624-kab-bandung-ajak-warga-dan-komunitas-bersihkan-tumpukan-sampah/
',
        'img' => 'https://1.bp.blogspot.com/-E1e9_iKizzw/YFsJwciJsWI/AAAAAAAAAiY/Mpi6u__Jebk-pban4VA3VOxRV5C2zGKyACLcBGAsYHQ/s263/no%2Bimage.JPG',
        'label' => 'berita',
    ]);
    }
}
