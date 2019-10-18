<h1>
Implementação de uma loja, utilizando o Magento
</h1>

Pequeno projeto de uma loja de e-commerce utilizando o framework Magento para finalizar o aprendizado. Projeto destinado ao treinamento do time de estágiarios da WebJump!

<h3>
Site da empresa: 
</h3>

http://www.webjump.com.br/

<h3>
Dados do Ambiente
</h3>
<ul>
  <li> Magento Versão 2.3.2 </li>
  <li> Php 7.2.19 </li>
  <li> Banco MySQL </li>
  <li> Apache 2.4.29 </li>
  <li> Ubuntu 18.04.3 LTS </li>
 </ul> 
<h3>
Linkedin
</h3>
https://www.linkedin.com/in/isabella-veronezi-497549165/
<h3>
Instalação
</h3> 
<ul>
  <li> Realizar um git clone do repositório </li> 
</ul>
<pre>
  <code> git clone git@github.com:isabellaveronezi/Projeto_Magento.git </code>
 </pre>
 <ul>
  <li> Executar </li>
 </ul>
 <pre>
  <code> $ composer install </code>
 </pre>
  <ul>
  <li> Realizar a instalação do Magento, onde pode ser feita pelo Browser ou diretamente por linha de comando. Para mais detalhes basta acessar o link abaixo: </li>
 </ul>
 <pre>
  <code> https://devdocs.magento.com/guides/v2.3/install-gde/composer.html </code>
 </pre>
  <ul>
  <li> Para importar os dados de config.php é necessário executar os comandos </li>
 </ul>
 <pre>
  <code> $ bin/magento app:config:import </code>
 </pre>
 <pre>
  <code> $ bin/magento setup:upgrade; bin/magento setup:di:compile </code>
 </pre>
  <h3>
      Configurações via Admin
  </h3>
  <ul>
  <li> É necessário direcionar o tema criado para cada Store View, exemplo abaixo: </li>
</ul>
   <img src="https://lh3.googleusercontent.com/uhWPx9ubiQpKyjaLPGRdzzA0RA8t6bhPwklLm7dzW6-DRJ1e3aNB7oDoN9YtvHEiRb80f2FsEJvD4gO8NPBSE-TjMRGU4olCovbiwNpnCeY1JbmfiWTVHURLg42msj091q9Ev5lWIOVnhugvihqIToCW3yXp6UkhOzYve5RwqL4eyq1VfVSioIdDjnWGGumuFpB1I9_BCAwW2IBuAZis79uY-VRPmP3j4nuajrgdHoO-2rBoef8Bck_cJPXgfQPj1ISjsZFS6V0j_2Mpe_-rsEiL3UZij8-Exeo-6iuYVdFEeVguCB1fMfnr95ObsJ6EwOF8iX9mT9fSAhSRRV4rQPbF0mc3PWuzPsS7OtFY6bCc-oAeoY7OxZjaaikSFJYflR8irlXVO2d_TK6fsKeRD84wiH6BfwdXBIWNx1zIk5DKRMcuYJHJVOBTzPAr15sn76PkYqA2P_0Y3LwcSbHJA6mxwo9svmQMxE7iGiwbNCqZsHI2auRNzDampCSSISDd88EGVx-KYYaOUfi5PrfnsL6JON796yIS4FZxMspGqK_gerEPFcP9KrkOK2JLEsQRwQ4QUpLwaeSxsX4dquY1-p9wJnSs8GjgNPHnm7kKah5ZGhsSvxDUBgx-FBfUjU9PzIC0RiQRuBFEaUf6vs3_T8XWjKnDOZ0xOFXTRn5FgWPYQbXdD59LZw=w1308-h607-no"/>
   <img src="https://lh3.googleusercontent.com/BsUXtJ707rwfwLYO929sjt5NMpF82lc3z_9Hzm_hmwysRk7-29QpMqDpsM2GRARVZAY_dglcZ-QP5SGwsCVAlFX-D4dtslPjcjN_iA5MA80jmBBBFAohfRKbqtRgcq_17RceDRLTWku_q4G_grmdoU-u0mS7PGJ-tM63YHxEisnUuQlMCoFKLlEDBt9VZmR28aXEcTpY1tFzolb82_EhatCCRCs2NHfg4sFdP1URnp88cd-RBo8ID1KoqXG4iFXPiilm9zi71WsMqfP8H0FSxbcUdQ8TGeES-1wVlu7o6iTBfDY7hN5971vwbLIg8hE-ApwILaEO43YsHnYN3nRZvoHj70CXZnpAMrKM5gZt0HinSPtEGZWJy66apb9uIp1JrRnxXh_OHPNmbyQuwSwTzY1DwlIKgceWOMzY3iL72kV4pBI7-ppCwmEVKNSn009WAUZnz5fNSsCiI0BbpJpzklKFBV789t9A1NyUohtxg8dOOuTO4HSXWLDJOPsQZCoyI_CC8ney42jeVJX5ixg8EJqF_KdEbjiHZcUM-WdkJ-JGyQz6qOKRRSjWyYM5FgkYFCwEwto-lkxzMxEniV8v6GpfTGATMyj3je0J2gPXLqItK_c6mZboNEHRwAw5HT8d6viaNLgAYKNkQUn3TKkvgc-tcXm5d3A0gix7tE-KfBsf6hyitEC10w=w647-h245-no"/>
   <img src="https://lh3.googleusercontent.com/eTMU7dZHmVS1HjSmKMShtMsPtnmuUfbadeh8zBSBzZHxDtecp2ntX2MCNNVgLz5Op5vp6Pl87zxys3Xt_lsC0XTRDnM0w5lCuVyY180-O8OtWhj5gJpH6V917nL2tRpBCZaWz_pMXPyzRpEmFvZsk6iJt1h2i2jmIb1HfObjoumFEeMwrhd7wTtJap9jMjeYoDeBqahHDktD3ea3NO4iaIWHU9g2iJVkOdBhukqS3WKOErGW3RzOrbN6krUxWHnNhSpPf7WPlLfUWpIo64xmDZ6p466Gys3Oy_iFi5lL8_nEsQpcv4bkK_FvLgX8nZkltEjUIFrRmPW4Q3oB-4pxjZR_jktn51iS1s8hsV1dKCuuIZrmK6NjltkuQlA9_gdaHOHIu0BiZmoldU5050SL98p7FL1kVxkqb8Rah7zKkxNaE_zzxEyfjo38T5E1knco7QWNtWi7rEWrIQIFpp6AA6R4G2QnkcN35Id49Y4IBtMk94WjU-ZB8XSux7RitHmovrHGaR5L4PAl5sh6O93tmu9_xvp1CQle2iQ7jND4wG_sMf5iS1r1OKjZ-kXKF1UzUQHidDVbYZpzEvKO_vC5KYPBP2kq3A8ddiGuYPBO6avbiNOOPJ3Bfrh0txYKYYb-AkXzLyt9j07GtvaBIU9f0XCVKNglFfvYTd7COdHbx68TyJ_YtOYp9Q=w1209-h493-no"/>
<ul>
  <li>
    É necessário direcionar as categorias para a Store View de sua preferência, como no exemplo abaixo: 
  </li>
</ul>
  <img src="https://lh3.googleusercontent.com/W_-9XA8PJ5zTIs5cWjd6yjsvUGrYAMqX9Wuf1XWIMBr0JltDgx6cRW_roybf7062dWFuas2pmsDKrUOpRL053xyFXYtGUw25MSP-Y0bRPCdY7DZjns2cm8-lV2eau9i3kEeTPWjRvXMhvxQppcuVrmhynx1jE5Vswu9wAGX4uigeXblvP7yOPh3vx5-1L7Q50qutuw828fbCaq2-wSiNCSuK4BRlLZvHk1KP0ZzPoiQi7DLkgDyAuWSH1NH-Z5ccXTeAsgsWL_coVYd336jSgtMV43KljszYG8h6OdsfALxu5FjQfdlk1-cuRc1P6xR_Oc5SexcBY1UkqLJB1az4Xzcr-b2zTL1EERjvailt_1Ik9r32GTPBp-EErMWowyqwJOnvNq-Q2_sezuPWncatYmNzLRsW5bfKAumrzjh8utkMNBB7to13vgYcaW4KfoGOTE8rRZUUNsAcEtZi69z9eQrSaHnuy3MgQ_KeRXZUMLbonR22FlN7k3oYprw5hKltxf8FZF5N1teejd7xJHz5H1LG17KI1Q9JC7Azlw3q1aiu7Mmzz5uU3QkYvAfQVKX6zdiHfvg__qFZmUpxJznKIHoVv5Tmnw-Q18uhti-VapMek_mIq3lRDZIb20lsLkgMLxYEotNuXCi3FbOENiH66l4GFxixq5HdU3ZH1DopSlNw5qDXiD_m2A=w1194-h440-no"/>
<ul>
  <li>
    É necessário realizar o cadastro de produtos via Admin e vincular com a Categoria de sua escolha.
  </li>
</ul>
  
  
 

  
  
  
