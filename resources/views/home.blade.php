@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        @foreach (array_keys($trains->first()->getAttributes()) as $attribute)
                            <th>{{ $attribute }}</th>
                        @endforeach
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            @foreach ($train->getAttributes() as $value)
                                <td>{{ $value }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
