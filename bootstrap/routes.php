<?php
use League\Route\Strategy\RequestResponseStrategy;
use League\Route\Strategy\RestfulStrategy;

$requestResponseStrategy    = new RequestResponseStrategy();
$restfulStrategy            = new RestfulStrategy();


return [
    ['GET',     '/index/',      'NNOD\Controller\IndexController::getAll',      $restfulStrategy],
    ['GET',     '/index/{id}',  'NNOD\Controller\IndexController::getOne',      $restfulStrategy],
    ['GET',     '/training',    'NNOD\Controller\TrainingController::getAll',   $restfulStrategy],
    ['POST',    '/training',    'NNOD\Controller\TrainingController::post',     $restfulStrategy],
    ['PATCH',   '/training',    'NNOD\Controller\TrainingController::post',     $restfulStrategy],
];