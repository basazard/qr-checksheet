<table id="tableTangki" class="display" style="width:100%">
    <thead>
        <tr>
            @foreach ($theadsTangki as $thead)
            <td>{{ $thead }}</td>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($tangki as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>{{ $item->KranPembuanganAirTangki1 }}</td>
            <td>{{ $item->remarks1 }}</td>
            <td>{{ $item->TekananAnginTangki1 }}</td>
            <td>{{ $item->remarks2 }}</td>
            <td>{{ $item->TekananAnginTangki2 }}</td>
            <td>{{ $item->remarks3 }}</td>
            <td>{{ $item->TekananAnginTangki3 }}</td>
            <td>{{ $item->remarks4 }}</td>
            <td>{{ $item->checker }}</td>
        </tr>
        @endforeach

    </tbody>
</table>