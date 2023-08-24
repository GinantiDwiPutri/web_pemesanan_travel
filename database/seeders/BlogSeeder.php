<?php

namespace Database\Seeders;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        Blog::factory()->create([
            'title' => 'Cuaca Panas, Ini 6 Cara Mencegah Dehidrasi pada Tubuh',
            'slug' => 'cuaca-panas-ini-6-cara-mencegah-dehidrasi-pada-tubuh',
            'body' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Berikut ini beberapa cara untuk mencegah dehidrasi terutama saat cuaca panas.</p><h3 id="h-1-minum-saat-merasa-haus" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">1.&nbsp;<span style="font-weight: bolder;">Minum saat merasa haus</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika tubuh sudah merasa kehausan segeralah untuk minum air putih. Untuk mengantisipasinya, bawalah botor air saat bepergian. Hal tersebut dapat mengatasi rasa haus yang menyerang, terutama ketika cuaca panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Cuaca yang panas juga merupakan tanda bahwa tubuh membutuhkan asupan cairan yang lebih. Kebutuhan air dapat menyesuaikan dengan massa tubuh dan seberapa banyak berkeringat.</p><h3 id="h-2-penuhi-kecukupan-air" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">2.&nbsp;<span style="font-weight: bolder;">Penuhi kecukupan air</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Optimalkan kecukupan cairan tubuh dengan rutin mengonsumsi air putih. Kecukupan kebutuhan air bergantung pada beberapa hal seperti usia, jenis kelamin dan tingkat usia. Umumnya, laki-laki memiliki kebutuhan cairan yang lebih tinggi daripada perempuan.</p><h3 id="h-3-konsumsi-buah-dan-sayuran-secara-rutin" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">3.&nbsp;<span style="font-weight: bolder;">Konsumsi buah dan sayuran secara rutin</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Dengan mengonsumsi beragam buah-buahan dan sayuran dapat membantu mencegah dehidrasi. Sayuran dan buah memiliki kandungan air yang tinggi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Di antaranya seperti melon, stroberi, dan semangka mengandung 90 hingga 99 persen air, sedangkan apel, anggur, jeruk, dan nanas mengandung antara 80 dan 89 persen air.</p><h3 id="h-4-minum-air-saat-bangun-tidur" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">4.&nbsp;<span style="font-weight: bolder;">Minum air saat bangun tidur</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Ketika bangun pagi, cobalah untuk rutin minum segelas air. Untuk membiasakannya, sebelum tidur malam sediakan segelas air disamping tempat tidur.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Selain itu, selalu cukupkan kebutuhan air setiap hari. Tak lupa, sesuaikan dengan tingkat aktivitas fisik yang kamu lakukan, ya!</p><h3 id="h-5-buat-rasa-air-lebih-enak" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">5.&nbsp;<span style="font-weight: bolder;">Buat rasa air lebih enak</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu tidak menyukai rasa hambar air, kamu dapat mencari alternatif lain, seperti dengan menambah perasaan lemon atau jeruk nipis kedalam&nbsp; botol minuman air, bisa juga dengan mengonsumsi jus sayur dan buah tanpa pemanis dan soda, serta dengan minum teh ginseng.</p><h3 id="h-6-tetap-di-dalam-ruangan-saat-cuaca-terlalu-panas" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">6.&nbsp;<span style="font-weight: bolder;">Tetap di dalam ruangan saat cuaca terlalu panas</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu terpapar sinar matahari secara berlebihan, maka tubuh akan kehilangan kandungan air dan garam tubuh yang penting, seperti natrium dan kalium. Dalam kasus yang parah, ini dapat menyebabkan sengatan panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Tetaplah berada di dalam ruangan saat cuaca terlalu panas jika kebutuhan tidak mendesak dan hindari kopi, soda, teh berkafein, dan alkohol, karena minuman ini dapat menyebabkan dehidrasi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Itulah beberapa cara untuk mencegah terjadinya dehidrasi terutama saat cuaca panas. Dengan begitu aktivitas kamu dapat berjalan lancar meskipun di bawah cuaca panas.</p>',
        ]);

        Blog::factory()->create([
            'title' => 'Alami Dehidrasi, Ini Daftar Minuman yang Wajib Dikonsumsi',
            'slug' => 'alami-dehidrasi-ini-daftar-minuman-yang-wajib-dikonsumsi',
            'body' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Berikut ini beberapa cara untuk mencegah dehidrasi terutama saat cuaca panas.</p><h3 id="h-1-minum-saat-merasa-haus" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">1.&nbsp;<span style="font-weight: bolder;">Minum saat merasa haus</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika tubuh sudah merasa kehausan segeralah untuk minum air putih. Untuk mengantisipasinya, bawalah botor air saat bepergian. Hal tersebut dapat mengatasi rasa haus yang menyerang, terutama ketika cuaca panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Cuaca yang panas juga merupakan tanda bahwa tubuh membutuhkan asupan cairan yang lebih. Kebutuhan air dapat menyesuaikan dengan massa tubuh dan seberapa banyak berkeringat.</p><h3 id="h-2-penuhi-kecukupan-air" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">2.&nbsp;<span style="font-weight: bolder;">Penuhi kecukupan air</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Optimalkan kecukupan cairan tubuh dengan rutin mengonsumsi air putih. Kecukupan kebutuhan air bergantung pada beberapa hal seperti usia, jenis kelamin dan tingkat usia. Umumnya, laki-laki memiliki kebutuhan cairan yang lebih tinggi daripada perempuan.</p><h3 id="h-3-konsumsi-buah-dan-sayuran-secara-rutin" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">3.&nbsp;<span style="font-weight: bolder;">Konsumsi buah dan sayuran secara rutin</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Dengan mengonsumsi beragam buah-buahan dan sayuran dapat membantu mencegah dehidrasi. Sayuran dan buah memiliki kandungan air yang tinggi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Di antaranya seperti melon, stroberi, dan semangka mengandung 90 hingga 99 persen air, sedangkan apel, anggur, jeruk, dan nanas mengandung antara 80 dan 89 persen air.</p><h3 id="h-4-minum-air-saat-bangun-tidur" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">4.&nbsp;<span style="font-weight: bolder;">Minum air saat bangun tidur</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Ketika bangun pagi, cobalah untuk rutin minum segelas air. Untuk membiasakannya, sebelum tidur malam sediakan segelas air disamping tempat tidur.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Selain itu, selalu cukupkan kebutuhan air setiap hari. Tak lupa, sesuaikan dengan tingkat aktivitas fisik yang kamu lakukan, ya!</p><h3 id="h-5-buat-rasa-air-lebih-enak" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">5.&nbsp;<span style="font-weight: bolder;">Buat rasa air lebih enak</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu tidak menyukai rasa hambar air, kamu dapat mencari alternatif lain, seperti dengan menambah perasaan lemon atau jeruk nipis kedalam&nbsp; botol minuman air, bisa juga dengan mengonsumsi jus sayur dan buah tanpa pemanis dan soda, serta dengan minum teh ginseng.</p><h3 id="h-6-tetap-di-dalam-ruangan-saat-cuaca-terlalu-panas" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">6.&nbsp;<span style="font-weight: bolder;">Tetap di dalam ruangan saat cuaca terlalu panas</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu terpapar sinar matahari secara berlebihan, maka tubuh akan kehilangan kandungan air dan garam tubuh yang penting, seperti natrium dan kalium. Dalam kasus yang parah, ini dapat menyebabkan sengatan panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Tetaplah berada di dalam ruangan saat cuaca terlalu panas jika kebutuhan tidak mendesak dan hindari kopi, soda, teh berkafein, dan alkohol, karena minuman ini dapat menyebabkan dehidrasi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Itulah beberapa cara untuk mencegah terjadinya dehidrasi terutama saat cuaca panas. Dengan begitu aktivitas kamu dapat berjalan lancar meskipun di bawah cuaca panas.</p>',
        ]);

        Blog::factory()->create([
            'title' => 'Waspada, Ini 4 Gangguan Kesehatan Akibat Heat Stroke',
            'slug' => 'waspada-ini-4-gangguan-kesehatan-akibat-heat-stroke',
            'body' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Berikut ini beberapa cara untuk mencegah dehidrasi terutama saat cuaca panas.</p><h3 id="h-1-minum-saat-merasa-haus" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">1.&nbsp;<span style="font-weight: bolder;">Minum saat merasa haus</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika tubuh sudah merasa kehausan segeralah untuk minum air putih. Untuk mengantisipasinya, bawalah botor air saat bepergian. Hal tersebut dapat mengatasi rasa haus yang menyerang, terutama ketika cuaca panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Cuaca yang panas juga merupakan tanda bahwa tubuh membutuhkan asupan cairan yang lebih. Kebutuhan air dapat menyesuaikan dengan massa tubuh dan seberapa banyak berkeringat.</p><h3 id="h-2-penuhi-kecukupan-air" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">2.&nbsp;<span style="font-weight: bolder;">Penuhi kecukupan air</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Optimalkan kecukupan cairan tubuh dengan rutin mengonsumsi air putih. Kecukupan kebutuhan air bergantung pada beberapa hal seperti usia, jenis kelamin dan tingkat usia. Umumnya, laki-laki memiliki kebutuhan cairan yang lebih tinggi daripada perempuan.</p><h3 id="h-3-konsumsi-buah-dan-sayuran-secara-rutin" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">3.&nbsp;<span style="font-weight: bolder;">Konsumsi buah dan sayuran secara rutin</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Dengan mengonsumsi beragam buah-buahan dan sayuran dapat membantu mencegah dehidrasi. Sayuran dan buah memiliki kandungan air yang tinggi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Di antaranya seperti melon, stroberi, dan semangka mengandung 90 hingga 99 persen air, sedangkan apel, anggur, jeruk, dan nanas mengandung antara 80 dan 89 persen air.</p><h3 id="h-4-minum-air-saat-bangun-tidur" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">4.&nbsp;<span style="font-weight: bolder;">Minum air saat bangun tidur</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Ketika bangun pagi, cobalah untuk rutin minum segelas air. Untuk membiasakannya, sebelum tidur malam sediakan segelas air disamping tempat tidur.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Selain itu, selalu cukupkan kebutuhan air setiap hari. Tak lupa, sesuaikan dengan tingkat aktivitas fisik yang kamu lakukan, ya!</p><h3 id="h-5-buat-rasa-air-lebih-enak" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">5.&nbsp;<span style="font-weight: bolder;">Buat rasa air lebih enak</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu tidak menyukai rasa hambar air, kamu dapat mencari alternatif lain, seperti dengan menambah perasaan lemon atau jeruk nipis kedalam&nbsp; botol minuman air, bisa juga dengan mengonsumsi jus sayur dan buah tanpa pemanis dan soda, serta dengan minum teh ginseng.</p><h3 id="h-6-tetap-di-dalam-ruangan-saat-cuaca-terlalu-panas" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">6.&nbsp;<span style="font-weight: bolder;">Tetap di dalam ruangan saat cuaca terlalu panas</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu terpapar sinar matahari secara berlebihan, maka tubuh akan kehilangan kandungan air dan garam tubuh yang penting, seperti natrium dan kalium. Dalam kasus yang parah, ini dapat menyebabkan sengatan panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Tetaplah berada di dalam ruangan saat cuaca terlalu panas jika kebutuhan tidak mendesak dan hindari kopi, soda, teh berkafein, dan alkohol, karena minuman ini dapat menyebabkan dehidrasi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Itulah beberapa cara untuk mencegah terjadinya dehidrasi terutama saat cuaca panas. Dengan begitu aktivitas kamu dapat berjalan lancar meskipun di bawah cuaca panas.</p>',
        ]);

        Blog::factory()->create([
            'title' => 'Berapa Kalori yang Terdapat dalam Es Kelapa?',
            'slug' => 'berapa-kalori-yang-terdapat-dalam-es-kelapa',
            'body' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Berikut ini beberapa cara untuk mencegah dehidrasi terutama saat cuaca panas.</p><h3 id="h-1-minum-saat-merasa-haus" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">1.&nbsp;<span style="font-weight: bolder;">Minum saat merasa haus</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika tubuh sudah merasa kehausan segeralah untuk minum air putih. Untuk mengantisipasinya, bawalah botor air saat bepergian. Hal tersebut dapat mengatasi rasa haus yang menyerang, terutama ketika cuaca panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Cuaca yang panas juga merupakan tanda bahwa tubuh membutuhkan asupan cairan yang lebih. Kebutuhan air dapat menyesuaikan dengan massa tubuh dan seberapa banyak berkeringat.</p><h3 id="h-2-penuhi-kecukupan-air" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">2.&nbsp;<span style="font-weight: bolder;">Penuhi kecukupan air</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Optimalkan kecukupan cairan tubuh dengan rutin mengonsumsi air putih. Kecukupan kebutuhan air bergantung pada beberapa hal seperti usia, jenis kelamin dan tingkat usia. Umumnya, laki-laki memiliki kebutuhan cairan yang lebih tinggi daripada perempuan.</p><h3 id="h-3-konsumsi-buah-dan-sayuran-secara-rutin" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">3.&nbsp;<span style="font-weight: bolder;">Konsumsi buah dan sayuran secara rutin</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Dengan mengonsumsi beragam buah-buahan dan sayuran dapat membantu mencegah dehidrasi. Sayuran dan buah memiliki kandungan air yang tinggi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Di antaranya seperti melon, stroberi, dan semangka mengandung 90 hingga 99 persen air, sedangkan apel, anggur, jeruk, dan nanas mengandung antara 80 dan 89 persen air.</p><h3 id="h-4-minum-air-saat-bangun-tidur" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">4.&nbsp;<span style="font-weight: bolder;">Minum air saat bangun tidur</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Ketika bangun pagi, cobalah untuk rutin minum segelas air. Untuk membiasakannya, sebelum tidur malam sediakan segelas air disamping tempat tidur.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Selain itu, selalu cukupkan kebutuhan air setiap hari. Tak lupa, sesuaikan dengan tingkat aktivitas fisik yang kamu lakukan, ya!</p><h3 id="h-5-buat-rasa-air-lebih-enak" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">5.&nbsp;<span style="font-weight: bolder;">Buat rasa air lebih enak</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu tidak menyukai rasa hambar air, kamu dapat mencari alternatif lain, seperti dengan menambah perasaan lemon atau jeruk nipis kedalam&nbsp; botol minuman air, bisa juga dengan mengonsumsi jus sayur dan buah tanpa pemanis dan soda, serta dengan minum teh ginseng.</p><h3 id="h-6-tetap-di-dalam-ruangan-saat-cuaca-terlalu-panas" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">6.&nbsp;<span style="font-weight: bolder;">Tetap di dalam ruangan saat cuaca terlalu panas</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu terpapar sinar matahari secara berlebihan, maka tubuh akan kehilangan kandungan air dan garam tubuh yang penting, seperti natrium dan kalium. Dalam kasus yang parah, ini dapat menyebabkan sengatan panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Tetaplah berada di dalam ruangan saat cuaca terlalu panas jika kebutuhan tidak mendesak dan hindari kopi, soda, teh berkafein, dan alkohol, karena minuman ini dapat menyebabkan dehidrasi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Itulah beberapa cara untuk mencegah terjadinya dehidrasi terutama saat cuaca panas. Dengan begitu aktivitas kamu dapat berjalan lancar meskipun di bawah cuaca panas.</p>',
        ]);

        Blog::factory()->create([
            'title' => 'Mencegah Dehidrasi Penting saat Alami Infeksi Astrovirus',
            'slug' => 'mencegah-dehidrasi-penting-saat-alami-infeksi-astrovirus',
            'body' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Berikut ini beberapa cara untuk mencegah dehidrasi terutama saat cuaca panas.</p><h3 id="h-1-minum-saat-merasa-haus" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">1.&nbsp;<span style="font-weight: bolder;">Minum saat merasa haus</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika tubuh sudah merasa kehausan segeralah untuk minum air putih. Untuk mengantisipasinya, bawalah botor air saat bepergian. Hal tersebut dapat mengatasi rasa haus yang menyerang, terutama ketika cuaca panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Cuaca yang panas juga merupakan tanda bahwa tubuh membutuhkan asupan cairan yang lebih. Kebutuhan air dapat menyesuaikan dengan massa tubuh dan seberapa banyak berkeringat.</p><h3 id="h-2-penuhi-kecukupan-air" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">2.&nbsp;<span style="font-weight: bolder;">Penuhi kecukupan air</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Optimalkan kecukupan cairan tubuh dengan rutin mengonsumsi air putih. Kecukupan kebutuhan air bergantung pada beberapa hal seperti usia, jenis kelamin dan tingkat usia. Umumnya, laki-laki memiliki kebutuhan cairan yang lebih tinggi daripada perempuan.</p><h3 id="h-3-konsumsi-buah-dan-sayuran-secara-rutin" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">3.&nbsp;<span style="font-weight: bolder;">Konsumsi buah dan sayuran secara rutin</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Dengan mengonsumsi beragam buah-buahan dan sayuran dapat membantu mencegah dehidrasi. Sayuran dan buah memiliki kandungan air yang tinggi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Di antaranya seperti melon, stroberi, dan semangka mengandung 90 hingga 99 persen air, sedangkan apel, anggur, jeruk, dan nanas mengandung antara 80 dan 89 persen air.</p><h3 id="h-4-minum-air-saat-bangun-tidur" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">4.&nbsp;<span style="font-weight: bolder;">Minum air saat bangun tidur</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Ketika bangun pagi, cobalah untuk rutin minum segelas air. Untuk membiasakannya, sebelum tidur malam sediakan segelas air disamping tempat tidur.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Selain itu, selalu cukupkan kebutuhan air setiap hari. Tak lupa, sesuaikan dengan tingkat aktivitas fisik yang kamu lakukan, ya!</p><h3 id="h-5-buat-rasa-air-lebih-enak" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">5.&nbsp;<span style="font-weight: bolder;">Buat rasa air lebih enak</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu tidak menyukai rasa hambar air, kamu dapat mencari alternatif lain, seperti dengan menambah perasaan lemon atau jeruk nipis kedalam&nbsp; botol minuman air, bisa juga dengan mengonsumsi jus sayur dan buah tanpa pemanis dan soda, serta dengan minum teh ginseng.</p><h3 id="h-6-tetap-di-dalam-ruangan-saat-cuaca-terlalu-panas" style="margin: 15px 0px; font-family: Inter; font-weight: 700; line-height: 1.1; font-size: 28px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(51, 51, 51);">6.&nbsp;<span style="font-weight: bolder;">Tetap di dalam ruangan saat cuaca terlalu panas</span></h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Jika kamu terpapar sinar matahari secara berlebihan, maka tubuh akan kehilangan kandungan air dan garam tubuh yang penting, seperti natrium dan kalium. Dalam kasus yang parah, ini dapat menyebabkan sengatan panas.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Tetaplah berada di dalam ruangan saat cuaca terlalu panas jika kebutuhan tidak mendesak dan hindari kopi, soda, teh berkafein, dan alkohol, karena minuman ini dapat menyebabkan dehidrasi.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; font-family: Inter; vertical-align: baseline; color: rgb(51, 51, 51);">Itulah beberapa cara untuk mencegah terjadinya dehidrasi terutama saat cuaca panas. Dengan begitu aktivitas kamu dapat berjalan lancar meskipun di bawah cuaca panas.</p>',
        ]);
    }
}
