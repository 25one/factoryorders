<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\DbRepository
     * @var \App\Repositories\FileRepository 
     * @var \App\Repositories\EmailRepository
     */
    protected $repository; 

    /**
     * Show the application home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(MessageRequest $request)
    {
        if(isset($request->validator) && $request->validator->fails()) 
        {
            return response()->json([
                'errors' => $request->validator->errors(),
            ]);            
        }

        //return $this->repository->send($request);
        return response()->json([
            'success' => $this->repository->send($request),
        ]);   
    }

}