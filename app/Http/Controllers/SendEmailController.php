<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Traits\Indexable,
    Repositories\EmailRepository
};  

class SendEmailController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmailRepository $repository)
    {
        $this->repository = $repository;
    }

}
