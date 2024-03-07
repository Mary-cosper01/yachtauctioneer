function include(file, id) {
    var script = document.createElement('script');
    script.src = file;
    script.id = id;
    script.type = 'text/javascript';
    script.defer = true;
    document.getElementsByTagName('head').item(0).appendChild(script);
}
window.setTimeout(function () {
include('https://www.googletagmanager.com/gtag/js?id=AW-10827158709','');   
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-10827158709');



include('https://www.googletagmanager.com/gtag/js?id=G-XWF6XM7QLQ','');   
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-XWF6XM7QLQ');



include('https://www.googletagmanager.com/gtag/js?id=UA-211678395-5','');   
window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-211678395-5');
}, 8000);