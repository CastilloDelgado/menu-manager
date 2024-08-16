<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MenuController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin', [
            'menus' => Menu::all()
        ]);
    }

    public function store()
    {
        Menu::create([
            'name' => "Nuevo menu",
            'description' => '',
            'active' => false
        ]);
    }

    public function delete($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
    }
}
