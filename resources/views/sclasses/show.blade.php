@extends('layouts.app')

@section('content')
<section class="py-5">
<div class="container">
    
    <h1>{{ $items->name_e }}</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 30%">Tên giải đấu</th>
                        <td>{{ $items->name_e }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tên khác</th>
                        <td>{{ $items->name_es }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tên Tiếng Anh</th>
                        <td>{{ $items->name_s }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Ảnh / Logo</th>
                        <td><img src="{{ $items->sclass_pic }}" alt="Flag Image" width="100"></td>
                    </tr>
               
                    <tr>
                        <th scope="row">Mùa giải hiện tại</th>
                        <td>{{ $items->curr_match_season }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Số vòng</th>
                        <td>{{ $items->count_round }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Vòng đấu hiện tại</th>
                        <td>{{ $items->curr_round }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mùa giải bắt đầu ngày</th>
                        <td>{{ $items->begin_season }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mùa giải kết thúc ngày</th>
                        <td>{{ $items->end_season }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Số lượng đội bóng (CLB)</th>
                        <td>{{ $items->count_group }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@endsection
