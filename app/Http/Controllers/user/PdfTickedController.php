<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
// use Barryvdh\DomPDF\PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

use Codedge\Fpdf\Fpdf\Fpdf;
// use Codedge\Fpdf;

// use fpdf/fpdf.php;
use Illuminate\Support\Carbon;


class PdfTickedController extends Controller
{

    public $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }



    public function downloadPdf()

    {

        $date = Carbon::now();
        $user = User::with(['productos'])->find(session()->get('userId')); // id user
        $ticket = $user->productos;

        $this->fpdf = new FPDF('P', 'mm', array(80, 240)); // Tamaño tickt 80mm x 150 mm (largo aprox)
        $this->fpdf->SetFont('Arial', 'B', 15);
        $this->fpdf->AddPage();
        // CABECERA
        // $this->fpdf->SetFont('Helvetica', '', 12);
        $this->fpdf->Cell(60, 4, 'Agrupec', 0, 1, 'C');
        // $this->fpdf->Cell(60, 4, 'Agrupec.com', 0, 1, 'C');
        $this->fpdf->SetFont('Helvetica', '', 8);
        // $pdf->Cell(60,4,'C.I.F.: 01234567A',0,1,'C');
        // $pdf->Cell(60,4,'C/ Arturo Soria, 1',0,1,'C');
        $this->fpdf->Cell(60, 4, ' ', 0, 1, 'C');

        $this->fpdf->Cell(60, 4, config('constants.directionContact'), 0, 1, 'C');
        $this->fpdf->Cell(60, 4, config('constants.numContact'), 0, 1, 'C');
        $this->fpdf->Cell(60, 4, config('constants.gmailContact'), 0, 1, 'C');

        // DATOS FACTURA
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(60, 4, 'Factura : F2022-' . rand(10000, 1000000), 0, 1, '');
        $this->fpdf->Cell(60, 4, 'Fecha: ' . $date->format('d/m/Y'), 0, 1, '');
        $this->fpdf->Cell(60, 4, 'Metodo de pago: Tarjeta', 0, 1, '');

        // COLUMNAS
        $this->fpdf->SetFont('Helvetica', 'B', 7);
        $this->fpdf->Cell(30, 10, 'Producto', 0);
        $this->fpdf->Cell(5, 10, 'Ud', 0, 0, 'R');
        $this->fpdf->Cell(13, 10, 'Precio', 0, 0, 'R');
        $this->fpdf->Cell(13, 10, 'Total', 0, 0, 'R');
        $this->fpdf->Ln(8);
        $this->fpdf->Cell(60, 0, '', 'T');
        $this->fpdf->Ln(0);

        // PRODUCTOS
        $this->fpdf->SetFont('Helvetica', '', 7);
        $this->fpdf->Ln(3);
        $neto = 0;
        foreach ($ticket as $producto) {
            $this->fpdf->MultiCell(30, 4, $producto['nombre'], 0, 'L');
            $this->fpdf->Cell(35, -5, $producto->pivot['cantidad'], 0, 0, 'R');
            $this->fpdf->Cell(13, -5, 'S/ ' . number_format(round($producto['newPrecio'], 2), 2, ',', ' '), 0, 0, 'R');
            $precioUniddad = $producto['newPrecio'] * $producto->pivot['cantidad'];
            $this->fpdf->Cell(13, -5, 'S/ ' . number_format(round($precioUniddad, 2), 2, ',', ' '), 0, 0, 'R');
            $this->fpdf->Ln(3);
            $neto += $precioUniddad;
        }
        //SUMATORIO DE LOS PRODUCTOS Y EL IVA
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(60, -50, '', 'T', 0);
        $this->fpdf->Ln(8);
        $this->fpdf->Cell(25, -8, 'Sub Total', 0);
        $this->fpdf->Cell(20, 10, '', 0);
        $this->fpdf->Cell(15, -8, 'S/ ' . number_format(round($neto - $neto * 0.18, 2), 2, ',', ' '), 0, 0, 'R');
        $this->fpdf->Ln(5);
        $this->fpdf->Cell(25, -10, 'I.G.V. 18%', 0);
        $this->fpdf->Cell(20, 10, '', 0);
        $this->fpdf->Cell(15, -10, 'S/ ' . number_format(round($neto * 0.18, 2), 2, ',', ' '), 0, 0, 'R');
        $this->fpdf->Ln(4);
        $this->fpdf->Cell(25, -10, 'TOTAL', 0);
        $this->fpdf->Cell(20, 10, '', 0);
        $this->fpdf->Cell(15, -10, 'S/ ' . number_format(round($neto, 2), 2, ',', ' '), 0, 0, 'R');
        // return  $date->format('d-m-Y');
        // PIE DE PAGINA
        // $this->fpdf->Ln(35);

        $this->fpdf->Ln(5);
        $this->fpdf->Cell(60, 0, 'EL PERIODO DE DEVOLUCION', 0, 1, 'C');
        // $this->fpdf->Ln(3);
        // $this->fpdf->Cell(60, 0, 'CADUCA EL DIA  ' . $date->format('d/m/Y '), 0, 1, 'C');
        $this->fpdf->Ln(4);
        $this->fpdf->Cell(60, 0, 'CADUCA EL DIA  ' . $endDate = $date->addDay(1), 0, 1, 'C');

        $this->fpdf->Ln(4);
        $this->fpdf->Cell(20, 10, '', 0);
        // $this->fpdf->Image('https://cdn.urbantecno.com/rootear/2015/07/qr.jpg', 20, 30, 40, 30);
        $this->fpdf->Output();
        return exit;
    }
}

    // $cartArray = User::with(['productos'])->find(session()->get('userId')); // id user

    // dd($users);
    // echo $user;
    // echo $user->productos;
    // return view('Admin.pdfDownload',compact('users'));

    // view()->share('User.Pdf.pdfDownload', $users);
    // $pdf = PDF::loadView('Admin.Pdf.pdfDownload', ['users' => $users]);
    // // return $pdf->download('archivo.pdf');  //----descargar
    // return $pdf->stream();  //----- this is for view online
