<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller

{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('controlNumber', 'like', "%$search%")
            ->orWhere('trackingNumber', 'like', "%$search%")->paginate();

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
            'sourceofmail' => ['required'],
            'dateReceived' => ['required'],
            'timeReceived' => ['required'],
            'subjectMatter' => ['required'],
            'statuss' => ['required'],
            'actionUnit' => ['required'],
            'dateReleased' => ['required', 'date'],
            'nameofpersonnel' => ['required'],
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
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'controlNumber' => ['required', 'max:255'],
            'sourceofmail' => ['required'],
            'dateReceived' => ['required'],
            'timeReceived' => ['required'],
            'subjectMatter' => ['required'],
            'statuss' => ['required'],
            'actionUnit' => ['required'],
            'dateReleased' => ['required', 'date'],
            'nameofpersonnel' => ['required'],
            'initialReceived' => ['required', 'max:25'],
            'trackingNumber' => ['required', 'max:25'],
        ]);
        // Update user
        $product->update($validated);

        return redirect(route('products.edit', $product))->with('status', 'Product Updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'))->with('status', 'User Successfully Deleted!');
    }


    public function deleteAllp()
    {

        try {
            Product::truncate();

            return redirect()->route('products.index')->with('success', 'All posts deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->with('error', 'Error deleting posts: ' . $e->getMessage());
        }
    }
}
