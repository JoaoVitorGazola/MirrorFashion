<?php
$cabecalho_title = "Sobre a Mirror Fashion";
$cabecalho_css = '<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href=\'http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script\'>';
include ("cabecalho.php"); ?>
<body class="container">
<div class="sobre">
<h1>A Mirror Fashion</h1>

<p>
    A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo.
    Fundada há <?php print date("Y") - 1932;?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de
    participação em 118 deles.
</p>

<p>
    Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho, no Paraná</a> . De lá, saem 48 aviões que
    distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
</p>
<figure id="centro-distribuicao">
    <img src="img/centro-distribuicao.png" alt="Foto do centro de distribuição da Mirror Fashion">
    <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
</figure>

<iframe id="endereco" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58692.97053520256!2d-50.00335840524649!3d-23.158859180226475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c026544d26f253%3A0xc66dac11dad56f73!2sJacarezinho%2C+PR%2C+86400-000!5e0!3m2!1spt-BR!2sbr!4v1539567989736" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<p>
    Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.php">nossa loja</a> ou entre em contato
    se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.
</p>

<h2 id="historia">História</h2>
<figure id="familia-pelho">
    <img src="img/familia-pelho.jpg" alt="Foto da família Pelho">
    <figcaption>Família Pelho</figcaption>
</figure>
<iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<p>
    A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A
    família <em>Pelho</em>, tradicional da região, investiu todas as suas economias nessa nova iniciativa,
    revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão
    administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado
    de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
</p>
<p>
    O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países.
    Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões
    de usuários diferentes, em bilhões de diferentes pedidos.
</p>
<p>
    O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do
    Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do
    Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e
    nos escritórios em todo país.
</p>
<p>
    Dada a importância econômica da empresa para o Brasil, a família <em>Pelho</em> já recebeu diversos prêmios,
    homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror
    Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
</p>

<h2 id="diferenciais">Diferenciais</h2>

<ul>
    <li>* Menor preço do varejo, garantido</li>
    <li>* Se você achar uma loja mais barata, leva o produto de graça</li>
    <li>* Pague em reais, dólares, euros ou bitcoins</li>
    <li>* Todas as compras com frete grátis para o mundo todo</li>
    <li>* Maior comércio eletrônico de moda do mundo</li>
    <li>* Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
    <li>* Presente em 124 países</li>
    <li>* Mais de um milhão de funcionários em todo o mundo</li>
</ul>

</body>
</div>

<?php include ("rodape.php"); ?>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: joaov
 * Date: 10/15/2018
 * Time: 7:36 AM
 */
