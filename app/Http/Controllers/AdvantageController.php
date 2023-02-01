<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdvantageController extends Controller
{
  const IMAGE_PATH = 'img/advantages';

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function dashboardIndex(Request $request)
  {
    // Default parameters for ordering
    $orderBy = $request->orderBy ? $request->orderBy : 'title';
    $orderType = $request->orderType ? $request->orderType : 'asc';
    $activePage = $request->page ? $request->page : 1;

    // for search and counter
    $totalItems = Advantage::select('id', 'title')
      ->orderBy('title')
      ->get();

    // display as list in table
    $items = Advantage::orderBy($orderBy, $orderType)
      ->paginate(25, ['*'], 'page', $activePage)
      ->appends($request->except('page'));

    return view('dashboard.advantages.index', compact('totalItems', 'items', 'orderBy', 'orderType', 'activePage'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard.advantages.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $item = new Advantage();
    $fields = ['body'];
    fillModelColumns($item, $fields, $request);
    $item->title = customNl2br($request->title);

    // upload files
    uploadModelsFile($request, $item, 'image', transliterateIntoLatin($item->title), self::IMAGE_PATH, 44);

    $item->save();

    return redirect()->route('advantages.dashboard.index');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Advantage  $advantage
   * @return \Illuminate\Http\Response
   */
  public function edit(Request $request)
  {
    $item = Advantage::find($request->id);

    return view('dashboard.advantages.edit', compact('item'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Advantage  $advantage
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    $item = Advantage::find($request->id);
    $fields = ['body'];
    fillModelColumns($item, $fields, $request);
    $item->title = customNl2br($request->title);
    $item->save();

    // upload files
    uploadModelsFile($request, $item, 'image', transliterateIntoLatin($item->title), self::IMAGE_PATH, 44);
    $item->save();

    return redirect()->route('advantages.dashboard.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Advantage  $advantage
   * @return \Illuminate\Http\Response
   */
  public function destroy(Advantage $advantage)
  {
    //
  }
}
