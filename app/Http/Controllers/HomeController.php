<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Menu;
use App\Models\About;
use App\Models\ClientFeedback;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $burgerMenus = Menu::where('category', 'burger')->get();
        $pizzaMenus = Menu::where('category', 'pizza')->get();
        $pastasMenus = Menu::where('category', 'pasta')->get();
        $friesMenus = Menu::where('category', 'fries')->get();
        $abouts = About::all();
        $clientFeedbacks = ClientFeedback::all();
        return view('home', compact('banners', 'burgerMenus', 'pizzaMenus', 'pastasMenus', 'friesMenus', 'abouts', 'clientFeedbacks'));
    }
}
