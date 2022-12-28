<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }
        h1 {
            font-size: 50pt; 
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
    </style>
</head>
<body>
    <h1>
        Blade/Index
    </h1>
    <p>
        &#064;whileディレクティブの例
    </p>
    <ol>
        @php
        $counter = 0;
        @endphp
        @while ($counter < count($data))
        <li>
            {{ $data[$counter] }}
        </li>
        @php
        $counter++;
        @endphp
        @endwhile
    </ol>

    <form action="/hello" method="POST">
        @csrf
        <input type="text" name="msg" >
        <input type="submit">
    </form>
</body>
</html>