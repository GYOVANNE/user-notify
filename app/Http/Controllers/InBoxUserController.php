<?php

namespace App\Http\Controllers;

use App\Http\Requests\InBoxRequest;
use App\Services\InBoxUserService;

class InBoxUserController extends Controller
{
    private $service;

    public function __construct(InBoxUserService $service) {
        $this->service = $service;
    }

    /**
     * Creating a new message.
     */
    public function store(InBoxRequest $request)
    {
        return $this->service->create($request->all())->response();
    }
}
