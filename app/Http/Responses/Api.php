<?php

namespace App\Http\Responses;

use Datetime;
use Response;
use App\Http\Presenters\Presenter;
use Illuminate\Contracts\Support\Responsable;

class Api implements Responsable {

    /**
     * @param \App\Http\Presenters\Presenter $presenter
     * @param array $items
     */
    public function __construct(Presenter $presenter, array $items)
    {
        $this->presenter = $presenter;
        $this->items = $items;
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Response
     */
    public function toResponse($request)
    {
        return Response::json([
            'timestamp' => (new DateTime())->getTimestamp(),
            'data' => $this->present(),
        ], 200);
    }

    /**
     * @return array
     */
    protected function present()
    {
        return array_map(function($item) {
            return $this->presenter->render($item);
        }, $this->items);
    }
}
