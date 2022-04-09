<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\Route;
use phpDocumentor\Reflection\Types\Null_;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Controllercreate(Model $model,Request $request, mixed $route){
        // if($route === null):
        //     $route = route('admin');
        // endif;
        $data = new $model;

        $columns = Schema::getColumnListing('products');

        foreach ($columns as $column) {
            if( request()->input($column) != null){
                $data->$column = request()->input($column);
            }
        }

        $data->save();

        return redirect($route);
    }






}
