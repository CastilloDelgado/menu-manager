<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SectionController extends Controller
{
    //
    public function store(Request $request, string $menuId)
    {
        Section::create([
            'name' => "Nueva sección",
            'menu_id' => $menuId
        ]);
    }

    public function delete($id){
        Section::destroy($id);
    }
}
