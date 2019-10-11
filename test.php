<?php
/*echo "Hi there.<br>";
$answer = 6 * 7;
echo "The answer is $answer, what ";
echo "was the question again?<br>";
*/
// $stuff = array("name" => "Chuck","course" => "SI664");

// foreach($stuff as $n => $p)
// {
//         echo $p."<br>";
// }

// function addNumber($x,$y)
// {
//     return $x+$y;
// }

// echo addNumber(2,4);


?>
<?php
if (isset($_POST['doSubmit'])) {
    $guess = $_POST['guess'];
    echo "Your guess is ".$guess;
}?>
<p>Guessing game...</p>
<form method="post" action="">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" id="guess" 
     size="40" value="<?= $oldguess ?>"/></p>
   <input type="submit" name="doSubmit" value="Save Records"/>
</form>