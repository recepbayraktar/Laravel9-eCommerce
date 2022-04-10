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
    function __construct()
    {
        $this->model = null;
        $this->route = route("adminHome");

    }

    public function create(){

        $columns = Schema::getColumnListing($this->model->getTable());

        foreach ($columns as $column) {
            if( request()->input($column) != null){
                $this->model->$column = request()->input($column);
            }
        }

        $this->model->save();

        return redirect($this->route);
    }






}
