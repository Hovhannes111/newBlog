@extends('backend.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="offset-md-2 col-md-10">
                <div class="card">
                    <div class="card-header">Edit the menu<br>
                        <i class="fas fa-question-circle text-blue all"> {{Lang::get('messages.required')}}</i>
                    </div>
                    @include('backend.partials.status_bar')
                    <form method="post" action="{{action('Backend\MenuController@update', $menu['id'])}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="card-body card_body">
                            <div class="card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-three-en-tab" data-toggle="pill"
                                               href="#custom-tabs-three-en" role="tab"
                                               aria-controls="custom-tabs-three-en"
                                               aria-selected="true">{{Lang::get('messages.en')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-three-hy-tab" data-toggle="pill"
                                               href="#custom-tabs-three-hy" role="tab"
                                               aria-controls="custom-tabs-three-hy"
                                               aria-selected="false">{{Lang::get('messages.hy')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-three-ru-tab" data-toggle="pill"
                                               href="#custom-tabs-three-ru" role="tab"
                                               aria-controls="custom-tabs-three-ru"
                                               aria-selected="false">{{Lang::get('messages.ru')}}</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-three-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-three-en" role="tabpanel"
                                             aria-labelledby="custom-tabs-three-en-tab">
                                            <div class="form-group row">
                                                @php
                                                    $name = json_decode($menu['name'], true);
                                                @endphp
                                                <label for="name_en" class="col-md-2 col-form-label">Name * </label>
                                                <div class="col-md-8">
                                                    <input id="name_en" type="text" name="name[en]"
                                                           class="form-control"
                                                           value="@if(!old('name.en')){{$name['en']}}@else{{old('name.en')}}@endif">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keyword_en" class="col-md-2 col-form-label">Keyword </label>
                                                <div class="col-md-8">
                                                    @php
                                                        $keyword = json_decode($menu['keyword'], true);
                                                    @endphp
                                                    <input id="keyword_en" type="text" name="keyword[en]"
                                                           class="form-control"
                                                           value="@if(!empty($keyword['en'])) {{$keyword['en']}} @endif @if(!old('keyword.en')) {{old('keyword.en')}} @endif">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description_en"
                                                       class="col-md-2 col-form-label">Description</label>
                                                <div class="col-md-8">
                                                    @php
                                                        $description = json_decode($menu['description'], true);
                                                    @endphp
                                                    <input id="description_en" type="text" name="description[en]"
                                                           class="form-control"
                                                           value="@if(!empty($description['en'])){{$description['en']}}@endif
                                                           @if(!old('description.en')){{old('description.en')}}@endif">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-hy" role="tabpanel"
                                             aria-labelledby="custom-tabs-three-hy-tab">
                                            <div class="form-group row">
                                                <label for="name_hy" class="col-md-2 col-form-label">Անուն* </label>
                                                <div class="col-md-8">
                                                    <input id="name_hy" type="text" name="name[hy]"
                                                           class="form-control"
                                                           value="@if(!old('name.hy')){{$name['hy']}}@else{{old('name.hy')}}@endif">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keyword_hy"
                                                       class="col-md-2 col-form-label">Հիմնաբառեր</label>
                                                <div class="col-md-8">
                                                    <input id="keyword_hy" type="text" name="keyword[hy]"
                                                           class="form-control"
                                                           value="@if(!empty($keyword['hy'])){{$keyword['hy']}} @endif @if(!old('keyword.hy')){{old('keyword.hy')}} @endif">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description_hy"
                                                       class="col-md-2 col-form-label">Նկարագրություն</label>
                                                <div class="col-md-8">
                                                    <input id="description_hy" type="text" name="description[hy]"
                                                           class="form-control"
                                                           value="@if(!empty($description['hy'])) {{$description['hy']}} @endif @if(!old('description.hy')) {{old('description.hy')}} @endif">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-ru" role="tabpanel"
                                             aria-labelledby="custom-tabs-three-ru-tab">
                                            <div class="form-group row">
                                                <label for="name_ru" class="col-md-2 col-form-label">имя* </label>
                                                <div class="col-md-8">
                                                    <input id="name_ru" type="text" name="name[ru]"
                                                           class="form-control"
                                                           value="@if(!old('name.ru')){{$name['ru']}}@else {{old('name.ru')}}@endif">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keyword_ru" class="col-md-2 col-form-label">Ключевые
                                                    слова </label>
                                                <div class="col-md-8">
                                                    <input id="keyword_ru" type="text" name="keyword[ru]"
                                                           class="form-control"
                                                           value="@if(!empty($keyword['ru'])){{$keyword['ru']}}@endif
                                                           @if(!old('keyword.ru')){{old('keyword.ru')}}@endif">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description_ru"
                                                       class="col-md-2 col-form-label">Описание</label>
                                                <div class="col-md-8">
                                                    <input id="description_ru" type="text" name="description[ru]"
                                                           class="form-control"
                                                           value="@if(!empty($description['ru'])){{$description['ru']}}@endif
                                                           @if(!old('description.ru'))
                                                           {{old('description.ru')}}
                                                           @endif"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label for="link" class="col-sm-2 col-form-label">Link * </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                               id="link" name="link"
                                               value="@if(!empty($menu['link'])){{$menu['link']}} @else{{old('link')}}@endif">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status * </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="status" name="active">
                                            <option value="">Please select status</option>
                                            <option value="1" @if($menu['active'] == 1){{'selected'}}@endif>Active
                                            </option>
                                            <option value="0" @if($menu['active'] == 0){{'selected'}}@endif>Passive
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-default float-right">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

