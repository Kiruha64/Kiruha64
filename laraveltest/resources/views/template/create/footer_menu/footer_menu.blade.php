@include('basis.basis')
@yield('basis')
@yield('page_header')
All Footer Menu
@yield('end_page_header')
@yield('list_no_active_link')
{{ route('footer_menu') }}
@yield('list_no_active')
Footer Menu List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('footer-menu-create') }}
@yield('list_active')
Create Footer Link
@yield('end_list_active')




@yield('start_code')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Your Menu Links
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="">
                            <th>Id</th>
                            <th>Link Title</th>
                            <th>Link</th>
                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>


                            <th colspan="3"class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($footermenus as $footermenu)
                            <tr class="odd gradeX">


                                <td><nobr>{{ $footermenu->id }}</nobr></td>
                                <td><nobr>{{ $footermenu->link_title }}</nobr></td>
                                <td><nobr>{{ $footermenu->link }}</nobr></td>
                                <td><nobr>{{ $footermenu->is_visible }}</nobr></td>
                                <td><nobr>{{ $footermenu->position }}</nobr></td>
                                <td><nobr>{{ $footermenu->created_at }}</nobr></td>
                                <td><nobr>{{ $footermenu->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-footer-menu', $footermenu->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('show-one-footer-menu', $footermenu->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td class="text-center"><a href="{{ route('delete-footer-menu', $footermenu->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



                        @endforeach



                        </tbody>
                    </table>

                <br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>


@yield('menu_toggle')
@yield('last_scripts')
