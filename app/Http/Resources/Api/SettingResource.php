<?php

namespace App\Http\Resources\Api;

use App\Helpers\GlobalHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'settings' => GlobalHelper::getSettings(),
        ];
    }
}
