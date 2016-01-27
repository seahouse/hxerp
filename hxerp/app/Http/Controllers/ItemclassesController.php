<?php

namespace App\Http\Controllers;

use App\Itemclass;
use App\Http\Requests\ItemclassRequest;
use Request;
//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemclassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
//         $itemclasses = Itemclass::all();
        $itemclasses = Itemclass::latest('created_at')->paginate(10);
        return view('itemclasses.index', compact('itemclasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('itemclasses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ItemclassRequest $request)
    {
        //
        $input = Request::all();
        Itemclass::create($input);
        return redirect('itemclasses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $itemclass = Itemclass::findOrFail($id);
        return view('itemclasses.show', compact('itemclass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $itemclass = Itemclass::findOrFail($id);
        return view('itemclasses.edit', compact('itemclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ItemclassRequest $request)
    {
        //
        $itemclass = Itemclass::findOrFail($id);
        $itemclass->update($request->all());
        return redirect('itemclasses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
