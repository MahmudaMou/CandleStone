<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FundAdd extends FormRequest
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
            'fund_name'=>'required|max:255',
            'nav_as_on'=>'required|date',
            'nav_per_unit'=>'required',
            'investor_buy_Price'=>'required',
            'investor_sale_price'=>'required'
        ];
    }
}
