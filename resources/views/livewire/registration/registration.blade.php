<x-app-layout>

<x-slot name="header">
  <h2 class="text-xl font-semibold leading-tight text-gray-800">
    {{ __('Operaciones con Estudiantes') }}
  </h2>
</x-slot>


<div class="container mx-auto">
  @include('livewire/registration/students')

</div>

<div class="container mx-auto">

  @include('livewire/registration/location')
</div>




</x-app-layout>
