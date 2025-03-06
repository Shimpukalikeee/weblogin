<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUJRC</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="assets/style2.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="main_body">
        <div class="main">
            <div class="header">
                <div class="title">
                <div class="logo">
                <a href="https://www.arellano.edu.ph" target="_blank">
                 <img src="img/logo.png" alt="logo">
                </a>
                <div class="title_text">
                <div class="school_name">
                ARELLANO UNIVERSITY
                </div>
                <div class="school_name2">
                 JOSE RIZAL CAMPUS
                 </div>
                 </div>
                </div>
                    <div class="nav">
                        <a href="" class="links">Home</a>
                    </div>
                </div>
                <div class="special_buttons">
                    <a href="login.php" class="blue_button">
                        <i class="fa fa-user"></i>
                        <p>
                            Login
                        </p>
                    </a>
                </div>
            </div>
            <div class="body">
                <div class="content">
                    <div class="content_text">
                        <p class="content_text_large">
                            <span class="gold">
                                Arellano University Jose Rizal Campus
                            </span> 
                        </p>
                        <p class="content_text_small">
                            For God and country
                        </p>
                    </div>
                    <div class="content_button">
                        <a href="#taketour" class="learn_more">Take A Tour</a>
                        <a href="#about_us_field" class="about_us">About Us</a>
                    </div>
                </div>
                <div class="slider">
                    
                </div>
            </div>
        </div>
        <div class="gallery" id="taketour">
            <div class="title">
                <div class="title_text_big">
                    Take A Tour
                </div>
            </div>
            <div class="slider">
                <div class="slides">
                    <input type="radio" onchange="change(1)" name="radio-btn" id="radio1" class="radio1" >
                    <input type="radio" onchange="change(2)"name="radio-btn" id="radio2" class="radio2">
                    <input type="radio" onchange="change(3)"name="radio-btn" id="radio3" class="radio3">
                    <input type="radio" onchange="change(4)" name="radio-btn" id="radio4" class="radio4">
                    <div class="collection first">
                        <div class="text">
                            <div class="text_title">
                                Computer Laboratory
                            </div>
                            <div class="text_body">
                            Arellano University also got some facilities such as Computer Laboratory where students can learn a bunch of stuffs about computers                            </div>
                        </div>
                        <div class="picture">
                            <img src="comlab.png" alt="florentino_cayco" width="200" height="300">
                            <p>Computer Laboratory</p>
                        </div>
                    </div>
                    <div class="collection">
                        <div class="text">
                            <div class="text_title">
                                Science Laboratory
                            </div>
                            <div class="text_body">
                            Arellano University also have a science laboratory equipped with some of the best science equipments to use in activities
                            </div>
                        </div>
                        <div class="picture">
                            <img src="scilab.png" alt="extension" width="200" height="300">
                            <p>Science Laboratory</p>
                        </div>
                    </div> 
                    <div class="collection">
                        <div class="text">
                            <div class="text_title">
                                Concert
                            </div>
                            <div class="text_body">
                            Arellano University also hosts concerts yearly! We invite some of the best bands to perform such as Parokya Ni Edgar, I belong to the zoo, and many more.
                            </div>
                        </div>
                        <div class="picture">
                            <img src="concert.png" alt="ncaa" width="200" height="300">
                            <p>Concert</p>
                        </div>
                    </div>
                    <div class="collection">
                        <div class="text">
                            <div class="text_title">
                            NCAA
                        </div>
                            <div class="text_body">
                            Arellano University joined the NCAA in its  Season ’85  in June, 2009 as a guest member. The following year  AU attained   probationary status before the opening of the 86th Season. After three years,  Arellano University gained the regular member  status on the 89th Season, on April 2, 2013.                            </div>
                        </div>
                        <div class="picture">
                            <img src="./assets/ncaa.png" alt="ncaa" width="200" height="300">
                            <p>NCAA</p>
                        </div>
                    </div>  
                </div>

            </div>
            <div class="navigation_button">
                    <label for="radio1" class="radio-btn label_radio1"></label>
                    <label for="radio2" class="radio-btn label_radio2"></label>
                    <label for="radio3" class="radio-btn label_radio3"></label>
                    <label for="radio4" class="radio-btn label_radio4"></label>
            </div>
        </div>
        <div class="footer">
            <p>Arellano University Jose Rizal Campus Ⓒ 2025</p>
            <div class="links">
                <a href="https://www.facebook.com/aujoserizal/" target="_blank">
                    <i class="fa fa-facebook"></i>                  
                    <p>
                        Arellano University
                    </p>
                </a>
                <a href="https://www.arellano.edu.ph/" target="_blank">
                    <i class="fa fa-chain-broken"></i>
                    <p>
                        www.arellano.edu.ph
                    </p>
                </a>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>