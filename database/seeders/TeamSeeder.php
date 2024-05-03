<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'kind' => 1,
            'sclass_id' => 1,
            'name_e' => 'Manchester United',
            'found_date' => '1878-01-01',
            'capacity' => 74691,
            'flag' => 'manchester_united_flag.jpg',
            'address' => 'Sir Matt Busby Way, Old Trafford, Manchester, England',
            'url' => 'https://www.manutd.com/',
            'guest_polo_shirt' => 'manchester_united_guest_shirt.jpg',
            'home_polo_shirt' => 'manchester_united_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, England, that competes in the Premier League, the top flight of English football.',
            'area_en' => 'Manchester',
            'gymnasium_en' => 'Old Trafford Stadium',
            'venues_id' => 1,
            'conference' => 1,
            'is_national' => false,
        ]);

        Team::create([
            'kind' => 1,
            'sclass_id' => 2,
            'name_e' => 'Real Madrid',
            'found_date' => '1902-03-06',
            'capacity' => 81044,
            'flag' => 'real_madrid_flag.jpg',
            'address' => 'Av. de Concha Espina, 1, 28036 Madrid, Spain',
            'url' => 'https://www.realmadrid.com/',
            'guest_polo_shirt' => 'real_madrid_guest_shirt.jpg',
            'home_polo_shirt' => 'real_madrid_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Real Madrid Club de Fútbol, commonly referred to as Real Madrid, is a professional football club based in Madrid, Spain. Founded on 6 March 1902, Real Madrid is one of the most successful football clubs in the world.',
            'area_en' => 'Madrid',
            'gymnasium_en' => 'Santiago Bernabéu Stadium',
            'venues_id' => 2,
            'conference' => 1,
            'is_national' => false,
        ]);

        Team::create([
            'kind' => 1,
            'sclass_id' => 3,
            'name_e' => 'Bayern Munich',
            'found_date' => '1900-02-27',
            'capacity' => 75000,
            'flag' => 'bayern_munich_flag.jpg',
            'address' => 'Werner-Heisenberg-Allee 25, 80939 München, Germany',
            'url' => 'https://fcbayern.com/',
            'guest_polo_shirt' => 'bayern_munich_guest_shirt.jpg',
            'home_polo_shirt' => 'bayern_munich_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Fußball-Club Bayern München e.V., commonly known as FC Bayern München or Bayern Munich, is a professional sports club based in Munich, Bavaria, Germany. It is best known for its professional football team, which plays in the Bundesliga, the top tier of the German football league system.',
            'area_en' => 'Munich',
            'gymnasium_en' => 'Allianz Arena',
            'venues_id' => 3,
            'conference' => 1,
            'is_national' => false,
        ]);
    }
}
