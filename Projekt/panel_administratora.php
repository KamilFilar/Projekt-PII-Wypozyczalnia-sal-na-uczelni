<?php
session_start();

if ($_SESSION['islogin'] == '') {
    $_SESSION['islogin'] = 'false';
}

//$_SESSION['valueButton']='false';
$_SESSION['value']=0;
if($_SESSION['valueButton']=='true'){
    $_SESSION['value']=1;
}

?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Panel administratora</title>
    <link rel="icon" href="CSS/Main/logo-ur.jpg" type="image/x-icon">
    <!-- Style -->
    <link rel="stylesheet" href="CSS/Main/main.css">
    <link rel="stylesheet" href="CSS/panel_administratora.css">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a79ff52c1c.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- JS Bootsrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="MAIN">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="#">
                <img src="./CSS/Main/logo-ur.jpg" class="d-inline-block align-top Logo_IMG" alt="">
            </a>
            <b class="Text_Logo">Uniwersytet Rzeszowski</b>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        if ($_SESSION['username'] == 'student' || $_SESSION['username'] == 'uzytkownik' || $_SESSION['username'] == 'pracownik') {
                            echo    '<li class="nav-item">
                                        <a class="nav-link" href="podglad_konta_uzytkownik.php"><i class="far fa-user-circle fa-lg"></i> <br>Moje konto</a>
                                    </li>';
                        } else if ($_SESSION['username'] == 'admin') {
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
                    } else if ($_SESSION['islogin'] == 'false') {
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
                </br>
                <div class="row justify-content-center">
                    <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10">
                        <div class="Title_of_Page">Panel administratora</div>
                        <div class="Links Links7"></div>
                        <div class="Links Links8"></div>
                    </div>
                </div>
                <div class="row justify-content-center BackgroundROW">
                    <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 NiceBorder">
                        <div class="row">
                            <div class="col col-xl-4 col-lg-6 col-md-6 col-sm-10 col-10 DateBox">
                                <?php
                                if (date('l') == 'Saturday') {
                                    echo 'Dziś jest: Sobota ';
                                }
                                if (date('l') == 'Sunday') {
                                    echo 'Dziś jest: Niedziela ';
                                }
                                if (date('l') == 'Monday') {
                                    echo 'Dziś jest: Poniedziałek ';
                                }
                                if (date('l') == 'Tuesday') {
                                    echo 'Dziś jest: Wtorek ';
                                }
                                if (date('l') == 'Wednesday') {
                                    echo 'Dziś jest: Środa ';
                                }
                                if (date('l') == 'Thursday') {
                                    echo 'Dziś jest: Czwartek ';
                                }
                                if (date('l') == 'Friday') {
                                    echo 'Dziś jest: Piątek ';
                                }
                                ?>
                                <b style="color: rgb(0, 42, 78)">
                                    <?php
                                    echo date('d-m-Y');
                                    ?>
                                </b>
                                </br>

                                <?php
                                echo "Aktualny czas: " . date("H:i:s");
                                ?>
                            </div>
                            <div class="col col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 my-auto ">
                                <div>
                                    <p class="AchtungDays">
                                        <button class="ButtonAchtung" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample2">
                                            <i class="fas fa-exclamation fa-2x"></i>
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseExample4">
                                        <div class="card card-body">
                                            <div class="row justify-content-center">
                                                <div class="col col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 text-center">
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                                                        <div class="carousel-inner" style="box-shadow: 0px 0px 15px 15px rgb(3, 77, 143);">
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/1.jpg" alt="1">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Styczeń:</h5>
                                                                    <p class="datefree">01.01.2021r.</p>
                                                                    <p class="datefree">06.01.2021r.</p>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/2.jpg" alt="2">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Luty:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/3.jpg" alt="3">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Marzec:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/4.jpg" alt="4">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Kwiecień:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/5.jpg" alt="5">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Maj:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/6.jpg" alt="6">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Czerwiec:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/7.jpg" alt="7">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Lipiec:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/8.jpg" alt="8">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Sierpień:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/9.jpg" alt="9">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Wrzesień:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/10.jpg" alt="10">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Październik:</h5>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item active">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/11.jpg" alt="11">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Listopad:</h5>
                                                                    <p class="datefree">01.11.2020</p>
                                                                    <p class="datefree">11.11.2020</p>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>

                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block ImageCarusel" src="./CSS/Images/12.jpg" alt="12">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5 class="LitleTitleMonth">Grudzień:</h5>
                                                                    <p class="datefree">24.12.2020</p>
                                                                    <p class="datefree">25.12.2020</p>
                                                                    <p class="datefree">26.12.2020</p>
                                                                    <p class="datefree">27.12.2020</p>
                                                                    <p class="datefree">30.12.2020</p>
                                                                    <p class="datefree">"Daty wolne"</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="SubTitle">Menu</div> -->
                        <div class="row justify-content-center">

                        </div>
                        <div class="row justify-content-center">
                            <div class="col col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <p>
                                    <button class="Button_Rev ButtonColor2" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                        <i class="fas fa-plus-circle fa-lg"></i> Dodaj wypożyczenie
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample1">
                                    <div class="card card-body">
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Data:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="DD - MM - YY" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Nazwa sali:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Nazwa sali" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Typ sali:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Typ sali" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Czas od:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="HH:MM" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Czas do:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="HH:MM" />
                                            </div>
                                        </div>
                                        <div class="HugeLinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Dane:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Imię i naziwsko" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Nr. tel.:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Nr. tel." />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">E-mail:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="E-mail:" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Status</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Status:" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Opłata:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <select id="data" name="data" class="dropdown2">
                                                    <option value="1" selected="selected" disabled>Opłata</option>
                                                    <option value="2">Zapłacona</option>
                                                    <option value="3">Niezapłacona</option>
                                                    <option value="4">Nie dotyczy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6 my-auto mx-auto">
                                                <button class="ButtonOK ButtonColorOK" onclick="showAlertS()"><i class="far fa-check-circle fa-2x"></i></button>
                                            </div>
                                            <div class="col col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6 my-auto mx-auto">
                                                <button class="ButtonReturn ButtonColorReturn" style="cursor: pointer; border: 0px;" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                                    <i class="far fa-times-circle fa-2x"></i>
                                                </button>
                                            </div>
                                            <div id="AlertS" class="alert alert-success alert-dismissible fade show">
                                                <strong>Uwaga!</strong> Pomyślnie dodano rezerwację.
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <p>
                                    <button class="Button_Rev ButtonColor3" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                        <i class="fas fa-trash-restore-alt fa-lg"></i> Usuń wypożyczenie
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample2">
                                    <div class="card card-body">
                                        <?php
                                        if ($_SESSION['value'] == 1) {
                                            echo '<div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Data:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="DD - MM - YY" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Nazwa sali:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Nazwa sali" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Typ sali:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Typ sali" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Czas od:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="HH:MM" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Czas do:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="HH:MM" />
                                            </div>
                                        </div>
                                        <div class="HugeLinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Dane:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Imię i naziwsko" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Nr. tel.:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Nr. tel." />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">E-mail:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="E-mail:" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Status</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Status:" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Opłata:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <select id="data" name="data" class="dropdown2">
                                                    <option value="1" selected="selected" disabled>Opłata</option>
                                                    <option value="2">Zapłacona</option>
                                                    <option value="3">Niezapłacona</option>
                                                    <option value="4">Nie dotyczy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                        <div class="col col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6 my-auto mx-auto">
                                            <button class="ButtonOK ButtonColorOK" onclick="showAlertD()"><i class="far fa-check-circle fa-2x"></i></button>
                                        </div>
                                        <div class="col col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6 my-auto mx-auto">
                                            <button class="ButtonReturn ButtonColorReturn" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                                <i class="far fa-times-circle fa-2x"></i>
                                            </button>
                                        </div>
                                    </div>
                                    ';
                                            echo '                            <div id="AlertD" class="alert alert-danger alert-dismissible fade show">
                                    <strong>Uwaga!</strong> Rezerwacja została usunięta.
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                </div>';
                                        } else {
                                            echo '<div class="DataToX">Dane zostaną wczytane w momencie wybrania interesującego Cię wypożyczenia.</div>';
                                        }
                                        ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <p>
                                    <button class="Button_Rev ButtonColor1" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                        <i class="fas fa-pencil-ruler fa-lg"></i> Edytuj wypożyczenie
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample3">
                                    <div class="card card-body">
                                        <?php
                                        if ($_SESSION['value'] == 1) {
                                            echo '<div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Data:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="DD - MM - YY" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Nazwa sali:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Nazwa sali" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Typ sali:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Typ sali" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Czas od:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="HH:MM" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Czas do:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="HH:MM" />
                                            </div>
                                        </div>
                                        <div class="HugeLinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Dane:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Imię i naziwsko" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Nr. tel.:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Nr. tel." />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">E-mail:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="E-mail:" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Status</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <input type="text" class="INPUT_DOWN" placeholder="Status:" />
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                            <div class="col col-xl-4 col-lg-11 col-md-11 col-sm-11 col-11 my-auto">
                                                <div class="TEXT_DOWN">Opłata:</div>
                                            </div>
                                            <div class="col col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                                                <select id="data" name="data" class="dropdown2">
                                                    <option value="1" selected="selected" disabled>Opłata</option>
                                                    <option value="2">Zapłacona</option>
                                                    <option value="3">Niezapłacona</option>
                                                    <option value="4">Nie dotyczy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="LinksSep"></div>
                                        <div class="row justify-content-center">
                                        <div class="col col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6 my-auto mx-auto">
                                            <button class="ButtonOK ButtonColorOK"><i class="far fa-check-circle fa-2x"></i></button>
                                        </div>
                                        <div class="col col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6 my-auto mx-auto">
                                            <button class="ButtonReturn ButtonColorReturn" onclick="showAlertEdit()" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                                <i class="far fa-times-circle fa-2x"></i>
                                            </button>
                                        </div>
                                    </div>';
                                            echo '<div id="AlertE" class="alert alert-success alert-dismissible fade show">
                                    <strong>Uwaga!</strong> Zamiany zostały pomyślnie zapisane.
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                </div>
                                ';
                                        } else {
                                            echo '<div class="DataToX">Dane zostaną wczytane w momencie wybrania interesującego Cię wypożyczenia.</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>

                <div class="row justify-content-center">
                    <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10">
                        <div class="Title_of_Page">Stan sal</div>
                        <div class="Links LinksKL"></div>
                        <div class="Links LinksK"></div>

                    </div>
                </div>
                <div class="row justify-content-center BackgroundROW">
                    <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 NiceBorder">
                        <div class="row">
                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row justify-content-center">
                                    <div class="col col-xl-8 col-lg-10 col-md-10 col-sm-10 col-10 text-center">
                                        <input class='SearchInput2' type='search' placeholder='Wyszukaj... ' />
                                        <button class='SearchButton2' type='submit'><i class='fa fa-search' style='color: white;'></i></button>
                                    </div>
                                </div>
                                </br></br>
                                <div class="row justify-content-center">
                                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                        <p>
                                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                                                Zobacz wszystkie
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapseExample5">
                                            <div class="card card-body">
                                                <div class="row justify-content-center">
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala konfenrencyjna duża</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B4 s.231
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula im. Lorem ipsum</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            F1
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula im. Lorem ipsum</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B23
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula im. Lorem ipsum</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B5
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala konfenrencyjna duża</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B4 s.231
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala konfenrencyjna</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B1 s.142
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala konfenrencyjna</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B1 s.178
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala konfenrencyjna</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B3 s.190
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala konfenrencyjna mała</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            B2 s.140
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Pracownia komputerowe</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A2 s.300
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Pracownia komputerowe</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A3 s.254
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Pracownia komputerowe</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A1 s.75
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A2 s.300
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A2 s.2
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">

                                                        <div class="row justify-content-center">Aula im. Lorem ipsum</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A2 s.5
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A2 s.5
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula mała</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A3 s.1
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Aula</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            A2 s.8
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Hala</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            G1 s.1
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Hala im. Lorem sportowca</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            G1 s.2
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala gimnastyczna</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            G1 s.5
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala koncertowa</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            F4 s.3
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Sala teatralna</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            F4 s.2
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ChangeClass">
                                                        <div class="row justify-content-center">Galeria</div>
                                                        <div class="row justify-content-center" style="color:  rgb(0, 52, 97);">
                                                            F4 s.5
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10"></div>
                                                            <div class="col col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 text-center">
                                                                <input type="checkbox" class="PRight" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="admin">
                    <div class="BorderTable">
                    <div class="table-responsive">
                        
                        <table class="table table-hover BorderTable">
                            <thead>
                                <tr>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78)"></th>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">Poniedziałek</th>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">Wtorek</th>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">Środa</th>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">Czwartek</th>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">Piątek</th>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">Sobota</th>
                                    <th scope="col" style="border: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">Niedziela</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">7:00-7:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">7:30-8:00</td>
                                    <td rowspan="3" class="WypozTable" style="border-top: 2px solid  rgb(0, 42, 78);">
                                        <form method="post">
                                            <input type="submit" value="" class="fas fa-edit fa-lg ButtonEdit" name="Submit1" onclick="pickLoan()">
                                            </form><br /><br />
                                            Informatyka<br>
                                            Jan Kowalski<br>
                                            Student
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">8:00-8:30</td>
                                    <td></td>
                                    <td></td>
                                   
                                    <td></td>
                                    <td rowspan="3" class="WypozTable" style="border-top: 2px solid  rgb(0, 42, 78);">
                                    <form method="post">
                                            <input type="submit" value="" class="fas fa-edit fa-lg ButtonEdit" name="Submit1" onclick="pickLoan()"><br /><br />
                                        Nazwa sali<br>
                                        Szkolenie<br>
                                        Jan Kowalski<br>
                                        Pracownik
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">8:30-9:00</td>
                                    <td></td>
                                  
                                    <td></td>
                                    <td></td>
                                    
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">9:00-9:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="3" class="WypozTable" style="border-top: 2px solid  rgb(0, 42, 78);">
                                        <form method="post">
                                            <input type="submit" value="" class="fas fa-edit fa-lg ButtonEdit" name="Submit1" onclick="pickLoan()"><br /><br />
                                            Informatyka<br>
                                            Jan Kowalski<br>
                                            Student
                                    </td>
                                    <td></td>
                                    
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">9:30-10:00</td>
                                    <td></td>
                                    <td rowspan="3" class="WypozTable" style="border-top: 2px solid  rgb(0, 42, 78);">
                                    <form method="post">
                                            <input type="submit" value="" class="fas fa-edit fa-lg ButtonEdit" name="Submit1" onclick="pickLoan()"><br /><br />
                                        Nazwa sali<br>
                                        Szkolenie<br>
                                        Jan Kowalski<br>
                                        Pracownik
                                </td>
                                    <td></td>
                                   
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">10:00-10:30</td>
                                    <td></td>
                                    <td></td>
                                    
                                   
                                    <td></td>
                                    <td rowspan="3" class="WypozTable" style="border-top: 2px solid  rgb(0, 42, 78);">
                                    <form method="post">
                                            <input type="submit" value="" class="fas fa-edit fa-lg ButtonEdit" name="Submit1" onclick="pickLoan()"><br /><br />
                                        Nazwa sali<br>
                                        Szkolenie<br>
                                        Jan Kowalski<br>
                                        Pracownik
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">10:30-11:00</td>
                                    <td></td>
                                    <td></td>
                                    
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">11:00-11:30</td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="3" class="WypozTable" style="border-top: 2px solid  rgb(0, 42, 78);">
                                    <form method="post">
                                            <input type="submit" value="" class="fas fa-edit fa-lg ButtonEdit" name="Submit1" onclick="pickLoan()"><br /><br />
                                        Nazwa sali<br>
                                        Konferencja<br>
                                        Jan Kowalski<br>
                                        Os. prywatna
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">11:30-12:00</td>
                                    <td></td>
                                    <td></td>
                                   
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">12:00-12:30</td>
                                    <td></td>
                                   
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">12:30-13:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td rowspan="3" class="WypozTable" style="border-top: 2px solid  rgb(0, 42, 78);">
                                    <form method="post">
                                            <input type="submit" value="" class="fas fa-edit fa-lg ButtonEdit" name="Submit1" onclick="pickLoan()"><br /><br />
                                        Nazwa sali<br>
                                        Szkolenie<br>
                                        Jan Kowalski<br>
                                        Pracownik
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">13:00-13:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">13:30-14:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">14:00-14:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">14:30-15:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">15:00-15:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">15:30-16:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">16:00-16:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">16:30-17:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">17:00-17:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">17:30-18:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">18:00-18:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">18:30-19:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">19:00-19:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-bottom: 2px solid  rgb(0, 42, 78); color: rgb(3, 77, 143)">19:30-20:00</td>
                                    <td style="border-bottom: 2px solid  rgb(0, 42, 78)"></td>
                                    <td style="border-bottom: 2px solid  rgb(0, 42, 78)"></td>
                                    <td style="border-bottom: 2px solid  rgb(0, 42, 78)"></td>
                                    <td style="border-bottom: 2px solid  rgb(0, 42, 78)"></td>
                                    <td style="border-bottom: 2px solid  rgb(0, 42, 78)"></td>
                                    <td style="border-bottom: 2px solid  rgb(0, 42, 78)"></td>
                                    <td style="border-bottom: 2px solid  rgb(0, 42, 78)"></td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
           </div>
        </div>
        </br>
        </br>
        <div class="Separator1">
            </br>
            </br>
            </br>
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
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./strona_glowna.php"
                                    id="A_Text"> Strona główna</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./regulamin.php"
                                    id="A_Text"> Regulamin</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./kontakt.php"
                                    id="A_Text"> Kontakt</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./wynajem_sal.php"
                                    id="A_Text"> Nasza oferta</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./rejestracja.php"
                                    id="A_Text"> Rejestracja</a></div>
                            </br>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 Footer_COL_A">
                            <div class="Title_In_Footer Footer_Font">
                                Sale w ofercie
                            </div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./duze_aule.php"
                                    id="A_Text"> Duże aule</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./aule.php"
                                    id="A_Text"> Aule</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a
                                    href="./sale_konferencyjne.php" id="A_Text"> Sale konferencyjne</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a href="./sale_sportowe.php"
                                    id="A_Text"> Sale sportowe</a></div>
                            <div class="Hrefs_Footer"><i class="fas fa-angle-right"></i><a
                                    href="./pracownie_komputerowe.php" id="A_Text"> Sale komputerowe</a></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 Footer_COL_B">
                            <div class="Title_In_Footer Footer_Font">
                                Kontakt
                            </div>
                            <div class="Contact_Line"><i class="Colorfas fas fa-envelope-open-text"></i><b
                                    class="B_Contact_Text"> UR_poczta@gmail.com</b></div>
                            <div class="SpecialBR1"></br></div>
                            <div class="Contact_Line"><i class="Colorfas fas fa-phone"></i><b class="B_Contact_Text">
                                    +123 456 789</b></div>
                            <div class="SpecialBR1"></br></div>
                            <div class="Contact_Line"><i class="Colorfas fab fa-twitter"></i><b
                                    class="B_Contact_Text"><a href="" id="Contact_Text">Twitter</a></b></div>
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
                                <label for="Mail" class="mail3">Podaj swojego maila: </label></br>
                                <input type="text" name="Mail" id="Mail" class="mail2"></br>
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
                    Copyright <b class="CColor"> ©</b> 2020 by <b class="CColor">Kamil Filar</b> & <b
                        class="CColor">Karol Bury</b>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- Alerts -->
<script>
    function showAlertS() {
        document.getElementById('AlertS').style.display = "block";
    }

    function showAlertD() {
        document.getElementById('AlertD').style.display = "block";
    }

    function showAlertEdit() {
        document.getElementById('AlertE').style.display = "block";
    }
</script>
  <!-- OnclickValue -->
  <?php
echo '<script>
    function pickLoan(){';
        
            $_SESSION['valueButton'] = 'true';
           // $_SESSION['EditTrue'] = 1;
        
  echo '}
</script>';
?>
</body>
</html>