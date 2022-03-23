<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="/css/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>About</title>
</head>

<body>
    <header>
        <nav class="site-nav">
            <img src="img/logo.svg" alt="logo">
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>

            <ul class="open desktop">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="about.php">A propos de Batman</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="actu.html">Actualités</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <style>
        /* BURGER */
        nav {
            margin: 0;
            padding: 0;
        }

        nav ul {
            display: flex;
            flex-direction: column;
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: none;
        }

        nav ul.opening {
            display: block;
            height: 30px;
            margin-bottom: 400px;
        }

        nav li {
            border-bottom: 1px solid #f6f4e2;
        }

        nav li:last-child {
            border-bottom: none;
        }

        nav a {
            color: #000;
            display: block;
            padding: 1.5em 4em 1.5em 3em;
            text-transform: uppercase;
            text-decoration: none;
        }

        nav a:hover,
        nav a:focus {
            background: #d7d7d7;
        }

        .site-nav--icon {
            font-size: 1.4em;
            margin-right: 1em;
            width: 1.1em;
            text-align: right;
        }

        .menu-toggle {
            position: absolute;
            padding: 0.8em;
            top: 1em;
            right: .5em;
            cursor: pointer;
        }

        .hamburger,
        .hamburger::before,
        .hamburger::after {
            content: '';
            display: block;
            height: 3px;
            width: 2em;
            background-color: black;
            border-radius: 3px;
            -webkit-transition: all ease-in-out350ms;
            transition: all ease-in-out350ms;
        }

        .hamburger::before {
            -webkit-transform: translateY(-7px);
            transform: translateY(-7px);
        }

        .hamburger::after {
            -webkit-transform: translateY(4px);
            transform: translateY(4px);
        }

        .open .hamburger {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .open .hamburger::before {
            display: none;
        }

        .open .hamburger::after {
            -webkit-transform: translateY(-1px) rotate(-90deg);
            transform: translateY(-1px) rotate(-90deg);
        }


        @media (min-width:780px) {

            /* BURGER TABLETTE - DESKTOP */
            .menu-toggle {
                display: none;
            }

            nav ul {
                display: flex;
                flex-direction: row;
                justify-content: flex-end;
            }

            nav li {
                flex: 1 1 auto;
                border: none;
            }

            nav li a {
                padding: 1.5em 1.3em 1.5em 1.3em;
                margin: 0;
                border: none;
                color: #000;
            }

            nav a:hover,
            nav a:focus {
                background-color: #d7d7d7
            }

            .logo {
                flex: 0 0 200px;
                margin: 0;
                padding-left: 20px;
            }

            nav {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                text-align: center;
            }

            #front-img {
                width: 100%;
                height: 388px;
            }

            section#presentation {
                display: flex
            }

            img#txt-presentation {
                width: 100%;
                height: 366px;
            }
        }
    </style>


    <div>
       
        <h1>About</h1>

        <div class="portrait"></div>

        <section class="firstmodule">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at nibh non arcu vehicula fermentum sit
                amet posuere tortor. </p>

        </section>
    </div>

    <div class="buttons">
        <div>
            <h3>1</h3>
        </div>
        <div>
            <h3>2</h3>
        </div>
        <div>
            <h3>3</h3>
        </div>
    </div>

    <section class="module" id="formation">
        <h2>Formation</h2>
        <div class="container">
            <div>
                <h3>La Ligue des Ombres</h3>
                <p>Entrainement intensif aux techniques de combat</p>
            </div>
            <div>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div>
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>

    <section class="module competence">
        <h2>Compétences</h2>
        <div class="skill-box">
            <div class="skill">
                <h3>Ponctualité</h3>
                <div class="rating ponctualité">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </div>
            </div>

            <div class="skill">
                <h3>Ingéniosité</h3>
                <div class="rating">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="empty"></div>
                </div>
            </div>

            <div class="skill">
                <h3>Bonne humeur</h3>
                <div class="rating">
                    <div></div>
                    <div></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </div>
            </div>

            <div class="skill">
                <h3>Autonomie</h3>
                <div class="rating">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

            <div class="skill">
                <h3>Réactivité</h3>
                <div class="rating">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

            <div class="skill">
                <h3>Delicatesse</h3>
                <div class="rating">
                    <div></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="module experience">
        <h2>Experience</h2>
        <div class="nemesis">
            <div class="portrait joker">
                <div class="info">
                    <button type="button" class="btn btn-dark text-nowrap btn-sm">En savoir +</button>
                </div>
            </div>

            <div class="portrait freeze">
                <div class="info">
                    <button type="button" class="btn btn-dark text-nowrap">En savoir +</button>
                </div>
            </div>
            <div class="portrait bane">
                <div class="info">
                    <h3>En savoir +</h3>
                </div>
            </div>
            <div class="portrait ivy">
                <div class="info">
                    <h3>En savoir +</h3>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery/jquery-3.4.1.min.js"></script>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>