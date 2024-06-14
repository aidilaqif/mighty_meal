<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mighty Meal: My meal!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="appbar">
        <div class="menu-icon" onclick="toggleSidebar()">&#9776;</div>
        <div class="website-logo"></div>
        <div class="appbar-content">
            <h1>Mighty Meal: My Meal!</h1>
        </div>
    </div>
    <div class="sidebar" id="sidebar">
        <span class="closebtn" onclick="toggleSidebar()">&times;</span>
        <ul>
            <li><a href="index.php?page=pra-penilaian" onclick="toggleSidebar()">Pra-penilaian</a></li>
            <li><a href="index.php?page=utama" onclick="toggleSidebar()">Utama</a></li>
            <li><a href="index.php?page=fizikal-aktiviti" onclick="toggleSidebar()">Fizikal Aktiviti</a></li>
            <li><a href="index.php?page=jom-main" onclick="toggleSidebar()">Jom Main!</a></li>
            <li><a href="index.php?page=pasca-penilaian" onclick="toggleSidebar()">Pasca-penilaian</a></li>
            <li><a href="index.php?page=rujukan" onclick="toggleSidebar()">Rujukan</a></li>
        </ul>
    </div>
    <div class="content" id="content">
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'utama';
            include "$page.php";
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>
