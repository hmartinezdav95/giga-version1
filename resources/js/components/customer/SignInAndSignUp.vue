<template>
    <!-- header -->
    <div class = "container">
        
       

        <div class="d-flex justify-content-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Tabs navs -->
                       
                            <ul class="nav nav-tabsnav-fill mb-3 d-flex justify-content-center">
                            

                                <div  class="nav nav-tabs nav-fill mb-3" id="nav-tab" role="tablist">
                                    <button class=" nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">SignIn</button>
                                
                                    <button class="  nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">SignUp</button>
                                </div>
                            </ul>
                        <!-- Tabs navs -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                                type="submit">SignIn</button>
                                    </form>
                                </div>
                                <br>
                                <div class="form-group text-center">
                                    <a href="#"><b style="color:blue">Forgot Password</b></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                                    type="submit">SignIn</button>
                                        </form>
                                    </div>
                                    <br>
                                    <div class="form-group text-center">
                                        <a href="#"><b style="color:blue">Forgot Password</b></a>
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
