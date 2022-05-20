<?php
/**
 * Matomo - free/libre analytics platform
 * Plugin developed for Web Analytics Italia (https://webanalytics.italia.it)
 * 
 * Some code is reused from Matomo Piwik\Plugins\SitesManager\SitesManager.
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\WaiCustom;

use Piwik\Tracker\Model as TrackerModel;

/**
 * API for plugin WaiCustom
 *
 * @method static \Piwik\Plugins\WaiCustom\API getInstance()
 */
class API extends \Piwik\Plugin\API
{
    /**
     * Returns wether the website has tracked any traffic
     *
     * @throws Exception if the site ID doesn't exist or the user doesn't have access to it
     * @param int $idSite
     * @return boolean
     */
    public static function isActive($siteId)
    {
        $trackerModel = new TrackerModel();
        return !$trackerModel->isSiteEmpty($siteId);
    }
}
