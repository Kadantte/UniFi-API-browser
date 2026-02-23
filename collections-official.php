<?php
/**
 * Copyright © 2024, Art of WiFi
 * www.artofwifi.net
 *
 * @license This file is subject to the MIT license bundled with this package in the file LICENSE.md
 */

/**
 * This array defines the menu options for the official UniFi Network Application API collections.
 *
 * Each entry maps to a resource and method on the UnifiClient:
 *   $client->{resource}()->{method}()
 *
 * 'needs_site' indicates whether the endpoint requires a site ID to be set.
 * 'paginated' indicates whether the endpoint supports offset/limit pagination.
 */
$collections = [
    [
        'label'   => 'Application',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'application info',
                'resource'   => 'applicationInfo',
                'method'     => 'get',
                'params'     => [],
                'needs_site' => false,
                'paginated'  => false,
            ],
        ],
    ],
    [
        'label'   => 'Sites',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list sites',
                'resource'   => 'sites',
                'method'     => 'list',
                'params'     => [],
                'needs_site' => false,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'Devices',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list adopted devices',
                'resource'   => 'devices',
                'method'     => 'listAdopted',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list pending devices',
                'resource'   => 'devices',
                'method'     => 'listPending',
                'params'     => [],
                'needs_site' => false,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'Clients',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list connected clients',
                'resource'   => 'clients',
                'method'     => 'list',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'Networks',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list networks',
                'resource'   => 'networks',
                'method'     => 'list',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'WiFi',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list WiFi broadcasts',
                'resource'   => 'wifiBroadcasts',
                'method'     => 'list',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'Hotspot',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list vouchers',
                'resource'   => 'hotspot',
                'method'     => 'listVouchers',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'Firewall',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list firewall zones',
                'resource'   => 'firewall',
                'method'     => 'listZones',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list firewall policies',
                'resource'   => 'firewall',
                'method'     => 'listPolicies',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type' => 'divider',
            ],
            [
                'type'       => 'collection',
                'label'      => 'list ACL rules',
                'resource'   => 'aclRules',
                'method'     => 'list',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type' => 'divider',
            ],
            [
                'type'       => 'collection',
                'label'      => 'list traffic matching lists',
                'resource'   => 'trafficMatchingLists',
                'method'     => 'list',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type' => 'divider',
            ],
            [
                'type'       => 'collection',
                'label'      => 'list DNS policies',
                'resource'   => 'dnsPolicies',
                'method'     => 'list',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'Switching',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list switch stacks',
                'resource'   => 'switching',
                'method'     => 'listSwitchStacks',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list MC-LAG domains',
                'resource'   => 'switching',
                'method'     => 'listMcLagDomains',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list LAGs',
                'resource'   => 'switching',
                'method'     => 'listLags',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
        ],
    ],
    [
        'label'   => 'Supporting Resources',
        'options' => [
            [
                'type'       => 'collection',
                'label'      => 'list WAN interfaces',
                'resource'   => 'supportingResources',
                'method'     => 'listWanInterfaces',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list site-to-site VPN tunnels',
                'resource'   => 'supportingResources',
                'method'     => 'listSiteToSiteVpnTunnels',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list VPN servers',
                'resource'   => 'supportingResources',
                'method'     => 'listVpnServers',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list RADIUS profiles',
                'resource'   => 'supportingResources',
                'method'     => 'listRadiusProfiles',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list device tags',
                'resource'   => 'supportingResources',
                'method'     => 'listDeviceTags',
                'params'     => [],
                'needs_site' => true,
                'paginated'  => true,
            ],
            [
                'type' => 'divider',
            ],
            [
                'type'       => 'collection',
                'label'      => 'list DPI categories',
                'resource'   => 'supportingResources',
                'method'     => 'listDpiCategories',
                'params'     => [],
                'needs_site' => false,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list DPI applications',
                'resource'   => 'supportingResources',
                'method'     => 'listDpiApplications',
                'params'     => [],
                'needs_site' => false,
                'paginated'  => true,
            ],
            [
                'type'       => 'collection',
                'label'      => 'list countries',
                'resource'   => 'supportingResources',
                'method'     => 'listCountries',
                'params'     => [],
                'needs_site' => false,
                'paginated'  => true,
            ],
        ],
    ],
];
