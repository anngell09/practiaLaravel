<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;



class productosController extends Controller
{
    //

    public function getPDF()
    {
      $detalles = [
         'titulo' => 'Informe de ventas',
         'autor' => 'Angel Alvanez',
         'fecha' => '22/02/2024' 
         // Otros datos relevantes...
     ];
     
     $pdf = app('dompdf.wrapper')->loadView('PDF_Example', $detalles);
     return $pdf->stream('prueba.pdf'); //stream muestra el pdf en la web
     //return $pdf->download('prueba.pdf'); //descarga el pdf
     
   
    }





    public function index()
    {
       return view('productos');
    }
    //
    public function mostrar()
    {
       echo 'metodo mostrar';
    }
    //
    public function crear()
    {
       return view('crear');
    }

    public function dataformulario( Request $request)
    {
        return $request->input('nombre');
    }
    

}

