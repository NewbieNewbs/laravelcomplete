<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleRecord;
use App\Models\VehicleRecordOut;

class TableVehicleRecord extends Controller
{
    public function index()
    {
        $recordsI = VehicleRecord::latest()->paginate(); //IN
        $recordsJ = VehicleRecordOut::latest()->paginate(); 
    
        return view('pages.table', compact('recordsI', 'recordsJ'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
            ->with('j', (request()->input('page', 1) - 1) * 5); // You can adjust the multiplier if needed
    }


    public function store(Request $request)
    {
        // Validate the incoming request, for example, checking if it has an image file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image on the server
        $imagePath = $request->file('image')->store('public/input_images'); // 'images' is the storage folder

        // Create a new Image record in the database
        $image = new VehicleRecord();
        $image->image_path = $imagePath;
        $image->save();

        // You can return a response or redirect as needed
        return response()->json(['message' => 'Image stored successfully', 'path' => $imagePath]);
    }


}
