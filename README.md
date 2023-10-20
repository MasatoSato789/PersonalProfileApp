# PersonalProfileApp

# 起動方法
$ cd "プロジェクトフォルダ"   * gitクローンしたフォルダ  
$ make init  
$ docker compose build  
$ docker compose up -d  
$ docker compose exec app composer install  
$ docker compose exec app cp .env.example .env  
$ docker compose exec app php artisan key:generate  
$ docker compose exec app php artisan storage:link  
$ docker compose exec app chmod -R 777 storage bootstrap/cache  
$ docker compose exec app php artisan migrate:fresh  
$ npm install      
$ npm run dev  
http://localhost:8080/  

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

# Git コマンド
* developの作成(最新の開発履歴)  
$ git branch #現在の位置がmasterブランチか確認  
$ git branch develop #develop作成  
$ git checkout develop #developへの移動  
$ git push origin develop #remoteに反映  

* developへコミット  
$ git add . # サブディレクトリも含めたファイルをインデックス領域へアップ  
$ git commit -m "message" # ローカルリポジトリへコミット  
$ git push origin develop # developブランチの内容をoriginへアップロード  

* mainへのmerge  
$ git checkout main # mainブランチへ移動  
$ git merge develop # developブランチをmainブランチに取り込む  
$ git push origin main # developブランチの内容をmainへアップロード  

* ブランチを新規に取得する場合
$ git fetch origin develop # ローカルにdevelopブランチがない場合  
$ git checkout develop  