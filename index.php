<?php
	/**
	 * @author Luís Caputo
	 * @version 0.2
	 * @copyright 2020 KaPay, LDA - Todos os Direitos Reservados.
	 */
  
	//inclusão da conexao
	 include 'core/connection.php';
	//require_once('core/include/conection.php');
	//inclusão da fonte
	
	// Arquivo de Configurações
	require_once 'core/config.php';

	// Inclisão do Header

	//require_once('core/include/header.php');
	//include 'assets/css/home/style.css';

	// Inclusão do Paginação
	$requirePage = ( empty($_GET['url']) OR !isset($_GET['url'])) ? 'home' : $_GET['url'];
  
	if ( !file_exists(KP_BASE.'pages'.'\\'.$requirePage.'.phtml') )
	{
	   require_once(KP_BASE.'pages'.'\\'.'erro.phtml');
	}
	else 
	{	
      require_once(KP_BASE.'pages'.'\\'.$requirePage.'.phtml');
	}

	// Inclisão do Footer
	//require_once('core/include/footer.php');
?>