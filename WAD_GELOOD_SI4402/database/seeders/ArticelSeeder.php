<?php

namespace Database\Seeders;

use App\Models\Articel;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ArticelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articel::create([
            'id_articel' => Uuid::uuid4()->toString() . "\n",
            'name_articel' => 'Manfaat Rutin Donor Darah',
            'desc_articel' => 'Tahukah Anda bahwa setiap 8 detik, ada satu orang yang membutuhkan transfusi darah di Indonesia dan setiap menitnya, ada 10 orang sekarang menanti donasi donor darah? Menurut Badan Kesehatan Dunia (WHO) tahun 2015, Indonesia kekurangan jumlah produksi darah secara nasional, yaitu sekitar 500 ribu kantong tiap tahunnya. Bisa jadi kesadaran masyarakat untuk menjadi pendonor sukarela masih rendah. Padahal, banyak sekali manfaat rutin donor darah bagi kesehatan pendonornya.
            Mental Health Foundation menyebut, donor darah dapat mengurangi stres, meningkatkan persepsi terhadap keadaan emosional yang meliputi kepuasan hidup dan kebahagiaan hidup (emotional well-being), baik untuk kesehatan tubuh, membantu menyingkirkan perasaan negatif, menciptakan rasa saling memiliki dan mengurangi perasaan kesepian (isolation).',
        ]);

        Article::create([
            'id_articel' => Uuid::uuid4()->toString() . "\n",
            'name_articel' => 'Membantu Orang Lain Sehat, Diri Kita Menjadi Sehat',
            'desc_articel' => 'Mengawali rangkaian kegiatan Peringatan Hari Ulang Tahun Pertambangan Dan Energi (HUT PE) ke-77, Kementerian Energi Dan Sumber Daya Mineral bekerja sama dengan PMI Provinsi DKI melaksanakan kegiatan bakti sosial donor darah. Ditargetkan akan terkumpul sebanyak 200 kantong dari kegiatan donor darah kali ini.

            "Berkaitan dengan HUT PE, Kementerian ESDM melaksanakan kegiatan donor darah. Kita mentargetkan yang ikut berpartisipasi dalam kegiatan donor darah kali ini akan terkumpul sebanyak 200 kantong darah, dan yang sudah mendaftar via google form itu 147 orang dan sisanya on site,"kata Reni Febriana penanggung jawab acara Kegiatan Acara Donor Darah HUT PE 2022. Rabu (21/9).
            
            Reni menambahkan, untuk mendapatkan target 200 kantong darah terkadang diperlukan pendonor melebih target kantong darah karena beberapa pendonor yang mendaftar belum tentu dapat mendonorkan darahnya karena berbagai alasan.',
        ]);

        Article::create([
            'id_articel' => Uuid::uuid4()->toString() . "\n",
            'name_articel' => 'Hari Bakti PU ke-74',
            'desc_articel' => 'Kegiatan donor darah yang difasilitasi oleh PMI Daerah Sulawesi Tengah ini, sering kali menjadi salah satu kegiatan rutin yang ditambahkan ke dalam rangkaian acara-acara besar Balai Wilayah Sungai Sulawesi III Palu. Sebab, seperti yang diketahui oleh Sobat Balai, bahwa Donor Darah tidak hanya sebagai kegiatan amal tetapi juga sangat bermanfaat bagi kesehatan tubuh. 

            Donor darah merupakan upaya seseorang dalam memberikan sejumlah darahnya yang ditranfusikan kepada orang lain. Sayangnya, banyak orang takut donor darah dengan beragam alasan. Mulai dari takut jarum suntik hingga takut darahnya habis. Padahal, manfaat donor darah bagi pendonor banyak banget lho. Malahan setelah donor darah, tubuh jadi lebih fit karena produksi darah diperbaharui. Selain itu, tekanan darah jadi lebih stabil. Keuntungan juga bisa didapat bagi mereka yang kelebihan sel darah merah. Karena dengan donor darah, tubuh jadi menyeimbangkan dengan kebutuhan.',
        ]);
    }
}
