<?php 

class addImageController {
    public function index()
    {
        return View::create('add_image');
    }

    public function save()
    {
        for($i=0;$i<=$_POST['number']-1;$i++){
            // TO DO 
            // Validation 

            $target_dir = "files/";
            $target_file = $target_dir .  $_FILES['files']['name'][$i];
            if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file))
            {
                Image::insert([ $_POST['names'][$i],$_POST['descriptions'][$i],$_FILES['files']['name'][$i]]);
            }

        }
        header('Location: '.URL);
 
    }
}