<?php

namespace App\Http\Controllers;

use App\Http\Message;
use App\Http\Requests\StoreProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        /** @var Message $messages */
        $message = $request->session()->get('message');
        return view('pages.home', ['products' => $products, 'message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        $validatedData = $request->validated();
        Product::create($validatedData);

        return response()->redirectToAction('ProductsController@index')
            ->with('message', new Message($this->successStored('added'), 'success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages.form', [
            'action' => route('products.update', $product->id),
            'name' => $product->name,
            'qty' => $product->qty,
            'method' => 'PUT'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, Product $product)
    {
        $validatedData = $request->validated();
        $product->update($validatedData);

        return response()->redirectToRoute('products.index')
            ->with('message', new Message($this->successStored('edited'), 'success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $product
     * @param Request $request
     * @return void
     * @throws \Exception
     */
    public function destroy(Product $product, Request $request)
    {
        $product->delete();

        $request->session()->flash('message', new Message($this->successStored('deleted'), 'success'));
    }

    private function successStored(string $action): string  {
        return "The product has been $action successfully";
    }
}
