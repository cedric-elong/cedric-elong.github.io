<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cedric Elong</title>
</head>
<body>
    <div class="container">
        <header>
            <?php
                include("include/header.php");
            ?>
        </header>

        <div class="row text-center">
            <div class="col-lg-12">
                <img src="images/profile.jpg" width="750px" height="500px" alt="galerie">
            </div>
        </div>

        <div class="row profile">
            <div class="offset-lg-2 col-lg-8 text-center">
                <h2>Hey, I'm Cedric and I'm a Junior Web Developer!!!</h2>
                <p>I believe in focusing on making something work first and then I make it look good. 
                    When I go to a website for the first time, I check for the responsiveness, the user-friendliness,
                    and then the aesthetics. Functionality is no small thing when it comes to accessing a website or an app. 
                    This is what I've started to value most in what I do. As of September 2019, I've been studying Web Development at AFPA Training Center of Roubaix. 
                    As a trainee here, just like any other in this session, our focus is Full Stack Web Development.
                </p>
            </div>

            <div class="col-lg-12 text-center" id="technical_skills"><h2>Technical skills</h2></div>

            <div class="row col-lg-4 offset-lg-4 technical_skills">                
                <div class="col-lg-1 offset-lg-1"><a href="https://sql.sh/" target="_blank" rel="noopener noreferrer"><img src="images/sql.png" alt="SQL"></a></div>
                <div class="col-lg-1 offset-lg-1"><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5" target="_blank" rel="noopener noreferrer"><img src="images/html.png" alt="HTML5"></a></div>
                <div class="col-lg-1 offset-lg-1"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer"><img src="images/css.png" alt="CSS3"></a></div>
                <div class="col-lg-1 offset-lg-1"><a href="https://getbootstrap.com/docs/4.3/getting-started/introduction/" target="_blank" rel="noopener noreferrer"><img src="images/bootstrap.png" alt="Bootstrap"></a></div>
                <div class="col-lg-1 offset-lg-1"><a href="https://www.php.net/manual/en/index.php" target="_blank" rel="noopener noreferrer"><img src="images/php.png" alt="PHP"></a></div>
            </div>
        </div>

        <div class="text-center"><h2>Interests</h2></div>

        <div class="row interests">
            <div class="offset-lg-3 col-lg-3">
                <small class="titre_interests">Writing</small>
                <div><img width="250px" src="images/writing.jpg" alt=""></div>
            </div>

            <div class="col-lg-3">
                <small class="titre_interests">Reading</small>
                <div><img width="250px" src="images/reading.png" alt=""></div>
            </div>
        </div>

        <div class="connect">
            <div>
                <div class="col-lg-12 text-center">
                    <h2>Connect</h2>
                </div>
            </div>
            
            <div>
                <div class="row offset-lg-5 col-lg-2 icones">
                    <div class="col-lg-1 offset-lg-1"><a href="https://www.linkedin.com/in/cedricelong/" target="_blank" rel="noopener noreferrer"><img src="images/linkedin.png" width="40px" height="40px" alt="LinkedIn"></a></div>
                    <div class="col-lg-1 offset-lg-1"><a href="mailto:cedric_elong@yahoo.it" target="_blank" rel="noopener noreferrer"><img src="images/email.png" width="40px" height="40px" alt="eMail"></a></div>
                    <div class="col-lg-1 offset-lg-1"><a href="https://github.com/cedric-elong" target="_blank" rel="noopener noreferrer"><img src="images/github.png" width="40px" height="40px" alt="Github"></a></div>
                </div>                
            </div>
        </div>
        
        <footer>
            <?php
                include("include/footer.php");
            ?>
        </footer>
    </div>
</body>
</html>