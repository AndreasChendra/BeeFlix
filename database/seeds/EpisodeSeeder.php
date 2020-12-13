<?php

use Illuminate\Database\Seeder;
use App\episodes;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $episodeNumber = [
            "1", "2", "3", "4", "5", "6", "7", "8", "9"
        ];

        $episodeTitle = [
            "Kisahkan Kehidupan Seo Dal Mi & Won In Jae di Dunia Bisnis", "Pertemuan Seo Dal Mi dengan Nam Do Hyun", "Nam Do San dan Han Ji Pyeong yang Berbohong soal Cinta Pertama Mereka", "Kebohongan Berlanjut", "Dal Mi Jadi CEO?", "Bae Suzy hingga Nam Joo Hyuk Hadapi Tantangan Baru", "Do San Ingin Jujur pada Dal Mi", "Nam Do San Dituntut?", "Suzy, Nam Joo Hyuk, dan Kim Seon Ho Menghadapi Kenyataan",
            "Lee Yeon Seo Si Ballerina yang Buta", "Malaikat Kim Dan Menyelamatkan Yeon Seo", "Malaikat Dan Berubah Menjadi Manusia", "Kim Dan Kembali Menyelamatkan Lee Yeon Seo", "Ji Kang Woo Merasa Curiga Atas Kehadiran Kim Dan", "Kim Dan Mengetahui Keluarga Yeon Seo Sebenarnya", "Kim Dan Mengakui Perasaannya", "Kim Dan Meninggalkan Yeon Seo", "Yeon Seo Merindukan Kim Dan",
            "Assistant Manager Park's Private Life", "Chief B and the Love Letter", "History of Walking Upright", "The Picnic Day", "Today I Grab the Tambourine Again", "Anthology", "Not Played", "Our Place's Tasty Soybean Paste", "Fighter Choi Kang-soon",
            "The Woman Who Makes the Last Meal", "Withdrawal Person", "Water Scale", "Winter Is Coming", "The Wolf and the Lion", "You Win or You Die", "The North Remembers", "What Is Dead May Never Die", "The Old Gods and the New",
            "Detektif Paling Terkenal Abad Ini", "Detektif Terkenal yang Menciut", "Berhati-hatilah Terhadap Idola", "Kodenya Adalah Ikan yang Bersinar", "Ledakan Besar di Kereta Cepat", "Kasus Pembunuhan Valentine", "Kasus Ancaman Hadiah Sebulan Sekali", "Kasus Pembunuhan di Museum Seni", "Kasus Pembunuhan di Festival",
            "Beginner", "Challenger", "Expert", "Grandmaster", "Weak Square", "Interesting", "Sacrifice", "Fake End", "Sky Walk",
            "Underworld", "The Demon Tree", "The End Mountains", "Departure", "Ocean Turtle", "Project Alicization", "Swordcraft Academy", "Swordsman's Pride ", "Nobleman's Responsibilities",
            "Cruelty", "Trainer Sakonji Urokodaki", "Sabito and Makomo", "Final Selection", "My Own Steel", "Swordsman Accompanying a Demon", "Muzan Kibutsuji", "The Smell of Enchanting Blood", "Temari Demon and Arrow Demon",
            "New Sons Kim Gun-mo, Kim Je-dong, Heo Ji-woong appearance", "MC Shin Dong-yup, Seo Jang-hoon, Han Hye-jin appearance", "New Son Park Soo-hong appearance", "Kim Je-dong get off", "New Son Tony Ahn appearance", "Special host: Ahn Jae-wook, New Son Lee Sang-min appearance", "Special host: Park Myeong-su", "Special hosts: Kim Hee-sun, Kim Jong-kook", "New son Kim Jong-kook appearance",
            "The Morning Show Series-Premiere Recap: And We’re Live", "The Morning Show Recap: Co-Anchor Approval", "The Morning Show Recap: Timeless American Entertainment", "The Morning Show Recap: What Doesn't Kill You", "The Morning Show Recap: Let's Duet", "The Morning Show Recap: Natural Disaster", "The Morning Show Recap: Ambush Predators", "The Morning Show Recap: This Is How It Happens", "The Morning Show Recap: Mutiny, Ho!",
            "First, the Weather Changed", "Prepare to Brace", "Access Is Power", "Without Their Maker", "Justice Never Boarded", "Trouble Comes Sideways", "The Universe Is Indifferent", "These Are His Revolutions", "The Train Demanded Blood",
            "Temukan Kode Rahasia", "Mencari Celengan Uang Babi Emas", "Mengumpulkan Running Balls", "Secara individual dapatkan Running Balls", "Mengumpulkan Running Balls", "Dapatkan the Running Balls", "Kalahkan anggota lain", "Kumpulkan banyak uang", "Temukan pencurinya"
        ];

        $count=0;
        for($i=0; $i<12; $i++) {
            for($j=0; $j<9; $j++) {
                $episode = new episodes;
                $episode->fill(["movie_id"=>$i+1, "episode"=>$episodeNumber[$j], "title"=>$episodeTitle[$count]]);
                $count = $count+1;
                $episode->save();
            }
        }
    }
}
