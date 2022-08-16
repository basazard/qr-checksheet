<table id="tableDryer" class="display" style="width:100%">
    <thead>
        <tr>
            @foreach ($theadsDryer as $thead)
            <td>{{ $thead }}</td>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($dryer as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>{{ $item->Humidity }}</td>
            <td>{{ $item->remarks1 }}</td>
            <td>{{ $item->BodyDryer }}</td>
            <td>{{ $item->remarks2 }}</td>
            <td>{{ $item->IndikatorFilterIn }}</td>
            <td>{{ $item->remarks3 }}</td>
            <td>{{ $item->IndikatorFilterOut }}</td>
            <td>{{ $item->remarks4 }}</td>
            <td>{{ $item->checker }}</td>
        </tr>
        @endforeach

    </tbody>
</table>