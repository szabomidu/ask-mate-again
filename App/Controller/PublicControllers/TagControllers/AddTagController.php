<?php


namespace App\Controller\PublicControllers\TagControllers;



class AddTagController extends \App\Controller\BaseController
{

    public function run()
    {
        $this->view("tags.addtag");
    }
}