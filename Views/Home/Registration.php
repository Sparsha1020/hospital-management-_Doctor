<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <!-- Registration form -->
    <form action="../../Controllers/Registration.php" method="post" novalidate>
        <h1>Admin - Registration</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" >
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="Register">
</body>
</html>