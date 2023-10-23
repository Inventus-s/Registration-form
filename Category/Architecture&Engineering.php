<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuildPro</title>
    <link rel="stylesheet" href="Architecture&Engineering.css">
    <style>
        a {
            color: rgb(37, 99, 235, .8);
            text-decoration: none;
        }

        a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <!-- PHP -->
    <?php
    // require_once("checkLogin.php");

    if (isset($_GET['login'])) {
        session_start();
        $name = $_SESSION['userData'];
        // echo $name;
    };


    ?>
    <!-- Header -->
    <header>
        <nav class="main-nav">
            <!-- left Section -->
            <div class="left-head">
                <img src="img/BuildProLogo.png" alt="logo">
            </div>
            <!-- right Section -->
            <div class="right-head">
                <!-- nav bar links -->
                <div class="navbar-up">
                    <div class="home">
                        <i class="fa-solid fa-house"></i>
                        <a href="/registration-form/index.php">Home</a>
                    </div>
                    <div class="register">
                        <i class="fa-solid fa-address-card"></i>
                        <a href="login.php"><?php if (isset($name)) {
                                                echo $name;
                                            } else {
                                                echo "Login/Register";
                                            } ?></a>
                    </div>
                    <div class="login">
                        <i class="fa-solid fa-user"></i>
                        <a href="checkLogin.php">LogOut</a>
                    </div>
                    <div class="about">
                        <i class="fa-solid fa-globe"></i>
                        <a href="#">About us</a>
                    </div>

                </div>
                <div class="navbar-down">
                    <div>
                        <i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/inventus/">Linkedin</a>
                    </div>
                    <div>
                        <i class="fa-brands fa-github"></i>
                        <a href="https://github.com/Inventus-s">GitHub</a>
                    </div>
                    <div>
                        <i class="fa-regular fa-id-badge"></i>
                        <a href="https://wa.me/918076872127">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="sub-nav">
            <ul id="nav-links">
                <li class="nav-link">
                    <a href="">Architecture & Engineering</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Architecture Firms</a></li>
                        <li class="drop-down-link"><a href="#">Engineering Consultants</a></li>
                        <li class="drop-down-link"><a href="#">Interior Design</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="/registration-form/Category/BuildingMaterial.php">Building Material</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Adhesives & Grouting</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Bricks & Blocks</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Cement Suppliers</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Glass Suppliers</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Plastics & Composites</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Sand & Aggregates</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Steel Suppliers</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/BuildingMaterial.php">Wood & Timber</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="/registration-form/Category/ConstructionEquipment.php">Construction Equipment</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="/registration-form/Category/ConstructionEquipment.php">Contractor Tools</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/ConstructionEquipment.php">Heavy Equipment</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/ConstructionEquipment.php">Machinery</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/ConstructionEquipment.php">Vehicles</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/ConstructionEquipment.php">Scaffolding</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/ConstructionEquipment.php">Temporary Buildings</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="/registration-form/Category/Contractors.php">Contractors</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Concerete Contractos</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Demolition Contractors</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Electrical Contractors</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Flooring & Carpet Contractors</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">General Contractors</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Landscaping</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Painting Contractors</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Plumbing Contractors</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Pools & Spas</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Contractors.php">Restoration Contractors</a></li>
                    </ul </li>
                <li class="nav-link">
                    <a href="">Doors & Windows</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Doors</a></li>
                        <li class="drop-down-link"><a href="#">Garage Doors</a></li>
                        <li class="drop-down-link"><a href="#">Gates & Fences</a></li>
                        <li class="drop-down-link"><a href="#">Windows</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="">Electricity</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Appliances & Fixtures</a></li>
                        <li class="drop-down-link"><a href="#">Devices</a></li>
                        <li class="drop-down-link"><a href="#">Wires & Cables</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="">Flooring Material</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Carpets</a></li>
                        <li class="drop-down-link"><a href="#">Ceramic Tile</a></li>
                        <li class="drop-down-link"><a href="#">Marble</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="">HVAC</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Carpets</a></li>
                        <li class="drop-down-link"><a href="#">Ceramic Tile</a></li>
                        <li class="drop-down-link"><a href="#">Marble</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="">Paint</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Exterior Paint</a></li>
                        <li class="drop-down-link"><a href="#">Interior Paint</a></li>
                        <li class="drop-down-link"><a href="#">Surface Coatings</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="">Plumbing</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Plumbing Equipment</a></li>
                        <li class="drop-down-link"><a href="#">Plumbing Fixtures</a></li>
                        <li class="drop-down-link"><a href="#">Gardening Supplies</a></li>
                    </ul>
                </li>
            </ul>

        </nav>
    </header>
    <!-- hero section -->
    <div class="hero-section">
        <img src="https://images.pexels.com/photos/1009928/pexels-photo-1009928.jpeg?auto=compress&cs=tinysrgb&w=6000" alt="contruction">
        <p>Architecture & Engineering</p>
    </div>
    <!-- Content Section -->
    <div class="content-section">
        <div class="article">
            <div class="left-article">
                <h1>Architecture Firms</h1>
                <p>Architecture firms are the creative powerhouses behind the design and construction of remarkable buildings and spaces. They are responsible for transforming ideas into tangible structures, combining artistic vision with practical expertise. Here, you can learn more about the world of architecture firms: <a href="#">Architecture Firm Services</a></p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/1485894/pexels-photo-1485894.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Engineering Consultants</h1>
                <p>Engineering consultants play a critical role in the development of infrastructure, technology, and solutions across various industries. These professionals offer valuable insights, expertise, and problem-solving capabilities. Explore the world of engineering consultants: <a href="#">Engineering Consultancy Services</a> </p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Interior Design</h1>
                <p>Interior design is all about creating functional, visually pleasing, and harmonious spaces. Interior designers have a keen eye for aesthetics, color, and layout, making any environment more inviting. Here's what you should know about interior design: <a href="#">Interior Design Services</a>
                </p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/3255245/pexels-photo-3255245.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
    </div>


    <!-- Footer -->
    <br><br><br>
    <footer>Copyright | BuildPro | All Right Reserved</footer>
    <script src="https://kit.fontawesome.com/4dfe9f290e.js" crossorigin="anonymous"></script>
</body>

</html>