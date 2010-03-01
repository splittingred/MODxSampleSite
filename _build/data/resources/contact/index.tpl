[[!FormIt?
  &hooks=`spam,email,redirect`
  &emailTpl=`ContactFormReport`
  &emailTo=`[[++emailsender]]`
  &redirectTo=`15`
  &submitVar=`submitContact`
]]

<p class="error">[[+fi.error.error_message]]</p>

<form method="post" action="[[~[[*id]]]]" id="EmailForm">
    <input type="hidden" name="nospam:blank" value="" />  
    
    <fieldset>
        <h3>Contact Form</h3>

        <label for="cfName">Your name:
            <span class="invalidValue">[[+fi.error.name]]</span>
        <input name="name:required" id="cfName" class="text" type="text" value="[[+fi.name]]" /> </label>

        <label for="cfEmail">Your Email Address:
            <span class="invalidValue">[[+fi.error.email]]</span>
        <input name="email:required:email" id="cfEmail" class="text" type="text" value="[[+fi.email]]" /> </label>

        <label for="cfRegarding">Regarding:
            <span class="invalidValue">[[+fi.error.regarding]]</span>
        </label>        
        <select name="subject:required" id="cfRegarding">
            <option value="General Inquiries">General Inquiries</option>
            <option value="Press">Press or Interview Request</option>
            <option value="Partnering">Partnering Opportunities</option>
        </select>

        <label for="cfMessage">Message: 
            <span class="invalidValue">[[+fi.error.message]]</span>
        <textarea name="message:required" id="cfMessage" rows="4" cols="20" value="[[+fi.message]]"></textarea>
        </label>

        <label>&nbsp;</label><input type="submit" name="submitContact" id="cfContact" class="button" value="Send This Message" />

    </fieldset>

</form>
