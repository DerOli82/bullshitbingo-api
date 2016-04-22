<?php
namespace BullshitBingo\V1\Rest\Buzzwords;

class BuzzwordsEntity
{
    public $id;
    public $text;
    public $marked;
    public $modifiedat;

    public function getArrayCopy()
    {
        $array = array();
        
        if( isset( $this->id ) ) { $array[ 'id' ] = $this->id; }
        if( isset( $this->text ) ) { $array[ 'text' ] = $this->text; }
        if( isset( $this->marked ) ) { $array[ 'marked' ] = $this->marked; }
        if( isset( $this->modifiedat ) ) { $array[ 'modifiedat' ] = $this->modifiedat; }
        
        return $array;
    }
 
    public function exchangeArray( array $array )
    {
        $this->id           = isset( $array['id'] ) ? $array['id'] : null;
        $this->text         = isset( $array['text'] ) ? $array['text'] : null;
        $this->marked       = isset( $array['marked'] ) ? $array['marked'] : 0;
        $this->modifiedat   = isset( $array['modifiedat'] ) ? $array['modifiedat'] : null;
    }    
}
