<?php
    // echo 'Teste'."<div>caixa</div>"; // o . concatena as strings
    // echo "ola walter";

    // $a = 'ana ';
    // $b = 'paula';
    // $c = $a.$b;
    // echo $c;

    // $a = 8; // o $ cria uma variavel
    // $b = 2;
    // // $soma = $a + $b;
    // echo $a + $b.'<br>';
    // echo $a - $b.'<br>';
    // echo $a * $b.'<br>';
    // echo $a / $b;
?>

<?php
//loop
// for($i =1; $i<=10; $i++){
//     if($i<10){
//         echo $i. '-';
//     }else{
//         echo $i;
//     }
// }


// for($i = 1; $i<=10;$i++){
//     for($j = 1; $j<= 10;$j++){
//         echo 'x';
//     }
//     echo "<br>";
// }


$cont = 1;
// for($i = 1; $i<= 10;$i++){
//     for($j = 1; $j<= 10;$j++){
//         echo $cont++;
//     }
//     echo "<br>";
// }

echo "<table border ='1'>";
for( $i = 1; $i <= 11; $i++ ){
    if($i==6){
        echo "<tr bgcolor='yellow'>";
    }else{
        echo "<tr>";
    }
    for( $j = 1; $j <= 11; $j++ ){
        if(($i == $j) || ($i+$j==12) || ($j==6)){
            echo "<td bgcolor='yellow'>".$cont++."</td>";
        }else{
            echo "<td>".$cont++."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";


?>