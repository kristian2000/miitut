<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryUser;
use App\Models\Status;
use App\Models\TimesAvailable;

class CategoryUserController extends Controller
{
    public function getCategoriesUser(){
        $user = Auth::user();
        $categories = $user->categories;

        return response()->json($categories);
    }

    public function getCategoryPending(){
        $status = Status::firstWhere('name', 'pending');

        $category = Auth::user()
            ->categories()
            ->with('category')
            ->firstWhere('status_id', $status->id);

        $timesAvailable = $category->timesAvailable;

        return response()->json($category);
    }

    public function changeTimeAvailable(CategoryUser $category, Request $request){
        $data = $request->only(['day', 'hours']);

        $time = $category->timesAvailable()->where('day',  $data['day'])->firstWhere('hours', $data['hours']);

        if ($time === null) {
            $newtime = TimesAvailable::create([
                'category_user_id' => $category->id,
                'day' => $data['day'],
                'hours' => $data['hours']
            ]);
        }else {
            $time->delete();
        }

        return response()->json([
            'category' => $category,
            'msg' => '',
            'time' => $time
        ]);
    }

    public function completeProfileWork(CategoryUser $category, Request $request){

        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'price' => 'required|numeric',
            'yearExperience' => 'required|numeric'
        ]);

        $data = $request->only([
            'title',
            'description',
            'address',
            'price',
            'yearExperience'
        ]);

        $user = Auth::user();

        $category->update($data);
        $user->fase_registry = 'completed';
        $user->save();


        return response()->json([
            'user' => $user,
            'msg' => 'CategoryUser Update success'
        ]);
    }
}
