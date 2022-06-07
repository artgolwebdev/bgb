<?php
class HomeController {
    public function index()
    {
        $images = Image::get();
        return View::create('homepage',$images);
    }
}