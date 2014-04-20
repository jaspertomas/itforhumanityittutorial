<table>
<?php

    if ($handle = opendir('.')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry == "." || $entry == ".htaccess")
            {
            }
            else
            if ($entry == "..")
            {
                echo "<tr><td><a href='$entry'>Parent Directory</a>\n</td></tr>";
            }
            else
            if (is_dir($entry)) {
                echo "<tr><td><a href='$entry'>$entry/</a>\n</td>"
                ."<td align=right>Folder</td></tr>";

            }
            else
            {
            }

        }
        closedir($handle);
   }
    if ($handle = opendir('.')) {
        while (false !== ($entry = readdir($handle))) {
           
            if (is_dir($entry)) {
            }
            else
            {
                echo "<tr><td><a href='$entry'>$entry</a></td><td align=right>".filesize($entry)."</td></tr>\n";
            }
        }
        closedir($handle);
   }
?>
</table>