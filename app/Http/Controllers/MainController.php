<?php

namespace App\Http\Controllers;

use App\Models\Drugstore;
use App\Models\Mission;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MainController extends Controller
{
  public function home()
  {
    $services = Service::take(4)->get();
    $partners = Partner::take(4)->get();
    $drugstores = Drugstore::all()->toArray();

    return view('pages.home', compact('services', 'partners', 'drugstores'));
  }

  public function about()
  {
    $missions = Mission::all();
    $values = Value::all();

    return view('pages.about', compact('missions', 'values'));
  }

  public function services()
  {
    $services = Service::all();

    return view('pages.services', compact('services'));
  }
}
