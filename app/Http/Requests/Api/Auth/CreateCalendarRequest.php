<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use App\Enums\CalendarStatus;

class CreateCalendarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'event' => ['required', 'string'],
            'startDate' => ['required', 'date_format:Y-m-d'],
            'endDate' => ['required', 'date_format:Y-m-d'],
            'schoolYear' => ['required', 'string'],
        ];
    }
}
