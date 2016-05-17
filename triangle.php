<?php

abstract class triangle{
  protected $side_a;
  protected $side_b;
  protected $side_c;

  abstract function __construct($side_a = 5, $side_b = 5, $side_c = 5);
  abstract function getPerimeter();
  abstract function getArea();

}

class any_triangle extends triangle{

 /**
  * @return mixed
  */
 public function getSideA()
 {
  return $this->side_a;
 }

 /**
  * @param mixed $side_a
  */
 public function setSideA($side_a)
 {
  $this->side_a = $side_a;
 }

 /**
  * @return mixed
  */
 public function getSideB()
 {
  return $this->side_b;
 }

 /**
  * @return mixed
  */
 public function getSideC()
 {
  return $this->side_c;
 }

 /**
  * @param mixed $side_b
  */
 public function setSideB($side_b)
 {
  $this->side_b = $side_b;
 }

 /**
  * @param mixed $side_c
  */
 public function setSideC($side_c)
 {
  $this->side_c = $side_c;
 }

  public function __construct($side_a = 5, $side_b = 5, $side_c = 5){

 // print("<br>");
  $this->side_a = $side_a;
  $this->side_b = $side_b;
  $this->side_c = $side_c;
  //echo "<br>";
 }

 public function getPerimeter(){
   $perimeter = $this->side_a + $this->side_b + $this->side_c;
   return $perimeter;
   //echo "<br>";
 }

 public function getArea(){
  $half_perimeter = ($this->side_a + $this->side_b + $this->side_c)/2;
  $area = sqrt($half_perimeter*($half_perimeter - $this->side_a)*($half_perimeter - $this->side_b)*($half_perimeter - $this->side_c));
  return $area;
  //echo "<br>";
 }

}

class rectangular_triangle extends any_triangle{

  public function getArea(){
   $half_perimeter = ($this->side_a + $this->side_b + $this->side_c)/2;
   $area = sqrt($half_perimeter*($half_perimeter - $this->side_a)*($half_perimeter - $this->side_b)*($half_perimeter - $this->side_c));
  return $area;
 }

}

class proper_triangle extends rectangular_triangle{

  public function getPerimeter(){
  //print("<br>");
  $perimeter = 3 * $this->side_a;
  return $perimeter;
  //echo "<br>";
 }

 public function getArea(){
  $area = $this->side_a*$this->side_a*sqrt(3)/4;
  return $area;
  //echo "<br>";
 }
}

function ret_res(triangle $triangle){

 echo $triangle->getSideA()."<br>";
 echo $triangle->getSideB()."<br>";
 echo $triangle->getSideB()."<br>";
 echo $triangle->getPerimeter()."<br>";
 echo $triangle->getArea()."<br>";
}

echo 'Any_triangle'."<br>";
$eny_triangle = new any_triangle(14,12,5);
ret_res($eny_triangle);

echo 'Rectangular_triangle'."<br>";
$rectangular_triangle = new rectangular_triangle(5,5,5);
ret_res($rectangular_triangle);

echo 'Proper_triangle'."<br>";
$proper_triangle = new proper_triangle(3,4,5);
ret_res($proper_triangle);








