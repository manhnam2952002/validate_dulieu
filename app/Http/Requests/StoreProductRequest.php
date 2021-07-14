<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'eventName' => 'required|min:20',
            'bandNames' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'ticketPrice' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'eventName.required' => 'Vui lòng nhập tên.',
            'eventName.min' => 'Tên phải 20 ký tự trở lên.',
            'bandNames.required' => 'Vui lòng nhập tên ban nhạc.',
            'startDate.required' => 'Vui lòng nhập ngày bắt đầu.',
            'endDate.required' => 'Vui lòng nhập ngày kết thúc.',
            'ticketPrice.required' => 'nhập giá vé phải lớn hơn 0.',
            'status.required' => 'vui lòng nhập có giá trị là 0, 1, 2, 3'
        ];
    }

    // validate theo business riêng.
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if($this->get('name') == 'manhnam'){
                $validator->errors()->add('name', 'Dep trai .');
            }
        });
    }
}
