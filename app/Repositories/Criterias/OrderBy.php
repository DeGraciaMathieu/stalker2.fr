<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class OrderBy implements CriteriaInterface {

    protected $sort;

    public function __construct($sort)
    {
        $this->sort = $sort;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->orderByDesc($this->sort);

        return $model;
    }
}