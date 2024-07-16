<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Menu;
use App\Models\Variant;
use App\Models\Item;
use App\Models\Section;
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

        $menu = Menu::create([
            'name' => 'Actual',
            'description' => 'Menu de Julio 2024',
            'active' => true,
        ]);

        $s1 = Section::create([
            'name' => 'Entradas',
            'description' => '',
            'active' => true,
            'menu_id' => $menu->id,
        ]);

        $s2 = Section::create([
            'name' => 'Aguachiles',
            'description' => '',
            'active' => true,
            'menu_id' => $menu->id,
        ]);

        $s3 = Section::create([
            'name' => 'Cerveza',
            'description' => '',
            'active' => true,
            'menu_id' => $menu->id,
        ]);


        Item::create([
            'name' => 'Papas carajas',
            'description' => 'Papitas cambray salteadas y guisadas acompañadas de salsa picosita.',
            'price' => 70.00,
            'section_id' => $s1->id,
        ]);
        Item::create([
            'name' => 'Guacamole',
            'description' => 'Con jitomate, cebolla y cilantro picaditos, servido con totopos.',
            'price' => 95.00,
            'section_id' => $s1->id,
        ]);
        $item1 = Item::create([
            'name' => 'Tostadita',
            'description' => 'Servida con cebolla morada, aguacate y salsitas negras',
            'price' => 70.00,
            'section_id' => $s1->id,
        ]);
        Variant::create([
            'name' => 'Atún fresco',
            'price' => 65.00,
            'item_id' => $item1->id,
        ]);
        Variant::create([
            'name' => 'Camarón cocido',
            'price' => 55.00,
            'item_id' => $item1->id,
        ]);
        Variant::create([
            'name' => 'Ceviche',
            'price' => 45.00,
            'item_id' => $item1->id,
        ]);

        $item2 = Item::create([
            'name' => 'El chévere',
            'description' => 'Explosión de frutas tropicalonas (fresa, mango y piña) con chilito de árbol, dulzón, picosito y delicioso.',
            'price' => 70.00,
            'section_id' => $s2->id,
        ]);
        Variant::create([
            'name' => 'Grande',
            'price' => 180.00,
            'item_id' => $item2->id,
        ]);
        Variant::create([
            'name' => 'Chico',
            'price' => 120.00,
            'item_id' => $item2->id,
        ]);
        $item3 = Item::create([
            'name' => 'El chévere',
            'description' => 'Explosión de frutas tropicalonas (fresa, mango y piña) con chilito de árbol, dulzón, picosito y delicioso.',
            'price' => 70.00,
            'section_id' => $s2->id,
        ]);
        Variant::create([
            'name' => 'Grande',
            'price' => 180.00,
            'item_id' => $item3->id,
        ]);
        Variant::create([
            'name' => 'Chico',
            'price' => 120.00,
            'item_id' => $item3->id,
        ]);
        $item4 = Item::create([
            'name' => 'El toreado',
            'description' => 'Tomate verde y mezcla de chiles toreados al comal, muy chido',
            'price' => 70.00,
            'section_id' => $s2->id,
        ]);
        Variant::create([
            'name' => 'Grande',
            'price' => 165.00,
            'item_id' => $item4->id,
        ]);
        Variant::create([
            'name' => 'Chico',
            'price' => 105.00,
            'item_id' => $item4->id,
        ]);
        Item::create([
            'name' => 'Corona',
            'description' => '',
            'price' => 35.00,
            'section_id' => $s3->id,
        ]);
        Item::create([
            'name' => 'Pacífico',
            'description' => '',
            'price' => 35.00,
            'section_id' => $s3->id,
        ]);
        Item::create([
            'name' => 'Strongbow',
            'description' => '',
            'price' => 40.00,
            'section_id' => $s3->id,
        ]);
    }
}
