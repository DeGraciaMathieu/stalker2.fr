<?php

namespace App\Repositories;

use App\Models;
use Prettus\Repository\Eloquent\BaseRepository;

class PaperRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Models\Paper::class;
    }

    /**
     * @return array 
     */
    public function presenter()
    {
        return Presenters\PaperPresenter::class;
    }    
}
