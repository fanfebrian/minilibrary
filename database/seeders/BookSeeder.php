<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Nanti Kita Cerita tentang Hari Ini',
            'genre' => 'Novel',
            'author' => 'Marchella FP',
            'publisher' => 'POP Publishers',
            'publication' => 'Oktober 2019',
            'halaman' => 'Hardcover, 208 halaman',
            'stock' => 10,
            'description' => 'Marchella FP lahir di Indonesia pada tanggal 16 februari 1990 , pemilik akun Instagram bernama @marchellafp ini gemar menulis prosa dan sajak di Blogspot ketika SMA. Dalam karirnya, marchella sudah menulis tiga judul buku.

            Beberapa karyanya yang sudah diterbitkan yaitu nanti kita cerita tentang hari ini,kamu terlalu banyak bercanda, dan generasi 90 . buku nkcthi ini baru saja di buat versi film layar lebar yang mendulang kesuksesan yang cukup besar, hingga tembus 2 juta penonton . buku selanjutnya yang di buat ke dalam film layar lebar yaitu generasi 90 yang tayang pada awal tahun 2020.
            
            - generasi 90-an
            - Nanti kita cerita tentang hari ini
            - kamu terlalu banyak bercanda
            
            Buku ini menceritakan tentang sebuah keluarga yang memiliki konflik di masa lalu, konflik yang belum pernah di publikasikan atau di bicarakan sebelumnya, karena dapat merusak keharmonisan yang ada di dalam keluarga ini.',
            'image' => 'books/nkcthi.jpg'
        ]);

        Book::create([
            'title' => 'Nanti juga sembuh sendiri',
            'genre' => 'Novel',
            'author' => 'Bagas Ali Prasety (Helo Bagas)',
            'publisher' => 'Gradien Mediatama',
            'publication' => 'Mei 2022',
            'halaman' => 'Hardcover, 246 halaman',
            'stock' => 15,
            'description' => '"Nanti Juga Sembuh Sendiri" adalah buku yang sebenarnya jadi (cermin) atau (teman curhat) paling dalam untuk kalian bisa jujur dengan perasaan sendiri. Sebab, begitu banyak orang yang denial dan berpura-pura kuat dan gak punya teman cerita.

            Buku ini layaknya (diary) yang mana kalian tidak perlu membaca dari awal. Cukup membuka bab atau tulisan yang sesuai dengan kondisi hati kalian saja.
            
            Buku ini berisi kata-kata sederhana, mungkin jauh dari diksi-diksi indah. Tapi kesederhanaan & apa adanya itu yang biasanya akan lebih bisa diterima oleh kalian yang gak baik-baik aja.',
            'image' => 'books/nantijugasembuhsendiri.jpg'
        ]);

        Book::create([
            'title' => 'Your Mind Kills',
            'genre' => 'Novel',
            'author' => 'Rifan Alhaq',
            'publisher' => 'Gradien Mediatama',
            'publication' => '13 Februari 2023',
            'halaman' => 'Hardcover, 182 halaman',
            'stock' => 20,
            'description' => 'Fase perpindahan diri dari masa remaja menuju pendewasaan menyuguhkan ribuan pertanyaan tentang hidup. Layaknya anak panah, pertanyaan-pertanyaan itu tak jarang membuat hidup terasa tidak benar-benar hidup. Hidup yang terasa mati karena terlalu sibuk memikirkan “bagaimana caranya aku bisa hidup?”.

            Saat ini tidak sedikit manusia yang memaksa dirinya terlihat hidup di hadapan manusia lain, namun sebenarnya ia mati terbunuh oleh pikiran yang membatasi hidupnya sendiri hanya untuk mendapatkan hidangan lezat berupa pengakuan, status sosial, atau hal lainnya demi keberlanjutan hidup mereka.
            
            Mereka mencoba hidup dan memang berhasil terlihat hidup, namun mereka gagal dan mati karena kalah dalam konflik yang terjadi di dalam dirinya sendiri. Kita tak pernah sadar, bahwa selama ini pikiran kita sendirilah yang membunuh kita setiap hari.
            
            Buku pengembangan diri pertama penulis dengan tulisan narasi dan selipan prosa pendek ini akan menjadi teman buat kalian dalam proses menuju dewasa',
            'image' => 'books/yourmindkills.jpg'
        ]);

        Book::create([
            'title' => 'Untuk Diriku, Terima Kasih',
            'genre' => 'Novel',
            'author' => 'Yosia Pulung (Selftalkhabit)',
            'publisher' => 'Gradien Mediatama',
            'publication' => '2023',
            'halaman' => '200 halaman',
            'stock' => 5,
            'description' => 'Untuk diriku, aku berterima kasih padamu, karena kamu yang selalu membantuku dan menemaniku. Terima kasih juga untuk segala kebaikanmu. Karena dirimu, aku bisa sampai di titik saat ini dan belajar akan berbagai hal yang begitu berharga yang nggak pernah aku temui dan hadapi sebelumnya.',
            'image' => 'books/untukdirikuterimakasih.jpg'
        ]);
    }
}
