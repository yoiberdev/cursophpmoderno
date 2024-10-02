<?php 

interface ReportInterface{
    public function generate(string $content);
}

class PDFReport implements ReportInterface{
    public function generate(string $content){
        echo "Se crea pdf con el contenido: $content";
    }
}

class HTMLReport implements ReportInterface{
    public function generate(string $content){
        echo "Se crea html con el contenido: $content";
    }
}

class ExcelReport implements ReportInterface{
    public function generate(string $content){
        echo "Se crea excel con el contenido: $content";
    }
}



class Estimate{
    private ReportInterface $report;

    public function __construct(ReportInterface $report)
    {
        $this->report = $report;
    }

    public function process(){
        echo "Se genera la estimación<br>";
        $this->report->generate("Contenido de la estimación");
    }

}

$pdfReport = new PDFReport();
$htmlReport = new HTMLReport();
$excelReport = new ExcelReport();
$estimate = new Estimate($excelReport);
$estimate->process();