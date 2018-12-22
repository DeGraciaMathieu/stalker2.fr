<?php

namespace App\Http\Presenters;

class PaperPresenter implements Presenter {

    /**
     * @param  array $item
     * @return array
     */
    public function render(array $item)
    {
        return $item;
    }
}
