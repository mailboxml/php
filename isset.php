<?php  
//if (isset ($_POST['submitbutton']))
//{    
//print "<h1> Titlu H1 </h1> ";
//}
//else {
//    print "<html><head><title> Exemplu html in php</title></head>";
//    print "<form method="post" action="isset.php">";
//    print "<input type="submit" id="submitbutton" name="submitbutton" value="Valoare submit button">";
//    print "</form>";
//}
?> 

<?php
 
 $a = 25;
 $b = 36;

 if( $a==$b) {
    print "a-b";
}
else {
    print "a diferit de b";
}

?>

</br>

<?php 
$a = "a";
$b = "A";

if( $a === $b ) {
    print "$b egal $a";
}

else {
    print "$b nu e $a";
}

?>

</br>

<?php 
$a = 25;
$b = 36;

if( $a != $b ) {
    print "$a inegal $b";
}
else {
    print "$a = $b";
}
?>

</br>
<?php 
$a = "a";
$b = "A";
if( $a !== $b ) {
    print"inegal";
}
else {
    print "egal";
}
?>

</br>
<?php 
$a = 36;
$b = 36;
$result = $a <=> $b;
if( $result === 0 ){
    print "<=>";
}
 else if( $result === 1 ) {
 print ">:1";
}
else {
    print "<:-1";
}
?>
