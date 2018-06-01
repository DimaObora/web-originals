<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 01.06.2018
 * Time: 17:20
 */
?>
<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-title st-center">
                    <h3>Свяжитесь с нами</h3>
                    <p>Написать нам </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                <script type="text/javascript">
                    function _uploadCheck() {
                        var w = _uWnd.all[this.upload_wnd];
                        if (!w || w.state.destroyed) return;
                        w._myuploadTimer = setTimeout("_uploadProgress('" + this.upload_id + "'," + this.upload_wnd + ")", 3000);
                    }

                    function _uploadProgress(upId, widx) {
                        if (_uWnd.all[widx]) _uWnd.all[widx]._myuploadTimer = null;
                        var o = {
                            upload_wnd: widx,
                            upload_id: upId,
                            dataType: 'json',
                            type: 'GET',
                            timeout: 5000,
                            cache: 1,
                            success: _uploadTick,
                            error: function (a, b, c) {
                                console.log('Test!', a, '-', b, '-', c);
                            }
                        };
                        try {
                            _uAjaxRequest("/.uploadstatus?upsession=" + upId, o);
                        } catch (e) {
                            _uploadCheck.call(o, null, 'error');
                        }
                    }

                    function _uploadTick(data, st) {
                        var w = _uWnd.all[this.upload_wnd];
                        if (!w || w.state.destroyed) return;
                        if (data.state == 'error') {
                            if (data.status == 413) _uWnd.alert('Суммарный размер файлов превышает допустимое значение 15 МБ', '', {
                                w: 230,
                                h: 80,
                                tm: 3000
                            });
                            else _uWnd.alert('Ошибка соединения, попробуйте позже (' + data.status + ')', '', {
                                w: 230,
                                h: 80,
                                tm: 3000
                            });
                            w.close();
                            sblmb1 = 0;
                            return;
                        } else if (data.state == 'starting' && w._myuploadStarted) {
                            _uWnd.alert('Ошибка соединения, попробуйте позже', '', {w: 230, h: 80, tm: 3000});
                            w.close();
                            return;
                        } else if (data.state == 'uploading' || data.state == 'done') {
                            var cents;
                            if (data.state == 'done' || data.size == 0) {
                                w.footer('');
                            } else {
                                cents = Math.floor(data.received / data.size * 1000) / 10;
                                w.footer('<div style="border:1px solid;position:relative"><div class="myWinTD2" style="width:' + Math.floor(cents) + '%;height:20px"></div><div style="text-align:center;position:absolute;left:0;top:0;width:100%;height:20px;font-size:14px">' + cents + '% (' + Math.floor(data.received / 1024) + ' Kb)</div></div>');
                            }
                            w._myuploadStarted = 1;
                            if (data.state == 'done') {
                                sblmb1 = 0;
                                return;
                            }
                        }
                        _uploadCheck.call(this);
                    }

                    var sblmb1 = 0;

                    function fun_qEYb() {
                        var act = '/mail/', upref = 'n3Bo1F6w15', uploadId, wnd;
                        try {
                            var tr = checksubmit();
                            if (!tr) {
                                return false;
                            }
                        } catch (e) {
                        }
                        if (sblmb1 == 1) {
                            return false;
                        }
                        sblmb1 = 1;
                        window._uploadIdx = window._uploadIdx ? window._uploadIdx + 1 : 1;
                        uploadId = 'up' + window._uploadIdx + '_' + upref;
                        var frm = $('#mff_qEYb')[0];
                        frm.action = act + '?upsession=' + uploadId;
                        wnd = new _uWnd(
                            'sendMFe1',
                            'Отправка сообщения',
                            -350,
                            -100,
                            {
                                footerh: 25,
                                footerc: ' ',
                                autosize: 1,
                                modal: 1,
                                closeonesc: 1,
                                resize: 0,
                                hidefooter: 0,
                                contentsizeprio: 0,
                                onbeforeclose: function () {
                                },
                                onclose: function (wnd) {
                                    if (wnd._myuploadTimer) clearTimeout(wnd._myuploadTimer);
                                    wnd._myuploadTimer = null;
                                }
                            },
                            {
                                form: frm
                            }
                        );
                        wnd._myuploadStarted = 0;
                        _uploadCheck.call({upload_wnd: wnd.idx, upload_id: uploadId});
                    }

                    jQuery(function ($) {
                        if ($("input[id=policy]").length) {
                            $('body').on("submit", "form[name=mform]", function () {
                                if (!$('input[id=policy]:checked').length) {
                                    $("input[id=policy]").next().css({
                                        "cssText": "color: red !important",
                                        "text-decoration": "underline"
                                    });
                                    return false;
                                } else {
                                    $("input[id=policy]").next().removeAttr('style');
                                }
                            });

                            $('body').on("change", "#policy", function () {
                                $("input[id=policy]").next().removeAttr('style');
                            });
                        }
                    });
                </script>
                <form method="post" name="mform" id="mff_qEYb" style="margin:0"
                      onsubmit="fun_qEYb(); return false;">
                    <input type="hidden" name="jkd498" value="1">
                    <input type="hidden" name="jkd428" value="1">
                    <div class="contact-form" role="form">
                        <input type="text" class="form-control" id="fname" type="text" name="f4"
                               placeholder="Ваше полное имя">
                        <input type="email" class="form-control" id="email" type="text" name="f1"
                               placeholder="Ваш e-mail">
                        <input type="text" class="form-control" id="subj" name="f2" size="30" maxlength="70"
                               placeholder="Тема разговора">
                        <textarea id="mssg" name="f3" cols="30" placeholder="Ваше сообщение" class="form-control"
                                  rows="10"></textarea>
                        <div class="scif"><input type="text" name="f4" size="6" maxlength="5"
                                                 placeholder="Код безопасности" class="form-control"
                                                 rows="10"><input type="hidden" name="seckey"
                                                                  value="1410631631079989007">
                            <img class="captcha-question mform-1"
                                 src="/secure/?k=1410631631079989007&s=mail&tm=1523516370"
                                 title="Обновить код безопасности">
                            <!-- <captcha_script_html> -->
                            <script type="text/javascript">$(function () {
                                    $(' .captcha-question.mform-1,  .captcha-renew.mform-1').on('click', function (event) {
                                        var PARENT = $(this).parent().parent();
                                        $('img[src^="/secure/"]', PARENT).prop('src', '/secure/?k=1410631631079989007&s=mail&tm=' + Date.now());
                                        $('input[name=code]', PARENT).val('').focus();
                                    });
                                });</script>
                            <!-- </captcha_script_html> --></div>
                        <button class="btn btn-main btn-lg" type="submit" id="send"
                                data-loading-text="<i class='fa fa-spinner fa-spin'></i> Отправление..."><i
                                class="fa fa-paper-plane "></i> Отправить
                        </button>
                    </div>
                    <input type="hidden" name="id" value="1"/>
                    <input type="hidden" name="a" value="1"/>
                    <input type="hidden" name="o" value="1"/>
                </form>

                <div id="result-message" role="alert"></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                <address>
                    <strong>Старомышастовская улица Садовая № 211</strong><br>
                    <a class="tel" href="tel:+79002475139">+79002475139</a>
                    <a class="tel" href="tel:+79885242737">+79885242737</a><br>
                    <a class="mail" href="mailto:web-originals@yandex.ru">web-originals@yandex.ru</a>
                </address>
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
