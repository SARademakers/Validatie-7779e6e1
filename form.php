<html>
    <body> 
        <form action="form.php" method="get" class="form">
            <div class="form">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required>
            </div>
                <div class="form">
                <input type="submit" value="Verzenden">
            </div>
        </form>
    </body>
</html>
<?php
if (isset($_POST['email'])) {
    $email = ($_POST["email"]);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $message = "Email is geldig!";
      print($message);
    }else {
        $message = "Email is niet geldig!";
        print($message);
    }
} 
?>