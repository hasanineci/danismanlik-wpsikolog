<!-- Modal-->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="AnlasmaliKurumlarTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AnlasmaliKurumlarTitle">Anlaşmalı Kurum / İşletme Ekle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                        <b>Kurum / İşletme Adı: </b>
                        <span class="modal_adi"></span>
                    </li>
                    <li>
                        <b>Yetkili Ad Soyad: </b>
                        <span class="modal_yetkili_adi"></span>
                    </li>
                    <li>
                        <b>Telefon: </b>
                        <span class="modal_telefon"></span>
                    </li>
                    <li>
                        <b>Birim: </b>
                        <span class="modal_birim"></span>
                    </li>
                    <li>
                        <b>Bulunduğu Yer: </b>
                        <span class="modal_bulundugu_yer"></span>
                    </li>
                    <li>
                        <b>Durum: </b>
                        <span class="modal_durum"></span>
                    </li>
                </ul>

                <p>Bu kurum/işletme ile <b class="modal_created_at"></b> tarihinde anlaşmaya varılmıştır.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                <button type="button" class="btn btn-info" data-anlasmali-kurumlar-id="">Güncelle</button>
                <button type="button" class="btn btn-danger" data-anlasmali-kurumlar-id="">Sil</button>
            </div>
        </div>
    </div>
</div>