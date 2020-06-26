<?php

namespace App\Repositories;

use App\Models\ {
    Order
};

class HomeRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_order;

    /**
     * The Repository instance.
     *
     * @var $file
     */
    protected $file;

    /**
     * Create a new HomeRepository instance.
     *
     * @param  \App\Models\Order $model_order
     */
    public function __construct(Order $model_order)
    {
        $this->model_order = $model_order;
        $this->file = config('app.file');
    }

    /**
     * Get items from DB.
     *
     * @param  \App\Http\Requests\Request $request
     * @return void
     */
    public function getdb()
    {
        $this->model_order->setConnection('mysql1');
        $db[1] = $this->model_order->select('id', 'name', 'phone', 'message')->get();
        $this->model_order->setConnection('mysql2');
        $db[2] = $this->model_order->select('id', 'name', 'phone', 'message')->get();
        $this->model_order->setConnection('mysql3');
        $db[3] = $this->model_order->select('id', 'name', 'phone', 'message')->get();
        return $db;
    }  

    /**
     * Get items from file.
     *
     * @param  \App\Http\Requests\Request $request
     * @return void
     */
    public function getfile()
    {
        return \Storage::disk('local')->get($this->file);
    }            

}
