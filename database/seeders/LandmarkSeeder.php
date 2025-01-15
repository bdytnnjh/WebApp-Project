use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LandmarkSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('landmarks')->insert([
                'landmark_name' => $faker->word,
                'short_term_name' => strtoupper($faker->lexify('??')),
                'name' => $faker->sentence(3),
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
