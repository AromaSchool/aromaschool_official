# 禾場官網

## 建置

- 安裝`php`套件管理工具[composer](https://getcomposer.org/)

  - Windows

    - 下載[安裝檔](https://getcomposer.org/Composer-Setup.exe)，並執行安裝

    - 驗證安裝

      ```cmd
      composer -V
      ```

  - Mac / Linux

    - 下載`composer`安裝檔

      ```bash
      php -r "copy('<https://getcomposer.org/installer>', 'composer-setup.php');"
      ```

    - 使用`SHA-384`來驗證安裝檔是否正確

      ```bash
      php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
      `
      ```

    - 執行安裝

      ```bash
      php composer-setup.php --install-dir=/bin --filename=composer
      ```

    - 移除安裝檔

      ```bash
      php -r "unlink('composer-setup.php');"
      ```

    - 檢查安裝是否正確

      ```bash
      composer -V
      ```

    - 將`composer`插件路徑加到系統`PATH`環境變數中

      ```bash
      echo "export PATH=\"~/.composer/vendor/bin:$PATH\"" >> ~/.bashrc
      source ~/.bashrc
      ```

- 使用`composer`安裝`php`套件

  ```bash
  composer install
  ```

- 產生後端所需的設定檔`.env`

  - 複製一份`.env.example`，並重新命名為`.env`

  - 或是使用指令

    ```bash
    cp .env.example .env
    ```

- 產生`APP_KEY`，用來加密`cookie`，為運行`Laravel`的必須參數

  ```bash
  php artisan key:generate
  ```

- 下載前端套件

  ```bash
  npm install
  # or
  yarn install
  ```

## 郵件設置

- 修改`.env`設定

  - `MAIL_USERNAME`：信箱帳號
  - `MAIL_PASSWORD`：信箱密碼
  - `MAIL_FROM_ADDRESS`：顯示寄件者信箱

  範例：

  ```ini
  MAIL_USERNAME=example@gmail.com
  MAIL_PASSWORD=P@ssw0rd
  MAIL_FROM_ADDRESS=example@gmail.com
  ```

## 執行

- 前端開發模式

  ```bash
  npm run watch
  # or
  yarn watch
  ```

- 運行後端API

  ```bash
  php artisan serve
  ```

- 在瀏覽器中開啟 <http://localhost:8000>

## 套件

- [laravel/laravel](https://github.com/laravel/laravel)

- [vuejs/vue](https://github.com/vuejs/vue)

- [vuejs/vue-router](https://github.com/vuejs/vue-router)
