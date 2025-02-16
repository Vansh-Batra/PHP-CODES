<?php

    	// Class definition
    	class greeting
    	{
        	// properties
        	public $str = "Hello World!";
        
        	// methods
        	function show_greeting()
        	{
            		return $this->str;
        	}
    	}
     
    	// Create object from class
    	$message = new greeting;
    	var_dump($message);
	echo "<br><br>";
	echo "Code executed by Vansh Batra (0221BCA158)(2220100329)";
?>