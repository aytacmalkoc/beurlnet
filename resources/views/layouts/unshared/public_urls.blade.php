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

        <div class="row justify-content-center">
            @if ($public_links->count() == 0)
            <div class="col-6 mt-4 pt-2 text-center">
                <div class="alert alert-warning">
                    Henüz herkese açık paylaşılan bir bağlantı yok.
                </div>
            </div>
            @endif

            <public-links :links={{ $public_links }} />
        </div>
    </div>
</section>