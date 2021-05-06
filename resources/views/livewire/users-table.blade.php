<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Users') }} desde LiveWire
  </h2>
</x-slot>


<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">


              <div class=" flex px-3 py-3">
                <input
                  wire:model="search"
                  class="form-input rounded-md shadow-sm mt-1 block w-full "
                  type="text"
                  placeholder="Buscar...">

                <label>
                  <select
                    wire:model="perPage"
                    class="form-input rounded-md shadow-sm mt-1 focus:outline-none  text-gray-500 text-sm ml-4">
                    <option value="1">1 por pág.</option>
                    <option value="2">2 por pág.</option>
                    <option value="5">5 por pág.</option>
                    <option value="15">15 por pág.</option>
                  </select>
                </label>

                <button wire:click="clear"
                        class="form-input rounded-md shadow-sm mt-1 focus:outline-none  text-gray-500 text-sm ml-4">
                  X
                </button>


              </div>


              @if($users->count())

                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                  <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Personal
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Equipo
                    </th>


                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">

                  @foreach ($users as $user )

                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full"
                                 src="{{$user->profile_photo_url}}" alt="">
                            <!--se cambia path por url -->
                          </div>
                          <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                              {{$user->name}}
                            </div>
                            <div class="text-sm text-gray-500">
                              {{$user->email}}
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">
                          {{$user->allTeams()->pluck('name')->join(', ')}}
                        </div>
                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                      </td>
                    </tr>

                  @endforeach

                  <!-- More items... -->
                  </tbody>
                </table>
                <div class="px-5 py-5">{{$users->links()}}</div>


              @else

                <div class="bg-white px-4 py-4 border-t border-gray-200 sm:px-6 text-gray-500">
                  No hay resultados para la Búsqueda: "{{$search}}" en la página {{$page}} al
                  mostrar {{$perPage}} por pag.
                </div>

              @endif


            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
