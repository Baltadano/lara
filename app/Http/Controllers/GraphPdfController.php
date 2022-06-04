<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidato;
use App\Models\Casilla;
use App\Models\Eleccion;
use App\Models\Voto;
use App\Models\Votocandidato;

use Exception;
use Illuminate\Support\Facades\DB;
use PDF;
//use mikehaertl\wkhtmlto\Pdf;

class GraphPdfController extends Controller
{
    
      public function index()
    {
        $votos = Voto::all();
        return view('voto/list', compact('votos'));
    }

    public function vista()
    {
        $votocandidatos = Votocandidato::all();
        return view('voto/graphic', compact('votocandidatos'));
    }
    
    

    public function generatepdf()
    {
        $casillas = Casilla::all();
        $pdf = PDF::loadView('casilla/list', ['casillas'=>$casillas]);
        return $pdf->stream('archivo.pdf');
    }
    
  
    /*public function dwn(){
        $pdf = app('dompdf.wrapper'); //aqui se llama a la instamcia de dompdf
        $pdf->loadHTML(
            '
            <h1>PDF GENERADO DE LAS GRAFICAS</h1>
            '
        );
        return $pdf->download('graficas.pdf');

    }*/
   

    public function generaPDF(){
        $data = [
            'title' => 'Welcome to algo.com',
            'date' => date('m/d/y')
        ];
        $ruta = 'casilla/list';
        $pdf =PDF::loadView($ruta,$data);
        return $pdf->download('resume.pdf');
    }
    public function preview()
    {
        return view('casilla/list');
    }
    public function dwn(){
        $data = [
            'algo' => 'Styde.net',
        ];
        $ruta = 'casilla/list';
        $pdf = PDF::loadView($ruta, $data);// vista blade
    
        return $pdf->download('archivo.pdf');
    }
public function download()
{
    $render = view ('casilla/list')->render();

    $pdf = new Pdf;
    $pdf->addPage($render);
    $pdf->setOptions(['javascript-delay' => 5000]);
    $pdf->saveAs(public_path_pdf('report.pdf'));

    return response()->download(public_path('report.pdf'));

}
    
   /* public function generatepdf()
    {
        $html = "<h1>Pagina 1</h1>";
                $pdf = PDF::loadHTML($html);
                return $pdf->download('archivo.pdf');
        

                //$casillas = Casilla::all(); 
               
               
                return PDF::loadView('graph')->stream('archivo.pdf');
                //->stream('archivo.pdf');
                
                }*/
                
}
