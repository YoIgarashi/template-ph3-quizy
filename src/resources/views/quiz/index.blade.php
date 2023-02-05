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
  <?php
  echo $issue;
  ?>
  @section('content')
  <div class="wrapper" id="wrapper">
    <h1 class="content">ガチで{{$issue[0]->prefecture_name}}の人しか解けない！ {{$issue[0]->prefecture_name}}の難読地名クイズ</h1>
    <div class="content">
      <!-- 問題 -->
      @foreach ($issue[0]->questions as $question)
      <h2 class="h2">この地名は何て読む？</h2>
      <img src="../img/{{$question->image}}.png" alt="">
      <ul class="list-of-choices">
        @foreach ($question->choices as $choice)
        <li class="choice">
          {{$choice->name}}
        </li>
        @endforeach
      </ul>
      @endforeach
    </div>
  </div>
</body>

</html>