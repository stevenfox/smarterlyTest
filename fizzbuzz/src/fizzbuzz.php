<?php namespace stevenfox\fizzbuzz;
*
*  @author stevenfox
*/
class fizbO{

   public function method1(){
		for( $i = 1; $i <= 100; $i ++ )
    {
        $output = '';
        if($i % 3 == 0 && $i % 5 ==0) $output = "FizzBuzz";
        if ( $i % 3 == 0 ) $output = 'Fizz';
        if ( $i % 5 == 0 ) $output .= 'Buzz';

        echo ( empty( $output ) ) ? $i : $output;
        echo '<br />';
    }
}