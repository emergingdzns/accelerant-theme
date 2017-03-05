<?php namespace Emergingzns\AccelerantTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Pagination\AbstractPaginator;

/**
 * Class AccelerantThemeServiceProvider
 *
 */
class AccelerantThemeServiceProvider extends AddonServiceProvider
{

    /**
     * Register the addon.
     */
    public function register()
    {
        AbstractPaginator::$defaultView       = 'emergingdzns.theme.accelerant::pagination/bootstrap-4';
        AbstractPaginator::$defaultSimpleView = 'streams::pagination/simple-bootstrap-4';
    }
}
