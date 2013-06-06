<?php

header("Content-Type: application/json");

define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);

require_once WWW_ROOT. "dao" .DIRECTORY_SEPARATOR. 'CountriesDAO.php';
require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'Slim'. DIRECTORY_SEPARATOR .'Slim.php';


$app = new Slim();

//$app->post('/filledinanswers', 'insertFilledInAnswer');
$app->post('/insertRestaurant/:name/:id', 'insertrestaurant');
$app->post('/insertbezighoud/:name/:id', 'insertbezighoud');
$app->post('/insertTrip/:title/:city/:vervoer/:slaapplaats/:aantalPersonen/:eetgelegenheden/:activiteiten/:vertrek/:eind/:email/:code','insertTrip');

$app->get('/getCountries','getCountries');
$app->get('/getRestaurants/:id','getRestaurants');
$app->get('/getPosition/:id','getPosition');
$app->get('/getBezigheden/:id','getBezigheden');
$app->get('/getCountries/:id', 'getCountriesVal');
$app->get('/getVervoer', 'getVervoer');

$app->get('/getAllTrips/:id', 'getAllTrips');

///1/kortrijkjeDoen/848

$app->put('/updateTrip/:vervoer/:slaapplaats/:aantal/:vertrek/:eind/:eetgelegenheden/:title/:code','updateATrip');
//$app->put('/updateATrip/:vervoer/:slaap/:aantalPersonen/:eetgelegenheden/:activiteiten/:vertrek/:eind/:email/:title/:code','updateTrip');
$app->run();


//function updateTrip($vervoer,$slaap,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$title,$code)
//function updateTrip($vervoer,$slaap,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$title,$code)
function updateATrip($vervoer,$slaapplaats,$aantal,$vertrek,$eind,$eetgelegenheden,$title,$code)
{
    $put = Slim::getInstance()->request()->put();
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->updateATrip($vervoer,$slaapplaats,$aantal,$vertrek,$eind,$eetgelegenheden,$title,$code));
    //echo json_encode($countriesDAO->updateATrip($vervoer,$slaap,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$title,$code));
    //echo json_encode($countriesDAO->updateATrip($vervoer,$slaap,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$title,$code));
    exit();

}
function getCountries()
{
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->getCountries());
    exit();
}

function getVervoer()
{
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->getVervoer());
    exit();
}

function getCountriesVal($id)
{
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->getCountriesVal($id));
    exit();
}

function getAllTrips($id)
{
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->getAllTrips($id));
    exit();
}
function getRestaurants($id){

    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->getRestaurants($id));
    exit();
}

function getBezigheden($id){

    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->getBezigheden($id));
    exit();
}

function getPosition($id){

    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->getPosition($id));
    exit();
}


function insertrestaurant($name,$id)
{
    $post = Slim::getInstance()->request()->post();
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->insertRestaurant($name,$id));
    exit();
}

function insertbezighoud($name,$id)
{
    $post = Slim::getInstance()->request()->post();
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->insertbezighoud($name,$id));
    exit();
}

function insertTrip($title,$city,$vervoer,$slaapplaats,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$code)
{
    $post = Slim::getInstance()->request()->post();
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->insertATrip($title,$city,$vervoer,$slaapplaats,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$code));
    exit();
}





/*

function insertTrip($title,$city,$vervoer,$slaapplaats,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$code)
{
    $post = Slim::getInstance()->request()->post();
    $countriesDAO = new CountriesDAO();
    echo json_encode($countriesDAO->insertATrip($title,$city,$vervoer,$slaapplaats,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$code));
    exit();
}
*/
/*
function getQuestion($id){
    $questionsDAO = new QuestionsDAO();
    echo json_encode($questionsDAO->getQuestion($id));
    exit();
}

function addQuestion($poll_id){
    $post = Slim::getInstance()->request()->post();
    echo json_encode($post);
    exit();
}*/