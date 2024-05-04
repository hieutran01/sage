@extends('layouts.main')
@section('content')
<section class="py-5">
<div class="container">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="custom-table" border="1">
                <tr style="background-color: #ddd;">
                    <td>Tên giải đấu</td>
                    <td>Hạng</td>
                    <td>Thể thức</td>
                </tr>
                @foreach ( $items as $item)
                <tr>
                <td>
                    <img src="{{ $item->sclass_pic }}" alt="Flag Image" width="25">
                    <a href="{{ route('sclasses.show', ['id' => $item->sclass_id]) }}" class="text-dark">{{ $item->name_e }}</a>
                    </td>
                    <td>{{ $item->sclass_sequence }}</td>
                    <td>{{ $item->kind_name }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</section>
@endsection