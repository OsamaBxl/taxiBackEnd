<?php

namespace App\Http\Requests\booking;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CreateBooking extends FormRequest
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
            'fullName' => 'required|string',
            'email' => 'required|email',
            'phoneCode' => 'required|string',
            'phoneNumber' => 'required|string|max:15',
            'pickUp' => 'required|in:Bruxelles ville,Bruxelles Aéroport,Charleroi aéroport,Ostende Aéroport,autre',
            'dropOff' => 'required|in:Bruxelles ville,Bruxelles Aéroport,Charleroi aéroport,Ostende Aéroport,autre',
            'otherAddressPick' => 'string|nullable',
            'otherAddressDrop' => 'string|nullable',
            'suitecaseNum' => 'required|integer',
            'personsNum' => 'required|integer',
            'choiceTaxi' => 'required|in:standard,VIP',
            'time' => 'required|string',
            'payment' => 'required|in:cash,visa',
            'estimation' => 'required|integer',
            'additionalInfo' => 'string|nullable'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'errors' => $validator->errors(),
                'status' => true
            ], 422)
        );
    }
}
