
    <ul class="menu">

    <li><a href="index.php?page=articleform">Titre de l'article</a></li>
<?php
$db = Db::connect();
$results = $db->query( 'SELECT * FROM articles' );


//var_dump ( $results );


while( $row = $results->fetch_array() )
{
    ?>
    <li><?php echo $row['TitleArticle'] ; ?></li>
    echo $row -> TitleArticle;
    <?php
}
?>
    </ul>
