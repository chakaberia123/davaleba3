<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\youtube;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        youtube::create([
            "title"=> "Football is Too Easy for Khvicha Kvaratskhelia..", 
            "description"=> 'kvara is on fire',
            "channel name"=>'360edition',
            "link"=>'https://www.youtube.com/watch?v=07nSadgSQzw',
            "rate"=>10
        ]);
        youtube::create([
            "title"=> "Top 15 Best Game of Thrones Fighters | 2017)", 
            "description"=> 'game of thrones',
            "channel name"=>'Hydra OG',
            "link"=>'https://www.youtube.com/watch?v=KN3SPsdAcm4',
            "rate"=>10
        ]);
        youtube::create([
            "title"=> "GEORGIAN DANCES. THE EIGHTH WONDER OF THE WORLD", 
            "description"=> 'georgian dance',
            "channel name"=>'AVALISHVILI FILMS',
            "link"=>'https://www.youtube.com/watch?v=h64VT8sbJVw',
            "rate"=>10
        ]); 
        youtube::create([
            "title"=> "შუა ქალაქში - საახალწლო სერია; სეზონი 2 სერია 25", 
            "description"=> 'shua qalaqshi>>>',
            "channel name"=>'Filmebis didi Fani',
            "link"=>'https://www.youtube.com/watch?v=NHXhH_GnLD0',
            "rate"=>10
        ]);
        youtube::create([
            "title"=> "ჯვარის 1-ლი სკოლის ალესილი კეპები", 
            "description"=> 'jvari N1',
            "channel name"=>'lasar studio',
            "link"=>'https://www.youtube.com/watch?v=NG15tT7nobg&list=RDNG15tT7nobg&start_radio=1',
            "rate"=>10
        ]);
    }
}
