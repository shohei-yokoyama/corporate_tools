@extends("layouts.base")
@section("content")
  <h1>役員任期チェッカー</h1>
  <div class="checker">
    <form action="/term_check" method="get">
    <label for="term">取締役の任期は？</label><br>
    <select name="director_term" id="term" class="form-control col-sm-1 mx-auto">
      @for($i=1; $i <= 10; $i++)
      <option>{{ $i }}</option>
      @endfor
    </select>
    <br><label for="founding_date">設立日は？</label><br>
    <input type="date" id="founding_date" name="founding_date" required class="form-control col-sm-2 mx-auto"><br>
    <label for="business_year">事業年度末は？</label><br>
    <div class="business-year">
    <select name="business_year1" id="business_year" class="form-control  col-sm-1">
      @for($m=1;$m<=12;$m++)
      <option>{{ $m }}</option>
      @endfor
    </select>
    <select name="business_year2" id="business_year" class="form-control col-sm-1">
      @for($d=30;$d<=31;$d++)
      <option>{{ $d }}</option>
      @endfor
    </select>
    </div>
    <div class="btn">
      <button type="submit" value="チェックする" class="btn btn-primary">チェックする</button><br>
      <button value="戻る" class="btn btn-link"><a href="{{url('/index')}}">戻る</a></button>
    </div>
    </form>
  </div>
@endsection