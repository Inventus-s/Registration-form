<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuildPro</title>
    <link rel="stylesheet" href="Contractors.css">
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
                    <a href="">Contractors</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Concerete Contractos</a></li>
                        <li class="drop-down-link"><a href="#">Demolition Contractors</a></li>
                        <li class="drop-down-link"><a href="#">Electrical Contractors</a></li>
                        <li class="drop-down-link"><a href="#">Flooring & Carpet Contractors</a></li>
                        <li class="drop-down-link"><a href="#">General Contractors</a></li>
                        <li class="drop-down-link"><a href="#">Landscaping</a></li>
                        <li class="drop-down-link"><a href="#">Painting Contractors</a></li>
                        <li class="drop-down-link"><a href="#">Plumbing Contractors</a></li>
                        <li class="drop-down-link"><a href="#">Pools & Spas</a></li>
                        <li class="drop-down-link"><a href="#">Restoration Contractors</a></li>
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
        <p>Contractors</p>
    </div>
    <!-- Content Section -->
    <div class="content-section">
        <div class="article">
            <div class="left-article">
                <h1>Concrete Contractors</h1>
                <p>Concrete contractors specialize in the installation and repair of concrete structures, such as sidewalks, driveways, patios, and foundations.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/2327065/pexels-photo-2327065.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Demolition Contractors</h1>
                <p>Demolition contractors specialize in the safe and efficient demolition of buildings and other structures.</p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Electrical Contractors</h1>
                <p>Electrical contractors specialize in the installation and repair of electrical wiring and equipment.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/2898199/pexels-photo-2898199.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/5088174/pexels-photo-5088174.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Flooring & Carpet Contractors</h1>
                <p>Flooring & carpet contractors specialize in the installation and repair of flooring materials, such as hardwood, tile, and carpet.</p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>General Contractors</h1>
                <p>General contractors are responsible for the overall coordination and execution of construction projects. They may subcontract certain tasks to other contractors, but they are ultimately responsible for the success of the project.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/8470035/pexels-photo-8470035.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Landscaping</h1>
                <p> Landscaping contractors specialize in the design and installation of landscaping features, such as lawns, gardens, and patios.</p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Painting Contractors</h1>
                <p>Painting contractors specialize in the painting of interior and exterior surfaces.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/12992734/pexels-photo-12992734.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/8113779/pexels-photo-8113779.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Plumbing Contractors</h1>
                <p>Plumbing contractors specialize in the installation and repair of plumbing systems.</p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Pools & Spas</h1>
                <p>Pools & spas contractors specialize in the design, construction, and maintenance of swimming pools and spas.</p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/9400920/pexels-photo-9400920.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/5768107/pexels-photo-5768107.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Restoration Contractors</h1>
                <p>Restoration contractors specialize in the repair and restoration of damaged or historic buildings and structures.</p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <br><br><br>
    <footer>Copyright | BuildPro | All Right Reserved</footer>
    <script src="https://kit.fontawesome.com/4dfe9f290e.js" crossorigin="anonymous"></script>
</body>

</html>