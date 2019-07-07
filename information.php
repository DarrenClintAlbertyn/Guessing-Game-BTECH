<?php
/**
  Darren Albertyn 
  Riyaad Cader
*/
?>
<html>
	<head>
		<title>	How to Play Student Crusher</title>
    <?php
        include 'header/header.php';
    ?>
    <script>
$(document).ready(function()
{
    $("button").click(function()
    {
      $("#div1").fadeIn();
      $("#div2").fadeIn(1000);
      $("#div3").fadeIn(3000);
    });
});
</script>
	</head>
      <body>
          <p>
            <center>
              <br>
              <h2> How to Play Student Crusher</h2>
              <button>View Steps to Play Student Crusher</button>
                <br><div id="div1" style="width:200px;height:20px;display:none;"><ul><b>Step 1:</b><li>Enter your name and Select a Category</li></ul></div><br>
                <br><div id="div2" style="width:200px;height:20px;display:none;"><ul><b>Step 2:</b><li>Enter Random Letters and guess the Word</li></ul></div><br>
                <br><div id="div3" style="width:200px;height:20px;display:none;"><ul><b>Step 3:</b><li>A Popup will let you know if you guessed correctly</li></ul></div><br>
            </center>
          </p>
      </body>
      <footer>
        <?php
          include 'footer/footer.php';
        ?>
      </footer>
</html>
