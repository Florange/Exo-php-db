<?php
function selectArticles(){

    $db = Db::connect();
    $results = $db->query( 'SELECT * FROM articles' );
    
    return $results;    
}


function selectArticleById( $IdArticle ){

}
?>