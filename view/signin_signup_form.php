<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="../controller/UserController.php">
                <!--                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>-->
                <div class="modal-body">
                    <table class="table table-hover table-responsive">
                        <tr>
                            <td colspan="2">
                        <center>
                            <h3>Signup Form</h3>
                        </center>
                        </td>
                        </tr>
                        <tr>
                            <td class="active">Who are you</td>
                            <td>
                                <input type="radio" name="type" id="teacher" style="margin-right: 1%"  checked/><label for="teacher" style="margin-right: 3%">Teacher</label>
                                <input type="radio" name="type" id="parent" style="margin-right: 1%"/><label for="parent" style="margin-right: 3%">Parent</label>
                                <input type="radio" name="type" id="student" style="margin-right: 1%"/><label for="student">Student</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="active">Your username</td>
                            <td>
                                <input type="text" name="username" id="username" class="form-control" required />
                            </td>
                        </tr>
                        <tr>
                            <td class="active">Your password</td>
                            <td>
                                <input type="password" name="password" id="password" class="form-control" required />
                            </td>
                        </tr>
                        <tr>
                            <td class="active">Confirm password</td>
                            <td>
                                <input type="password" name="confirm" id="confirm" class="form-control" required />
                            </td>
                        </tr>
                        <tr>
                            <td class="active">Your name</td>
                            <td>
                                <input type="text" name="name" id="name"  class="form-control" required />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default" name="signup" id="signup">Signup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="../controller/UserController.php">
                <!--                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>-->
                <div class="modal-body">
                    <table class="table table-hover table-responsive">
                        <tr>
                            <td colspan="2"><center><h3>Signin Form</h3></center>
                        </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input  type="text" class="form-control" id="username_sign_in" name="username_sign_in" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input  type="password" class="form-control" id="password_sign_in" name="password_sign_in" required/>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-default" id="signin" name="signin" value=" Sign In"> 
                </div>
            </form>
        </div>
    </div>
</div>