<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E250 extends Element implements ElementInterface
{
    const REG = 'E250';
    const LEVEL = 4;
    const PARENT = 'E210';

    protected $parameters = [
        'COD_OR' => [
            'type' => 'string',
            'regex' => '^[000|001|002|003|004|005|006|090|999]+$',
            'required' => true,
            'info' => 'Código da obrigação a recolher, conforme a Tabela 5.4',
            'format' => ''
        ],
        'VL_OR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da obrigação ICMS ST a recolher',
            'format' => '15v2'
        ],
        'DT_VCTO' => [
            'type' => 'integer',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data de vencimento da obrigação',
            'format' => ''
        ],
        'COD_REC' => [
            'type' => 'string',
            'regex' => '^.*$',
            'required' => true,
            'info' => 'Código de receita referente à obrigação, próprio da unidade da '
                . 'federação do contribuinte substituído.',
            'format' => ''
        ],
        'NUM_PROC' => [
            'type' => 'string',
            'regex' => '^.{1,15}$',
            'required' => false,
            'info' => 'Número do processo ou auto de infração ao qual a obrigação está vinculada, se houver',
            'format' => ''
        ],
        'IND_PROC' => [
            'type' => 'string',
            'regex' => '^[0|1|2|9]$',
            'required' => false,
            'info' => 'Indicador da origem do processo: '
                . '0- SEFAZ; '
                . '1- Justiça Federal; '
                . '2- Justiça Estadual; '
                . '9- Outros',
            'format' => ''
        ],
        'PROC' => [
            'type' => 'string',
            'regex' => '^.*$',
            'required' => false,
            'info' => 'Descrição resumida do processo que embasou o lançamento',
            'format' => ''
        ],
        'TXT_COMPL' => [
            'type' => 'string',
            'regex' => '^.*$',
            'required' => false,
            'info' => 'Descrição complementar das obrigações a recolher',
            'format' => ''
        ],
        'MES_REF' => [
            'type' => 'integer',
            'regex' => '^((?!(13^))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Informe o mês de referência no formato “mmaaaa”',
            'format' => ''
        ]
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }

    public function postValidation()
    {
        /*
         * Campo 06 (NUM_PROC) Validação: se este campo estiver preenchido, os campos IND_PROC e PROC deverão
         * estar preenchidos. Se este campo não estiver preenchido, os campos IND_PROC e PROC não deverão estar
         * preenchidos.
         */
        if (!empty($this->std->num_proc) && (($this->std->ind_proc != '0' && empty($this->std->ind_proc)) || empty($this->std->proc))) {
            throw new \InvalidArgumentException("[" . self::REG . "] Se o campo NUM_PROC estiver preenchido, "
                . "os campos IND_PROC e PROC deverão estar preenchidos.");
        }
        if (empty($this->std->num_proc) && (!empty($this->std->ind_proc) || !empty($this->std->proc))) {
            throw new \InvalidArgumentException("[" . self::REG . "] Se o campo NUM_PROC não estiver preenchido, "
                . "os campos IND_PROC e PROC não deverão estar preenchidos.");
        }
    }
}
