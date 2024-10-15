<?php 

// array => indexed ,multiDimenssion array , associative array

// indexed array


// $arr=array("ayat","mamdouh",5);
// $arr2=["ayaat","nada",5];
// print_r($arr);

echo "<br>";
echo "<br>";

// var_dump($arr2,"<br>");
// var_dump($arr,"<br>");

// array => index (postion of each value start with 0), length (عدد عناصر الاراي)
       //0      //1  //2
// $arr2=["ayaat","nada",5];   // length => 3
// echo $arr2[0];
// echo $arr2[1];
// echo $arr2[2];
            //   3
// for($i=0;$i<count($arr2);$i++)
// {
//     echo $arr2[$i],"<br>";
// }
       // arrayName   // value of each index in array    
// foreach ($arr2 as $value ) {
//     # code...
//     echo $value,"<br>";
// }

// proplem solving => array => max value of array

// $arr=[100,10,15,150,200];

// $max=$arr[0]; //100

// for ($i=0; $i < count($arr); $i++) { 
//     # code...
//     if($max<=$arr[$i])
//     {
//         $max=$arr[$i];
//     }
//     // echo "max value of array is",$max,"<br>";
// }

// $arr=[100,10,15,150,200];
// $max=$arr[0]; //100
// foreach ($arr as  $value) {
//     # code...
//         if($max<=$value)
//     {
//         $max=$value;
//     }
// }
// echo "max value of array is : ",$max,"<br>";



// multiDimenssion array
    //0   //1
// $arr=[1,[2,3]]  ; //  1[0]   1[1]

// // echo $arr[1][0],"<br>";
// // echo $arr[1][1],"<br>";

// for ($i=0; $i <count($arr) ; $i++) { 
//     # code...
// }

$arr=[2,3,2,1,1,5,8];
// ==> [2,3,1,5,8]
$newArr=[];

// foreach ($arr as  $value) {
// $isDublicate=false;
// foreach ($newArr as $newVal) {
//     # code...
// //   echo $newVal;
// if($newVal==$value)
// {
//     $isDublicate=true;
//     // break;
// }
// if(!$isDublicate)
// {

//     $newArr[]=$value;
// }
// print_r($newArr);

// }

   
// }
// $arr=[2,3,2,1,1,5,8];
// // ==> [2,3,1,5,8]
// $newArr=[];

// for ($i=0; $i < count($arr) ; $i++) { 
//     # code...
//     $isDublicate=false;
//     for ($j=1; $j <count($arr) ; $j++) { 
//         # code...
//         if($arr[$i]==$arr[$j])
//     {
//            $isDublicate=true;
//            break;
//     }
//     }
//     if(!$isDublicate)
//     {
//         $newArr[$i]=$arr[$j];
//         print_r($newArr);
//     }
   
// }

// multiDimenssion array
// $arr=[1,[2,3]]  ; //  1[0]   1[1]

// echo $arr[1][0],"<br>";
// echo $arr[1][1],"<br>";

// Associative array => key  => value

// $arr=["ayaat",24];   //
// $assArray=[
//     ["name"=>"ayaat","age"=>24],
//     ["name"=>"nada","age"=>27],
//     ["name"=>"mohammed","age"=>23],

// ];
// echo $assArray["name"],"<br>";
// echo $assArray["age"];

// foreach ($assArray as $key => $value) {
//     # code...
//     echo $key ," : ",$value ,"<br>"; 

// }
$assArray=[
    ["name"=>"ayaat","age"=>24],
    ["name"=>"nada","age"=>27],
    ["name"=>"mohammed","age"=>23],

];

echo "<table border=1> ";
echo "<thead>";
echo "<tr>";
echo"<th>";
echo "name";
 echo"</th>";
echo"<th>";
echo "age";
 echo"</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

foreach ($assArray as  $value) {
    # code...
    // echo $key ," : ",$value ,"<br>"; 
    echo"<tr>";   //[ayaat , 24]
    foreach ($value as $key => $Secvalue) {
        # code...
        // echo $key ," : ",$Secvalue ,"<br>";
     
        echo "<td>";
        echo $Secvalue;
        echo "</td>";
    }

    echo "</tr>";
}
echo "</tbody>";
echo "</table>"






?>