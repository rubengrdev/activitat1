<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/styles.css">
    <title>Home</title>
</head>
<body>

    <header>
        <nav>
            <h1> <?= $nom; ?> </h1>
        </nav>
        
    </header>
    <main>


        <div id="menuContainer">
            <div id="menu">
            <ul>
                <li>
                    <a href="?url=login">Login</a>
                </li>
                <li>
                    <a href="?url=register">Register</a>
                </li>
                
            </ul>
            </div>
        </div>

        <article>
            <section>
                <div id="breadcrumb"></div>
                <div class="status"><h4>Status: &nbsp;</h4><p id="statustext"></p></div>
                <div class="alertcookies"></div>
            </section>
        </article>
        
        
        <div class="time">
            <p id="time"></p>
        </div>
        </main>
  
</body>
<script src="../../lib/jsfunctionality.js"></script>
<script src="../../resources/cookiesEnabled.js"></script>
<script src="../../resources/date.js"></script>
<script src="../../resources/register.js"></script>
<script src="../../resources/sessionStatus.js"></script>
<script src="../../resources/breadcrumbs.js"></script>
</html>