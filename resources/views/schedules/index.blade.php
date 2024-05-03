@extends('layouts.main')
@section('content')
<section class="py-5">
    <div class="container">
        <ul class="nav nav-pills mb-3 justify-content-start" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Tất cả</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Trực tiếp(36)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Đã kết thúc</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Lịch thi đấu</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table custom-table" border="1">
                    @foreach ( $items as $item)
                    <tr style="background-color: #ddd;">
                        <td class="lighter-color"><i class="far fa-star"></i></td>
                        <td><img src="{{ $item->sclass->sclass_pic }}" alt="Sclass Pic" width="25"></td>
                        <td colspan="6">{{ $item->sclass->name_e}}</td>
                    </tr>
                    @endforeach
                    @foreach ( $items as $item)
                    <tr>
                        <td class="lighter-color"><i class="far fa-star"></i></td>
                        <td id="match_time_{{ $item->id }}" class="lighter-color">{{ $item->match_time}}</td>
                        <td id="match_minute_{{ $item->id }}"> <span style="color: red;">0'</td>
                        <td>{{ $item->homeTeam->name_e}} <img src="{{ $item->homeTeam->flag }}" alt="Flag" width="25">
                        </td>

                        <td>
                            <span style="color: red;">{{ $item->home_score}}</span><span
                                style="color: red;">-</span><span style="color: red;">{{ $item->guest_score}}</span>
                        </td>
                        <td><img src="{{ $item->homeTeam->flag }}" alt="Flag" width="25">{{ $item->guestTeam->name_e }}
                        </td>
                        <td class="lighter-color">HT {{ $item->home_half_score}}-{{ $item->guest_half_score}}</td>
                        <td class="lighter-color">
                            <i class="fas fa-flag"></i>
                            {{ $item->home_corner}}-{{ $item->guest_corner}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection