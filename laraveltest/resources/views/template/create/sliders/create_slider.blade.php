@include('basis.basis')
@yield('basis')
@yield('page_header')

@foreach($sliderpagetitles as $sliderpagetitle)

    <p>{{$sliderpagetitle->title}}</p>


@endforeach

@yield('end_page_header')

@yield('list_no_active_link')
{{-- LInk to--}}{{ route('create-sliderpagetitle') }}
@yield('list_no_active')
{{-- Name --}}Create Page Name
@yield('end_list_no_active')
@yield('list_no_active_link')
{{-- LInk to--}}{{ route('all-sliders') }}
@yield('list_no_active')
{{-- Name --}}List Sliders
@yield('end_list_no_active')
@yield('list_active_link')
{{-- LInk to--}}{{ route('create-sliders') }}
@yield('list_active')
{{-- Name --}}Create new slider
@yield('end_list_active')
@yield('start_code')
{{-- Your code--}}

                <div class="container"
                     style="font-size: 16px">
                    <div class="row">
                        <form method="POST" action="/slidersaction"enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="col-md-12">
                                <h4><strong>Name of Slider</strong></h4>
                                <input type="text" class="input-sm col-md-10 "name="title" placeholder="Title" style="border: 2px solid gray">
                            </div>

                            <div class="col-md-12">
                                <h4><strong>Short Description</strong></h4>
                                <input type="text" class="input-lg col-md-10"name="description"placeholder="Description" style="border: 2px solid gray">
                            </div>

                            <div class="col-md-12">
                                <h4><strong>Link Title</strong></h4>
                                <input type="text" class="input-lg col-md-10"name="link_title"placeholder="link title"style="border: 2px solid gray">
                            </div>

                            <div class="col-md-12">
                                <h4><strong>Link</strong></h4>
                                <input type="text" class="input-lg col-md-10"name="link"placeholder="Link"style="border: 2px solid gray">
                            </div>

                            <div class="col-md-12">
                                <h4><strong>Img</strong></h4>
                                <input type="file" class="input-lg col-md-10"name="img"placeholder="Img"style="border: 2px solid gray">
                            </div>

                            <div class="col-md-12">
                                <h4><strong>Is visible</strong></h4>
                                <select class="input-sm col-md-10 warning" style="border: 2px solid gray" name="is_visible">
                                    <option>1</option>
                                    <option>0</option>
                                </select><br>
                            </div>

                            <div class="col-md-12">
                                <h4><strong>Position</strong></h4>
                                <input type="number" min="1" class="input-lg col-md-2"name="position"placeholder="Position place"style="border: 2px solid gray">
                            </div>

                            <div class="col-md-4">
                                <a href=""class="col-md-4"><button class="btn btn-success col-md-12">Create</button></a>
                            </div>


                        </form>
                    </div>
                </div>
@isset($path)
    <img src="{{ asset('/storage/' . $path) }}">
@endisset


@yield('menu_toggle')
@yield('last_scripts')











