<?php 
if (isset ($_POST['submitbutton']))
{    
print "<h1> Titlu H1 </h1> ";
}
else {
    print "<html><head><title> Exemplu html in php</title></head>";
    print "<form method="post" action="isset.php">";
    print "<input type="submit" id="submitbutton" name="submitbutton" value="Valoare submit button">";
    print "</form>";
}
?>