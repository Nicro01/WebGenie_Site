<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{

    public function index()
    {
        $config = Config::where('status', 1)->first();


        return Inertia::render('Home', [
            'config' => $config,
        ]);
    }

    public function create()
    {
        $configs = Config::all();

        return Inertia::render('Configs', [
            'configs' => $configs,
        ]);
    }

    public function store(Request $request)
    {
        Config::where('status', 1)->update(['status' => 0]);

        $primary_color = '#' . $request->primary_color;
        $secondary_color = '#' . $request->secondary_color;
        $tertiary_color = '#' . $request->terciairy_color;
        $quaternary_color = '#' . $request->quaternary_color;
        $quinary_color = '#' . $request->quinary_color;


        $config = new Config();


        $config->primary_color = $primary_color;
        $config->secondary_color = $secondary_color;
        $config->tertiary_color = $tertiary_color;
        $config->quaternary_color = $quaternary_color;
        $config->quinary_color = $quinary_color;

        $config->save();

        return redirect()->route('home');
    }
}
