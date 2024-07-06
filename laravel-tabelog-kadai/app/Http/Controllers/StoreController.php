<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::all();
        return view('stores.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('stores.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = new Store();
        $store->name = $request->input('name');
        $store->image = $request->input('image');
        $store->description = $request->input('description');
        $store->business_hours = $request->input('business_hours');
        $store->price = $request->input('price');
        $store->postal_code = $request->input('postal_code');
        $store->address = $request->input('address');
        $store->phone_number = $request->input('phone_number');
        $store->regular_holiday = $request->input('regular_holiday');
        $store->category_id = $request->input('category_id');
        $store->save();

        return to_route('stores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        return view('stores.show',compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        $categories = Category::all();

        return view('stores.edit',compact('store','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        $store->name = $request->input('name');
        $store->image = $request->input('image');
        $store->description = $request->input('description');
        $store->business_hours = $request->input('business_hours');
        $store->price = $request->input('price');
        $store->postal_code = $request->input('postal_code');
        $store->address = $request->input('address');
        $store->phone_number = $request->input('phone_number');
        $store->regular_holiday = $request->input('regular_holiday');
        $store->update();

        return to_route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        $store->delete();

        return to_route('stores.index');
    }
}
