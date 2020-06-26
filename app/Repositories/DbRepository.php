<?php

namespace App\Repositories;

use App\Models\ {
    Order
};

class DbRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_order;

    /**
     * Create a new DbRepository instance.
     *
     * @param  \App\Models\Order $model_order
     */
    public function __construct(Order $model_order)
    {
        $this->model_order = $model_order;
    }

    /**
     * Store item to DB.
     *
     * @param  \App\Http\Requests\Request $request
     * @return void
     */
    public function send($request)
    {
        $this->model_order->setConnection('mysql' . $request->number);
        $this->model_order->name = $request->name;
        $this->model_order->phone = $request->phone;
        $this->model_order->message = $request->message;
        $this->model_order->save();
        return $this->getitems($request);
    } 

    /**
     * Get items from DB.
     *
     * @param  \App\Http\Requests\Request $request
     * @return void
     */
    public function getitems($request)
    {
        $this->model_order->setConnection('mysql' . $request->number);
        return $this->model_order->select('id', 'name', 'phone', 'message')->get();
    }     

}
