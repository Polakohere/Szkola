<?php
$var = "123";
echo '\'apostrofy$var\'';
echo "<br/>\"cudzysłowie$var\"";
echo <<<END
<br/>
    heredoc $var
END;
echo <<<'EOD'
<br/>nowdoc $var
EOD;
echo <<<'EOT'
<br/>nowdoc $var
EOT;
?>