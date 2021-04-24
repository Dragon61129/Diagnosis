@extends('layouts.app')
@section('header')
<body>
    <div class="container1">
        <div>
            <center><h1>DiagnosisList</h1></center>
        </div>
        <div class="newdata">
            <button class = "btn btn-primary right" onclick="window.location='{{ url("newData") }}'">New Data</button>
        </div>
    @endsection  
    @section('content')
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope = "col">No</th>
                    <th>"定性指標No."</th>
                    <th>大分類</th>
                    <th>中分類</th>
                    <th>小分類</th>
                    <th>DX推進指標</th>
                    <th>DX推進指標</th>
                    <th>定性定量</th>
                    <th>現在</th>
                    <th>目標(例えば3年後)</th>
                    <th>なぜその成熟度と判断したかの根拠,確認方法／エビデンス等(任意)</th>
                    <th>アクション欄(任意)</th>
                    <th>Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($diagnosisData as $data)
                <tr>
                    <th>{{ $data->id }}</th>
                    <td>{{ $data->qualitative_index }}</td>
                    <td>{{ $data->big_category }}</td>
                    <td>{{ $data->mid_category }}</td>
                    <td>{{ $data->small_category }}</td>
                    <td>{{ $data->promotion_title }}</td>
                    <td>{{ $data->promotion }}</td>
                    <td>{{ $data->qual_quan }}</td>
                    <td>{{ $data->current }}</td>
                    <th>{{ $data->future }}</th>
                    <th>{{ $data->reason }}</th>
                    <th>{{ $data->action }}</th>
                    <th>
                        <div class = "control-btn">
                            <button class = "btn btn-primary" onclick = changeData('{{ $data->id }}')>変更</button>&nbsp;
                            <button class = "btn btn-danger" onclick = deleteData('{{ $data->id }}')>削除</button>
                        </div>
                       
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
     <!-- The Modal -->
     <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content" style="width:500px">
        <span class="close">&times;</span>
        <center>
            <h1>本当に削除しますか？</h1>
        </center>
        <center><br>
            <button id="m_deleteData" class = "btn btn-danger">はい</button>
            <button id = "m_cancel" class = "btn btn-primary">いいえ</button>
        </center>
    </div>
    </div>
@endsection