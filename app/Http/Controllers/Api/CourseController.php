<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Exception;


class CourseController extends Controller
{
    //
    public function update(Request $request)
    {
        $Course = $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'price' => 'required|numeric',
        ]);

        try {
            $Course = Course::where('name', $request->name)
                ->update(['price' => $request->price]);
            return (1);
        } catch (Exception $e) {


            return $e;
        }
    }
}