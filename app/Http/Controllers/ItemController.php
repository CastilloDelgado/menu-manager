<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ItemController extends Controller
{
    public function store(Request $request, string $section_id)
    {
        Item::create([
            'name' => "Nueva Item",
            'section_id' => $section_id
        ]);
    }

    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->save();
    }

    public function delete(string $id)
    {
        Item::destroy($id);
    }
}
