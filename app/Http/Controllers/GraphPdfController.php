<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphPdfController extends Controller
{
    
    public function index(){
        return view ('graph');

    }
    public function dwn(){
        $render = view('chart')->render();
   
        $pdf = new Pdf;
        $pdf->addPage($render);
        $pdf->setOptions(['javascript-delay' => 5000]);
        $pdf->saveAs(public_path('report.pdf'));
    
        return response()->download(public_path('report.pdf'));
    }
}
