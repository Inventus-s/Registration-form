<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="userDetails.css">
</head>

<body>
    <div class="container">
        <div class="php">
            <!-- DB Connection -->
            <?php
            require_once('connection.php');
            $fetch_query = "select * from user_details";
            $result = mysqli_query($conn, $fetch_query);
            
            session_start();
            if (!isset($_SESSION['userData'])) {
                header('location:login.php');
            }
            ?>
        </div>
        <img src="img/dualBall.svg" alt="animation">
        <div class="profileImage">
            <img src="img/pic.jpeg" alt="ProfileImage">
        </div>
    </div>



    <h1>Result</h1>
    <h2><a href="checkLogin.php">Log Out</a></h2>
    <!-- Table for Result -->
    <table border="">
        <tr>
            <td>S. No.</td>
            <td>Image</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Address</td>
            <td>DOB</td>
            <td>Gender</td>
            <td>Hobbies</td>
            <td>Education</td>
            <td colspan="2">Action</td>
        </tr>
        <?php
        $i = 1;
        while ($r = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $r['ID']; ?></td>
                <td><img src="images/<?php echo $r['Image']; ?>" alt="profileImage" width="100px"> </td>
                <td><?php echo $r["Name"]; ?></td>
                <td><?php echo $r["Email"]; ?></td>
                <td><?php echo $r["Password"]; ?></td>
                <td><?php echo $r["Address"]; ?></td>
                <td><?php echo $r["DOB"]; ?></td>
                <td><?php echo $r["Gender"]; ?></td>
                <td><?php echo $r['Hobby']; ?></td>
                <td><?php echo $r["Education"]; ?></td>
                <td><a href="userForm.php?id=<?php echo $r['ID'] ?>">Edit</a></td>
                <td><a href="userAction.php?delete=<?php echo $r['ID'] ?>">Delete</a></td>
            </tr>
        <?php
            $i++;
        };
        ?>
    </table>
</body>

</html>