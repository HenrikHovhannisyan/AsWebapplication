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
        $punkte_procent = ($verwalten->punkte / 50000) * 100;

        return view('admin.verwalten', compact('verwalten', 'punkte_procent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param verwalten $verwalten
     * @return RedirectResponse
     */
    public function update(Request $request, Verwalten $verwalten)
    {
        $request->validate([
            'punkte' => 'required|numeric',
            'stufe' => 'required|numeric',
        ]);

        $punkte = $verwalten->punkte + $request->punkte;

        if ($punkte <= 100) {
            $verwalten->update([
                'stufe' => 1,
                'punkte' => $punkte,
            ]);
        } elseif ($punkte < 750) {
            $verwalten->update([
                'stufe' => 2,
                'punkte' => $punkte,
            ]);
        } elseif ($punkte < 2500) {
            $verwalten->update([
                'stufe' => 3,
                'punkte' => $punkte,
            ]);
        } elseif ($punkte < 6500) {
            $verwalten->update([
                'stufe' => 4,
                'punkte' => $punkte,
            ]);
        } elseif ($punkte < 15000) {
            $verwalten->update([
                'stufe' => 5,
                'punkte' => $punkte,
            ]);
        } elseif ($punkte < 30000) {
            $verwalten->update([
                'stufe' => 6,
                'punkte' => $punkte,
            ]);
        } elseif ($punkte < 50000) {
            $verwalten->update([
                'stufe' => 7,
                'punkte' => $punkte,
            ]);
        } else {
            $verwalten->update([
                'stufe' => 8,
                'punkte' => $punkte,
            ]);
        }

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
