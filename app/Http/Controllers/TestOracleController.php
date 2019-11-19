<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestOracleController extends Controller
{
    // test select companies oracle

    public function test()
    {
        $companies = DB::select('select code, description from sst_companies')->paginate(15);
        return view('company', compact('companies'));
        //var_dump($companies);
    }
}
