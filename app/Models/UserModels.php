<?php

namespace App\Models;

use Codeigniter\Model;

class UserModels extends Model
{
    protected $table = "simple_web";
    protected $primaryKey = "id";
    protected $allowedFields = ["email", "password", "token"];
    protected $useAutoIncrement = true;
}
