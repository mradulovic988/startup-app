<?php
/**
 * Class Localization
 *
 * All strings for the backend part of application
 */

class Localization
{
    static public function localizationString( string $select ): string
    {
        return self::$strings [ $select ] ?? '';
    }

    /**
     * @var array
     *
     * All strings inside the project
     */
    static private $strings = array(
        'customize'                         => 'Customize your intro',
        'detail_user'                       => 'Details that you select will be public and will be visible to all users.',
        'profile_information'               => 'Profile Information',
        'dashboard_breadcrumb'              => 'Dashboard',
        'profile_information_breadcrumb'    => 'Profile Information',
        'info_additional_information'       => 'Place where you can manage with all your additional profile information.',
    );

}

$localization = new Localization();