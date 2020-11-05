<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Rules\ValidLessonName;

class LessonController extends Controller
{
    function getAddNewLesson() {
        return view('add-lesson');
    }

    function postAddNewLesson(Request $request) {

        $validatedData = $request->validate([
            'lesson_name' => ['required', new ValidLessonName],
            'is_public' => 'required',
        ]);

        $lesson = new Lesson;
        $lesson->lesson_name = $request->input('lesson_name');
        $lesson->lesson_slug = \Str::slug($request->input('lesson_name'));
        $lesson->lesson_instructor = rand(10000,99999);
        $lesson->is_public = $request->input('is_public');
        $lesson->created_at = date('Y-m-d H:i:s'); // use carbon
        $lesson->updated_at = date('Y-m-d H:i:s'); // use carbon
        $lesson->save();

    }
}
