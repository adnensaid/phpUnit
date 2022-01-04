<?php
namespace App;
class Dojo
{
  public function fizzbuzz(int $nb) : string
  {
    if ($nb % 3 === 0 && $nb % 5 === 0) {
      return "fizzbuzz";
    }
    else if($nb % 5 === 0) {
      return "buzz";
    }
    else if($nb % 3 === 0){
      return "fizz";
    }
    return "$nb";
  }
}
   /* 
  Fizzbuzz
  Le but du dojo est de créer une fonction qui prend un entier n en paramètre et retourne :
  "fizz" si n est multiple de 3
  "buzz" si n est multiple de 5
  "fizzbuzz" si n est multiple de 5 et de 3
  n dans les autres cas
    */ 