<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

require 'libs/function.php';


// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'STANDAARD WEBSITE');
// Toon de template: output html
$templateParser->display('head.tpl');
//$templateParser->assign('result', $result);
//landingsPage




//
$page = isset($_GET['page']) ? $_GET['page'] : 'shows';

$templateParser->assign('curr_page', $page);
$templateParser->display('views/landingPage.tpl');


$templateParser->display('views/searchEngine.tpl');

switch($page){
    case 'shows':

        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;


        require 'models/select_newsarticles.php';
        $search = isset($_GET['search']);
        $templateParser->assign('result', $result);
        $templateParser->display('views/newsarticles.tpl');

        $templateParser->display('views/pagination.tpl');
        $templateParser->display('views/footer.tpl');
        



        break;
    case 'info':
        //info
        $templateParser->display('views/info.tpl');
        $templateParser->display('views/footer.tpl');


        break;

    case 'contact':

      $templateParser->display('views/footer.tpl');
      break;

    case 'search':
        $search_result = isset($_POST['search_string']) ? $_POST['search_string'] : '';
        require 'models/searchResults.php';
        $templateParser->assign('result',$result);
        $templateParser->display('views/searchResults.tpl');
        $templateParser->display('views/footer.tpl');
        break;

    case 'agenda':
        //contact form
        require "models/select_agenda.php";
        $search = isset($_GET['search']);
        $templateParser->assign('result', $result);
        $templateParser->display('views/agenda.tpl');
        $templateParser->display('views/footer.tpl');



        break;
    default:
        //home


}



// {if $curr_page eq "news"} class="selected" {/if}



// Haal de nieuws artikelen op


// Toon de nieuwsberichten. Oude stijl:
// Bouw dit om naar een template systeem
//include 'views/newsarticles.tpl' ;


//footer
