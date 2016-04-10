 @extends('layouts.app')

@section('content')
    @if (count($clients) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
             Clients List
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <th>Clients</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td class="table-text"><div>{{ $client->email }}</div></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection