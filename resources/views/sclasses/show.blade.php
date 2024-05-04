@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $sclass->name_e }}</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 30%">Tên giải đấu</th>
                        <td>{{ $sclass->name_e }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tên khác</th>
                        <td>{{ $sclass->name_es }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tên Tiếng Anh</th>
                        <td>{{ $sclass->name_s }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Ảnh / Logo</th>
                        <td><img src="{{ $sclass->sclass_pic }}" alt="Flag Image" width="100"></td>
                    </tr>
               
                    <tr>
                        <th scope="row">Mùa giải hiện tại</th>
                        <td>{{ $sclass->curr_match_season }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Vòng đấu hiện tại</th>
                        <td>{{ $sclass->curr_round }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mùa giải bắt đầu ngày</th>
                        <td>{{ $sclass->begin_season }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mùa giải kết thúc ngày</th>
                        <td>{{ $sclass->end_season }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Thuộc Liên Đoàn</th>
                        <td>{{ $sclass->association }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Ngày thành lập</th>
                        <td>{{ $sclass->establishment_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Số lượng đội bóng (CLB)</th>
                        <td>{{ $sclass->count_group }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
