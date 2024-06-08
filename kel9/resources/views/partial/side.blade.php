<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="{{asset ('/template/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Halaman Admin</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li>
      <x-dropdown-link :href="route('profile.edit')">
        {{ __('Profile') }}
      </x-dropdown-link>
    </li>
    <li class="sidebar-header">HALAMAN UTAMA</li>
    <li>
      <a href="/dashboard">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
     <li class="sidebar-header">CONTENT REVIEW FILM</li>
  
     <li>
       <a href="/genre">
         <i class="zmdi zmdi-format-list-bulleted"></i> <span>genre</span>
       </a>
     </li>

     <li>
       <a href="/film">
         <i class="zmdi zmdi-card-membership"></i> <span>film</span>
       </a>
     </li>

     <li>
       <a href="/cast">
         <i class="zmdi zmdi-accounts"></i> <span>cast</span>
       </a>
     </li>

     <li>
      <a href="/kritik">
        <i class="zmdi zmdi-brush"></i> <span>kritik</span>
      </a>
    </li>

    <li>
      <a href="/peran">
        <i class="zmdi zmdi-mood"></i> <span>peran</span>
      </a>
    </li>

    <li class="sidebar-header">IN/OUT</li>
    <li >
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    </li>
  </ul>
</div>