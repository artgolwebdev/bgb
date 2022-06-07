<?php 
// My simple autoloader
require 'autoload.php';
// Router
if(!isset($_REQUEST['url']))$_REQUEST['url'] = 'home';
switch($_REQUEST['url']){
    case 'home': 
        $homePage = new HomeController();
        $homePage->index();
        break;
    case 'add-image' : 
        $addImagePage = new addImageController();
        $addImagePage->index();
        break;
    case 'save-new-images':
        $saveNewImage = new addImageController();
        $saveNewImage->save();
        break;
    default : 
        http_response_code(404);
        die();
        break;
}
