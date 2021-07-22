<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Http\Resources\Post as PostResource;

class APIController extends Controller
{
    public function index(){
        return PostResource::collection(Status::all());
    }

    public function searchStatus($id){
        return Status::find($id);
    }

    public function deleteStatus($id){
        Status::destroy($id);
        return "Data terhapus";
    }
}
