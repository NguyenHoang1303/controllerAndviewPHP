<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'brand' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'portfolio' => 'required',
            'ticketPrice' => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"Username cannot be blank",
            'brand.required'=>"Password cannot be blank",
            'startDate.required'=>"Start date cannot be blank",
            'endDate.required'=>"End date cannot be blank",
            'portfolio.required'=>"Portfolio cannot be blank",
            'ticketPrice.required'=>"Ticket price cannot be blank",
            'status.required'=>"Status cannot be blank",
        ];
    }
}
