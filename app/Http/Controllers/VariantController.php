<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VariantController extends Controller
{
    public function store(Request $request, string $itemId)
    {
        Variant::create([
            'name' => "Nueva variante",
            'item_id' => $itemId
        ]);
    }

    public function update(Request $request, string $id)
    {
        $variant = Variant::find($id);
        $variant->name = $request->name;
        $variant->price = $request->price;
        $variant->save();
    }

    public function delete(string $id)
    {
        Item::destroy($id);
    }
}
