<html>

<head>
    <title>Cinnamax</title>
    <link rel="stylesheet" href="Home.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal&display=swap" rel="stylesheet">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./loginStyle.css">

</head>
<style>
    body {
        background: rgb(243, 247, 248);
        background: linear-gradient(116deg, rgba(243, 247, 248, 1) 0%, rgba(232, 152, 89, 1) 56.00000000000001%, rgba(255, 255, 253, 1) 98%);
    }
</style>
<body>
    <section header="main"> <!--First section-->
        <div class="banner">
            <div class="navbar" id="navbar">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/019/515/472/small_2x/cinnamon-plant-tree-skin-spice-taste-cooking-food-hipster-logo-design-icon-illustration-template-vector.jpg" class="logo">
                <i class="fa fa-times" id="icon" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="Support.php">Service</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <?php
                    session_start();

                    if (isset($_SESSION['name_type'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="login_page.php">Login</a></li>';
                    }
                    ?>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" id="icon" onclick="showmenu()"></i>
            <div class="content">

                <h1> CINNAMAX</h1>
                <p>Explore with your own. We help you What you want.<br>
                    We are the best cinnamon manufactures in all over the world. </p>

                <div>
                    <button type="button"><span></span><a href="products.php">EXPLORE</a></button>
                </div>
            </div>
        </div>


        <section class="place"> <!--Second section-->
            <div class="slideshow-container">
                <div class="mySlides fade">


                    <div class="headTopic">
                        OUR PRODUCTS RANGE
                    </div>

                    <br>
                    <br>
                    <div class="numbertext"></div>
                    <img src="https://i.etsystatic.com/14060140/r/il/252a1e/2173511656/il_fullxfull.2173511656_7p94.jpg" style="width:100%">
                    <div class="text" style="text-align: center;color:grey;font-size:30px">Cinnamon Sticks</div>
                </div>

                <div class="mySlides fade">
                    <div class="headTopic">
                        OUR PRODUCTS RANGE
                    </div>

                    <br>
                    <br>
                    <div class="numbertext"></div>
                    <img src="https://www.perthorganics.com/assets/full/CIPO.png?20211123135602" style="width:100%">
                    <div class="text" style="text-align: center;color:grey;font-size:30px">Cinnamon Powder</div>
                </div>

                <div class="mySlides fade">
                    <div class="headTopic">
                        OUR PRODUCTS RANGE

                    </div>

                    <br>
                    <br>
                    <div class="numbertext"></div>
                    <img src="https://ceyshine.com/wp-content/uploads/2021/01/cinnnamon-bark-oil.png" style="width:100%">
                    <div class="text"style="text-align: center;color:grey;font-size:30px">Cinnamon Oil</div>
                </div>

                <div class="mySlides fade">
                    <div class="headTopic">
                        OUR PRODUCTS RANGE

                    </div>

                    <br>
                    <br>
                    <div class="numbertext"></div>
                    <img src="https://weaveskart.com/wp-content/uploads/2023/05/Travancore-Nutmeg-Whole-%E2%80%93-Shell-removed-Jaiphal-Whole-3-1.jpg" style="width:100%">
                    <div class="text"style="text-align: center;color:grey;font-size:30px">Cinnamon Raws</div>
                </div>

                <div class="mySlides fade">
                    <div class="headTopic">
                        OUR PRODUCTS RANGE

                    </div>

                    <br>
                    <br>
                    <div class="numbertext"></div>
                    <img src="https://ee.lakpura.com/cdn/shop/products/Cinnamonplant.jpg?v=1681208808" style="width:100%">
                    <div class="text"style="text-align: center;color:grey;font-size:30px">Cinnamon Plants</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <script src="Home.js"></script>
        </section>




        <section class="about" id="about">
            <h1 class="headTopic">BEST CEYLON CINNAMON PRODUCTS</h1>
            <div class="row">
                <div class="image">
                    <img src="https://www.shutterstock.com/image-photo/close-cinnamon-sticks-isolated-on-600nw-1147937012.jpg" alt="">
                </div>
                <div class="contentN">
                    <p>Cinnamon is a spice obtained from the inner bark of several tree species from the genus Cinnamomum.
                        Cinnamon is used mainly as an aromatic condiment and flavouring additive in a wide variety of cuisines,
                        sweet and savoury dishes, breakfast cereals, snack foods, bagels, teas,
                        hot chocolate and traditional foods.</p>
                    <button type="button"><span></span><a href="products.php">EXPLORE</a></button>
                </div>
            </div>
        </section>




        <section class="about" id="about">
            <h1 class="headTopic">BEST CEYLON CINNAMON PRODUCTS</h1>
            <div class="row">
                <div class="contentN">
                    <p>Cinnamon is a spice obtained from the inner bark of several tree species from the genus Cinnamomum.
                        Cinnamon is used mainly as an aromatic condiment and flavouring additive in a wide variety of cuisines,
                        sweet and savoury dishes, breakfast cereals, snack foods, bagels, teas,
                        hot chocolate and traditional foods.</p>

                    <button type="button"><span></span><a href="products.php">EXPLORE</a></button>
                </div>
                <div class="image">
                    <img src="https://5.imimg.com/data5/XV/NL/XP/SELLER-101631490/ceylon-cinnamon-powder-500x500.jpg" alt="">
                </div>
            </div>
        </section>



<section class="fearure">
    <div class="text-place">

        <h1 class="headTopic">OUR GOALS</h1>

    </div>
    <div class="feature-box">
        <div class="box">
            <img src="https://classroomclipart.com/images/gallery/Clipart/Black_and_White_Clipart/Technology/business-woman-at-work-on-computer-showing-thumbsup-sign-black-outline-clipart.jpg" alt="">
            <div class="overlay"></div>
            <div class="box-details">
                <h3>Produce & Purchase high quality cinnamon</h3><br>
                <p>Coordinating and analyzing local cinnamon market using knowledge and experience to
                    make best quality cinnamon in to the world</p>
            </div>
        </div>
        <div class="box">
            <img src="https://media.istockphoto.com/id/1397334481/vector/cinnamon-stick-vector-drawing-tied-bunch-of-cinnamon-sticks-and-a-heap-of-ground-spice-hand.jpg?s=612x612&w=0&k=20&c=rLh543Dmy_t_Vg5ZLfnlHa1VsLPj4i_bYXeR_KhvJGY=" alt="">
            <div class="overlay"></div>
            <div class="box-details">
                <h3>Effect continuous improvements of Quality</h3> <br>
                <p>We always are committed to provide our customers the best quality goods.
                    We are continuously raising quality standards.</p>
            </div>
        </div>
        <div class="box">
            <img src="https://img.freepik.com/premium-vector/selection-spices-set-anise-cinnamon-cloves-black-line-art-hand-drawn-doodle-style_529923-652.jpg?w=2000" alt="">
            <div class="overlay"></div>
            <div class="box-details">
                <h3> Satisfaction of Employees</h3><br>
                <p>Our desire and ability is to improve our
                    employees.
                    Our business will grow if our people grow too.</p>
            </div>
        </div>

        <div class="box">
            <img src="https://thumbs.dreamstime.com/b/one-single-line-drawing-young-startup-founders-brainstorming-innovation-ideas-meeting-office-business-presentation-189916654.jpg" alt="">
            <div class="overlay"></div>
            <div class="box-details">
                <h3>Increase market share by 10 percent
                    per each year</h3><br>
                <p>While searching for and finding
                    new buyer in the world and then analyzingtheir customer base and identifying the real buyers then we can get more orders
                    and supplying good quality cinnamon.</p>
            </div>
        </div>
    </div>
</section>



<section id="visitors">
    <div class="text-place">
        <h1 class="headTopic">STRATEGIC OBJECTIVES</h1>
    </div>
    <div class="says-row">
        <div class="says-column">
            <div class="users">
                <img src="https://previews.123rf.com/images/jemastock/jemastock1904/jemastock190437117/122967766-infographics-data-chart-business-icon-black-and-white-vector-illustration-graphic-design.jpg" alt="">
                <div class="users-info">

                </div>
            </div>
            <p>" A few countries like Sri Lanka and Honduras have led the way in slashing maternal mortality." &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br> &nbsp; &nbsp; &nbsp; <br> &nbsp; &nbsp; &nbsp;</p>
        </div>



        <div class="says-column">
            <div class="users">
                <img src="https://media.istockphoto.com/id/1202064591/vector/bag-with-dollar-vector-iconvector-line-icon-quick-and-easy-loan-fast-money-providence.jpg?s=612x612&w=0&k=20&c=-j3NCaTMMXUCqqfeLJS__waIbP6BOFG-PeTCvxs36fU=" alt="">
                <div class="user-info">

                </div>
            </div>
            <p>"Many instances of persecution and killing have occurred in countries with atrocious human rights records such as Sri Lanka,
                Guatemala and the Democratic Republic of Congo." &nbsp; &nbsp; &nbsp; &nbsp; <br> &nbsp; &nbsp; &nbsp;</p>
        </div>



        <div class="says-column">
            <div class="users">
                <img src="https://thumbs.dreamstime.com/b/handshake-hand-shake-agreement-partnership-business-deal-contract-meeting-greeting-black-white-icon-sign-symbol-vector-clipart-276657029.jpg" alt="">
                <div class="user-info">

                </div>
            </div>
            <p> "Today in Sri Lanka, Pope Francis visited a Buddhist temple. When asked why, the Pope said,
                'Just keeping my options open. It's a dicey job market. You never know."
            </p>
        </div>

    </div>
</section>

<iframe src="./footer.html" width="100%" height="400" frameborder="0" scrolling="no"></iframe>


Javascript
<script>
    var navbar = document.getElementById("navbar");

    function showmenu() {
        navbar.style.right = "0";
    }

    function hidemenu() {
        navbar.style.right = "-200px";
    }
</script>

</body>

</html>