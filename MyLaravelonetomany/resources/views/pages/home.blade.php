    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Employees:</h1>
                    <ul>
                        @foreach($employees as $employee)
                            <li>
                                <b><u>
                                      {{ $employee -> firstname }}
                                      {{ $employee -> lastname }}
                                </b></u>
                            <ul>
                                @foreach($employee -> tasks as $task)
                                    <li>
                                        {{ $task -> title }}
                                    </li>
                                @endforeach
                            </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endsection
