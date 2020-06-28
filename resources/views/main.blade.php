<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dermahealth @yield('page_title', '')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    @yield('main_og')
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    @yield('main_css_files')
    
</head>
<body>
    <div id="page-container" class="fade show">
        @yield('main_header')
   
        @yield('main_content')

        @yield('main_footer')
    </div>
    
    @yield('main_js_files')
    @yield('main_js_scripts')
</body>
</html>