<?php
for($i=1;$i<100;$i++){
	$t=0;
	for($j=2;$j<$i;$j++){
		if($i%$j==0){     //bla bla bla
			$t=1;
	}
	}
		if($t!==1){
			echo $i."<br>";
		
	}	
}