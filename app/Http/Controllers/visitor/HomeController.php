<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    //
    public function homepage()
    {
        return view('visitor.home.index');
    }

    public function productionpage()
    {
        return view('visitor.production.index');
    }
    public function profile()
    {
        return view('visitor.profile.index');
    }
    public function contact()
    {
        return view('visitor.contact.index');
    }
    public function product()
    {
        // Fetch data from the JSON file
        $jsonData = file_get_contents(public_path('json/product.json'));
        $data = json_decode($jsonData, true)['products'];

        // Convert array to collection for easier manipulation
        $collection = collect($data);

        // Get the current page from the request (default to 1)
        $currentPage = request()->get('page', 1);

        // Set the number of items per page
        $perPage = 10;

        // Slice the collection to get the items for the current page
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Create a paginator instance
        $paginator = new LengthAwarePaginator(
            $currentPageItems, // Items for the current page
            $collection->count(), // Total number of items
            $perPage, // Items per page
            $currentPage, // Current page number
            ['path' => request()->url(), 'query' => request()->query()] // Preserve query parameters
        );

        // Pass the paginator to the view
        return view('visitor.product.index', ['products' => $paginator]);
    }
}
