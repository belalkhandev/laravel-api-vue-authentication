<?php
namespace App\Repositories;

interface CategoryInterface {
    
    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id);

}
