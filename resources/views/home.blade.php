<x-layout_base>

    <x-menu></x-menu>

    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
          <img src="{{asset('fotos/Home.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide6" class="btn btn-circle">❮</a>
            <a href="#slide2" class="btn btn-circle">❯</a>
            
          </div>
        </div>



        <div id="slide2" class="carousel-item relative w-full">
          <img src="{{asset('fotos/About.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a>
            <a href="#slide3" class="btn btn-circle">❯</a>
          </div>
        </div>




       
        <div id="slide3" class="carousel-item relative w-full">
          <img src="{{asset('fotos/FAQs.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a>
            <a href="#slide4" class="btn btn-circle">❯</a>
          </div>
        </div>



        <div id="slide4" class="carousel-item relative w-full">
          <img src="{{asset('fotos/Services.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3" class="btn btn-circle">❮</a>
            <a href="#slide5" class="btn btn-circle">❯</a>
          </div>
        </div>


        <div id="slide5" class="carousel-item relative w-full">
          <img src="{{asset('fotos/Reviews.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide4" class="btn btn-circle">❮</a>
            <a href="#slide6" class="btn btn-circle">❯</a>
          </div>
        </div>

        <div id="slide6" class="carousel-item relative w-full">
          <img src="{{asset('fotos/Contact.png')}}" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide5" class="btn btn-circle">❮</a>
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div>


      </div>

    <div class="bg-white rounded-md shadow-md m-6 p-6">
        <div class="font-bold text-lg">
            Ofertas do dia
        </div>

        <div class="grid grid-cols-4 gap-3">

        @foreach ($listaProdutos as $produto)

        <div class="card bg-base-100 shadow-xl">
                    <figure><img class="aspect-square w-full object-cover" src="{{$produto->foto}}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title rounded-full">{{$produto->nome}}</h2>
                        <p>{{$produto->descricao}}</p>
                        <div class="card-actions justify-center">
                          
                            <button class="btn btn-primary font-bold text-lg text-silver" >R${{number_format($produto->valor,2,',','.')}}
                            </button>
                        </div>
                    </div>
                </div>

        @endforeach
            {{-- for (variavel = inicio; até onde; de quanto aumenta) --}}
          
        </div>

    </div>

</x-layout_base>
