<!DOCTYPE html>
<html>
    <head>
        <title>
            New_Account_Form
        </title>
    </head>

    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action = "/welcome">
            <label for="namaD">First Name : </label><br>
            <input type="text" id="namaD" name="first_name"><br>
            <label for="namaB">Last Name : </label><br>
            <input type="text" id="namaB" name="last_name"><br>

            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male </label><br>
         
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female </label><br>
           
            <input type="radio" id="Other" name="gender" value="Other">
            <label for="Other">Other </label><br>
            <br>

            <label for="nationality">Nationality:</label><br>
                <select name="nationality" id="nationality"><br>
                    <option value="indo">Indonesian</option>
                    <option value="inggris">United States</option>
                    <option value="lain-lain">Other</option>
                </select>
            <br>
            <br>
            <span>Language Spoken:</span>
            <br>
            <input type="checkbox" name="Indo" id="Indo" value="Indo">
            <label for="Indo">Indonesia</label><br>

            <input type="checkbox" name="Inggris" id="Inggris" value="Inggris">
            <label for="Inggris">English</label><br>

            <input type="checkbox" name="other" id="other" value="other">
            <label for="other">Other</label><br>
            <br>
            
            <label for="bio">Bio:</label>
            <br>
            <br>
            <textarea cols="50" rows="10"></textarea>
            <br>
            <br>
            <input type = "submit">
        </form>
    </body>
</html>