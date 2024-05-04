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
                    <a href="{{ route('sclasses.show', ['id' => $item->sclass_id]) }}">{{ $item->name_e }}</a>
                    </td>
                    <td>{{ $item->sclass_sequence }}</td>
                    <td>{{ $item->kind_name }}</td>
                </tr>


                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection