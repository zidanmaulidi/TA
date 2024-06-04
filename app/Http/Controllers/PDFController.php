<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\View\Factory;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF(Factory $viewFactory)
    {

        $pdf = Pdf::loadView('surat.pengantar_pdf');
        return $pdf->download('pengantar.pdf');
    }
}
