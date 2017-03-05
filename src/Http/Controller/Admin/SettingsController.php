<?php namespace Emergingdzns\AccelerantTheme\Http\Controller\Admin;

use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class SettingsController
 *
 */
class SettingsController extends AdminController
{

    /**
     * Save the navigation order.
     *
     * @param SettingRepositoryInterface $settings
     */
    public function navigation(SettingRepositoryInterface $settings)
    {
        $settings->set('emergingdzns.theme.accelerant::navigation', serialize($this->request->get('navigation')));
    }
}
