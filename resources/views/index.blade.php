@extends("layouts.base")

@section("content")
  <!-- <router-view /> -->
<h1>役員任期チェッカー</h1>
  <p>どの役員の任期をチェックしますか？</p>
  <div class="checker">
    <form action="/officer_term" method="get">
    <div class="center">
      <select name="officer_name" id="officer_name" class="form-control col-sm-4 mx-auto">
        <option value="director">取締役</option>
        <option value="auditor">監査役</option>
      </select>
      <button type="submit" class="btn btn-primary">次へ</button>
        <div class="info">
          <p>※入力事項は自社の定款を確認して入力してください。</p>
          <p>※途中で任期を変更したり、事業年度を変更している場合には現在対応していません。</p>
        </div>
        <div class="btn">
      </div>
    </div>
    </form> 
  </div>
@endsection