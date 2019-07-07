<?php
/**
	Darren Albertyn 
	Riyaad Cader
*/
session_start();
include 'dbconnection.php';

class StudentCrusher extends Check
{
	public $name;
		
	public function setName($playerName)
	{
		$this->name = $playerName;
	}
	
	public function getName()
	{
		return $this->name;
	}
}

class Check extends RetrieveWord
{
		public function checkNewFunction($word,$guess)
	{

		$wordVar = trim(preg_replace('/\s+/','', strtolower($word)));
		echo '<br>';
		$counter = 20;
	
		if(in_array($guess, range('a','z')))
		{

			if (!in_array($guess, $_SESSION['guesses']) )
	        	{
	            	//Check if guess is in the word
		            if (strpos($wordVar, $guess) != TRUE)
		            {
		                --$counter;
		            }

	            $_SESSION['guesses'][] = $guess;
	        } 
		}

		if($counter != 0)
		{
		    $spaceLeft = 0;
		    $space = '';

	    	for($i = 0; $i < strlen($wordVar); ++$i)
		    {
		        if (in_array($wordVar[$i], $_SESSION['guesses']) )
		        {
		            $space .= $wordVar[$i];   
		        } 
		        else
		        {
		            $space .= '_';
		            --$spaceLeft;
		        }
		        $space .= ' ';
		    }

	    $space = trim($space);
	        
	    echo '<h1><center><b><p>'.$space.'</p></b></center></h1>'."\n";
	    
	    // If there are no letters left to guess, game is over        
	    if($spaceLeft == 0 )
	    {

	        echo "\n\n" . '<center><b><p><a href="index.php">Congratulations You guessed correctly, Play Again?</a></b></center></p>';  
	     
	        // Unset word so new game will begin
	        unset($wordVar);
	        session_destroy();
	        
	    } 

	}
}

}
class RetrieveWord
{
	public function wordList($gameType)
	{
			//Finds number of rows in the database for Game Type and selects a random one
			$connect = dbConnect();
			$wordsQuery ="SELECT * FROM $gameType";
			$result = mysqli_query($connect,$wordsQuery);
			$numRows = mysqli_num_rows($result);
			
			echo '<center><b>You Are Ready To Play<br> Welcome , '.$_SESSION['name'].'</b></center>';
			//randomizing the selection of the Id in database
			$wordIndex = rand(1,$numRows);
			//Setting the random word Index
			$_SESSION['wordIndex'] = $wordIndex;
			//echo '<center><b>Index id of the Random Word'.'-'.$wordIndex.'</b></center>';
			
			//Check if rows exist
			if ($numRows == 0) 
			{
				$gameError = "Please Ensure you imported Database File Correctly";
	
			} else 
			{
				// Grab a word random word from database and set it
				$matchId = "SELECT word FROM $gameType WHERE id=".$wordIndex;
				$result = mysqli_query($connect, $matchId);
				$row = mysqli_fetch_assoc($result);
				
				$word = $row['word'];
				//echo '<center><b>Random Word from Database'.'-'.$word.'</b></center>';				
				// Set the session variable for the word
				$_SESSION['word'] = strtolower($word);
				// Set the session variable and Get length of word
				$_SESSION['wordLength'] = strlen($word);
			}
	}
}

class Hint
{
	
	public function hint($gameType,$wordIndex)
	{
		//fetching hint from database with the set random ID
		$connect = dbConnect();
		$hintQuery = "SELECT hint FROM $gameType WHERE id=".$wordIndex;
		$hintResult = mysqli_query($connect,$hintQuery);
		$hintRow = mysqli_fetch_assoc($hintResult);
		echo '<center><b>'.$hintRow['hint'].'</center></b>';
	}

}

class PullQuestions
{
	public function pullQuestions($gameType,$wordId)
	{
		//fetching Questions from database with the set random ID
		$connect = dbConnect();
		$question = "SELECT question FROM $gameType WHERE id=".$wordId;
		$requestQuestions = mysqli_query($connect,$question);
		$row1 = mysqli_fetch_assoc($requestQuestions);
		echo '<center><b><h2>'.$row1['question'].'</h2></center></b>';

	}
}

?>