<x-app-layout>

    {{-- portada --}}

    <section class="bg-cover" style = "background-image: url({{asset('img/home/student-849821_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">

            <h1 class="text-white font-fold text-4xl">Domina la tecnologia web con Coders Free</h1>
            <p class="text-white text-lg mt-2 mb-4">En Coders Free encontraras Cursos, manuales y articulos que  te ayudaran a convertirte en un profesor </p>
                            <!-- component -->
                <!-- This is an example component -->
         
                @livewire('search')

            </div>
          </div>
          
    </section>
        
    <section class= "mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/business-2717066_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
                </header>

                <p class="text-sm text-gray-500">Encuentra los mejores cursos de Laravel en español. Lista de cursos</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/code-1839406_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Diseño web</h1>
                </header>

                <p class="text-sm text-gray-500">Escribenos y nos pondremos en contacto contigo. Contáctanos</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/code-2558220_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Asesorías</h1>
                </header>

                <p class="text-sm text-gray-500">Necesitas ayuda para aprender algún tema. Escríbenos</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/cyber-glasses-1938449_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>

                <p class="text-sm text-gray-500">Encuentra articulos de programación y actualidad. Lista de artículos</p>

            </article>

        </div>

    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Descubre los mejores cursos de programación</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class= "bg-blue-500 hover:bg-blue-780 text-white font-bold py-2 px-4 rounded">
            Catálago de cursos
             </a>
         </div>
    </section>

    <section class = "my-24">
      <h1 class = "text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
      <p class = "text-center text-gray-580 text-sm mb-6">Trabajo duro para seguir subiendo cursos </p>
      
      <div class = "max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

        @foreach ($courses as $course)
              <x-course-card :course="$course"/>
        @endforeach     
        
    </div>                                
                                      

</x-app-layout>


