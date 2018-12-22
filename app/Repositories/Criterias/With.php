<?php

namespace App\Repositories\Criterias;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class With implements CriteriaInterface {

    protected $relation;

    public function __construct($relation)
    {
        $this->relation = $relation;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->with($this->relation);

        return $model;
    }
}