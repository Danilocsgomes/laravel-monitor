<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Endpoint;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index(Endpoint $endpoint)
    {
        $checks = $endpoint->checks()->paginate(10);

        return view('admin.endpoints.logs.index', compact('endpoint', 'checks'));
    }
}
