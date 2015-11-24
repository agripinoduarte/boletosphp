<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<html>
  <head>
    <title><?= $boleto->getCedente()->getNome() ?></title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <style type="text/css">
      .cp {  font: bold 10px Arial; color: black}
      .ti {  font: 9px Arial, Helvetica, sans-serif}
      .ld { font: bold 15px Arial; color: #000000}
      .ct { font: 9px "Arial Narrow"; COLOR: #000033}
      .cn { font: 9px Arial; COLOR: black }
      .bc { font: bold 20px Arial; color: #000000 }
      .ld2 { font: bold 12px Arial; color: #000000 }
    </style>
  </head>

  <body text="#000000" bgColor="#ffffff" topMargin="0" rightMargin="0">
    <table width="666" cellspacing="0" cellpadding="0" border="0">
      <tr>
        <td valign="top" class="cp">
          <div align="center">Instruções de Impressão</div>
        </td>
      </tr>
      <tr>
        <td valign="top" class="cp">
          <div align="left">
            <p>
              <li>Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (Não use modo econômico).</li>
              <li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens mínimas à esquerda e à direita do formulário.</li>
              <li>Corte na linha indicada. Não rasure, risque, fure ou dobre a região onde se encontra o código de barras.</li>
              <li>Caso não apareça o código de barras no final, clique em F5 para atualizar esta tela.</li>
              <li>Caso tenha problemas ao imprimir, copie a seqüencia numérica abaixo e pague no caixa eletrônico ou no internet banking:</li>
              <br />
              <span class="ld2">
                &nbsp;&nbsp;&nbsp;&nbsp;Linha Digitável: &nbsp;<?= $boleto->getLinhaDigitavel() ?><br />
                &nbsp;&nbsp;&nbsp;&nbsp;Valor: &nbsp;&nbsp;R$ <?= $boleto->getValorBoleto(true) ?><br />
              </span>
            </p>
          </div>
        </td>
      </tr>
    </table>
    <br />
    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tbody>
        <tr>
          <td class="ct" width="666">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemSeis() ?>" width="665" border="0">
          </td>
        </tr>
        <tr>
          <td class="ct" width="666">
            <div align="right">
              <b class="cp">Recibo do Sacado</b>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <table width="666" cellspacing="5" cellpadding="0" border="0">
      <tr>
        <td width="41"></td>
      </tr>
    </table>
    <table width="666" cellspacing="5" cellpadding="0" border="0" align=Default>
      <tr>
        <td width="41"><img src="data:image/jpg;base64, <?= $boleto->getCedente()->getLogo() ?>"></td>
        <td class="ti" width=455><?= $boleto->getCedente()->getNome() ?> <br />
          <?= $boleto->getCedente()->getCpfCnpj() ?><br />
          <?= $boleto->getCedente()->getEndereco() ?><br />
          <?= $boleto->getCedente()->getCidadeUf() ?><br />
        </td>
        <td align="right" width="150" class="ti">&nbsp;</td>
      </tr>
    </table>
    <br />
    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tr>
        <td class="cp" width="150">
          <span class="campo"><img src="data:image/jpg;base64, <?= $boleto->getLogoBanco() ?>" border="0"></span>
        </td>
        <td width="3" valign="bottom">
          <img height="22" src="data:image/png;base64, <?= $boleto->getImagemTres() ?>" width="2" border="0">
        </td>
        <td class="cp"t width="58" valign="bottom">
          <div align="center"><font class="bc"><?= $boleto->getCodigoBancoDv() ?></font></div>
        </td>
        <td width="3" valign="bottom">
          <img height="22" src="data:image/png;base64, <?= $boleto->getImagemTres() ?>" width="2" border="0">
        </td>
        <td class="ld" align="right" width="453" valign="bottom">
          <span class="ld">
            <span class="campotitulo">
              <?= $boleto->getLinhaDigitavel() ?>
            </span>
          </span>
        </td>
      </tr>
      <tbody>
        <tr>
          <td colspan="5">
            <img height="2" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="666" border="0">
          </td>
        </tr>
      </tbody>
    </table>



    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="298" height="13">Cedente</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="126" height="13">Agência/Código do Cedente</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="34" height="13">Espécie</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="53" height="13">Quantidade</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="120" height="13">Nosso número</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="298" height="12">
            <span class="campo"><?= $boleto->getCedente()->getNome() ?></span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="126" height="12">
            <span class="campo"><?= $boleto->getAgenciaCodigoBoleto() ?></span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="34" height="12">
            <span class="campo"><?= $boleto->getEspecie() ?></span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="53" height="12">
            <span class="campo"><?= $boleto->getQuantidade() ?></span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="120" height="12">
            <span class="campo"><?= $boleto->getNossoNumero() ?></span>
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="298" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="298" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="126" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="126" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="34" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="34" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="53" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="53" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="120" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="120" border="0">
          </td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" colspan="3" height="13">Número do documento</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="132" height="13">CPF/CNPJ</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="134" height="13">Vencimento</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="180" height="13">Valor documento</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" colspan="3" height="12">
            <span class="campo">
              <?= $boleto->getNumeroDocumento() ?>
            </span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="132" height="12">
            <span class="campo">
              <?= $boleto->getCedente()->getCpfCnpj() ?>
            </span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="134" height="12">
            <span class="campo">
              <?= $boleto->getDataVencimento()->format('d/m/Y') ?>
            </span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="180" height="12">
            <span class="campo">
              <?= $boleto->getValorBoleto(true) ?>
            </span>
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="113" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="113" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="72" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="72" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="132" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="132" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="134" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="134" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="180" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
          </td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="113" height="13">(-) Desconto / Abatimentos</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="112" height="13">(-) Outras deduções</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="113" height="13">(+) Mora / Multa</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="113" height="13">(+) Outros acréscimos</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="180" height="13">(=) Valor cobrado</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="113" height="12">
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="112" height="12">
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="113" height="12">
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="113" height="12">
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="180" height="12">
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="113" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="113" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="112" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="112" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="113" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="113" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="113" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="113" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="180" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
          </td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="659" height="13">Sacado</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="659" height="12">
            <span class="campo">
              <?= $boleto->getSacado()->getNome() ?>
            </span>
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="659" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="659" border="0">
          </td>
        </tr>
      </tbody>
    </table>


    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct"  width="7" height="12"></td>
          <td class="ct"  width="564">Demonstrativo</td>
          <td class="ct"  width="7" height="12"></td>
          <td class="ct"  width="88">Autenticação mecânica</td>
        </tr>
        <tr>
          <td width="7" ></td>
          <td class="cp" width="564">
            <span class="campo">
              <?= $boleto->getObservacao1() ?><br />
              <?= $boleto->getObservacao2() ?><br />
              <?= $boleto->getObservacao3() ?><br />
            </span>
          </td>
          <td  width="7" ></td>
          <td  width="88"></td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tbody>
        <tr>
          <td width="7">
          </td>
          <td  width="500" class="cp">
            <br /><br /><br />
          </td>
          <td width="159"></td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tr>
        <td class="ct" width="666"></td>
      </tr>
      <tbody>
        <tr>
          <td class="ct" width="666">
            <div align="right">Corte na linha pontilhada</div>
          </td>
        </tr>
        <tr>
          <td class="ct" width="666">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemSeis() ?>" width="665" border="0">
          </td>
        </tr>
      </tbody>
    </table>
    <br />

    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tr>
        <td class="cp" width="150">
          <span class="campo">
            <img src="data:image/jpg;base64, <?= $boleto->getLogoBanco() ?>" width="150" height="40" border="0">
          </span>
        </td>
        <td width="3" valign="bottom">
          <img height="22" src="data:image/png;base64, <?= $boleto->getImagemTres() ?>" width="2" border="0">
        </td>
        <td class="cp"t width="58" valign="bottom">
          <div align="center">
            <font class="bc">
              <?= $boleto->getCodigoBancoDv() ?>
            </font>
          </div>
        </td>
        <td width="3" valign="bottom">
          <img height="22" src="data:image/png;base64, <?= $boleto->getImagemTres() ?>" width="2" border="0">
        </td>
        <td class="ld" align="right" width="453" valign="bottom">
          <span class="ld">
            <span class="campotitulo">
              <?= $boleto->getLinhaDigitavel() ?>
            </span>
          </span>
        </td>
      </tr>
      <tbody>
        <tr>
          <td colspan="5">
            <img height="2" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="666" border="0">
          </td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="472" height="13">Local de pagamento</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="180" height="13">Vencimento</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="472" height="12">Pagável em qualquer Banco até o vencimento</td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="180" height="12">
            <span class="campo"><?= $boleto->getDataVencimento()->format('d/m/Y') ?></span>
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="472" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="472" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="180" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
          </td>
        </tr>
      </tbody>
    </table>


    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="472" height="13">Cedente</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="180" height="13">Agência/Código cedente</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="472" height="12">
            <span class="campo"><?= $boleto->getCedente()->getNome() ?></span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="180" height="12">
            <span class="campo">
              <?= $boleto->getAgenciaCodigoBoleto() ?>
            </span>
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="472" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="472" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="180" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
          </td>
        </tr>
      </tbody>
    </table>


    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="113" height="13">Data do documento</td>
          <td class="ct" valign="top" width="7" height="13"> 
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="153" height="13">N<u>o</u> documento</td>
          <td class="ct" valign="top" width="7" height="13"> 
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="62" height="13">Espécie doc.</td>
          <td class="ct" valign="top" width="7" height="13"> 
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="34" height="13">Aceite</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="82" height="13">Data processamento</td>
          <td class="ct" valign="top" width="7" height="13"> 
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="180" height="13">Nosso número</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="113" height="12">
            <div align=left>
              <span class="campo">
                <?= $boleto->getDataEmissao()->format("d/m/Y") ?>
              </span>
            </div>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="153" height="12">
            <span class="campo">
              <?= $boleto->getNumeroDocumento() ?>
            </span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="62" height="12">
            <div align=left>
              <span class="campo">
                <?= $boleto->getEspecieDoc() ?>
              </span>
            </div>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="34" height="12">
            <div align=left>
              <span class="campo">
                <?= $boleto->getAceite() ?>
              </span>
            </div>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="82" height="12">
            <div align=left>
              <span class="campo">
                <?= $boleto->getDataProcessamento()->format('d/m/Y') ?>
              </span>
            </div>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="180" height="12">
            <span class="campo">
              <?= $boleto->getNossoNumero() ?>
            </span>
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="113" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="113" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="153" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="153" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="62" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="62" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="34" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="34" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="82" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="82" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="180" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
          </td>
        </tr>
      </tbody>
    </table>



    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13"> 
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" colspan="3" height="13">Uso do banco</td>
          <td class="ct" valign="top" height="13" width="7"> 
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="83" height="13">Carteira</td>
          <td class="ct" valign="top" height="13" width="7">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="53" height="13">Espécie</td>
          <td class="ct" valign="top" height="13" width="7">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="123" height="13">Quantidade</td>
          <td class="ct" valign="top" height="13" width="7">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="72" height="13">Valor Documento</td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="180" height="13">(=) Valor documento</td>
        </tr>
        <tr> 
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td valign="top" class="cp" height="12" colspan="3">
            <div align="left">
            </div>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="83">
            <div align=left>
              <span class="campo">
                <?= $boleto->getCarteira() ?>
              </span>
            </div>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="53">
            <div align=left>
              <span class="campo">
                <?= $boleto->getEspecie() ?>
              </span>
            </div>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="123">
            <span class="campo">
              <?= $boleto->getQuantidade() ?>
            </span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top"  width="72">
            <span class="campo">
              <?= $boleto->getValorUnitario() ?>
            </span>
          </td>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" align="right" width="180" height="12">
            <span class="campo">
              <?= $boleto->getValorBoleto(true) ?>
            </span>
          </td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1"> 
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="75" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="31" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="31" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="83" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="83" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="53" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="53" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="123" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="123" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="72" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="72" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="180" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
          </td>
        </tr>
      </tbody>
    </table>


    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tbody>
        <tr>
          <td align="right" width="10">
            <table cellspacing="0" cellpadding="0" border="0" align=left>
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="1" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td valign="top" width="468" rowspan="5">
            <font class="ct">Instruções (Texto de responsabilidade do cedente)</font>
            <br /><br />
            <span class="cp"> 
              <font class="campo">
                <?= $boleto->getInstrucao1() ?><br />
                <?= $boleto->getInstrucao2() ?><br />
                <?= $boleto->getInstrucao3() ?><br />
                <?= $boleto->getInstrucao4() ?>
              </font><br /><br />
            </span>
          </td>
          <td align="right" width="188">
            <table cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="ct" valign="top" width="180" height="13">(-) Desconto / Abatimentos</td>
                </tr>
                <tr> 
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="cp" valign="top" align="right" width="180" height="12"></td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
                  </td>
                  <td valign="top" width="180" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td align="right" width="10">
            <table cellspacing="0" cellpadding="0" border="0" align="left">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="1" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td align="right" width="188">
            <table cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="ct" valign="top" width="180" height="13">(-) Outras deduções</td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12"> 
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="cp" valign="top" align="right" width="180" height="12"></td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
                  </td>
                  <td valign="top" width="180" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td align="right" width="10">
            <table cellspacing="0" cellpadding="0" border="0" align="left">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="1" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td align="right" width="188">
            <table cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="ct" valign="top" width="180" height="13">(+) Mora / Multa</td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="cp" valign="top" align="right" width="180" height="12"></td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1"> 
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
                  </td>
                  <td valign="top" width="180" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td align="right" width="10">
            <table cellspacing="0" cellpadding="0" border="0" align=left>
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="1" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td align="right" width="188">
            <table cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="ct" valign="top" width="180" height="13">(+) Outros acréscimos</td>
                </tr>
                <tr> 
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="cp" valign="top" align="right" width="180" height="12"></td>
                </tr>
                <tr>
                  <td valign="top" width="7" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
                  </td>
                  <td valign="top" width="180" height="1">
                    <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td align="right" width="10">
            <table cellspacing="0" cellpadding="0" border="0" align="left">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td align="right" width="188">
            <table cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td class="ct" valign="top" width="7" height="13">
                    <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="ct" valign="top" width="180" height="13">(=) Valor cobrado</td>
                </tr>
                <tr>
                  <td class="cp" valign="top" width="7" height="12">
                    <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
                  </td>
                  <td class="cp" valign="top" align="right" width="180" height="12"></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>


    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tbody>
        <tr>
          <td valign="top" width="666" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="666" border="0">
          </td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="659" height="13">Sacado</td>
        </tr>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="659" height="12">
            <span class="campo">
              <?= $boleto->getSacado()->getNome() ?>
            </span>
          </td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="cp" valign="top" width="7" height="12">
            <img height="12" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="659" height="12">
            <span class="campo">
              <?= $boleto->getSacado()->getEndereco() ?>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  
    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="cp" valign="top" width="472" height="13">
            <span class="campo">
              <?= $boleto->getSacado()->getEnderecoComplemento() ?>
            </span>
          </td>
          <td class="ct" valign="top" width="7" height="13">
            <img height="13" src="data:image/png;base64, <?= $boleto->getImagemUm() ?>" width="1" border="0">
          </td>
          <td class="ct" valign="top" width="180" height="13">Cód. baixa</td>
        </tr>
        <tr>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="472" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="472" border="0">
          </td>
          <td valign="top" width="7" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="7" border="0">
          </td>
          <td valign="top" width="180" height="1">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemDois() ?>" width="180" border="0">
          </td>
        </tr>
      </tbody>
    </table>



    <table cellspacing="0" cellpadding="0" border="0" width="666">
      <tbody>
        <tr>
          <td class="ct" width="7" height="12"></td>
          <td class="ct" width="409">Sacador/Avalista</td>
          <td class="ct"  width="250">
            <div align="right">Autenticação mecânica - <b class="cp">Ficha de Compensação</b></div>
          </td>
        </tr>
        <tr>
          <td class="ct" colspan="3"></td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tbody>
        <tr>
          <td valign="bottom" align="left" height="50">
            <?= $boleto->generateBarCode() ?>
          </td>
        </tr>
      </tbody>
    </table>

    <table cellspacing="0" cellpadding="0" width="666" border="0">
      <tr>
        <td class="ct" width="666"></td>
      </tr>
      <tbody>
        <tr>
          <td class="ct" width="666">
            <div align="right">Corte na linha pontilhada</div>
          </td>
        </tr>
        <tr>
          <td class="ct" width="666">
            <img height="1" src="data:image/png;base64, <?= $boleto->getImagemSeis() ?>" width="665" border="0">
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>