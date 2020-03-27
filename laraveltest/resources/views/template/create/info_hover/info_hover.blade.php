@include('basis.basis')
@yield('basis')
@yield('page_header')

@foreach($infohoverpagetitles as $infohoverpagetitle)
    <p>{{$infohoverpagetitle->title}}</p>
@endforeach

@yield('end_page_header')

@yield('list_no_active_link')
{{ route('infohoverpagetitle-create') }}
@yield('list_no_active')
Create Page Name
@yield('end_list_no_active')

@yield('list_no_active_link')
{{ route('infohover') }}
@yield('list_no_active')
Info Hover List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('infohover-create') }}
@yield('list_active')
Create Info Hover
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

                        @foreach($infohoverpagetitles as $infohoverpagetitle)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $infohoverpagetitle->id }}</nobr></td>
                                <td><nobr>{{ $infohoverpagetitle->title }}</nobr></td>

                                <td><nobr>{{ $infohoverpagetitle->is_visible }}</nobr></td>
                                <td><nobr>{{ $infohoverpagetitle->position }}</nobr></td>
                                <td><nobr>{{ $infohoverpagetitle->created_at }}</nobr></td>
                                <td><nobr>{{ $infohoverpagetitle->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-infohoverpagetitle', $infohoverpagetitle->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('delete-infohoverpagetitle', $infohoverpagetitle->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
                            <th>File</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Facebook Link</th>
                            <th>Twitter Link</th>
                            <th>Instagram Link</th>
                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>



                            <th colspan="3" class="text-center" >Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($infohovers as $infohover)
                            <tr class="odd gradeX">


                                <td><nobr>{{ $infohover->id }}</nobr></td>
                                <td><nobr>{{ $infohover->img }}</nobr></td>
                                <td><nobr>{{ $infohover->title }}</nobr></td>
                                <td><nobr>{{ $infohover->text }}</nobr></td>
                                <td><nobr>{{ $infohover->facebook_link }}</nobr></td>
                                <td><nobr>{{ $infohover->twitter_link }}</nobr></td>
                                <td><nobr>{{ $infohover->instagram_link }}</nobr></td>
                                <td><nobr>{{ $infohover->is_visible }}</nobr></td>
                                <td><nobr>{{ $infohover->position }}</nobr></td>
                                <td><nobr>{{ $infohover->created_at }}</nobr></td>
                                <td><nobr>{{ $infohover->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-infohover', $infohover->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('show-one-infohover', $infohover->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td class="text-center" ><a href="{{ route('delete-infohover', $infohover->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
