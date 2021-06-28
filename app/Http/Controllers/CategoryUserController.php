<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CategoryUser;
use App\Models\Qualification;
use App\Models\Status;
use Illuminate\Support\Facades\DB;

class CategoryUserController extends Controller
{
    public function showCategoriesUser(CategoryUser $category){
        $category->user;
        $category->category;
        $category->comments;

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
            'descriptionExperience' => 'nullable|string',
            'shedule' => 'array',
            'sub_categories' => 'array'
        ]);

        $data = $request->only([
            'title',
            'description',
            'address',
            'lat',
            'lng',
            'price',
            'yearExperience',
            'descriptionExperience',
            'shedule',
            'sub_categories'
        ]);

        $category->update($data);
        $category->status;
        $category->category;

        return response()->json([
            'category' => $category,
            'msg' => 'Update Category Sucessfull'
        ]);
    }

    public function createCategoryUser(Request $request){
        $user = Auth::user();
        $status = Status::firstWhere('name', 'active');

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
            'sub_categories' => 'array'
        ]);

        $categoryUser = new CategoryUser();
        $categoryUser->user_id = $user->id;
        $categoryUser->status_id = $status->id;
        $categoryUser->category_id = $request['category_id'];
        $categoryUser->title = $request['title'];
        $categoryUser->description = $request['description'];
        $categoryUser->lat = $request['lat'];
        $categoryUser->lng = $request['lng'];
        $categoryUser->price = $request['price'];
        $categoryUser->yearExperience = $request['yearExperience'];
        $categoryUser->descriptionExperience = $request['descriptionExperience'];
        $categoryUser->shedule = $request['shedule'];
        $categoryUser->sub_categories = $request['sub_categories'];
        $categoryUser->save();

        // relaciones
        $categoryUser->status;
        $categoryUser->category;
        

        return response()->json([
            'categoryUser' => $categoryUser,
            'msg' => 'CategoryUser Creada success'
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
            'descriptionExperience' => $request['descriptionExperience'],
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
        
        $user->fase_registry = 'accountRetirement';
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
            "subcategory" => 'numeric',
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
        $subcategory = $request['subcategory'];
        $yearExperience = $request['yearExperience'];
        $priceMin = $request['priceMin'];
        $priceMax = $request['priceMax'];

        $selectColumn = "
            id, status_id, category_id, user_id,
            yearExperience, price, lat, lng, sub_categories
        ";

        $queryLocalization = $selectColumn. ",
                (6371 * acos( cos( radians($lat) )
                * cos( radians( lat ) )
                * cos( radians( lng )
                - radians($lng) )
                + sin( radians($lat) )
                * sin( radians( lat ))))
                As distance";

        $usersWork = CategoryUser::query()
            ->selectRaw($queryLocalization)
            ->where('status_id', Status::firstWhere('name', 'active')->id)
            ->having('distance', '<', $radius)
            ->with([
                'user' => function($q){
                    return $q->select(['id', 'name', 'profile_check'])
                             ->with(['subscriptions:id,user_id,stripe_status']);
                }, 
                'category:id,label',
                
            ])
            ->when($category, function($query) use ($category){
                return $query->where('category_id', $category);
            })
            ->when($subcategory, function($query) use ($subcategory){
                return $query->whereJsonContains('sub_categories',['code' => intval($subcategory)]);
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

        // Ordenar Premium Arriba
        // $sorted = $usersWork->sortBy('user->subscriptions', 'ASC');

        // $t = $usersWork->transform(function($item, $key){
        //     return [
        //         'uid' => $item->id,
        //         'user' => [
        //             'id' => $item->user->id,
        //             'subscriptions' => $item->user->subscriptions
        //         ]
        //         // 'subscriptions' => count($item->user->subscriptions)
        //     ];
        // });

        $group = $usersWork->groupBy(function($item, $key){  
            return count($item->user->subscriptions) == 0 ? 'normal' : 'premium';
        });



        return response()->json([
            'count_result' => count($usersWork),

            'users' => $group,
            'lat' => $lat,
            'lng' => $lng,
            'radius' => $radius
        ]);
    }

    public function getCategoryUserQualifications(CategoryUser $categoryUser){
        $qualifications =  $categoryUser
            ->qualifications()
            ->where('type', '==', 'help')
            ->get();

        return response()->json([
            'qualifications' => $qualifications
        ]);
    }
}
