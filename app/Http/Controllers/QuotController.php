<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quot;

class QuotController extends Controller
{
    //
	public function index()
	{
        // get the list of the first row from quotes table
		$quots = Quot::paginate(3); // using function oaginate to give us the pagination option to use it on the view
		return view('quots.index', compact('quots'));
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get the view to create new quotes
    	return view('quots.create'); 
    }

    public function store(Request $request)
    {
        // store user input to database
        $request->validate([
            'author'=>'required',
            'body'=>'required'
        ]);
        $quot = new Quot([
            'author' => $request->get('author'),
            'body' => $request->get('body')
        ]);
        $quot->save(); // save data tnto database
        return redirect('/quots')->with('success', 'Quot saved thank you!');
    }


}
