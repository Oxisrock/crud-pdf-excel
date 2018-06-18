<?php
/* Librerias requeridas*/
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


/*Toma el 'Last Name' de index.html*/
$fname = $_POST['fname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$tel = $_POST['tel'];
$lic = $_POST['lic'];
$iss = $_POST['iss'];
$md = $_POST['md'];
$do = $_POST['do'];
$pa = $_POST['pa'];
$cr = $_POST['cr'];
$an = $_POST['an'];
$op = $_POST['op'];
$nregister = $_POST['nregister'];
// $dni = $_POST['dni'];
// $age = $_POST['age'];
// $job = $_POST['job'];
// $cel = $_POST['cel'];

/*Crea nueva instancia para leer un documento XLSX*/
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
/*Carga el documento XLSX*/
$spreadsheet = $reader->load("tmp.xlsx");

/*Selecciona la hoja activa en el documento XLSX (la única hoja existente, btw)*/
$sheet = $spreadsheet->getActiveSheet();
/*Guarda la variable que recibimos de index.html en la celda requerida.*/
$sheet->setCellValue('A2', $fname);
$sheet->setCellValue('B2', $address);
$sheet->setCellValue('C2', $city);
$sheet->setCellValue('D2', $zip);
$sheet->setCellValue('E2', $zip);
$sheet->setCellValue('F2', $tel);
$sheet->setCellValue('G2', $lic);
$sheet->setCellValue('H2', $iss);
$sheet->setCellValue('I2', $md);
$sheet->setCellValue('J2', $do);
$sheet->setCellValue('K2', $pa);
$sheet->setCellValue('L2', $cr);
$sheet->setCellValue('M2', $an);
$sheet->setCellValue('N2', $op);
$sheet->setCellValue('O2', $nregister);
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
