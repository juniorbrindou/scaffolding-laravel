<?php

namespace App\Http\Controllers\Ressources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;

class RegionController extends Controller
{
    /*Show all the resources.*/
    public function all()
    {
        $region = Region::all();
        return $region;
    }

    /*Show the form for creating a new resource.*/
    public function create()
    {
        //
    }

    /*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:regions',
        ]);

        $region = Region::create([
            'name' => $request->name,
        ]);

        return $region;
    }

    /*Display the specified resource.*/
    public function show($id)
    {
        //
    }

    /*Show the form for editing the specified resource.*/
    public function edit($id)
    {
        //
    }

    /*Update the specified resource in storage.*/
    public function update(Request $request, $id)
    {
        //
    }

    /*Remove the specified resource from storage.*/
    public function destroy($id)
    {
        //
    }
}
