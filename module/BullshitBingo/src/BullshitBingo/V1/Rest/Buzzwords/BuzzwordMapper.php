<?php
namespace BullshitBingo\V1\Rest\Buzzwords;

use Zend\Db\Sql\Select;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Db\TableGateway\TableGateway;

class BuzzwordMapper
{
    /**
     *
     * @var TableGateway 
     */
    protected $table;
    
    public function __construct( AdapterInterface $adapter )
    {
        $this->table = new TableGateway( 'buzzwords', $adapter );
    }
    
    public function fetch( BuzzwordsEntity $buzzword )
    {
        $result = $this->table->select( array( 'id' => $buzzword->id ) )->toArray();
        
        if( !$result )
        {
            return false;
        }
        $buzzword->exchangeArray( $result[0] );
        
        return $buzzword;
    }
    
    public function fetchAll()
    {
        $select             = new Select( 'buzzwords' );
        $paginatorAdapter   = new DbSelect( $select, $this->table->getAdapter() );
        $collection         = new BuzzwordsCollection( $paginatorAdapter );
        
        return $collection;        
    }
    
    public function insert( BuzzwordsEntity $buzzword )
    {
        $datetime = new \DateTime();
        $buzzword->modifiedat = $datetime->format( 'Y-m-d H:i:s' );
        
        return $this->table->insert( $buzzword->getArrayCopy() );
    }
    
    public function update( BuzzwordsEntity $buzzword )
    {
        $datetime = new \DateTime();
        $buzzword->modifiedat = $datetime->format( 'Y-m-d H:i:s' );

        $this->table->update( $buzzword->getArrayCopy(), array( 'id' => $buzzword->id ));
    }
    
    public function delete( BuzzwordsEntity $buzzword )
    {
        $this->table->delete( array( 'id' => $buzzword->id ) );
    }
        
    public function deleteAll()
    {
        $this->table->getAdapter()->createStatement( 'DELETE FROM buzzwords' )->execute();
    }
    
}
