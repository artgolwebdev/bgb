<?php 
class Image {
    public static function get()
    {
        $images = DataBase::query("SELECT * FROM images ORDER BY id DESC");
        return $images;
    } 

    public function insert($data)
    {
        $insertedRows = DataBase::query("INSERT INTO images (name,description,file) VALUES (?,?,?)",$data);
        return $insertedRows;
    }
}