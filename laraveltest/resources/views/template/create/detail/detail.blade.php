@include('basis.basis')
@yield('basis')
@yield('page_header')

@foreach($detailpagetitle as $detailpagetitl)
    <p>{{$detailpagetitl->title}}</p>
@endforeach

@yield('end_page_header')

@yield('list_no_active_link')
{{ route('detailpagetitle-create') }}
@yield('list_no_active')
Create Page Name
@yield('end_list_no_active')

@yield('list_no_active_link')
{{ route('detail') }}
@yield('list_no_active')
Detail List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('detail-create') }}
@yield('list_active')
Create Detail
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

                        @foreach($detailpagetitle as $detailpagetitl)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $detailpagetitl->id }}</nobr></td>
                                <td><nobr>{{ $detailpagetitl->title }}</nobr></td>

                                <td><nobr>{{ $detailpagetitl->is_visible }}</nobr></td>
                                <td><nobr>{{ $detailpagetitl->position }}</nobr></td>
                                <td><nobr>{{ $detailpagetitl->created_at }}</nobr></td>
                                <td><nobr>{{ $detailpagetitl->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-detailpagetitle', $detailpagetitl->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('delete-detailpagetitle', $detailpagetitl->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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



                            <th class="text-center" colspan="3">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($details as $detail)
                            <tr class="odd gradeX">


                                <td><nobr>{{ $detail->id }}</nobr></td>

                                <td><nobr>{{ $detail->text }}</nobr></td>
                                <td><nobr>{{ $detail->is_visible }}</nobr></td>
                                <td><nobr>{{ $detail->position }}</nobr></td>
                                <td><nobr>{{ $detail->created_at }}</nobr></td>
                                <td><nobr>{{ $detail->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-detail', $detail->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('show-one-detail', $detail->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td class="text-center"><a href="{{ route('delete-detail', $detail->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
