<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use App\Models\ProductoServicio;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['membresia'] = ProductoServicio::where('membresia_id',Auth::user()->membresia_id)->first();
        $data['sucursal'] = Sucursal::find(Auth::user()->sucursal_id);
        return view('home', $data);
    }
    public function dash()
    {
        return view('admin.index');
    }
}
