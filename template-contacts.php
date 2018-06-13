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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" id="contactick">
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
                            <li class="phone-contact "><p class="inl-dl"><a class="tel" href="tel:+79002475139">+79002475139</a>
                                </p></li>
                            <li class="phone-contact "><p class="inl-dl"><a class="tel" href="tel:+79885242737">+79885242737</a>
                                </p></li>
                            <li class="email "><p class="inl-dl m-b-0"><a class="mail"
                                                                          href="mailto:web-originals@yandex.ru">web-originals@yandex.ru</a>
                                </p></li>
                        </ul>
                    </div>
                </div>
                <div class=" coll-back col-xl-6 col-lg-6 col-md-12 col-sm-12" >
                    <form>
                        <div class="row">
                        <input name="name" placeholder="Укажите ваше имя!" class="textbox feedback col-xl-6 col-sm-12 flex-45 mr-25" required/>
                        <input name="emailaddress" placeholder="Укажите ваш Email!" class="textbox feedback col-xl-6 col-sm-12 flex-45"
                               type="email"
                               required/>
                        <textarea rows="4" cols="50" name="message" placeholder="Введите ваше сообщение:"
                                  class="message feedback" required></textarea>
                        <input class="button" type="button" id="feedbackbt"" value="Отправить"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="map"></div>
    </div>


</section>
<script>
    // Шаги алгоритма ECMA-262, 6-е издание, 22.1.2.1
    // Ссылка: https://people.mozilla.org/~jorendorff/es6-draft.html#sec-array.from
    if (!Array.from) {
        Array.from = (function() {
            var toStr = Object.prototype.toString;
            var isCallable = function(fn) {
                return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
            };
            var toInteger = function (value) {
                var number = Number(value);
                if (isNaN(number)) { return 0; }
                if (number === 0 || !isFinite(number)) { return number; }
                return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
            };
            var maxSafeInteger = Math.pow(2, 53) - 1;
            var toLength = function (value) {
                var len = toInteger(value);
                return Math.min(Math.max(len, 0), maxSafeInteger);
            };

            // Свойство length метода from равно 1.
            return function from(arrayLike/*, mapFn, thisArg */) {
                // 1. Положим C равным значению this.
                var C = this;

                // 2. Положим items равным ToObject(arrayLike).
                var items = Object(arrayLike);

                // 3. ReturnIfAbrupt(items).
                if (arrayLike == null) {
                    throw new TypeError('Array.from requires an array-like object - not null or undefined');
                }

                // 4. Если mapfn равен undefined, положим mapping равным false.
                var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
                var T;
                if (typeof mapFn !== 'undefined') {
                    // 5. иначе
                    // 5. a. Если вызов IsCallable(mapfn) равен false, выкидываем исключение TypeError.
                    if (!isCallable(mapFn)) {
                        throw new TypeError('Array.from: when provided, the second argument must be a function');
                    }

                    // 5. b. Если thisArg присутствует, положим T равным thisArg; иначе положим T равным undefined.
                    if (arguments.length > 2) {
                        T = arguments[2];
                    }
                }

                // 10. Положим lenValue равным Get(items, "length").
                // 11. Положим len равным ToLength(lenValue).
                var len = toLength(items.length);

                // 13. Если IsConstructor(C) равен true, то
                // 13. a. Положим A равным результату вызова внутреннего метода [[Construct]]
                //     объекта C со списком аргументов, содержащим единственный элемент len.
                // 14. a. Иначе, положим A равным ArrayCreate(len).
                var A = isCallable(C) ? Object(new C(len)) : new Array(len);

                // 16. Положим k равным 0.
                var k = 0;
                // 17. Пока k < len, будем повторять... (шаги с a по h)
                var kValue;
                while (k < len) {
                    kValue = items[k];
                    if (mapFn) {
                        A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
                    } else {
                        A[k] = kValue;
                    }
                    k += 1;
                }
                // 18. Положим putStatus равным Put(A, "length", len, true).
                A.length = len;
                // 20. Вернём A.
                return A;
            };
        }());
    }

    (function ($) {
        $(document).ready(function () {
            $("#feedbackbt").click(function () {
                var msg = {};
                var formObject = $(".feedback");
                var form = Array.from(formObject);
                form.forEach(
                    function (el) {
                        msg[el.name] = el.value;
                    }
                );
                msg['action'] = 'feedback';
                console.log(msg);
                var msgtext = $.param(msg);
                $.ajax({
                    type: "GET",
                    url: window.wp_data.ajax_url,
                    data: msgtext,
                    success: function (response) {
                        alert('Отправленно!');
                    }
                });
                return false;
            });
        });
    })(jQuery);
</script>
