<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Categories;

class Incomes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::orderBy('created_at', 'DESC')->paginate(15);
        return view('incomes.index', ['incomes' => $incomes] );
    }

    public function archive()
    {
        $incomes = Income::onlyTrashed()->paginate(15);
        return view('incomes.archive', ['incomes' => $incomes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categories::all();
        return view('incomes.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Income::create([
            "name" => $request->title,
            "amount" => $request->amount,
            "description" => $request->description,
            "categories_id" => $request->category_id,
        ]);

        if($result) {
            return redirect()->action(
                'Incomes@index', []
            )->with('message', 'Income created!');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $income = Income::find($id);
        return view('incomes.show', ['income' => $income]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $income = Income::find($id);
        $categories = Categories::all();
        return view('incomes.edit', ['income' => $income, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $income = Income::find($id);

        $result = $income->update([
            "name" => $request->title,
            "amount" => $request->amount,
            "description" => $request->description,
            "categories_id" => $request->category_id
        ]);

        if($result) {
            return redirect()->action(
                'Incomes@index', []
            )->with('message', 'Income updated!');;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $income = Income::find($id);
        
        $result = $income->delete();

        if($result) {
            return redirect()->action(
                'Incomes@index', []
            )->with('message', 'Income delete!');;
        } 
    }
}
