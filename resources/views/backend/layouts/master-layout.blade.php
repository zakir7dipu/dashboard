<!DOCTYPE html>
<html lang="en">
@include('backend.layouts.head')
<body>
    <!------------------------------------------------------------------------------------------------>
    <!-- WRAPPER ------------------------------------------------------------------------------------->
    <div id="wrapper" class="wrapper-left-fixed wrapper-header-fixed bg-dark">
        <!------------------------------------------------------------------------------------------------>
        @include('backend.layouts.pre-loader')
        <!------------------------------------------------------------------------------------------------>
        @include('backend.menus.header-menu')
        <!------------------------------------------------------------------------------------------------>
        @include('backend.menus.left-menu')
        <!------------------------------------------------------------------------------------------------>
        <div class="container-fluid">
            @yield('content')
        </div>
        <!------------------------------------------------------------------------------------------------>
        @include('backend.layouts.footer')
    </div>

    <!-- END WRAPPER --------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------>

    @include('backend.layouts.script')
    @yield('page-script')
    @include('backend.layouts.toster-script')
</body>

</html>
