<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 01.06.2018
 * Time: 17:20
 */
?>
<section class="contact" id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-title st-center">
                    <h3>Свяжитесь с нами</h3>
                    <p>Написать нам </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                    <div class="contacts">
                        <ul class="width-ul-contactss">
                            <li class="address "><p class="inl-dl">Старомышастовская улица <br> Садовая № 211</p></li>
                            <li class="phone "><p class="inl-dl"><a class="tel" href="tel:+79002475139">+79002475139</a>
                                </p></li>
                            <li class="phone "><p class="inl-dl"><a class="tel" href="tel:+79885242737">+79885242737</a>
                                </p></li>
                            <li class="email "><p class="inl-dl m-b-0"><a class="mail"
                                                                          href="mailto:web-originals@yandex.ru">web-originals@yandex.ru</a>
                                </p></li>
                        </ul>
                    </div>
                </div>
                <div class=" coll-back col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <form id ="feedbackform">
                        <div class="row">
                        <input name="name" placeholder="Укажите ваше имя!" class="textbox feedback col-xl-6 col-sm-12 flex-45 mr-25" required/>
                        <input name="emailaddress" placeholder="Укажите ваш Email!" class="textbox feedback col-xl-6 col-sm-12 flex-45"
                               type="email"
                               required/>
                        <textarea rows="4" cols="50" name="message" placeholder="Введите ваше сообщение:"
                                  class="message feedback" required></textarea>
                        <input class="button" type="submit" id="feedbackbt" value="Отправить"/>
                            <div class="g-recaptcha" data-callback="enableBtn" data-sitekey="6Ldey14UAAAAAP2TZmSrapLQvxhmO-rp4C5LFF7z"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="map"></div>
    </div>
    <script>
        (function ($) {
            $(document).ready(function (response) {
                $("#feedbackbt").prop( "disabled", true );
                window.enableBtn = function (){
                    $("#feedbackbt").prop( "disabled", false );
                };
                $("#feedbackform").submit(function (e) {
                    var msg = {};
                    msg['action'] = 'feedback';
                    var msgtext = $.param(msg);
                    msgtext += "&"+$("#feedbackform").serialize();
                    $.ajax({
                        type: "GET",
                        url: window.wp_data.ajax_url,
                        data: msgtext,
                        success: function (response) {
                            alert('Отправленно!');
                        }
                    });
                    e.preventDefault();
                });
            });
        })(jQuery);
    </script>

</section>

