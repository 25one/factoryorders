<?php

namespace App\Repositories;

class EmailRepository
{
    /**
     * The Repository instance.
     *
     * @var $email
     */
    protected $email;

    /**
     * Create a new EmailRepository instance.
     *
     * @param $file
     */
    public function __construct()
    {
        $this->email = config('app.email');
    }

    /**
     * Send item to email.
     *
     * @param  \App\Http\Requests\Request $request
     * @return void
     */
    public function send($request)
    {
       $title = 'Message from site' . date('d-m-Y H:i:s');
       $message = 'Name: ' . $request->name . '<br>';
       $message .= 'Phone: ' . $request->phone . '<br>';        
       $message .= 'Message: ' . $request->message; 
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://api.25one.com.ua/api_mail.php?email_to=' . $this->email . '&title=' . $title . '&message=' . $message);            
    } 

}
