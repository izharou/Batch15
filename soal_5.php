<?php
function angka($n) 
{ 
    for ($i = 1; $i <= $n; $i++) { 
        for ($j = 1; $j <= $n; $j++) { 
            if($j<=($n-$i)){ 
                echo " "." "; 
                  
            }else { 
                echo "* "; 
            } 
              
        } 
        echo PHP_EOL; 
    }  
} 
  
    // Driver Code 
   
    angka(5); 

?>
