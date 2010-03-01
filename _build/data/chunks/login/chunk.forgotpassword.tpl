<div class="loginFPErrors">[[+loginfp.errors]]</div>
<div class="loginFP">
    <form class="loginFPForm formlogin" action="[[~[[*id]]]]" method="post">
        <input class="loginFPService" type="hidden" name="login_fp_service" value="forgotpassword" />
        <input class="returnUrl" type="hidden" name="returnUrl" value="[[+loginfp.request_uri]]" />
        <fieldset class="loginFPFieldset">
            <legend class="loginFPLegend">Retrieve Your Password</legend>

            <br />

            <label class="loginFPUsernameLabel">Username:
                <input class="loginFPUsername" type="text" name="username" value="[[+loginfp.post.username]]" />
            </label>
            
            <p>Or, forgot your username?</p>
            
            <label class="loginFPEmailLabel">Email:
                <input class="loginFPEmail" type="text" name="email" value="[[+loginfp.post.email]]" />
            </label>            
            
            <br />
            <span class="loginFPButton"><input type="submit" name="login_fp" value="Reset Password" style="width: 200px;" /></span>
        </fieldset>
    </form>
</div>