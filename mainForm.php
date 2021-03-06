<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">

    <meta http-equiv="content-type" charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Toubans! -当番通知サービス</title>

    <link rel="stylesheet" href="style.css?<?php echo date('Ymd-Hi'); ?>" type="text/css">
    <link rel="stylesheet" href="modaal.css" type="text/css">
</head>

<body>
<h1 class="center margin_top"><a id="title" class="gradation">Toubans! 初期設定</a></h1>
<a class="alert-for-ios large_font">iOS(iPhone,iPad,iPod)をご利用の方へ：<br>LINEが最新バージョンにアップデートされているか必ず確認してください。<br>LINEのバージョンが最新ではない場合、このサービスは正しく動作しません。</a>
<form name = "tableInfo" method = "POST" action="input.php">
    <input type="hidden" id="group_id" value="" name="group_id">
    <div id="table_id_container"></div>
    <h2><a class="gradation xlarge_font">1. まず、通知内容を設定します。</a></h2>

    <!-- ▼LINE風ここから -->
    <div class="line__container">
        <!-- タイトル -->
        <!--<div class="line__title">
            メッセージのイメージ
        </div>-->
        <div class="form line__contents relax_container">
            <div class="line__left">
                <figure>
                    <img class="shadow" src="pic/icon.png"/>
                </figure>
                <div class="line__left-text">
                    <div class="name">当番お知らせBot</div>
                    <div class="text shadow">
                        <h3><label for="top_textarea" class="gradation large_font">1. 挨拶文（導入文）を入力</label></h3>
                        <select name="top_textarea_select" id="top_textarea_select" class="large_font pulldownmenu">
                            <option value="">(選択してください)</option>
                            <option value="今日の当番のお知らせです">今日の当番のお知らせです</option>
                            <option value="明日の当番のお知らせです">明日の当番のお知らせです</option>
                            <option value="（挨拶文を自分で入力する）">（挨拶文を自分で入力する）</option>
                        </select><br>
                        <input type="text" name="top_textarea" id="top_textarea" class="text_area large_font" placeholder="例）今日の当番のお知らせです"><br><br>

                        <h3><a class="gradation large_font">2.当番を設定する</a></h3><br><br>
                        <a href="#touban_modal" class="modal btn large_font">当番設定画面へ</a><br>

                        <div id="touban_modal" class="touban_container" style="display: none;">
                            <h3 class="no-margin-bottom"><a class="gradation xlarge_font">1. 当番名を入力</a></h3>

                            <div class = "roles">
                                <!--<a class="bold">役割</a><br>-->
                                <ol id="roles_list" class="touban_list_container large_font"><!-- "id" attribute is required -->
                                    <li class="roles_list_var"><!-- .(id)_var -->
                                        <div class="touban_form">
                                            <input type="text" data-name-format="roles_list[]" name="roles_list[]" id="roles_list_0" placeholder="例）お茶当番" class="text_area touban_text_area large_font vertical_fat">
                                            <button class="roles_list_del btn nowrap vertical_slim"><a class="nowrap large_font">削除</a></button><!-- .(id)_del -->
                                        </div>
                                    </li>
                                </ol>
                                <a href="javascript:void(0)" id="roles_list_add" class="roles_list_add btn roles_add_btn large_font">役割を追加</a>
                            </div>

                            <br><br>

                            <h3 class="no-margin-bottom"><a class="gradation xlarge_font">2. メンバー／班などを入力</a></h3>
                            <a class="large_font">※メンバー追加ボタンを押して、当番を回したい全てのメンバー（班）の名前を入力します。<br> 番号順に当番が回ります</a><br><br>
                            <div class="members">
                                <!--<a class="bold">メンバー</a><br>-->
                                <ol id="members_list" class="touban_list_container large_font"><!-- "id" attribute is required -->
                                    <li class="members_list_var"><!-- .(id)_var -->
                                        <div class="touban_form">
                                            <input type="text" data-name-format="members_list[]" name="members_list[]" id="members_list_0" placeholder="例）田中さん" class="text_area touban_text_area large_font vertical_fat">
                                            <button class="members_list_del btn vertical_slim"><a class="nowrap large_font">削除</a></button><!-- .(id)_del -->
                                        </div>
                                    </li>
                                </ol>
                                <a href="javascript:void(0)" id="members_list_add" class="members_list_add btn members_add_btn large_font">メンバーを追加</a>
                            </div>

                            <br>


                            <h3><a href="javascript:void(0)" class="button" id="modaal_close">完了</a></h3>
                        </div>

                        <!--<a>回し方</a><br>
                        <input type="radio" id="block_size_day" name="block_size_radio" value="0" checked><label for="block_size_day">日</label>
                        <input type="radio" id="block_size_week" name="block_size_radio" value="1"><label for="block_size_week">週</label>
                        <input type="radio" id="block_size_month" name="block_size_radio" value="2"><label for="block_size_month">月</label><br>-->
                        <br><br><h3><label for="lower_textarea" class="gradation large_font">3. 締めの文を入力</label></h3>
                        <select name="lower_textarea_select" id="lower_textarea_select" class="large_font pulldownmenu">
                            <option value="">(選択してください)</option>
                            <option value="よろしくお願いします。">よろしくお願いします。</option>
                            <option value="確認しておいてください。">確認しておいてください。</option>
                            <option value="（締めの文を自分で入力する）">（締めの文を自分で入力する）</option>
                        </select><br>
                        <input type="text" name="lower_textarea" id="lower_textarea" class="text_area large_font" placeholder="例）よろしくお願いします">
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </div>

    <br>

        <div class="notification_settings">


            <div class="notification_date_container">
                <h2><a class="gradation xlarge_font">2. 次に、通知のタイミングを設定します。</a></h2><br>
                <h3><a class="gradation large_font">1. 通知する日を設定</a></h3>
                <select name="notification_span" id="notification_span" class="large_font">
                    <option value="3">（周期を選択して下さい）</option>
                    <option value="0">毎日1回の通知（曜日を選択）</option>
                    <option value="2">毎週1回の通知（曜日を選択)</option>
                    <option value="1">毎月1回の通知（日付を選択)</option>
                </select>
                <!--曜日を選んだときの通知設定-->
                <div class="notification_dsoW large_font"><br><a>通知を行う曜日を選択して下さい(複数選択可)</a><br>
                    <div class="notification_dsoW_checkboxes checkboxes">
                        <input type="checkbox" id="checkbox_sunday" name="notification_dsoW[]" class="checkbox notification_dsoW_checkbox transition" value="0">
                        <label class="checkbox_label" for="checkbox_sunday">日</label>
                        <input type="checkbox" id="checkbox_monday" name="notification_dsoW[]" value="1" class="checkbox transition notification_dsoW_checkbox">
                        <label class="checkbox_label" for="checkbox_monday">月</label>
                        <input type="checkbox" id="checkbox_tuesday" name="notification_dsoW[]" value="2" class="checkbox transition notification_dsoW_checkbox">
                        <label class="checkbox_label" for="checkbox_tuesday">火</label>
                        <input type="checkbox" id="checkbox_wednesday" name="notification_dsoW[]" value="3" class="checkbox transition notification_dsoW_checkbox">
                        <label class="checkbox_label" for="checkbox_wednesday">水</label>
                        <input type="checkbox" id="checkbox_thursday" name="notification_dsoW[]" value="4" class="checkbox transition notification_dsoW_checkbox">
                        <label class="checkbox_label" for="checkbox_thursday">木</label>
                        <input type="checkbox" id="checkbox_friday" name="notification_dsoW[]" value="5" class="checkbox transition notification_dsoW_checkbox">
                        <label class="checkbox_label" for="checkbox_friday">金</label>
                        <input type="checkbox" id="checkbox_saturday" name="notification_dsoW[]" class="checkbox transition notification_dsoW_checkbox" value="6">
                        <label class="checkbox_label" for="checkbox_saturday">土</label>
                    </div>
                </div>


                <!--週を選んだときの通知設定-->
                <div class="notification_doW large_font">
                    <br><a>通知を行う曜日を選択して下さい</a><br>
                    <div class="notification_doW_radios">

                        <input type="radio" id="radio_sunday" name="notification_doW"  value="0"><label for="radio_sunday" class="radio_label">日</label>
                        <input type="radio" id="radio_monday" name="notification_doW" value="1"><label for="radio_monday" class="radio_label">月</label>
                        <input type="radio" id="radio_tuesday" name="notification_doW" value="2"><label for="radio_tuesday" class="radio_label">火</label>
                        <input type="radio" id="radio_wednesday" name="notification_doW" value="3"><label for="radio_wednesday" class="radio_label">水</label>
                        <input type="radio" id="radio_thursday" name="notification_doW" value="4"><label for="radio_thursday" class="radio_label">木</label>
                        <input type="radio" id="radio_friday" name="notification_doW" value="5"><label for="radio_friday" class="radio_label">金</label>
                        <input type="radio" id="radio_saturday" name="notification_doW" value="6"><label for="radio_saturday" class="radio_label">土</label>
                    </div>
                </div>


                <!--月を選んだときの通知設定-->
                <div class="notification_doM large_font">
                    <br>
                        <!--<a>通知する月を選択して下さい</a><br>
                        <input type="checkbox" id="january" name="notification_months[]" value="1" checked><label for="january">1月</label>
                        <input type="checkbox" id="february" name="notification_months[]" value="2" checked><label for="february">2月</label>
                        <input type="checkbox" id="march" name="notification_months[]" value="3" checked><label for="march">3月</label>
                        <input type="checkbox" id="april" name="notification_months[]" value="4" checked><label for="april">4月</label>
                        <input type="checkbox" id="may" name="notification_months[]" value="5" checked><label for="may">5月</label>
                        <input type="checkbox" id="june" name="notification_months[]" value="6" checked><label for="june">6月</label>
                        <input type="checkbox" id="july" name="notification_months[]" value="7" checked><label for="july">7月</label>
                        <input type="checkbox" id="august" name="notification_months[]" value="8" checked><label for="august">8月</label>
                        <input type="checkbox" id="september" name="notification_months[]" value="9" checked><label for="september">9月</label>
                        <input type="checkbox" id="october" name="notification_months[]" value="10" checked><label for="october">10月</label>
                        <input type="checkbox" id="november" name="notification_months[]" value="11" checked><label for="november">11月</label>
                        <input type="checkbox" id="december" name="notification_months[]" value="12" checked><label for="december">12月</label>
                    <a>の</a>-->
                    <select name="notification_doM" id="notification_doM" class="large_font">
                        <option value="1">1日</option>
                        <option value="2">2日</option>
                        <option value="3">3日</option>
                        <option value="4">4日</option>
                        <option value="5">5日</option>
                        <option value="6">6日</option>
                        <option value="7">7日</option>
                        <option value="8">8日</option>
                        <option value="9">9日</option>
                        <option value="10">10日</option>
                        <option value="11">11日</option>
                        <option value="12">12日</option>
                        <option value="13">13日</option>
                        <option value="14">14日</option>
                        <option value="15">15日</option>
                        <option value="16">16日</option>
                        <option value="17">17日</option>
                        <option value="18">18日</option>
                        <option value="19">19日</option>
                        <option value="20">20日</option>
                        <option value="21">21日</option>
                        <option value="22">22日</option>
                        <option value="23">23日</option>
                        <option value="24">24日</option>
                        <option value="25">25日</option>
                        <option value="26">26日</option>
                        <option value="27">27日</option>
                        <option value="28">28日</option>
                        <option value="29">29日</option>
                        <option value="30">30日</option>
                        <option value="31">31日</option>
                    </select><br>
                    <a>
                        ※6月における31日など、その月にはない日にちが指定されていた場合、自動的に月末となります。<br>
                        例)31日を指定した場合、6月は30日に通知が行われる
                    </a>
                </div>

                <h3><a class="gradation large_font">2. 通知する時間を設定</a></h3>

                <input type="time" id="notification_time" name="notification_time" class="large_font">

            </div>
        </div><br>

        <div class="gradation_button" id="submit-button">
            <button type="submit" class="button"><a>設定完了</a></button>
        </div>

</form>

<div id="liffdata">
    <h2>LIFF Data</h2>
    <table border="1">
        <tr>
            <th>language</th>
            <td id="languagefield"></td>
        </tr>
        <tr>
            <th>context.viewType</th>
            <td id="viewtypefield"></td>
        </tr>
        <tr>
            <th>context.userId</th>
            <td id="useridfield"></td>
        </tr>
        <tr>
            <th>context.utouId</th>
            <td id="utouidfield"></td>
        </tr>
        <tr>
            <th>context.roomId</th>
            <td id="roomidfield"></td>
        </tr>
        <tr>
            <th>context.groupId</th>
            <td id="groupidfield"></td>
        </tr>
    </table>
</div>

<!--scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.add-input-area@4.11.0/dist/jquery.add-input-area.min.js"></script>
<script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.12.0/validate.min.js"></script>
<script src="autosize.js"></script>
<script src="script.js"></script>
<!--<script src="liff-starter.js"></script>-->
<script src="modaal.min.js"></script>
<script src="jquery.add-input-area.min.js"></script>
</body>