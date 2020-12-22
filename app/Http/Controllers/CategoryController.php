<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function completeProfileWork(Request $request){
        $this->validate($request, [
            'phone' => 'string',
            'gender' => 'string',
            'address' => 'string',
            'birthdate' => 'date',
            'description' => 'string',
            'dni' => 'string'
        ]);

        $data = $request->only(['phone', 'gender', 'address', 'birthdate', 'description', 'dni']);

        $user = Auth::user();

        return response()->json([
            'user' => $user,
            'msg' => 'User Update success'
        ]);
    }

    public function getSubcategoryByCategory(Category $category){
        $subcategories = $category->subcategories;
        return response()->json($subcategories);
    }
}
