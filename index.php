<?php
    require_once "core/autoloader.php";
    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    $start = $time;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/main.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <title>Hero Academy | Home</title>
    </head>

    <body>
        <header>
            <nav>
                <form id="searchForm" method="get" action="http://wiki.mabinogiworld.com/index.php">
                    <input type="search" name="search" placeholder="search...">
                    <a onclick="document.getElementById('searchForm').submit(); return false;" href="javascript:{}"><img class="searchIcon" src="images/search.png"></a>
                </form>
                <ul>
                    <li>Register</li>
                    <li>Login</li>
                </ul>
            </nav>
        </header>
        <nav>
            <ul>
                <a href="index.php"><li <?=!isset($_GET['view']) ? 'class="active"' : ''?>>Home</li></a>
                <a href="index.php?view=smboard"><li <?=$_GET['view'] == "smboard" ? 'class="active"' : ''?>>SM Board</li></a>
                <a href="index.php?view=photos"><li <?=$_GET['view'] == "photos" ? 'class="active"' : ''?>>Photos</li></a>
                <a href="index.php?view=maxgear"><li <?=$_GET['view'] == "maxgear" ? 'class="active"' : ''?>>Max Gear Setups</li></a>
                <!-- <li class="right">Register</li>
                <li class="right">Login</li> -->
            </ul>
        </nav>

        <main>
            <aside>
                <?php include("widgets.php"); ?>
            </aside>

            <?php include_once(isset($_GET['view']) ? $_GET['view'].'.php' : 'home.php' )?>
        </main>

        <footer>
            <p>Copyright &copy; Celtech & HEROacademy Guild of Ruairi 2017. All rights reserved.</p>
            <p>HEROacademy is not affiliated with NEXON Korea Corporation or NEXON America Inc. in any way.</p>
            <p>
            <?php
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $finish = $time;
                $total_time = round(($finish - $start), 4);
                echo 'Page generated in '.$total_time.' seconds.';
            ?>
            </p>
        </footer>

        <script src="js/time.min.js"></script>
    </body>
</html>
