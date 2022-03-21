<header>
    <nav class="site-nav">
      <img src="/img/logo.svg" alt="logo">
      <div class="menu-toggle">
        <div class="hamburger"></div>
      </div>

      <ul class="open desktop">
        <li><a href="/index.html">Accueil</a></li>
        <li><a href="/about.html">A propos de Batman</a></li>
        <li><a href="/services.html">Services</a></li>
        <li><a href="/actu.html">Actualités</a></li>
        <li><a href="/contact.html">Contact</a></li>
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

  <script type="text/javascript">
    $('.menu-toggle').click(function () {
      $('ul').toggleClass('opening');
      $(this).toggleClass('open');
    })
  </script>
  <script src="js/jquery/jquery-3.4.1.min.js"></script>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/nav.js"></script>   