<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug

        ];
    }
}

/* A Resource is a class that is responsible for transforming a model or any other data into a JSON response.
 *//* A resource class in Laravel is responsible for transforming model data into a JSON representation that can be returned as a response from an API endpoint. The resource class defines how the model data should be presented in the response, including which fields to include, how to format the data, and any additional meta information that should be included.

By convention, resource classes in Laravel are typically named after the model they represent and are stored in the app/Http/Resources directory. */

