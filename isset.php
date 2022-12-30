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

if ($a == $b) {
    print "a-b";
} else {
    print "a diferit de b";
}

?>

</br>

<?php
$a = "a";
$b = "A";

if ($a === $b) {
    print "$b egal $a";
} else {
    print "$b nu e $a";
}

?>

</br>

<?php
$a = 25;
$b = 36;

if ($a != $b) {
    print "$a inegal $b";
} else {
    print "$a = $b";
}
?>

</br>
<?php
$a = "a";
$b = "A";
if ($a !== $b) {
    print "inegal";
} else {
    print "egal";
}
?>

</br>
<?php
$a = 36;
$b = 36;
$result = $a <=> $b;
if ($result === 0) {
    print "<=>";
} else if ($result === 1) {
    print ">:1";
} else {
    print "<:-1";
}
?>

</br>

<?php
$a = 36;
$b = 24;

print $a <=> $b ? "valori egale" : "a > b";
"b>a";   //gresit!!!
?>


</br>
<?php
$a = 36;
switch ($a) {

    case 10:
        print "10";
        break;

    case 20:
        print "20";
        break;

    case 30:
        print "valoare 30";
        break;

    default:
        print " case = if  -> default = else. break se foloseste dupa fiecare declaratie";
        break;
}
?>

</br>
<p>Functii:</p>
<hr>

<?php
function numeFunctie()
{
    print "variabila din functie";
}

numeFunctie();  // activarea functiei.
?>

</br>

<?php
function altaFunctie($variabila)
{
    print $variabila;
}
altaFunctie("valoarea variabilei este trasmisa in funtie prin intermediul activarii functiei. mai multa flexibilitate pt utilizator");
?>

</br>
<?php

function afiseazaNume($nume, $prenume = "nedefinit")
{
    print "Numele este $nume &nbsp &nbsp &nbsp ";
    if ($prenume != "nedefinit") {
        print "Prenumele este $prenume"; // spatiul alb in interiorul string-ului este ignorat. trebuie &nbsp Non Breaking SPace - non collapsing, non wrapping. 
    }
}

afiseazaNume("Nume1"); // se transmite un string in functie ca argument, trebuie ""
afiseazaNume('Nume1', "Prenume cu ghilimele (mai multe cuvinte necesita \"\", nu '' ") //folosim escape characters \"\"
?>

</br>

<?php

function addtwo($val1, $val2)
{
    $rezultat = $val1 + $val2;
    return $rezultat;
}

print addtwo('1', 2); //functia asteapta 2 argumente. return trimite rezultatul inapoi la program, nu il afiseaza, doar il memoreaza. noi il afisma prin print '1' este convertit din string in int si apoi adaugat.
?>

</br>
<!-- Declararea tipurilor de date  -->

<?php declare(strict_types=1);
        function adaugare( int $val_1, int $val_2) : int {}



?>