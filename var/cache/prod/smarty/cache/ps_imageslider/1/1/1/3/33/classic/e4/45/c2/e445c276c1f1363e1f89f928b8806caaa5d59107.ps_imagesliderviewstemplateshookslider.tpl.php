<?php
/* Smarty version 4.3.1, created on 2024-07-18 14:56:44
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66992d2c780268_85399126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1720435172,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66992d2c780268_85399126 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/65a85be78dd7726a9d4727777d5e0f447008ee46_PRODUIT LUXE (1).png" alt="sample-1" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">LUXE</h2>
                  <div class="caption-description"><p><strong>ARTICLE DE LUXE</strong></p>
<p>Les articles de luxe incarnent</p>
<p>l'élégance, la sophistication et</p>
<p>l'exclusivité,</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/bd5729f48be102a42e5abd4885b1aa2df944248f_OUTILS INFORMATIQUES (1).png" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">TECH.</h2>
                  <div class="caption-description"><h3>OUTILS THEC.</h3>
<p></p>
<p>Les outils thec. sont essentiels </p>
<p>pour optimiser la productivité</p>
<p>et faciliter la communication</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/c8130bf0a315f4d7b9719b940085c6c25f416337_MATERIAUX DE CONSTRUCTIONS (1).png" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">ACHAT EDIFICE</h2>
                  <div class="caption-description"><h3>EDIFICATION</h3>
<p>Les matériaux d'édifications</p>
<p>sont essentiels pour la </p>
<p>réalisation de tout projet</p>
<p>de bâtiment </p></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
