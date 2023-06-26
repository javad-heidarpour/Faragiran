<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;



class LessonController extends Controller
{
    //
    public function store(Request $request)
    {
        $lesson = $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'price' => 'required|numeric',
        ]);

        $lesson = Lesson::create($lesson);
        if ($lesson)
            return ($lesson);
        else
            return "noStore";
    }
}