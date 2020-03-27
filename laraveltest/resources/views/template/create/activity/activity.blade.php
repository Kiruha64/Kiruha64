@include('basis.basis')
@yield('basis')
@yield('page_header')

@foreach($activitypagetitles as $aboutuspagetitle)
    <p>{{$aboutuspagetitle->title}}</p>
@endforeach

@yield('end_page_header')

@yield('list_no_active_link')
{{ route('activitypagetitle-create') }}
@yield('list_no_active')
Create Page Name
@yield('end_list_no_active')

@yield('list_no_active_link')
{{ route('activity') }}
@yield('list_no_active')
Activity List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('activity-create') }}
@yield('list_active')
Create Activity
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

                        @foreach($activitypagetitles as $activitypagetitle)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $activitypagetitle->id }}</nobr></td>
                                <td><nobr>{{ $activitypagetitle->title }}</nobr></td>

                                <td><nobr>{{ $activitypagetitle->is_visible }}</nobr></td>
                                <td><nobr>{{ $activitypagetitle->position }}</nobr></td>
                                <td><nobr>{{ $activitypagetitle->created_at }}</nobr></td>
                                <td><nobr>{{ $activitypagetitle->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-activitypagetitle', $activitypagetitle->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('delete-activitypagetitle', $activitypagetitle->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
                            <th >Id</th>
                            <th>Text</th>
                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>



                            <th colspan="3" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($activities as $activity)
                            <tr class="odd gradeX">


                                <td><nobr>{{ $activity->id }}</nobr></td>

                                <td><nobr>{{ $activity->text }}</nobr></td>
                                <td><nobr>{{ $activity->is_visible }}</nobr></td>
                                <td><nobr>{{ $activity->position }}</nobr></td>
                                <td><nobr>{{ $activity->created_at }}</nobr></td>
                                <td><nobr>{{ $activity->updated_at }}</nobr></td>






                                <td><a href="{{ route('update-activity', $activity->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td><a href="{{ route('show-one-activity', $activity->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td><a href="{{ route('delete-activity', $activity->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
