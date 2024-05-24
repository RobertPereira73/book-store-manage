<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Reports\Borrowed;
use App\Reports\Expired;
use App\Reports\Member;
use App\Reports\Sold;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View
    {
        $reports = [
            (new Sold),
            (new Borrowed),
            (new Expired),
            (new Member)
        ];

        return view('dashboard.index', ['reports' => $reports]);
    }
}
