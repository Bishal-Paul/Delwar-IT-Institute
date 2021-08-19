@extends('frontend.master')

@section('content')
<?php
$count = 1;
?>

<!-- EXAM AREA START -->
<section class="exam_wrapper_area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="exam_question exam_tab_content content_box_shadow">
                    <div class="test_question">
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6 text-right">
                                <div class="exam_time_count">
                                    <img src="{{url('frontend')}}/assets/images/stopwatch.png" alt="stopwatch">
                                    <span id="ten-countdown"></span>
                                </div>
                            </div>
                        </div>

                        <div class="question_pagination text-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#question_part_1">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#question_part_2">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#question_part_3">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#question_part_4">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#question_part_5">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <form action="{{url('post-examquestion')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div id="question_part_1">

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="qu_box">
                                            <div class="question_titel">
                                                <h5>1. {{$question->question1}}</h5>
                                            </div>
                                            <div class="answer_box tarea_ans">
                                                <textarea name="answer1" id="answer" class="form-control" spellcheck="false"></textarea>
                                                <span>words limit :250</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="qu_box">
                                            <div class="question_titel">
                                                <h5>2. {{$question->question2}}</h5>
                                            </div>
                                            <div class="answer_box tarea_ans">
                                                <textarea name="answer2" id="answer" class="form-control" spellcheck="false"></textarea>
                                                <span>words limit :250</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="qu_box">
                                            <div class="question_titel">
                                                <h5>3. {{$question->question3}}</h5>
                                            </div>
                                            <div class="answer_box tarea_ans">
                                                <textarea name="answer3" id="answer" class="form-control" spellcheck="false"></textarea>
                                                <span>words limit :250</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="qu_box">
                                            <div class="question_titel">
                                                <h5>4. {{$question->question4}}</h5>
                                            </div>
                                            <div class="answer_box tarea_ans">
                                                <textarea name="answer4" id="answer" class="form-control" spellcheck="false"></textarea>
                                                <span>words limit :250</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="exam_btn nxt_btn nx_bt_1">
                                    <a href="#" class="btn submit_btn default">next</a>
                                </div>
                            </div>

                            <div id="question_part_2">
                                <div class="row">
                                    <?php
                                    $count = 1;
                                    ?>

                                    @foreach($mcq_question as $key => $item)
                                    <div class="col-md-6 col-12">
                                        <div class="qu_box">
                                            <div class="question_titel">
                                                <h5>{{$key+5}}. {{$item->question}}</h5>
                                            </div>

                                            <input type="hidden" name="mcq_question_id[]" value="{{ $item->id }}">
                                            <div class="answer_box">
                                                <label class="start_quiz_item">
                                                    <input class="exp-option-box" type="radio" name="mcq_answer[{{$count}}]" value="{{$item->option1}}">
                                                    <span class="exp-number text-uppercase">A</span>
                                                    <span class="exp-label">{{$item->option1}}</span>
                                                    <span class="checkmark-border"></span>
                                                </label>
                                                <label class="start_quiz_item">
                                                    <input class="exp-option-box" type="radio" name="mcq_answer[{{$count}}]" value="{{$item->option2}}">
                                                    <span class="exp-number text-uppercase">B</span>
                                                    <span class="exp-label">{{$item->option2}}</span>
                                                    <span class="checkmark-border"></span>
                                                </label>
                                                <label class="start_quiz_item">
                                                    <input class="exp-option-box" type="radio" name="mcq_answer[{{$count}}]" value="{{$item->option3}}">
                                                    <span class="exp-number text-uppercase">C</span>
                                                    <span class="exp-label">{{$item->option3}}</span>
                                                    <span class="checkmark-border"></span>
                                                </label>
                                                <label class="start_quiz_item">
                                                    <input class="exp-option-box" type="radio" name="mcq_answer[{{$count}}]" value="{{$item->option4}}">
                                                    <span class="exp-number text-uppercase">D</span>
                                                    <span class="exp-label">{{$item->option4}}</span>
                                                    <span class="checkmark-border"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $count++; ?>
                                    @endforeach

                                </div>

                                <div class="exam_btn nxt_btn nx_bt_2">
                                    <a href="#" class="btn submit_btn default">next</a>
                                </div>
                            </div>
                            <div id="question_part_3">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="qu_box">
                                            <div class="question_titel">
                                                <h5>9. Are You Earning Income?</h5>
                                            </div>
                                            <div class="answer_box choose">
                                                <input class="form-check-input show" type="radio" name="earning" value="Yes" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                                <input class="form-check-input hide" type="radio" name="earning" value="No" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="to-show">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-12">
                                            <div class="div-one qu_box">
                                                <div class="question_titel">
                                                    <h5>1.Give a screenshot of your income?</h5>
                                                </div>
                                                <div id='profile-upload'>
                                                    <div class="hvr-profile-img">
                                                        <input type="file" name="earning_ss" id='getval' class="upload w180" title="Dimensions 180 X 180" id="imag">
                                                    </div>
                                                    <i class="fas fa-camera"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="div-one qu_box">
                                                <div class="question_titel">
                                                    <h5>2.Tell about your self?</h5>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="about_student" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                    <label for="floatingTextarea">Comments</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="div-one two qu_box">
                                                <div class="question_titel">
                                                    <h5>3.Give us a pictures of you?</h5>
                                                </div>
                                                <input type="file" name="student_img" id='getval' class="upload w180" title="Dimensions 180 X 180" id="imag">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="div-one qu_box">
                                                <div class="question_titel">
                                                    <h5>4.Tell your success story?</h5>
                                                </div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="success_story" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                    <label for="floatingTextarea">Comments</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exam_btn text-center nx_bt_5">
                                    <button class="btn submit_btn default" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- EXAM AREA END -->
@endsection

@section('footer_js')
<script>
    function countdown(elementName, minutes, seconds) {
        var element, endTime, hours, mins, msLeft, time;

        function twoDigits(n) {
            return (n <= 9 ? "0" + n : n);
        }

        function updateTimer() {
            msLeft = endTime - (+new Date);
            if (msLeft < 1000) {
                element.innerHTML = "Time is up!";
            } else {
                time = new Date(msLeft);
                hours = time.getUTCHours();
                mins = time.getUTCMinutes();
                element.innerHTML = "Time left: " + (hours ? hours + ':' + twoDigits(mins) : mins) + ':' + twoDigits(time.getUTCSeconds());
                setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
            }
        }

        element = document.getElementById(elementName);
        endTime = (+new Date) + 1000 * (60 * minutes + seconds) + 500;
        updateTimer();
    }

    countdown("ten-countdown", 20, 0);
</script>
@endsection