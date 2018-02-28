<?php
$a=array(array(array(0,1)));
$n=4;
for($k=1;$k<$n;$k++){
   for($i=0;$i<($k+1)*(2*$k+1);$i++){
     for($j=0;$j<2*($k+1);$j++){
       $a[$k][$i][$j]=-1;
     }
  }
}
//printa($a,$n);

for($k=1;$k<$n;$k++){
   for($i=0;$i<($k+1)*(2*$k+1);){
    for($j=0;$j<2*$k+1;$j++){
      for($l=$j+1;$l<2*$k+2;$l++){
        $a[$k][$i][$j]=2*$k;
        $a[$k][$i][$l]=2*$k+1;
        $i++;
     }
  }
 } 
}

//printa($a,$n);

for($k=1;$k<$n;$k++){
   for($i=0;$i<($k+1)*(2*$k+1);$i++){
     $m=0;
     for($l=0;$l<2*$k;$l++) 
      {
       while($a[$k][$i][$l+$m]!=-1){
         $m++;
       }
       $a[$k][$i][$l+$m]=$a[$k-1][0][$l]; 
     }
  }

}
printa($a,$n);
function printa($a,$n){
for($k=0;$k<$n;$k++){
   if($k==0){
 echo json_encode($a[$k][0])."\n";
}else{
     for($i=0;$i<($k+1)*(2*$k+1);$i++){
       echo json_encode($a[$k][$i])."\n";
    }
  }
 }
}


