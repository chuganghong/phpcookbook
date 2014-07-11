<?php
/**
 *heredoc连字符
 */
$divClass = 'class1';
$urlClass = 'class2';
$listItem = 'substr';
$html = <<< END
<div class="$divClass">
<ul class="$urlClass">
<li>
END
. $listItem . '</li></div><p>Hello</p>' . 
<<<END
Are you ready?
END;

print $html;