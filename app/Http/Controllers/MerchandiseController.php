<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use App\Http\Requests\StoreMerchandiseRequest;
use App\Http\Requests\UpdateMerchandiseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('merchandise.index', [
            'merchandises' => Merchandise::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchandise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerchandiseRequest $request)
    {
        $image = base64_encode(file_get_contents($request->file('image')->getRealPath()));

        $merchandise = Merchandise::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image,
            'stock_quantity' => $request->stock_quantity,
            'category' => $request->category,
        ]);

        if ($merchandise) {
            toastr()->success("Football Merchandise Created Successfully");
        } else {
            toastr()->error("Failed to create Football Merchandise");
        }

        return Redirect::route('merchandise.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merchandise $merchandise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merchandise $merchandise)
    {
        return view('merchandise.edit', [
            'merchandise' => $merchandise,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchandiseRequest $request, Merchandise $merchandise)
    {
        $image = null;
        if ($request->hasFile('image')) {
            $image = base64_encode(file_get_contents($request->file('image')->getRealPath()));
        }
        $merchandise->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image == null ? $merchandise->image : $image,
            'stock_quantity' => $request->stock_quantity,
            'category' => $request->category,
        ]);

        if ($merchandise->wasChanged()) {
            toastr()->success("Football Merchandise Updated Successfully");
        } else {
            toastr()->info("No changes were made to the Football Merchandise");
        }

        return Redirect::route('merchandise.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merchandise $merchandise)
    {
        if ($merchandise->delete()) {
            toastr()->success("Football Merchandise Archived Successfully");
        } else {
            toastr()->error("Failed to archive Football Merchandise");
        }

        return Redirect::route('merchandise.index');
    }

    public function search(Request $request)
    {
        $merchandise = null;

        switch ($request->sort) {
            case 'low':
                $merchandise = Merchandise::orderBy('price')->orderByDesc('created_at');
                break;
            case 'high':
                $merchandise = Merchandise::orderByDesc('price')->orderByDesc('created_at');
                break;
            default:
                $merchandise = Merchandise::orderByDesc('created_at');
        }

        if ($request->search_category != null || $request->search_query != null) {
            if ($request->search_category == null) {
                $merchandise->where('name', 'like', '%' . $request->search_query . '%');
            } else {
                $merchandise->where('name', 'like', '%' . $request->search_query . '%')
                    ->where('category', '=', $request->search_category);
            }
        }
        return view('dashboard', [
            'merchandises' => $merchandise->get(),
            'is_search' => true,
        ]);
    }

    /**
     * Archived Event List
     */
    public function archived()
    {
        return view('merchandise.archived', [
            'merchandises' => Merchandise::onlyTrashed()->get()
        ]);
    }
}
