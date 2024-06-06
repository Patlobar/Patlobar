<x-layout_base>

<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <form method="post" action="{{route('salva-produto')}}" enctype="multipart/form-data">
    @csrf 

    <!-- Card -->
    <div class="bg-white rounded-xl shadow dark:bg-purple-900">
      <div class="relative h-40 rounded-t-xl bg-[url('data:image/jpeg;base64,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')] bg-no-repeat bg-cover bg-center">
        <div class="absolute top-0 end-0 p-4">
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
           
            
          </button>
        </div>
      </div>

      <div class="pt-0 p-4 sm:pt-0 sm:p-7">
        <!-- Grid -->
        <div class="space-y-4 sm:space-y-6">
          <div>
            <label class="sr-only">
            </label>

            <div class="grid sm:flex sm:items-center sm:gap-x-5">
              <img class="-mt-8 relative z-10 inline-block size-24 mx-auto sm:mx-0 rounded-full ring-4 ring-white dark:ring-neutral-900" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT-Ve56K9rUJEmqxwC5fAh96t07_LZIpb4BhEvagdu8A&s">

              <div class="mt-4 sm:mt-auto sm:mb-1.5 flex justify-center sm:justify-start gap-2">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  
                 Cadastre-se
               
              </div>
            </div>
          </div>

          <div class="space-y-2">
            <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
              Produto
            </label>

            <input name="nome" id="af-submit-app-project-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nome do Produto">
          </div>


          <div class="space-y-2">
            <label for="af-submit-app-upload-images" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
              Imagem do Produto
            </label>

            <label for="af-submit-app-upload-images" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
              <input name="foto" type="file" class="sr-only" id="af-submit-app-upload-images">
              <svg class="size-10 mx-auto text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
              </svg>
              <span class="mt-2 block text-sm text-gray-800 dark:text-neutral-200">
                Upload de Arquivo <span class="group-hover:text-blue-700 text-blue-600"></span>
              </span>
              <span class="mt-1 block text-xs text-gray-500 dark:text-neutral-500">
                Max. 2 MB(mpeg, jpeg,png,gif)
              </span>
            </label>
          </div>

          <div class="space-y-2">
            <label for="af-submit-app-category" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
             Preço
            </label>
            <input name="preco" id="af-submit-app-project-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Preço do Produto">
          </div>

          <div class="space-y-2">
            <label for="af-submit-app-description" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
              Descrição
            </label>

            <textarea name="descricao" id="af-submit-app-description" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Uma breve descrição do seu Produto"></textarea>
          </div>
        </div>
        <!-- End Grid -->

        <div class="mt-5 flex justify-center gap-x-2">
          <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-purple-600 text-white hover:bg-bleu-700 disabled:opacity-50 disabled:pointer-events-none">
            Concluir
          </button>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </form>
</div>
<!-- End Card Section -->

</x-layout_base>
