<?php
namespace App\Repositories;

use App\Category;

class CategoryRepository implements CategoryInterface {
    public function getAll()
    {
        return Category::all()->toArray();
    }

    public function get($id)
    {

    }

    public function store(array $data)
    {

    }

    public function update($id, array $data)
    {

    }

    public function delete($id)
    {

    }
}