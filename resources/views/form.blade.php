<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>

    <h3>Sign Up Form</h3>

    <!-- Form -->
    <form action="/welcome" method="POST">
        @csrf
        <label for="name">First name:</label><br><br>
        <input type="text" name="firstname" id="firstName">
        <br><br>
        <label for="name">Last name:</label><br><br>
        <input type="text" name="lastname" id="lastName"><br><br>

        <label for="gender">Gender</label><br><br>
        <input type="radio" name="gender" id="gender" value="Male">Male
        <br>
        <input type="radio" name="gender" id="gender" value="Female">Female
        <br>
        <input type="radio" name="gender" id="gender" value="Other">Other
        <br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="">
            <option value="Indonesia">Indonesian</option>
            <option value="American">American</option>
        </select>
        <br><br>

        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language" id="language" value="Bahasa Indonesia">Bahasa Indonesia
        <br>
        <input type="checkbox" name="language" id="language" value="English">English
        <br>
        <input type="checkbox" name="language" id="language" value="Other">Other
        <br><br>

        <label for="bio">Bio</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" name="" id="" value="Sign Up">
    </form>
    
</body>
</html>