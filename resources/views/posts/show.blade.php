<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>
    @if($post->comments)
    // Tampilkan komentar
    @endif


    foreach ($comments as $comment)
    <div>
        <div class="card mb-3">
            <p style="font-size : 8pt"></p> {{ $comment->comment }}</p>
        </div>
    </div>
</body>

</html>