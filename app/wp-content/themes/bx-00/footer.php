</main>
<footer class="o-container o-container:footer">
    <ul class="o-cluster o-cluster:ftNav">
        <li class="o-cluster__ftItem"><a class="c-link c-link:ftNav"
                href="<?php echo home_url('/company');?>">会社情報</a>
        </li>
        <li class="o-cluster__ftItem"><a class="c-link c-link:ftNav"
                href="<?php echo home_url('/terms');?>">利用規約</a>
        </li>
        <li class="o-cluster__ftItem"><a class="c-link c-link:ftNav"
                href="<?php echo home_url('/privacy-policy');?>">プライバシーポリシー</a>
        </li>
        <li class="o-cluster__ftItem"><a class="c-link c-link:ftNav"
                href="<?php echo home_url('/inquiry');?>">お問い合わせ</a>
        </li>
    </ul>
    <div class="c-footer-logo">
        <a class="c-logo c-logo:footer"
            href="<?php echo home_url();?>">
            <svg width="32" height="21" viewBox="0 0 32 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.9986 13.7163L24.0002 20.5753L19.9992 13.7163H27.9986Z" fill="#6BA4CC" />
                <path d="M15.9998 20.5753L19.9997 13.7158L23.9996 20.5753H15.9998Z" fill="#70A9CF" />
                <path d="M19.9987 13.7163L15.9998 20.5753L11.9998 13.7163H19.9987Z" fill="#8DC6DF" />
                <path d="M7.99988 20.5753L11.9998 13.7158L15.9997 20.5753H7.99988Z" fill="#8FC5DE" />
                <path d="M0 20.5753L3.99994 13.7163L7.99987 20.5758L0 20.5753Z" fill="#7EAFD2" />
                <path d="M32 6.85895L28.0001 13.7163L23.9996 6.85895H32Z" fill="#83C1DB" />
                <path d="M19.9997 13.7163L23.9991 6.85895L27.9985 13.7163H19.9997Z" fill="#7BB6D6" />
                <path d="M23.9996 6.85895L19.9997 13.7163L15.9998 6.85895H23.9996Z" fill="#76ACD1" />
                <path d="M11.9998 13.7163L15.9998 6.85895L19.9987 13.7163H11.9998Z" fill="#84BBD9" />
                <path d="M15.9997 6.85895L11.9998 13.7163L7.99988 6.85895H15.9997Z" fill="#72A7CE" />
                <path d="M3.99994 13.7163L7.99987 6.85895L11.9988 13.7163H3.99994Z" fill="#6393C4" />
                <path d="M23.9996 6.85894L27.9991 0L31.9995 6.85946L23.9996 6.85894Z" fill="#94D0E4" />
                <path d="M15.9998 6.85894L19.9997 0L23.9996 6.85946L15.9998 6.85894Z" fill="#81B7D6" />
                <path d="M7.99988 6.85894L11.9998 0L15.9997 6.85946L7.99988 6.85894Z" fill="#72A7CE" />
                <path d="M11.9988 0L7.99987 6.85894L3.99994 0H11.9988Z" fill="#689CC8" />
            </svg>
        </a>
        <dl class="o-stack o-stack:bottomDetail">
            <dt class="c-footer-label">
                <a class="c-footer-label__link"
                    href="<?php echo home_url();?>">
                    <?php echo get_vars('site', 'name');?>
                </a>
            </dt>
            <dd class="c-footer-address">
                〒<?php echo get_vars('company', 'zip');?><br />
                <?php echo get_vars('company', 'address');?>
            </dd>
        </dl>
    </div>
    <p class="c-copyright">
        <?php echo get_vars('site', 'copyright');?>
    </p>
</footer>
<?php wp_footer();?>
</body>

</html>