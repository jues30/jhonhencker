<?php
ob_start();
set_time_limit(0); 
error_reporting(E_ALL);
ini_set('memory_limit', '248M');
date_default_timezone_set('America/Bogota');
header('Content-Type: text/html; charset=UTF-8');
require_once 'funciones/bloquedeseguridad.php';
require_once 'funciones/funcionesBasicas.php';
require_once 'funciones/convertir_fecha.php';
require_once 'InterfazGeneral.php';
require_once 'Excel/PHPExcel.php';
require_once 'funciones/recargarLibrerias.php';

/**
 * Archivo 'reporteVisitas.php'
 * Controlador Reportes Administrador
 * 
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 14/06/2023
 * @since      Archivo disponible desde 14/06/2023
 *  */
class reporteVisitas {
    protected static $_instance;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function run($fecha = "") {
        $DAOAcceso = new DAOAcceso();
        $reporte = $DAOAcceso->obtenerReporteVisitas($fecha);
        $Hoja = new PHPExcel();
        $Hoja->getProperties()->setCreator("Juan Esteban Pelaez")
            ->setLastModifiedBy("Juan Esteban Pelaez") 
            ->setTitle("Reporte de Visitas")
            ->setSubject("Reporte de Visitas")
            ->setDescription("Reporte de Visitas")
            ->setKeywords("Reporte Visitas")
            ->setCategory("Reporte Excel");
        $tituloReporte = "REPORTE DE VISITAS";
        $titulos = array('ID','SESION', 'FECHA', 'IP', 'PAGINA', 'COOKIE');
        $Hoja->setActiveSheetIndex(0)->mergeCells('A1:F1');
        $Hoja->setActiveSheetIndex(0)
        ->setCellValue('A1',$tituloReporte)
      
        ->setCellValue('A4',  $titulos[0])
        ->setCellValue('B4',  $titulos[1])
        ->setCellValue('C4',  $titulos[2])
        ->setCellValue('D4',  $titulos[3])
        ->setCellValue('E4',  $titulos[4])
        ->setCellValue('F4',  $titulos[5]);
        $celda = 5;
        $i = 0;
        if(isset($reporte)) {
            $limite = count($reporte);
            while ($i < $limite){
                $Hoja->setActiveSheetIndex(0)
                ->setCellValue('A'.$celda, $reporte[$i]['id'])
                ->setCellValue('B'.$celda, $reporte[$i]['sesion'])
                ->setCellValue('C'.$celda, $reporte[$i]['fecha'])
                ->setCellValue('D'.$celda, $reporte[$i]['ip'])
                ->setCellValue('E'.$celda, $reporte[$i]['pagina'])
                ->setCellValue('F'.$celda, $reporte[$i]['user_cookies']);
                $celda++;
                ++$i;
            }
        }
        for($celda = 'A'; $celda <= 'F'; $celda++){
            $Hoja->setActiveSheetIndex(0)			
            ->getColumnDimension($celda)->setAutoSize(TRUE);
        }
        $Hoja->getActiveSheet()->setTitle('Visitas');
        $Hoja->setActiveSheetIndex(0);
        $Hoja->getActiveSheet(0)->freezePaneByColumnAndRow(0,5);

        $estilo = array(
        'font'  => array(
            'bold'  => true
        ));
        
        $estilo2 = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            ),
            'font'  => array(
                'bold'  => true
            )
        );
        $Hoja->getActiveSheet()->getStyle('A1')->applyFromArray($estilo2);
        
        $Hoja->getActiveSheet()->getStyle('A4')->applyFromArray($estilo);
        $Hoja->getActiveSheet()->getStyle('B4')->applyFromArray($estilo);
        $Hoja->getActiveSheet()->getStyle('C4')->applyFromArray($estilo);
        $Hoja->getActiveSheet()->getStyle('D4')->applyFromArray($estilo);
        $Hoja->getActiveSheet()->getStyle('E4')->applyFromArray($estilo);
        $Hoja->getActiveSheet()->getStyle('F4')->applyFromArray($estilo);
        unset($reporte);
        $objWriter = PHPExcel_IOFactory::createWriter($Hoja, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel; charset=utf-8');
        header('Content-Disposition: attachment;filename="reporte_visitas.xlsx"');
        header('Cache-Control: max-age=0');
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false);
        //file_put_contents('depuracion_reporte.txt', ob_get_contents());
        $objWriter->save('php://output');
        exit;
    }
}

class reporteVisitasException extends Exception{

}

ob_end_clean();