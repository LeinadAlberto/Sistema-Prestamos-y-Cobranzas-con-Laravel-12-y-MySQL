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

                    {{-- Nombre de la Empresa --}}
                    <div class="mb-4">
                        <flux:field>
                            <flux:label>
                                Nombre de la Empresa 
                                <span class="text-red-800 ml-1" title="Campo obligatorio">
                                    (*)
                                </span>
                            </flux:label>

                            <flux:input 
                                type="text" 
                                name="nombre" 
                                placeholder="Nombre Comercial" 
                                icon="building-office" 
                                class="mt-1"
                                required 
                            />
                        
                            <flux:error name="nombre" />
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                    {{-- Descripción --}}
                    <div class="mb-4">
                        <flux:field>
                            <flux:label>Descripción</flux:label>

                            <flux:input 
                                name="descripcion" 
                                icon="document-text"
                                placeholder="Breve reseña de la empresa..."
                                class="mt-1" 
                            />

                            <flux:error name="descripcion" />
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                    {{-- Dirección --}}
                    <div class="mb-4">
                        <flux:field>
                            <flux:label>
                                Dirección 
                                <span class="text-red-800 ml-1" title="Campo obligatorio">
                                    (*)
                                </span>
                            </flux:label>
    
                            <flux:input 
                                name="direccion" 
                                icon="map-pin" 
                                placeholder="Calle, Ciudad, País"
                                class="mt-1" 
                                required 
                            />
    
                            <flux:error name="direccion" />
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                    <div class="mb-4">
                        <flux:field>
                            <flux:label>
                                Teléfono 
                                <span class="text-red-800 ml-1" title="Campo obligatorio">
                                    (*)
                                </span>
                            </flux:label>
    
                            <flux:input 
                                name="telefono" 
                                icon="phone" 
                                placeholder="+00 000 000"
                                class="mt-1" 
                                required 
                            />
    
                            <flux:error name="telefono" />
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                    <div class="mb-4">
                        <flux:field>
                            <flux:label>
                                Email de Contacto 
                                <span class="text-red-800 ml-1" title="Campo obligatorio">
                                    (*)
                                </span>
                            </flux:label>
    
                            <flux:input 
                                name="email" 
                                type="email" 
                                icon="envelope" 
                                placeholder="Email de contacto"
                                class="mt-1"
                                required 
                            />
    
                            <flux:error name="email" />
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                    <div class="mb-4">
                        <flux:field>
                            <flux:label>
                                Divisa 
                                <span class="text-red-800 ml-1" title="Campo obligatorio">
                                    (*)
                                </span>
                            </flux:label>
    
                            <flux:select 
                                placeholder="Selecciona una divisa..." 
                                name="divisa"
                                class="mt-1" 
                                required
                            >
                                {{-- @foreach ($divisas as $divisa)
    
                                    <flux:select.option value="{{ $divisa['symbol'] }}">{{ $divisa['name'] }}
    
                                    </flux:select.option>
    
                                @endforeach --}}
                            </flux:select>
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                    <div class="mb-4">
                        <flux:field>
                            <flux:label>
                                Tasa de Interés Mensual (%)
                            </flux:label>
    
                            <flux:input 
                                name="interes" 
                                type="number" 
                                step="0.01" 
                                icon="receipt-percent"
                                placeholder="10.00"
                                class="mt-1" 
                            />
    
                            <flux:error name="interes" />
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                    <div class="mb-4">
                        <flux:field>
                            <flux:label>Tasa de Mora (%)</flux:label>
    
                            <flux:input 
                                name="mora" 
                                type="number" 
                                step="0.01" 
                                icon="clock" 
                                placeholder="2.00"
                                class="mt-1" 
                            />
    
                            <flux:error name="mora" />
                        </flux:field>
                    </div>{{-- /.mb-4 --}}

                </div>{{-- /.grid --}}

            </div>{{-- /.p-6 --}}

            {{-- Footer --}}
            <div class="bg-gray-50 
                        dark:bg-neutral-700 
                        border-t 
                        border-gray-200 
                        dark:border-gray-700 
                        rounded-b-lg 
                        p-6 
                        text-left">

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
