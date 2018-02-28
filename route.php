<?php 
$a=array(array(array(array(0,1))));
$n=3;

$b[0]=1;
for($k=1;$k<$n;$k++){
$b[$k]=$b[$k-1]*($k+1)*(2*$k+1);
}
//printa($a,$b,1);
for($k=1;$k<$n;$k++){
//echo "\n";
 for($m=0;$m<($k+1)*(2*$k+1);$m++){
//echo $b[$k-1];
  for($h=0;$h<$b[$k-1];$h++){ 
    for($l=0;$l<2*$k+2;$l++){
       $a[$k][$m][$h][$l]=-1;  
   }
//echo json_encode($a[$k][$m][$h])."\n";
  }
 } 
}
//printa($a,$b,$n);


for($k=1;$k<$n;$k++){ 
  for($m=0;$m<($k+1)*(2*$k+1);){
   for($i=0;$i<2*$k+1;$i++){
       for($j=$i+1;$j<2*$k+2;$j++){
         for($h=0;$h<$b[$k-1];$h++){
           $a[$k][$m][$h][$i]=2*$k;
           $a[$k][$m][$h][$j]=2*$k+1;
         }
        $m++;
     }
   }
 }
}
//printa($a,$b,$n);

for($k=1;$k<$n;$k++){
 for($m=0;$m<($k+1)*(2*$k+1);$m++){
  for($h=0;$h<$b[$k-1];$h++){  
    $p=0;
    for($l=0;$l<2*$k;$l++){
      while($a[$k][$m][$h][$l+$p]!=-1){
        $p++;
        }
             if($k==1){
               $len=1; 
               $e=0;
               $f=0;
             }else{
             $len=($k-1)*(2*$k-3);
             $e=$h/$len;
             $f= $h%$len;
             }
//    echo $k."----------".$h."----------".$len."---------".$e." ----- ".$f."\n";
               $a[$k][$m][$h][$l+$p]=$a[$k-1][$e][$f][$l];
    }
  }
}
}

//printa($a,$b,$n);



function printa($a,$b,$n){
for($k=0;$k<$n;$k++){
 for($m=0;$m<($k+1)*(2*$k+1);$m++){
   if($k==0){
 echo json_encode($a[$k][$m][0])."\n";
}else{
   for($h=0;$h<$b[$k-1];$h++){ 
    echo json_encode($a[$k][$m][$h])."\n";
   }
  }
}
 }
}

echo json_encode($b);

function unsetPoint($p,$k){
$len=sizeof($p);
for($i=0;$i<$len;$i++){
   if(($p[$i]==2*$k)||($p[$i]==2*$k+1)){
     unset($p[$i]);
   }
 }
return array_values($p);
}

function adjustPoint($p)
{
$len=sizeof($p);
$a=array();
for($i=0;$i<$len;$i++){
$a[$p[$i]]=1;
}
$j=0;
for($j=0;$j<$len;$j++){
   if($a[$j]!=1){
   break;
  }
 }

for($i=0;$i<$len;$i++){
  if($p[$i]>=$j){
    $p[$i]=$p[$i]-2;
  }
 }
return array_values($p);
}

$c=array(2,4,0,6,1,3,7,5);

for($i=0;$i<3;$i++){
echo json_encode($c)."\n";
echo json_encode(unsetPoint($c,$i))."\n";
echo json_encode(adjustPoint(unsetPoint($c,$i)))."\n";
}
/*
if($n>2){
$k=2;
for($m=0;$m<($k+1)*(2*$k+1);$m++){
  for($h=0;$h<$b[$k-1];$h++){
      for($l=0;$l<2*$k+2;$l++){
        if($a[$k][$m][$h][$l]<2*$k){
         echo $a[$k][$m][$h][$l].",";
        }
      }
       echo "\n";
   }
}
}*/
//echo json_encode($a,JSON_PRETTY_PRINT);
