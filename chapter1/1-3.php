<?php
/**
 *在heredoc的后面必须有换行或其他代码，否则会报错
 */
print <<<END
	It's funny when signs say things like:
	Original "Root" Beer
	"Free" Gift
	Shoes cleaned while "you" wait
or have other misquoted words.
	END;
END;
