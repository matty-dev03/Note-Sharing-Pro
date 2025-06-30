<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("SELECT c.college_name,d.district_name,l.location_name,c.college_phone_number,c.college_email,c.reg_date 
from tbl_college c
 inner join tbl_district d on c.district_id=d.district_id 
 inner join tbl_location l on l.location_id=c.location_id");

  
    $filename = "Export_collegeexcel.xls";
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