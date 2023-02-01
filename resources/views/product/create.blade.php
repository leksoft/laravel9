@extends('layouts.frontend')
@section('title', 'เพิ่มสินค้า')
@section('content')
    <br /> <br />
    <div class="row py-5 bg-light">
        <div class="col">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open(['route' => 'products.store', 'file' => true, 'method' => 'POST']) !!}
            <div class="col-auto">
                {!! Form::label('name', 'ชื่อสินค้า') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-auto">
                {!! Form::label('price', 'ราคาสินค้า') !!}
                {!! Form::number('price', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-auto">
                {!! Form::label('stock', 'จำนวนสต๊อกสินค้า') !!}
                {!! Form::number('stock', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-auto">
                {!! Form::label('detail', 'รายละเอียดสินค้า') !!}
                {!! Form::textarea('detail', null, ['class' => 'form-control', 'rows' => 3]) !!}
            </div>
            <div class="col-auto">
                {!! Form::label('image', 'รูปสินค้า', ['for' => 'formFileSm']) !!}
                {!! Form::file('image', null, ['class' => 'form-control', 'id' => 'formFileSm']) !!}
            </div><br />
            <div class="col-auto">
                {!! Form::submit('บันทึกสินค้า', ['class' => 'btn btn-success']) !!}
                {!! link_to('products', $title = 'ยกเลิก', ['class' => 'btn btn-danger'], $secure = null) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>

@endsection
