<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="/"><img src="/Assets/images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="{{ ($title === "Home") ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="/owner">Home</a></li>
                    <li class="{{ ($title === "Product List") ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="/product">Product list</a></li>
                    <li class="{{ ($title === "Store Owner") ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="/storeOwner">Store</a></li>
                    <li class="{{ ($title === "Order Owner") ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="/orderOwner">Order</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Side Menu -->
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
