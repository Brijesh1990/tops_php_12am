<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::join(
                'categories',
                'products.category_id',
                '=',
                'categories.id'
            )
            ->select(
                'products.*',
                'categories.name as category_name'
            )
            ->latest('products.id')
            ->get();

        return view(
            'products.index',
            compact('products')
        );
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view(
            'products.create',
            compact('categories')
        );
    }

    public function store(Request $request)
    {
        $request->validate([

            'category_id' => 'required|exists:categories,id',

            'name' => 'required|string|max:255',

            'description' => 'nullable|string',

            'price' => 'required|numeric|min:0',

            'quantity' => 'required|integer|min:0',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName =
                time() . '_' .
                uniqid() . '.' .
                $image->getClientOriginalExtension();

            $image->move(
                public_path('uploads/products'),
                $imageName
            );
        }

        Product::create([

            'category_id' => $request->category_id,

            'name' => $request->name,

            'description' => $request->description,

            'price' => $request->price,

            'quantity' => $request->quantity,

            'image' => $imageName,

        ]);

        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Product added successfully!'
            );
    }

    public function show(Product $product)
    {
        $product->load('category');

        return view(
            'products.show',
            compact('product')
        );
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();

        return view(
            'products.edit',
            compact(
                'product',
                'categories'
            )
        );
    }

    public function update(
        Request $request,
        Product $product
    ) {
        $request->validate([

            'category_id' => 'required|exists:categories,id',

            'name' => 'required|string|max:255',

            'description' => 'nullable|string',

            'price' => 'required|numeric|min:0',

            'quantity' => 'required|integer|min:0',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);

        $imageName = $product->image;

        if ($request->hasFile('image')) {

            if (
                $product->image &&
                File::exists(
                    public_path(
                        'uploads/products/' .
                        $product->image
                    )
                )
            ) {
                File::delete(
                    public_path(
                        'uploads/products/' .
                        $product->image
                    )
                );
            }

            $image = $request->file('image');

            $imageName =
                time() . '_' .
                uniqid() . '.' .
                $image->getClientOriginalExtension();

            $image->move(
                public_path('uploads/products'),
                $imageName
            );
        }

        $product->update([

            'category_id' => $request->category_id,

            'name' => $request->name,

            'description' => $request->description,

            'price' => $request->price,

            'quantity' => $request->quantity,

            'image' => $imageName,

        ]);

        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Product updated successfully!'
            );
    }

    public function destroy(Product $product)
    {
        if (
            $product->image &&
            File::exists(
                public_path(
                    'uploads/products/' .
                    $product->image
                )
            )
        ) {
            File::delete(
                public_path(
                    'uploads/products/' .
                    $product->image
                )
            );
        }

        $product->delete();

        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Product deleted successfully!'
            );
    }
}