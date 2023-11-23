<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller

{

    public function index()
    {

        $products = Product::paginate(10);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate new user data
        $validated = $request->validate([
            'controlNumber' => ['required', 'max:255'],
            'sourceofmail' => ['required', 'max:255'],
            'subjectMatter' => ['required', 'max:255'],
            'statuss' => ['required', 'max:255'],
            'actionUnit' => ['required', 'max:255'],
            'dateReleased' => ['required', 'date'],
            'nameofpersonnel' => ['required', 'max:255'],
            'initialReceived' => ['required', 'max:25'],
            'trackingNumber' => ['required', 'max:25'],
        ]);

        // Create a new user
        $product = Product::create($validated);

        return redirect(route('products.create'))->with('status', 'New User Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $user)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
    }
}
