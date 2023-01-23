<?php

namespace App\Http\Controllers;

use App\Models\Drugstore;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function home()
  {
    $services = Service::take(4)->get();
    $partners = Partner::take(4)->get();
    $drugstores = Drugstore::all()->toArray();

    return view('pages.home', compact('services', 'partners', 'drugstores'));
  }
}
