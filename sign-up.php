<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tourlancers</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
</head>
<body>
    
     <div id="particles-js">
         
     <div id="login">
           
            <form action="">
                 <div> <h3>Sign Up</h3></div>
                <div>
                    <input type="text" placeholder="username">
                </div>
                <div>
                    <input type="email" placeholder="Email">
                </div>
                <div>
                    <input type="password" placeholder="Password">
                </div>
                
                <input type="submit" value="Sign-Up">
                 <br> <a href="sign-in.php">Sign in here</a> <br>
                 <button id="btn1">Sign in with Google</button>
                 <button id="btn2">Sign in with Facebook</button>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'particles.json', function() {
        console.log('particles.json loaded...');
        });
    </script>
</body>
</html>