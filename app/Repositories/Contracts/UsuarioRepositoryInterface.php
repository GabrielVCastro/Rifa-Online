<?php

namespace App\Repositories\Contracts;


interface UsuarioRepositoryInterface
{
    public function all();

    public function getId($id);

}

