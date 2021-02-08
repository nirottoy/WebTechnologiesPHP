<!DOCTYPE html>
<html>
<body>

<h1>Problem Three</h1>

<?php
 $length = 14;  
 $width = 14;

 echo "Area of rectangle is $length * $width= " . ($length * $width) . "<br />";
 echo "Perimeter of rectangle is $length * $width= " . (2*($length + $width)) . "<br />";

 if($length === $width){
 echo "The Shape is a Square.";
}
?>

</body>
</html>