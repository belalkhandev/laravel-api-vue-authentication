<?php

namespace App\Http\Controllers;

use App\Repositories\TestInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    protected $test;

    public function __construct(TestInterface $test)
    {
        $this->test = $test;
    }

    public function index()
    {
        $tests = $this->test->getAll();

        return response()->json([
            'test' => $tests
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

        //store test
        if($this->test->store($request->all())) {
            return response()->json([
                'status' => true,
                'message' => 'success'
            ]);
        }
    }
}
