<?php

require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimum-scale=1.0, maximum-scale=1.0"/>
        <meta name="viewport" content="width=device-width" />
        <title>FizzBuzz</title>
    </head>

    <body>
        <div class='container'>
            <div class='content'>
               <h2>FizzBuzz Game</h2>
               <ul><?php FizO(); ?></ul>
            </div>
        </div>
    </body>
</html>

<?php 
function fizO(){
    for( $i = 1; $i <= 100; $i ++ )
    {
        $output = '';
        if($i % 3 == 0 && $i % 5 ==0) $output = "<li> FizzBuzz </li>";
        if ( $i % 3 == 0 ) $output = '<li> Fizz </li>';
        if ( $i % 5 == 0 ) $output .= '<li> Buzz </li>';

        echo ( empty( $output ) ) ? $i : $output;
        
      }
    }
?>