<template>
    <!-- header -->
    <div class = "container">
        <!-- top extra  -->
        <div id="top_extra" class="d-flex align-items-centes justify-content-end">
            <a href="#">Join as seller <span class="icons material-icons-outlined">arrow_forward</span></a>
        </div>
        <!-- top extra  -->
        <header id="main_header" class="navbar-sticky">



            <!-- menu -->
            <div id="main_menu" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand flex-shrink-0" href="#">
                        <img src="images/logo.png" class="img-fluid" alt="#">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#gigastoreMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- desktop view search -->
                    <div class="desktop_view_top_search d-lg-flex mx-5 me-auto w-100 flex-column">
                        <form class="search_bar_sticky">
                            <div class="row g-3 mx-3">
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for anything...">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Richmond, ....</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="px-3 py-2">
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control" name="location">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="radius" class="form-label">Radius</label>
                                                    <input type="range" class="form-range" id="radius" name="radius">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <button class="btn btn_categories" type="button" data-bs-toggle="collapse" data-bs-target="#search_categories_collapse">Categories</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- desktop view menu -->
                    <div class="desktop_view_top_menu d-flex lex-shrink-0 align-items-center">
                        <a href="#" class="d-flex btn_wishlist">
                            <span class="icons material-icons-outlined">favorite_border</span>
                            <span class="menu_text">Wishlist</span>
                        </a>
                        <a href="#" class="d-flex btn_cart" data-bs-toggle="modal"  data-bs-target="#exampleModal" >
                            <span class="cart_counter_bubble">2</span>
                            <span class="icons material-icons-round">shopping_cart</span>
                            <span class="menu_text">Cart</span>
                        </a>
                        <a href="#" class="d-flex btn_account">
                            <span class="icons material-icons-outlined">account_circle</span>
                            <span class="menu_text">Account</span>
                        </a>
                    </div>


                    <div class="collapse navbar-collapse" id="gigastoreMenu">
                        <div class="ms-auto d-flex">
                            <form class="search_bar_sticky">
                                <div class="row g-3">
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for anything">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" name="categories">
                                            <option selected>Categories</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <span class="icons material-icons-outlined">favorite_border</span>
                                        <span class="menu_text">Wishlist</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="icons material-icons-round">shopping_cart</span>
                                        <span class="menu_text">Cart</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="icons material-icons-outlined">account_circle</span>
                                        <span class="menu_text">Account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu -->
        </header>
        <!-- header -->

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">


                        <img src="images/signin_pics.png" class="img-fluid" alt="#">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                 <a
                                                class="nav-link active"
                                                id="home-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#home" 
                                                href="#home"
                                                 role="tab"
                                                 aria-controls="home"
                                                aria-selected="true"
                                            ><h3 style="color:blue"><b>Sign In</b></h3></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                                class="nav-link"
                                                id="profile-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#profile" 
                                                href="#profile"
                                                 role="tab"
                                                 aria-controls="profile"
                                                aria-selected="true"
                                            ><h3 style="color:#383838"><b>Sign Up</b></h3></a>
                            </li>
                        </ul>
                            
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="form-group">
                            <label style="float:left" for=""><b>Email *</b></label>
                            <input type="text" class="form-control form-control" name="email" placeholder="janedoe@gmail.com">
                        </div><br>
                        <div class="form-group">
                            <label style="float:left" for=""><b>Password *</b></label>
                            <input type="password" class="form-control form-control" name="email" placeholder="Password">
                        </div><br>
                        <div class="form-group text-center">
                            <form class="form-inline text-center" action="/CustomerSignIn">

                                <button class="form-control" style=" background-color:blue; border: 5px; padding: 10px 30px;
                                            text-align: center; color:white; border-radius: 12px; font-style:bold;"
                                        type="submit">Sign In</button>
                            </form>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <a href="#"><b style="color:blue; font-style:bold">Forgot Password?</b></a>
                        </div>
                </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="signup-tab">
                                    <div class="form-group">
                            <label style="float:left" for=""><b>Email *</b></label>
                            <input type="text" class="form-control form-control" name="email" placeholder="janedoe@gmail.com">
                        </div><br>
                        <div class="form-group">
                            <label style="float:left" for=""><b>Password *</b></label>
                            <input type="password" class="form-control form-control" name="email" placeholder="Password">
                        </div><br>
                        <div class="form-group text-center">
                            <form class="form-inline text-center" action="/CustomerSignIn">

                                <button class="form-control" style=" background-color:blue; border: 5px; padding: 10px 30px;
                                            text-align: center; color:white; border-radius: 12px; font-style:bold;"
                                        type="submit">Join now</button>
                            </form>
                            <p class="text-center">
                                By joining, you agree to our <b style =" color:blue">Terms and Conditions</b> and <b style="color:blue">Privacy Policy</b>
                            </p>

                        </div>
                        <br>
                        
                     </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <!--Modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div  class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a
                                                class="nav-link active"
                                                id="sign-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#sign" 
                                                href="#sign"
                                                 role="tab"
                                                 aria-controls="sign"
                                                aria-selected="true"
                                            ><h3 style="font-style:bold; color:blue"><b>Sign In</b></h3></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a
                                                class="nav-link"
                                                id="signup-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#signup" 
                                                href="#signup"
                                                 role="tab"
                                                 aria-controls="signup"
                                                aria-selected="true"
                                            ><h3 style="color:#383838"><b>Sign Up</b></h3></a>
                                        </li>
                                    </ul>
                            
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="sign" role="tabpanel" aria-labelledby="sign-tab">
                                                <div class="form-group">
                                        <label style="float:left" for=""><b>Email *</b></label>
                                        <input type="text" class="form-control form-control" name="email" placeholder="janedoe@gmail.com">
                                    </div><br>
                                    <div class="form-group">
                                        <label style="float:left" for=""><b>Password *</b></label>
                                        <input type="password" class="form-control form-control" name="email" placeholder="Password">
                                    </div><br>
                                    <div class="form-group text-center">
                                        <form class="form-inline text-center" action="/CustomerSignIn">

                                            <button class="form-control" style=" background-color:blue; border: 5px; padding: 10px 30px;
                                                        text-align: center; color:white; border-radius: 12px; font-style:bold;"
                                                    type="submit">Sign In</button>
                                        </form>
                                    </div>
                                    <br>
                                    <div class="form-group text-center">
                                        <a href="#"><b style="color:blue; font-style:bold">Forgot Password?</b></a>
                                    </div>
                        </div>

                                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                            <div class="form-group">
                                    <label style="float:left" for=""><b>Email *</b></label>
                                    <input type="text" class="form-control form-control" name="email" placeholder="janedoe@gmail.com">
                                </div><br>
                                <div class="form-group">
                                    <label style="float:left" for=""><b>Password *</b></label>
                                    <input type="password" class="form-control form-control" name="email" placeholder="Password">
                                </div><br>
                                <div class="form-group text-center">
                                    <form class="form-inline text-center" action="/CustomerSignIn">

                                        <button class="form-control" style=" background-color:blue; border: 5px; padding: 10px 30px;
                                                    text-align: center; color:white; border-radius: 12px; font-style:bold;"
                                                type="submit">Join now</button>
                                    </form>
                                    <p class="text-center">
                                        By joining, you agree to our <b style =" color:blue">Terms and Conditions</b> and <b style="color:blue">Privacy Policy</b>
                                    </p>

                                     </div>
                                            <br>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
