<?php

return [
    // disable some diagnostics for performance reasons
    'diagnostics.disabled'  => \DI\add([
        \DI\get('Piwik\Plugins\Diagnostics\Diagnostic\ReportInformational')
    ]),
];
