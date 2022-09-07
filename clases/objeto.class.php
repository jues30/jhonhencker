<?php
class objeto
{
 public static function factoria($type)
 {
  if(class_exists($type))
  {
   return new $type();
  }
  else
   echo "<br />Error. La clase '".$type."' no existe";
   return 0;
  }
}
