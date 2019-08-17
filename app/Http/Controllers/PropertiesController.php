<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Http\Resources\Property as PropertyResource;
use App\Building;
use App\Http\Resources\Building as BuildingResource;
use App\Landlord;
use App\Http\Resources\Landlord as LandlordResource;
class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderBy('tbl_properties.id', 'desc')
        ->join('tbl_buildings', 'tbl_buildings.id' , '=', 'tbl_properties.building_id')
        ->join('tbl_landlords', 'tbl_landlords.id' , '=', 'tbl_properties.building_id')
        ->select(['tbl_properties.*', 'tbl_buildings.name AS building_name', 'tbl_landlords.firstname', 'tbl_landlords.lastname'])
        ->paginate(15);
        return PropertyResource::collection($properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PropertyResource(Property::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buildings = Building::all()->toArray();
        $landlords = Landlord::all()->toArray();
        return view('assets.properties.edit', ['propertyID' => $id, 'buildings' => $buildings, 'landlords' => $landlords]);
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
