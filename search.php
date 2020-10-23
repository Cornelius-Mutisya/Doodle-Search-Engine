<?php
    if(isset($_GET["term"])) {
        $term = $_GET["term"];
    }else {
        exit("You must enter a search term");
    }
?>

<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <title>Wecome to Doodle</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="headerContent">
                <div class="logoContainer">
                    <a href="index.php">
                        <img src="assets/images/doodleLogo1.png" alt="Doodle logo">
                    </a>   
                </div>
                <div class="searchContainer">
                    <form action="search.php" method="GET">
                        <div class="searchBarContainer">
                            <input class="searchBox" type="text" name="term">
                            <button class="searchButton"><img src="assets/images/icons/search.png" alt="Search icon"></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tabsContainer">
                <ul class="tabsList">
                    <li>
                        <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                            Sites
                        </a>
                    </li>
                    <li>
                        <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                            Images
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    
</body>
</html>