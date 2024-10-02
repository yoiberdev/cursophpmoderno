<?php 

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$now = Carbon::now();
// echo "La fecha y hora actual es: " . $now->toDateTimeString();

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Nombre');
$sheet->setCellValue('A2', 'Héctor');

$writer = new Xlsx($spreadsheet);
$fileName = "exceles\myExcel.xlsx";
$writer->save($fileName);

echo "Archivo generado";