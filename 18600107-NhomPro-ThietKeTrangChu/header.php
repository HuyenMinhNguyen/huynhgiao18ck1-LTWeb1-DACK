<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css" />
<script type="text/javascript" charset="utf-8" src="js/dropdown.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Roboto", sans-serif;
    }
    
    .w3-sidebar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;
    }
</style>

<body>

    <!-- Navbar -->
    <header>
        <div class="w3-top">
            <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-theme-l1">MYSHOP</a>
                <a href="#" class="w3-bar-item w3-button  w3-theme-l1 w3-hover-white">Home </a>
                <input type="text" class="w3-bar-item w3-input w3-light-grey   w3-mobile" placeholder="Search..">
                <button class="w3-bar-item w3-button w3-green w3-mobile">Go</button>
                <a href="#" class="w3-bar-item w3-button  w3-theme-l1 w3-hover-white w3-right">Login</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">Oder</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">Cart</a>

            </div>
        </div>
    </header>
    <!-- Sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
            <i class="fa fa-remove"></i>
        </a>
        <a class="w3-bar-item w3-button w3-hover-black" href="#">Accord Mobiles</a>
        <a class="w3-bar-item w3-button w3-hover-black" href="#">Ace Mobile</a>
        <a class="w3-bar-item w3-button w3-hover-black" href="#">Acer Mobile</a>
        <a class="w3-bar-item w3-button w3-hover-black" href="#">HTC</a>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main" style="margin-left:250px">

        <div class="w3-row w3-padding-64">
            <div class="w3-row w3-padding-64">
                <div class="w3-third w3-container">
                    <div class="slider" id="main-slider">
                        <!-- outermost container element -->
                        <div class="slider-wrapper">
                            <!-- innermost wrapper element -->
                            <img src="images/slide_4.jpg" alt="First" class="slide" />
                            <img src="images/slide1.jpg" alt="Second" class="slide" />
                            <img src="images/slide2.jpg" alt="Third" class="slide" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-row">
            <div class="row">
                <div class="col-sm-4">
                    <p>Some text..</p>
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </div>
                <div class="col-sm-4">
                    <p>Some text..</p>
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </div>
                <div class="col-sm-4">
                    <p>Some text..</p>
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </div>

            </div>
        </div>


        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a class="w3-button w3-black" href="#">1</a>
                <a class="w3-button w3-hover-black" href="#">2</a>
                <a class="w3-button w3-hover-black" href="#">3</a>
                <a class="w3-button w3-hover-black" href="#">4</a>
                <a class="w3-button w3-hover-black" href="#">5</a>
                <a class="w3-button w3-hover-black" href="#">»</a>
            </div>
        </div>

        <footer id="myFooter">
            <div class="w3-container w3-theme-l2 w3-padding-32">
                <h4>Footer</h4>
            </div>

            <div class="w3-container w3-theme-l1">
                <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
            </div>
        </footer>

        <!-- END MAIN -->
    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>

</body>

</html>