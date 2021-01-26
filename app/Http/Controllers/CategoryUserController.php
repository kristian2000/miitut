<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CategoryUser;
use App\Models\Status;
use App\Models\TimesAvailable;
use Illuminate\Support\Facades\DB;

class CategoryUserController extends Controller
{
    public function showCategoriesUser(CategoryUser $category){
        $category->user;
        $category->category;
        $category->timesAvailable;

        return response()->json($category);
    }

    public function getCategoriesUser(){
        $user = Auth::user();
        $categories = $user->categories;

        return response()->json($categories);
    }

    public function getCategoryPending(){
        $status = Status::firstWhere('name', 'pending');

        $category = Auth::user()
            ->categories()
            ->firstWhere('status_id', $status->id);

        return response()->json($category);
    }

    public function updateCategoryUser(Request $request, CategoryUser $category){

        $this->validate($request, [
            'title' => 'string',
            'description' => 'string',
            'address' => 'string',
            'lat' => 'numeric',
            'lng' => 'numeric',
            'price' => 'numeric',
            'yearExperience' => 'numeric',
            'descriptionExperience' => 'nullable|string'
        ]);

        $data = $request->only([
            'title',
            'description',
            'address',
            'lat',
            'lng',
            'price',
            'yearExperience',
            'descriptionExperience'
        ]);

        $category->update($data);

        return response()->json([
            'category' => $category,
            'msg' => 'Update Category Sucessfull'
        ]);
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
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'price' => 'required|numeric',
            'yearExperience' => 'required|numeric',
            'descriptionExperience' => 'required|string',
            'shedule' => 'array',
            'subcategoriasSelected' => 'array'
        ]);

        $user = Auth::user();

        $category->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'address' => $request['address'],
            'lat' => $request['lat'],
            'lng' => $request['lng'] ,
            'price' => $request['price'] ,
            'yearExperience' => $request['yearExperience'],
            'shedule' => $request['shedule'] ,
            'sub_categories' => $request['subcategoriasSelected'],
            'status_id' => 2
        ]);

        // Actualizar Usuario
        $user->fase_registry = 'completed';
        $user->save();

        return response()->json([
            'user' => $user,
            'msg' => 'CategoryUser Update success'
        ]);
    }

    public function getCategoriesUserWork(Request $request){
        $this->validate($request, [
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'category' => 'numeric',
            'yearExperience' => 'numeric',
            'priceMin' => 'numeric',
            'priceMax' => 'numeric',
            'radius' => 'numeric'
        ]);

        $lat = $request['lat'];
        $lng = $request['lng'];
        $radius = $request['radius'] ?? 100;

        // Filtros
        $category = $request['category'];
        $yearExperience = $request['yearExperience'];
        $priceMin = $request['priceMin'];
        $priceMax = $request['priceMax'];


        $queryLocalization = "*,
                (6371 * acos( cos( radians($lat) )
                * cos( radians( lat ) )
                * cos( radians( lng )
                - radians($lng) )
                + sin( radians($lat) )
                * sin( radians( lat ))))
                As distance";

        $usersWork = CategoryUser::query()
            ->where('status_id', Status::firstWhere('name', 'active')->id)
            // ->selectRaw("$queryLocalization < ?", [$radius])
            ->selectRaw($queryLocalization)
            ->having('distance', '<', $radius)
            ->with('user', 'category')
            ->when($category, function($query) use ($category){
                return $query->where('category_id', $category);
            })
            ->when($yearExperience, function($query) use ($yearExperience){
                return $query->where('yearExperience', '>=', $yearExperience);
            })
            ->when($priceMin, function($query) use ($priceMin){
                return $query->where('price', '>=', $priceMin);
            })
            ->when($priceMax, function($query) use ($priceMax){
                return $query->where('price', '<=', $priceMax);
            })
            ->orderBy("distance")
            ->get();

        return response()->json([
            'users' => $usersWork,
            'lat' => $lat,
            'lng' => $lng,
            'radius' => $radius
        ]);
    }
}
