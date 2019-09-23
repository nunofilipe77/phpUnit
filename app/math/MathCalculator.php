<?php

namespace someApp\math;

class MathCalculator{

    public function convertDecimalToBin($decimal){
      $bin = '';
        do {
            $bin .= ($decimal % 2 == 0) ? '0' : '1';
            $decimal = floor($decimal / 2);
        } while ($decimal >=1);

         return  strrev($bin);
    }

    public function getNFiboNumer($n){
        if($n <= 1){
            return $n;
        }

        if(array_key_exists($n, $this->memoization)){
            return $this->memoization[$n];
        }

        $this->memoization[$n] = $this->getNFiboNumer($n - 1) + $this->getNFiboNumber($n - 2);
        return $this->memoization[$n];

    }
}


?>