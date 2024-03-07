@include('layout.header')

<body>
  <style>
        .wsmenu>.wsmenu-list>li>ul.sub-menu{
            min-width : auto !important;
            left: auto !important;
        }
  </style>
    <div id="loader-wrapper">
      <div id="loader"></div>
    </div>
    <div id="page" class="page">
        @include('layout.nav')
        @yield('content')
    </div>

    @include('layout.footer')
    

</body>
</html>