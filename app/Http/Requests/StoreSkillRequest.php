<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','min:3','max:20'],
            'slug' => ['required','unique:skills,slug,' . $this->skill->id]
        ];
    }
   /* By including $this->skill->id in the validation rule, Laravel will exclude the current record being updated from the check for uniqueness. This ensures that the slug field remains unique among all other records in the skills table, but still allows the user to keep the same slug value when updating a record.
   is used in a validation rule to specify that the slug field must be unique among all the records in the skills table except for the current record being updated.*/
/* $this refers to the instance of the Form Request class that is being used to validate the request. skill is a property on the Form Request class that holds the current record being updated. id is a property on the skill object that holds the ID of the current record.*/

}
