<?php namespace Emergingzns\AccelerantTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Ui\ControlPanel\Component\Navigation\Event\SortNavigation;
use Illuminate\Pagination\AbstractPaginator;
use Pyrocms\AccelerantTheme\Http\Controller\Admin\PreferencesController;
use Pyrocms\AccelerantTheme\Http\Controller\Admin\SettingsController;
use Pyrocms\AccelerantTheme\Listener\ApplySorting;

/**
 * Class AccelerantThemeServiceProvider
 *
 */
class AccelerantThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon listeners.
     *
     * @var array
     */
    protected $listeners = [
        SortNavigation::class => [
            ApplySorting::class,
        ],
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/settings/themes/pyrocms.theme.accelerant/navigation'    => SettingsController::class . '@navigation',
        'admin/preferences/themes/pyrocms.theme.accelerant/navigation' => PreferencesController::class . '@navigation',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        AbstractPaginator::$defaultView       = 'emergingdzns.theme.accelerant::pagination/bootstrap-4';
        AbstractPaginator::$defaultSimpleView = 'streams::pagination/simple-bootstrap-4';
    }
}
