<?php

namespace App\Http\Controllers\Api;

// import Model "Buku"
use App\Models\Buku;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// import Resource "BookResource"
use App\Http\Resources\BookResource;
use Illuminate\Support\Facades\Validator;

class BookApiController extends Controller
{
    public function index() {
        $books = Buku::latest()->paginate(5);

        return new BookResource(true, 'List Data Buku', $books);
    }

    public function store(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'tgl_terbit' => 'required|date',
            'filepath' => 'nullable|url', // Assuming filepath is a URL to the book image
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Create the new book
        $book = Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit,
            'filepath' => $request->filepath,
        ]);

        // Return a success response with the new book data
        return response()->json([
            'success' => true,
            'message' => 'Book created successfully',
            'data' => new BookResource(true, 'Book Created', $book)
        ], 201);
    }
}