<?php
include "../connect.env";
?>
<header>
    <a href='../pages/admin.php'><img src="../img/lineUp.jpg" alt="Logo de notre réseau social"/></a>
        <nav id="menu">
            <a href="../pages/news.php">Actualités</a>
            <a href="../pages/wall.php?user_id=<?php echo $_SESSION['connected_id'] ?>">Mur</a>
            <a href="../pages/feed.php?user_id=<?php echo $_SESSION['connected_id'] ?>">Flux</a>
            <a href="../pages/tags.php?tag_id=1">Mots-clés</a>
            <a> <form id= "searchbox" action="" method="post"> 
            THÉO_SEARCH_BAR<br><input class="research" type="text" size= "40" name="search" placeholder=" Rechercher un utilisateur">
                <input class="button-submit" type="submit" value="🔍">
            </form></a>
        </nav>
        <nav id="user">
            <a href="#">Profil</a>
            <ul>
                <li><a href="../pages/settings.php?user_id=<?php echo $_SESSION['connected_id'] ?>">Paramètres</a></li>
                <li><a href="../pages/followers.php?user_id=<?php echo $_SESSION['connected_id'] ?>">Mes suiveurs</a></li>
                <li><a href="../pages/subscriptions.php?user_id=<?php echo $_SESSION['connected_id'] ?>">Mes abonnements</a></li>
                <li><a href="../pages/logout.php">Se déconnecter</a></li>
            </ul>
        </nav>
</header>
        <?php
        
// PART SEARCH

    if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $search_query = "SELECT * FROM `users` WHERE alias= '$search' ";
    $search_response = $mysqli->query($search_query);
    $search_user = $search_response->fetch_assoc();
    if ($search_user) {
        header("Location: wall.php?user_id=" . $search_user['id']);
    } else {
        ?> <div class="error_user"> <?php echo "ERROR THÉO DID NOT FIND THE USER ;)"; ?></div>
        <?php
    }
}
?>