<?php

namespace App\Http\Controllers\Api;

use App\Http\Responses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PaperRepository;
use App\Http\Presenters\PaperPresenter;

class PapersController extends Controller
{
	/**
	 * @param \App\Repositories\PaperRepository $repository
	 * @param \App\Http\Presenters\PaperPresenter $presenter 
	 */
    public function __construct(PaperRepository $repository, PaperPresenter $presenter)
    {
        $this->repository = $repository;
        $this->presenter = $presenter;
    }

    /**
     * @return \App\Http\Responses\Api
     */
    public function all()
    {
        $papers = $this->repository->all();

        return new Responses\Api($this->presenter, $papers['data']);
    }

    /**
     * @return \App\Http\Responses\Api
     */
    public function show(Request $request)
    {
        $paper = $this->repository->find($request->id);

        return new Responses\Api($this->presenter, [$paper]);
    }    
}
