<?php
namespace BullshitBingo\V1\Rest\Buzzwords;

use Zend\ServiceManager\ServiceManager;

class BuzzwordsResourceFactory
{
    public function __invoke( ServiceManager $services )
    { 
       $adapter    = $services->get( 'bullshitbingodb' );
       $mapper     = new BuzzwordMapper( $adapter);
        
        return new BuzzwordsResource( $mapper );
    }
}
