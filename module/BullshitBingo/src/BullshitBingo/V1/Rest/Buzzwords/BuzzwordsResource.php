<?php
namespace BullshitBingo\V1\Rest\Buzzwords;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class BuzzwordsResource extends AbstractResourceListener
{
    /**
     *
     * @var BuzzwordMapper
     */
    protected $mapper;
 
    public function __construct( BuzzwordMapper $mapper)
    {
        $this->mapper = $mapper;
    }
    
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create( $data )
    {
        $buzzword = new BuzzwordsEntity();
        $buzzword->exchangeArray( get_object_vars($data) );
        $this->mapper->insert( $buzzword );
        
        return $this->mapper->fetch( $buzzword );
        
        //return new ApiProblem(405, 'The POST method has not been defined');
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete( $id )
    {
        $buzzword       = new BuzzwordsEntity();
        $buzzword->id   = $id;
        
        $this->mapper->delete( $buzzword );
        
        return new ApiProblem( 200, 'The entity has been deleted', null, 'Success' );
        
        //return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList( $data )
    {
        $this->mapper->deleteAll();
        
        return new ApiProblem( 200, 'The collection has been deleted', null, 'Success' );
        
        //return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch( $id )
    {
        $buzzword       = new BuzzwordsEntity();
        $buzzword->id   = $id;
        
        return $this->mapper->fetch( $buzzword );
        
        //return new ApiProblem(405, 'The GET method has not been defined for individual resources');
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        return $this->mapper->fetchAll();
        
        //return new ApiProblem(405, 'The GET method has not been defined for collections');
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch( $id, $data )
    {   
        $data->id = $id;
        $buzzword = new BuzzwordsEntity();
        $buzzword->exchangeArray( get_object_vars($data) );
        
        $this->mapper->update( $buzzword );
        
        return $this->mapper->fetch( $buzzword );
        
        //return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}
