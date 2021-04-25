!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
</head>
<body>
@include('partials.header')
<div class="container">
    @yield('content')
</div>
<p>Lorem ipsum curabitur non ultricies sit morbi rutrum mattis in leo nec ipsum magna, gravida non leo, integer: vitae. Gravida enim vulputate, a quam ornare massa molestie porta, quam: molestie ipsum, nulla molestie ultricies malesuada eu a lectus duis auctor maecenas mattis. Odio bibendum duis congue, eros sed sem risus duis mattis nibh elementum sit urna diam. Quam porta proin a, leo sit tellus porttitor auctor sapien donec urna — at tellus. Sagittis sed leo at sem, lorem curabitur sapien vulputate vivamus odio mattis sed fusce rutrum metus elementum. Lectus diam porttitor ut et, at eu cursus quisque mauris integer mauris malesuada ipsum. Ut mauris sem diam porttitor, massa nam porta sit quam et auctor ultricies adipiscing quisque metus sodales rutrum.</p>
</body>
</html>
