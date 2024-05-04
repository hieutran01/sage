<table class="table custom-table">
    @foreach ( $items_arr as $sclass_id =>  $items)
        <tr data-id="{{$sclass_id}}" class="sclasse sclasse_{{$sclass_id}}" style="background-color: #ddd;">
            <td class="lighter-color">
                <i onclick="addFavorite({{$sclass_id}},'sclass')" 
                class="curson-poiter favoriteScheduleSclass favoriteScheduleSclass_{{$sclass_id}} far fa-star {{ in_array($sclass_id,$favorites['sclass']) ? 'fas' : '' }}"></i>
            </td>
            <td><img src="{{ $sclasses[$sclass_id]->sclass_pic }}" alt="Sclass Pic" width="25"></td>
            <td colspan="6">{{ $sclasses[$sclass_id]->name_e}}</td>
        </tr>
        @foreach ( $items as $item)
        <tr data-id="{{$item->schedule_id}}" class="schedule schedule_{{ $item->schedule_id }} belongTo_sclasse_{{$sclass_id}}">
            <td class="lighter-color">
                <i onclick="addFavorite({{$item->schedule_id}},'match')" 
                class="curson-poiter favoriteScheduleMatch favoriteScheduleMatch_{{$item->schedule_id}} far fa-star  {{ in_array($item->schedule_id,$favorites['match']) ? 'fas' : '' }}"></i></td>
            <td id="match_time_{{ $item->schedule_id }}" class="lighter-color">{{ $item->match_time_fm}}</td>
            <td id="match_minute_{{ $item->schedule_id }}"> <span style="color: red;">{{ $item->match_minutes_fm}}</td>
            <td class="text-end">
                {{ $item->homeTeam->name_e}} <img src="{{ $item->homeTeam->flag }}" alt="Flag" width="25">
            </td>
            <td class="text-center">
                <span style="color: red;">{{ $item->home_score}}</span><span
                    style="color: red;">-</span><span style="color: red;">{{ $item->guest_score}}</span>
            </td>
            <td><img src="{{ $item->guestTeam->flag }}" alt="Flag" width="25"> {{ $item->guestTeam->name_e }}
            </td>
            <td class="lighter-color">HT {{ $item->home_half_score}}-{{ $item->guest_half_score}}</td>
            <td class="lighter-color">
                <i class="fas fa-flag"></i>
                {{ $item->home_corner}}-{{ $item->guest_corner}}
            </td>
        </tr>
        @endforeach
    @endforeach
</table>