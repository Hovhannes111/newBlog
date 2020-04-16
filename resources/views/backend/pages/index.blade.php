@extends('backend.layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="offset-md-2 col-md-10">
                <div class="card">

                    <div class="card-header">Pages list
                        <a href="{{ url('/backend/pages/create') }}"
                           class="display float-lg-right btn-primary btn">Add a page</a>
                    </div>
                    @include('backend.partials.status_bar')
                    <div class="card-body ">
                        @if(!empty($pages))
                            <div class="card">
                                <h5 class="card-header">Pages list</h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Menu_id</th>
                                                <th class="border-0">Title</th>
                                                <th class="border-0">Content</th>
                                                <th class="border-0">Images</th>
                                                <th class="border-0">Edit</th>
                                                <th class="border-0">Show</th>
                                                <th class="border-0">Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($pages as $page)
                                                <tr style="border: 1px solid #777777">
                                                    <td>{{ $page['id'] }}</td>
                                                    <td>{{ $page['menu_id'] }}</td>
                                                    <td>{{ $page['title'] }}</td>
                                                    <td>{{ $page['content'] }}</td>
                                                    <td>{{ $page['images'] }}</td>
                                                    <td>
                                                        <a href="{{action('Backend\PageController@edit', ['id'=>$page['id']])}}">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{action('Backend\PageController@show', ['id'=>$page['id']])}}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{action('Backend\PageController@destroy', ['id'=>$page['id']])}}"
                                                              method="post" class="d-inline-flex">
                                                            @csrf
                                                                @method('DELETE')
                                                            <input name="_id" type="hidden" value="{{$page['id']}}">
                                                            <button class="btn-link delete" type="button"
                                                                    data-title="{{$page['id']}}">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
{{--                                                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>--}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        @else
                            <p>Can't find data</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
