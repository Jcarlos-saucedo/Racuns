<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function showClientes()
    {
        return view('gestionar_clientes');
    }
    public function showCalcular()
    {
        return view('Calculo_prestamos');
    }
    public function showPrestamos()
    {
        return view('asignar_prestamo');
    }
    public function showBuro()
    {
        return view('I_VerificarBuro');
    }
    public function showReportes()
    {
        return view('I_GenerarReporte');
    }
    public function showTarjetas()
    {
        return view('MRformulario');
    }
    public function showDebito()
    {
        return view('MRdebito');
    }
    public function showCredito()
    {
        return view('MRcredito');
    }
    public function showCobranza()
    {
        return view('MRcobranza');
    }
    public function showPrestamo()
    {
        return view('pablotest');
    }
    public function showPrestamo2()
    {
        return view('pablotest2');
    }
}
