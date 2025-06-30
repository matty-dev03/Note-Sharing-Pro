<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("SELECT d.department_name,c.college_name,w.coin_count,l.location_name,s.name,s.dob,s.regdate
 from tbl_student s
  inner join tbl_department d on s.department_id=d.department_id 
  inner join tbl_location l on s.location_id=l.location_id
  inner join tbl_college c on s.college_id=c.college_id
   inner join tbl_walletinfo w on s.wallet_no=w.wallet_no");

  
    $filename = "Export_studentexcel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>