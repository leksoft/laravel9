@extends('layouts.frontend')
@section('title', 'รายการสินค้า')
@section('content')
    <br /> <br />
    <div class="row py-5 bg-light">
        <div class="col">
            {!! Form::open(['url' => 'foo/bar']) !!}
            {!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            {!! Form::close() !!}
            <hr />
            {!! link_to('products/create', $title = 'เพิ่มสินค้า', ['class' => 'btn btn-primary'], $secure = null) !!}
        </div>
    </div>


@endsection
