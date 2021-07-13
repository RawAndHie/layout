@extends('layout.master')
@section('content')
    <div >
        <table class="table table-light pl-4 float-lg-none">
            <thead>
            <tr class="row col-md-12 col-sm-12 col-lg-12">
                <th class="col-xsm-1" style="width: 3%"></th>
                <th class="col-xsm-1 ">ID</th>
                <th class="col-md-1 col-sm-1  text-center" style="width: 5%">Name</th>
                <th class="col-md-1 col-sm-1">Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr class="row col-lg-12 col-md-12 col-sm-12" id="row-item-{{$item->product_id}}">
                    <td class="col-xsm-1 text-center" style="width: 3%">
                        <input type="checkbox" class="check-item">
                    </td>
                    <th class="col-xsm-1 ">{{$item->product_id}}</th>
                    <th class="col-md-1 col-sm-1  text-center" style="width: 5%">{{$item->name}}</th>
                    <th class="col-md-1 col-sm-1">{{$item->price}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('pagination.default', ['paginator' => $list])
@endsection
