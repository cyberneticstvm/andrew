<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lifestyle Design quiz Report</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/favicon.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @font-face {
            font-family: 'text';
            src: url("{{ storage_path('/fonts/Raleway-Light.ttf') }}") format("truetype");
        }

        @font-face {
            font-family: 'text-bold';
            src: url("{{ storage_path('/fonts/Lulo_Clean_W01_One_Bold.ttf') }}") format("truetype");
        }

        @page {
            margin: 0px;
        }

        .cover {
            /*background: url("./assets/images/cover-high-res.jpg");*/
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }

        .cover img {
            height: 100%;
        }

        .page {
            margin: 5%;
            font-family: text;
        }

        .page1 {
            margin: 10px 0px 0px 40px;
            font-family: text;
        }

        .head {
            font-family: 'text-bold';
            font-size: 1.5rem;
        }

        .page p {
            width: 90%;
            text-align: justify;
            font-size: 1.2rem;
            margin-left: 5%;
            margin-right: 5%;
        }

        .signature img {
            margin-left: 5%;
        }

        p.small,
        .page li {
            font-size: 12px;
        }

        .br {
            page-break-after: always;
        }

        .desc {
            height: 30%;
            margin-bottom: -2%;
        }

        .desc1 {
            height: 57%;
            margin-bottom: -2%;
        }

        .table {
            margin: 0 5%;
            width: 90%;
        }

        .td {
            border-radius: 10%;
            text-align: center;
            color: #000;
            padding: 20px 0 20px 0;
            background-color: #D3D3D3;
            font-family: 'text';
        }

        .call {
            border-radius: 10%;
            text-align: center;
            color: #fff;
            padding: 15px 0 15px 0;
            background-color: #00004B;
            font-family: 'text';
            width: 60%;
            margin-top: 3%;
            margin-left: 17%;
            bottom: 10;
            position: fixed;
        }

        .call1 {
            border-radius: 10%;
            text-align: center;
            color: #fff;
            padding: 15px 0 15px 0;
            background-color: #00004B;
            font-family: 'text';
            width: 60%;
            margin-left: 17%;
        }

        .call a,
        .call1 a {
            text-decoration: none;
            cursor: pointer;
            color: #fff;
            font-size: large;
            letter-spacing: 1px;
        }

        .page li {
            width: 90%;
        }

        .solid {
            width: 100%;
            color: #e6e6e6;
        }

        .chkpoint img {
            right: 60;
            top: 10;
            position: fixed;
        }

        .chkpoint {
            margin-top: 3%;
        }

        .text-center {
            text-align: center !important;
        }

        .text-justify {
            text-align: justify !important;
        }

        .innovation {
            background-color: #f79109 !important;
        }

        .compassion {
            background-color: #ff0066 !important;
        }

        .optimism {
            background-color: #ffcc00 !important;
        }

        .vision {
            background-color: #a8d18d !important;
        }

        .action {
            background-color: #4472c8 !important;
        }
    </style>
</head>

<body>
    <!--<div class="cover"></div>-->
    <div class="cover">
        <img src="./assets/img/page1.png" class="img-fluid" />
    </div>
    <img src="./assets/img/page2.png" class="img-fluid" width="100%" />
    <div class="container-fluid">
        <div class="row">
            <div class="col page">
                <div class='head'>YOUR STRENGTH PROFILE</div>
                <div class="mb-3">Based on your responses in the quiz, your Strength Profile is:</div>
                <div class="text-center">
                    <br>
                    <div class="head" style="background-color: {{ $strength->bg_color }}; width: 50%; margin: 0 auto; border-radius: 30px; padding: 10px; text-align: center; color: #fff;">{{ $strength->outcome }}</div>
                    <br>
                </div>
                <div class="desc">
                    <p>{!! $strength->description !!}</p>
                </div>
            </div>
            <div class="profile"><img src="./assets/bgs/{{ $quiz->category.'.jpg' }}" class="img-fluid" height="100%" /></div>
        </div>
    </div>
    <div class="row">
        <div class="col page">
            <div class='head'>THE STRENGTHS</div>
            <table>
                @forelse($strengths as $key => $s)
                <tr>
                    <td><img src="./assets/bgs/{{ $s->img_name1 }}" width="100%" /></td>
                    <td width="75%" class="text-justify" style="padding-left: 10px;">{{ $s->description }}</td>
                </tr>
                @empty
                @endforelse
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col page1" style="width: 100%;">
            <div class='head' style="width: 100%;">YOUR PROFILE</div>
            <img src="data:image/png;base64, {{ $chart }}" />
        </div>
        <div class="col-md-12 text-center">
            <span style="height: 10px; background-color: #ff0066">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;Compassion&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="height: 10px; background-color: #f79109">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;Innovation&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="height: 10px; background-color: #ffcc00">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Optimism&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="height: 10px; background-color: #a8d18d">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Vision&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="height: 10px; background-color: #4472c8">&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Action
        </div>
    </div>
    <div class="row">
        <div class="col page">
            <div class='head'>WHAT MATTERS MOST?</div>
            <div class="mb-3">Based on your quiz responses, the lifestyle domains that matters most
                to you right now are…</div>
            <table>
                @forelse($quiz->domains as $key => $item)
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height: 50px; width: 50px; background: gainsboro; text-align:center; border-radius: 50; padding-bottom:2px">
                        {{ $key + 1 }}
                    </td>
                    <td style="height: 50px; width: 100%; background: gainsboro; border-radius: 25; padding-left:25px; padding-right: 25px;">
                        {{ $item->option->option }}
                    </td>
                </tr>
                @empty
                @endforelse
            </table>
            <br />
            <div class='head text-center'>YOUR FOCUS FOR GROWTH IS ...</div>
        </div>
        <div class="profile text-center"><img src="./assets/focus/{{ $focus->img_name }}" class="img-fluid" width="100%" /></div>
        <div class="col page">
            <p class="text-center" style="margin-top: -15px;">Does that sound right? Or is there something else?</p>
            <p class="">{!! $desc->description !!}</p>
            <p class="text-center">{!! $strength->description2 !!}</p>
            <p>Take a personalised mini training if you’re ready to start winning!</p>
            <div class="call" style="margin-bottom: 25px;"><a href="https://www.blueprintlifecoaching.com.au/coaching/let-s-talk" target="_blank">GET THE TRAINING</a></div>
        </div>
    </div>
    <div class="br"></div>
    <div class="row">
        <div class="col page">
            <div class='head'>CLARITY QUESTIONS</div>
            <p style="font-size: 15px;">{!! $desc->intro_text !!}</p>
            <ul>
                @forelse($questions as $key => $question)
                <li class="">
                    <p style="font-size: 14px;">{!! $question->question !!}</p>
                </li>
                @for($i=0; $i < $question->no_of_lines / 2; $i++)
                    <div>_______________________________________________________________________________</div>
                    @endfor

                    @empty
                    @endforelse
            </ul>
            <p class="text-center">Want to get more clarity?</p>
            <div class="call1"><a href="https://www.blueprintlifecoaching.com.au/bookings-checkout/let-s-talk-life/book" target="_blank">BOOK A FREE DISCOVERY CALL</a></div>
        </div>
    </div>
    <div class="br"></div>
    <div class="row">
        <div class="col page">
            <div class='head'>CHECKPOINT</div>
            <div class='chkpoint'><img src="./assets/bgs/{{ $strength->img_name2 }}" class="img-fluid" width="20%" /></div>
            <p>Here are some things to watch out for…</p>
            <div style="margin-top: -50px;">
                <p>{!! $strength->description1 !!}</p>
            </div>
        </div>
        <div class="profile text-center"><img src="./assets/img/bgs/{{ $strength->img_name }}" class="img-fluid" width="100%" height="100%" /></div>
    </div>
    <div class="br"></div>
    <div class="row">
        <div class="col page">
            <p>Hey {{ $quiz->name }},</p>
            <p>Thanks for taking the quiz. I trust this report has helped you.</p>
            <p>I know you’re here because you want to see breakthrough in your life. You’re here because the traditional way of doing things just hasn’t worked, or is going waaaayyy too slow to be OK</p>
            <p>You have a strength of {{ $strength->outcome }} and you’re willing to work hard to get rapid gains in your {{ $focus->label }} – am I right?</p>
            <p>That’s why I created this quiz. Because step 1 is getting to know what you actually want to change.</p>
            <p>And then Step 2 is getting clear on your unique identity, but also working on your weak areas and any limiting beliefs that might be holding you back.</p>
            <p>From there, you can design a strategy and start building the life of your dreams!.</p>
            <p>There’s 2 ways you can do this.</p>
            <p>1. Is on a discovery call with me. In about 20 minutes we can unpack the results of this quiz and tap into some smart actions that are going to move the needle for you right now.</p>
            <p>2. Is by taking the mini training course that I have designed for you.</p>
            <p>So now it’s up to you! Choose the best way forward and start to maximise your life!</p>
            <table width="100%">
                <tr>
                    <td class="text-center call" width="45%">
                        <a href="https://www.blueprintlifecoaching.com.au/bookings-checkout/let-s-talk-life/book" target="_blank">DISCOVERY CALL</a>
                    </td>
                    <td width="10%"></td>
                    <td class="text-center call" width="45%">
                        <a href="https://www.blueprintlifecoaching.com.au/bookings-checkout/let-s-talk-life/book" target="_blank">MINI TRAINING</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>