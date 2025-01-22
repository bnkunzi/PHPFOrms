<!DOCTYPE html>
<html>
    <head>
      <title>HTML FORMS WITH PHP DB CONNECTION</title>
    </head>
    <body>
        <centre>
            <h1>Store Form Data in Database</h1>
            <form action="insert.php" method="post">
                <p>
                    <label for="first_name"> FirstName:</label>
                    <input type="text" name="first_name" id="first_name">
                </p>

                <p>
                  <label for="last_name"> LastName:</label>
                    <input type="text" name="last_name" id="last_name">
                </p>

                <p>
                    <label for="gender"> Gender:</label>
                    <input type="text" name="gender" id="gender">
                </p>

                <p>
                    <label for="address"> Address:</label>
                    <input type="text" name="address" id="address">
                </p>

                <p>
                    <label for="email"> Emailaddress:</label>
                    <input type="text" name="email" id="email">
                </p>
                <p>
                   
                    <input type="submit" value="Submit">
                </p>
            </form>
        </centre>
    </body>
</html>