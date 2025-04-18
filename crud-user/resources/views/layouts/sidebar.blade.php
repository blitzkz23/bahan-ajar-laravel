<div class="fixed left-0 top-0 w-64 h-full bg-white shadow-lg">
    <!-- Logo Container -->
    <div class="flex items-center justify-center h-20 bg-gray-50 border-b">
        <img src="{{ asset('images/logodinsos.jpg') }}" alt="Dashboard Logo" 
             class="h-12 w-auto object-contain">
    </div>

    <!-- Menu Items -->
    <div class="px-4 py-6">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" 
                   class="{{ Request::routeIs('dashboard') 
                       ? 'bg-blue-50 text-blue-600 font-medium' 
                       : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }} 
                       flex items-center px-4 py-2 text-sm rounded-lg transition-colors">
                    <i class="fas fa-home w-5 h-5 mr-3"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('panti.index') }}" 
                   class="{{ Request::routeIs('panti.*') 
                       ? 'bg-blue-50 text-blue-600 font-medium' 
                       : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }} 
                       flex items-center px-4 py-2 text-sm rounded-lg transition-colors">
                    <i class="fas fa-hospital w-5 h-5 mr-3"></i>
                    <span>Panti Sosial</span>
                </a>
            </li>

            <li>
                <a href="{{ route('penerima-manfaat.index') }}" 
                   class="{{ Request::routeIs('penerima-manfaat.*') 
                       ? 'bg-blue-50 text-blue-600 font-medium' 
                       : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }} 
                       flex items-center px-4 py-2 text-sm rounded-lg transition-colors">
                    <i class="fas fa-users w-5 h-5 mr-3"></i>
                    <span>Penerima Manfaat</span>
                </a>
            </li>

            <li>
                <a href="{{ route('bantuan.index') }}" 
                   class="{{ Request::routeIs('bantuan.*') 
                       ? 'bg-blue-50 text-blue-600 font-medium' 
                       : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }} 
                       flex items-center px-4 py-2 text-sm rounded-lg transition-colors">
                    <i class="fas fa-hand-holding-heart w-5 h-5 mr-3"></i>
                    <span>Bantuan</span>
                </a>
            </li>

            <li>
                <a href="{{ route('penerima-bantuan.index') }}" 
                   class="{{ Request::routeIs('penerima-bantuan.*') 
                       ? 'bg-blue-50 text-blue-600 font-medium' 
                       : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }} 
                       flex items-center px-4 py-2 text-sm rounded-lg transition-colors">
                    <i class="fas fa-user-check w-5 h-5 mr-3"></i>
                    <span>Penerima Bantuan</span>
                </a>
            </li>

            <li>
                <a href="{{ route('laporan.index') }}" 
                   class="{{ Request::routeIs('laporan.*') 
                       ? 'bg-blue-50 text-blue-600 font-medium' 
                       : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }} 
                       flex items-center px-4 py-2 text-sm rounded-lg transition-colors">
                    <i class="fas fa-file-alt w-5 h-5 mr-3"></i>
                    <span>Laporan</span>
                </a>
            </li>

            <li>
                <a href="{{ route('program-rehabilitasi.index') }}" 
                   class="{{ Request::routeIs('program-rehabilitasi.*') 
                       ? 'bg-blue-50 text-blue-600 font-medium' 
                       : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }} 
                       flex items-center px-4 py-2 text-sm rounded-lg transition-colors">
                    <i class="fas fa-heartbeat w-5 h-5 mr-3"></i>
                    <span>Program Rehabilitasi</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Logout Button -->
    <div class="absolute bottom-0 w-full p-4 border-t bg-gray-50">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" 
                    class="w-full flex items-center justify-center px-4 py-2 text-sm text-gray-600 hover:text-white hover:bg-red-500 rounded-lg transition-colors">
                <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</div>
