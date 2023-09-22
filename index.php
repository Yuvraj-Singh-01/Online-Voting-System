<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sty.css">
    <title>Online Voting</title>
</head>

<body>

    <div class="title">
        <h1>Online Voting System</h1>
    </div>
    <div class="container">
        <div class="left"></div>
        <div class="right">
        <form action="api/login.php" method="POST">
            <div class="t">
                <h1>Fill The Form</h1>
            </div>
            <div class="fr">
                <label class="u">Number:</label>
                <input type="number"  name="mob" class="input" placeholder="Enter Number">
            </div>
            <div class="fr">
                <label class="u">Password:</label>
                <input type="password" name="pass" class="input" placeholder="Enter Password">
            </div>
            <label class="u">You Are ? </label><select name="role" class="sel">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select><br><br>
            <button class="btn">Login</button><br><br>
            <div class="cen">New User? <a href="routes/register.php">Register Here</a></div>
        </form>
        </div>
    </div>

</body>
</html>

