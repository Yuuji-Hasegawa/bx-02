<?php get_header();?>
<div class="o-container o-container:main">
    <div class="c-inner-wrap u-pt-l u-pb-l">
        <h2 class="c-heading">募集要項</h2>
        <dl class="c-table u-mb-m">
            <dt class="c-table__title">勤務形態</dt>
            <dd class="c-table__content">正社員・アルバイト</dd>
            <dt class="c-table__title">給与</dt>
            <dd class="c-table__content">
                <p>・未経験者<br />時給 1500円</p>
                <p>・経験者<br />経験・能力を考慮の上、当社規定により決定</p>
            </dd>
            <dt class="c-table__title">諸手当</dt>
            <dd class="c-table__content">時間外勤務手当、通勤手当、転居手当等</dd>
            <dt class="c-table__title">勤務地</dt>
            <dd class="c-table__content">大阪市北区xx町xx-xx</dd>
            <dt class="c-table__title">休日・休暇</dt>
            <dd class="c-table__content">
                完全週休2日制、夏季休暇、年末年始休暇、有給休暇、リフレッシュ休暇（勤続3年毎に3日間）
            </dd>
            <dt class="c-table__title">勤務時間</dt>
            <dd class="c-table__content">始業時刻9:00～10:00、終業時間17:30～18:30（実労働7.5時間/1日）</dd>
            <dt class="c-table__title">社会保険</dt>
            <dd class="c-table__content">健康保険、厚生年金、雇用保険、労災保険</dd>
            <dt class="c-table__title">その他</dt>
            <dd class="c-table__content">ダミーテキスト</dd>
        </dl>
        <h3 class="c-min-heading">応募フォーム</h3>
        <!-- do shortcode -->
        <dl class="c-table">
            <dt class="c-table__title">お名前</dt>
            <dd class="c-table__content">
                <input class="c-input" type="text" placeholder="例）お名前" />
            </dd>
            <dt class="c-table__title c-table__title:require">メールアドレス</dt>
            <dd class="c-table__content">
                <input class="c-input" type="text" placeholder="例）info@examples.com" />
            </dd>
            <dt class="c-table__title">メッセージ</dt>
            <dd class="c-table__content">
                <textarea class="c-input" placeholder="志望動機など、お気軽にご入力ください"></textarea>
            </dd>
        </dl>
        <label class="o-grid o-grid:accept">
            <input class="c-checkbtn" type="checkbox" />
            <a class="c-link c-link:inline" href="#" target="_blank" rel="noopener"> プライバシーポリシー </a>
            に同意する
        </label>
        <button class="c-btn c-btn--submit" type="submit">送信</button>
        <!-- // do shortcode -->
        <ul class="o-stack o-stack:announce">
            <li>内容確認等のため、返信にお時間を頂くことがございます。予めご了承ください。</li>
            <li>
                万が一、一週間経っても返信がない場合は大変お手数ですが、
                <a class="c-link c-link:inline" href="mailto:info@examples.com" target="_blank" rel="noopener">
                    info@examples.com
                </a>
                までご連絡ください。
            </li>
        </ul>
    </div>
</div>
<?php get_footer();
