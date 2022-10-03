<?php

/* My Github : https://github.com/restugbk */

function random($length) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

function random_number($length) {
	$str = "";
	$characters = array_merge(range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

function toPhone($hp) {
    if(!preg_match('/[^+0-9]/',trim($hp))){
        if(substr(trim($hp), 0, 1)=='0'){
            $hp = '0'.substr(trim($hp), 1);
        } else if(substr(trim($hp), 0, 2) == '62'){
            $hp = '0'.substr(trim($hp), 2);
        } else if(substr(trim($hp), 0, 3) == '+62'){
            $hp = '0'.substr(trim($hp), 3);
        }
        
    }
    return $hp;
}

function toWA($hp) {
    if(!preg_match('/[^+0-9]/',trim($hp))){
        if(substr(trim($hp), 0, 1)=='0'){
            $hp = '62'.substr(trim($hp), 1);
        } else if(substr(trim($hp), 0, 2) == '62'){
            $hp = '62'.substr(trim($hp), 2);
        } else if(substr(trim($hp), 0, 3) == '+62'){
            $hp = '62'.substr(trim($hp), 3);
        }
        
    }
    return $hp;
}

echo random(10); // Random String
echo random_number(10); // Random Number
echo toPhone('+6281234567890'); // Result : 081234567890
echo toWA('081234567890'); // Result : 6281234567890

?>