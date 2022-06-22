<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\Owner;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id','asc')->paginate(15);

        return view('pages.cars.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('id','asc')->get();
        $owners = Owner::orderBy('id','asc')->get();
        return view('pages.cars.create',['brands'=>$brands,'owners'=>$owners]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'brand_id'            => 'required',
            'registration'        => 'required',
            'year_of_manufacture' => 'required',
            'color'               => 'required',
            'owner_id'            => 'required',
        ]);

        Car::create([
            'brand_id'            => $request->brand_id,
            'registration'        => $request->registration,
            'year_of_manufacture' => $request->year_of_manufacture,
            'color'               => $request->color,
            'owner_id'            => $request->owner_id,
        ]);
        return redirect('cars')->with('status','Car created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('pages.cars.show',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands = Brand::orderBy('id','asc')->get();
        $owners = Owner::orderBy('id','asc')->get();
        return view('pages.cars.edit',['car'=>$car,'brands'=>$brands,'owners'=>$owners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return redirect('cars')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        try {
            $car->delete();
            return redirect('cars')->with('status','Item deleted successfully!')->with('type', 'success');
        }
        catch (\Exception $exception){
            return redirect('cars')->with('status',$exception->getMessage())->with('type', 'error');
        }
    }
}
