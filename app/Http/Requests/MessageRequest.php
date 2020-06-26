<?php

namespace App\Http\Requests;

class MessageRequest extends Request
{
    public $validator = null; //if you need validator->errors() in Controller

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator) //if you need validator->errors() in Controller
    {
        $this->validator = $validator;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $regex = '/^38\(0\d{2}\)\d{7}$/';

        return $rules = [
            'name' => 'bail|required|max:255',
            'phone' => 'bail|required|regex:' . $regex,            
            'message' => 'bail|required|max:500',               
        ];
    }
}
