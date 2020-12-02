<?php


namespace App\Controller\PublicControllers\TagControllers;



use App\Controller\BaseController;

class AddTagController extends BaseController
{

    public function run()
    {
        $this->view("Tags.add-tag");
    }
}
