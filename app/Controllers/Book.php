<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\CategoryModel;

// define('_TITLE', 'Buku');

class Book extends BaseController
{
    private $bookModel, $catModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
        $this->catModel = new CategoryModel();
    }

    public function index()
    {
        $bookModel = new BookModel();
        $dataBook = $this->bookModel->getBook();
        $data = [
            'title' => 'Data Buku',
            'result' => $dataBook
        ];
        // dd($dataBook); // dd = vardump
        return view('book/index', $data);
    }

    public function detail($slug)
    {
        $dataBook = $this->bookModel->getBook($slug);
        $data = [
            'title' => 'Detail Buku',
            'result' => $dataBook
        ];
        return view('book/detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Buku',
            'category' => $this->catModel->findAll(),
            'validation' => \Config\Services::validation()
        ];
        // dd(\config\Services::validation()->getErrors());
        return view('book/create', $data);
    }

    public function save()
    {
        // Validasi input
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[book.title]',
                'label' => 'Judul',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'author' => 'required',
            'release_year' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'permit_empty|decimal',
            'stock' => 'required|numeric',
        ])) {
            // dd(\config\Services::validation()->getErrors());
            return redirect()->to('/book/create')->withInput();
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->bookModel->save([
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'release_year' => $this->request->getVar('release_year'),
            'price' => $this->request->getVar('price'),
            'discount' => $this->request->getVar('discount'),
            'stock' => $this->request->getVar('stock'),
            'book_category_id' => $this->request->getVar('book_category_id'),
            'slug' => $slug,
        ]);

        session()->setFlashdata("msg", "Data berhasil ditambahkan!");
        return redirect()->to('/book');
    }
}
