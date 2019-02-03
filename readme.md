## 開發Branch與Feature

## 基礎環境部署

- 使用Homestead作為開發環境
- Git與Github
- 初始化專案

## branch: static-pages

- 配置 .editorconfig
- 基礎頁面

## branch: filling-layout-style

- 初始化樣式(Laravel前端工作流：NPM, Yarn, Laravel Mix)
    - yarn install --no-bin-links
    - yarn add cross-env
    - npm run dev 或 npm run watch-poll
- 靜態文件瀏覽器緩存問題
- 切出header和footer
- 命名路由
- 使用者註冊頁面

## branch: modeling-users

- 移動user model到models資料夾

## branch: sign-up

- 使用者顯示頁面
- 使用者註冊表單
- 增加CSRF驗證
- 錯誤提示訊息
- 完成使用者註冊功能

## branch: login-logout

- 建立Session
- 登入成功後，選單邏輯
- 使用者登出
- 登入時記住我

## branch: user-crud

- 更改使用者資料
- 訪問權限控管
- 查看使用者列表
- 管理員可刪除使用者

## branch: account-activation-password-resets

- 使用者激活
- 重設密碼

## branch: user-statuses

- 微博 Model
- 微博使用者列表
- 發布微博
- 首頁：微博列表
- 刪除微博

## branch: following-users

- 粉絲資料表
- 社交統計資訊
- 追蹤和粉絲列表頁面
- 追蹤按鈕
- 追蹤使用者動態資訊
