<?php

namespace App\Http\Controllers;

use App\Models\WordType;
use App\Http\Requests\StoreWordTypeRequest;
use App\Http\Requests\UpdateWordTypeRequest;

class WordTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wordtypes = WordType::paginate(5);
        //$greeting = 'hello';
        return view('wordtypes.index', compact(['wordtypes']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWordTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WordType $wordType)
    {
       return view('wordtypes.show', compact(['wordType'])) //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WordType $wordType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWordTypeRequest $request, WordType $wordType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WordType $wordType)
    {
        //
    }
}
