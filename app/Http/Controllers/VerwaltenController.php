<?php

namespace App\Http\Controllers;

use App\Models\verwalten;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerwaltenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param verwalten $verwalten
     * @return void
     */
    public function show(verwalten $verwalten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param verwalten $verwalten
     * @return Factory|View
     */
    public function edit(verwalten $verwalten)
    {
        return view('admin.verwalten',compact('verwalten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param verwalten $verwalten
     * @return RedirectResponse
     */
    public function update(Request $request, verwalten $verwalten)
    {
        dd((($request->kaufanbot * $request->percent) / 30) / 100);
        $verwalten->update([
            'stufe' => $request->stufe,
            'punkte' => $request->punkte,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param verwalten $verwalten
     * @return void
     */
    public function destroy(verwalten $verwalten)
    {
        //
    }
}
