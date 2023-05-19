# PHP_Imagenes

Este repositorio contiene un proyecto en PHP para la gestión de imágenes. Permite subir, visualizar y eliminar imágenes de forma sencilla.

## Versión

La versión actual del proyecto es 0.0.1. Este es un lanzamiento inicial y se encuentra en una etapa temprana de desarrollo. A medida que el proyecto evolucione, se agregarán nuevas características y mejoras.

## Características

- Subida de imágenes: los usuarios pueden subir imágenes desde su dispositivo al servidor.
- Visualización de imágenes: las imágenes cargadas se muestran en una galería para que los usuarios puedan verlas.
- Eliminación de imágenes: los usuarios pueden eliminar imágenes existentes del servidor.

## Próximas características

En futuras versiones del proyecto, se planea implementar las siguientes características:

- Login para usuarios: se agregará un sistema de autenticación que permitirá a los usuarios iniciar sesión y tener una experiencia personalizada.
- Login para programadores: los desarrolladores podrán acceder a una interfaz especializada con funciones adicionales para la gestión avanzada de imágenes.
- Link especial para hacer fetch: se proporcionará un enlace especial que permitirá a los desarrolladores obtener datos de imágenes a través de una solicitud HTTP (fetch).

## Requisitos del sistema

Para ejecutar este proyecto en su entorno local, asegúrese de tener los siguientes requisitos:

- Servidor web con soporte para PHP (por ejemplo, Apache o Nginx).
- PHP 7.0 o superior instalado.
- Extensión PHP GD habilitada (para el procesamiento de imágenes).

## Instalación

Siga estos pasos para configurar el proyecto en su entorno local:

1. Clone este repositorio en su máquina local: `git clone https://github.com/miusarname/PHP_Imagenes.git`.
2. Coloque los archivos clonados en el directorio raíz de su servidor web.
3. Asegúrese de que los permisos de escritura estén habilitados en el directorio `uploads/` para permitir la subida de imágenes.
4. Configure la conexión a la base de datos modificando el archivo `config.php` con los detalles de su servidor de base de datos.
5. Importe el archivo SQL `database.sql` en su base de datos para crear la estructura necesaria.
6. Acceda al proyecto a través de su navegador web.

## Uso

Una vez que el proyecto esté instalado y configurado correctamente, puede comenzar a utilizarlo:

1. Página principal: en esta página, los usuarios pueden cargar imágenes utilizando el formulario proporcionado. Las imágenes se mostrarán en la galería.
2. Galería: aquí se muestran todas las imágenes cargadas en orden cronológico inverso. Los usuarios pueden hacer clic en una imagen para verla en tamaño completo.
3. Eliminar imagen: los usuarios pueden eliminar una imagen haciendo clic en el botón "Eliminar" debajo de la imagen en la galería.

## Contribución

¡Se agradecen las contribuciones al proyecto! Si desea contribuir, siga estos pasos:

1. Fork este repositorio.
2. Cree una rama con el nombre de su función o corrección de errores: `git checkout -b nombre-de-la-rama`.
3. Realice los cambios deseados y realice los commits: `git commit -m "Descripción de los cambios"`.
4. Envíe sus cambios a la rama principal: git push origin nombre-de-la-rama`.
5. Abra una pull request en este repositorio y describa los cambios que ha realizado.

## Licencia

Este proyecto se distribuye bajo la Licencia MIT. Si usa este proyecto, se recomienda incluir una referencia o enlace al repositorio original.


# English Documentation

This repository contains a PHP project for image management. It allows users to upload, view, and delete images easily.

## Version

The current version of the project is 0.0.1. This is an initial release and is in an early stage of development. As the project evolves, new features and improvements will be added.

## Features

- Image uploading: Users can upload images from their devices to the server.
- Image viewing: Uploaded images are displayed in a gallery for users to view.
- Image deletion: Users can delete existing images from the server.

## Upcoming Features

In future versions of the project, the following features are planned to be implemented:

- User login: An authentication system will be added, allowing users to log in and have a personalized experience.
- Developer login: Developers will be able to access a specialized interface with additional functions for advanced image management.
- Special fetch link: A special link will be provided for developers to fetch image data through an HTTP request.

## System Requirements

To run this project in your local environment, make sure you have the following requirements:

- Web server with PHP support (e.g., Apache or Nginx).
- PHP 7.0 or higher installed.
- Enabled PHP GD extension (for image processing).

## Installation

Follow these steps to set up the project in your local environment:

1. Clone this repository to your local machine: `git clone https://github.com/miusarname/PHP_Images.git`.
2. Place the cloned files in the root directory of your web server.
3. Ensure that write permissions are enabled in the `uploads/` directory to allow image uploads.
4. Configure the database connection by modifying the `config.php` file with your database server details.
5. Import the `database.sql` SQL file into your database to create the necessary structure.
6. Access the project through your web browser.

## Usage

Once the project is successfully installed and configured, you can start using it:

1. Home page: On this page, users can upload images using the provided form. The images will be displayed in the gallery.
2. Gallery: All uploaded images are shown here in reverse chronological order. Users can click on an image to view it in full size.
3. Delete image: Users can delete an image by clicking the "Delete" button below the image in the gallery.

## Contribution

Contributions to the project are welcome! If you would like to contribute, follow these steps:

1. Fork this repository.
2. Create a branch with a descriptive name for your feature or bug fix: `git checkout -b branch-name`.
3. Make the desired changes and commit them: `git commit -m "Description of the changes"`.
4. Push your changes to the main branch: `git push origin branch-name`.
5. Open a pull request in this repository and describe the changes you have made.

## License

This project is distributed under the [MIT License](LICENSE). If you use this project, it is recommended to include a reference or link to the original repository.

## Contact

If you have any questions or suggestions about the project, feel free to contact the author at [oscarm.alvarez6@gmail.com](mailto:email@example.com).

Thank you for using PHP_Images! We hope it serves your image management needs.

# PHP_图片管理

该存储库包含用于图片管理的PHP项目。它允许用户轻松上传、查看和删除图片。

## 版本

当前版本为0.0.1。这是一个初始版本，处于开发的早期阶段。随着项目的发展，将添加新功能和改进。

## 功能

- 图片上传：用户可以从设备上传图片到服务器。
- 图片查看：已上传的图片在图库中显示供用户查看。
- 图片删除：用户可以删除服务器上的现有图片。

## 即将添加的功能

在项目的未来版本中，计划添加以下功能：

- 用户登录：将添加身份验证系统，允许用户登录并获得个性化体验。
- 开发者登录：开发者将能够访问专用界面，具有用于高级图片管理的附加功能。
- 特殊获取链接：将提供特殊链接，允许开发者通过HTTP请求获取图片数据。

## 系统要求

要在本地环境中运行该项目，请确保满足以下要求：

- 支持PHP的Web服务器（例如Apache或Nginx）。
- 安装了PHP 7.0或更高版本。
- 启用了PHP GD扩展（用于图像处理）。

## 安装

按照以下步骤在本地环境中设置项目：

1. 将该存储库克隆到本地计算机：`git clone https://github.com/miusarname/PHP_图片管理.git`。
2. 将克隆的文件放置在Web服务器的根目录。
3. 确保`uploads/`目录具有写入权限，以允许上传图片。
4. 通过修改`config.php`文件中的数据库连接信息来配置数据库。
5. 将`database.sql` SQL文件导入数据库以创建所需的结构。
6. 通过Web浏览器访问项目。

## 使用

成功安装和配置项目后，您可以开始使用：

1. 主页：在该页面上，用户可以使用提供的表单上传图片。上传的图片将在图库中显示。
2. 图库：在此处以逆序显示所有已上传的图片。用户可以单击图片以查看完整尺寸。
3. 删除图片：用户可以通过单击图库中图片下方的“删除”按钮来删除图片。

## 贡献

欢迎对该项目进行贡献！如果您想做出贡献，请按照以下步骤操作：

1. Fork该存储库。
2. 创建一个以您的功能或错误修复命名的分支：`git checkout -b branch-name`。
3. 进行所需的更改并提交它们：`git commit -m "更改描述"`。
4. 将更改推送到主分支：`git push origin branch-name`。
5. 在该 存储库中打开一个pull request，并描述您所做的更改。

## 许可证
该项目采用MIT许可证进行分发。如果您使用该项目，建议包含对原始存储库的引用或链接。

## 联系方式

如果您对该项目有任何问题或建议，请随时通过oscarm.alvarez6@gmail.com与作者联系。

感谢您使用PHP_图片管理！希望它能满足您的图片管理需求。


# PHP_画像管理

このリポジトリには、画像管理のためのPHPプロジェクトが含まれています。ユーザーは簡単に画像をアップロード、表示、削除することができます。

## バージョン

現在のバージョンは0.0.1です。これは初期リリースであり、開発の初期段階です。プロジェクトの進化に伴い、新機能や改善が追加されます。

## 機能

- 画像のアップロード：ユーザーはデバイスから画像をサーバーにアップロードできます。
- 画像の表示：アップロードされた画像はギャラリーに表示され、ユーザーが閲覧できます。
- 画像の削除：ユーザーはサーバー上の既存の画像を削除できます。

## 追加予定の機能

将来のバージョンでは、次の機能を実装する予定です：

- ユーザーログイン：ユーザー認証システムを追加し、ユーザーがログインしてパーソナライズされた体験をすることができるようにします。
- 開発者ログイン：開発者は、高度な画像管理機能を備えた専用のインターフェースにアクセスできるようにします。
- 特別な取得リンク：開発者がHTTPリクエストを介して画像データを取得するための特別なリンクを提供します。

## システム要件

このプロジェクトをローカル環境で実行するためには、次の要件を満たしてください：

- PHPをサポートするWebサーバー（例：ApacheまたはNginx）。
- PHP 7.0以上がインストールされていること。
- PHP GD拡張機能が有効になっていること（画像の処理に使用）。

## インストール

次の手順でプロジェクトをローカル環境に設定してください：

1. このリポジトリをローカルマシンにクローンします：`git clone https://github.com/miusarname/PHP_画像管理.git`。
2. クローンしたファイルをWebサーバーのルートディレクトリに配置します。
3. 画像のアップロードを許可するために、`uploads/`ディレクトリに書き 込み権限が有効になっていることを確認します。
4. config.phpファイルを編集し、データベースサーバーの詳細を設定します。
5. database.sql SQLファイルをデータベースにインポートし、必要な構造を作成します。
6. Webブラウザでプロジェクトにアクセスします。

## 使用方法

プロジェクトが正常にインストールおよび設定されたら、次のように使用できます：
 1. ホームページ：このページでは、提供されたフォームを使用して画像をアップロードできます。アップロードした画像はギャラリーに表示されます。
 2. ギャラリー：アップロードされたすべての画像がここに逆順で表示されます。ユーザーは画像をクリックしてフルサイズで表示することができます。
 3. 画像の削除：ユーザーはギャラリーの画像の下にある「削除」ボタンをクリックして画像を削除できます。

## 貢献
プロジェクトへの貢献は歓迎です！貢献する場合は、次の手順に従ってください：
 1. このリポジトリをフォークします。
 2. 機能やバグ修正のために記述的な名前のブランチを作成します：git checkout -b branch-name。
 3. 必要な変更を行い、コミットします：git commit -m "変更の説明"。
 4. 変更をメインブランチにプッシュします：git push origin branch-name。
 5. このリポジトリでプルリクエストを作成し、行った変更を説明します。


## ライセンス
このプロジェクトは、MITライセンスの下で配布されています。プロジェクトを使用する場合は、元のリポジトリへの参照またはリンクを含めることを推奨します。



