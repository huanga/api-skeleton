<?php
namespace NNOD\Controller;

use Symfony\Component\HttpFoundation\Request;
use League\Route\Http\JsonResponse as Response;
use League\Route\Http\Exception\MethodNotAllowedException;

class TrainingController
{
    public function getAll(Request $request) {
        throw new MethodNotAllowedException(
            ['POST', 'PATCH'],
            'This resource does not accept GET requests'
        );
    }

    public function post(Request $request) {
        return $this->patch($request);
    }

    public function patch(Request $request) {
        return new Response\Created(
            [
                'OK' => 'Training Completed',
                'Training Body' => $request->getContent()
            ]
        );
    }
}