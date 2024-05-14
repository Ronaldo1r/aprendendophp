<?php
$raw = '22.11.1968';
$start = datetime::createFromFormat('d.m.Y', $raw);
echo "data de inicio:" .$start->format('Y-m-d')."\n";

 
 $end = clone $start; 
 $end->add(new DateInterval('P1M6D'));
 $diff = $end->diff($start);
echo "Diferença: " . $diff->format('%m mês, %d dias (total: %a dias)') . "\n";

if($start < $end ){
    echo "começa antes do fim!\n";
}

// mostra todas as quintas-feiras entre $start e $end 

$periodinterval = DateInterval::createFromDateString('first thursday'); 
$periodlterator = new DatePeriod($start, $periodinterval, $end,
DatePeriod::EXCLUDE_START_DATE);
foreach($periodlterator as $date){
    //mostra cada data no período
    echo $date -> format ('d-m-Y'). "<br>"; 
}   
    ?>