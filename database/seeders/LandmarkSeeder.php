namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Landmark;

class LandmarkSeeder extends Seeder
{
    public function run()
    {
        Landmark::create([
            'name' => 'IIUM Dar al-Hikmah Library',
            'description' => 'The main library of UIAM.',
            'x_coordinate' => 100,
            'y_coordinate' => 200,
        ]);

        Landmark::create([
            'name' => 'Admin Building',
            'description' => 'The administrative building of UIAM.',
            'x_coordinate' => 100,
            'y_coordinate' => 200,
        ]);

        Landmark::create([
            'name' => 'Sultan Haji Ahamad Shah Mosque',
            'description' => 'Center for Islamization of UIAM.',
            'x_coordinate' => 100,
            'y_coordinate' => 200,
        ]);

        Landmark::create([
            'name' => 'IIUM Cultural Center',
            'description' => 'Citra and other Cultural society based building',
            'x_coordinate' => 100,
            'y_coordinate' => 200,
        ]);

        Landmark::create([
            'name' => 'IIUM Sejahtera Clinic',
            'description' => 'Clinic for IIUM Community',
            'x_coordinate' => 100,
            'y_coordinate' => 200,
        ]);

        Landmark::create([
            'name' => 'Main Auditorium IIUM',
            'description' => 'just an Auditorium',
            'x_coordinate' => 100,
            'y_coordinate' => 200,
        ]);


        Landmark::create([
            'name' => 'Saidina Hamzah Stadium',
            'description' => 'Main building of sport and recreational office',
            'x_coordinate' => 100,
            'y_coordinate' => 200,
        ]);
    }
}
