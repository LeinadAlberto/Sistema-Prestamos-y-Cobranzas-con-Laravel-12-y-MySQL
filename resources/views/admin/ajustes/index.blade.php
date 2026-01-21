<x-layouts.app title="Ajustes del Sistema">
    
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">Ajustes del Sistema</flux:heading>
        <br>
        <flux:separator variant="subtle" />
    </div>

    {{-- Card --}}
    <div class="bg-white dark:bg-neutral-800 border-t border-gray-200 dark:border-gray-700 
                rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl">
        
        <form action="{{ url('/admin/ajustes') }}" method="POST">
            @csrf
            {{-- Body --}}
            <div class="p-6">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="mb-4">
                        <flux:label for="site_name">
                            Nombre de la empresa <span class="text-red-500">(*)</span>
                        </flux:label>

                        <flux:input type="text" name="nombre" placeholder="Ingrese el nombre de la empresa" 
                                    icon="building-office" required />

                        <flux:error name="nombre" />
                    </div>

                </div>

            </div>

            {{-- Footer --}}
            <div class="bg-gray-50 dark:bg-neutral-700 border-t border-gray-200 
            dark:border-gray-700 rounded-b-lg p-6 text-left">

                <div class="flex space-x-3">
                    <a href="{{ url('/login') }}" 
                        class="px-4 text-sm font-medium text-gray-600 bg-white border border-gray-300 
                        rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200 
                        focus:ring-offset-1 transition-all duration-200 inline-flex items-center">
                        <i class="fas fa-times mr-2"></i> 
                        Cancelar
                    </a>

                    <flux:button variant="primary" type="submit" class="cursor-pointer" color="cyan">
                        <i class="fas fa-save mr-2"></i> 
                        Guardar
                    </flux:button>
                </div>
            </div>

        </form>       
    </div>{{-- End Card --}}

</x-layouts.app>
