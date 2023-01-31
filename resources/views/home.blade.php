@extends('layouts.frontend')
@section('title', 'ยินดีต้อนรับ')
@section('css_before')
@endsection

@section('content')
    <section class="py-5  container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                @php
                    $user = 1;
                @endphp
                @switch($user)
                    @case(1)
                        Admin Page...
                    @break

                    @case(2)
                        Staff Page...
                    @break

                    @default
                        Default case...
                @endswitch
            </div>
        </div>
    </section>
@endsection
@section('js_before')
@endsection
