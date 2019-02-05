## 簡介

該專案屬於使用Laravel建構類似新浪微博的應用，其中使用到如HTML、CSS、JavaScript、PHP和Laravel等Web開發相關的基礎知識。並且針對這些基礎的知識點進行延伸擴展，例如：Git工作流程、Gulp前端工作流程、Bootstrap框架基本使用等。

## 開發規劃
### Laravel前端工作流：NPM, Yarn, Laravel Mix
```
yarn install --no-bin-links
yarn add cross-env
npm run dev 或 npm run watch-poll
```

| Baranch      | Feature     |
| -------------|-------------|
| 基礎環境部署| 使用Homestead作為開發環境|
|| Git與Github|
|| 初始化專案|
|static-pages|配置 .editorconfig|
||基礎頁面|
|filling-layout-style|初始化樣式|
||靜態文件瀏覽器緩存問題|
||切出header和footer|
||命名路由|
||使用者註冊頁面|
|modeling-users|移動user model到models資料夾|
|sign-up|使用者顯示頁面|
||使用者註冊表單|
||增加CSRF驗證|
||錯誤提示訊息|
||完成使用者註冊功能|
|login-logout|建立Session|
||登入成功後，選單邏輯|
||使用者登出|
||登入時記住我|
|user-crud|更改使用者資料|
||訪問權限控管|
||查看使用者列表|
||管理員可刪除使用者|
|account-activation-password-resets|使用者Email激活|
||重設密碼|
|user-statuses|微博 Model|
||微博使用者列表|
||發布微博|
||首頁：微博列表|
||刪除微博|
|following-users|粉絲資料表|
||社交統計資訊|
||追蹤和粉絲列表頁面|
||追蹤按鈕|
||追蹤使用者動態資訊|

## 專有名詞索引

|知識點         | 內容         |
| -------------|-------------|
|先備知識|PHP|
||Laravel|
||MVC|
|環境部署|Sublime Text|
||Command Line|
||VirtualBox|
||Vagrant|
||Homestead|
||Homestead管理腳本|
||Homestead Box|
||Composer|
||Git|
||Github|
||Git Branch|
||SSH|
|建構頁面和優化頁面|Artisan|
||Bootstrap|
||NPM|
||Yarn|
||SASS|
||Laravel Mix|
||Blade|
||Routes|
|Models|Eloquent ORM|
||DB Migration|
||SequelPro|
||Tinker|
||Gravatar|
|使用者註冊|RESTful|
|Session管理|Session|
||jQuery|
|使用者CRUD|Middleware|
||factory|
||Seeder|
||Faker|
