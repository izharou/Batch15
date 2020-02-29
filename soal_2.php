<?php

function functionName($username,$password) {
    

if (preg_match('/^(\d)([A-Z]){3,6}(\d)*\1/',$username))
{
 echo "True";
}
else
{
 echo "False";
	
}
	
	if (preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[-])([a-z0-9-]+){7,11}$/',$password) && preg_match_all( "/[0-9]/", $password )== 3 && preg_match_all( "/[a-z]/", $password )== 3)
    {
	    echo "True ";
    }
     elseif (preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[-])([a-z0-9-]+){7,11}$/',$password) && preg_match_all( "/[0-9]/", $password )== 4 && preg_match_all( "/[a-z]/", $password )== 4 )
    {
     echo "True";
    }
    elseif (preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[-])([a-z0-9-]+){7,11}$/',$password) && preg_match_all( "/[0-9]/", $password )== 5 && preg_match_all( "/[a-z]/", $password )== 5 )
    {
     echo "True";
    }
    else
    {
        echo "false";
    }
	
}
functionName('1AAA1','1aaaaaa-11111');