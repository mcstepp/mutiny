@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Characters'
    ]
    ]])

    <div class="container-fluid my-3">

        <div class="row">
            <dl>
                @foreach($characters as $character)
                    <dt>
                        <a class="text-{{ strtolower($character->faction->name)}}" href="{{ $character->path() }}"><i class="fas fa-{{ $character->faction->icon }}"></i> {{ $character->username }}</a>, Class of {{ $character->initiation_year }}, age {{ $character->age }}
                    </dt>
                    <dd>
                        {{ \Carbon\Carbon::createFromDate(null, $character->ic_birth_month, $character->ic_birth_day)->format('F j') }} YR {{ $character->ic_birth_year }} <br>
    Face claim: {{ $character->faceclaim }}

                    </dd>
                @endforeach
            </dl>
        </div>
    </div>

@endsection