<?php

namespace App\Repositories\Transformers;

use App\Models\Paper;
use League\Fractal\TransformerAbstract;

class PaperTransformer extends TransformerAbstract
{
    /**
     * @param \App\Models\Paper $paper
     * @return array
     */
    public function transform(Paper $paper)
    {
        return $paper->toArray();
    }
}
