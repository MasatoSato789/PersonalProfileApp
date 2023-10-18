# PersonalProfileApp

# PypMyAdmin
* http://localhost:3001/
* サーバ：db
* ユーザ：phper
* パスワード：secret

# phpinfo
http://localhost:8080/phpinfo

# smtp mail ※test用
* アカウントID：masato789
* test.aaa.789789789@gmail.com   PW：ZAQ!xsw2
* 二段階認証プロセス　090-5496-4411
* アプリパスワード：zaq!XSW2 →　xngxjzqrllzutoeg

.envファイル
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=587
MAIL_USERNAME=test.aaa.789789789@gmail.com
MAIL_PASSWORD=xngxjzqrllzutoeg
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=test.aaa.789789789@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

★確認用コマンド
$ php artisan tinker
$ Mail::raw('test mail', function($message) {$message->to('masato.sato@prum.jp')->subject('Test');});
