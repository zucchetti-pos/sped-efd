<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0205 extends Element implements ElementInterface
{
    const REG = 'Z0205';
    const LEVEL = 4;
    const PARENT = 'Z0200';

    protected $parameters = [
        'DESCR_ANT_ITEM' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição anterior do item',
            'format' => ''
        ],
        'DT_INI' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data inicial de utilização da descrição do item',
            'format' => ''
        ],
        'DT_FIM' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data final de utilização da descrição do item',
            'format' => ''
        ],
        'COD_ANT_ITEM' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código&nbsp;&nbsp; anterior&nbsp;&nbsp; do&nbsp;&nbsp; item&nbsp;&nbsp; com&nbsp;&nbsp; relação&nbsp;&nbsp; à&nbsp;&nbsp; última informação apresentada.',
            'format' => ''
        ],

    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
