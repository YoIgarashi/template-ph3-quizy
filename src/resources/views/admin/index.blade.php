<h1>一覧表示</h1>

<table>
  <tr>
    <th>ID</th>
    <th>県名</th>
  </tr>
  @foreach($big_questions as $big_question)
  <tr>
    <td>{{$big_question->id}}</td>
    <td>{{$big_question->prefecture_name}}</td>
    <td>
      <form method="POST" action="{{route('admin.destroy',['id'=>$big_question->id])}}">
        @csrf
        <button type="submit">削除</button>
      </form>
    </td>
    <td>
      <a href="{{route('admin.edit',['id'=>$big_question->id])}}">{{ __('編集') }}</a>
    </td>
    <td>
      <a href="{{route('question.index',['id'=>$big_question->id])}}">詳細</a>
    </td>
  </tr>
  @endforeach
</table>


<a href="{{ route('admin.create') }}">{{ __('新規作成') }}</a>