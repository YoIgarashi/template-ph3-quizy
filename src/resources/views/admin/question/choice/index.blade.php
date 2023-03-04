<h1>詳細表示</h1>
<div>
  問題
  <ul>
    @foreach($choices->choices as $choice)
    <li>
      {{$choice->name}}
      <a href="{{route('choice.edit', ['choice_id' => $choice->id ])}}">{{ __('編集') }}</a>
      <form method="POST" action="{{route('choice.destroy', ['choice_id' => $choice->id])}}">
        @csrf
        <button type="submit">削除</button>
      </form>
    </li>
    @endforeach
  </ul>
  <a href="{{ route('choice.create',['choice_id'=>$choices->id])}}">{{ __('新規作成') }}</a>

  <a href="{{route('question.index',['id'=>$choices->id])}}">{{ __('一覧に戻る') }}</a>
</div>