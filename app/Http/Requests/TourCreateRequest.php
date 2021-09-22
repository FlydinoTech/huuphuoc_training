<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourCreateRequest extends FormRequest
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
            'name' => 'required|min:2',
            'description' => 'required|min:50',
            'file' => 'required',
            'day' => 'required|numeric',
            'night' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
        ];
    }
    public function messages(){
        return [
            'name.required' => trans('admin.tour.nameRequired'),
            'name.min' => trans('admin.tour.nameMin'),
            'description.required' => trans('admin.tour.descriptionRequired'),
            'description.min' => trans('admin.tour.descriptionMin'),
            'file.required' => trans('admin.tour.pictureRequired'),
            'day.required' => trans('admin.tour.dayRequired'),
            'day.numeric' => trans('admin.tour.dayNumberic'),
            'night.required' => trans('admin.tour.nightRequired'),
            'night.numeric' => trans('admin.tour.nightNumberic'),
            'price.required' => trans('admin.tour.priceRequired'),
            'price.numeric' => trans('admin.tour.priceNumberic'),
            'discount.required' => trans('admin.tour.discountRequired'),
            'discount.numeric' => trans('admin.tour.discountNumberic'),
        ];
    }
}
