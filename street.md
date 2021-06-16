
# when i started the backend work, First thing i did is create the database :
    1- Need to learn how to work with phpmyadmin :
        . when i finished that i created the database and her tables;
        . i make the relationship between them (tables)
        
# Then i siwtched my whole files html to php files :
    . i divid the big files and lines of codes into a small line of codes 
    . i included them into a controller named "index.php"

# Now im in building the back-end of the login & registring of users :  
    0- Connecting with database :
        - https://www.w3schools.com/php/php_mysql_connect.asp

    1- About registring :
        . create the markup with the neccesary data matching with the database
        . checking the password if it match with the confirmPassword
        . verify if the email is already in the database or not 
            .if exist : alert a maessage says that this email exist..
            .if not :  
            . adding the php conditions to verify the data recerved from the users.

            ! Problem found ! : with the regular expressions ..
            Serching for solution from :
                - https://www.php.net/manual/en/function.preg-match.php;
                
        .blocking the paste event in the password input.
            - https://davidwalsh.name/prevent-paste#:~:text=The%20onpaste%20attribute%20lets%20us,myElement.

            . insert the data into database. 
    2- About login :
        . checking the database if the email is already exist
            .if exist : connecting successfuly, redirection to the Home Page
            .if not : 
                .wrong email or password.
                .Notify create one .
# when The login is successful :
    .create the profile page :
    trying redirect to home page :
        - header('Location: /jarida/Home/php/index.php');
        - ! found a problem ! : Warning: Cannot modify header information ;
            *search :
             - https://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php

            from this link i choose this solution :
                + <script> location.replace("/jarida/Home/php/index.php"); </script>

# Add the feature of Articles :
    - Problem js animation logo not working ?!
    trying to solve the problem (Solved);

    - make the loader of the articles . 

    - Upload a File to MySQL Database using PHP - https://www.youtube.com/watch?v=3OUTgnaezNY

    - How to upload image to MySQL database and display it using php :
    https://www.youtube.com/watch?v=Ipa9xAs_nTg

    - Match the date in php with mysql :
    * https://www.geeksforgeeks.org/php-date-format-when-inserting-into-datetime-in-mysql/#:~:text=MySQL%20retrieves%20and%20displays%20DATETIME,change%20it%20and%20display%20it.
    * https://www.php.net/manual/en/function.date.php

    - Add remove article feature.

    - Two bugs appeared : in delete and in add.