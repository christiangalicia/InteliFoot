<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use  App\Models\Slider;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\Contact;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory(30)->create();
        Slider::factory(5)->create();
       $catalogos= Catalog::factory(5)->create();
         foreach($catalogos as $catalogo){
              Product::factory(rand(0, 40))->create([
                'catalog_id' => $catalogo->id
              ]);
         }
      

         Contact::factory()->create([
          'telefono' => '2384956678',
          'correo' => 'contacto@IntelliFoot.com',
          'facebook' => 'https://www.facebook.com/IntelliFoot',
          'instagram' => 'https://www.instagram.com/IntelliFoot',
          'x' => 'https://x.com/IntelliFoot',
      ]);



    }
}
