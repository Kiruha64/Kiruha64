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

<div class="container"
     style="font-size: 16px">
    <div class="row">
        <form method="POST" action="{{ route('contactinfo-create-post') }}"enctype="multipart/form-data">

            {{ csrf_field() }}


            <div class="col-md-12">
                <h4><strong>Text</strong></h4>
                <input type="text" class="input-lg col-md-10"name="text"placeholder="text" style="border: 2px solid gray">
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
{{--@isset($path)--}}
{{--    <img src="{{ asset('/storage/' . $path) }}">--}}
{{--@endisset--}}


@yield('menu_toggle')
@yield('last_scripts')
