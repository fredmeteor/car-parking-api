<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
      public function index()
    {
        return VehicleResource::collection(Vehicle::all());
    }

    public function store(StoreVehicleRequest $request)
    {
        $vehicle = Vehicle::create($request->validated());

        return VehicleResource::make($vehicle);
    }

    public function show(Vehicle $vehicle)
    {
        return VehicleResource::make($vehicle);
    }

    public function update(StoreVehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->validated());

        return response()->json(VehicleResource::make($vehicle), Response::HTTP_ACCEPTED);
    }

    public function destroy(Vehicle $vehicle)
    {
        if ($vehicle->hasActiveParkings()) {
            return response()->json([
                'errors' => ['general' => ['Can\'t remove vehicle with active parkings. Stop active parking.']],
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $vehicle->delete();

        return response()->noContent();
    }
}
