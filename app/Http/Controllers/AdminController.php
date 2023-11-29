<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\verwalten;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Factory|View
     */
    public function home()
    {
        $current_user = auth()->user();
        $users = User::where('id', '!=', $current_user->id)->get();
        $verwaltens = verwalten::whereIn('user_id', $users->pluck('id'))->get();
        $data = $users->map(function ($user) use ($verwaltens) {
            $verwalten = $verwaltens->where('user_id', $user->id)->first();
            $user->verwalten = $verwalten;
            return $user;
        });

        return view('admin.home', compact('data'));

    }
}
