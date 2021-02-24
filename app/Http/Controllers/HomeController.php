<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $data = [
            'nama_sekolah' => 'SMK BINA CENDEKIA CIREBON',
            'alamat'       => 'Desa Mertapada Wetan',
        ];
        return view('v_home', $data);
    }

    public function about($id)
    {
        return 'Ini Halaman About</br>'. $id;
=======
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('v_home');
>>>>>>> khanif453
    }
}
