<html>
	<?php
	/**
		Darren Albertyn 
		Riyaad Cader
	*/
		session_start();
		include 'dbconnection/dboperations.php';
		$hintObject = new Hint();
		$pullQuestionsObject = new PullQuestions();
		$gameObj = new StudentCrusher();
	?>
	<div>
		<?php
			//includes the header page
			include 'header/header.php';
		?>
	</div>
	<body>
		<form id='nameForm' method='POST' action='<?php $_SERVER['PHP_SELF'];?>'>
			<p>Enter your name<input type='text' name='name' required='Add Name First'></p>
			<p><input type='radio' name='radio' value='fruits' required='Select a Category'>Fruits
			<input type='radio' name='radio' value='animals' required='Select a Category'>Animals
			<input type='radio' name='radio' value='continents' required='Select a Category'>Continents
			<input type='submit' name='submit' value='Set Game'></p>
		</form>
		<form id='checkForm' action='<?php $_SERVER['PHP_SELF'];?>' method='POST''>
			<center><b><input type='text' name='guess'><input type='submit' name='check' value='Check Letter' pattern='[A-Za-z]{1}'><br><input type='submit' name='hintBtn' value='Hint'></b></center>
		</form>
			<?php
				if(isset($_POST['check']))
				{
					$guess = $_POST['guess'];
					
					if(!is_numeric($guess) & strlen($guess) == 1 )
					{
						$_SESSION['word'] = strtolower($_SESSION['word']);
				    	$gameObj->checkNewFunction($_SESSION['word'],strtolower($guess));
					}
					else
					{
						echo "<h3><center><b><p>Only accepts a Single Letter</p></b></center></h3>";
					}
					
				}
				else if(isset($_POST['hintBtn']))
				{
					echo $hintObject->hint($_SESSION['$type'],$_SESSION['wordIndex']);

				}
			?>
			<?php
				if(isset($_POST['submit']))
				{
					$name = $_POST['name'];
					//stores name in session
					$_SESSION['name'] = $name;
					$gameObj->setName($name);

					if(isset($_POST['radio']))
						{
							//gets the radio button option
							$type = strtolower($_POST['radio']);
							$_SESSION['$type'] = $type;
						}else
						{
							echo '<h3><center><b><p>Select a Category First</p></b></center></h3>';
							die();
							exit();
						}
					//Shows the type selected
					echo '<center><b>'.'The Category Selected is '.$_SESSION['$type'].'</b></center>';
					//function fetches ID and randomizes word and stores in a variable
					$gameObj->wordList($_SESSION['$type']);
					$pullQuestionsObject->pullQuestions($_SESSION['$type'],$_SESSION['wordIndex']);
				}
			?>
	</body>
	<footer>
		<?php
			//includes the footer page
			include 'footer/footer.php';
		?>
	</footer>
</html>
