<?php 
 
    // Get Post Data
    $data = urldecode($_POST['data']);
       
    $jsonData      = array();
    $jsonTempData  = array();
      
     for($i=1;$i<4; $i++)
       {
          $jsonTempData = array();
          $jsonTempData['name']         = $data.$i;
          $jsonTempData['number']       = $data.$i;
          $jsonTempData['date_added']   = $data.$i;
           
          $jsonData[] = $jsonTempData;
       }
     
     $outputArr = array();
     $outputArr['Android'] = $jsonData;
      
     // Encode Array To JSON Data
     print_r(json_encode($outputArr));
      
 
 ?>