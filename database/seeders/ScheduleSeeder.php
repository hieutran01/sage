<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'sclass_id' => 1,
            'match_season' => '2024-2025',
            'round' => 3,
            'grouping1' => 'A',
            'home_team_id' => 1,
            'guest_team_id' => 2,
            'neutrality' => false,
            'match_time' => '2024-05-20 16:00:00',
            'match_state' => 1,
            'weather_icon' => 3,
            'temperature' => '28°C',
            'tv' => 'NBC',
            'umpire' => 'Michael Smith',
            'visitor' => false,
            'home_score' => 3,
            'guest_score' => 2,
            'home_half_score' => 2,
            'guest_half_score' => 1,
            'home_red' => 0,
            'guest_red' => 1,
            'home_yellow' => 2,
            'guest_yellow' => 3,
            'bf_changetime' => '2024-05-20 18:00:00',
            'shangpan' => 2,
            'grouping2' => 'C',
            'explain_en' => 'This is an example explanation.',
            'bf_show' => true,
            'sub_sclass_id' => 3,
            'explain_list' => 'List of explanations',
            'home_order_en' => 'Home Order',
            'guest_order_en' => 'Guest Order',
            'venues_id' => 1,
            'is_guess_red' => false,
            'is_live' => true,
            'home_corner' => 5,
            'home_corner_half' => 3,
            'guest_corner' => 4,
            'guest_corner_half' => 2,
        ]);

        Schedule::create([
            'sclass_id' => 2,
            'match_season' => '2024-2025',
            'round' => 1,
            'grouping1' => 'B',
            'home_team_id' => 2,
            'guest_team_id' => 3,
            'neutrality' => false,
            'match_time' => '2024-05-21 15:30:00',
            'match_state' => 0,
            'weather_icon' => 2,
            'temperature' => '25°C',
            'tv' => 'ABC',
            'umpire' => 'Jane Doe',
            'visitor' => true,
            'home_score' => 0,
            'guest_score' => 0,
            'home_half_score' => 0,
            'guest_half_score' => 0,
            'home_red' => 0,
            'guest_red' => 0,
            'home_yellow' => 0,
            'guest_yellow' => 0,
            'bf_changetime' => null,
            'shangpan' => null,
            'grouping2' => null,
            'explain_en' => null,
            'bf_show' => false,
            'sub_sclass_id' => null,
            'explain_list' => null,
            'home_order_en' => null,
            'guest_order_en' => null,
            'venues_id' => 2,
            'is_guess_red' => false,
            'is_live' => false,
            'home_corner' => null,
            'home_corner_half' => null,
            'guest_corner' => null,
            'guest_corner_half' => null,
        ]);

        Schedule::create([
            'sclass_id' => 3,
            'match_season' => '2024-2025',
            'round' => 2,
            'grouping1' => null,
            'home_team_id' => 3,
            'guest_team_id' => 4,
            'neutrality' => true,
            'match_time' => '2024-05-25 18:00:00',
            'match_time2' => '2024-05-25 19:30:00',
            'match_state' => 0,
            'weather_icon' => null,
            'temperature' => null,
            'tv' => null,
            'umpire' => null,
            'visitor' => true,
            'home_score' => 0,
            'guest_score' => 0,
            'home_half_score' => 0,
            'guest_half_score' => 0,
            'home_red' => 0,
            'guest_red' => 0,
            'home_yellow' => 0,
            'guest_yellow' => 0,
            'bf_changetime' => null,
            'shangpan' => null,
            'grouping2' => null,
            'explain_en' => null,
            'bf_show' => false,
            'sub_sclass_id' => null,
            'explain_list' => null,
            'home_order_en' => null,
            'guest_order_en' => null,
            'venues_id' => null,
            'is_guess_red' => false,
            'is_live' => false,
            'home_corner' => null,
            'home_corner_half' => null,
            'guest_corner' => null,
            'guest_corner_half' => null,
        ]);
        Schedule::create([
            'sclass_id' => 4,
            'match_season' => '2024-2025',
            'round' => 2,
            'grouping1' => 'A',
            'home_team_id' => 4,
            'guest_team_id' => 5,
            'neutrality' => false,
            'match_time' => '2024-05-23 17:00:00',
            'match_state' => 1,
            'weather_icon' => 3,
            'temperature' => '26°C',
            'tv' => 'Sky Sports',
            'umpire' => 'John Brown',
            'visitor' => false,
            'home_score' => 2,
            'guest_score' => 1,
            'home_half_score' => 1,
            'guest_half_score' => 0,
            'home_red' => 1,
            'guest_red' => 0,
            'home_yellow' => 3,
            'guest_yellow' => 2,
            'bf_changetime' => '2024-05-23 19:00:00',
            'shangpan' => 1,
            'grouping2' => 'B',
            'explain_en' => 'This is an example explanation.',
            'bf_show' => true,
            'sub_sclass_id' => 3,
            'explain_list' => 'List of explanations',
            'home_order_en' => 'Home Order',
            'guest_order_en' => 'Guest Order',
            'venues_id' => 1,
            'is_guess_red' => false,
            'is_live' => true,
            'home_corner' => 6,
            'home_corner_half' => 4,
            'guest_corner' => 3,
            'guest_corner_half' => 1,
        ]);
        
        Schedule::create([
            'sclass_id' => 5,
            'match_season' => '2024-2025',
            'round' => 2,
            'grouping1' => 'A',
            'home_team_id' => 5,
            'guest_team_id' => 6,
            'neutrality' => false,
            'match_time' => '2024-05-24 18:30:00',
            'match_state' => 0,
            'weather_icon' => 1,
            'temperature' => '22°C',
            'tv' => 'ESPN',
            'umpire' => 'David Wilson',
            'visitor' => false,
            'home_score' => 0,
            'guest_score' => 0,
            'home_half_score' => 0,
            'guest_half_score' => 0,
            'home_red' => 0,
            'guest_red' => 0,
            'home_yellow' => 0,
            'guest_yellow' => 0,
            'bf_changetime' => null,
            'shangpan' => null,
            'grouping2' => null,
            'explain_en' => null,
            'bf_show' => false,
            'sub_sclass_id' => null,
            'explain_list' => null,
            'home_order_en' => null,
            'guest_order_en' => null,
            'venues_id' => 2,
            'is_guess_red' => false,
            'is_live' => false,
            'home_corner' => null,
            'home_corner_half' => null,
            'guest_corner' => null,
            'guest_corner_half' => null,
        ]);
        
        Schedule::create([
            'sclass_id' => 6,
            'match_season' => '2024-2025',
            'round' => 3,
            'grouping1' => null,
            'home_team_id' => 6,
            'guest_team_id' => 7,
            'neutrality' => true,
            'match_time' => '2024-05-26 19:00:00',
            'match_time2' => '2024-05-26 20:30:00',
            'match_state' => 0,
            'weather_icon' => null,
            'temperature' => null,
            'tv' => null,
            'umpire' => null,
            'visitor' => true,
            'home_score' => 0,
            'guest_score' => 0,
            'home_half_score' => 0,
            'guest_half_score' => 0,
            'home_red' => 0,
            'guest_red' => 0,
            'home_yellow' => 0,
            'guest_yellow' => 0,
            'bf_changetime' => null,
            'shangpan' => null,
            'grouping2' => null,
            'explain_en' => null,
            'bf_show' => false,
            'sub_sclass_id' => null,
            'explain_list' => null,
            'home_order_en' => null,
            'guest_order_en' => null,
            'venues_id' => null,
            'is_guess_red' => false,
            'is_live' => false,
            'home_corner' => null,
            'home_corner_half' => null,
            'guest_corner' => null,
            'guest_corner_half' => null,
        ]);
        Schedule::create([
            'sclass_id' => 7,
            'match_season' => '2024-2025',
            'round' => 4,
            'grouping1' => 'B',
            'home_team_id' => 7,
            'guest_team_id' => 8,
            'neutrality' => false,
            'match_time' => '2024-05-27 20:00:00',
            'match_state' => 0,
            'weather_icon' => 2,
            'temperature' => '24°C',
            'tv' => 'BBC',
            'umpire' => 'Sarah Johnson',
            'visitor' => false,
            'home_score' => 0,
            'guest_score' => 0,
            'home_half_score' => 0,
            'guest_half_score' => 0,
            'home_red' => 0,
            'guest_red' => 0,
            'home_yellow' => 0,
            'guest_yellow' => 0,
            'bf_changetime' => null,
            'shangpan' => null,
            'grouping2' => null,
            'explain_en' => null,
            'bf_show' => false,
            'sub_sclass_id' => null,
            'explain_list' => null,
            'home_order_en' => null,
            'guest_order_en' => null,
            'venues_id' => 1,
            'is_guess_red' => false,
            'is_live' => false,
            'home_corner' => null,
            'home_corner_half' => null,
            'guest_corner' => null,
            'guest_corner_half' => null,
        ]);
        
        Schedule::create([
            'sclass_id' => 8,
            'match_season' => '2024-2025',
            'round' => 3,
            'grouping1' => null,
            'home_team_id' => 8,
            'guest_team_id' => 9,
            'neutrality' => true,
            'match_time' => '2024-05-28 18:00:00',
            'match_time2' => '2024-05-28 19:30:00',
            'match_state' => 1,
            'weather_icon' => 1,
            'temperature' => '22°C',
            'tv' => 'FOX',
            'umpire' => 'Chris Davis',
            'visitor' => true,
            'home_score' => 1,
            'guest_score' => 2,
            'home_half_score' => 0,
            'guest_half_score' => 2,
            'home_red' => 1,
            'guest_red' => 0,
            'home_yellow' => 3,
            'guest_yellow' => 1,
            'bf_changetime' => '2024-05-28 20:00:00',
            'shangpan' => 2,
            'grouping2' => 'C',
            'explain_en' => 'This is an example explanation.',
            'bf_show' => true,
            'sub_sclass_id' => 3,
            'explain_list' => 'List of explanations',
            'home_order_en' => 'Home Order',
            'guest_order_en' => 'Guest Order',
            'venues_id' => 2,
            'is_guess_red' => false,
            'is_live' => true,
            'home_corner' => 5,
            'home_corner_half' => 3,
            'guest_corner' => 4,
            'guest_corner_half' => 2,
        ]);
        
        Schedule::create([
            'sclass_id' => 9,
            'match_season' => '2024-2025',
            'round' => 4,
            'grouping1' => null,
            'home_team_id' => 9,
            'guest_team_id' => 10,
            'neutrality' => true,
            'match_time' => '2024-05-30 19:30:00',
            'match_time2' => '2024-05-30 21:00:00',
            'match_state' => 0,
            'weather_icon' => null,
            'temperature' => null,
            'tv' => null,
            'umpire' => null,
            'visitor' => true,
            'home_score' => 0,
            'guest_score' => 0,
            'home_half_score' => 0,
            'guest_half_score' => 0,
            'home_red' => 0,
            'guest_red' => 0,
            'home_yellow' => 0,
            'guest_yellow' => 0,
            'bf_changetime' => null,
            'shangpan' => null,
            'grouping2' => null,
            'explain_en' => null,
            'bf_show' => false,
            'sub_sclass_id' => null,
            'explain_list' => null,
            'home_order_en' => null,
            'guest_order_en' => null,
            'venues_id' => null,
            'is_guess_red' => false,
            'is_live' => false,
            'home_corner' => null,
            'home_corner_half' => null,
            'guest_corner' => null,
            'guest_corner_half' => null,
        ]);
        
        Schedule::create([
            'sclass_id' => 10,
            'match_season' => '2024-2025',
            'round' => 5,
            'grouping1' => 'A',
            'home_team_id' => 1,
            'guest_team_id' => 3,
            'neutrality' => false,
            'match_time' => '2024-06-01 21:00:00',
            'match_state' => 0,
            'weather_icon' => 1,
            'temperature' => '23°C',
            'tv' => 'CBS',
            'umpire' => 'Emily White',
            'visitor' => false,
            'home_score' => 0,
            'guest_score' => 0,
            'home_half_score' => 0,
            'guest_half_score' => 0,
            'home_red' => 0,
            'guest_red' => 0,
            'home_yellow' => 0,
            'guest_yellow' => 0,
            'bf_changetime' => null,
            'shangpan' => null,
            'grouping2' => null,
            'explain_en' => null,
            'bf_show' => false,
            'sub_sclass_id' => null,
            'explain_list' => null,
            'home_order_en' => null,
            'guest_order_en' => null,
            'venues_id' => 1,
            'is_guess_red' => false,
            'is_live' => false,
            'home_corner' => null,
            'home_corner_half' => null,
            'guest_corner' => null,
            'guest_corner_half' => null,
        ]);
        
    }
}
