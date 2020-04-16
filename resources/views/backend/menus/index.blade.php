@extends('backend.layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="offset-md-2 col-md-10">
                <div class="card">

                    <div class="card-header">Menu list
                        <a href="{{action('Backend\MenuController@create')}}"
                           class="display float-lg-right btn-primary btn">Add a menu</a>
                    </div>
                    @include('backend.partials.status_bar')
                    <div class="card-body ">

                        @if(!empty($menus))
                            <table class="table table-responsive-md table-sm table-bordered display"
                                   id="example">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Keyword</th>
                                    <th>Description</th>
                                    <th>State</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $key=>$menu)

                                    <tr>
                                        <td></td>
                                        @if(!empty($menu['name']))
                                            @php
                                                $name  = json_decode($menu['name'], true);
                                            @endphp
                                            <td data-order="@if(!empty($name['en'])){{$name['en']}}@endif"
                                                data-search="@if(!empty($name['en'])){{$name['en']}}@endif"
                                                class="name_field">
                                                @if(!empty($name['en']))
                                                    <div class="form-control">{{$name['en']}}</div>
                                                @endif
                                            </td>
                                        @endif
                                        <td data-order="@if(!empty($menu['link'])){{$menu['link']}} @endif"
                                            data-search="@if(!empty($menu['link'])){{$menu['link']}} @endif"
                                            class="link_field">
                                            @if(!empty($menu['link']))
                                                <div class="form-control">{{$menu['link']}}</div>
                                            @endif
                                        </td>
                                        @php
                                            if(!empty($menu['keyword']))
                                                $keyword  = json_decode($menu['keyword'], true);
                                        @endphp
                                        @if(!empty($keyword))
                                            <td data-order="@if(!empty($keyword['en'])){{$keyword['en']}}@else {{$keyword['en']}}@endif"
                                                data-search="@if(!empty($keyword['en'])){{$keyword['en']}}@else {{$keyword['en']}}@endif"
                                                class="keyword_field">
                                                <div class="form-control">
                                                    @if(!empty($keyword['en'])){{$keyword['en']}}@else {{$keyword['en']}}@endif
                                                </div>
                                            </td>
                                        @endif
                                        @php
                                            $description = json_decode($menu['description'], true);
                                        @endphp
                                        @if(!empty($description))
                                            <td data-order="@if(!empty($description['en'])){{$description['en']}}@else {{$description['en']}}@endif"
                                                data-search="@if(!empty($description['en'])){{$description['en']}}@else {{$description['en']}}@endif"
                                                class="description_field">
                                                <div class="form-control">
                                                    @if(!empty($keyword['en'])){{$description['en']}}@else {{$description['en']}}@endif
                                                </div>
                                            </td>
                                        @endif
                                        <td data-order="@if(!empty($menu['active'])){{$menu['active']}}@else {{$menu['active']}}@endif"
                                            data-search="@if(!empty($menu['active'])){{$menu['active']}}@else {{$menu['active']}}@endif"
                                            class="active_field">
                                            @php
                                                $status = ($menu['active'] == 1)?'active':'passive';
                                            @endphp
                                            <div class="form-control">
                                                {{$status}}
                                            </div>
                                        <td>
                                            <a href="{{action('Backend\MenuController@edit', ['id'=>$menu['id']])}}"
                                               title="Edit"
                                               class="edit btn-link btn d-inline-flex">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>

                                            <form action="{{action('Backend\MenuController@destroy', ['id'=>$menu['id']])}}"
                                                  method="post" class="d-inline-flex">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <input name="_id" type="hidden" value="{{$menu['id']}}">
                                                <button class="btn-link delete" type="button"
                                                        data-title="{{$menu['id']}}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Can't find data</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function () {
            var t = $('#example').DataTable({
                "pagingType": "full_numbers",

            });
            t.on('order.dt search.dt', function () {
                t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        });

    </script>

@endsection
