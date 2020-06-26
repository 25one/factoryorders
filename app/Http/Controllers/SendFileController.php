<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Traits\Indexable,
    Repositories\FileRepository
};  

class SendFileController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FileRepository $repository)
    {
        $this->repository = $repository;
    }

}
