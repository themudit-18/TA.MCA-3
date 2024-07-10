<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Student Registration Form</title>
</head>
<body>
    <h2>Enhanced Student Registration Form</h2>
    <form action="con_allInputGET.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="phone" required><br><br>
        
        <label for="satisfaction">Satisfaction Level (1-10):</label>
        <input type="range" id="satisfaction" name="satisfaction" min="1" max="10"><br><br>
        
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br><br>
        
        <!-- <label for="hobbies">Hobbies:</label> -->
        <input type="checkbox" name="hobbies[]" value="Reading">
        <label for="reading">Reading</label>
        <input type="checkbox"  name="hobbies[]" value="Travelling">
        <label for="travelling">Travelling</label>
        <input type="checkbox"  name="hobbies[]" value="Sports">
        <label for="sports">Sports</label><br><br>
        
        <label for="course">Course:</label>
        <select id="course" name="course">
            <option value="Science">Science</option>
            <option value="Commerce">Commerce</option>
            <option value="Arts">Arts</option>
        </select><br><br>
        
        <label for="favcolor">Favorite Color:</label>
        <input type="color" id="favcolor" name="favcolor"><br><br>
        
        <input type="submit" value="Register" name="asdf">
    </form>
</body>
</html>
