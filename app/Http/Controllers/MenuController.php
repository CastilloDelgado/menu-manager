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
        $timestamp = date("Y-m-d-h-m-s");
        $menuTitle = 'Nuevo Menu ' . $timestamp;
        Menu::create([
            'name' => $menuTitle,
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
