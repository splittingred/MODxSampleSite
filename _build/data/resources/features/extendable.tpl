<p>The MODx community has created many add-ons which can be found in the <a href="http://modxcms.com/extras/">Repository</a>,
 from image galleries and e-commerce to smaller utilities.</p>

<h2>Template Variables with Bindings</h2>
<p>TVs - Template Variables - are powerful extra fields that you can use with your documents. As an example of an advanced template
 element that returns a different thing dependent on code or data, we created an @BINDING for the name of the Login menu item. 
 This changes the menu name from Login to Logout based on your logged in state. The @BINDING as follows was placed in the default value as:
<code>@EVAL if ($modx->user->hasSessionContext($modx->context->get('key')) return 'Logout'; else return 'Login';</code></p>

<h2>Using Mootools</h2>
<p>We used some simple effects to highlight various things on the front/home page to demonstrate how easy it is to create a useful way
  to draw attention to things.</p>

<h2>Custom Forms</h2>
<p>To demonstrate how to link to custom forms, we customized the calls to the Registration system and the Login system.</p>