<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuildPro</title>
    <link rel="stylesheet" href="ConstructionEquipment.css">
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
                    <a href="">Construction Equipment</a>
                    <ul class="drop-down">
                        <li class="drop-down-link"><a href="#">Contractor Tools</a></li>
                        <li class="drop-down-link"><a href="#">Heavy Equipment</a></li>
                        <li class="drop-down-link"><a href="#">Machinery</a></li>
                        <li class="drop-down-link"><a href="#">Vehicles</a></li>
                        <li class="drop-down-link"><a href="#">Scaffolding</a></li>
                        <li class="drop-down-link"><a href="#">Temporary Buildings</a></li>
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
        <p>Construction Equipment</p>
    </div>
    <!-- Content Section -->
    <div class="content-section">
        <div class="article">
            <div class="left-article">
                <h1>Contractor Tools</h1>
                <p>Contractor tools are small, portable tools that are commonly used by construction workers. These tools are typically used for tasks such as:
                <ul class="li-article">
                    <li>Cutting</li>
                    <li>Drilling</li>
                    <li>Fastening</li>
                    <li>Measuring</li>
                    <li>Sawing</li>
                </ul>
                </p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/1770801/pexels-photo-1770801.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Heavy Equipment</h1>
                <p>Heavy equipment is large, powerful machinery that is used for heavy-duty construction tasks. These machines are typically expensive to purchase and operate, but they are essential for completing many large-scale construction projects. <br> Some examples of heavy equipment include:
                <ul class="li-article">
                    <li>Bulldozers</li>
                    <li>Excavators</li>
                    <li>Graders</li>
                    <li>Loaders</li>
                    <li>Cranes</li>
                    <li>Backhoes</li>
                    <li>Asphalt pavers</li>
                    <li>Concrete mixers</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Machinery</h1>
                <p>Machinery is a general term that refers to any type of machine that is used to perform a task. In the context of construction, machinery typically refers to large, complex machines that are used for tasks such as:
                <ul class="li-article">
                    <li>Mixing concrete</li>
                    <li>Crushing stone</li>
                    <li>Cutting steel</li>
                    <li>Fabricating wood</li>
                </ul>
                </p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/1145434/pexels-photo-1145434.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/5328418/pexels-photo-5328418.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Vehicles</h1>
                <p>Vehicles are used in the construction industry for a variety of purposes, such as:
                <ul class="li-article">
                    <li>Transporting workers and materials</li>
                    <li>Hauling equipment</li>
                    <li>Grading and paving</li>
                    <li>Lifting and rigging</li>
                    <li>Emergency response</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="article">
            <div class="left-article">
                <h1>Scaffolding</h1>
                <p>Scaffolding is a temporary structure that is used to support workers and materials at elevated heights. Scaffolding is typically made of metal or wood, and it can be erected in a variety of configurations to meet the needs of the specific construction project. <br> Some examples of scaffolding include:
                <ul class="li-article">
                    <li>Tube and clamp scaffolding</li>
                    <li>Frame scaffolding</li>
                    <li>Truss scaffolding</li>
                    <li>Suspended scaffolding</li>
                </ul>
                </p>
            </div>
            <div class="right-article">
                <img src="https://images.pexels.com/photos/1292257/pexels-photo-1292257.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
        </div>
        <div class="article">
            <div class="right-article">
                <img src="https://images.pexels.com/photos/4959222/pexels-photo-4959222.jpeg?auto=compress&cs=tinysrgb&w=600" alt="construction-img">
            </div>
            <div class="left-article">
                <h1>Temporary Buildings</h1>
                <p>Temporary buildings are structures that are erected for a specific period of time, such as for the duration of a construction project. Temporary buildings can be used for a variety of purposes, such as:
                <ul class="li-article">
                    <li>Offices</li>
                    <li>Storage</li>
                    <li>Break rooms</li>
                    <li>Toilets</li>
                    <li>Showers</li>
                </ul>
                </p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <br><br><br>
    <footer>Copyright | BuildPro | All Right Reserved</footer>
    <script src="https://kit.fontawesome.com/4dfe9f290e.js" crossorigin="anonymous"></script>
</body>

</html>