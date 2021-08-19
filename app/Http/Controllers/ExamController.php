<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\ExamCategory;
use App\Models\McqAnswer;
use App\Models\McqQuestion;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    function AddQuestions()
    {
        $category = ExamCategory::latest()->get();
        return view('backend.exam.add_questions', compact('category'));
    }

    function PostQuestions(Request $request)
    {
        Question::insert([
            'category_id' => $request->category_id,
            'question1' => $request->question1,
            'question2' => $request->question2,
            'question3' => $request->question3,
            'question4' => $request->question4,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Question Inserted Successfully.');
    }

    function ViewQuestions()
    {
        $question = Question::with('category')->get();
        $mcq_question = McqQuestion::with('category')->get();
        return view('backend.exam.view_questions', compact('question', 'mcq_question'));
    }

    function DeleteQuestions($id)
    {
        Question::where('id', $id)->delete();
        return back()->with('success', 'Question Deleted Successfully.');
    }

    function EditQuestions($id)
    {
        $question = Question::with('category')->where('id', $id)->first();
        $category = ExamCategory::all();
        return view('backend.exam.edit_questions', compact('question', 'category'));
    }

    function UpdateQuestions(Request $request)
    {
        $id = $request->id;
        Question::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'question1' => $request->question1,
            'question2' => $request->question2,
            'question3' => $request->question3,
            'question4' => $request->question4,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('success', 'Questions Updated Successfully');
    }

    // ANSWERS




    // EXAM CATEGORY
    function AddExamCategory()
    {

        return view('backend.exam.add_exam_category');
    }

    function ViewExamCategory()
    {
        $category = ExamCategory::all();
        return view('backend.exam.view_exam_category', compact('category'));
    }

    function PostExamCategory(Request $request)
    {
        ExamCategory::insert([
            'cat_name' => $request->cat_name,
            'cat_slug' => $request->cat_slug,
            'cat_syllabus' => $request->cat_syllabus,
            'cat_duration' => $request->cat_duration,
            'cat_questions' => $request->cat_questions,
            'cat_instraction' => $request->cat_instraction,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Category Inserted Successfully.');
    }

    function DeleteExamCategory($id)
    {
        ExamCategory::where('id', $id)->delete();
        return back()->with('delete', 'Category Deleted Successfully');
    }

    function EditExamCategory($id)
    {
        $category = ExamCategory::where('id', $id)->first();
        return view('backend.exam.edit_exam_category', compact('category'));
    }

    function UpdateExamCategory(Request $request)
    {
        $id = $request->id;
        ExamCategory::findOrFail($id)->update([
            'cat_name' => $request->cat_name,
            'cat_slug' => $request->cat_slug,
            'cat_syllabus' => $request->cat_syllabus,
            'cat_duration' => $request->cat_duration,
            'cat_questions' => $request->cat_questions,
            'cat_instraction' => $request->cat_instraction,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('success', 'Questions Updated Successfully');
    }

    // MCQ Questions

    function PostMcqQuestions(Request $request)
    {
        McqQuestion::insert([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'created_at' => Carbon::now()
        ]);
        return back()->with('message', 'MCQ Questions Inserted Successfully.');
    }

    function DeleteMcqQuestions($id)
    {
        McqQuestion::where('id', $id)->delete();
        return back()->with('success', 'Question Deleted Successfully');
    }

    function EditMcqQuestions($id)
    {
        $mcq_question = McqQuestion::where('id', $id)->first();
        $category = ExamCategory::all();
        return view('backend.exam.edit_mcq_question', compact('mcq_question', 'category'));
    }

    function UpdateMcqQuestions(Request $request)
    {
        $id = $request->id;
        McqQuestion::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('success', 'Questions Updated Successfully');
    }


    // Result Section
    function ShowResults()
    {
        $answers = Answer::latest()->simplePaginate(15);
        return view('backend.exam.show_results', compact('answers'));
    }

    function ShowDetails($id)
    {
        $user_id = Auth::user()->id;

        $questions = Question::where('category_id', $id)->first();
        $answers = Answer::findOrFail($user_id)->where('category_id', $id)->latest()->first();

        $mcq_questions = McqQuestion::where('category_id', $id)->get();

        $mcq_answers = McqAnswer::findOrFail($user_id)->latest()->take(1)->get();
        
        return view('backend.exam.results_details', compact('questions', 'answers', 'mcq_questions', 'mcq_answers'));
    }
}
