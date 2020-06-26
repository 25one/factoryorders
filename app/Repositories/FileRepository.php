<?php

namespace App\Repositories;

class FileRepository
{
    /**
     * The Repository instance.
     *
     * @var $file
     */
    protected $file;

    /**
     * Create a new FileRepository instance.
     *
     * @param $file
     */
    public function __construct()
    {
        $this->file = config('app.file');
    }    

    /**
     * Store item to file.
     *
     * @param  \App\Http\Requests\Request $request
     * @return void
     */
    public function send($request)
    {
        $content = 'Name: ' . $request->name . PHP_EOL;
        $content .= 'Phone: ' . $request->phone . PHP_EOL;        
        $content .= 'Message: ' . $request->message . PHP_EOL;   
        \Storage::disk('local')->append($this->file, $content);
        return $this->getitems();

    } 

    /**
     * Get items from file.
     *
     * @return void
     */
    public function getitems()
    {
       return \Storage::disk('local')->get($this->file);
    }     

}
