
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <link rel="stylesheet" href="{{asset('org/Dashkit')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit')}}/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit')}}/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit')}}/css/theme.min.css" id="stylesheetLight">
    <style>body { display: block; }</style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark" style="border: none;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#!">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#!">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#!">Action</a>
                            <a class="dropdown-item" href="#!">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{route('content.category.index')}}">后台管理</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

</body>
</html>
