<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class ProductController
{
    public function list(Request $request)

    {
        $page = $request->input('page', 1); // Get the current page or default to 1

        $products = Product::paginate(15, ['*'], 'page', $page); // Assuming you paginate by 15
        return view('admin.products.list', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function save(ProductSaveRequest $request)
    {
        $input = $request->validated();
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $filename = Str::random(6) . "_" . time() . "_product." . $extension;
            $request->image->storeAs('images', $filename);
            $input['image'] = $filename;
        }
        Product::create($input);
        return redirect()->route('admin.product.list')->with('message', 'Prodduct saved successfully');
    }
    public function edit($id, Request $request)
    {
        $product = Product::find(decrypt($id));
        $categories = Category::all();
        $page = $request->input('page', 1); // Default to 1 if not provided


        return View('admin.productS.edit', compact('product', 'categories', 'page'));
    }

    public function update(ProductSaveRequest $request)
    {
        $input = $request->validated();

        // Find the product
        $product = Product::find(decrypt($request->product_id));

        if ($product) {
            // Handle image upload if a new file is provided
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($product->image) {
                    Storage::delete('images/' . $product->image);
                }

                // Store the new image
                $extension = $request->image->extension();
                $filename = Str::random(6) . "_" . time() . "_product." . $extension;
                $request->image->storeAs('images', $filename);
                $input['image'] = $filename;
            }

            // Update the product with the new input
            $product->update($input);
        }

        // Get the current page
        $currentPage = $request->input('page', 1);

        // Redirect back to the correct paginated page
        return redirect()->route('admin.product.list', ['page' => $currentPage])
            ->with('message', 'Product updated successfully');
    }




    public function delete($id)
    {

        // Find the product
        $product = Product::find(decrypt($id));

        // Check if the product exists
        if ($product) {
            // Delete the image file if it exists
            if (!empty($product->image)) {
                Storage::delete('images/' . $product->image);
            }

            // Delete the product
            $product->delete();
        }

        // Get the current page
        $currentPage = request()->page;

        // Count the products on the current page
        $productsCount = Product::paginate(15, ['*'], 'page', $currentPage)->count();

        // If there are no products on the current page, redirect to the previous page if available
        if ($productsCount === 0 && $currentPage > 1) {
            $currentPage--;
        }

        // Redirect back to the current or previous page with a success or error message
        return redirect()->route('admin.product.list', ['page' => $currentPage])
            ->with('message', $product ? 'Product deleted successfully' : 'Product not found');
    }
}
