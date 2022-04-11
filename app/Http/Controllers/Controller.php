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


    public static function insert( Model $model, mixed $route = null,mixed $id = null ){

        $columns = Schema::getColumnListing($model->getTable());
        if (isset($id)) {
            $model = $model->where('id', '= ', $id);
        }
        foreach ($columns as $column) {
            if( request()->input($column) != null){
                $model->$column = request()->input($column);
            }
        }

        $model->save();

       if ($route == null) {
            return redirect()->back();
       }
       else {
            return redirect($route);
       }
    }

}
