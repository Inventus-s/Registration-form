<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='js/jQuery.js'></script>
</head>
<body>
    <form method="post" action="checklogin.php" onsubmit="return checkValue()">
        <div>Please enter your username and passowrd</div>
        <div>
            <label>Username/Email</label>
            <input name="username" id="username" class=""/>
            <span class="userErr"></span>
        </div>
        <div id="xyz">
            <label>Passowrd</label>
            <input type="password" name="password" id="password" class=""/>
            <span class="passErr"></span>
        </div>
        <div class="error"></div>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

<script>

function checkValue() {
    alert('I am called');
    var usernameVal = $('#username').val();
    var passwordVal = $('#password').val();

    

    if(username.trim() == '') {
        $('.userErr').html('Please Enter Valid Username');
        return false;
    } 
    if(password.trim() == '') {
        $('.passErr').html('Please Enter Valid Password');
        return false;
    }
    if(username.trim() != '' && password.trim() != ''){
        $.ajax({
            url:'checkLogin.php',
            data:{username:usernameVal,password:passwordVal},
            type:'post',
            success:function(response){
                if(response === true){
                    window.location = 'userDetails.php';
                } else {
                    $('.error').html('Please Enter Valid Username and Password');
                }
            }
        })
        return false;
    }

}


</script>
</html>