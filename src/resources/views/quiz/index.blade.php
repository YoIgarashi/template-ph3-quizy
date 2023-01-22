<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kuizy</title>
</head>

<body>
  @section('content')
  <div class="wrapper" id="wrapper">
    @foreach($name as $n)
    <h1 class="content">ガチで{{$n->prefecture_name}} の人しか解けない！ #{{$n->prefecture_name}} の難読地名クイズ</h1>
    @endforeach
    <div class="content">
      <!-- 問題 -->
      <h2 class="h2">この地名は何て読む？：</h2>
      <ul class="list-of-choices">
        @foreach($choices as $choice)
        {{$loop->iteration}}
        <li class="choice">
        {{$choice->name}}
        </li>
      </ul>
      @endforeach

    </div>

  </div>
</body>

</html>