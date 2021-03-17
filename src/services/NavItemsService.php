<?php
namespace craftquest\services;
use craft\base\Component;

class NavItemsService extends Component
{

    public function buildCustomNav($event, $customNavItems)
    {
        foreach ($customNavItems as $navItem)
        {
            $event->navItems[] = $navItem;
        }

        return $event->navItems;
    }

}