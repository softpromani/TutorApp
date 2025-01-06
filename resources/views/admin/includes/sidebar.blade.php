<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="#" class="app-brand-link">
        <img src="{{ asset('assets/img/logo.png') }}" width="200" />
        {{-- <span class="app-brand-text demo menu-text fw-bold">Vuexy</span> --}}
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Page -->
      <li class="menu-item active">
        <a href="{{ route('admin.country.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 1">Country</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.state.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">State</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.city.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">City</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.board.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">Board</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="#) }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">Teacher</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">Student</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.standard.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">standard</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.subject.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">Subject</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.subscription.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-app-window"></i>
          <div data-i18n="Page 2">Subscription</div>
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons ti ti-smart-home"></i>
          <div data-i18n="Page 1">Dashboard</div>
        </a>
      </li>
    </ul>
  </aside>
