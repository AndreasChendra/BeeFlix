<?php

use Illuminate\Database\Seeder;
use App\movies;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $movieTitle = [
            "Start Up", "Angel's Last Mission", "Sparkle Love", "Love In Time",
            "Detective Conan", "No Game No Life", "Sword Art Online", "Kimetsu No Yaiba",
            "My Little Old Boy", "The Morning Show", "Snowpiercer", "Running Man"
        ];

        $moviePhoto = [
            "image/drama/start_up.jpg", "image/drama/angels_last_mission.jpg", "image/drama/sparkle_love.jpg", "image/drama/love_in_time.jpg",
            "image/kids/detective_conan.jpg", "image/kids/no_game_no_life.jpg", "image/kids/sword_art_online.jpg", "image/kids/kimetsu_no_yaiba.jpg",
            "image/tvshow/my_little_old_boy.jpg", "image/tvshow/the_morning_show.jpg", "image/tvshow/snowpiercer.jpeg", "image/tvshow/running_man.jpg"
        ];

        $movieDescription = [
            "Start-Up berlatar belakang di kawasan fiksi Korea Selatan Silicon Valley yang disebut Sandbox dan menceritakan kisah orang-orang di dunia perusahaan startup.",
            "Lee Yeon-seo (Shin Hye-sun) adalah balerina yang sangat berbakat dan sukses dengan Fantasia Ballet Company milik keluarganya, tetapi mengalami kecelakaan yang membuatnya buta.",
            "Mei Wei Wei (Ling Mei Shi) terlahir dengan frekuensi alami. Ketika ia sedang tidak memperhatikan, hanya dengan satu pandangan saja bisa membuat seorang pria seakan “tersengat aliran listrik” dan jatuh cinta padanya.",
            "Xu Jian'an (Cheng Xiaomeng) adalah seorang penulis tak dikenal yang keluarganya berada dalam kondisi sulit. Untuk meringankan situasinya, ia tidak mempunyai pilihan selain setuju untuk terikat pernikahan kontrak dengan Lu Boyan (Ren YanKai).",
            "Shinichi Kudo, seorang detektif SMA berusia 17 tahun yang biasanya membantu polisi memecahkan kasus, diserang oleh 2 anggota sindikat misterius ketika mengawasi sebuah pemerasan.",
            "No Game No Life adalah sebuah serial novel ringan Jepang yang ditulis dan diilustrasikan oleh Yū Kamiya. Sebuah adaptasi manga oleh Mashiro Hiiragi memulai serialisasi di majalah Monthly Comic Alive pada 27 Januari 2013. Sebuah serial anime yang diproduksi oleh Madhouse tayang sejak 9 April hingga 25 Juni 2014.",
            "Sword Art Online (ソードアート・オンライン Sōdo Āto Onrain) adalah seri novel ringan Jepang yang ditulis oleh Reki Kawahara dan diilustrasikan oleh ABEC. Serial ini berlangsung pada masa depan yang dekat dan berfokus pada berbagai dunia permainan virtual reality MMORPG . Sword Art Online mulai diterbitkan pada label ASCII Media Works Dengeki Bunko sejak 10 April 2009, dengan peluncuran seri spin-off di bulan Oktober 2012.",
            "Demon Slayer: Kimetsu no Yaiba: Mugen Train (bahasa Jepang: 鬼滅の刃 無限列車編, harfiah:'Film Pedang Penghancur Iblis: Kereta Iblis') adalah sebuah film animasi Jepang mendatang tahun 2020 bertema fantasi dan petualangan yang disutradarai oleh Haruo Sotozaki dan diproduksi oleh Ufotable.",
            "My Little Old Boy (alias Mom's Diary: My Ugly Duckling; Hangul: 미운 우리 새끼; RR: Miun Uri Saekki) adalah sebuah acara hiburan televisi Korea Selatan. Acara tersebut didistribusikan dan disindikasi oleh SBS setiap Minggu pukul 21:05 (KST).",
            "The Morning Show adalah serial televisi streaming drama Amerika yang dibintangi oleh Jennifer Aniston, Reese Witherspoon, dan Steve Carell, yang ditayangkan perdana di Apple TV + pada 1 November 2019. Serial ini terinspirasi oleh buku Brian Stelter, Top of the Morning: Inside the Cutthroat World of TV pagi.",
            "Snowpiercer adalah sebuah film cerita seru fiksi ilmiah Korea Selatan berbahasa Inggris 2013 yang berdasarkan pada novel grafis Prancis Le Transperceneige karya Jacques Lob, Benjamin Legrand dan Jean-Marc Rochette. Film tersebut disutradarai oleh Bong Joon-ho, dan ditulis oleh Bong dan Kelly Masterson.",
            "Running Man adalah sebuah acara varietas dari Korea Selatan. Pertama kali ditayangkan tanggal 11 Juli 2010 di SBS. Pembawa acara sekaligus pemainnya adalah Yoo Jae-suk. Acara ini menampilkan beberapa permainan yang dilakukan pertim, dapat 2 tim, 3 tim maupun 4 tim."
        ];

        $movieRating = [
            "5","4","5","3",
            "3","4","5","3",
            "5","3","5","3",
        ];

        $count = 0;
        for($i=0; $i<3; $i++) {
            for($j=0; $j<4; $j++) {
                $movie = new movies;
                $movie->fill(["genre_id"=>$i+1, "title"=>$movieTitle[$count], "photo"=>$moviePhoto[$count], "description"=>$movieDescription[$count], "rating"=>$movieRating[$count]]);
                $movie->save();
                $count = $count+1;
            }
        }
        
    }
}
