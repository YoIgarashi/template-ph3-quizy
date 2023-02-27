<h1>詳細表示</h1>
<div>
  地名
  <ul>
    @foreach($questions as $question)
    <li>
      {{$question->local_name}}
      <a href="{{route('question.edit', ['id' => $id, 'question_id'=>$question->id])}}">{{ __('編集') }}</a>
      <a href="{{route('choice.index', ['id' => $id])}}">{{ __('詳細') }}</a>
      <form method="POST" action="{{route('question.destroy',['id'=>$id,'question_id'=>$question->id])}}">
        @csrf
        <button type="submit">削除</button>
      </form>
    </li>
    @endforeach
  </ul>
  <a href="{{ route('question.create', ['id' => $id,'question_id' =>$question_id])}}">{{ __('新規作成') }}</a>

  <a href="{{ route('admin.index') }}">{{ __('一覧に戻る') }}</a>
</div>