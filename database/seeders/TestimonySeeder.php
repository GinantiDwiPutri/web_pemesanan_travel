<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    public function run(): void
    {
        Testimony::factory()->create([
            'name' => 'Rico Pahlefi',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Nisl vel pretium lectus quam id leo. Leo vel orci porta non pulvinar. Lacus laoreet non curabitur gravida arcu ac tortor. Diam quam nulla porttitor massa id. Fringilla ut morbi tincidunt augue interdum velit. Proin sed libero enim sed faucibus. Sagittis vitae et leo duis ut diam quam nulla porttitor. Ac tincidunt vitae semper quis lectus. Sit amet tellus cras adipiscing.'
        ]);

        Testimony::factory()->create([
            'name' => 'Ginanti Dwi Putri',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Nisl vel pretium lectus quam id leo. Leo vel orci porta non pulvinar. Lacus laoreet non curabitur gravida arcu ac tortor. Diam quam nulla porttitor massa id. Fringilla ut morbi tincidunt augue interdum velit. Proin sed libero enim sed faucibus. Sagittis vitae et leo duis ut diam quam nulla porttitor. Ac tincidunt vitae semper quis lectus. Sit amet tellus cras adipiscing.'
        ]);

        Testimony::factory()->create([
            'name' => 'Angga Saputra',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ipsum faucibus vitae aliquet nec ullamcorper sit amet. Nisl vel pretium lectus quam id leo. Leo vel orci porta non pulvinar. Lacus laoreet non curabitur gravida arcu ac tortor. Diam quam nulla porttitor massa id. Fringilla ut morbi tincidunt augue interdum velit. Proin sed libero enim sed faucibus. Sagittis vitae et leo duis ut diam quam nulla porttitor. Ac tincidunt vitae semper quis lectus. Sit amet tellus cras adipiscing.'
        ]);
    }
}
