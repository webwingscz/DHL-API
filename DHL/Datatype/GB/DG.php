<?php

namespace DHL\Datatype\GB;

use DHL\Datatype\Base;


class DG extends Base
{
    // https://api.dhlglobalmail.com/docs/appendix.html#dangerous-goods
    const PI965 = '965'; // Sample batteries, power banks
    const PI966 = '966'; // Packed with Equipment
    const PI967 = '967'; // Contained in Equipment

    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'DG_ContentID' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Dangerous Goods Content ID',
            'enumeration' => '965,966,967',
        ),
        'DG_LabelDesc' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dangerous Goods Label Description',
        ),
        'DG_NetWeight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dangerous Goods Net Weight. (For Dry Ice, Net Weight and UOM must be defined in DG element.)',
        ),
        'DG_UOM' => array(
            'type' => 'DG_UOM',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dangerous Goods Unit of Measurement. (For Dry Ice, Net Weight and UOM must be defined in DG element.)',
        ),
        'DG_UNCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dangerous Goods with Excepted Quantities attributes using UN code',
        ),
    );
}