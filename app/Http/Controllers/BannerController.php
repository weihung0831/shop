<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Menu;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $burgerMenus = Menu::where('category', 'burger')->get();
        $pizzaMenus = Menu::where('category', 'pizza')->get();
        $pastasMenus = Menu::where('category', 'pasta')->get();
        $friesMenus = Menu::where('category', 'fries')->get();
        return view('home', compact('banners', 'burgerMenus', 'pizzaMenus', 'pastasMenus', 'friesMenus'));
    }
}
