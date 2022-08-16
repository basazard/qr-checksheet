<table id="tableNitrogen" class="display" style="width:100%">
    <thead>
        <tr>
            @foreach ($theadsNitrogen as $thead)
            <td>{{ $thead }}</td>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($nitrogen as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>{{ $item->LCDDisplay }}</td>
            <td>{{ $item->remarks1 }}</td>
            <td>{{ $item->Purity }}</td>
            <td>{{ $item->remarks2 }}</td>
            <td>{{ $item->checker }}</td>
        </tr>
        @endforeach

    </tbody>
</table>