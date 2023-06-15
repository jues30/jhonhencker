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
class reporteObra {
    protected static $_instance;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function run() {
        $DAOObra = new DAOObra();
        $reporte = $DAOObra->obtenerReporteObras();
        $Hoja = new PHPExcel();
        $Hoja->getProperties()->setCreator("Juan Esteban Pelaez")
            ->setLastModifiedBy("Juan Esteban Pelaez") 
            ->setTitle("Reporte de Obras")
            ->setSubject("Reporte de Obras")
            ->setDescription("Reporte de Obras")
            ->setKeywords("Reporte Obras")
            ->setCategory("Reporte Excel");
        $tituloReporte = "REPORTE DE OBRAS";
        $titulos = array('OBRA','VISTAS', 'ME GUSTA');
        $Hoja->setActiveSheetIndex(0)->mergeCells('A1:C1');
        $Hoja->setActiveSheetIndex(0)
        ->setCellValue('A1',$tituloReporte)
      
        ->setCellValue('A4',  $titulos[0])
        ->setCellValue('B4',  $titulos[1])
        ->setCellValue('C4',  $titulos[2]);
        $celda = 5;
        $i = 0;
        if(isset($reporte)) {
            $limite = count($reporte);
            while ($i < $limite){
                $Hoja->setActiveSheetIndex(0)
                ->setCellValue('A'.$celda, mayusculas($reporte[$i]['nombre_obra']))
                ->setCellValue('B'.$celda, $reporte[$i]['vistos'])
                ->setCellValue('C'.$celda, $reporte[$i]['likes']);
                $celda++;
                ++$i;
            }
        }
        for($celda = 'A'; $celda <= 'C'; $celda++){
            $Hoja->setActiveSheetIndex(0)			
            ->getColumnDimension($celda)->setAutoSize(TRUE);
        }
        $Hoja->getActiveSheet()->setTitle('Obras');
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
        unset($reporte);
        $objWriter = PHPExcel_IOFactory::createWriter($Hoja, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel; charset=utf-8');
        header('Content-Disposition: attachment;filename="reporte_obras.xlsx"');
        header('Cache-Control: max-age=0');
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false);
        //file_put_contents('depuracion_reporte.txt', ob_get_contents());
        $objWriter->save('php://output');
        exit;
    }
}

class reporteObrasException extends Exception{

}

ob_end_clean();