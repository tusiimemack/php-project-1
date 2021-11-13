<html>
    <body>
         <tittle>
             <h1> CALCULATOR </h1> 
        </title>

        <form action="" method="post">
        <input type="text" name="num1" value="" palceholder="enter number"> <br>  
        <input type="text" name="num2" value="" palceholder="enter number"> <br>
        <input type="submit" name="A" value="ADD +" ><br>
        <input type="submit" name="S" value="SUBTRACT -" ><br>
        <input type="submit" name="M" value="MULTIPLE *" > <br>
        <input type="submit" name="D" value="DIVIDE /" > <br>  
        
    <form>

    <?php
    
    if(isset($_POST['A'])){
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $add = $num1 + $num2;
      echo "Addition is" . $add;
    }

    if(isset($_POST['A'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $subtract = $num1 - $num2;
        echo "Subtraction is" . $subtract;
      }

      if(isset($_POST['A'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $multiple = $num1 * $num2;
        echo "Multiplication is" . $multiple;
      }

      if(isset($_POST['A'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $divide = $num1 / $num2;
        echo "Divison is" . $divide;
      }

    ?>

    </body>
</html>