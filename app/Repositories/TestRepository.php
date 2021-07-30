<?php
namespace App\Repositories;

use App\Http\Resources\Test as ResourcesTest;
use App\Test;

class TestRepository implements TestInterface {
    
    public function getAll() {
        $test = Test::all();
        if ($test->isNotEmpty()) {
            return ResourcesTest::collection($test);
        }

        return null;
    }

    public function get($id) {

    }

    public function store(array $data)
    {
        $test = new Test();
        $test->name = $data['name'];
        $test->address = $data['address'];
        $test->phone = $data['phone'];

        return $test->save();
    }

    public function update($id, array $data){

    }

    public function delete($id){

    }

}