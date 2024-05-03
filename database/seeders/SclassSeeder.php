<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Sclass;

class SclassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sclass::create([
            'color' => '#FF0000',
            'name_e' => 'Premier League',
            'name_es' => 'Premier League',
            'name_s' => 'EPL',
            'kind' => 1,
            'mode' => 1,
            'count_round' => 38,
            'curr_round' => 1,
            'curr_match_season' => '2024-2025',
            'sclass_pic' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/f/f2/Premier_League_Logo.svg/1200px-Premier_League_Logo.svg.png',
            'if_stop' => 0,
            'count_group' => 1,
            'bf_simply_disp' => 1,
            'sclass_sequence' => 1,
            'info_id' => 1,
            'bf_if_disp' => 1,
            'if_have_sub' => false,
            'if_sort' => false,
            'if_have_paper' => false,
            'if_show_score' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Sclass::create([
            'color' => '#0000FF',
            'name_e' => 'La Liga',
            'name_es' => 'La Liga',
            'name_s' => 'LL',
            'kind' => 1,
            'mode' => 1,
            'count_round' => 38,
            'curr_round' => 1,
            'curr_match_season' => '2024-2025',
            'sclass_pic' => 'https://anh.24h.com.vn//upload/3-2016/images/2016-08-30/1472523173-laliga.jpg',
            'if_stop' => 0,
            'count_group' => 1,
            'bf_simply_disp' => 1,
            'sclass_sequence' => 2,
            'info_id' => 1,
            'bf_if_disp' => 1,
            'if_have_sub' => false,
            'if_sort' => false,
            'if_have_paper' => false,
            'if_show_score' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Sclass::create([
            'color' => '#00FF00',
            'name_e' => 'Bundesliga',
            'name_es' => 'Bundesliga',
            'name_s' => 'BL',
            'kind' => 1,
            'mode' => 1,
            'count_round' => 34,
            'curr_round' => 1,
            'curr_match_season' => '2024-2025',
            'sclass_pic' => 'https://upload.wikimedia.org/wikipedia/vi/f/f9/Bundesliga_logo_%282017%29.png',
            'if_stop' => 0,
            'count_group' => 1,
            'bf_simply_disp' => 1,
            'sclass_sequence' => 3,
            'info_id' => 1,
            'bf_if_disp' => 1,
            'if_have_sub' => false,
            'if_sort' => false,
            'if_have_paper' => false,
            'if_show_score' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

