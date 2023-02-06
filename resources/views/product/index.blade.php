@extends('layouts.frontend')
@section('title', 'รายการสินค้าทั้งหมด')
@section('content')
    <section class="py-5 container">
        <div class="row">
            <div class="col-lg-12  mx-auto">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ภาพสินค้า</th>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col" colspan="2">จัดการ</th>
                        </tr>
                    </thead>
                    @foreach ($products as $product)
                        <tbody>
                            <tr>
                                <th scope="col">{{ $product->id }}</th>
                                <th scope="col"><img src="{{ asset('uploads/resize/' . $product->image) }}"
                                        width="50px" /></th>
                                <td scope="col">{{ $product->name }}</td>
                                <td scope="col" style="width: 50%">{{ $product->price }}</td>
                                <td scope="col">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-info btn-sm">แก้ไข</a>

                                    {{-- <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('ยืนยันการลบหรือไม่')">ลบ
                                    </a> --}}
                                </td>
                                <td scope="col">
                                    {!! Form::open([
                                        'route' => ['products.destroy', $product->id],
                                        'method' => 'DELETE',
                                    ]) !!}
                                    {!! Form::submit('ลบข้อมูล', [
                                        'class' => 'btn btn-danger btn-sm',
                                        'onclick' => "return confirm('ยืนยันการลบหรือไม่')",
                                    ]) !!}

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </section>
@endsection
