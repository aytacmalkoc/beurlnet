@extends('web.layouts.master')

@section('title', 'beurl.net nedir?')

@section('content')
<section class="bg-half-170 pb-5 d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="title-heading text-center mt-3 mb-4 pb-4 mt-md-3 pt-md-3">
                    <h1 class="heading mb-3">beurl.net nedir?</h1>
                </div>
                <p class="para-desc mx-auto text-muted">
                    beurl.net, uzun bağlantıları kısaltmanıza yardımcı olan bir servistir.
                </p>
                <p class="para-desc mx-auto text-muted">
                    Örneğin dribbble.com üzerinden bir bağlantı kopyaladığımızı varsayalım.
                    Websitelerinde kullanılan filtreleme teknolojileri nedeniyle elimizde
                    <a href="https://dribbble.com/shots/popular/made_with/sketch?source_file=.sketch">https://dribbble.com/shots/popular/made_with/sketch?source_file=.sketch</a>
                    şeklinde uzun bir bağlantı olacaktır.
                </p>
                <p class="para-desc mx-auto text-muted">
                    beurl, bu uzun bağlantıları kısaltarak sizi bu çirkin görüntüden kurtarır. Kısalttığınız bağlantıyı
                    <span class="text-success">16</span> karakter uzunluğuna sabitleyerek paylaşılabilir bir bağlantı
                    oluşturur.
                </p>
                <p class="para-desc mx-auto text-muted">
                    Şimdi yukarıda örneğini verdiğimiz bağlantıyı beurl tekniği ile kısaltalım.
                    Görüldüğü gibi elimizde oldukça kısa ve temiz bir bağlantı oluştu.
                    <a href="https://beurl.net/THoT1FJV" class="text-success" target="_blank">beurl.net/THoT1FJV</a>
                </p>
                <p class="para-desc mx-auto text-muted">
                    Ayrıca kısalttığınız bağlantıları herkese açık bir şekilde paylaşabilir ya da gizli tutabilirsiniz.
                    Paylaşılmasına izin vermediğiniz hiçbir bağlantı paylaşılmayacaktır. İzin verdiğiniz bağlantılar ise
                    anasayfamızda herkese açık şekilde görüntülenecektir.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
