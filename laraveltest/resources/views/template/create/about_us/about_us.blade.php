﻿@include('basis.basis')
@yield('basis')
@yield('page_header')

@foreach($aboutuspagetitles as $aboutuspagetitle)
    <p>{{$aboutuspagetitle->title}}</p>
@endforeach

@yield('end_page_header')

@yield('list_no_active_link')
{{ route('about_uspagetitle-create') }}
@yield('list_no_active')
Create Page Name
@yield('end_list_no_active')

@yield('list_no_active_link')
{{ route('about_us') }}
@yield('list_no_active')
About Us List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('about_us-create') }}
@yield('list_active')
Create About Us
@yield('end_list_active')
@yield('start_code')
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                Page Name
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="">
                            <th >Id</th>
                            <th >Title</th>

                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>



                            <th class="text-center" colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($aboutuspagetitles as $sliderpagetitle)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $sliderpagetitle->id }}</nobr></td>
                                <td><nobr>{{ $sliderpagetitle->title }}</nobr></td>

                                <td><nobr>{{ $sliderpagetitle->is_visible }}</nobr></td>
                                <td><nobr>{{ $sliderpagetitle->position }}</nobr></td>
                                <td><nobr>{{ $sliderpagetitle->created_at }}</nobr></td>
                                <td><nobr>{{ $sliderpagetitle->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-about_uspagetitle', $sliderpagetitle->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('delete-about_uspagetitle', $sliderpagetitle->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>


        <div class="panel panel-default">
            <div class="panel-heading">
                Advanced Tables
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="">
                            <th>Id</th>

                            <th>Text</th>
                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>

                            <th colspan="3" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($aboutuses as $aboutus)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $aboutus->id }}</nobr></td>

                                <td><nobr>{{ $aboutus->text }}</nobr></td>
                                <td><nobr>{{ $aboutus->is_visible }}</nobr></td>
                                <td><nobr>{{ $aboutus->position }}</nobr></td>
                                <td><nobr>{{ $aboutus->created_at }}</nobr></td>
                                <td><nobr>{{ $aboutus->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-about_us', $aboutus->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('show-one-about_us', $aboutus->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td class="text-center"><a href="{{ route('delete-about_us', $aboutus->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



                        @endforeach

                        {{--                                @foreach($menus as $imag)--}}

                        {{--                                    <img src="{{ asset('storage/'.$imag->img) }}">--}}

                        {{--                        @endforeach--}}

                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </div>
</div>

@yield('menu_toggle')
@yield('last_scripts')
