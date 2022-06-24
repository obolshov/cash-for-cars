<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Routing\Controller as BaseController;

final class Controller extends BaseController
{
    public function index() {
        $reviews = Review::orderBy('id', 'desc')
            ->limit(4)
            ->get()
            ->toArray();

        return view('landing', [
            'reviews' => $reviews,
        ]);
    }
}
