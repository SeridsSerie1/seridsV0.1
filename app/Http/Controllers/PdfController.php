<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use setasign\Fpdi\Fpdi; // Importa la clase Fpdi


class PdfController extends Controller
{
    
    public function generatePdf(Request $request)
    {
        $pdf = new Fpdi();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
        $pdf->Output();

        exit;
    }
}