<?php

namespace App\Repositories\Eloquent;
use App\Models\Produtos;
class ProdutosRepository
{

    private $model;

    public function __construct()
    {
      $this->model = app(Produtos::class);
    }
    public function all()
    {
        return $this->model->all();
    }
    public function save($dados)
    {

        return $this->model->create($dados);
    }

    public function get_id($id)
    {

        return $this->model->find($id);
    }

    public function delete($id)
    {

        return $this->model->destroy($id);
    }



}
