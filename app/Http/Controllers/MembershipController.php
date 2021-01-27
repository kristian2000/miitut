<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function __invoke()
    {
        $memberships = Membership::all();

        return response()->json($memberships);
    }
}
