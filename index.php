<?php 
echo "<h1 style='text-align:center;margin-top:15px'> hello  group 115 back end  day 1 </h1>";


$text="ayaat";
// print(strrev($text));
echo "<h1>".strrev($text)."</h1>";
echo "<h1>".$text."</h1>";

$textRev="";
//             4                                  
for ($i=strlen($text)-1; $i >=0; $i--) { 
    $textRev=$textRev.$text[$i];
    // echo "<h1>".$textRev."</h1>";
    echo "<span style='font-size:10px;'>".$text[$i]."</span>";
    // echo $text[$i];
}
// echo "<h1>".$textRev."</h1>";


//  function rev($hello) {
//     $i = strlen($hello) -1;
//           while($i >= 0){
//     echo $hello[$i];  
//     $i--;  
//     }
//    }
//     echo rev("Hello World!");






// print($textRev);
// for ($i=0; $i < 5; $i++) { 
//     # code...
//    echo $text[$i]."<br>";
// }






?>