<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
            margin: 1rem 20vw;
            padding: 2rem;
            background-color: rgb(240, 240, 240);
        }

        form>* {
            margin-top: 0.5rem;
        }

        .btn {
            background-color: rgb(0, 0, 0);
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- hmtl form -->

    <form action="./includes/process.includes.php" method="get">

        <h2>Form</h2>

        <label for="name">First Name</label>
        <input type="text" name="name">

        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">

        <label for="lastName">Password</label>
        <input type="password" name="password">

        <br>

        <label for="html">HTML</label>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="css">CSS</label>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="javascript">JavaScript</label>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">

        <br>

        <label for="">Do you hold a 3 year Diploma/Degree?</label>
        <input type="checkbox" name="qualified">

        <br>

        <input type="submit" class="btn">
    </form>

</body>

</html>