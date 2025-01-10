use App\Models\Landmark;

public function run()
{
    Landmark::create([
        'name' => 'IIUM Dar al-Hikmah Library',
        'description' => 'The main library of UIAM.',
        'latitude' => 3.1588,
        'longitude' => 101.7035,
    ]);

    Landmark::create([
        'name' => 'Admin Building',
        'description' => 'The administrative building of UIAM.',
        'latitude' => 3.1598,
        'longitude' => 101.7045,
    ]);

    Landmark::create([
        'name' => 'Sultan Haji Ahamad Shah Mosque',
        'description' => 'Center for Islamization of UIAM.',
        'latitude' => 3.1598,
        'longitude' => 101.7045,
    ]);

    Landmark::create([
        'name' => 'IIUM Cultural Center',
        'description' => 'Citra and other Cultural society based building',
        'latitude' => 3.1598,
        'longitude' => 101.7045,
    ]);

    Landmark::create([
        'name' => 'IIUM Sejahtera Clinic',
        'description' => 'Clinic for IIUM Community',
        'latitude' => 3.1598,
        'longitude' => 101.7045,
    ]);
}
