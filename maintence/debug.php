<?php
# Send debug data to an HTML comment in the output

## This may occasionally be useful when supporting a non-technical end-user. It's more secure than exposing the debug log file to the web, since the output only contains private data for the current user. But it's not ideal for development use since data is lost on fatal errors and redirects. Use on production sites is not recommended. Debug comments reveal information in page views which could potentially expose security risks.

$wgDebugComments = true;
?>
