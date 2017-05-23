<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProjectController extends Controller{
    public function createAction(){ return new Response("<i>creating book entry ...</i>"); }
    public function readAction(){ return new Response("<i>reading book ...</i>"); }
    public function updateAction(){ return new Response("<i>updating book ...</i>"); }
    public function deleteAction(){ return new Response("<i>deleting book ...</i>"); }
}