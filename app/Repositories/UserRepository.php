<?php
namespace App\Repositories;
use App\Models\record;

class UserRepository{
    public function show()
    {
        return record::orderBy('id','asc')->get();
    }

}