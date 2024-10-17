<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="{{ route('submit') }}">
            <input type="text" name="txt">
            {!! Captcha::display() !!}
            @error('h-captcha-response')
            <small class="text-danger">{{ $errors->first('h-captcha-response') }}</small>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>