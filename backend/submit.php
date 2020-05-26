<?php
if($_POST["lan"]=="" || !isset($_POST["lan"])){
    header('Location: tab1.php');
}
if($_POST["menuType"]=="" || !isset($_POST["menuType"])){
   header('Location: tab1.php');
}
$menuType = $_POST["menuType"];
$language = $_POST["lan"];
if (!file_exists('./translations/'.$language.'.json')) {
    header('Location: tab3.php');
} 
$languageData = file_get_contents('./translations/'.$language.'.json');
$languageData = json_decode($languageData);
switch($menuType){
    case "menu":
        $navMenu = $languageData->menu;
        $navMenu->about = $_POST["about"];
        $navMenu->services = $_POST["services"];
        $navMenu->portfolio = $_POST["portfolio"];
        $navMenu->contact = $_POST["contact"];
        break;
    case "header": 
        $header = $languageData->header;
        $header->title = $_POST["headerTitle"];
        $header->subtitle = $_POST["headerSubtitle"];
        $header->button = $_POST["headerButton"];
        break;
    case "about": 
        $about = $languageData->about;
        $about->title = $_POST["aboutTitle"];
        $about->subtitle = $_POST["aboutSubtitle"];
        $about->button = $_POST["aboutButton"];
        break;
    case "service":
        $service = $languageData->service;
        $service->title = $_POST["serviceTitle"];
        $service->todos[0]->title = $_POST["todoTitle0"];
        $service->todos[0]->subtitle = $_POST["todoSubtitle0"];
        $service->todos[1]->title = $_POST["todoTitle1"];
        $service->todos[1]->subtitle = $_POST["todoSubtitle1"];
        $service->todos[2]->title = $_POST["todoTitle2"];
        $service->todos[2]->subtitle = $_POST["todoSubtitle2"];
        $service->todos[3]->title = $_POST["todoTitle3"];
        $service->todos[3]->subtitle = $_POST["todoSubtitle3"];        
        break;
    case "portfolio": 
        $projects = $languageData->projects;
        $projects[0]->name = $_POST["projectTitle0"];
        $projects[0]->category = $_POST["projectCategory0"];
        $projects[1]->name = $_POST["projectTitle1"];
        $projects[1]->category = $_POST["projectCategory1"];
        $projects[2]->name = $_POST["projectTitle2"];
        $projects[2]->category = $_POST["projectCategory2"];
        $projects[3]->name = $_POST["projectTitle3"];
        $projects[3]->category = $_POST["projectCategory3"];
        $projects[4]->name = $_POST["projectTitle4"];
        $projects[4]->category = $_POST["projectCategory4"];
        $projects[5]->name = $_POST["projectTitle5"];
        $projects[5]->category = $_POST["projectCategory5"];
        break;
    case "contact": 
        $contact = $languageData->contact;
        $contact->title = $_POST["contactTitle"];
        $contact->subtitle = $_POST["contactSubtitle"];
        $contact->number = $_POST["contactNumber"];
        $contact->email = $_POST["contactEmail"];
        break;
}

$result = json_encode($languageData);
$myfile = fopen('./translations/'.$language.'.json', "w") or die("Unable to open file!");
fwrite($myfile, $result);
header('Location: tab.php');
?>