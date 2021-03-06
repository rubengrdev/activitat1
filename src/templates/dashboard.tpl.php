<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/styles.css">
    <title>Dashboard</title>
</head>
<body>

<header>
        <nav>
            <h1> <?= $nom; ?> </h1>
        </nav>
        
</header>
<main>
<article>
            <section>
                <div id="breadcrumb"></div>
                <h2>Bienvenid@ <?= $_COOKIE['getUser']?></h2>
                <div id="view-profile">
                    <p>ver perfil</p>
                </div>
                <div id="profile">
                    <h2>Profile</h2>
                    <p>User: <?php print_r($_SESSION["profile"]["uname"]);?></p>
                    <p>Email: <?php print_r($_SESSION["profile"]["email"]);?></p>
                    <p>Role: <?= $_COOKIE["role"];?></p>
                    <a href="?url=logout"><div class="logout">logout</div></a>
                </div>

                <div id="iframe-box">
                <iframe src="?url=home"></iframe>
                <div>

            </section>
</article>

            
                
            </div>
        </main>
   
</body>
<script src="../../lib/jsfunctionality.js"></script>
<script src="../../resources/breadcrumbs.js"></script>
<script src="../../resources/profile.js"></script>
</html>