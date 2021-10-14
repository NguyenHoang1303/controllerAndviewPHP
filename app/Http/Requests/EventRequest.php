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
            'name' => 'required|min:20',
            'brand' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'portfolio' => 'required',
            'ticketPrice' => 'required|numeric|min:0|not_in:0',
            'status' => 'required|integer|min:0|max:3',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"Username cannot be blank",
            'name.min'=>"Username must be more than 20 characters",
            'brand.required'=>"Password cannot be blank",
            'startDate.required'=>"Start date cannot be blank",
            'endDate.required'=>"End date cannot be blank",
            'portfolio.required'=>"Portfolio cannot be blank",
            'ticketPrice.required'=>"Ticket price cannot be blank",
            'ticketPrice.numeric'=>"Ticket must be number",
            'ticketPrice.min'=>"Ticket must be more than 0",
            'ticketPrice.not_in'=>"Ticket must be more than 0",
            'status.required'=>"Status cannot be blank",
            'status.integer'=>"Status must be number",
            'status.min'=>"Status must be number",
            'status.max'=>"Status must be from 0 to 3",
        ];
    }
}
