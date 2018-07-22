<?php
require_once dirname(__FILE__) . '/PHPExcel.php';
class ExportExcel{
	public $_excelObj = '';
	public $_activeSheet = '';

	public function initExcel(){
		  $this->_fileLineNum = 0;                
			$this->_excelObj = new PHPExcel();
					$this->_excelObj->setActiveSheetIndex(0);
					$this->_activeSheet = $this->_excelObj->getActiveSheet();	
	}	
	public function run(){
		$data = array();
		for($i=1;$i<10000;$i++){
			$data[] = array(
			0=>'AAAAAA',
			1=>'BBBBBB',
			2=>'CCCCCC',
			3=>'DDDDDD',
			4=>'EEEEEE',
			5=>'FFFFFF',
			6=>'GGGGGG',
			7=>'HHHHHH',
			8=>'IIIIII',
			9=>'JJJJJJ',
			10=>'KKKKK',
			11=>'LLLLL',
			12=>'MMMMM',
			13=>'NNNNN',
			);		
		}
		$this->exportdata($data);
	}
	public function exportdata($excelData){
		$filename = "Export.xls";
		$this->initExcel();
		foreach($excelData as $row=>$excelRow){
			foreach($excelRow as $column=>$v){
				$rowIndex = $row + 1;
				 $columnIndex = self::getExcelColumnIndex($column + 1);
				$this->_activeSheet->setCellValue($columnIndex.$rowIndex, $v);																								
			}			
		}
		$oWriter = PHPExcel_IOFactory::createWriter($this->_excelObj, 'Excel5');
		$oWriter->save("$filename");
		echo $filename;
		exit;
	}
	public static function getExcelColumnIndex($index){
		$init = 65;
		$c = 26;
		$index = $index - 1;
		$prefix_num = floor($index / $c);
		if($prefix_num>0){
				$prefix_num = $prefix_num - 1;
				$prefix = chr($init + $prefix_num);
		}else{
				$prefix = '';
		}
		$suffix_num = $index % $c;
		$suffix = chr($init + $suffix_num);
		return $prefix.$suffix;
	}

}

$ExportExcel = new ExportExcel();
$ExportExcel->run();

