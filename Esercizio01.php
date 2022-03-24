<?php 
$array1;
echo "<h1> Array NON ordinato </h1> ";

for($i=0;$i<20;$i++){
$array[$i]= rand(1,20);
}

foreach($array as $value){
    echo "$value </br>";
}

echo "<h1> Array Ordinato</h1>";

    function BubbleSort($array1,$array){
        $temp=0;
        $scambi=false;
        do{
            $scambi = false;
            for($y=0;$y<20-1;$y++){
                if($array[$y]>$array1[$y+1]){
                    $temp=$array1[$y];
                    $array[$y]=$array1[$y+1];
                    $array[$y+1]=$temp;
                    
                }

            }
            $scambi=true;
        }while($scambi== true);
        
    }

    foreach($array as $value){
        echo "$value </br>";
    }

echo "ordinato".BubbleSort($array1,$array);
?>