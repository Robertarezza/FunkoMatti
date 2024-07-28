@extends('layouts.app')

@section('content')

<div class="jumbotron p-5 bg-light border-0" style="background-image: url('{{ asset('img/backg.jpg') }}');     background-size: cover;
    background-repeat: no-repeat; ">
    <div class="container py-5">

        <h1 class="display-5 fw-bold element-text1" style=" max-width: min-content; font-size: 5rem; color: #f15048">
            Creazioni 3D: la soluzione per la visualizzazione realistica
        </h1>
        <ul class="d-flex g-3 mt-5" style="list-style-type:none; color: #f15048">
            <li class="me-3 element-text2" style="border-right: 4px solid white; padding-right: 30px; font-size: 1.5rem">Chi siamo</li>
            <li class="me-3 element-text3" style="border-right: 4px solid white; padding-right: 30px; font-size: 1.5rem">Progetti</li>
            <li class="element-text4" style="font-size: 1.5rem">Articoli</li>
        </ul>
    </div>
</div>
<div class="content pb-5" style="background-color: #1b0c3b;">
    <div class="container">
        <div class="row pt-5">
            <div class="col-3">

                <div class="card  p-3 rounded element-class" style="">
                    <i class="fa-brands fa-unity text-shadow-pop-bottom  " style="font-size: xxx-large;"></i>
                    <p class="mt-4">Creazioni 3D</p>
                    <p style="text-align: center;">Creazioni 3D innovativa e accattivante.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card p-3 rounded element-class" style="">
                    <i class="fa-brands fa-unity text-shadow-pop-bottom  " style="font-size: xxx-large;"></i>
                    <p class="mt-4">Creazioni 3D</p>
                    <p style="text-align: center;">Creazioni 3D innovativa e accattivante.</p>
                </div>
            </div>
            <div class="col-3 ">
                <div class="card  p-3 rounded element-class" style="">
                    <i class="fa-brands fa-unity text-shadow-pop-bottom  " style="font-size: xxx-large;"></i>
                    <p class="mt-4">Creazioni 3D</p>
                    <p style="text-align: center;">Creazioni 3D innovativa e accattivante.</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card   p-3 rounded element-class" style="">
                    <i class="fa-brands fa-unity text-shadow-pop-bottom  " style="font-size: xxx-large;"></i>
                    <p class="mt-4">Creazioni 3D</p>
                    <p style="text-align: center;">Creazioni 3D innovativa e accattivante.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content" style="background-image: url('{{ asset('img/backg.jpg') }}'); background-size: cover;
    background-repeat: no-repeat;">
<div class="container "  >

    <h3 style=" color: #f15048; font-size: 3.2rem;" class="pt-5 text-center fw-bold">Le nostre opere</h3>
    <p style=" color: #f15048; font-size: 1.2rem;" class="text-center mb-3">Il risultato del nostro processo di branding aziendale è una linea guida completa del marchio che può essere utilizzata per progettare un sito web di marketing e altre risorse di progettazione come le illustrazioni del marchio che riflettano il nuovo marchio .</p>
    <div class="row mt-5" id="card-container">
            <!-- Le card verranno inserite qui -->
        </div>

</div>
</div>
@endsection