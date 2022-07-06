<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class DeleteController extends Controller
{
    public function delete( Category $category)
    {
       
       $category->delete();

        return redirect()->route('admin.category.index');
    }
}
