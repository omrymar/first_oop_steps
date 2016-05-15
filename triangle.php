<?php

 class triangle
 {
  public $side_a;
  public $side_b;
  public $side_c;

  public function __construct()
  {
   $this->side_a = 5;
   $this->side_b = 5;
   $this->side_c = 5;
  }

  public function get_side($a, $b, $c)
  {
   $this->side_a = $a;
   $this->side_b = $b;
   $this->side_c = $c;
  }

  /*public function get_a(){
   $this->side_a;
  }

  public function get_b(){
   $this->side_b;
  }

  public function get_c(){
   $this->side_c;
  }*/

 }

function ret_res($class_name){
 //echo "{$class_name}"." triangle";
 echo "Side_a = ".$class_name->side_a."<br>";
 echo "Side_b = ".$class_name->side_b."<br>";
 echo "Side_c = ".$class_name->side_c."<br>";
 echo "Perimeter = ".$class_name->perimeter()."<br>";
 echo "Area = ".$class_name->area()."<br><br>";
}

class any_triangle extends triangle{

  public function all_side(){

  print("<br>");
  //return array("Side_a" => $this->side_a,"Side_b"=> $this->side_b,"Side_c"=> $this->side_c,);
   return $this->side_a;

  echo "<br>";
 }

 public function perimeter(){
   $perimeter = $this->side_a + $this->side_b + $this->side_c;
   return $perimeter;
   //echo "<br>";
 }

 public function area(){
  $half_perimeter = ($this->side_a + $this->side_b + $this->side_c)/2;
  $area = sqrt($half_perimeter*($half_perimeter - $this->side_a)*($half_perimeter - $this->side_b)*($half_perimeter - $this->side_c));
  return $area;
  //echo "<br>";
 }

}

class rectangular_triangle extends any_triangle{

 public function area(){
  $half_perimeter = ($this->side_a + $this->side_b + $this->side_c)/2;
  $area = sqrt($half_perimeter*($half_perimeter - $this->side_a)*($half_perimeter - $this->side_b)*($half_perimeter - $this->side_c));
  return $area;
 }

}

class proper_triangle extends rectangular_triangle{

  public function perimeter(){
  //print("<br>");
  $perimeter = 3 * $this->side_a;
  return $perimeter;
  //echo "<br>";
 }

 public function area(){
  $area = $this->side_a*$this->side_a*sqrt(3)/4;
  return $area;
  //echo "<br>";
 }
}


$eny_triangle = new any_triangle;
$eny_triangle->get_side(10,15,22);
ret_res($eny_triangle);

$proper_triangle = new proper_triangle;
$proper_triangle->get_side(10,10,10);
ret_res($proper_triangle);

$rectangular_triangle = new rectangular_triangle;
$rectangular_triangle->get_side(3,4,5);
ret_res($rectangular_triangle);







