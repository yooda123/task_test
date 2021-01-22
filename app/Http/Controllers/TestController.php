<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index() {

        /**
         * Eloquent
         */
        // $values = Test::all();
        // dd($values->count());

        /**
         * クエリビルダ
         */
        $values = DB::table('tests')->select('id')->get();
        dd($values);

        return view('tests.test', compact('values'));
    }
}
