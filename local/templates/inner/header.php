<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
  die();
$curPage = $APPLICATION->GetCurPage(true);
?>
<!doctype html>
<html lang="ru">
<head>
  <? $APPLICATION->ShowHead(); ?>
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><? $APPLICATION->ShowTitle(); ?></title>
  <link rel="stylesheet" href="/local/templates/.default/template_style.css">
  <link rel="shortcut icon" type="image/x-icon" href="/local/templates/.default/favicon.ico"/>
</head>
<body>
<div id="panel">
  <? $APPLICATION->ShowPanel(); ?>
</div>
<div class="wrap">
  <div class="hd_header_area">
    <div class="hd_header">
      <table>
        <tr>
          <td rowspan="2" class="hd_companyname">
            <h1>
              <a href="/">
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/logo.php"
                  )
                );?>
              </a>
            </h1>
          </td>
          <td rowspan="2" class="hd_txarea">
            <span class="tel">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/phone.php",
                  "COMPONENT_TEMPLATE" => ".default"
                ),
                false
              );?>
            </span>	<br/>
            время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>
          </td>
          <td style="width:232px">
            <form action="">
              <div class="hd_search_form" style="float:right;">
                <input placeholder="Поиск" type="text"/>
                <input type="submit" value=""/>
              </div>
            </form>
          </td>
        </tr>
        <tr>
          <td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">

									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>

									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
            <a href="" class="hd_signup">Зарегистрироваться</a>
          </td>
        </tr>
      </table>
      <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "topmenu_multi",
        Array(
          "ALLOW_MULTI_SELECT" => "N",
          "CHILD_MENU_TYPE" => "left",
          "DELAY" => "N",
          "MAX_LEVEL" => "2",
          "MENU_CACHE_GET_VARS" => array(0=>"",),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "N",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "ROOT_MENU_TYPE" => "top",
          "USE_EXT" => "N"
        )
      );?>
    </div>
  </div>

  <!--- // end header area --->
  <div class="bc_breadcrumbs">
    <ul>
      <li><a href="">Каталог</a></li>
      <li><a href="">Мебель</a></li>
      <li><a href="">Выставки и события</a></li>
    </ul>
    <div class="clearboth"></div>
  </div>
  <div class="main_container page">
    <div class="mn_container">
      <div class="mn_content">


        <div class="main_post">
          <div class="main_title">
            <p class="title">Заголовок страницы</p>
          </div>