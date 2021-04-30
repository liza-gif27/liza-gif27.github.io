<?php

$summn = 0;

if (!empty($_POST["designations_date"]) and !empty($_POST['summa_deposit']  ) )
{
   
    $summn1 = $_POST['summa_deposit'];// сумма вклада
    $day  = $_POST['designations_date'];// дата оформления
    $radio = $_POST['radioAnswer'];
    $month = substr($day, 0,2);
    $year = substr($day, -2); 
    $percent = 10/100;  
    
 

    if (is_numeric($month) && is_numeric($year)) {
        $daysn =date('t', mktime(0, 0, 0, $month, 1, $year)); 
        $daysy =  ( $year % 4 ) ? 365 : 366; 
    }
    if ($radio == "no") {
        for ($i=0; $i < 12 ; $i++) { 
            $summn =$summn+($summn1*$daysn*($percent/$daysy));
           
        }
        $summn+=$summn1;
    }else {
        $sum_fill = $_POST['refill_sum'];
        
        $summn =$summn+($summn1+$sum_fill)*$daysn*($percent/$daysy);
           
    
        $summn+=$summn1+$sum_fill;
    }
    
  
}else{
    $summn ="Введите все данные";
}

$result = array(
    'summa_deposit' => $summn

); 

    // Переводим массив в JSON
    echo json_encode($result); 

?>