<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */

// print $search;
?>
<div class="wrapper" >
      <header>
        <a href="/">
          <div class="logo">
            <img class="left" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            <div class="name"><?php print $site_slogan; ?></div>
        </div>
        </a>
          
        <div class="reklama">
          <div class="clear"></div>

          <?php if ($page['search_region']): ?>
<!--                 <div id="my_region" class="my_class">
                  
                </div>

                <div class="search-field">
                  <input type="text" value="Введите поисковой запрос" title="Введите поисковой запрос" onFocus="doClear(this)" onBlur="doDefault(this)"/>
                  <input type="submit" value="" />
                </div> -->
                <div class="search-field" id="search_region">
                  <?php print render($page['search_region']); ?>
                </div>
          <?php endif; ?>


        </div>
        
        <div class="clear"></div>
        
        <nav>
<!--             <ul>
              <li><a href="/"><div>Главная</div></a></li>
              <li><a href="#"><div>Мероприятия</div></a></li>
              <li><a href="#"><div>Президентская программа</div></a></li>
              <li><a href="#"><div>Проекты</div></a></li>
              <li><a href="#"><div>Контакты</div></a></li>
            </ul> -->
              <?php 
                if (module_exists('i18n_menu')) {
                  $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
                } else {
                  $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                }
                print drupal_render($main_menu_tree);
              ?>
        </nav>  
      </header>
      <div class="clear"></div>
      <div id="main">
        
        <?php print $messages; ?>
        <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
        <div id="content-wrap">
          <?php //print render($title_prefix); ?>
          <!-- <?php //if ($title): ?><h1 class="page-title"><?php //print $title; ?></h1><?php //endif; ?> -->
          <?php //print render($title_suffix); ?>
          <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>


<!--         <div class="content">
          <h1>Главный заголовок</h1>
          <article>
            <div class="img otstup"><img  alt="" src="images/1.jpg" /></div>
            <p>Согласно последним исследованиям, интеграция отталкивает из ряда вон выходящий опрос, используя опыт предыдущих кампаний. Баинг и селлинг искажает популярный стратегический маркетинг, повышая конкуренцию.</p> 
            <p>Узнавание бренда, на первый взгляд, индуцирует эмпирический департамент маркетинга и продаж, повышая конкуренцию. Продукт основан на тщательном анализе. Повышение жизненных стандартов, пренебрегая деталями, непосредственно отражает креативный ребрендинг, не считаясь с затратами.</p>
          </article>  
          
          <h2  >Новости</h2>
          <a class="link right" href="#">Читать все</a>
          <section class="news scrollblock">
            <article>
              <div class="news-left">
                <div class="date">12.03.13</div>
                <a href=""><img  alt="" src="images/2.jpg" /></a>
              </div>
              <div class="news-right">
                <div class="title">Александр Беглов: "Светлана Орлова разбудила федеральный центр не как будильник, а как набат"</div>
                <p>Сегодня Владимирскую область посетили столичные гости: представитель Президента России в ЦФО Александр Беглов, помощник президента России Татьяна Голикова, замминистра образования и науки РФ Наталья Третьяк. Вместе с врио губернатора Светланой Орловой они приняли участие в работе большого педсовета.</p>
                <a href="">подробно</a>
              </div>
              <div class="clear"></div>
              <hr />
            </article>  
            <article>
              <div class="news-left">
                <div class="date">12.03.13</div>
                <a href=""><img  alt="" src="images/2.jpg" /></a>
              </div>
              <div class="news-right">
                <div class="title">Александр Беглов: "Светлана Орлова разбудила федеральный центр не как будильник, а как набат"</div>
                <p>Сегодня Владимирскую область посетили столичные гости: представитель Президента России в ЦФО Александр Беглов, помощник президента России Татьяна Голикова, замминистра образования и науки РФ Наталья Третьяк. Вместе с врио губернатора Светланой Орловой они приняли участие в работе большого педсовета.</p>
                <a href="">подробно</a>
              </div>
              <div class="clear"></div>
              <hr />
            </article>
            <article>
              <div class="news-left">
                <div class="date">12.03.13</div>
                <a href=""><img  alt="" src="images/2.jpg" /></a>
              </div>
              <div class="news-right">
                <div class="title">Александр Беглов: "Светлана Орлова разбудила федеральный центр не как будильник, а как набат"</div>
                <p>Сегодня Владимирскую область посетили столичные гости: представитель Президента России в ЦФО Александр Беглов, помощник президента России Татьяна Голикова, замминистра образования и науки РФ Наталья Третьяк. Вместе с врио губернатора Светланой Орловой они приняли участие в работе большого педсовета.</p>
                <a href="">подробно</a>
              </div>
              <div class="clear"></div>
              <hr />
            </article>
            <article>
              <div class="news-left">
                <div class="date">12.03.13</div>
                <a href=""><img  alt="" src="images/2.jpg" /></a>
              </div>
              <div class="news-right">
                <div class="title">Александр Беглов: "Светлана Орлова разбудила федеральный центр не как будильник, а как набат"</div>
                <p>Сегодня Владимирскую область посетили столичные гости: представитель Президента России в ЦФО Александр Беглов, помощник президента России Татьяна Голикова, замминистра образования и науки РФ Наталья Третьяк. Вместе с врио губернатора Светланой Орловой они приняли участие в работе большого педсовета.</p>
                <a href="">подробно</a>
              </div>
              <div class="clear"></div>
              <hr />
            </article>
            <article>
              <div class="news-left">
                <div class="date">12.03.13</div>
                <a href=""><img  alt="" src="images/2.jpg" /></a>
              </div>
              <div class="news-right">
                <div class="title">Александр Беглов: "Светлана Орлова разбудила федеральный центр не как будильник, а как набат"</div>
                <p>Сегодня Владимирскую область посетили столичные гости: представитель Президента России в ЦФО Александр Беглов, помощник президента России Татьяна Голикова, замминистра образования и науки РФ Наталья Третьяк. Вместе с врио губернатора Светланой Орловой они приняли участие в работе большого педсовета.</p>
                <a href="">подробно</a>
              </div>
              <div class="clear"></div>
              <hr />
            </article>
            <article>
              <div class="news-left">
                <div class="date">12.03.13</div>
                <a href=""><img  alt="" src="images/2.jpg" /></a>
              </div>
              <div class="news-right">
                <div class="title">Александр Беглов: "Светлана Орлова разбудила федеральный центр не как будильник, а как набат"</div>
                <p>Сегодня Владимирскую область посетили столичные гости: представитель Президента России в ЦФО Александр Беглов, помощник президента России Татьяна Голикова, замминистра образования и науки РФ Наталья Третьяк. Вместе с врио губернатора Светланой Орловой они приняли участие в работе большого педсовета.</p>
                <a href="">подробно</a>
              </div>
              <div class="clear"></div>
              <hr />
            </article>
            <article>
              <div class="news-left">
                <div class="date">12.03.13</div>
                <a href=""><img  alt="" src="images/2.jpg" /></a>
              </div>
              <div class="news-right">
                <div class="title">Александр Беглов: "Светлана Орлова разбудила федеральный центр не как будильник, а как набат"</div>
                <p>Сегодня Владимирскую область посетили столичные гости: представитель Президента России в ЦФО Александр Беглов, помощник президента России Татьяна Голикова, замминистра образования и науки РФ Наталья Третьяк. Вместе с врио губернатора Светланой Орловой они приняли участие в работе большого педсовета.</p>
                <a href="">подробно</a>
              </div>
              <div class="clear"></div>
              <hr />
            </article>
          </section>
          <div class="clear"></div>
        </div>  --> 
        
        
        
        <aside >
          <a style="cursor:pointer">
            <div class="button" id="open-feedback-poppup">
              Задать вопрос
            </div>
          </a>
  
        <br /> <br /> <br />
        <?php 
        if( !user_is_logged_in() ) {
          ?>
          <div class="news">
            <div class="news-caption">Подписаться на рассылку новостей</div>
            <?php
              print render($page['subscribe_news']);
            ?>
          </div>
          <?php
        } 
          ?>

        </aside>
          <div class="clear"></div>
      </div>  
      <div class="clear"></div>
      <div class="grass"></div>
      
      <footer>  



        <div class="left copy">
          &copy; avpp33.ru // 2013
          <p class="rights">Все права защищены</p>
        </div> 
      </footer>
      
      <div class="clear"></div>
      <div style="display:none" class="popup" id="block-feedback-poppup">
      <?php 
          $fbForm = node_load(6);
          $fbView = node_view($fbForm);
          print drupal_render($fbView);
      ?>
        
      </div>
</div>






