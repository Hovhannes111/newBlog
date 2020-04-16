@extends('backend.layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="offset-md-2 col-md-10">
                <div class="card">
                    <div class="card-header">Add a menu<br>
                        <i class="fas fa-question-circle text-blue all"> {{Lang::get('messages.required')}}</i>
                    </div>
                    @include('backend.partials.status_bar')
                    <form method="post" action="{{action('Backend\PageController@update', $page['id'])}}"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="card-body card_body">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Մենյու * </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="status" name="menu_id">
                                            <option value="0">Select a menu</option>
                                            @foreach($menus as $menu)
                                                @php
                                                    $menu_title = json_decode($menu['name'], true);
                                                @endphp
                                                <option value="{{ $menu['id'] }}">
                                                    {{ $menu_title['en'] ." / ". $menu_title['hy']." / ". $menu_title['ru']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
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
                                                <label for="name_en" class="col-md-2 col-form-label">Title* </label>
                                                <div class="col-md-8">
                                                    <input id="name_en" type="text" name="title[en]"
                                                           class="form-control"
                                                           value="{{ $title_en }}"
                                                           required/>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="content_en" class="col-md-2 col-form-label">Content </label>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <textarea class="textarea form-control summernote"
                                                                  id="content_en"
                                                                  name="content[en]" placeholder="Place some text here"
                                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">{{ $content_en }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-hy" role="tabpanel"
                                             aria-labelledby="custom-tabs-three-hy-tab">
                                            <div class="form-group row">
                                                <label for="keyword_hy"
                                                       class="col-md-2 col-form-label">Վերնագիր* </label>
                                                <div class="col-md-8">
                                                    <input id="keyword_hy" type="text" name="title[hy]"
                                                           class="form-control"
                                                           value="{{ $title_hy }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="content_hy"
                                                       class="col-md-2 col-form-label">Բովանդակ․</label>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <textarea class="textarea form-control summernote"
                                                                  id="content_hy"
                                                                  name="content[hy]" placeholder="Place some text here"
                                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">{{ $content_hy }}</textarea>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-ru" role="tabpanel"
                                             aria-labelledby="custom-tabs-three-ru-tab">
                                            <div class="form-group row">
                                                <label for="keyword_ru"
                                                       class="col-md-2 col-form-label">Загаловок* </label>
                                                <div class="col-md-8">
                                                    <input id="keyword_ru" type="text" name="title[ru]"
                                                           class="form-control"
                                                           value="{{ $title_ru }}">

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="content_ru"
                                                       class="col-md-2 col-form-label">Описание</label>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <textarea class="textarea form-control summernote"
                                                                  id="content_ru"
                                                                  name="content[ru]" placeholder="Place some text here"
                                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">{{ $content_ru }}</textarea>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label for="images[]"
                                           class="col-md-2 col-form-label">Изображение</label>
                                    <div class="col-md-8">

                                        <div class="file-field">
                                            <div class="btn btn-primary btn-sm float-left">
                                                <span>Choose file</span>
                                                <input multiple="multiple" id="images[]" type="file"
                                                       name="images[]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($page->images))
                                <div id="append" style="display: flex;flex-wrap: wrap; border: 1px solid #777777">
                                    @foreach($images as  $value)
                                        <div style='padding: 10px'>
                                            <img src='{{asset('my_images/'. $value)}}' alt='#' width='100px' height='100px'
                                                 class='rm'>
                                            <button class='remove rm btn btn-danger btn-del-img'
                                                    style='position: absolute; margin-left: -36px'>X
                                            </button>
                                            <input type="hidden" id="image" value="{{$value}}" name="images[]">
                                        </div>
                                    @endforeach
                                </div>
                            @endif

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

