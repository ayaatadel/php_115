<?php     
// php => losely typed language  
// $x=5;


// echo("sdkksk");
// print $x;


// $x=5;
// $y=10;
// $sum=$x+$y;
// // -
// // *
// // /
// // %
// print($sum);

//++ (increment )  --(decremant)
// $x=1;
// $x++;//=> x=x+1
// $x--; // => x=x-1

// $x+=2; // x=x+2
// $x-=2; // x=x-2


// comparison  => >,<,== ,!= ,<= ,>=

// if statement => if , if else , if elseif else



// $x=5;
// $y=5;


// if($x>$y)
// {
//     echo "x is grater than y";
// }else{
//     echo "x is less than y";
// }
// $x=5;
// $y=15;
// if($x>$y)
// {
//     echo "x is grater than y";
// }else if($x<$y){
//     echo "x is less than y";
// }else{
//     echo "x is qeual y";
// }




// >85   => A  <85 > 75  =>B      <75>65  => C   <50 >60  =>d <50 =>f

// logic operator => && || !
// && => T => True True
// ||=> T => any one of condition => T
// || => f => false false  
// ! => T => F
// ! => F => T

// $grade=95;
// // >85   => A  <85 > 75  =>B      <75>65  => C   <50 >60  =>d <50 =>f
// if($grade>85)
// {
//     echo "A";
// }
// else if ($grade <85 && $grade >=75)
// {
//     echo "B";
// }
// else if ($grade <75 && $grade >=65)
// {
//     echo "C";
// }
// else if ($grade <65 && $grade >=50)
// {
//     echo "D";
// }else{
//     echo "OOOPS Sorry You faild !!!!!!";
// }

// $grade=70;
// switch ($grade) {
//     case ($grade>=85):
//         # code...
//         echo "A";
//         break;
    
//     case  ($grade<85  && $grade >=75):
//         # code...
//         echo "B";
//         break;
//     case ($grade<75  && $grade >=65):
//         # code...
//         echo "C";
//         break;
//     case ($grade<65  && $grade >=50):
//         # code...
//         echo "D";
//         break;
    
//     default:
//         # code...
//         echo "fail";
//         break;
// }


// ternary operator 
// $grade=70;
// $result=($grade=70)?"B": "D";
// echo $result;



// age => year month day

// input 400
// 365 
// $year=(int)(400/365);

// // echo 5%2;
// // echo $year;
// $month= (int)((400%365)/30);
// // echo $month;
// $day=(400%365)%30;
// // echo $day;
// echo "your Age IS : <br> $year  year <br> : $month : months  <br>, $day : days ";


// function => getType()
// is_int , is_float , is_double , is_array=> check type of each variable


////////////////////////  loops => التكرار


// => for  , while , do-while
// print from 1 to 5

// print(1);
// print(2);
// print(3);
// print(4);
// print(5);

// for($i=1;$i<=5;$i++)
// {
//     echo $i ,"<br>";
// }

// $i=1;
// // while($i<=5)
// // {
// //     echo $i ,"<br>";
// //     $i++;// $i+=1; , $i=$i+1  
// // }

// do {
//     # code...
//     echo $i ,"<br>";
//     $i++;
//     // echo $i ,"<br>";
// } while ($i <= 5);


// array   => index , length

// indexed array => index
// array in php can take more than dataType


//  0 1 2 3   ===> length =>4
// count => get length of array
// $x=[1,2,3,4];
// $x=[1,2,"ayaat",True,["mohammed", "mahmoud"]];
// //  1select value in array => arrayName[index of value ]
// // echo $x[0];
// // echo $x[2];
// echo $x[4][1];
// echo $x[4][0];
// print_r($x);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// var_dump($x);


//// $x=[1,2,"ayaat",True,["mohammed", "mahmoud"]];
// // select value in array => arrayName[index of value ]
// // echo $x[0];
// // echo $x[2];
// echo $x[4][1];



// array => array => multi Dimension array  المصفوفه 
$arr=[[1,2] ,[3,4],[5,6]];
// 1 2
// 3 4
// 5 6

// for ($i=0; $i <count($arr) ; $i++) { 
//     # code...
//     // print_r($arr[$i]) ;
//     for ($j=0; $j <=$i; $j++) { 
//         # code...
//         echo $arr[$i][$j] ;
//         echo "<br>";
//     }
// }
// $singleArray=[1,2,3];
//     for ($j=0; $j <count($singleArray); $j++) { 
//         # code...
//         echo $singleArray[$j] ;
//         echo "<br>";
//     }
//     echo "****************************** <br>";
// foreach ($singleArray as $value) {
//     # code...
//     echo $value;
//     echo "<br>";
// }
// $arr=[[1,2] ,[3,4],[5,6]];

// foreach ($arr as  $value) {
//     # code...
//     // print_r($value);
//     foreach ($value as  $value2) {
//         # code...
//         echo $value2;
//         echo "<br>";
//     }

// }


// $arr=["ayaat",24];
// Associative Array
// $assArray=["name"=>"ayaat","age"=>24];
// // foreach ($assArray as $key => $value) {
// //     # code...
// //     echo "$key:$value <br>";
// // }
// foreach ($assArray as  $value) {
//     # code...
//     echo "$value <br>";
// }

$assArray=[
    ["name"=>"ayaat","age"=>24],
    ["name"=>"eman","age"=>23],
    ["name"=>"nada","age"=>27],
    ["name"=>"mahmoud","age"=>26],
    ["name"=>"tarek","age"=>15],
 
];

echo "<table border=1px>";
echo "<thead>";
echo "<tr>";
echo "</tr>";
echo "<td>";
echo "name";
echo "</td>";
echo "<td>";
echo "age";
echo "</td>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($assArray as $value) {
    # code...
    echo"<tr>";
    foreach ($value as  $value2) {
        # code...
        echo "<td>";
        echo "$value2";
        echo "</td>";
    }
    echo"</tr>";
}

echo "</tbody>";

echo "</table>";









?>