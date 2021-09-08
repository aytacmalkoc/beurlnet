@extends('web.layouts.master')

@section('content')

    <section class="bg-half-170 pb-0 d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-heading text-center mt-4 mt-md-5 pt-md-5 welcome">
                        <h1 class="heading mb-3">beurl.net</h1>
                        <p class="para-desc mx-auto text-muted">
                            Uzun ve rahatsız edici bağlantıları kısaltın! <br>
                            <span>kısaltılan bağlantılar 7 gün sonra silinir.</span>
                        </p>

                        @livewire('web.url-generator')

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Herkese Açık Bağlantılar</h4>
                        <p class="text-muted para-desc mx-auto mb-0">
                            Herkese açık bağlantılar, bağlantılarınızı kısaltırken paylaşılmasına izin verdiğiniz
                            bağlantılardır.
                            Burada listelenen bağlantılar, en çok kullanılma sayısına göre listelenmiştir. Üzerlerine
                            tıklayarak kolayca
                            kopyalayabilirsiniz.
                        </p>
                    </div>
                </div>
            </div>

            @livewire('web.public-urls')

        </div>
    </section>

@endsection
