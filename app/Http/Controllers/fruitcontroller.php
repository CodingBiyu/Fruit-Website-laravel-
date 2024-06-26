<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;
use Illuminate\Support\Facades\Storage;

class fruitcontroller extends Controller
{


    public function userfruit()
    {
        
        $fruits = Fruit::get();
        return view('userfruitview', compact('fruits'));
    }

    public function index()
    {
        $fruits = Fruit::get();
        return view('addfruit',compact('fruits'));
    }
    


    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg',
            'item' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'quantity' => 'required',
            'price' => 'required|numeric'
        ]);

        $path = $request->file('photo')->store('image', 'public');

        $fruit = new Fruit();
        $fruit->file_name = $path;
        $fruit->item = $request->item;
        $fruit->price = $request->price;
        $fruit->quantity = $request->quantity;

        $fruit->save();

        return redirect()->route('view.fruit')->with('status', 'Image Uploaded Successfully.');
    }


  


    public function edit(string $id)
    {
        $fruit = Fruit::findOrFail($id);
        return view('editfruit', compact('fruit'));
    }



    public function update(Request $request, string $id)
    {
        $request->validate([
            'photo' => 'nullable|mimes:png,jpg,jpeg',
            'item' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'quantity' => 'required',
            'price' => 'required|numeric'
        ]);

        $fruit = Fruit::findOrFail($id);

        // Check if the user wants to delete the current image
        if ($request->has('delete_image') && $request->delete_image == true) {
            // Delete the current image from storage
            $this->deleteImageFromStorage($fruit->file_name);
            // Remove the image reference from the database
            $fruit->file_name = null;
        }


        // Handle file update if a new file is uploaded
        if ($request->hasFile('photo')) {
            // Delete the current image from storage if exists
            if ($fruit->file_name) {
                $this->deleteImageFromStorage($fruit->file_name);
            }
            // Store the new image
            $path = $request->file('photo')->store('image', 'public');
            $fruit->file_name = $path;
        }

        
        // Update other fields
        $fruit->item = $request->item;
        $fruit->quantity = $request->quantity;
        $fruit->price = $request->price;
        $fruit->save();

        return redirect()->route('view.fruit')->with('status', 'Fruit Item Updated Successfully.');
    }
    private function deleteImageFromStorage($filename)
    {
        Storage::disk('public')->delete($filename);
    }


    


    public function destroy(string $id)
    {
        $fruit = Fruit::find($id);

        $fruit->delete();
        $fruit_path = public_path("storage/").$fruit->file_name;

        if(file_exists($fruit_path))
        {
            @unlink($fruit_path);
        }
        return redirect()->route('view.fruit')->with('status', 'Image Deleted Successfully.');
    }

    public function purchasefruit(string $id)
    {
        $fruit = Fruit::find($id);

        $fruit->delete();
        $fruit_path = public_path("storage/").$fruit->file_name;

        if(file_exists($fruit_path))
        {
            @unlink($fruit_path);
        }
        return redirect()->route('user.fruit')->with('status', 'Purchase Image Successfully.');
    }

    
 
}
