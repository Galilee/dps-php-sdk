<?php

namespace Galilee\PPM\SDK\DPS;

/**
 * Class DPS
 */
class DPS
{
    // API
    const DPS_API_AUTHENTICATION_END    = 'https://ims-na1.adobelogin.com/';
    const DPS_API_AUTHORIZATION_END     = 'https://authorization.publish.adobe.io/';
    const DPS_API_INGESTION_END         = 'https://ings.publish.adobe.io/';
    const DPS_API_PRODUCER_END          = 'https://pecs.publish.adobe.io/';
    const DPS_API_PRODUCT_END           = 'https://ps.publish.adobe.io/';
    const DPS_API_CLIENT_VERSION        = '0.0.1';

    // Entities
    const DPS_ENTITY_ARTICLE_NAME       = 'Article';
    const DPS_ENTITY_ARTICLE_NAMES      = 'Articles';

    // Others
    const DPS_OTHER_PORTAL              = 'https://publish.adobe.com/';
}