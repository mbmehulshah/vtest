<?php 
for($i=1;$i<=100;$i++)
{
    if($i%3!=0 && $i%5!=0)
{
         echo $i; 
    echo "<br/>";
    }
   
if($i%3==0)
{
    echo "Mehul";
    echo "<br/>";
}
if($i%5==0)
{
     echo "Shah";
    echo "<br/>";
}
if($i%3 && $i%5==0)
{
     echo "Mehul Shah";
    echo "<br/>";
}
}
?>
