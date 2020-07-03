<html><body>
<?php
$num = $_POST['quantity'];
$ch=65;
echo "Pattern 1 <br> <br>";
for ($a=1;$a<=$num;$a++)
{
    for($b=1;$b<=$a;$b++)
    {
        $c=chr($ch);
        echo $c;
        $ch=$ch+1;
    }
    
    echo"<br>";
}
echo "<br>";


echo "Pattern 2 <br> <br>";
for ($x = 1; $x <= $num; $x++) {
    for($w=1;$w<=($num-$x);$w++)
    echo "&nbsp &nbsp";
    for ($y=$x; $y<(2*$x);$y++)
    echo $y." ";
    for ($z=($y-2); $z>=$x;$z--)
    echo $z." ";
    echo "<br>";

  } 
?>
</body></html>