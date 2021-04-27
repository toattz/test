<?php
if(empty($_GET["v"]))
{
  echo "welcome\n";
}
else
{
  $value=$_GET["v"];
  echo "I got ";
  if($value==1)
  {
    echo "$value : bee\n";	
  }
  else if($value==2)
  {
    echo "$value : fly\n";	
  }
  /*else if($value==3)
  {
    echo "$value : bettle\n";	
  }
  else if($value==4)
  {
    echo "$value : coach\n";	
  }
  else if($value==5)
  {
    echo "$value : tiger\n";	
  }
  else if($value==6)
  {
    echo "$value : bird\n";	
  }
  else if($value==7)
  {
    echo "$value : lion\n";	
  }
  else if($value==8)
  {
    echo "$value : horse\n";	
  }
  else if($value==9)
  {
    echo "$value : dragon\n";	
  }*/
  else
  {
    echo "$value and out of range.\n";  
  }
}

?>
