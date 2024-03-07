@include('layout.header')

<body>
    <style>
        .wsmenu>.wsmenu-list>li>ul.sub-menu{
            min-width : 0px !important;
            left: auto !important;
        }
        .desktoplogo img {
    width: auto !important;
    max-width: 10vw !important;
    max-height: 65px !important;
}
.wsmenu>.wsmenu-list {
     width: 84vw !important;
     margin-top: 2px !important;
}
#header .an-btn {
     padding: 12px 15px !important;
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