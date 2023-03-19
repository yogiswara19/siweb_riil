<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    // nama tabel
    protected $table = 'book';
    // atribut yg digunakan mjd primary key
    protected $primarykey = 'book_id';
    // atribut yg menyimpan created_at dan deleted_at
    protected $useTimestamps = true;
    protected $allowedFields = [
        'title', 'slug', 'author', 'release_year', 'price', 'discount', 'stock', 'book_category_id', 'cover'
    ];


    public function getBook($slug = false)
    {
        $query = $this->table('book')
            ->join('book_category', 'book_category_id');

        if ($slug == false)
            return $query->get()->getResultArray();
        return $query->where(['slug' => $slug])->first();
    }
}
