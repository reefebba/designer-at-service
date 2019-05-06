<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use TimeHunter\LaravelGoogleReCaptchaV3\Validations\GoogleReCaptchaV3ValidationRule;

class DesignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $design = Design::find($this->route('id'));

        // return $design && $this->user()->can('update', $design);
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
            'user_id' => 'nullable',
            'status' => 'sometimes|alpha',
            'client_name' => ['required', 'regex:/^(?!\s)[a-zA-Z|\s|\.]+$/'],
            'client_phone' => 'required|numeric|digits_between:10,14',
            'size' => 'required',
            'base_color' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'type' => 'required|in:
                        "kajian rutin", "kajian tematik", "tablig akbar", "safari dakwah"',
            'audience' => 'required',
            'title' => 'required',
            'tag_line' => 'nullable',
            'lecturer' => 'required',
            'book' => 'nullable',
            'place' => 'required',
            'date' => 'required|date|after:+ 3 days', // or tomorrow ?
            'time' => 'required',
            'organizer' => 'required',
            'contact' => 'required',
            'donation' => 'nullable',
            'is_meal' => 'required|boolean',
            'is_streaming' => 'required|boolean',
            'add_info' => 'nullable',
            'g-recaptcha-response' => ['required', new GoogleReCaptchaV3ValidationRule('submit_design')]
        ];
    }
}
