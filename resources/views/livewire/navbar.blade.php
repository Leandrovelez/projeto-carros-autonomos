<div>
    <x-slot:sidebar drawer="main-drawer" class="bg-base-100 lg:bg-inherit">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <div class="flex items-center pt-4 pl-4">
                            <span class="font-bold text-3xl me-3 bg-gradient-to-r from-green-500 to-emerald-300 bg-clip-text text-transparent ">
                                QUIK-Y
                            </span>
                        </div>
                    </a>
                </div>
        {{-- MENU --}}
        <x-mary-menu activate-by-route>
            <img src="" alt="" class="w-12">
            {{-- User --}}
            @if($user = auth()->user())
                <x-mary-menu-separator />

                <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded hover:bg-gray-100 dark:hover:bg-gray-800" link="{{route('profile')}}">
                    <x-slot:actions>
                        
                        <x-mary-button label="" class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-900 dark:hover:text-gray-200 hover:text-gray-700" 
                            spinner="save" icon="o-power" wire:click="logout"/>
                        
                    </x-slot:actions>
                </x-mary-list-item>

                <x-mary-menu-separator />
                {{-- <x-dropdown align="right" width="100" class="bg-base-100 dark:bg-base-100">
                    <x-slot name="trigger" class="bg-base-100 dark:bg-base-100">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <span class="inline-flex rounded-md" class="bg-base-100 dark:bg-base-100">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-900 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150 mb-2">
                                    {{ Auth::user()->name }}
    
                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>
    
                    <x-slot name="content" class="bg-base-100 dark:bg-base-100">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400 ">
                            {{ __('Manage Account') }}
                        </div>
    
                        <x-dropdown-link href="{{ route('profile') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>
    
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif
    
                        <div class="border-t border-gray-200"></div>
    
                        <!-- Authentication -->
                        <!-- <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf -->
    
                            <x-dropdown-link wire:click="logout">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        <!-- </form> -->
                    </x-slot>
                </x-dropdown> --}}
            @endif

            @if(in_array(Auth::user()->tipo, ['admin', 'vendedor']))
                <x-mary-menu-item title="Armazéns" link="{{ route('warehouses.index') }}" exact icon="o-building-storefront"/>
                <x-mary-menu-item title="Pontos de coleta" link="{{ route('collection-point.index') }}" exact  icon="o-map-pin"/>
            @endif

            @if(in_array(Auth::user()->tipo, ['admin', 'dono_de_carros']))
                <x-mary-menu-item title="Garagens" link="{{ route('garages.index') }}" exact icon="o-building-office"/>
                <x-mary-menu-item title="Carros" link="{{ route('cars.index') }}" exact icon="o-truck" />
            @endif
            
            @if(Auth::user()->tipo == "admin")
                <x-mary-menu-item title="Lojas" link="{{ route('stores.index') }}" exact icon="o-shopping-cart"/>
                <x-mary-menu-item title="Donos de carros" link="{{ route('car-owners.index') }}" exact icon="o-user"/>
            @endif
            
            <x-mary-menu-item title="Entregas" link="{{ route('delivery.index') }}" exact icon="o-shopping-bag"/>
            <x-mary-menu-item title="Ocorrências" link="{{ route('occurencies.index') }}" exact icon="o-shield-exclamation"/>
            {{-- Theme toggle --}}
            <x-mary-theme-toggle class="btn btn-circle" />
        </x-mary-menu>
    </x-slot:sidebar>
</div>
