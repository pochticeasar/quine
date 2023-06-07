<?php
  function addchar($str) {
    $ans = "";
    for($i=0; $i<strlen($str); $i++) {
     switch($str[$i]) {
        case '"':
          $ans.="\\\"";
          break;
        case '$':
          $ans.="\\$";
          break;
        case "\n":
          $ans.="\\n"; 
          break;
        case "\'":
          $ans.="\\\'";
          break;
        case "\\":
          $ans.="\\\\";
          break;
        default:
          $ans.=$str[$i];
          break;
      }
    }
   return $ans;
  }
	$s = "<?php\n  function addchar(\$str) {\n    \$ans = \"\";\n    for(\$i=0; \$i<strlen(\$str); \$i++) {\n     switch(\$str[\$i]) {\n        case '\"':\n          \$ans.=\"\\\\\\\"\";\n          break;\n        case '\$':\n          \$ans.=\"\\\\\$\";\n          break;\n        case \"\\n\":\n          \$ans.=\"\\\\n\"; \n          break;\n        case \"\\'\":\n          \$ans.=\"\\\\\\'\";\n          break;\n        case \"\\\\\":\n          \$ans.=\"\\\\\\\\\";\n          break;\n        default:\n          \$ans.=\$str[\$i];\n          break;\n      }\n    }\n   return \$ans;\n  }\n	\$s = \"#\";\n	\$a = strpos(\$s, \"#\");\n	\$ans = substr(\$s, 0, \$a);\n	\$ans.= addchar(\$s);\n	\$ans.= substr(\$s, \$a + 1, strlen(\$s) - \$a);\n	echo \$ans;\n?>\n";
	$a = strpos($s, "#");
	$ans = substr($s, 0, $a);
	$ans.= addchar($s);
	$ans.= substr($s, $a + 1, strlen($s) - $a);
	echo $ans;
?>