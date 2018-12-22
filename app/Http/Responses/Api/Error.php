<?php

namespace App\Http\Responses\Api;

use Datetime;
use Response;
use App\Http\Presenters\Presenter;
use Illuminate\Contracts\Support\Responsable;

class Error implements Responsable {

    /**
     * @param \App\Http\Presenters\Presenter $presenter
     * @param array $items
     */
    public function __construct()
    {

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
        return 1;
    }
}
