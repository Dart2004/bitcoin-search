<html>
  <head>
    <title>Bitcoins</title>
  </head>
  <body>
     <?php
      $name=$_POST["name"];
      $idea=$_POST["idea"];
      echo "<div style='text-align:center'>";
      echo "<h1>MAKE ME RICH</h1>";
      echo "<form action='index2.php' method='post'>";
      echo "<input id='name' value='$name' name='name' placeholder='Type in your name'>";
      if ($name=='mitleser'||$name=='Mitleser'){
        echo "<br>";
        echo file_get_contents("ideas.txt");
      }
      else if ($name=='' || $idea==''){
        echo "<input id='idea' name='idea' placeholder='Type in a bitcoin help' style='width:300'>";
        echo "<input type='submit' value='POST A BITCOIN'>";
        echo "</form>";
        echo "</div>";
      }
      else {
        $ideas=@fopen("ideas.txt","a+");
        fwrite($ideas,$name.":    ".$idea."<br>");
      }
     ?>
  </body>
</html>
