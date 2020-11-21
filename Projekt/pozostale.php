<?php
session_start();
if($_SESSION['islogin']==''){
    $_SESSION['islogin'] = 'false';
}
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Pozostałe</title>
    <link rel="icon" href="CSS/Main/logo-ur.jpg" type="image/x-icon">
    <!-- Style -->
    <link rel="stylesheet" href="CSS/Main/main.css">
    <link rel="stylesheet" href="CSS/Main/res_view.css">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a79ff52c1c.js" crossorigin="anonymous"></script>

</head>

<body>

<div class="MAIN">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="#">
                <img src="./CSS/Main/logo-ur.jpg" class="d-inline-block align-top Logo_IMG" alt="">
            </a>
            <b class="Text_Logo">Uniwersytet Rzeszowski</b>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class='navbar-nav mx-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='strona_glowna.php'><i class='fas fa-home fa-lg'></i> <br>Strona główna</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='regulamin.php'><i class='far fa-list-alt fa-lg'></i> <br>Regulamin</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='wynajem_sal.php'><i class='fas fa-city fa-lg'></i> <br>Wynajem sal</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='kontakt.php'><i class='fas fa-phone-alt fa-lg'></i> <br>Kontakt</a>
                </li>
                <?php
                    if ($_SESSION['islogin'] == 'true') {
                        if($_SESSION['username'] == 'student' || $_SESSION['username'] == 'uzytkownik' || $_SESSION['username'] == 'pracownik'){
                            echo    '<li class="nav-item">
                                        <a class="nav-link" href="podglad_konta_uzytkownik.php"><i class="far fa-user-circle fa-lg"></i> <br>Moje konto</a>
                                    </li>';
                        }
                        else if($_SESSION['username'] == 'admin'){
                            echo    '<li class="nav-item">
                                        <a class="nav-link" href="podglad_konta_administrator.php"><i class="far fa-user-circle fa-lg"></i> <br>Moje konto</a>
                                    </li>';
                            echo    '<li class="nav-item">
                                        <a class="nav-link" href="panel_administratora.php"><i class="fab fa-battle-net fa-lg"></i></i> <br>Zarządzaj</a>
                                    </li>';        
                        }
                        echo    '<li class="nav-item">
                                    <a class="nav-link" href="logout.php"><i class="fas fa-undo-alt fa-lg"></i></i> <br>Wyloguj się</a>
                                </li>';
                    } 
                    else if($_SESSION['islogin'] == 'false') {
                        echo '<li class="nav-item">
                                <a class="nav-link" href="logowanie.php"><i class="fas fa-sign-in-alt fa-lg"></i> <br>Zaloguj się</a>
                            </li>';
                    }  
                ?>
        </ul>
        <form class='form-inline justify-content-center SearchBOX'><input class='SearchInput' type='search' placeholder='Wyszukaj... '>
            <button class='SearchButton' type='submit'><i class='fa fa-search' style='color: white;'></i></button>
        </form>


            </div>
        </nav>
</br></br>
<div class="Separator1">
        </br>
        </br>
        </br>
    </div>
    <div class="Separator2">
        </br>
        </br>
        </br>
    </div>
    <div class="Main_Page">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10">
                    </br>
                    <div class="Title_of_Page">Pozostałe</div>
                    <div class="Links Links7"></div>
                    <div class="Links Links8"></div>
            </div>
        </div>
        </br></br>
        <div class="row">
                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row justify-content-center">
                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 NiceBorder">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <img src="./CSS/Pozostale/muz.jpg" class="IMG" />
                            </div>
                            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                </br>
                                <div class="Subtitle"><b>Sala koncertowa, F4 s.3</b> </div></br>
                                <div class="Number"><b>Maksymalna ilosc miejsc:</b> 400</div></br>
                                <div class="About_Room"><b>Opis:</b> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                    Justo in odio elit et tincidunt. Id in tellus tempus diam. Non tristique scelerisque
                                    porta pulvinar libero
                                    et eget justo eu. Venenatis vel penatibus mauris gravida sed eget.
                                </div>
                            </div>
                            <div class="col col-xl-2 col-lg-2 col-md-12 col-sm-12 text-center">
                                    <?php
                                    if ($_SESSION['islogin'] == 'true') {
                                        echo '<a href="./szczegoly_rezerwacji.php" style="text-decoration: none;">
                                                <button type="button" class="Button_Rev">Rezerwuj</button>
                                            </a>';
                                    }
                                    else{
                                        echo '<a href="./logowanie.php" style="text-decoration: none;">
                                                <button type="button" class="Button_Rev">Rezerwuj</button>
                                             </a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col col-xl-9 col-lg-9 col-md-11 col-sm-11">
                                    <div class="UnderLine"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br></br>
                </div>
            </div>
        </div>
        <div class="Separator1">
            </br>
            </br>
            </br>
        </div>
        <div class="container-fluid">
            <div class="row SameBackground">
                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row justify-content-center">
                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 NiceBorder">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <img src="./CSS/Pozostale/teatr.jpg" class="IMG" />
                            </div>
                            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                </br>
                                <div class="Subtitle"><b>Sala teatralna, F4 s.2</b> </div></br>
                                <div class="Number"><b>Maksymalna ilosc miejsc:</b> 100</div></br>
                                <div class="About_Room"><b>Opis:</b> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                    Justo in odio elit et tincidunt. Id in tellus tempus diam. Non tristique scelerisque
                                    porta pulvinar libero
                                    et eget justo eu. Venenatis vel penatibus mauris gravida sed eget.
                                </div>
                            </div>
                            <div class="col col-xl-2 col-lg-2 col-md-12 col-sm-12 text-center">
                                    <?php
                                    if ($_SESSION['islogin'] == 'true') {
                                        echo '<a href="./szczegoly_rezerwacji.php" style="text-decoration: none;">
                                                <button type="button" class="Button_Rev">Rezerwuj</button>
                                            </a>';
                                    }
                                    else{
                                        echo '<a href="./logowanie.php" style="text-decoration: none;">
                                                <button type="button" class="Button_Rev">Rezerwuj</button>
                                             </a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col col-xl-9 col-lg-9 col-md-11 col-sm-11">
                                    <div class="UnderLine"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Separator2">
            </br>
            </br>
            </br>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <br><br>
                    <div class="row justify-content-center">
                        <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 NiceBorder">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <img src="./CSS/Pozostale/galeria.jpg" class="IMG" />
                            </div>
                            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                </br>
                                <div class="Subtitle"><b>Galeria, F4 s.5</b> </div></br>
                                <div class="Number"><b>Maksymalna ilosc miejsc:</b> - </div></br>
                                <div class="About_Room"><b>Opis:</b> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                    Justo in odio elit et tincidunt. Id in tellus tempus diam. Non tristique scelerisque
                                    porta pulvinar libero
                                    et eget justo eu. Venenatis vel penatibus mauris gravida sed eget.
                                </div>
                            </div>
                            <div class="col col-xl-2 col-lg-2 col-md-12 col-sm-12 text-center">
                                    <?php
                                    if ($_SESSION['islogin'] == 'true') {
                                        echo '<a href="./szczegoly_rezerwacji.php" style="text-decoration: none;">
                                                <button type="button" class="Button_Rev">Rezerwuj</button>
                                            </a>';
                                    }
                                    else{
                                        echo '<a href="./logowanie.php" style="text-decoration: none;">
                                                <button type="button" class="Button_Rev">Rezerwuj</button>
                                             </a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col col-xl-9 col-lg-9 col-md-11 col-sm-11">
                                    <div class="UnderLine"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </br> </br>
            </div>

            <div class="row justify-content-center">
                <div class="col col-xl-2 col-lg-2 col-md-12 col-sm-12 text-center">
                    </br></br>
                    <a href="./wynajem_sal.php" style="text-decoration: none;"><button type="button" class="Button_Rev">Powrót</button></a>
                </div>
            </div>
        </div>

            </br>
            </br>
            </br>

    </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <!--First row -->
            <div class="row justify-content-center">
                <div class=" col-12 Footer_Quotation Footer_Font"></div>
            </div>
            <!-- Second row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 Footer_COL_A">
                    <img class="float-left mr-4 mt-3 Logo_Footer" src="./CSS/Main/logo-ur.jpg">
                    <div class="About_US_Footer">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam vehicula enim,
                        eget dignissim sem sollicitudin quis.
                        Sed hendrerit ullamcorper blandit. Duis vel eros commodo, cursus diam vel, maximus neque.
                        Donec quis sem nec est molestie faucibus.
                        Spendisse id posuere nunc. Nulla aliquet diam viverra, aliquam augue id, vulputate sem.
                        Aenean in odio non quam scelerisque suscipit.
                        Vivamus a vestibulum est. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 Second_Row_Background">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 Footer_COL_B">
                            <div class="Title_In_Footer Footer_Font">
                                Może się przydać
                            </div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./strona_glowna.html" id="A_Text"> Strona główna</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./regulamin.html" id="A_Text"> Regulamin</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./kontakt.html" id="A_Text"> Kontakt</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./wynajem_sal.html" id="A_Text"> Nasza oferta</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./rejestracja.html" id="A_Text"> Rejestracja</a></div>
                            </br>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 Footer_COL_A">
                            <div class="Title_In_Footer Footer_Font">
                                Sale w ofercie
                            </div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./duze_aule.html" id="A_Text"> Duże aule</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./aule.html" id="A_Text"> Aule</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./sale_konferencyjne.html" id="A_Text"> Sale konferencyjne</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./sale_sportowe.html" id="A_Text"> Sale sportowe</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./pracownie_komputerowe.html" id="A_Text"> Sale komputerowe</a></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 Footer_COL_B">
                            <div class="Title_In_Footer Footer_Font">
                                Kontakt
                            </div>
                            <div class="Contact_Line"><i class="Colorfas fas fa-envelope-open-text"></i><b class="B_Contact_Text"> UR_poczta@gmail.com</b></div>
                            <div class="SpecialBR1"></br></div>
                            <div class="Contact_Line"><i class="Colorfas fas fa-phone"></i><b class="B_Contact_Text">
                                    +123 456 789</b></div>
                            <div class="SpecialBR1"></br></div>
                            <div class="Contact_Line"><i class="Colorfas fab fa-twitter"></i><b class="B_Contact_Text"><a href="" id="Contact_Text">Twitter</a></b></div>
                        </div>
                    </div>
                    <div class=" String_In_SocialMedia Footer_Font">
                        Dołącz do naszych social-media i twórz z nami przyszłość!
                    </div>
                    <div class="row justify-content-center Footer_COL_A">
                        <div class="col-1"></div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 ImageBox_Footer ">
                            <a href=""><img src="./CSS/Main/facebook.png" class="SocialImage_Footer" /></a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 ImageBox_Footer">
                            <a href=""><img src="./CSS/Main/insta.png" class="SocialImage_Footer" /></a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 ImageBox_Footer">
                            <a href=""><img src="./CSS/Main/twitter.png" class="SocialImage_Footer" /></a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-12">
                            <div class="Links Links1"></div>
                        </div>
                        <div class="col-12">
                            <div class="Links Links2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 Footer_COL_A">
                    <div class="Title_In_Footer Footer_Font">
                        Zapisz się na Newsletter!
                    </div>
                    <div class="Newsletter">
                        <div class="Newsletter_Text">
                            Nie chcesz aby przegapiły Cię zniżki na wynajem sal? Chcesz wiedzieć szybciej od innych
                            o nowościach
                            na naszym uniwersytecie? Nie zwlekaj i zapisz się na nasz newsletter!
                        </div>
                        </br>
                        <div class="Newsletter_Form">
                            <form class="form">
                                <label for="Mail">Podaj swojego maila: </label></br>
                                <input type="text" name="Mail" id="Mail"></br>
                                <button class="Newsletter_Button"><span>Subskrybuj</span></button>
                            </form>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
            <!--Third row-->
            <div class="row justify-content-center">
                <div class="col-12 Footer_Copyright Footer_Font">
                    Copyright <b class="CColor"> ©</b> 2020 by <b class="CColor">Kamil Filar</b> & <b class="CColor">Karol Bury</b>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>