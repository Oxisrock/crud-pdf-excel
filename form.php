<?php
/* Librerias requeridas*/
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


/*Toma el 'Last Name' de index.html*/
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dni = $_POST['dni'];
$age = $_POST['age'];
$job = $_POST['job'];
$cel = $_POST['cel'];

/*Crea nueva instancia para leer un documento XLSX*/
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
/*Carga el documento XLSX*/
$spreadsheet = $reader->load("tmp.xlsx");

/*Selecciona la hoja activa en el documento XLSX (la única hoja existente, btw)*/
$sheet = $spreadsheet->getActiveSheet();
/*Guarda la variable que recibimos de index.html en la celda requerida.*/
$sheet->setCellValue('A2', $fname);
$sheet->setCellValue('B2', $lname);
$sheet->setCellValue('C2', $dni);
$sheet->setCellValue('D2', $age);
$sheet->setCellValue('E2', $job);
$sheet->setCellValue('F2', $cel);

/*Se carga una nueva instancia para escribir, usando nuestro documento XLSX*/
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

/*Se guarda el documento*/
$writer->save("tmp.xlsx");

echo '<table>' . PHP_EOL;
foreach ($sheet->getRowIterator() as $row) {
    echo '<tr>' . PHP_EOL;
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
                                                       //    even if a cell value is not set.
                                                       // By default, only cells that have a value
                                                       //    set will be iterated.
    foreach ($cellIterator as $cell) {
        echo '<td>' .
             $cell->getValue() .
             '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;

$arrayData = [
    [NULL, 2010, 2011, 2012],
    ['Q1',   12,   15,   21],
    ['Q2',   56,   73,   86],
    ['Q3',   52,   61,   69],
    ['Q4',   30,   32,    0],
];
$sheet->fromArray(
        $arrayData,  // The data to set
        NULL,        // Array values with this value will not be set
        'A4'         // Top left coordinate of the worksheet range where
                     //    we want to set these values (default is A1)
    );

?>
