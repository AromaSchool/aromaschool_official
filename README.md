# 禾場官網

![node](https://img.shields.io/badge/node-^v14.16.0-brightgreen) ![php](https://img.shields.io/badge/php-7.4-blueviolet)

## 建置

- 安裝`nodejs`，選擇版本`v14`

  至官網下載：<https://nodejs.org/en/>

- 安裝`php`

  - Windows

    至官網下載：<https://windows.php.net/download#php-7.4>

  - Mac

    - 安裝`brew`

      ```bash
      /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
      echo 'eval "$(/opt/homebrew/bin/brew shellenv)"' >> ~/.zprofile
      eval "$(/opt/homebrew/bin/brew shellenv)"
      ```

    - 使用`brew`指令安裝裝`php7.4`

      ```bash
      brew install php@7.4
      ```

    - 啟動`php`服務

      ```bash
      brew services start php
      ```

    - 切換目前版本至`php7.4`

      ```bash
      brew link php@7.4
      ```

    - 重新讀取環境變數

      ```bash
      exec $SHELL
      ```

      或是關掉終端機後重啟

    - 查看`php`版本

      ```php
      php -v
      ```

  - Linux

    使用[phpbrew](https://github.com/phpbrew/phpbrew)安裝`php7.4`

- 安裝`php`套件管理工具[composer](https://getcomposer.org/)

  - Windows

    - 下載[安裝檔](https://getcomposer.org/Composer-Setup.exe)，並執行安裝

    - 驗證安裝

      ```bash
      composer -V
      ```

  - Mac / Linux

    - 下載`composer`安裝檔

      ```bash
      php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
      ```

    - 使用`SHA-384`來驗證安裝檔是否正確

      ```bash
      php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
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
      composer -v
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

## 檔案路徑

- 修改`.env`設定

  - `STORAGE_URL`：後台系統網址，因為檔案上傳皆是傳送到後台的資料夾

## Google reCAPTCHA

- 申請

  - 至<https://www.google.com/recaptcha/about/>，點選`v3 Admin Console`進行申請

- 修改`.env`設定

  - `MIX_RECAPTCHA_SITE_KEY`：網站金鑰
  - `RECAPTCHA_SECRET_KEY`：密鑰

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
