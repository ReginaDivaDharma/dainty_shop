<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'ESQA Face The Goddess Cheek Pallete',
            'category_id' => 1,
            'detail' => 'Esqa The Goddess Cheek Palette merupakan palet yang berisikan blush, highlighter juga bronzer dalam satu kemasan yang cantik. Shade yang menawan mempuunyai coverage yang natural glowing juga dapat di tambahkan pigmentasinya jika ingin tampilan yang lebih bold.',
            'image' => 'makeup-1.jpg',
            'price' => 150000
        ]);

        DB::table('products')->insert([
            'name' => 'Maybelline Fit Me Loose Powder',
            'category_id' => 1,
            'detail' => 'Maybelline Fit Me! Loose Finishing Powder diklaim dapat meratakan warna kulit, sehingga hasil akhir atau finishing-nya terlihat lebih natural, kulit tampak tidak berpori, lebih tahan lama, dan bebas kilap hingga 12 jam.',
            'image' => 'makeup-2.jpg',
            'price' => 150000
        ]);

        DB::table('products')->insert([
            'name' => 'BENEFIT Precisely My Brow Pencil Mini',
            'category_id' => 1,
            'detail' => 'Eyebrow pencil yang sangat halus mampu membentuk alis dengan tampilan yang alami, goresannya yang menyerupai rambut asli dari bulu mata mampu bertahan hingga 13 jam. Goresan tipisnya mampu membentuk dan mempertegas tampilan alis.',
            'image' => 'makeup-3.jpg',
            'price' => 150000
        ]);

        DB::table('products')->insert([
            'name' => 'BARENBLISS Peach Makes Perfect Lip Tint',
            'category_id' => 1,
            'detail' => 'Lip tint beraroma buah persik berteksur gel ringan yang melapisi bibir dengan 6 kandungan kebaikan alami untuk tampilan bibir yang segar dan lembap.',
            'image' => 'makeup-4.png',
            'price' => 138000
        ]);

        DB::table('products')->insert([
            'name' => 'ESQA Daily Glow',
            'category_id' => 1,
            'detail' => 'A long-wearing powder foundation that gives you a flawless and smooth skin with matte finish! It has medium to full buildable coverage that will control your shine throughout the day and a blush that perfects your makeup. ',
            'image' => 'makeup-5.png',
            'price' => 175000
        ]);

        DB::table('products')->insert([
            'name' => 'AVOSKIN YSB Glow Concentrate Treatment',
            'category_id' => 2,
            'detail' => 'Your Skin Bae Glow merupakan moisturizer water based yang hadir dengan tekstur gel ringan dan mudah menyerap. Selain menjaga kelembapan kulit wajah, moisturizer yang memiliki perpaduan kandungan utama Aqua Ceramide, Multi Probiome, dan Hyaluronic Acid ini efektif untuk mengatasi kulit kering dan dehidrasi. ',
            'image' => 'skincare-1.png',
            'price' => 71000
        ]);

        DB::table('products')->insert([
            'name' => 'COSRX the niacinamide 15 serum',
            'category_id' => 2,
            'detail' => 'Serum wajah konsentrasi tinggi yang mengandung Niacinamide sebesar 15% % sebagai perawatan untuk mengontrol jerawat pada kulit.',
            'image' => 'skincare-2.png',
            'price' => 4899000
        ]);

        DB::table('products')->insert([
            'name' => 'Derma Angel Acne Patch Night',
            'category_id' => 2,
            'detail' => 'Acne Patch yang dapat membantu menyembuhkan jerawat dalam waktu 12 jam dan menyembunyikan jerawat supaya terhindar dari bakteri atau paparan polusi yang bisa memperparah kondisi jerawat.',
            'image' => 'skincare-3.png',
            'price' => 1139000
        ]);

        DB::table('products')->insert([
            'name' => 'Senka Perfect White Clay',
            'category_id' => 2,
            'detail' => 'Perfect White Clay memberikan tampilan kulit wajah yang lebih cerah dan lembut. Memancarkan pesona Suppin Look atau tampilan kulit yang cantik alami tanpa makeup!',
            'image' => 'skincare-4.png',
            'price' => 2919000
        ]);

        DB::table('products')->insert([
            'name' => 'SKINTIFIC 5X Ceramie Barrier Moisture Gel',
            'category_id' => 2,
            'detail' => 'Moisturizer ini menggunakan 5 tipe Ceramide yang memiliki fungsi berbeda untuk menjaga kesehatan kulit (Ceramide NP, Ceramide AP, Ceramide NS, Ceramide AS, Ceramide EOP)',
            'image' => 'skincare-5.png',
            'price' => 589000
        ]);


        DB::table('products')->insert([
            'name' => 'Creme and Tonic Body Wash',
            'category_id' => 3,
            'detail' => 'Sabun mandi berbahan dasar AHA dari buah-buahan dan brown algae (Giant Sea Kelp) extract, dengan formulasi tanpa sulfate yang efektif membersihkan tubuh dengan aroma minty yang membuat relax',
            'image' => 'bodycare-1.png',
            'price' => 599900
        ]);

        DB::table('products')->insert([
            'name' => 'DR SOAP Shower Gel',
            'category_id' => 3,
            'detail' => 'Shower Gel ini dikembangkan dengan ekstra surfaktan ringan dan ekstrak alami Daun Mulberry & Pohon Kihada yang berasal dari Jepang.',
            'image' => 'bodycare-2.png',
            'price' => 599900
        ]);

        DB::table('products')->insert([
            'name' => 'Lavojoy Body Wash',
            'category_id' => 3,
            'detail' => 'LVJ lavojoy Sparkling Daydream Body Wash Dancing In The Mist merupakan sabun badan yang memberikan efek menghaluskan dan membantu mencerahkan kulit',
            'image' => 'bodycare-3.png',
            'price' => 199900
        ]);

        DB::table('products')->insert([
            'name' => 'VASELINE Healthy Bright Body Lotion Perfect 10',
            'category_id' => 3,
            'detail' => 'Teknologi khusus Vaseline® Healthy White™ menawarkan pencerah dan pelembab kulit terdepan agar kulit tampak sehat, bercahaya, dan lebih cerah.',
            'image' => 'bodycare-4.png',
            'price' => 599900
        ]);

        DB::table('products')->insert([
            'name' => 'BARENBLISS Into Glow! Mon Paris Brightening Body Serum',
            'category_id' => 3,
            'detail' => 'Body serum beraroma buah dan bunga yang diperkaya dengan Niacinamide,  Tangerine Extract, dan 8D Hyaluronic yang membantu mencerahkan kulit dan membuat kulit lembap dan segar.',
            'image' => 'bodycare-5.png',
            'price' => 599900
        ]);
    }
}
