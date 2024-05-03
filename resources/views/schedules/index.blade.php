@extends('layouts.app')
@section('content')
<style>
.container {
    width: 80%;
    /* Adjust the width as needed */
    margin: auto;
    /* Center the container */
}

.custom-table {
    border-collapse: collapse;
    width: 100%;
}

.custom-table td,
.custom-table th {
    border-bottom: 1px solid #ddd;
    /* Set the border style for bottom only */
    padding: 8px;
}


.custom-table tr:hover {
    background-color: #ddd;
}

.nav-link:not(.active) {
    background-color: #DDDDDD;
    /* Set the background color for inactive links */
    margin-right: 10px;
    /* Adjust the spacing between the links */
    color: #333;
    /* Adjust the text color for inactive links */
    font-weight: bold;
    /* Make the text bold for inactive links */
}

.nav-link.active {
    background-color: #007bff;
    /* Set the background color for the active link */
    color: #fff;
    /* Set the text color for the active link */
    font-weight: bold;
    /* Make the text bold for the active link */
    margin-right: 10px;
    /* Remove the spacing for the active link */

}

.moveable {
    display: flex;
    padding: 0;
    /* Loại bỏ padding */
    margin: 0;
    /* Loại bỏ margin */
    margin-left: 205px;
}

.lighter-color {
    color: #999;
    /* Màu nhạt */
}
</style>

<ul class="nav nav-pills mb-3 justify-content-start moveable" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button"
            role="tab" aria-controls="pills-contact" aria-selected="false">Tất cả</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button"
            role="tab" aria-controls="pills-home" aria-selected="true">Trực tiếp(36)</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button"
            role="tab" aria-controls="pills-profile" aria-selected="false">Đã kết thúc</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button"
            role="tab" aria-controls="pills-contact" aria-selected="false">Lịch thi đấu</button>
    </li>
</ul>
<div class="container">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="custom-table" border="1">
                @foreach ( $items as $item)
                <tr style="background-color: #ddd;">
                    <td class="lighter-color"><i class="far fa-star"></i></td>
                    <!-- <td><img src="{{ $item->sclass->sclass_pic }}" alt="Ảnh" width="50"></td> -->
                    <td><img src="{{ asset('image/mu.png') }}" alt="Ảnh" width="25"></td>
                    <td colspan="6">{{ $item->sclass->name_e}}</td>
                </tr>
                @foreach ( $items as $item)
                <tr>
                    <td class="lighter-color"><i class="far fa-star"></i></td>
                    <td id="match_time_{{ $item->id }}" class="lighter-color">{{ $item->match_time}}</td>
                    <td id="match_minute_{{ $item->id }}"> <span style="color: red;">0'</td>
                    <!-- <td>{{ $item->homeTeam->name_e}} {{ $item->homeTeam->flag}}</td> -->
                    <td>{{ $item->homeTeam->name_e}}<img src="{{ asset('image/mu.png') }}" width="25"></td>
                    <td>
                        <span style="color: red;">{{ $item->home_score}}</span><span style="color: red;">-</span><span
                            style="color: red;">{{ $item->guest_score}}</span>
                    </td>
                    <td>{{ $item->homeTeam->flag}} {{ $item->guestTeam->name_e}}</td>
                    <td class="lighter-color">HT {{ $item->home_half_score}}-{{ $item->guest_half_score}}</td>
                    <td class="lighter-color">
                        <i class="fas fa-flag"></i>
                        {{ $item->home_corner}}-{{ $item->guest_corner}}
                    </td>
                </tr>
                <script>
                // Lấy thời gian bắt đầu trận đấu từ cột match_time và đặt múi giờ cho Việt Nam
                var matchTime = new Date("{{ $item->match_time }}").toLocaleString("en-US", {
                    timeZone: "Asia/Ho_Chi_Minh"
                });
                var now = new Date().toLocaleString("en-US", {
                    timeZone: "Asia/Ho_Chi_Minh"
                });
                var diff = Math.floor((new Date(now) - new Date(matchTime)) / 1000); // difference in seconds
                var minutes = Math.floor(diff / 60);
                var seconds = diff % 60;
                // Giới hạn số phút hiển thị không quá 99 phút
                if (minutes > 99) {
                    minutes = 99;
                    seconds = 59;
                }
                // Cập nhật số phút cho cột match_minute_{{ $item->id }}
                document.getElementById('match_minute_{{ $item->id }}').innerText = (minutes < 10 ? '0' : '') +
                    minutes + "'" + (seconds < 10 ? '0' : '') + seconds + '"';
                </script>

                @endforeach
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection