<?php

namespace App\Http\Controllers;

use App\Models\AdmissionForm;
use App\Models\Answer;
use App\Models\ApplyJob;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Career;
use App\Models\Course;
use App\Models\Entrepreneur;
use App\Models\ExamCategory;
use App\Models\Freelancer;
use App\Models\McqAnswer;
use App\Models\McqQuestion;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PostCategory;
use App\Models\Project;
use App\Models\Question;
use App\Models\Service;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    function Index()
    {
        $blog_id = Blog::get('id');
        $service = Service::latest()->get();
        $course = Course::latest()->take(6)->get();
        $blog = Blog::latest()->get();
        $blog_comment = BlogComment::findOrFail($blog_id)->count();
        return view('frontend.index', compact('service', 'blog', 'blog_comment', 'course'));
    }

    // About Part
    function About(){
        $testimonial = Testimonial::latest()->take(1)->get();
        return view('frontend.about', compact('testimonial'));
    }

    // Service Part
    function Service()
    {
        $service = Service::latest()->get();
        $single_service = Service::latest()->first();
        return view('frontend.service', compact('service', 'single_service'));
    }

    function SingleService($slug){
        $service = Service::latest()->get();
        $single_service = Service::where('slug', $slug)->first();
        return view('frontend.single_service', compact('single_service', 'service'));
    }
    
    // Exam Part
    function LoginRegister()
    {
        $category = ExamCategory::all();
        return view('frontend.login_register', compact('category'));
    }

    function ExamCategory()
    {
        $category = ExamCategory::all();
        return view('frontend.exam-category', compact('category'));
    }

    function PostCategory(Request $request)
    {
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $user_id = Auth::user()->id;
        $category = $request->selectcategory;
        if ($category) {
            PostCategory::insert([
                'category_id' => $category,
                'user_ip' => $user_ip,
                'user_id' => $user_id,
                'created_at' => Carbon::now()
            ]);
            return redirect()->route('ExamInstraction');
        } else {
            return back()->with('message', 'Please Select a Category!');
        }
    }

    function ExamInstraction()
    {
        $category = PostCategory::with('examcategory')->latest()->first();
        $cat_id = $category->category_id;
        $cat_info = ExamCategory::where('id', $cat_id)->first();
        return view('frontend.exam_instraction', compact('category', 'cat_info'));
    }

    function StartExam()
    {
        $category_id = PostCategory::latest()->first()->category_id;
        $question = Question::where('category_id', $category_id)->first();
        $mcq_question = McqQuestion::where('category_id', $category_id)->get();
        return view('frontend.start_exam', compact('question', 'mcq_question'));
    }

    function PostExamQuestion(Request $request)
    {
        $user_id = Auth::user()->id;
        $category_id = PostCategory::latest()->first()->category_id;

        // Question-answers
        if ($user_id and $category_id) {
            Answer::insert([
                'user_id' => $user_id,
                'category_id' => $category_id,
                'answer1' => $request->answer1,
                'answer2' => $request->answer2,
                'answer3' => $request->answer3,
                'answer4' => $request->answer4,
                'created_at' => Carbon::now()
            ]);
        }

        // MCQ Part
        if ($request->hasFile('earning_ss')) {
            $file = $request->file('earning_ss');
            $ext = Str::lower(Str::random(5)) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/student/' . $ext));

            $file2 = $request->file('student_img');
            $ext2 = Str::lower(Str::random(5)) . '.' . $file2->getClientOriginalExtension();
            $image2 = Image::make($file2)->save(public_path('thumbnails/student/' . $ext2));

            // $question_id = $request->mcq_question_id;
            // $mcq_answers = $request->mcq_answer;

            foreach ($request->mcq_question_id as $item1) {
                $data1[] = $item1;
            }
            foreach ($request->mcq_answer as $item2) {
                $data2[] = $item2;
            }

            McqAnswer::create([
                'user_id' => $user_id,
                'category_id' => $category_id,
                'mcq_question_id' => json_encode($data1),
                'mcq_answers' => json_encode($data2),
                'earning' => $request->earning,
                'earning_ss' => $ext,
                'student_img' => $ext2,
                'about_student' => $request->about_student,
                'success_story' => $request->success_story,
                'created_at' => Carbon::now()
            ]);
            }            
        else{
            foreach ($request->mcq_question_id as $item1) {
                $data1[] = $item1;
            }
            foreach ($request->mcq_answer as $item2) {
                $data2[] = $item2;
            }
            McqAnswer::create([
                'user_id' => $user_id,
                'category_id' => $category_id,
                'mcq_question_id' => json_encode($data1),
                'mcq_answers' => json_encode($data2),
                'earning' => $request->earning,
                'about_student' => $request->about_student,
                'success_story' => $request->success_story,
                'created_at' => Carbon::now()
            ]);
        }
        
        return view('frontend.after_exam');
    }


    // BLOG SECTION
    function Blogs(Request $request){
        
        $search = $request->query('search');
        if ($search) {
            $blogs = Blog::latest()->paginate(5);
            $blog = Blog::where('title', 'LIKE', "%{$search}%")->simplePaginate(5);
        } else {
            $blogs = Blog::latest()->paginate(5);
        }
        return view('frontend.blogs', compact('blogs'));
    }

    function SingleBlog(Request $request, $slug){
        $search = $request->query('search');
        if ($search) {
            $blog_cat = Blog::latest()->get();
            $blog = Blog::where('title', 'LIKE', "%{$search}%")->simplePaginate(5);
            
        } else {
            $blog = Blog::where('slug', $slug)->first();
            $blog_cat = Blog::latest()->get();
            $tags = array([$blog->tags]);
            $comment = BlogComment::where('blog_id', $blog->id)->get();
        }
        return view('frontend.single_blog', compact('blog', 'tags', 'comment', 'blog_cat'));
    }

    // Freelancers Part
    function Freelancers(){
        $freelancer = Freelancer::latest()->get();
        return view('frontend.freelancers', compact('freelancer'));
    }

    function FreelancerSingle($username){
        $freelancer = Freelancer::where('username', $username)->first();
        return view('frontend.freelancer_single', compact('freelancer'));
    }

    // Entrepreneurs Part
    function Entrepreneurs(){
        $entrepreneur = Entrepreneur::latest()->get();
        return view('frontend.entrepreneurs', compact('entrepreneur'));
    }

    function EntrepreneurSingle($username){
        $entrepreneur = Entrepreneur::where('username', $username)->first();
        return view('frontend.entrepreneur_single', compact('entrepreneur'));
    }

    // Job Part
    function Jobs(){
        $jobs = Career::latest()->simplePaginate(10);
        return view('frontend.jobs', compact('jobs'));
    }

    function JobDetails($slug){
        $job = Career::where('slug', $slug)->first();
        return view('frontend.job_details', compact('job'));
    }

    function ApplyJob($slug){
        $career = Career::where('slug', $slug)->first();
        return view('frontend.apply_job', compact('career'));
    }

    function PostApplyJob(Request $request){

        return "Working on it...";
        $request->validate([
            'job_id' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'password' => ['required'],
            'image' => ['required', 'image'],
            'resume' => ['required', 'PDF'],
        ]);

        if ($request->hasFile('resume')) {
                $resume = $request->file('resume');
                $extention = $request['name'] . '.' . $resume->getClientOriginalExtension();
                Image::make($resume)->save(public_path('thumbnails/pdf/' . $extention));

                $file = $request->file('image');
                $ext = Str::lower(Str::random(5)) . '.' . $file->getClientOriginalExtension();
                $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

                ApplyJob::insert([
                    'job_id' => $request->job_id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),
                    'image' => $ext,
                    'resume' => $extention,
                    'created_at' => Carbon::now()
                ]);

                return back()->with('success', 'Successfully Applied.');
                // $image2 = Image::make($file2)->save(public_path('thumbnails/' . $ext2));
                // Storage::put(public_path('thumbnails/' . $extention->output()));
                // return $extention->download('invoice.pdf');

                // $path = public_path(public_path('thumbnails/'));
                // $resume->move($path . '/' . $resume);
                // return $resume->download($extention);

                //$uniqueFileName = uniqid() . $request->get('upload_file')->getClientOriginalName() . '.' . $request->get('upload_file')->getClientOriginalExtension());
                return $image = $request->get($resume)->save(public_path('thumbnails/') . $extention);
                redirect()->back()->with('success', 'File uploaded successfully.');

        }
        
        if ($request->password === $request->confirm_password) {
            if ($request->hasFile('resume')) {
                $file2 = $request->file('resume');
                $ext2 = Str::lower(Str::random(5)) . '.' . $file2->getClientOriginalExtension();
                $image2 = Image::make($file2)->save(public_path('thumbnails/' . $ext2));

                $file = $request->file('image');
                $ext = Str::lower(Str::random(5)) . '.' . $file->getClientOriginalExtension();
                $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

                ApplyJob::insert([
                    'job_id' => $request->job_id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),
                    'image' => $ext,
                    'resume' => $ext2,
                    'created_at' => Carbon::now()
                ]);

                return back()->with('success', 'Successfully Applied.');
            }
        }

        
    }

    // Courses
    function Courses(){
        $course = Course::latest()->get();
        $single_course = Course::latest()->first();
        return view('frontend.courses', compact('course', 'single_course'));
    }

    function SingleCourse($slug){
        $course = Course::latest()->get();
        $single_course = Course::where('slug', $slug)->first();
        return view('frontend.single_course', compact('course', 'single_course'));
    }

    //Portfolio
    function Portfolio(){

        $portfolio = Portfolio::latest()->get();
        $portfolio_category = PortfolioCategory::latest()->take(6)->get();
        return view('frontend.portfolio', compact('portfolio', 'portfolio_category'));
    }

    // Start Project
    function StartProject(){

        return view('frontend.project');
    }

    function PostProject(Request $request){
        Project::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'project_type' => $request->project_type,
            'ammount' => $request->ammount,
            'about_project' => $request->about_project,
            'hear_about' => $request->hear_about,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Your Project Submitted Successfully.');
    }

    // CEO Page
    function CEOPage(){
        
        return view('frontend.ceo_page');
    }

    // Admission
    function AdmissionForm(){

        return view('frontend.admission_form');
    }

    function PostAdmission(Request $request){
        $request->validate([
            'name' => ['required'],
            'father_name' => ['required'],
            'mother_name' => ['required'],
            'present_address' => ['required'],
            'permanent_address' => ['required'],
            'occupation' => ['required'],
            'dob' => ['required'],
            'nationality' => ['required'],
            'blood_group' => ['required'],
            'gender' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'education' => ['required'],
        ]);

        AdmissionForm::insert([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'occupation' => $request->occupation,
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'blood_group' => $request->blood_group,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'education' => $request->education,
            'ref_name' => $request->ref_name,
            'ref_phone' => $request->ref_phone,
            'ref_batch_name' => $request->ref_batch_name,
            'ref_batch_id' => $request->ref_batch_id,
            'ref_relation' => $request->ref_relation,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Registaion Complete. We will get you soon!');
    }

    function AdmissionProcedure(){

        return view('frontend.admission_procedure');
    }
}
