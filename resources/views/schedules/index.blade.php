@extends('layouts.main')
@section('content')
<section class="py-5">
    <div class="container">
        <ul class="nav nav-pills mb-3 justify-content-start" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button type="button" onclick="loadSchedule('',this)" class="nav-link active" >Tất cả</button>
            </li>
            <li class="nav-item" role="presentation">
                <button type="button" onclick="loadSchedule(1,this)" class="nav-link">Trực tiếp(<?= $number_live ;?>)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button type="button" onclick="loadSchedule(-1,this)" class="nav-link" >Đã kết thúc</button>
            </li>
            <li class="nav-item" role="presentation">
                <button type="button" onclick="loadSchedule(0,this)" class="nav-link" >Lịch thi đấu</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="schedules-data" role="tabpanel" aria-labelledby="pills-home-tab">
                @include('schedules.includes.table')
            </div>
        </div>
    </div>
</section>
@endsection