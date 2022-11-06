<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/home" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Task</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{Request::is('home') ? 'Active' : ''}}">
              <a href="/home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item {{Request::is('category*') ? 'Active' : ''}}">
              <a href="{{route('category.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Category</div>
              </a>
            </li>
            <li class="menu-item {{Request::is('subcategory*') ? 'Active' : ''}}">
              <a href="{{route('subcategory.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Sub Category</div>
              </a>
            </li>
            <li class="menu-item {{Request::is('blog*') ? 'Active' : ''}}">
              <a href="{{route('blogs.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Blogs</div>
              </a>
            </li>
          </ul>
        </aside>