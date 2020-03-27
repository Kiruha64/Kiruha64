@include('basis.basis')
@yield('basis')
@yield('page_header')

Blocks

@yield('end_page_header')

@yield('list_no_active_link')
{{-- LInk to--}}{{ route('blocks') }}
@yield('list_no_active')
{{-- Name --}}All Blocks
@yield('end_list_no_active')

@yield('list_active_link')
{{-- LInk to--}}{{ route('blocks-create') }}
@yield('list_active')
{{-- Name --}}Create new Blocks
@yield('end_list_active')


@yield('start_code')
{{-- Your code--}}

<div class="panel panel-default">
    <div class="panel-heading">
        Images
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr class="">
                    <th>Id</th>
                    <th>Page_id</th>
                    <th>Img</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Short_description</th>
                    <th>Link_title</th>
                    <th>Link</th>
                    <th>Position</th>
                    <th>Is_visible</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
{{--                    <th>Position</th>--}}




                    <th class="text-center" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($blocks as $block)
                    <tr class="odd gradeX">
                        <td><nobr>{{ $block->id }}</nobr></td>
                        <td><nobr>{{ $block->page_id }}</nobr></td>
                        <td><nobr>{{ $block->img }}</nobr></td>
                        <td><nobr>{{ $block->title }}</nobr></td>
                        <td><nobr>{{ $block->description }}</nobr></td>
                        <td><nobr>{{ $block->short_description }}</nobr></td>
                        <td><nobr>{{ $block->link_title }}</nobr></td>
                        <td><nobr>{{ $block->link }}</nobr></td>
                        <td><nobr>{{ $block->position }}</nobr></td>
                        <td><nobr>{{ $block->is_visible }}</nobr></td>
                        <td><nobr>{{ $block->created_at }}</nobr></td>
                        <td><nobr>{{ $block->updated_at }}</nobr></td>






                        <td class="text-center"><a href="{{ route('update-blocks', $block->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                        <td class="text-center"><a href="{{ route('delete-blocks', $block->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



                @endforeach



                </tbody>
            </table>
        </div>

    </div>
</div>




{{--                        <div class="panel panel-default">--}}
{{--                            <div class="panel-heading">--}}
{{--                               Tooglers--}}
{{--                            </div>--}}
{{--                            <div class="panel-body">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">--}}
{{--                                        <thead>--}}
{{--                                        <tr class="">--}}
{{--                                            <th >Id</th>--}}
{{--                                            <th >Alias</th>--}}
{{--                                            <th >Name</th>--}}
{{--                                            <th>Is_active</th>--}}
{{--                                            <th >Created at</th>--}}
{{--                                            <th>updated at</th>--}}
{{--                                            <th>deleted at</th>--}}
{{--                                            <th>Position</th>--}}




{{--                                            <th class="text-center" colspan="3">Action</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}

{{--                                        @foreach($file_type as $file_typev)--}}
{{--                                            <tr class="odd gradeX">--}}
{{--                                                <td><nobr>{{ $file_typev->id }}</nobr></td>--}}
{{--                                                <td><nobr>{{ $file_typev->alias }}</nobr></td>--}}
{{--                                                <td><nobr>{{ $file_typev->name }}</nobr></td>--}}
{{--                                                <td><nobr>{{ $file_typev->is_active }}</nobr></td>--}}
{{--                                                <td><nobr>{{ $file_typev->created_at }}</nobr></td>--}}
{{--                                                <td><nobr>{{ $file_typev->updated_at }}</nobr></td>--}}
{{--                                                <td><nobr>{{ $file_typev->deleted_at }}</nobr></td>--}}
{{--                                                <td><nobr>{{ $file_typev->position }}</nobr></td>--}}







{{--                                                <td class="text-center"><a href="{{ route('update-portfolio', $file_typev->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>--}}
{{--                                                <td class="text-center"><a href="{{ route('show-one-portfolio', $file_typev->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>--}}
{{--                                                <td class="text-center"><a href="{{ route('delete-portfolio', $file_typev->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>--}}



{{--                                        @endforeach--}}



{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}







{{--<br>--}}

{{--<div class="form-group">--}}
{{--    <label>Type </label>--}}
{{--    <select class="selectpicker" data-live-search="true" name="type_id" >--}}
{{--        @foreach($file_type as $value)--}}
{{--        <option value="{{ $value->id }}">{{ $value->alias }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--</div>--}}

            @yield('menu_toggle')
            @yield('last_scripts')












                <!-- /. ROW  -->
    <!--            <div class="row">-->
    <!--                <div class="col-md-6">-->
    <!--                  &lt;!&ndash;   Kitchen Sink &ndash;&gt;-->
    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading">-->
    <!--                            Kitchen Sink-->
    <!--                        </div>-->
    <!--                        <div class="panel-body">-->
    <!--                            <div class="table-responsive">-->
    <!--                                <table class="table table-striped table-bordered table-hover">-->
    <!--                                    <thead>-->
    <!--                                        <tr>-->
    <!--                                            <th>#</th>-->
    <!--                                            <th>First Name</th>-->
    <!--                                            <th>Last Name</th>-->
    <!--                                            <th>Username</th>-->
    <!--                                        </tr>-->
    <!--                                    </thead>-->
    <!--                                    <tbody>-->
    <!--                                        <tr>-->
    <!--                                            <td>1</td>-->
    <!--                                            <td>Mark</td>-->
    <!--                                            <td>Otto</td>-->
    <!--                                            <td>@mdo</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>2</td>-->
    <!--                                            <td>Jacob</td>-->
    <!--                                            <td>Thornton</td>-->
    <!--                                            <td>@fat</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>3</td>-->
    <!--                                            <td>Larry</td>-->
    <!--                                            <td>the Bird</td>-->
    <!--                                            <td>@twitter</td>-->
    <!--                                        </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                     &lt;!&ndash; End  Kitchen Sink &ndash;&gt;-->
    <!--                </div>-->
    <!--                <div class="col-md-6">-->
    <!--                     &lt;!&ndash;   Basic Table  &ndash;&gt;-->
    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading">-->
    <!--                            Basic Table-->
    <!--                        </div>-->
    <!--                        <div class="panel-body">-->
    <!--                            <div class="table-responsive">-->
    <!--                                <table class="table">-->
    <!--                                    <thead>-->
    <!--                                        <tr>-->
    <!--                                            <th>#</th>-->
    <!--                                            <th>First Name</th>-->
    <!--                                            <th>Last Name</th>-->
    <!--                                            <th>Username</th>-->
    <!--                                        </tr>-->
    <!--                                    </thead>-->
    <!--                                    <tbody>-->
    <!--                                        <tr>-->
    <!--                                            <td>1</td>-->
    <!--                                            <td>Mark</td>-->
    <!--                                            <td>Otto</td>-->
    <!--                                            <td>@mdo</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>2</td>-->
    <!--                                            <td>Jacob</td>-->
    <!--                                            <td>Thornton</td>-->
    <!--                                            <td>@fat</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>3</td>-->
    <!--                                            <td>Larry</td>-->
    <!--                                            <td>the Bird</td>-->
    <!--                                            <td>@twitter</td>-->
    <!--                                        </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                      &lt;!&ndash; End  Basic Table  &ndash;&gt;-->
    <!--                </div>-->
    <!--            </div>-->
    <!--                &lt;!&ndash; /. ROW  &ndash;&gt;-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-6">-->
    <!--                      &lt;!&ndash;    Striped Rows Table  &ndash;&gt;-->
    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading">-->
    <!--                            Striped Rows Table-->
    <!--                        </div>-->
    <!--                        <div class="panel-body">-->
    <!--                            <div class="table-responsive">-->
    <!--                                <table class="table table-striped">-->
    <!--                                    <thead>-->
    <!--                                        <tr>-->
    <!--                                            <th>#</th>-->
    <!--                                            <th>First Name</th>-->
    <!--                                            <th>Last Name</th>-->
    <!--                                            <th>Username</th>-->
    <!--                                        </tr>-->
    <!--                                    </thead>-->
    <!--                                    <tbody>-->
    <!--                                        <tr>-->
    <!--                                            <td>1</td>-->
    <!--                                            <td>Mark</td>-->
    <!--                                            <td>Otto</td>-->
    <!--                                            <td>@mdo</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>2</td>-->
    <!--                                            <td>Jacob</td>-->
    <!--                                            <td>Thornton</td>-->
    <!--                                            <td>@fat</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>3</td>-->
    <!--                                            <td>Larry</td>-->
    <!--                                            <td>the Bird</td>-->
    <!--                                            <td>@twitter</td>-->
    <!--                                        </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    &lt;!&ndash;  End  Striped Rows Table  &ndash;&gt;-->
    <!--                </div>-->
    <!--                <div class="col-md-6">-->
    <!--                    &lt;!&ndash;    Bordered Table  &ndash;&gt;-->
    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading">-->
    <!--                            Bordered Table-->
    <!--                        </div>-->
    <!--                        &lt;!&ndash; /.panel-heading &ndash;&gt;-->
    <!--                        <div class="panel-body">-->
    <!--                            <div class="table-responsive table-bordered">-->
    <!--                                <table class="table">-->
    <!--                                    <thead>-->
    <!--                                        <tr>-->
    <!--                                            <th>#</th>-->
    <!--                                            <th>First Name</th>-->
    <!--                                            <th>Last Name</th>-->
    <!--                                            <th>Username</th>-->
    <!--                                        </tr>-->
    <!--                                    </thead>-->
    <!--                                    <tbody>-->
    <!--                                        <tr>-->
    <!--                                            <td>1</td>-->
    <!--                                            <td>Mark</td>-->
    <!--                                            <td>Otto</td>-->
    <!--                                            <td>@mdo</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>2</td>-->
    <!--                                            <td>Jacob</td>-->
    <!--                                            <td>Thornton</td>-->
    <!--                                            <td>@fat</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>3</td>-->
    <!--                                            <td>Larry</td>-->
    <!--                                            <td>the Bird</td>-->
    <!--                                            <td>@twitter</td>-->
    <!--                                        </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                     &lt;!&ndash;  End  Bordered Table  &ndash;&gt;-->
    <!--                </div>-->
    <!--            </div>-->
    <!--                &lt;!&ndash; /. ROW  &ndash;&gt;-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-6">-->
    <!--                     &lt;!&ndash;    Hover Rows  &ndash;&gt;-->
    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading">-->
    <!--                            Hover Rows-->
    <!--                        </div>-->
    <!--                        <div class="panel-body">-->
    <!--                            <div class="table-responsive">-->
    <!--                                <table class="table table-hover">-->
    <!--                                    <thead>-->
    <!--                                        <tr>-->
    <!--                                            <th>#</th>-->
    <!--                                            <th>First Name</th>-->
    <!--                                            <th>Last Name</th>-->
    <!--                                            <th>Username</th>-->
    <!--                                        </tr>-->
    <!--                                    </thead>-->
    <!--                                    <tbody>-->
    <!--                                        <tr>-->
    <!--                                            <td>1</td>-->
    <!--                                            <td>Mark</td>-->
    <!--                                            <td>Otto</td>-->
    <!--                                            <td>@mdo</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>2</td>-->
    <!--                                            <td>Jacob</td>-->
    <!--                                            <td>Thornton</td>-->
    <!--                                            <td>@fat</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr>-->
    <!--                                            <td>3</td>-->
    <!--                                            <td>Larry</td>-->
    <!--                                            <td>the Bird</td>-->
    <!--                                            <td>@twitter</td>-->
    <!--                                        </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    &lt;!&ndash; End  Hover Rows  &ndash;&gt;-->
    <!--                </div>-->
    <!--                <div class="col-md-6">-->
    <!--                     &lt;!&ndash;    Context Classes  &ndash;&gt;-->
    <!--                    <div class="panel panel-default">-->

    <!--                        <div class="panel-heading">-->
    <!--                            Context Classes-->
    <!--                        </div>-->

    <!--                        <div class="panel-body">-->
    <!--                            <div class="table-responsive">-->
    <!--                                <table class="table">-->
    <!--                                    <thead>-->
    <!--                                        <tr>-->
    <!--                                            <th>#</th>-->
    <!--                                            <th>First Name</th>-->
    <!--                                            <th>Last Name</th>-->
    <!--                                            <th>Username</th>-->
    <!--                                        </tr>-->
    <!--                                    </thead>-->
    <!--                                    <tbody>-->
    <!--                                        <tr class="success">-->
    <!--                                            <td>1</td>-->
    <!--                                            <td>Mark</td>-->
    <!--                                            <td>Otto</td>-->
    <!--                                            <td>@mdo</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr class="info">-->
    <!--                                            <td>2</td>-->
    <!--                                            <td>Jacob</td>-->
    <!--                                            <td>Thornton</td>-->
    <!--                                            <td>@fat</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr class="warning">-->
    <!--                                            <td>3</td>-->
    <!--                                            <td>Larry</td>-->
    <!--                                            <td>the Bird</td>-->
    <!--                                            <td>@twitter</td>-->
    <!--                                        </tr>-->
    <!--                                        <tr class="danger">-->
    <!--                                            <td>4</td>-->
    <!--                                            <td>John</td>-->
    <!--                                            <td>Smith</td>-->
    <!--                                            <td>@jsmith</td>-->
    <!--                                        </tr>-->
    <!--                                    </tbody>-->
    <!--                                </table>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    &lt;!&ndash;  end  Context Classes  &ndash;&gt;-->
    <!--                </div>-->
    <!--            </div>-->
                <!-- /. ROW  -->
<!--        </div>-->
<!--               <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>-->
<!--    </div>-->
             <!-- /. PAGE INNER  -->
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->







