

<h1>詳細表示</h1>
<div>
  地名
  <ul>
    @foreach($questions as $question)
    <li>
      {{$question->local_name}}
      <a href="{{route('question.edit',['id' => $id, 'question_id'=>$question->id])}}">{{ __('編集') }}</a>
    </li>
    @endforeach
  </ul>
  <a href="{{ route('question.create', ['id' => $id])}}">{{ __('新規作成') }}</a>

  <a href="{{ route('admin.index') }}">{{ __('一覧に戻る') }}</a>
</div>