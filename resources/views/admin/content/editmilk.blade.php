@extends('layouts.dashbord')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href=""> المحتويات </a>
                            </li>
                            <li class="breadcrumb-item active">تعديل محتويات الالبان
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> تعديل محتوي </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            {{-- @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors') --}}

                            @if(Session::has('successed'))
                        <div class="alert alert-success text-center" role="alert">
                             {{Session::get('successed')}}
                             </div>
                                @endif
                                            </br>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{route('milk.update',$milk->id)}}" method="POST"
                                          enctype="multipart/form-data">
@csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i>  محتوي الالبان </h4>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2"> الصنف </label>
                                                        <select name="catogre" class="select2 form-control">
                                                            <optgroup label="من فضلك أختر الصنف  ">
                                                                <option value="chess" @if($milk->catogre == "chess") selected @endif> جبنة</option>
                                                                <option value="fatness" @if($milk->catogre == "fatness") selected @endif> سمنة</option>
                                                                <option value="butter" @if($milk->catogre == "butter") selected @endif> زبدة</option>

                                                            </optgroup>
                                                        </select>
                                                        <span class="text-danger"> </span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  ادخل النص </label>
                                                        <textarea class="form-control" id="story" name="story"
                                                rows="5" cols="33">
                                                {{$milk->description}}

                                        </textarea>
                         <span class="text-danger"> </span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div id="upload-button" class="button">اختر الفديو  المناسب </div>
                                                            <div id="upload-input">
                                                                <input id="video_file" name="video_file" type="file" >
                                                            </div>
                                                        <span class="text-danger"> </span>
                                                    </div>
                                                </div>

                                            </div>

                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>


@endsection
