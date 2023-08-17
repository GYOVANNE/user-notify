<?php

namespace App\Services;

use App\App\Shared\Response\ResponseSuccess;
use App\Repositories\InBoxUserRepository;
use Illuminate\Http\Response;

class InBoxUserService {

    private $repository;

    public function __construct(InBoxUserRepository $repository) {
        $this->repository = $repository;
    }

    public function create(array $data) {
        $this->repository->create($data);
        return new ResponseSuccess('Mensagem criada com sucesso', Response::HTTP_CREATED);
    }
}
