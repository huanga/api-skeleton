<?php
namespace NNOD\Controller;

use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    public function getAll(Request $request) {
        return ['OK' => 'Routes Loaded'];
    }

    public function getOne(Request $request, $args) {
        return ['OK' => $args];
    }
}