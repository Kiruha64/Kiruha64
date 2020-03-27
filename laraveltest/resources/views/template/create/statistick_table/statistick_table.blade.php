@include('basis.basis')
@yield('basis')
@yield('page_header')

@foreach($stattablepagetitles as $stattablepagetitle)
    <p>{{$stattablepagetitle->title}}</p>
@endforeach

@yield('end_page_header')

@yield('list_no_active_link')
{{ route('statistickpagetitle-create') }}
@yield('list_no_active')
Create Page Name
@yield('end_list_no_active')

@yield('list_no_active_link')
{{ route('statistick') }}
@yield('list_no_active')
Statistic List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('statistick-create') }}
@yield('list_active')
Create Statistic
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

                        @foreach($stattablepagetitles as $stattablepagetitle)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $stattablepagetitle->id }}</nobr></td>
                                <td><nobr>{{ $stattablepagetitle->title }}</nobr></td>

                                <td><nobr>{{ $stattablepagetitle->is_visible }}</nobr></td>
                                <td><nobr>{{ $stattablepagetitle->position }}</nobr></td>
                                <td><nobr>{{ $stattablepagetitle->created_at }}</nobr></td>
                                <td><nobr>{{ $stattablepagetitle->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-statistickpagetitle', $stattablepagetitle->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('delete-statistickpagetitle', $stattablepagetitle->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
{{--                    <table class="table table-striped table-bordered table-hover" id="dataTables-example"><th>Bgcolor</th>--}}
{{--                        @foreach($bgstats as $bgstat)<td>asdasd</td>@endforeach--}}
{{--                    </table>--}}
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                        <tr class="">
                            <th >Id</th>
                            <th>File</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>



                            <th colspan="3" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($statisticks as $statistick)
                            <tr class="odd gradeX">


                                <td><nobr>{{ $statistick->id }}</nobr></td>
                                <td><nobr>{{ $statistick->img }}</nobr></td>
                                <td><nobr>{{ $statistick->title }}</nobr></td>
                                <td><nobr>{{ $statistick->text }}</nobr></td>
                                <td><nobr>{{ $statistick->is_visible }}</nobr></td>
                                <td><nobr>{{ $statistick->position }}</nobr></td>
                                <td><nobr>{{ $statistick->created_at }}</nobr></td>
                                <td><nobr>{{ $statistick->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-statistick', $statistick->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('show-one-statistick', $statistick->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td class="text-center"><a href="{{ route('delete-statistick', $statistick->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
