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
<ul>
  <li>
    Para o módulo de frete, foi utilizado o módulo Multiple Shipping Flat Rates. Para mais informações a respeito do módulo basta acessar:
    <pre>
  <code> https://marketplace.magento.com/mageplaza-module-multi-flat-rates.html </code>
 </pre>
  </li>
  <li>
    Para configurar o módulo de frete via Admin, é necessário configurar Country Options, para o País de sua escolha como no exemplo abaixo: 
  </li>
</ul>
<img src="https://lh3.googleusercontent.com/jnS1br2SYjop2y5eu80zRzCdG2AK7mBWXry0hR1hcr44kUloMnerTMQuTPQbozFSw6_TbdL8Y9LE5RFP6TWm_8DDCQ9qlRQQMKZIxK_qeE0NJXixRTC5fDZfWPZ-aS5HJNndhkwg7qlHuPeNZRXAlVd9cw2F9VUV0JXRQAp8oxKO_sRl4O0JmclDWA-r2hQxkA-VwakhtNE9ch9PZYw84v8IYBIShJTP7Z4W0raCeaVzHGpGi6mrUTzUSik5Ny-hu6R3bwz3dm9pJXM8pWqbLdXSMQ5Hoix1-SQnbGiE2SAreFD1orm_OFUKQjm3sSCSvIUf8FOhl-xF8-fv8ikdcPjC9CTuQjAjj6I3ZzlncDoNLAY65AY4gcw1QhTXWe5wYTUcQD_jyiZpCVfRZCkqrhRqKmCk_r2LFWFgz91x4vPY2NQSag3InrteCT6KK1wI7YcnXrIh-cs1icn1qLn7-CDT0ivajaPyOrRqpDwWBkLZAFmYWHaktLsumAtp3KRGatrE7J6FCbHwsvDfmrUAD-w3Z4-o4UpS2Nc4pNEl3kJwvUAr58Uhlzhw5ag1-HQaSGTGnuuNrZYqkyX7zM7IyacLlENAHqfUwYNuAaLq9sccXC5vUiEFPBHrb_GrRi5prC5_xiAUBw4-mO0ZhFPBiiZN9y6_13Xg4szHlOoV0eL4byjpX7L31AA=w1246-h605-no"/>
<ul>
<li>
    Após configurar o Country Options, basta configurar o Frete em Shippings Methods
  </li>
</ul>
<img src="https://lh3.googleusercontent.com/I_zTfPjoQr47IEi0_kNJCTzp5152g25abAjZ90tc6zkO3IWrB-B54IT5GJ6Qu3lrPFq2lWSC2OCRAMEZ_MrFdQt9hvzdLdXaD2RZ0o8niEFy7FbJp6CgG4L6ndjTJl4rgVvYKS5h4BAdl7bafV9fxhkgETG6BIhuO_McDLvY4MuVO8NwnuaePUxqpe5GtL35mJGvRnHb2hmfRYnOAD8uMTRYB5feU1okiwTmPZ86l590JqZ8a8xuXW4T4LYgMPfmbilrFcxU_bmI1RLF8w95S70F6zkSrtvWPU7UfQuzqRJQh2s3VivXhUF59FmII-vbo2Z_fKkAxAEbWx9pz5yXLUwELPn_IX_QShcaiRS2vG9JFN3WzOeovRwRi-AlDFwTs-f4LtzGfsRGghWOELMRqP7V6cHdy9Ahqt7RmYlQFy0Z19nbDjO_PMKOubJil6A4_GZKGq26JVSnOk9pY-1FKJaouJ9p9ovgZ86wC9ynoskhxAdkq9869wTAFnO5JDhX9e2r5KNssU-L8QUfwVowOqDZPQ8RV56NBoLGaV2RdkO8QbPpb5RRgewAc79pKdU9i_85gNuqQUOOZqLtEQEYy5ip2ldUfBR4yLCJoOVLPIDjYSIzlKgF_YDN7JBjzqH3CIKMoJBbQsSKAiOde1qXFtULbzmZho_jZM7VNEi4ngIpgCZon4cwVt8=w1315-h614-no"/>
 <ul>
<li>
    No Frontend é exibido dessa forma: 
  </li>
</ul>
<img src="https://lh3.googleusercontent.com/6ACov6U8RcGs89RpyioUT22MefN863ytSuFjRX04RaL4CZ88PVyOKHcm5fUww8zfc4wrqgd7j_Sw53ODf1F6f8IAhx_yxc0Vbt-NDkLPjLT2o8HLSbemPsgPRabDf0V4EnsOmx5Cq2uqz8wmmrEVliFgW93D4C_zmoEjmZ8L42xZ2BOfwUO-kcfGuXaymwSMfMhHQM7JZI3KJuR2LeYBFq2zlkKg7_1A49KORLck_M4uDApO0u9EKBE4nFCCkkEKd4Hf1aFrX7nlRHB-ji9mExk74V-O8ZqGo-auM6LIDWMNuz08hHDKoYaA6h5jyj6rSdxISxjd5wWDUd_Vq2HBzWzUb8EHY0EVwdbM3vpfcz--_H4WBlPVEPeOsMcAuboiFRvxIa6UMRZpXPu1jNJF-DZJOC803IEIP4Zf-_w4lWpH7_s64AdMTQUPMBrfAuT-EQ4jsOBTIW7CBW5btuWZIFZdeWR1UcuxJy1bFf4a46x_CJOkZtnhWmI1YmNiBeONmT7JJWQqZ3sw8cwX-4u5rd7IBZLCYJ0d4kJyjWAQw8WLrwkb1kFtN4lDt4EASsNjC14wj--CRSuk49I5IYwfsXju45SNHJaI2pl9AIeKE1sijhSsJcfHG2HNDXPdrgTUMeRsMbIb6BDG8pFlh6dlpgAteY1Pp9jEffkBuRkTMl3NVF4sVgULaQQ=w1099-h625-no"/>

<ul>
  <li>
    Para o módulo de pagamento, foi utilizado o módulo PagSeguro Trasparente. Para mais informações a respeito do módulo basta acessar:
    <pre>
  <code> https://marketplace.magento.com/ricardomartins-pagseguro.html?edition[]=open%20source%20(ce) </code>
 </pre>
  </li>
  </ul>
  <ul>
  <li>
   Para configuração do módulo dentro do Magento basta seguir o link abaixo: 
    <pre> 
    <code>   https://www.youtube.com/watch?v=4LDnjLx9KTc </code> 
    <code>   https://github.com/pagseguro/magento2 </code> 
    </pre>
  </li>
</ul>
<ul>
  <li>
   Exibição no frontend do módulo
  </li>
  </ul>
  <img src="https://lh3.googleusercontent.com/tLJ6ZkKeNotAj5ZaQp7qNH5g7BNqx8KO61Hp-Nt5YXvaYvqDVebt34leK0auMbzxC1Pe99MNWDb6P3KftFdHvqZglRYgj8BADhCt2NlyXwGwHSSsSxwuYJOjrE2BCY5jnQNsZojd5STwDKOquBR05pticjmZENu-mWD9uQafCJ2bUWJkImr0t9ZpMCSqgJpt_K41Ap_6Xs9iPJP8AM_RgcJ-QqnRAi2WLRzyoZGkUT7pT3tBrUb2NtwXOgULuxE2KnqVnUpGbnOd63UWZEdqfXZeXtbDKF3hCFcwQqZOfjzmot74tXuQwnv8Um-hbLELu6m6pS-8ewhqVDkv05-Qqx1lwaAODI7Uq6bbBbn3oNvzr5ss-8TDVQN0uw0xfWRmNUDq3igs-WfRXsdOwAQ0yWz9fQTJlLqPlgTFX6W7dI7ROlZiDrRtBrAdmS4f3wlZ7XeaDPQjFKpZ3Mvw_Vk3JyN4CTZ-M2MHbH7wZE1qaii0m0JVSzSvlZUNTtGHCMQX5ItlT_k9tXsokcTQlcYu0DOZmntjCOQGE7U8ApW6ASwavLwJrNzGkO5Oo2CXPOtw21wRYI6y93oDX7uku46uzNkGqDO1tW-bKcrqZ6y-McPpC4fKRrwde4lUVsA3dn622FPbhV75tFwJMzpFjfzlOCtQ4AsqNelQDHGkiuVn-X7vKFS_pra7-yM=w1145-h632-no"/>
  
 <ul>
  <li>
   Após fecha o pagamento é possível conferir no Admin o pedido: 
  </li>
  </ul>
  <img src="https://lh3.googleusercontent.com/jAyl9HhMdRK4FzMWDW5wIJuO-cfeuOkT-uM7s7Soll3PKDuhSaLN7xXKEvg5nGMF7Ib435NF7U1d9ELi4Qzuh0lE3ajy69CfpJZ3zrbjjSYMruzAGiX2Sj3yn51-dL5XN4hvMJqzEAqfNmACw7A7MwXdLzjEBqEdCeRh9iqlt6HoC8_Osfv7WbIE2P1zWFlZ8YvJMax4-xiztmucQnlh-YdM2-lgtIqoO3JMgcWhAxCr5kJzaNueKH2nBsYQO6M9EwYnRU4R1o5f8bw0AKflq3OfZNT4kMXpj9W8_nJtIBfW3ZQyYoiIrkvVWwJ1Z0sQQR-sFE7eWYYho9rzVWnCI6BVY69zhDeWOg1U5eE888VQn7sBx-Gl7Gcxwd_XinTX4LEvJOldhyOFVStuKLhloU8aXOGX_owuqKF6BkaoEksD1f8vDVFxwmByBYLCKXhkZO0I2WvTvsO9pjZvuo18lb9T2uPSuCvZEQflC0uvCRE7SCA4gpWtD9TUk6SJfIRZXbCHnsP9XN1TzsrswKjDfp4BHJb22aHgFkzr5vD07DXDvOLje6iv_ytj-kpdioV5BQA2rR3vK5csFXmY0Q6_eIdQ6M9TaAt6QdET9bKtv6mwhejCTvlIASTiovefbCJyjbp7bQx24yfJ0EIAOx0TFoTvof0XyVezlTq2C5MCwlQ7gPjqhZvqc5A=w921-h569-no"/>

  
  
  
