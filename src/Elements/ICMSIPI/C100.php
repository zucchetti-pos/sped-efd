<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C100: NOTA FISCAL (CÓDIGO 01), NOTA FISCAL AVULSA (CÓDIGO 1B),
 * NOTA FISCAL DE PRODUTOR (CÓDIGO 04), NF-e (CÓDIGO 55) e NFC-e (CÓDIGO 65).
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C100 extends Element implements ElementInterface
{
    const REG = 'C100';
    const LEVEL = 2;
    const PARENT = 'C001';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do tipo de operação',
            'format' => ''
        ],
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do emitente do documento fiscal',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => false,
            'info' => 'Código do participante (campo 02 do Registro 0150):',
            'format' => ''
        ],
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscalValor total do estoque',
            'format' => ''
        ],
        'COD_SIT' => [
            'type' => 'numeric',
            'regex' => '^(00|01|02|03|04|05|06|07|08)$',
            'required' => true,
            'info' => 'Código da situação do documento fiscal',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^.{1,3}$',
            'required' => false,
            'info' => 'Série do documento fiscal',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^[0-9]{1,9}$',
            'required' => true,
            'info' => 'Número do documento fiscal',
            'format' => ''
        ],
        'CHV_NFE' => [
            'type' => 'string',
            'regex' => '^[0-9A-Z]{44}$',
            'required' => false,
            'info' => 'Chave da Nota Fiscal Eletrônica',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da emissão do documento fiscal',
            'format' => ''
        ],
        'DT_E_S' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da entrada ou da saída',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do documento fiscal',
            'format' => '15v2'
        ],
        'IND_PGTO' => [
            'type' => 'string',
            'regex' => '^(0|1|2|9)$',
            'required' => false,
            'info' => 'Indicador do tipo de pagamento',
            'format' => ''
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do desconto',
            'format' => '15v2'
        ],
        'VL_ABAT_NT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Abatimento não tributado e não comercial Ex. desconto ICMS nas remessas para ZFM.',
            'format' => '15v2'
        ],
        'VL_MERC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total das mercadorias e serviços',
            'format' => '15v2'
        ],
        'IND_FRT' => [
            'type' => 'string',
            'regex' => '^(0|1|2|3|4|9)$',
            'required' => false,
            'info' => 'Indicador do tipo do frete',
            'format' => ''
        ],
        'VL_FRT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do frete indicado no documento fiscal',
            'format' => '15v2'
        ],
        'VL_SEG' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do seguro indicado no documento fiscal',
            'format' => '15v2'
        ],
        'VL_OUT_DA' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor de outras despesas acessórias',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do ICMS',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS',
            'format' => '15v2'
        ],
        'VL_BC_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do ICMS substituição tributária',
            'format' => '15v2'
        ],
        'VL_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS retido por substituição tributária',
            'format' => '15v2'
        ],
        'VL_IPI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS',
            'format' => '15v2'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS',
            'format' => '15v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS',
            'format' => '15v2'
        ],
        'VL_PIS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do PIS retido por substituição tributária',
            'format' => '15v2'
        ],
        'VL_COFINS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total da COFINS retido por substituição tributária',
            'format' => '15v2'
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
        if ($this->std->cod_mod == 65 and $this->std->cod_mod == 55) {
            if (empty($this->std->chv_nfe)) {
                throw new \InvalidArgumentException("[" . self::REG . "] " .
                    " Dígito verificador incorreto no campo campo chave do " .
                    "conhecimento de transporte eletrônico (CHV_CTE)");
            }
        }
        if (!empty($this->std->chv_nfe) and !Keys::isValid($this->std->chv_nfe)) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Dígito verificador incorreto no campo campo chave da " .
                "nota fiscal eletronica (CHV_NFE)");
        }

        return true;
    }
}
