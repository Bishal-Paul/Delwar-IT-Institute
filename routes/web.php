<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EntrepreneurController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Models\Entrepreneur;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// FRONTEND
Route::get('/', [FrontendController::class, 'Index']);
Route::get('/about', [FrontendController::class, 'About']);
Route::get('/services', [FrontendController::class, 'Service']);
Route::get('/single-service/{slug}', [FrontendController::class, 'SingleService']);
Route::get('/login-register', [FrontendController::class, 'LoginRegister'])->name('LoginRegister');
Route::get('/blogs', [FrontendController::class, 'Blogs']);
Route::get('/single-blog/{slug}', [FrontendController::class, 'SingleBlog']);

Route::get('/start-project', [FrontendController::class, 'StartProject']);
Route::post('/post-project', [FrontendController::class, 'PostProject']);

Route::get('/admission-form', [FrontendController::class, 'AdmissionForm']);
Route::get('/admission-procedure', [FrontendController::class, 'AdmissionProcedure']);
Route::post('/post-admission', [FrontendController::class, 'PostAdmission']);

Route::get('/portfolio', [FrontendController::class, 'Portfolio']);

Route::get('/courses', [FrontendController::class, 'Courses']);
Route::get('/course/{slug}', [FrontendController::class, 'SingleCourse']);

Route::get('/ceo-page', [FrontendController::class, 'CEOPage']);

Route::get('/jobs', [FrontendController::class, 'Jobs']);
Route::get('/job-details/{slug}', [FrontendController::class, 'JobDetails']);
Route::get('/apply-job/{slug}', [FrontendController::class, 'ApplyJob']);
Route::post('/post-apply-job', [FrontendController::class, 'PostApplyJob']);

Route::get('/freelancers', [FrontendController::class, 'Freelancers']);
Route::get('/freelancer/{username}', [FrontendController::class, 'FreelancerSingle']);
Route::get('/entrepreneurs', [FrontendController::class, 'Entrepreneurs']);
Route::get('/entrepreneur/{username}', [FrontendController::class, 'EntrepreneurSingle']);

Route::middleware(['auth:sanctum', 'verified'])->get('/start-exam', [FrontendController::class, 'StartExam']);
Route::middleware(['auth:sanctum', 'verified'])->get('/exam-category', [FrontendController::class, 'ExamCategory']);
Route::middleware(['auth:sanctum', 'verified'])->get('/exam-instraction', [FrontendController::class, 'ExamInstraction'])->name('ExamInstraction');
Route::middleware(['auth:sanctum', 'verified'])->post('/post-cat', [FrontendController::class, 'PostCategory']);
Route::middleware(['auth:sanctum', 'verified'])->post('/post-examquestion', [FrontendController::class, 'PostExamQuestion']);



// BACKEND
Route::get('/admin-dashboard', function () {
    return view('backend.dashboard');
})->name('BackendDashboard');


// TEAM
Route::get('/add-team', [BackendController::class, 'AddTeam']);
Route::post('/post-team', [BackendController::class, 'PostTeam']);
Route::get('/view-team', [BackendController::class, 'ViewTeam']);
Route::get('/delete-team/{id}', [BackendController::class, 'DeleteTeam']);

// TESTIMONIAL
Route::get('/add-testimonial', [BackendController::class, 'AddTestimonial']);
Route::post('/post-testimonial', [BackendController::class, 'PostTestimonial']);
Route::get('/view-testimonial', [BackendController::class, 'ViewTestimonial']);

// SERVICE
Route::get('/add-service', [ServiceController::class, 'AddService']);
Route::post('/post-service', [ServiceController::class, 'PostService']);
Route::get('/view-service', [ServiceController::class, 'ViewService']);
Route::get('/edit-service/{id}', [ServiceController::class, 'EditService'])->name('EditService');
Route::post('/update-service', [ServiceController::class, 'UpdateService']);
Route::get('/delete-service/{id}', [ServiceController::class, 'DeleteService']);

// Exam Backend
Route::get('/add-questions', [ExamController::class, 'AddQuestions']);
Route::post('/post-questions', [ExamController::class, 'PostQuestions']);
Route::get('/view-questions', [ExamController::class, 'ViewQuestions']);
Route::get('/delete-questions/{id}', [ExamController::class, 'DeleteQuestions']);
Route::get('/edit-questions/{id}', [ExamController::class, 'EditQuestions']);
Route::post('/update-questions', [ExamController::class, 'UpdateQuestions']);

Route::post('/post-mcq-questions', [ExamController::class, 'PostMcqQuestions']);
Route::get('/delete-mcq-questions/{id}', [ExamController::class, 'DeleteMcqQuestions']);
Route::get('/edit-mcq-questions/{id}', [ExamController::class, 'EditMcqQuestions']);
Route::post('/update-mcq-questions', [ExamController::class, 'UpdateMcqQuestions']);

Route::get('/show-results', [ExamController::class, 'ShowResults']);
Route::get('/show-details/{id}', [ExamController::class, 'ShowDetails']);

// Exam Category
Route::get('/add-exam-category', [ExamController::class, 'AddExamCategory']);
Route::post('/post-exam-category', [ExamController::class, 'PostExamCategory']);
Route::get('/view-exam-category', [ExamController::class, 'ViewExamCategory']);
Route::get('/edit-exam-category/{id}', [ExamController::class, 'EditExamCategory']);
Route::post('/update-exam-category', [ExamController::class, 'UpdateExamCategory']);
Route::get('/delete-exam-category/{id}', [ExamController::class, 'DeleteExamCategory']);

// Mcq Questions
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// BLOGS
Route::get('/add-blog', [BlogController::class, 'AddBlog']);
Route::post('/post-blog', [BlogController::class, 'PostBlog']);
Route::get('/view-blog', [BlogController::class, 'ViewBlog']);
Route::get('/edit-blog/{id}', [BlogController::class, 'EditBlog']);
Route::post('/update-blog', [BlogController::class, 'UpdateBlog']);
Route::get('/delete-blog/{id}', [BlogController::class, 'DeleteBlog']);
Route::post('/post-blog-comment', [BlogController::class, 'PostBlogComment']);

// Freelancer
Route::get('/add-freelancer', [FreelancerController::class, 'AddFreelancer']);
Route::post('/post-freelancer', [FreelancerController::class, 'PostFreelancer']);
Route::get('/view-freelancer', [FreelancerController::class, 'ViewFreelancer']);
Route::get('/edit-freelancer/{id}', [FreelancerController::class, 'EditFreelancer']);
Route::post('/update-freelancer', [FreelancerController::class, 'UpdateFreelancer']);
Route::get('/delete-freelancer/{id}', [FreelancerController::class, 'DeleteFreelancer']);

// Entrepreneurs
Route::get('/add-entrepreneur', [EntrepreneurController::class, 'AddEntrepreneur']);
Route::post('/post-entrepreneur', [EntrepreneurController::class, 'PostEntrepreneur']);
Route::get('/view-entrepreneur', [EntrepreneurController::class, 'ViewEntrepreneur']);
Route::get('/edit-entrepreneur/{id}', [EntrepreneurController::class, 'EditEntrepreneur']);
Route::post('/update-entrepreneur', [EntrepreneurController::class, 'UpdateEntrepreneur']);
Route::get('/delete-entrepreneur/{id}', [EntrepreneurController::class, 'DeleteEntrepreneur']);

// Career/Jobs 
Route::get('/add-career', [CareerController::class, 'AddCareer']);
Route::post('/post-career', [CareerController::class, 'PostCareer']);
Route::get('/view-career', [CareerController::class, 'ViewCareer']);
Route::get('/view-full-career/{id}', [CareerController::class, 'ViewFullCareer']);
Route::get('/edit-career/{id}', [CareerController::class, 'EditCareer']);
Route::post('/update-career', [CareerController::class, 'UpdateCareer']);
Route::get('/delete-career/{id}', [CareerController::class, 'DeleteCareer']);

// Course
Route::get('/add-course', [CourseController::class, 'AddCourse']);
Route::post('/post-course', [CourseController::class, 'PostCourse']);
Route::get('/view-course', [CourseController::class, 'ViewCourse']);
Route::get('/edit-course/{id}', [CourseController::class, 'EditCourse']);
Route::post('/update-course', [CourseController::class, 'UpdateCourse']);
Route::get('/delete-course/{id}', [CourseController::class, 'DeleteCourse']);

// start Project
Route::get('/view-submitted-project', [BackendController::class, 'ViewProject']);
Route::get('/view-full-project/{id}', [BackendController::class, 'ViewProjectDetails']);
Route::get('/delete-submitted-project/{id}', [BackendController::class, 'DeleteProject']);

//Portfolio
Route::get('/add-portfolio', [PortfolioController::class, 'AddPortfolio']);
Route::post('/post-portfolio-category', [PortfolioController::class, 'PostPortfolioCategory']);
Route::post('/post-portfolio', [PortfolioController::class, 'PostPortfolio']);
Route::get('/view-portfolio', [PortfolioController::class, 'ViewPortfolio']);
Route::get('/delete-portfolio-category/{id}', [PortfolioController::class, 'DeletePortfolioCategory']);
Route::get('/delete-portfolio/{id}', [PortfolioController::class, 'DeletePortfolio']);

// ADMISSION 
Route::get('/show-admission-list', [BackendController::class, 'ShowAdmission']);
Route::get('/view-full-details/{id}', [BackendController::class, 'ViewAdmission']);
Route::get('/delete-admission/{id}', [BackendController::class, 'DeleteAdmission']);
