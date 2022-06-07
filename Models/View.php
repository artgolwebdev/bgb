<?php 
class View {
    public static function create($page,$data=null)
    {
        $page = compact('page','data');
        require(ROOTPATH.'/Views/header.php');
        require(ROOTPATH.'/Views/pages/'.$page['page'].'.php');
        require (ROOTPATH.'/Views/footer.php');
    }
}