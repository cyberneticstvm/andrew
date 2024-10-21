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
            src: url("{{ storage_path('/fonts/Raleway-Bold.ttf') }}") format("truetype");
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

        .head {
            font-family: 'text-bold';
            font-size: 1.5rem;
        }

        .page p {
            width: 80%;
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
            background-color: #0070C0;
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
            background-color: #0070C0;
            font-family: 'text';
            width: 60%;
            margin-top: 10%;
            margin-left: 17%;
        }

        .call a,
        .call1 a {
            text-decoration: none;
            cursor: pointer;
            color: #fff;
            letter-spacing: 1px;
        }

        .page li {
            width: 90%;
        }

        .solid {
            width: 90%;
            color: #000;
            font-weight: bold;
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
    </style>
</head>

<body>
    <!--<div class="cover"></div>-->
    <div class="cover">
        <img src="./assets/img/cover-high-res.png" class="img-fluid" />
    </div>
    <img src="./assets/img/thankyou.png" class="img-fluid" />
    <div class="container-fluid">
        <div class="row">
            <div class="col page">
                <div class='head'>YOUR STRENGTH PROFILE</div>
                <div class="mb-3">Based on your responses in the quiz, your Strength Profile is:</div>
                <div class="text-center">
                    <br>
                    <div class="head" style="background-color: {{ $strength->bg_color }}; width: 30%; margin: 0 auto; border-radius: 30px; padding: 10px; text-align: center; color: #fff;">{{ $strength->outcome }}</div>
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
        <div class="col page" style="width: 100%;">
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
        </div>
    </div>
</body>

</html>