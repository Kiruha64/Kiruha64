@include('basis.basis')
@yield('basis')
@yield('page_header')
Second Slider
@yield('end_page_header')
@yield('list_no_active_link')
{{ route('secondslider') }}
@yield('list_no_active')
Second Slider List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('secondslider-create') }}
@yield('list_active')
Create Second Slider
@yield('end_list_active')
@yield('start_code')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
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
                            <th>background</th>
                            <th>Img</th>
                            <th>Title</th>
                            <th>Link Title</th>
                            <th>Link</th>
                            <th>Text</th>
                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>


                            <th  colspan="3" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($secondsliders as $secondslider)
                            <tr class="odd gradeX">


                                <td><nobr>{{ $secondslider->id }}</nobr></td>
                                <td><nobr>{{ $secondslider->background }}</nobr></td>
                                <td><nobr>{{ $secondslider->img }}</nobr></td>
                                <td><nobr>{{ $secondslider->title }}</nobr></td>
                                <td><nobr>{{ $secondslider->link_title }}</nobr></td>
                                <td><nobr>{{ $secondslider->link }}</nobr></td>
                                <td><nobr>{{ $secondslider->text }}</nobr></td>
                                <td><nobr>{{ $secondslider->is_visible }}</nobr></td>
                                <td><nobr>{{ $secondslider->position }}</nobr></td>
                                <td><nobr>{{ $secondslider->created_at }}</nobr></td>
                                <td><nobr>{{ $secondslider->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-secondslider', $secondslider->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('show-one-secondslider', $secondslider->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td class="text-center"><a href="{{ route('delete-secondslider', $secondslider->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



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
