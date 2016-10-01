<?php 
    require_once('config.php');
    require_once('util.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php  echo($title); ?></title>
    <link rel="stylesheet" href="style.css"/>
    <script src="jquery-2.1.1.min.js"></script>
    <script>
        function skinLoaded(img) {
            var canvas = img.parentNode.getElementsByTagName("canvas")[0];
            
            var ctx = canvas.getContext('2d');
            ctx.imageSmoothingEnabled = false;
            ctx.mozImageSmoothingEnabled = false;
            ctx.drawImage(img, 8, 8, 8, 8, 0, 0, canvas.width, canvas.height);
            ctx.drawImage(img, 40, 8, 8, 8, 0, 0, canvas.width, canvas.height);
        }
        
        function skinError(img, gender) {
            switch(gender) {
                case 0:
                    img.src = "<?php  echo($defaultSkins[0]); ?>";
                    break;
                
                case 1:
                    img.src = "<?php  echo($defaultSkins[1]); ?>";
                    break;
            }
        }
    </script>
</head>
<body>
<div id="nav">
    <a href="index.php">Awards</a>
    &nbsp;|&nbsp;
    <a href="?hof">Hall of Fame</a>
    &nbsp;|&nbsp;
    <a href="?stat=stat.playOneMinute">List of players</a>
    
    <?php 
        function compareUUIDsByPlayerName($a, $b) {
            return strcasecmp(getPlayerName($a), getPlayerName($b));
        }
    
        $searchResults = [];
        if(isset($_POST['findname'])) {
            $search = $_POST['findname'];
            $searchResults = findPlayersByName($search);
            
            if(count($searchResults) == 0) {
                $formError = "No matches for " . htmlspecialchars($search) . "!";
            } else if(count($searchResults) == 1) {
                $foundUUID = $searchResults[0]; //only result
            } else {
                //sort results
                usort($searchResults, 'compareUUIDsByPlayerName');
            }
        }
        
        if(isset($foundUUID) && isset($_POST['goto'])) {
            $_GET["player"] = $foundUUID;
        }
    
        if(isset($_POST['itsme'])) {
            $me = $_POST['itsme'];
            setcookie('me', $me, time() + 60*60*24*365);
        } else if(isset($_GET['notme'])) {
            setcookie('me', null);
            unset($me);
        } else if(isset($_COOKIE['me'])) {
            $me = $_COOKIE['me'];
        }
    
        if(isset($me)) {
            ?>&nbsp;|&nbsp;<?php 
            echo(createPlayerWidget($me, 16));
            ?>
            <a class="notme" href="?notme">[X]</a>
            <?php 
        }
        
        ?>
            <form action="index.php" method="post">
            Player search: <input name="findname" type="text" size="16"/>
            <button name="goto">Go</button>
            <?php 
                if(isset($formError)) {
                    echo("<span class=\"error\">$formError</span>");
                }
            ?>
            </form>
        <?php 
    ?>
</div>
<div id="last-update">
    The statistics were last updated 
    <?php 
        if(is_file($lastUpdateFile)) {
            $lastUpdate = unserialize(file_get_contents($lastUpdateFile));
            
            $delta = (time() - $lastUpdate);
            $deltaMinutes = (int)($delta / 60);
            
            if($delta >= 120) {
                echo("$deltaMinutes minutes ago.");
            } else if($delta >= 60) {
                echo("a minute ago.");
            } else {
                echo("$delta seconds ago.");
            }
        }
    ?>
</div>
<h1><?php  echo($title); ?></h1>
<?php 
    if(count($searchResults) > 1) {
        require("view-search.php");
    } else if(isset($_GET["stat"])) {
        require("view-stat.php");
    } else if(isset($_GET["player"])) {
        require("view-player.php");
    } else if(isset($_GET["raw"])) {
        require("view-player-raw.php");
    } else if(isset($_GET["hof"])) {
        require("view-hof.php");
    } else {
        require("view-awards.php");
    }
?>
<div id="clear">&nbsp;</div>
<div id="foot">
    <div id="timezone">
        All times are <?php  echo($timezone); ?>.
    </div>
    <div id="legal">
        <span class="hl">MinecraftStats Version <?php  echo($mcstatsVersion); ?></span>.
        Written by Patrick Dinklage a.k.a. "pdinklag".<br/>
        Minecraft UI icons and default skins are trademarks and copyrights of <a href="http://mojang.com/">Mojang</a>.
        Images from the <a href="http://minecraft.gamepedia.com/Minecraft_Wiki">Minecraft Wiki</a> are licensed under <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">CreativeCommons BY-NC-SA 3.0</a>.
    </div>
</div>
</body>
</html>
