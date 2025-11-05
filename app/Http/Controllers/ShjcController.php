<?php

namespace App\Http\Controllers;

use App\Models\Shjc;

class ShjcController extends Controller
{
    public function checkVisibility()
    {
        $setting = Shjc::first();
        $visibility = $setting?->visibility ?? 0;

        return response()->json([
            'visibility' => (string) $visibility
        ], 200);
    }
}
