<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    // nama tabel
    protected $table = 'book_category';
    // atribut yg digunakan mjd primary key
    protected $primarykey = 'book_category_id';
}
