<?php


namespace App\Repositories;

use App\App\Shared\Repository\RepositoryAbstract;
use App\Models\InBoxUser;

class InBoxUserRepository  extends RepositoryAbstract {

    protected function entity(): string
    {
        return InBoxUser::class;
    }
}
