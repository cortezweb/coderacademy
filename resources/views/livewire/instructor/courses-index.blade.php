<div class="container py-8">

<x-table-responsive>
 
    <div class="px-6 py-4 flex">
        <input wire:keydown='limpiar_page' wire:model='search' class="form-input flex-1 shadow-sm" placeholder="Ingrese el nombre de un curso...">
    
        <a  class="btn btn-danger ml-2" href="{{route('instructor.courses.create')}}">Crear nuevo Curso</a>
    </div>


            @if ($courses->count())
        
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">

                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase" >
                                Nombre
                         </th>
                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase" >
                                Matriculados
                         </th>
                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase" >
                                Calificaciòn
                          </th>
                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase" >
                                Status
                         </th>
                         <th scope="col" class="relative px-6 py-3">
                              <span class = "sr-only">Edit</span>
                        </th>
                    </tr>
                 </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                       
                    @foreach($courses as $course)
                                                 
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                       @isset($course->image)
                                            <img class="h-10 w-10 rounded-full object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="" >    
                                        @else
                                            <img class="h-10 w-10 rounded-full object-cover object-center" src="https://images.pexels.com/photos/4497761/pexels-photo-4497761.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" >

                                       @endisset
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$course->title}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$course->category->name}}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$course->students->count()}}</div>
                                <div class="text-sm text-gray-500">Alumnos Matriculados</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 flex items-center">
                                    {{$course->rating}}
                                    <ul class="flex text-sm ml-2">
                                        <li class="mr-1">
                                            <i class="fas fa-star {{$course->rating >= 1 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star {{$course->rating >= 2 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star {{$course->rating >= 3 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star {{$course->rating >= 4 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star {{$course->rating == 5 ? 'text-yellow-400' : 'text-gray-400'}}"></i>
                                        </li>
                                    </ul>
                                
                                </div>
                                <div class="text-sm text-gray-500">Valoraciòn del curso</div>
                            </td>
                    

                            <td class="px-6 py-4 whitespace-nowrap">

                                @switch($course->status)
                                    @case(1)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Borrador
                                        </span>
                                        @break
                                    @case(2)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Revisiòn
                                        </span>
                                        @break
                                    @case(3)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Publicado
                                        </span>
                                        @break
                                    @default
                                        
                                @endswitch


                           
                            </td>
                           
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{route('instructor.courses.edit', $course)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                      @endforeach
                        <!--More rows...-->
                    </tbody>
                </table>

                <div class="px-6 py-4">
                    {{$courses->links()}}
                </div>
                
                    
                @else
                    <div class="px-6 py-4">
                        No hay ningùn registro coincidente
                    </div>
                

                @endif

</x-table-responsive>

</div>
