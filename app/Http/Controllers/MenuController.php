<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $burgerMenus = Menu::where('category', 'burger')->get();
        $pizzaMenus = Menu::where('category', 'pizza')->get();
        $pastasMenus = Menu::where('category', 'pasta')->get();
        $friesMenus = Menu::where('category', 'fries')->get();
        return view('menu', compact('burgerMenus', 'pizzaMenus', 'pastasMenus', 'friesMenus'));
    }
}
