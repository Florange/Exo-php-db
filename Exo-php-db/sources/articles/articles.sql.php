<?php

// INSERT
function insertArticle(){
	
    $titre = $_POST['TitreArticle'];
    $auteur = $_POST['AuteurArticle'];
    $contenu = $_POST['ContenuArticle'];
    
    $sql = 'INSERT INTO articles VALUES(NULL, \''.$titre.'\', \''.$contenu.'\', NOW(), \''.$auteur.'\' )';
    
    //INSERT INTO articles VALUES(NULL, 'titre', 'contenu', NOW(), 'auteur');
    

    $db = DB::connect();
    
    $db->query($sql);
    
    return 'ok';
    
}


// UPDATE
function updateArticle( $IdArticle ){
	

    echo 'Je fais un update de article';
    
}


// DELETE
function deleteArticle( $IdArticle ){



    echo 'Je fais un delete de article';
}


// CONTROLER //
switch( $action ){
	
	case 'insert' : 
		$process = insertArticle();	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		else 
			$page = 'articleform';
		break;
	
	case 'update' : 
		$process = updateArticle( $_GET[ 'item' ] );	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		else 
			$page = 'articleform';
		break;
	
	case 'delete' : 
		$process = deleteArticle( $_GET[ 'item' ] );	
		if( $process == 'ok' ) 
			header( 'location:index.php?page=home' );
		break;
}

?>