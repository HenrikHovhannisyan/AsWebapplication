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
    private function updatePoints(Verwalten $verwalten, $points)
    {
        $stufe = 1;
        $thresholds = [100, 750, 2500, 6500, 15000, 30000, 50000];

        foreach ($thresholds as $index => $threshold) {
            if ($points < $threshold) {
                $stufe = $index + 1;
                break;
            }
        }

        $verwalten->update([
            'stufe' => $stufe,
            'punkte' => $points,
        ]);
    }

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

        $points = $verwalten->punkte + $request->punkte;
        $this->updatePoints($verwalten, $points);

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param verwalten $verwalten
     * @return RedirectResponse
     */
    public function abziehen(Request $request, Verwalten $verwalten)
    {
        $request->validate([
            'abziehen_value' => 'required|numeric',
        ]);

        $points = $verwalten->punkte - $request->abziehen_value;
        $this->updatePoints($verwalten, $points);

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
