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
            'flag' => 'https://upload.wikimedia.org/wikipedia/vi/a/a1/Man_Utd_FC_.svg',
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
            'flag' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/c/c7/Logo_Real_Madrid.svg/1200px-Logo_Real_Madrid.svg.png',
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
            'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Logo_FC_Bayern_M%C3%BCnchen_%282002%E2%80%932017%29.svg/1024px-Logo_FC_Bayern_M%C3%BCnchen_%282002%E2%80%932017%29.svg.png',
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
        Team::create([
            'kind' => 1,
            'sclass_id' => 1,
            'name_e' => 'Liverpool',
            'found_date' => '1892-03-15',
            'capacity' => 53394,
            'flag' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png',
            'address' => 'Anfield Rd, Liverpool L4 0TH, United Kingdom',
            'url' => 'https://www.liverpoolfc.com/',
            'guest_polo_shirt' => 'liverpool_guest_shirt.jpg',
            'home_polo_shirt' => 'liverpool_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Liverpool Football Club is a professional football club in Liverpool, England, that competes in the Premier League, the top tier of English football.',
            'area_en' => 'Liverpool',
            'gymnasium_en' => 'Anfield Stadium',
            'venues_id' => 1,
            'conference' => 1,
            'is_national' => false,
        ]);
        
        Team::create([
            'kind' => 1,
            'sclass_id' => 1,
            'name_e' => 'Manchester City',
            'found_date' => '1880-04-23',
            'capacity' => 55097,
            'flag' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/1/1d/Manchester_City_FC_logo.svg/2048px-Manchester_City_FC_logo.svg.png',
            'address' => 'Etihad Stadium, Ashton New Rd, Manchester M11 3FF, United Kingdom',
            'url' => 'https://www.mancity.com/',
            'guest_polo_shirt' => 'manchester_city_guest_shirt.jpg',
            'home_polo_shirt' => 'manchester_city_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Manchester City Football Club is an English football club based in Manchester, that competes in the Premier League, the top flight of English football.',
            'area_en' => 'Manchester',
            'gymnasium_en' => 'Etihad Stadium',
            'venues_id' => 1,
            'conference' => 1,
            'is_national' => false,
        ]);
        
        Team::create([
            'kind' => 1,
            'sclass_id' => 1,
            'name_e' => 'Chelsea',
            'found_date' => '1905-03-10',
            'capacity' => 40834,
            'flag' => 'https://upload.wikimedia.org/wikipedia/en/c/cc/Chelsea_FC.svg',
            'address' => 'Fulham Rd, Fulham, London SW6 1HS, United Kingdom',
            'url' => 'https://www.chelseafc.com/',
            'guest_polo_shirt' => 'chelsea_guest_shirt.jpg',
            'home_polo_shirt' => 'chelsea_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Chelsea Football Club is a professional football club based in London, England, that competes in the Premier League, the top tier of English football.',
            'area_en' => 'London',
            'gymnasium_en' => 'Stamford Bridge',
            'venues_id' => 1,
            'conference' => 1,
            'is_national' => false,
        ]);
        
        Team::create([
            'kind' => 1,
            'sclass_id' => 2,
            'name_e' => 'Barcelona',
            'found_date' => '1899-11-29',
            'capacity' => 99354,
            'flag' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/9/91/FC_Barcelona_logo.svg/1200px-FC_Barcelona_logo.svg.png',
            'address' => 'Carrer d\'Aristides Maillol, 12, 08028 Barcelona, Spain',
            'url' => 'https://www.fcbarcelona.com/',
            'guest_polo_shirt' => 'barcelona_guest_shirt.jpg',
            'home_polo_shirt' => 'barcelona_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Futbol Club Barcelona, commonly referred to as Barcelona and colloquially known as Barça, is a professional football club based in Barcelona, Catalonia, Spain.',
            'area_en' => 'Barcelona',
            'gymnasium_en' => 'Camp Nou',
            'venues_id' => 2,
            'conference' => 1,
            'is_national' => false,
        ]);
        
        Team::create([
            'kind' => 1,
            'sclass_id' => 2,
            'name_e' => 'Atletico Madrid',
            'found_date' => '1903-04-26',
            'capacity' => 68456,
            'flag' => 'https://upload.wikimedia.org/wikipedia/vi/thumb/f/f4/Atletico_Madrid_2017_logo.svg/1200px-Atletico_Madrid_2017_logo.svg.png',
            'address' => 'Paseo Virgen del Puerto, 67, 28005 Madrid, Spain',
            'url' => 'https://www.atleticodemadrid.com/',
            'guest_polo_shirt' => 'atletico_madrid_guest_shirt.jpg',
            'home_polo_shirt' => 'atletico_madrid_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Club Atlético de Madrid, commonly referred to as Atlético Madrid, is a professional football club based in Madrid, Spain, that competes in La Liga, the top flight of Spanish football.',
            'area_en' => 'Madrid',
            'gymnasium_en' => 'Wanda Metropolitano',
            'venues_id' => 2,
            'conference' => 1,
            'is_national' => false,
        ]);
        
        Team::create([
            'kind' => 1,
            'sclass_id' => 3,
            'name_e' => 'Borussia Dortmund',
            'found_date' => '1909-12-19',
            'capacity' => 81365,
            'flag' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Borussia_Dortmund_logo.svg/1024px-Borussia_Dortmund_logo.svg.png',
            'address' => 'Rheinlanddamm 207-209, 44137 Dortmund, Germany',
            'url' => 'https://www.bvb.de/',
            'guest_polo_shirt' => 'borussia_dortmund_guest_shirt.jpg',
            'home_polo_shirt' => 'borussia_dortmund_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'Ballspielverein Borussia 09 e.V. Dortmund, commonly known as Borussia Dortmund, BVB, or simply Dortmund, is a German professional sports club based in Dortmund, North Rhine-Westphalia. It is best known for its men\'s professional football team, which plays in the Bundesliga, the top tier of the German football league system.',
            'area_en' => 'Dortmund',
            'gymnasium_en' => 'Signal Iduna Park',
            'venues_id' => 3,
            'conference' => 1,
            'is_national' => false,
        ]);
        
        Team::create([
            'kind' => 1,
            'sclass_id' => 3,
            'name_e' => 'RB Leipzig',
            'found_date' => '2009-05-19',
            'capacity' => 42959,
            'flag' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/04/RB_Leipzig_2014_logo.svg/1200px-RB_Leipzig_2014_logo.svg.png',
            'address' => 'Neumarkt 29-33, 04109 Leipzig, Germany',
            'url' => 'https://www.dierotenbullen.com/',
            'guest_polo_shirt' => 'rb_leipzig_guest_shirt.jpg',
            'home_polo_shirt' => 'rb_leipzig_home_shirt.jpg',
            'modify_time' => now(),
            'introduce_en' => 'RasenBallsport Leipzig e.V., commonly known as RB Leipzig, is a professional football club based in Leipzig, Saxony, Germany. The club was founded in 2009 by the initiative of the company Red Bull GmbH, which purchased the playing rights of a fifth-tier side SSV Markranstädt with the intent of advancing the new club to the top-flight Bundesliga within eight years.',
            'area_en' => 'Leipzig',
            'gymnasium_en' => 'Red Bull Arena',
            'venues_id' => 3,
            'conference' => 1,
            'is_national' => false,
        ]);
        
    }
}
