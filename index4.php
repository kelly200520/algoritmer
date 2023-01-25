<?php
function meanNumbers($numbers) {//skapa ett funktion som heter meanNumbers med inputen numbers 
    $sum = 0;// summman av alla nummer som finns i arrayn från början är 0 och skapat en variable för summan så jag kan använda sen
    $count = count($numbers);// Skapat en variable för antalet nummer det finns i arrayn
    foreach($numbers as $number) {
        $sum += $number;//addera sum variablen med number variabeln
    }
    $average= $sum / $count;// varaibeln average står för medelvärdet vilket är summan dividerat med antalet nummer
    return $average;//får tillbaka average resultaten
}
$list = [1,3,5,7,8]; //exemple på nummer i en array 
$average = meanNumbers($list);// medelvärdet är lika med det jag har skrivit i meanNumber funktionen och jag ersätter numbers med lista som jag innan identifierat värdet för det. 
echo $average;//skriv ut average resultaten

?>