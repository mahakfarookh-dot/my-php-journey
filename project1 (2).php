<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <img class="kcmt" src="kcmt.jpg" alt="KCMT Bareilly">
   
    <div class="container"> 
        <h1>Welcome to KCMT Bareilly spain Trip Form</h1>
        <p>Enter Your details to confirm your participation in the Trip</p>

        <p class="submitMsg"> Thanks for Submitting your form</p>
     
        <form action="project1.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            
            
        </form>
    </div>
    <script src="project1.js"></script>
   

</body>
</html>
