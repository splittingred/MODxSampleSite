<!-- login form section-->
<form method="post" class="formlogin" name="loginfrm" action="[[~[[*id]]]]"> 
    <input type="hidden" value="[[+rememberme]]" name="rememberme" /> 
    <input type="hidden" name="returnUrl" value="[[+request_uri]]" />
    <input type="hidden" name="service" value="login" />
    
    <fieldset>
        <h3>Your Login Details</h3>
        <label>User: <input type="text" name="username" tabindex="1" value="[[+username]]" /></label>
        <label>Password: <input type="password" name="password" tabindex="2" value="" /></label>
                
        <input type="submit" value="[[+actionMsg]]" name="Login" class="button" />
        
        <a href="[[~19]]" class="forgotpsswd">Forget Your Password?</a>
    </fieldset>
</form>