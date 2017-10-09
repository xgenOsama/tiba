<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public function technology() {
        return $this->belongsTo('App\Technology','tech_id');
    }

    public static function newproduct($request) {
        $product = new Product;
        $product->title_en = $request->title_en;
        $product->title_ar = $request->title_ar;
        $product->desc_en = $request->desc_en;
        $product->desc_ar = $request->desc_ar;
        $product->tech_id = $request->tech_id;
        $destinationPath = 'uploads'; // upload path
        $images = array();
        $extension = $request->image->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        if ($request->image1 != null) {
            $extension1 = $request->image1->getClientOriginalExtension(); // getting image extension
            $fileName1 = rand(11111, 99999) . '.' . $extension1; // renameing image
            $upload_success1 = $request->image1->move($destinationPath, $fileName1);
            array_push($images, $fileName1);
        }
        if ($request->image2 != null) {
            $extension2 = $request->image2->getClientOriginalExtension(); // getting image extension
            $fileName2 = rand(11111, 99999) . '.' . $extension2; // renameing image
            $upload_success2 = $request->image2->move($destinationPath, $fileName2);
            array_push($images, $fileName2);
        }
        if ($request->image3 != null) {
            $extension3 = $request->image3->getClientOriginalExtension(); // getting image extension
            $fileName3 = rand(11111, 99999) . '.' . $extension3; // renameing image
            $upload_success3 = $request->image3->move($destinationPath, $fileName3);
            array_push($images, $fileName3);
        }
        $upload_success = $request->image->move($destinationPath, $fileName); // uploading file to given path
        array_push($images, $fileName);
        $serialized_images = json_encode($images);
        $product->image = $serialized_images;
        $files = array();
        $extension_file1 = $request->file1->getClientOriginalExtension(); // getting file extension
        $fileName_file1 = rand(11111, 99999) . '.' . $extension_file1; // renameing file
        if ($request->file2 != null) {
            $extension_file2 = $request->file2->getClientOriginalExtension(); // getting image extension
            $fileName_file2 = rand(11111, 99999) . '.' . $extension_file2; // renameing image
            $upload_success_file2 = $request->file2->move($destinationPath, $fileName_file2);
            array_push($files, $fileName_file2);
        }
          if($request->file3 !=null){
             $extension_file3 =$request->file3->getClientOriginalExtension(); // getting image extension
             $fileName_file3= rand(11111,99999).'.'.$extension_file3; // renameing image
             $upload_success_file3=$request->file3->move($destinationPath, $fileName_file3);
             array_push($files,$fileName_file3);
          }

        $upload_success_file1 = $request->file1->move($destinationPath, $fileName_file1); // uploading file to given path
        array_push($files, $fileName_file1);
        $serialized_files = json_encode($files);
        $product->attached_files = $serialized_files;
        return $product->save();
    }

    public static function editproduct($request, $id) {
        $product = Product::find($id);
        $product->title_en = $request->title_en;
        $product->title_ar = $request->title_ar;
        $product->desc_en = $request->desc_en;
        $product->desc_ar = $request->desc_ar;
        $product->tech_id = $request->tech_id;

        $destinationPath = 'uploads'; // upload path
        $images = array();
//        $file = Input::file('name');
        if ($request->image != NULL) {
            $extension = $request->image->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        }
        if ($request->image1 != null) {
            $extension1 = $request->image1->getClientOriginalExtension(); // getting image extension
            $fileName1 = rand(11111, 99999) . '.' . $extension1; // renameing image
            $upload_success1 = $request->image1->move($destinationPath, $fileName1);
            array_push($images, $fileName1);
        }
        if ($request->image2 != null) {
            $extension2 = $request->image2->getClientOriginalExtension(); // getting image extension
            $fileName2 = rand(11111, 99999) . '.' . $extension2; // renameing image
            $upload_success2 = $request->image2->move($destinationPath, $fileName2);
            array_push($images, $fileName2);
        }
        if ($request->image3 != null) {
            $extension3 = $request->image3->getClientOriginalExtension(); // getting image extension
            $fileName3 = rand(11111, 99999) . '.' . $extension3; // renameing image
            $upload_success3 = $request->image3->move($destinationPath, $fileName3);
            array_push($images, $fileName3);
        }
        if(isset($fileName) && $fileName != NULL){
            $upload_success = $request->image->move($destinationPath, $fileName); // uploading file to given path
            array_push($images, $fileName);
        }
        $serialized_images = json_encode($images);
        $product->image = $serialized_images;
        return $product->save();
    }

}
