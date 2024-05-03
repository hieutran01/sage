@extends('layouts.app')

@section('content')

<style>
    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<div class="league-content loading-content">
    <div class="caption-6-single mt-50">
        <h1 class="title">
            <span>Ngoại hạng Anh - Danh sách Câu lạc bộ</span>
            <i class="icon-barr-right"></i>
        </h1>
    </div>
    <div class="data">
        <div class="box_league_clb mb-15 radius-widget">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Logo</th>
                        <th>Tên CLB</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="lazy" src="https://mediares.thethao247.vn/res/image/data/pfchdCg5-vcNAdtF9.png" data-original="https://mediares.thethao247.vn/res/image/data/pfchdCg5-vcNAdtF9.png" alt="Arsenal" style=""></td>
                        <td><a href="https://thethao247.vn/livescores/team/arsenal/hA1Zm19f/" title="Arsenal">Arsenal</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="lazy" src="https://mediares.thethao247.vn/res/image/data/UXcqj7HG-lQuhqN8N.png" data-original="https://mediares.thethao247.vn/res/image/data/UXcqj7HG-lQuhqN8N.png" alt="Manchester City" style=""></td>
                        <td><a href="https://thethao247.vn/livescores/team/manchester-city/Wtn9Stg0/" title="Manchester City">Manchester City</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img class="lazy" src="https://mediares.thethao247.vn/res/image/data/vwC9RGhl-Imx2oQd8.png" data-original="https://mediares.thethao247.vn/res/image/data/vwC9RGhl-Imx2oQd8.png" alt="Liverpool" style=""></td>
                        <td><a href="https://thethao247.vn/livescores/team/liverpool/lId4TMwf/" title="Liverpool">Liverpool</a></td>
                    </tr>
                    <!-- Add more rows for other teams -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
