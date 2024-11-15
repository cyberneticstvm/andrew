<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Lifestyle Design Quiz</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('/assets/css/demo.css') }}" rel="stylesheet" />

    <script async src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('{{ asset('/assets/img/bg.jpg') }}')">
        <!--   Creative Tim Branding   -->
        <a href="https://www.andrewlord.com.au/" target="_blank">
            <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('/assets/img/favicon.png') }}">
                </div>
                <div class="brand">

                </div>
            </div>
        </a>

        <!--  Made With Material Kit  -->
        <a href="#" class="made-with-mk">
            <div class="brand">MK</div>
            <div class="made-with">Made with <strong>Material Kit</strong></div>
        </a>

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="purple" id="wizard">
                            <form action="{{ route('submit') }}" method="post" id="QuizForm">
                                @csrf
                                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Lifestyle Design Quiz
                                    </h3>
                                    @session('success')
                                    <div class="contact-form-success alert alert-success mt-4">
                                        {{ session('success') }}
                                    </div>
                                    @endsession
                                    @session('error')
                                    <div class="contact-form-error alert alert-danger mt-4">
                                        {{ session('error') }}
                                    </div>
                                    @endsession
                                </div>
                                <div class="wizard-navigation {{ ($isMobile) ? 'hide' : '' }}">
                                    <ul>
                                        @forelse($questions as $key => $question)
                                        <li><a class="asd" href="#{{ $question->qcode }}" data-toggle="tab" data-qid="{{ $question->id }}" data-input="{{ $question->input }}">{{ $question->qcode }}</a></li>
                                        @empty
                                        @endforelse
                                        <li><a class="asd" href="#q26" data-toggle="tab" data-qid="26" data-input="text">q26</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    @forelse($questions as $key => $question)
                                    <div class="tab-pane" id="{{ $question->qcode }}">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text fw-bold">{{ $question->header ?? '' }}</h4>
                                            </div>
                                            <div class="col-sm-12">
                                                <h4 class="fw-bold">{!! $question->question !!}</h4>
                                                @if($key == 1)
                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-2">
                                                        <img src="{{ asset('/assets/img/heart.png') }}" class="img-fluid border border-info rounded-circle" width="100" />
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img src="{{ asset('/assets/img/bulb.png') }}" class="img-fluid border border-info rounded-circle" width="100" />
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img src="{{ asset('/assets/img/sun.png') }}" class="img-fluid border border-info rounded-circle" width="100" />
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img src="{{ asset('/assets/img/explore.png') }}" class="img-fluid border border-info rounded-circle" width="100" />
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img src="{{ asset('/assets/img/hand.png') }}" class="img-fluid border border-info rounded-circle" width="100" />
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                </div>
                                                @endif
                                                @if($question->qcode == 'q9')
                                                <div class="sortable-list">
                                                    <ul class="sortable" id="sortable">
                                                        @forelse($question->optionsInRandom(9) as $key1 => $option)
                                                        <li draggable="true" data-optval="{{ $option->id }}">
                                                            <h4><span class="dragNum">{{ $key1 + 1 }}. </span>{{ $option->option }}</h4>
                                                            <input type="hidden" name="dragval[]" value="{{ $option->id }}" class="dragVal {{ $question->qcode }}" data-next="{{ $option->next_question }}" data-prev="{{ $option->prev_question }}" />
                                                        </li>
                                                        @empty
                                                        @endforelse
                                                    </ul>
                                                </div>
                                                @else
                                                <div class="">
                                                    @forelse($question->options as $key2 => $option)
                                                    <h4><input type="{{ $question->input }}" name="{{ $question->qcode.'[]' }}" value="{{ $option->value }}" class="{{ $question->qcode }}" data-next="{{ $option->next_question }}" data-prev="{{ $option->prev_question }}"> {{ $option->option }}</h4>
                                                    @empty
                                                    @endforelse
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                    <div class="tab-pane" id="q26">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text fw-bold">Thank you. Where can we send your results?</h4>
                                            </div>
                                            <div class="col-sm-12">
                                                <h4 class="fw-bold text-center">Your Details</h4>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Your Name</label>
                                                            <input name="name" type="text" class="form-control" required>
                                                            @error('name')
                                                            <small class="text-danger">{{ $errors->first('name') }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">email</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Your Email</label>
                                                            <input name="email" type="email" class="form-control" required>
                                                            @error('email')
                                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-sm-offset-4 mt-3">
                                                    <div class="g-recaptcha mt-4" data-sitekey={{ config('services.recaptcha.key' )}}></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                                        <button type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish'>Finish</button>
                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                <a href="https://lifestyledesignquiz.com/" target="_blank">&#169; Andrew Lord, MX Life Academy</a>.
            </div>
        </div>
    </div>
    <div class="modal fade" id="progressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Thank You!</h2>
                </div>
                <div class="modal-body">
                    <p class="text-center fs-1">Please wait a few minutes while we analyse your responses and generate your report.</p><br />
                    <div class="loader"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('/assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('/assets/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/js/drag-and-drop.js') }}"></script>
<script src="{{ asset('/assets/js/script.js') }}"></script>

</html>