<?php

namespace App\Repositories\Presenters;

use App\Repositories\Transformers;
use Prettus\Repository\Presenter\FractalPresenter;

class PaperPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new Transformers\PaperTransformer();
    }
}
