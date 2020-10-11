@extends("layouts.base")
@section("content")
  <div class="result">
    @for($i = $director_term_finish; $i <= 2030; $i += $director_term)
    <table class="table">
      <tr>
        <th scope="row"><td>{{ $i }}{{ $check }}</td></th>
      </tr>
    </table>
    @endfor
  <button value="トップに戻る" class="btn btn-link"><a href="{{ url('/index') }}">トップに戻る</a></button>
  </div>
@endsection