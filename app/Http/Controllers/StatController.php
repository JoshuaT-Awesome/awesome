<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stat;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {



        $stats = Stat::all();

        return view('layouts.stats.index', compact('stats'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts.stats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
            // Create a new stat using the request data
        Stat::create(request(['id' ]));


        // Save it to the database

        //  And then redirect to the home page.
        return redirect('/stats');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stat $stat)
    {
       /* $stats = Stat::find($stats);
        return $stats;
*/
        //Stat::find(wildcard)
         /*$foo = DB::table('stats')
         ->count();

         $users = DB::table('stats')
         ->get();


         $bar = array(
            'foo' => $foo,
            'users' => $users, 
            
            );
                 */
         $stats = Stat::all();

          

  
        //return view('layouts.stats.show', compact('stats'));
        return view('layouts.stats.show',  compact('stat'));
    }
 

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the id
        $stat = Stat::find($id);

        $speed = DB::table('stats')
        ->where('id', $id)
        ->increment('speed', 5);
  

        // show the edit form and pass the id
        return View('layouts.stats.edit')
            ->with('stat', $stat);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
