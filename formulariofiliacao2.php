<?php

$check1 = "checked='checked'";
$Z = new pneuClasse("", "", "", "", "", "", "", "", "");
$Z->mostra2($codvistoria, $link);
for ($i = 0; $i < count($Z->getCodigo()); $i++) {

    $pneu[$i] = $Z->getTipo()[$i];
    $marcap[$i] = $Z->getMarca()[$i];
    $estadop[$i] = $Z->getEstado()[$i];
    $obsp[$i] = $Z->getObs()[$i];
    $saida = $saida . "<tr><td>$pneu[$i]</td><td>$marcap[$i]</td><td>$estadop[$i]</td><td>$obsp[$i]</td></tr><br>";
}

$X = new danoClasse("", "", "", "", "", "", "", "");
$X->mostra4($codvistoria, $link);
for ($i = 0; $i < count($X->getCodigo()); $i++) {

    $dano[$i] = $X->getDano()[$i];
    $estadopd[$i] = $X->getEstado()[$i];
    $obsd[$i] = $X->getObs()[$i];
    $saida1 = $saida1 . "<tr><td>$dano[$i]</td><td>$estadopd[$i]</td><td>$obsd[$i]</td></tr><br>";
}

$Y = new checklistmoto("","","","","","","","","","","","");
$Y->mostra2($controlevistoria, $link);


$check1 = $Y->getFreiodiscod() == "on" ? "checked ='checked'" : "";
$check2 = $Y->getFreiodiscot() == "on" ? "checked ='checked'" : "";
$check3 = $Y->getRodaliga() == "on" ? "checked ='checked'" : "";
$check4 = $Y->getCarenagem() == "on" ? "checked ='checked'" : "";
$check5 = $Y->getAlarme() == "on" ? "checked ='checked'" : "";
$check6 = $Y->getPartida() == "on" ? "checked ='checked'" : "";
$check7 = $Y->getChave() == "on" ? "checked ='checked'" : "";
$check8 = $Y->getBloqueador() == "on" ? "checked ='checked'" : "";


$pagina = "<html>
                <body>
                    <h1><img src='imagens/cabecalho.png'></h1>
                    <table width=100% border=1>
                        <tr><td>Data: $datafilicao</td><td>Cidade: $cidade</td><td>Consultor: $nomevendedor</td></tr>
                        
                    </table>
                    <br>
                    <table width=100% border=1>
                        <tr><th colspan=3>Dados Associado</th></tr>
                        <tr><td colspan=3>Nome/Razão Social: $nome</td></tr>
                        <tr><td>CPF/CNPJ: $cpf</td><td>Ident.: $identidade</td><td>CNH: $cnh</td></tr>
                        <tr><td>Nas.: $nascimento</td><td>Estado Civel:$estadocivil</td><td></td></tr>
                        
                        <tr><th colspan=3>Endereço de Correspondência</th></tr>
                        <tr><td colspan=2>Logrodouro: $logradouro</td><td>Numero: $numero</td></tr>
                        <tr><td>Bairro: $bairro</td><td>Cidade:$cidadea</td><td>UF:$estadoa</td></tr>
                        <tr><td>CEP:$cep</td><td>Email: $email</td><td>Telefone: $telefone</td></tr>
                        
                    </table>
                              <table width=100% border=1>
                        <tr><th colspan=5>Dados Do Veiculo</th></tr>
                        <tr><td>Tabela FIPE: $tabelafipe</td><td>Cod FIPE: $codfipe</td><td>Cota: $cota</td><td>Plano: $plano</td><td>Tipo Veiculo</td></tr>
                        <tr><td>Placa: $placa</td><td>Marca: $marca</td><td>Modelo: $modelo</td><td>Ano: $anof</td><td>Portas: $portas</td></tr>
                        <tr><td>Cor: $cor</td><td>Alienado: $alienado</td><td>Combustível: $combustivel</td><td>Renavam: $renavam</td><td>KM: $km</td></tr>
                        <tr><td colspan=2>Chassi: $chassi</td><td>Potência: $potencia</td><td>Cilindrada: $cilindrada</td><td>Rastreador: $rastreador</td></tr>
                      
                    </table>
                    <br>
                     <table width=100% border=1>
                        <tr><td>Valor Adesão: $valoradesao</td><td>Taxa Instalação Rastreador: $taxarastreador</td><td>Valor Médio Mensalidade: $valormesalidade</td></tr>
                        
                    </table>
                    <table width=100% border=1>
                    <tr><th colspan=3>Benefícios Contratados</th></tr>            
                    <tr><td>
                    
                    <input type='checkbox' $CR><label>Carro Reserva 7 dias</label><br>
                    <input type='checkbox' $AP><label>APP</label><br>
                    <input type='checkbox' $VN><label>Proteção de Vidros Nacional</label><br>
                    <input type='checkbox' $VI><label>Proteção de Vidros Importado</label><br>
                    <input type='checkbox' $T><label>Proteção Contra Terceiros</label><br>
                    <input type='checkbox' $P><label>Plano Top</label><br>

                   
                    </td><td>
                     <input type='checkbox'><label>Roubo/Furto/Incêndio/Colisão</label><br>
                    <input type='checkbox'><label>Assitência 24 Horas</label><br>
                    
                    </td><td>
                    Dia de Vencimento<br>
                    " . date('d') . "
                    </td></tr>
                    </table>
</div> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h4 style='text-align:center'>INFORMAÇÕES IMPORTANTES<br>
(para maiores esclarecimentos verificar no regulamento)</h4>

<ol style='text-align:justify'>
<li><b>A SICAR ASSOCIADOS é dotada de personalidade jurídica, constituída na forma de associação conforme estabelecido no
Código Civil Brasileiro, art.53 e seguintes, ou seja, uma reunião de pessoas com fins comuns, a qual não deve ser confundida, em hipótese alguma, com
sociedades empresariais mercantis que explorem ramo de seguro já que a Associação não se assemelha a seguradora;</b>
</li>
<li><p>A proteção conferida neste regulamento para todos os benefícios terá início 48 horas úteis, após o pagamento da taxa de filiação e da inspeção, tendo
em vista a necessidade de cadastramento.</p>
</li>
<li><p align='justify'><b><u>0 vencimento do boleto mensal</u></b> é de acordo com o especificado formulário de filiação, e em caso de atraso superior a 5 dias corridos da data do
vencimento o <b><u>veículo estará desprotegido</u></b>, devendo comparecer a sede a Associação para realizar nova inspeção. Caso o Associado não receba o boleto, este deve
retirar a segunda via no site/aplicativo da SICAR ou comparecer na sede da associação e solicitar o boleto.  Ciente desta obrigação, o associado não poderá se
esquivar do pagamento, uma vez que é obrigação deste providenciar a 2a via do boleto e realizar o seu pagamento.  Ainda, em caso de inadimplência o associado
poderá ter seu nome e CPF incluído nos órgãos de proteção ao credito;</p>
</li>
<li><p align='justify'>0<b><u> cancelamento</u></b>  deverá ser realizado por escrito até dia 20 de cada mês, estando em dia, exceto se tiver utilizado algum dos benefícios conferidos pela
associação. Caso tenha utilizado este deverá permanecer associado por mais 3 (três) meses a contar da data de acionamento.  Ainda, em nenhuma hip6tese tera
qualquer tipo de ressarcimento de valores quando de sua saída da associação, tendo em vista a natureza e objeto do associativismo.</p>
</li>

<li><p align='justify'><b>0 Associado deverá comunicar imediatamente as autoridades policiais competentes e a SICAR</b>, logo após a ocorrência de acidente, incêndio, roubo,
furto ou outro, realizando a lavratura do Boletim de Ocorrência, bem como <b>possui o prazo de 30 dias para realizar o acionamento</b>, a contar da data do fato, sob pena
de não poder gozar dos benefícios de repartição de prejuízo;</p>
</li>
<li><p align='justify'><b>0 ASSOCIADO NAO PODERA REALIZAR QUALQUER ACORDO SEM A ANUENCIA DA ASSOCIAÇÃO</b> (em juízo ou fora dele), bem como não poderá realizar
o conserto do seu veículo <b>SEM AUTORIZADO</b>, sob pena de responder o associado pelos prejuízos ocorridos no (s) veículo (s) e perda da proteção,</p>
</li>
<li><p align='justify'><b>E obrigatório a instalação de ANTI-FURTO/ANTIRROUBO E RASTREADOR de acordo com o exigido no regulamento item 5.2</b>, lembrando que todo
veículo que não tiver o mesmo instalado no prazo máximo de 3 (três) dias após a Inspeção,<b><ul>não terá nenhum direito aos benefícios</ul> aos quais faz jus em caso de
roubo ou furto (simples ou qualificado)</b>. A comprovação da instalação será mediante apresentação de documento fiscal da rede conveniada, protocolado na sede
da SICAR, ou mediante inspeção. For ter sido cientificado acerca de tal condição, o associado não poderá reclamar nada em juízo ou fora dele em caso da não
observância do disposto neste item;</p>
</li>
<li>O <b>ressarcimento será pago uma só vez ou parcelado e poderá ser através da substituição do veículo por outro equivalente</b>, de acordo com as condições
econômicas da SICAR, no prazo de até 90 dias uteis para ratear entre o corpo social, <b>a contar da data de entrega de toda a documentação solicitada pela SICAR. E
caso haja realizando de sindicância o prazo iniciara a partir da finalização desta, que em média será realizado em até 60 dias, salvo caso fortuito ou forca maior.</b>
</li>
<li>O associado <b><u>deverá estar em dia com eventuais prestações oriundas de financiamento</u></b>, leasing ou outra forma de parcelamento utilizado na aquisição
do veículo, bem como estar quite com os impostos e documentação necessária para a sua circulação.  Sendo que para <b>indenização de veículo financiado</b> (leasing,
alienação ou qualquer outra forma de parcelamento), o associado deve levantar junto ao credor o valor total do débito existente e apresentar junto a associação
documento hábil e Inidôneo para sua quitação recaindo sobre o mesmo, ainda, a obrigação de pagar o valor relativo ao débito existente que ultrapasse o valor do
veículo obtido na tabela FIPE diretamente a SICAR a qual providenciara a quitação do bem junto a instituição credora a título de ressarcimento do prejuízo
ocasionado ao associado(mais detalhes no regulamento);

<ol type='a'>
    <li><b><u>Haverá ressarcimento integral do valor do veículo</u></b>, de acordo cor a avaliação obtida junto a tabela APE, <b><u>quando o montante para reparac5o do bem
    atingir ou ultrapassar 70% (setenta por cento) do referido valor</u></b>, na data do aviso do evento danoso.  <b><u>Podendo ainda haver depreciação do veículo de 30% (trinta por 
    cento) sobre o valor da indenização.  Conforme item 6.7.  Exemplos:</u></b> Tiver o número do chassi remarcado, Ter sido objeto de perda total (PT), For Taxi ou 'ex' taxi,
    For procedente de Leila°, Tiver sido indenizado em algum outro órgão ou por outra instituição públicas ou privada, Veículos com isenção de impostos ou taxas,
    reembolso integral por roubo, furto e PT, Outros que a associação informar no momento da adesão.
    </li>
</ol>
</li>
<li>Em caso de furto ou roubo caso o associado seja informado pelas autoridades competentes que o veículo foi localizado, este deve comunicar
imediatamente a associação, tendo em vista que há um prazo para retirada do path% sob pena de pagamento de diárias.
E caso o associado não informe dentro do prazo o pagamento das diárias será de responsabilidade do associado;
</li>

<li><b><u>A Associação não realiza indenização por</u> Responsabilidade civil facultativa, lucros cessantes, danos emergentes, danos materiais, pessoais,
corporais e moral ao Associado, aos terceiros e aos ocupantes do veículo, </u>bem como por paralisação do veículo danificado em oficinas, para Associados e
terceiros:</u></b>
</li>
<li>O Associado pode não ser o proprietário do veículo, mas em caso de indenização integral ou outra necessidade o proprietário deve assinar em conjunto
com o associado, sob pena de perda da proteção ou não recebimento da indenização,
</li>
<li>A    proteção de <b>Danos materiais a terceiros</b>, deve ser requerido pelo Associado em campo próprio ou na proposta de filiação. Salientando que este
Benefício terá <b>início somente após 48 horas uteis após a inspeção.</b>
<ol type='a'>
    <li>Este benefício garante somente a <b>reparação do veículo (casco) de terceiro em acidente</b> causado pelo associado, desde que fique comprovado que a
    responsabilidade do Associado;
    </li>
    <li><b>O valor máximo desta proteção é de R$ 30.000,00 (trinta mil reais)</b>;
    </li>
    <li>O valor para a contratação deste é cobrado mensalmente, conforme valor descrito na proposta de filiação.
    </li>
 </ol>
 </li>




</ol> 

<u>Declaro estar ciente e de acordo com os itens citados acima e que recebi neste ato a cópia física do regulamento da SICAR associados ao qual estou de pleno
acordo com as regras da associação e condições dos benefícios e da proteção veicular.</u>
<br>

<p>$cidadea, $dia de $mes de $ano.</p><br>
    
<pre>Assinatura Sicar Associados	                 Assinatura Associado</pre>
<br><br><br>

</body>
</html>
		";
