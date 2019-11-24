<?php

require('functions.php');

if (isOldEnough(15)) {
	echo "You are welcome!";
} 
else {
	echo "You are not old enough.";
}

require('index.view.php');