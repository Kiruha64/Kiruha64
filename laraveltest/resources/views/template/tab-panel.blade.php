@include('basis.basis')
@yield('menu_basic')
@yield('page_header')
{{--PAGE HEADER NAME--}}Navbar
@yield('page_header_stop')
@yield('first_link')
{{--Your LInk--}}<a href="#">List Navbars
    @yield('first_link_stop')
    @yield('second_link')
    {{--Your LInk--}}<a href="#">Create new Navbars
        @yield('second_link_stop')



        @yield('panel_heading')
        {{--PANEL HEADING NAME--}}<div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Link_Title</th>



                    </tr>
                    </thead>
                    <thead>
                    <tbody>


                    {{--                                    @foreach($sliders as $slider)--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td>{{ $slider->id }}</td>--}}

                    {{--                                            <td>{{ $slider->title }}</td>--}}

                    {{--                                            <td>{{ $slider->description }}</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                    @endforeach--}}





                    </tbody>
                </table>
            </div>
        </div>

        @yield('panel_heading_stop')

        {{-- Here you can write your code --}}

        <h1> Here you can write your code</h1>








@yield('menu_end')
