<table>
<thead>
<tr>
<th>Attribute</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>data-request</strong></td>
<td>specifies the AJAX handler name.</td>
</tr>
<tr>
<td><strong>data-request-confirm</strong></td>
<td>specifies a confirmation message. The confirmation is displayed before the request is sent. If the user clicks the Cancel button the request isn't sent.</td>
</tr>
<tr>
<td><strong>data-request-redirect</strong></td>
<td>specifies a URL to redirect the browser after the successful AJAX request.</td>
</tr>
<tr>
<td><strong>data-request-update</strong></td>
<td>specifies a list of partials and page elements (CSS selectors) to update. The format is as follows: <code>partial: selector, partial: selector</code>. Usage of quotes is required in some cases, for example: <code>'my-partial': '#myelement'</code>. If the selector string is prepended with the <code>@</code> symbol, the content received from the server will be appended to the element, instead of replacing the existing content. If the selector string is prepended with the <code>^</code> symbol, the content will be prepended instead.</td>
</tr>
<tr>
<td><strong>data-request-data</strong></td>
<td>specifies additional POST parameters to be sent to the server. The format is following: <code>var: value, var: value</code>. Use quotes if needed: <code>var: 'some string'</code>. The attribute can be used on the triggering element, for example on the button that also has the <code>data-request</code> attribute, on the closest element of the triggering element and on the parent form element. The framework merges values of the <code>data-request-data</code> attributes. If the attribute on different elements defines parameters with the same name, the framework uses the following priority: the triggering element <code>data-request-data</code>, the closer parent elements <code>data-request-data</code>, the form input data.</td>
</tr>
<tr>
<td><strong>data-request-before-update</strong></td>
<td>specifies JavaScript code to execute directly before the page contents are updated. Inside the JavaScript code you can access the following variables: <code>this</code> (the page element triggered the request), the <code>context</code> object, the <code>data</code> object received from the server, the <code>textStatus</code> text string, and the <code>jqXHR</code> object.</td>
</tr>
<tr>
<td><strong>data-request-success</strong></td>
<td>specifies JavaScript code to execute after the request is successfully completed. Inside the JavaScript code you can access the following variables: <code>this</code> (the page element triggered the request), the <code>context</code> object, the <code>data</code> object received from the server, the <code>textStatus</code> text string, and the <code>jqXHR</code> object.</td>
</tr>
<tr>
<td><strong>data-request-error</strong></td>
<td>specifies JavaScript code to execute if the request encounters an error. Inside the JavaScript code you can access the following variables: <code>this</code> (the page element triggered the request), the <code>context</code> object, the <code>textStatus</code> text string, and the <code>jqXHR</code> object.</td>
</tr>
<tr>
<td><strong>data-request-complete</strong></td>
<td>specifies JavaScript code to execute if the request is successfully completed or encounters an error. Inside the JavaScript code you can access the following variables: <code>this</code> (the page element triggered the request), the <code>context</code> object, the <code>textStatus</code> text string, and the <code>jqXHR</code> object.</td>
</tr>
<tr>
<td><strong>data-request-loading</strong></td>
<td>specifies a CSS selector for an element to be displayed while the request runs. You can use this option to show the AJAX loading indicator. The feature uses jQuery's <code>show()</code> and <code>hide()</code> functions to manage the element visibility.</td>
</tr>
<tr>
<td><strong>data-request-form</strong></td>
<td>explicitly specify a form element to use for sourcing the form data. If this is unspecified, the closest form to the triggering element is used, including if the element itself is a form.</td>
</tr>
<tr>
<td><strong>data-request-flash</strong></td>
<td>when specified this option instructs the server to clear and send any flash messages with the response. This option is also used by the <a href="../ajax/extras#ajax-flash">extra features</a>.</td>
</tr>
<tr>
<td><strong>data-request-files</strong></td>
<td>when specified the request will accept file uploads, this requires <code>FormData</code> interface support by the browser.</td>
</tr>
<tr>
<td><strong>data-track-input</strong></td>
<td>can be applied to a text, number, or password input field that also has the <code>data-request</code> attribute. When defined, the input field automatically sends an AJAX request when a user types something in the field. The optional attribute value can define the interval, in milliseconds, the framework waits before it sends the requests.</td>
</tr>
</tbody>
</table>
