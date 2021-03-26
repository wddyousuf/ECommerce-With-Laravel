@php
    $prefix=Request::route()->getPrefix();
    $route=Route::current()->getName();
@endphp


<!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @if (Auth::user()->role=='Admin')
          <li class="nav-item  has-treeview {{ ($prefix=='/user')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.view') }}" class="nav-link {{ ($route=='user.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('user.add') }}" class="nav-link {{ ($route=='user.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add User</p>
                  </a>
                </li>
              </ul>
          </li>
          @endif
          <li class="nav-item has-treeview {{ ($prefix=='/profiles')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Profile Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profiles.view') }}" class="nav-link {{ ($route=='profiles.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('password.change') }}" class="nav-link {{ ($route=='password.change')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Change Password</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/logos')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Logo Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logo.view') }}" class="nav-link {{ ($route=='logo.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Logo</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('logo.add') }}" class="nav-link {{ ($route=='logo.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Logo</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/slider')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Slider Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider.view') }}" class="nav-link {{ ($route=='slider.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('slider.add') }}" class="nav-link {{ ($route=='slider.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Slider</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview {{ ($prefix=='/contact')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Contact Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contact.view') }}" class="nav-link {{ ($route=='contact.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/about')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                About Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('about.view') }}" class="nav-link {{ ($route=='about.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View About</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/contact')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Communicate
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contact.communicate') }}" class="nav-link {{ ($route=='contact.communicate')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Communicate</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/category')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Category Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.view') }}" class="nav-link {{ ($route=='category.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('category.add') }}" class="nav-link {{ ($route=='category.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Category</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/brand')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Brand Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('brand.view') }}" class="nav-link {{ ($route=='brand.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Brands</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('brand.add') }}" class="nav-link {{ ($route=='brand.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Brand</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/color')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Color Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('color.view') }}" class="nav-link {{ ($route=='color.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Colors</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('color.add') }}" class="nav-link {{ ($route=='color.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Color</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/size')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Size Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('size.view') }}" class="nav-link {{ ($route=='size.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Sizes</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('size.add') }}" class="nav-link {{ ($route=='size.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Size</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix=='/product')?'menu-open': '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Product Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('product.view') }}" class="nav-link {{ ($route=='product.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Product</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('product.add') }}" class="nav-link {{ ($route=='product.add')?'active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Product</p>
                  </a>
                </li>
              </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
