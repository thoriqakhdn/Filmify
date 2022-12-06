@extends('layout.main')

@section('container')
<link rel="stylesheet" href="css/faq.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<section>
    <div class="container">
        <div class="accordion">
            <div class="accordion-item" id="question1">
                <a class="accordion-link" href="#question1">
                    Bagaimana cara mereview film di Filmify?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Langkah pertama yang harus dilakukan adalah Masukkan akun kedalam web <b>Filmify</b>, lalu pilih
                        kategori yang diinginkan atau bisa juga dengan langsung memilih film yang sudah tersedia di web
                        <b>Filmify</b>.
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question2">
                <a class="accordion-link" href="#question2">
                    Bingung? ingin mereview film apa saja?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Tenang saja, di <b>Filmify</b> selalu memperbarui filmnya setiap minggu!
                    </p>
                </div>
            </div>

            <div class="accordion-item" id="question3">
                <a class="accordion-link" href="#question3">
                    Bagaimana cara mengetahui film yang sedang trending?
                    <i class="icon ion-md-add"></i>
                    <i class="icon ion-md-remove"></i>
                </a>
                <div class="answer">
                    <p>
                        Jangan panik! <b>Filmify</b> menyediakan film-film yang sedang trending lochhh
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
