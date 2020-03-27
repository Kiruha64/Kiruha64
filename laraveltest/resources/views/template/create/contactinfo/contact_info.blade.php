@include('basis.basis')
@yield('basis')
@yield('page_header')
Contact Info
@yield('end_page_header')
@yield('list_no_active_link')
{{ route('contactinfo') }}
@yield('list_no_active')
Contact Info List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('contactinfo-create') }}
@yield('list_active')

Create Contact Info

@yield('list_active_link')
{{ route('contactinfo-create-city') }}
@yield('list_active')

Create Contact Info city

@yield('end_list_active')
@yield('start_code')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Your Info
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


                            <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contactinfos as $contactinfo)
                            <tr class="odd gradeX">


                                <td><nobr>{{ $contactinfo->id }}</nobr></td>
                                <td><nobr>{{ $contactinfo->text }}</nobr></td>
                                <td><nobr>{{ $contactinfo->is_visible }}</nobr></td>
                                <td><nobr>{{ $contactinfo->position }}</nobr></td>
                                <td><nobr>{{ $contactinfo->created_at }}</nobr></td>
                                <td><nobr>{{ $contactinfo->updated_at }}</nobr></td>






                                <td><a href="{{ route('update-contactinfo', $contactinfo->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td><a href="{{ route('show-one-contactinfo', $contactinfo->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td><a href="{{ route('delete-contactinfo', $contactinfo->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



                        @endforeach

                        {{--                                @foreach($menus as $imag)--}}

                        {{--                                    <img src="{{ asset('storage/'.$imag->img) }}">--}}

                        {{--                        @endforeach--}}

                        </tbody>
                    </table>

                <br><br><br>



                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Your City
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


                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                            @foreach($contactinfocities as $contactinfocity)
                                <tr class="odd gradeX">


                                    <td><nobr>{{ $contactinfocity->id }}</nobr></td>
                                    <td><nobr>{{ $contactinfocity->text }}</nobr></td>
                                    <td><nobr>{{ $contactinfocity->is_visible }}</nobr></td>
                                    <td><nobr>{{ $contactinfocity->position }}</nobr></td>
                                    <td><nobr>{{ $contactinfocity->created_at }}</nobr></td>
                                    <td><nobr>{{ $contactinfocity->updated_at }}</nobr></td>






                                    <td><a href="{{ route('update-contactinfo-city', $contactinfocity->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                    <td><a href="{{ route('show-one-contactinfo-city', $contactinfocity->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                    <td><a href="{{ route('delete-contactinfo-city', $contactinfocity->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
</div>

@yield('menu_toggle')
@yield('last_scripts')
