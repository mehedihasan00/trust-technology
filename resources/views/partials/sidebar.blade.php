<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Dashboard</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Settings
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('company.edit') }}">Company Content</a>
                        <a class="nav-link" href="{{ route('admin.about') }}">About Us</a>
                        <a class="nav-link" href="{{ route('register.create') }}">Add New User</a>
                        <a class="nav-link" href="{{ route('settings') }}">Update Profile</a>
                        
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Website Content
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
               
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <div class="collapsePages" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('management.index') }}">Management</a>
                                
                                <a class="nav-link" href="{{ route('gallery.index') }}">Gellary</a>
                                <a class="nav-link" href="{{ route('banner.index') }}">Slider</a>
                                <a class="nav-link" href="{{ route('video.index') }}">Video</a>
                            </nav>
                        </div>  
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
               
                <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <div class="collapsePages" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('category.index') }}">Category</a>
                                <a class="nav-link" href="{{ route('product.index') }}">Product</a>
                            </nav>
                        </div>  
                </div>
                <a class="nav-link" href="{{ route('news.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    News And Event
                </a>
                <a class="nav-link" href="{{ route('contact.list') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Contact List
                </a>
                <a class="nav-link" href="{{ route('logout') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-power-off"></i></div>
                    Sign Out 
                </a>
            </div>
        </div>
    </nav>
</div>