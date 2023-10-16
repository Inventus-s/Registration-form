<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>
  <link rel="stylesheet" href="userForm.css" />
</head>

<body>
<!-- edit details -->
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        require_once('connection.php');
        // $conn = mysqli_connect('localhost', 'root', '', 'phpclassjuly2023');
        $fetch_query = 'select * from user_details where id =' . $id;
        $result = mysqli_query($conn, $fetch_query);
        $result  = mysqli_fetch_assoc($result);
        $hobbies = [];
        if (isset($result['Hobby'])) {
            $hobbies = explode(',', $result['Hobby']);
        }
    }
    ?>

    <!-- ProfileImage -->
    <?php
      if(isset($result['Image'])){
    ?>
      <img style="position: fixed;left: 100px; border-radius: 50%;" src="images/<?php echo $result['Image']; ?>" alt="profileImage" width="200px" >
    <?php
      }
    ?>

<!-- User form -->
  <div class="container">
    <h2>Registration Form</h2>
    <div class="form-container">
      <form method="post" action="userAction.php" enctype="multipart/form-data">
        <!-- for text input -->
        <div class="name input">
          <i class="fa-solid fa-user"></i>
          <input type="text" id="name" name="username" value="<?php if(isset($result['Name'])){echo $result['Name'];}?>" />
        </div>
        <!-- for email -->
        <div class="email input">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" name="usermail" id="email" value="<?php if(isset($result['Email'])){echo $result['Email'];}?>" placeholder="a@example.com" />
        </div>
        <div class="pass input">
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="userpass" id="password" placeholder="Enter Password" />
        </div>
        <div class="address input">
          <i class="fa-solid fa-address-book"></i>
          <textarea name="useraddress" id="address" cols="30" rows="1" placeholder="Enter Address"><?php if(isset($result['Address'])){echo $result['Address'];}?></textarea>
        </div>
        <!-- For DOB -->
        <div class="dob input">
          <i class="fa-solid fa-calendar-days"></i>
          <input type="date" name="userage" id="dob" value="<?php if(isset($result['DOB'])){echo $result['DOB'];}?>"/>
        </div>
        <!-- Education -->
        <div class="edu input">
          <i class="fa-solid fa-user-graduate"></i>
          <select id="education" name="education">
            <option <?php if(isset($result['Education']) && $result['Education'] == 'Not Selected' ){echo 'selected';}?> value="Not Selected">-- Your Education --</option>
            <option <?php if(isset($result['Education']) && $result['Education'] == 'no-edu' ){echo 'selected';}?> value="no-edu">No formal education</option>
            <option <?php if(isset($result['Education']) && $result['Education'] == 'primary' ){echo 'selected';}?> value="primary">Primary education</option>
            <option <?php if(isset($result['Education']) && $result['Education'] == 'secondary' ){echo 'selected';}?> value="secondary">
              Secondary education or high school
            </option>
            <option <?php if(isset($result['Education']) && $result['Education'] == 'bachelor' ){echo 'selected';}?> value="bachelor">Bachelor's degree</option>
            <option <?php if(isset($result['Education']) && $result['Education'] == 'master' ){echo 'selected';}?> value="master">Master's degree</option>
            <option <?php if(isset($result['Education']) && $result['Education'] == 'phd' ){echo 'selected';}?> value="phd">Doctorate or higher</option>
          </select>
        </div>
        <!-- For Gender -->
        <div class="gender input">
          <input type="radio" name="gender" id="male" value="male" <?php if(isset($result['Gender']) && $result['Gender'] == 'male' ){echo 'checked';}?>/>
          <label for="male">Male</label>
          <input type="radio" name="gender" id="female" value="female" <?php if(isset($result['Gender']) && $result['Gender'] == 'female' ){echo 'checked';}?> />
          <label for="female">Female</label>
          <!-- <input type="radio" name="gender" id="other" value="other">
                    <label for="other">Other</label> -->
        </div>
        <!-- For hobby -->
        <h4 class="hobby-p">What are your hoobies ?</h4>
        <div class="hobbies input">
          <input type="checkbox" name="hobbies[0]" id="reading" value="reading" <?php if(isset($result['Hobby']) && in_array("reading", $hobbies)){echo 'checked';}?> />
          <label for="reading">Reading</label>
          <br />
          <input type="checkbox" name="hobbies[1]" id="writing" value="writing" <?php if(isset($result['Hobby']) && in_array("writing", $hobbies)){echo 'checked';}?> />
          <label for="writing">Writing</label>
          <br />
          <input type="checkbox" name="hobbies[2]" id="cooking" value="cooking" <?php if(isset($result['Hobby']) && in_array("cooking", $hobbies)){echo 'checked';}?> />
          <label for="cooking">Cooking</label>
          <br />
          <input type="checkbox" name="hobbies[3]" id="drawing" value="drawing" <?php if(isset($result['Hobby']) && in_array("drawing", $hobbies)){echo 'checked';}?> />
          <label for="drawing">Drawing</label>
        </div>
        <div class="file input">
          <h4 class="file-p">Profile Image:</h4>
          <input type="file" name="fileToUpload" value="" id="file" />
        </div>
        <div class="terms input">
          <input type="checkbox" />
          <label for="">I Accept the terms & conditins</label>
        </div>
        <div class="submit input">
          <input type="submit" name="formSubmit" value="Submit" id="formSubmit" />
        </div>
      </form>
    </div>
  </div>
  <!-- forms -->
  <!-- get & post method for form submission and url visibility -->

  <br />
  <br />
  <p>&copy; Belongs to <b>Mukund Kumar</b></p>

  <!-- <?php
        print_r($_POST);

        function arr2stdr()
        {
          $arr = implode(",", $_POST['hobbies']);
          echo $arr;
        }

        echo "<h1>Result</h1>";



        if (isset($_POST)) {
          foreach ($_POST as $k => $v) {
            if ($k == 'hobbies') {
              echo $k . '=';
              arr2str();
              echo "<br>";
            } else {
              echo $k . "=" . $v;
              echo "<br>";
            }
          }
        }




        // if (isset($_POST)) {
        //     echo $_POST['username'];
        // };
        ?> -->
  <script src="https://kit.fontawesome.com/4dfe9f290e.js" crossorigin="anonymous"></script>
</body>

</html>