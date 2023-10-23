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
                    <a href="/registration-form/Category/Architecture&Engineering.php">Architecture & Engineering</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="/registration-form/Category/Architecture&Engineering.php">Architecture Firms</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Architecture&Engineering.php">Engineering Consultants</a></li>
                        <li class="drop-down-link"><a href="/registration-form/Category/Architecture&Engineering.php">Interior Design</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="">Building Material</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Adhesives & Grouting</a></li>
                        <li class="drop-down-link"><a href="#">Bricks & Blocks</a></li>
                        <li class="drop-down-link"><a href="#">Cement Suppliers</a></li>
                        <li class="drop-down-link"><a href="#">Glass Suppliers</a></li>
                        <li class="drop-down-link"><a href="#">Plastics & Composites</a></li>
                        <li class="drop-down-link"><a href="#">Sand & Aggregates</a></li>
                        <li class="drop-down-link"><a href="#">Steel Suppliers</a></li>
                        <li class="drop-down-link"><a href="#">Wood & Timber</a></li>
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
        <p>Building Material</p>
    </div>
    <!-- Content Section -->
    <div class="content-section">
        <div class="article">
            <div class="left-article">
                <h1>Adhesives & Grouting</h1>
                <p>Adhesives and grouts are used to bond building materials together. They are essential for a variety of construction projects, including tiling, masonry, and flooring. Adhesives come in a variety of formulations, each designed for a specific type of material and application. Grout is a thick paste that is used to fill the gaps between tiles or bricks. It helps to seal the surface and prevent water infiltration.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/4246120/pexels-photo-4246120.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/4395556/pexels-photo-4395556.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Bricks & Blocks</h1>
                <p>Bricks and blocks are one of the oldest and most common building materials. They are made from a variety of materials, including clay, concrete, and stone. Bricks and blocks are strong and durable, and they can be used to create a variety of structures, from walls and foundations to chimneys and fences.</p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Cement Suppliers</h1>
                <p>Cement is a key ingredient in concrete, which is one of the most widely used building materials in the world. Cement is made from limestone, clay, and other minerals that are heated to a high temperature. Cement suppliers provide a variety of cement products to meet the needs of different construction projects.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/18656842/pexels-photo-18656842/free-photo-of-cup-of-coffee-and-glassware.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Glass Suppliers</h1>
                <p>Glass is a versatile building material that can be used for a variety of purposes, including windows, doors, and mirrors. Glass suppliers offer a wide variety of glass products in different thicknesses, colors, and finishes.</p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Plastics & Composites</h1>
                <p>Plastics and composites are synthetic materials that are made from a variety of petrochemicals. They are lightweight and durable, and they can be molded into a variety of shapes. Plastics and composites are used in a variety of building applications, including cladding, roofing, and insulation.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/5217889/pexels-photo-5217889.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/18558638/pexels-photo-18558638/free-photo-of-a-person-standing-on-top-of-a-sandy-hill.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Sand & Aggregates</h1>
                <p>Sand and aggregates are used to make concrete, asphalt, and other building materials. Sand is a fine-grained material that is made from crushed rock or coral. Aggregates are larger-grained materials, such as gravel and crushed stone.</p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Steel Suppliers</h1>
                <p>Steel is a strong and versatile building material that is used in a variety of construction projects, including bridges, buildings, and skyscrapers. Steel suppliers offer a wide variety of steel products in different shapes and sizes.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/209235/pexels-photo-209235.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Wood & Timber</h1>
                <p>Wood and timber are natural building materials that have been used for centuries. They are strong and durable, and they can be used to create a variety of structures, from homes and fences to decks and patios.</p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <br><br><br>
    <footer>Copyright | BuildPro | All Right Reserved</footer>
    <script src="https://kit.fontawesome.com/4dfe9f290e.js" crossorigin="anonymous"></script>
</body>

</html>