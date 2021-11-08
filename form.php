<html>
    <head></head>
    <body>
        <tittle> FILL IN FORM</tittle>

        <form action="action.php" method="post">
            <p>Your name: <input type="text" name="name" /></p>
            <p>Your age: <input type="text" name="age" /></p>
            <p><input type="submit" /></p>
        </form>

        Hi <?php echo htmlspecialchars($_POST['name']); ?>.
        You are <?php echo (int)$_POST['age']; ?> years old.
        
    </body>
</html>    