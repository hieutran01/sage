@extends('layouts.main')
@section('content')
<section class="py-5">
    <div class="container">
        <ul class="nav nav-pills mb-3 justify-content-start" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button data-type="" type="button" class="loadSchedule nav-link active" >Tất cả</button>
            </li>
            <li class="nav-item" role="presentation">
                <button data-type="{{ \App\Models\Schedule::IS_LIVE }}" type="button" class="loadSchedule nav-link">Trực tiếp(<?= $number_live ;?>)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button data-type="{{ \App\Models\Schedule::FINISHED }}" type="button" class="loadSchedule nav-link" >Đã kết thúc</button>
            </li>
            <li class="nav-item" role="presentation">
                <button data-type="{{ \App\Models\Schedule::NOT_START }}" type="button" class="loadSchedule nav-link" >Lịch thi đấu</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="schedules-data" data-match_ids="{{ implode(',',$match_ids) }}">
                @include('schedules.includes.table')
            </div>
        </div>
    </div>
</section>
@endsection
