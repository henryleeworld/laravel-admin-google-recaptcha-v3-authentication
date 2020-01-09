# Laravel 6 後臺管理 Google reCAPTCHA v3 （以分數驗證要求）登入

在後臺登入頁面中確保只有擁有正確密碼的真人可以存取帳戶，以使用者行為做為判斷是否為自動化程式的基準，需要大量分析行為數據，網站使用者不再需要透過圖型驗證碼來證明自己不是機器人，而是透過在網站後段自動紀錄使用者在網站中瀏覽的行為過程，如果有類似在連絡表單中不斷提交重複文字之類的行為時，將會將其判定為機器人。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以登入經由 `/register` 來進行註冊。

----

## 畫面截圖
![](https://i.imgur.com/m4mkHOH.png)
> 申請 Google reCAPTCHA v3 人工智慧驗證機制

![](https://i.imgur.com/1gRKVEX.png)
> 網站的右下角會有 Goolge reCAPTCHA 的標示，讓網站管理者知道 reCAPTCHA 已經啟用了
