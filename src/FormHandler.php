<?php

namespace App;

use FPDF;

/**
 * FormHandler
 *
 * Generates pdf from request
 *
 * @package App
 */
class FormHandler
{
    public function __construct($request) {
        $pdf = new FPDF();
        $pdf->AddPage();
        foreach ($request['inputs'] as $key => $input) {
            $pdf->SetFont('Arial','B',15);
            $pdf->MultiCell(0, 12, $request['inputs-field'][$key]);

            $pdf->SetFont('Arial','',12);
            $pdf->MultiCell(0, 10, $input);
        }
        $pdf->Output();
    }
}