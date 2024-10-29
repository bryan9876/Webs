<?php
require('fpdf186/fpdf.php');

// Conexión
include("conexion/conexion.php");
$sql = "CALL consultarClientes()";
$ejecConsulta = mysqli_query($conexion, $sql);

$regEventos = array();
while ($row = mysqli_fetch_array($ejecConsulta)) {
    $regEventos[] = $row;
}

class PDF extends FPDF {
    // Encabezado
    function Header() {
        // Fuente en negrita, tamaño 15
        $this->SetFont('Arial', 'B', 15);
        // Título
        $this->Cell(0, 10, utf8_decode('Clientes Kalifornia'), 0, 1, 'C');
        // Salto de línea
        $this->Ln(10);
    }

    // Pie de página
    function Footer() {
        // Posición a 1.5 cm del final
        $this->SetY(-15);
        // Fuente en cursiva, tamaño 10
        $this->SetFont('Arial', 'I', 10);
        // Número de página
        $this->Cell(0, 10, 'Página ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    // Tabla coloreada
    function FancyTable($header, $data) {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');

        // Cabecera
        $w = array(10, 60, 30, 50, 30, 30, 50 ); // Ajusta los anchos de las columnas
        for ($i = 0; $i < count($header); $i++) {
            $this->Cell($w[$i], 7, utf8_decode($header[$i]), 1, 0, 'C', true);
        }
        $this->Ln();

        // Restauración de colores y fuentes
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');

        // Datos
        $fill = false;
        foreach ($data as $row) {
            $this->Cell($w[0], 6, utf8_decode($row[0]), 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, utf8_decode($row[1]), 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, utf8_decode($row[2]), 'LR', 0, 'L', $fill);
            $this->Cell($w[3], 6, utf8_decode($row[3]), 'LR', 0, 'L', $fill);
            $this->Cell($w[4], 6, utf8_decode($row[4]), 'LR', 0, 'L', $fill);
            $this->Cell($w[5], 6, utf8_decode($row[5]), 'LR', 0, 'L', $fill);
            $this->Cell($w[6], 6, utf8_decode($row[6]), 'LR', 0, 'L', $fill);
            $this->Ln();
            $fill = !$fill;
        }
        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

$pdf = new PDF();
// Títulos de las columnas
$header = array('#','CLIENTE', 'EVENTO', 'DIRECCION', 'TELEFONO 1', 'TELEFONO 2', 'REFERENCIAS');
// Carga de datos
$pdf->SetFont('Arial', '', 10);
$pdf->AliasNbPages(); // Para el número total de páginas
$pdf->AddPage('L');
$pdf->FancyTable($header, $regEventos);
// Salida del documento, con nombre "Clientes.pdf"
$pdf->Output('D', 'Clientes.pdf');
?>
