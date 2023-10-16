<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        .userErr,
        .passErr,
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <section>
        <div class="left-section">
            <img src="https://accounts.pwskills.com/images/signin-banner.svg" alt="loginImg">
        </div>
        <div class="right-section">
            <a href="home.php" ><img id="right-img" src="images/BuildPro-logos_black.png" alt="logo" style="width:30%";></a>
            <h1>Get Onboard and Start Building with Confidence</h1>
            <form method="post" action="checklogin.php" onsubmit="return checkValue()">
            <br>
                <div id="form-heading">Please enter your username and passowrd</div>
                <br>
                <div>
                    <!-- <label>Username/Email</label> -->
                    <input name="username" id="username" class="" placeholder="  Username/Email"/>
                    <span class="userErr"></span>
                </div>
                <br>
                <div id="xyz">
                    <!-- <label>Passowrd</label> -->
                    <input type="password" name="password" id="password" class="" placeholder="  Enter Passowrd"/>
                    <span class="passErr"></span>
                </div>
                <br>
                <div class="error"></div>
                <input type="submit" id="submit" name="submit" value="Submit" />
            </form>
        </div>

    </section>

</body>

<script>
    function checkValue() {
        alert('I am called');
        var usernameVal = $('#username').val();
        var passwordVal = $('#password').val();



        if (usernameVal.trim() == '') {
            $('.userErr').html('Please Enter Valid Username');
            // return false;
        }
        if (passwordVal.trim() == '') {
            $('.passErr').html('Please Enter Valid Password');
            // return false;
        }
        if (usernameVal.trim() != '' && passwordVal.trim() != '') {
            $.ajax({
                url: 'checkLogin.php',
                data: {
                    username: usernameVal,
                    password: passwordVal
                },
                type: 'post',
                success: function(response) {
                    if (response === 'true') {
                        window.location = 'userDetails.php';
                    } else {
                        $('.error').html('Please Enter Valid Username and Password');
                    }
                }
            })

        }
        return false;

    }
</script>

</html>