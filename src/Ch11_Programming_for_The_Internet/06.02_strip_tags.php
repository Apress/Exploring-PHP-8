<?php

$str = <<<EOS
<!-- a comment -->
<p>
  Hi, I am a disgruntled employee.
  This is my leaving gift to the company.
  <script src="http://haxx.exploit/pwn_user.js"></script>
  <img src=x onmouseover="horribleJsGoesHere();andHere();">
</p>
For good measure:
<?php /* malicious server-side code goes here */ ?>
Ok, I'm done.
EOS;

print strip_tags($str);

print PHP_EOL;

print strip_tags($str, ['p', 'img']);

print PHP_EOL;
