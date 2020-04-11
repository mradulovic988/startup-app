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

        // Profile information
        'customize'                         => 'Customize your intro',
        'detail_user'                       => 'Details that you select will be public and will be visible to all users.',
        'profile_information'               => 'Profile Information',
        'dashboard_breadcrumb'              => 'Dashboard',
        'profile_information_breadcrumb'    => 'Profile Information',
        'info_additional_information'       => 'Place where you can manage with all your additional profile information.',
        'relationship_status'               => 'Relationship status',
        'single'                            => 'Single',
        'in_relationship'                   => 'In a Relationship',
        'engaded'                           => 'Engaded',
        'married'                           => 'Married',
        'civil_partnership'                 => 'In a civil partnership',
        'domestic_partnership'              => 'In a domestic partnership',
        'open_partnership'                  => 'In a open relationship',
        'complicated'                       => 'It\'s complicated',
        'separated'                         => 'Separated',
        'divorced'                          => 'Divorced',
        'widowed'                           => 'Widowed',
        'gender'                            => 'Gender',
        'male'                              => 'Male',
        'female'                            => 'Female',
        'custom'                            => 'Custom',
        'not_to_say'                        => 'Prefer not to say',
    );

}
$localization = new Localization();