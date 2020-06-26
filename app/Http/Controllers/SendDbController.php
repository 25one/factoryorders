<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Traits\Indexable,
    Repositories\DbRepository
};    

class SendDbController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DbRepository $repository)
    {
        $this->repository = $repository;
    }

}
